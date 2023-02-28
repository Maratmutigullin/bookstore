<?php

namespace App\Repository;

use App\Entity\Book;
use App\Entity\BookToBookFormat;
use App\Exception\BookNotFoundException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @extends ServiceEntityRepository<Book>
 *
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

//    public function save(Book $entity, bool $flush = false): void
//    {
//        $this->getEntityManager()->persist($entity);
//
//        if ($flush) {
//            $this->getEntityManager()->flush();
//        }
//    }
//
//    public function remove(Book $entity, bool $flush = false): void
//    {
//        $this->getEntityManager()->remove($entity);
//
//        if ($flush) {
//            $this->getEntityManager()->flush();
//        }
//    }

    /**
     * @param int $id
     * @return Book[]
     */
    public function findPublishedBooksByCategoryId(int $id): array
    {
        $query = $this->_em->createQuery('SELECT b FROM App\Entity\Book b WHERE :categoryId MEMBER OF b.categories AND b.publicationDate IS NOT NULL');
        $query->setParameter('categoryId', $id);
        return $query->getResult();
    }

    public function getPublishedById(int $id): Book
    {
        $query = $this->_em->createQuery('SELECT b FROM App\Entity\Book b WHERE b.id = :id AND b.publicationDate IS NOT NULL');
        $query->setParameter('id', $id);
        return $query->getOneOrNullResult();
    }

    /**
     * @return Book[]
     */
    public function findBooksByIds(array $ids): array
    {
        $query = $this->_em->createQuery('SELECT b FROM App\Entity\Book b WHERE b.id IN (:ids) AND b.publicationDate IS NOT NULL');
        $query->setParameter('ids', $ids);
        return $query->getResult();
    }

    /**
     * @return Book[]
     */
    public function findUserBooks(UserInterface $user): array
    {
        return $this->findBy(['user' => $user]);
    }

    public function getUserBookById($id, UserInterface $user)
    {
        $book = $this->findOneBy(['id' => $id, 'user' => $user]);
        if (null === $book) {
            throw new BookNotFoundException();
        }
        return $book;
    }

    public function existsBySlug(string $slug): bool
    {
        return null !== $this->findOneBy(['slug' => $slug]);
    }

    public function getBookById($id)
    {
        $book = $this->find($id);
        if (null === $book) {
            throw new BookNotFoundException();
        }
        return $book;
    }

    public function existsUserBookById(int $id, UserInterface $user)
    {
        return null !== $this->findOneBy(['id' => $id, 'user' => $user]);
    }

    public function save(Book $book): void
    {
        $this->_em->persist($book);
    }

    public function commit(): void
    {
        $this->_em->flush();
    }

    public function saveAndCommit(Book $book): void
    {
        $this->save($book);
        $this->commit();
    }

    public function remove(Book $book): void
    {
        $this->_em->remove($book);
    }

    public function removeAndCommit(Book $book): void
    {
        $this->remove($book);
        $this->commit();
    }

    public function saveBookFormatReference(BookToBookFormat $bookToBookFormat): void
    {
        $this->_em->persist($bookToBookFormat);
    }

    public function removeBookFormatReference(BookToBookFormat $bookToBookFormat): void
    {
        $this->_em->remove($bookToBookFormat);
    }
}