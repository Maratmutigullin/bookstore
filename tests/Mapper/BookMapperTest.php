<?php

namespace App\Tests\Mapper;

use App\Entity\Book;
use App\Mapper\BookMapper;
use App\Model\BookDetails;
use App\Tests\AbstractTestCase;
use PHPUnit\Framework\TestCase;

class BookMapperTest extends AbstractTestCase
{

    public function testMap()
    {
        $book = (new Book())
            ->setTitle('title')
            ->setSlug('slug')
            ->setImage('123')
            ->setAutors(['tester'])
            ->setPublicationDate(new \DateTimeImmutable('2020-10-01'));

        $this->setEntityId($book, 1);

        $expexted = (new BookDetails())
            ->setId(1)
            ->setTitle('title')
            ->setSlug('slug')
            ->setImage('123')
            ->setAuthors(['tester'])
            ->setPublicationDate(1601510400);

        $this->assertEquals($expexted, BookMapper::map($book, new BookDetails()));
    }
}
