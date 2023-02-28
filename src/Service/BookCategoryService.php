<?php


namespace App\Service;


use App\Entity\BookCategory;
use App\Exception\BookCategoryNotEmptyException;
use App\Model\BookCategory as BookCategoryModel;
use App\Model\BookCategoryListResponse;
use App\Model\BookCategoryUpdateRequest;
use App\Model\IdResponse;
use App\Repository\BookCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class BookCategoryService
{
    public function __construct(
        private BookCategoryRepository $bookCategoryRepository,
        private EntityManagerInterface $em,
        private SluggerInterface $slugger)
    {

    }

    public function getCategories(): BookCategoryListResponse
    {
        $categories = $this->bookCategoryRepository->findAllSortedByTitle();
        $items = array_map(
            fn(BookCategory $bookCategory) => new BookCategoryModel(
                $bookCategory->getId(), $bookCategory->getTitle(), $bookCategory->getSlug()
            ),
            $categories
        );
        return new BookCategoryListResponse($items);
    }

    //удаление категории
    public function deleteCategory(int $id): void
    {
        $category = $this->bookCategoryRepository->getById($id);
        $bookscount = $this->bookCategoryRepository->countBooksInCategory($category->getId());
        if ($bookscount > 0) {
            throw new BookCategoryNotEmptyException($bookscount);
        }
        $this->em->remove($category);
        $this->em->flush();
    }

    //создание категории
    public function createCategory(BookCategoryUpdateRequest $updateRequest): IdResponse
    {
        $bookCategory = new BookCategory();
        $this->upsertCategory($bookCategory, $updateRequest);
        return new IdResponse($bookCategory->getId());
    }

    //обновление категории
    public function updateCategory(int $id, BookCategoryUpdateRequest $updateRequest): void
    {
        $this->upsertCategory($this->bookCategoryRepository->getById($id), $updateRequest);
    }

    private function upsertCategory(BookCategory $category, BookCategoryUpdateRequest $updateRequest): void
    {
        $slug = $this->slugger->slug($updateRequest->getTitle());
        if($this->bookCategoryRepository->existsBySlug($slug)){
            throw new BookCategoryAlreadyExistsException();
        }
        $category->setTitle($updateRequest->getTitle())->setSlug($slug);
        $this->em->persist($category);
        $this->em->flush();
    }

}