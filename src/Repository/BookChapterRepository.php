<?php

namespace App\Repository;

use App\Entity\Book;
use App\Entity\BookChapter;
use App\Exception\BookChapterNotFoundException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BookChapter>
 *
 * @method BookChapter|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookChapter|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookChapter[]    findAll()
 * @method BookChapter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookChapterRepository extends ServiceEntityRepository
{
    use RepositoryModifyTrait;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookChapter::class);
    }

    public function getById($id): BookChapter
    {
        $bookChapter = $this->find($id);
        if (null === $bookChapter) {
            throw new BookChapterNotFoundException();
        }
        return $bookChapter;
    }

    public function getMaxSort(Book $book, int $level): int
    {
        return (int)$this->_em->createQuery('SELECT c.id FROM App\Entity\BookChapter c WHERE c.book = :book AND c.level = :level')
            ->setParameter('book', $book)
            ->setParameter('level', $level)
            ->getSingleScalarResult();

    }

    public function increaseSortFrom(int $sortStart, Book $book, $level, $sortStep = 1): void
    {
        $sql = <<<SQL
UPDATE App\Entity\BookChapter c SET c.sort = c.sort + :sortStep
WHERE c.sort >= :sortStart AND c.level = :level AND c.book = :book
SQL;

        $this->_em->createQuery($sql)
            ->setParameter('sortStart', $sortStart)
            ->setParameter('level', $level)
            ->setParameter('book', $book)
            ->setParameter('sortStep', $sortStep)
            ->execute();
    }

    /**
     * @return BookChapter[]
     */
    public function findSortedChaptersByBook(Book $book): array
    {
        return $this->findBy(['book' => $book], ['level' => Criteria::ASC], ['sort' => Criteria::ASC]);
    }
}