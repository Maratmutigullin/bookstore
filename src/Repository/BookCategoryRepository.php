<?php

namespace App\Repository;

use App\Entity\BookCategory;
use App\Exception\BookCategoryNotFoundException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BookCategory>
 *
 * @method BookCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookCategory[]    findAll()
 * @method BookCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookCategory::class);
    }

//    public function save(BookCategory $entity, bool $flush = false): void
//    {
//        $this->getEntityManager()->persist($entity);
//
//        if ($flush) {
//            $this->getEntityManager()->flush();
//        }
//    }

//    public function remove(BookCategory $entity, bool $flush = false): void
//    {
//        $this->getEntityManager()->remove($entity);
//
//        if ($flush) {
//            $this->getEntityManager()->flush();
//        }
//    }

    /**
     * @return BookCategory[]
     */
    public function findAllSortedByTitle(): array
    {
        return $this->findBy([], ['title' => Criteria::ASC]);
    }

    public function existsById(int $id): bool
    {
        return null !== $this->find($id);
    }

    public function getById($id): BookCategory
    {
        $category = $this->find($id);
        if (null === $category) {
            throw new BookCategoryNotFoundException();
        }
        return $category;
    }

    public function countBooksInCategory($ctegoryId): int
    {
        return $this->_em->createQuery("SELECT COUNT(b.id) FROM App\Entity\Book WHERE categoryId MEMBER OF b.categories")
            ->setParameter('categoryId', $ctegoryId)
            ->getSingleScalarResult();
    }

    public function existsBySlug(string $slug): bool
    {
        return null !== $this->findOneBy(['slug' => $slug]);
    }

    public function save($bookCategory): void
    {
        $this->_em->persist($bookCategory);
    }

    public function commit(): void
    {
        $this->_em->flush();
    }

    public function saveAndCommit($bookCategory): void
    {
        $this->save($bookCategory);
        $this->commit();
    }

    public function remove($bookCategory): void
    {
        $this->_em->remove($bookCategory);
    }

    public function removeAndCommit($bookCategory): void
    {
        $this->remove($bookCategory);
        $this->commit();
    }

    /**
     * @param array $ids
     * @return BookCategory[]
     */
    public function findBookCategoriesByIds(array $ids): array
    {
        return $this->findBy(['id' => $ids]);
    }

}
