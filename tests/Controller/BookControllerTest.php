<?php

namespace App\Tests\Controller;

use App\Entity\Book;
use App\Entity\BookCategory;
use App\Entity\BookFormat;
use App\Entity\BookToBookFormat;
use App\Tests\AbstractControllerTest;
use App\Tests\MockUtils;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;

class BookControllerTest extends AbstractControllerTest
{
    public function testCategories(): void
    {
        $user = MockUtils::createUser();
        $this->em->persist($user);

        $bookCategory = MockUtils::createBookCategory();
        $this->em->persist($bookCategory);

        $book = (MockUtils::createBook())
            ->setCategories(new ArrayCollection([$bookCategory]))
            ->setUser($user);

        $this->em->persist($book);

        $this->em->flush();

        $this->client->request('GET', '/api/v1/category/' . $bookCategory->getId() . '/books');
        $responseContent = $this->client->getResponse()->getContent();

        $this->assertResponseIsSuccessful();

        $this->assertJsonDocumentMatchesSchema($responseContent, [
            'type' => 'object',
            'required' => ['items'],
            'properties' => [
                'items' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'required' => ['id', 'title', 'slug', 'image', 'authors', 'publicationDate'],
                        'properties' => [
                            'title' => ['type' => 'string'],
                            'slug' => ['type' => 'string'],
                            'id' => ['type' => 'integer'],
                            'image' => ['type' => 'string'],
                            'authors' => [
                                'type' => 'array',
                                'items' => ['type' => 'string']
                            ],
                        ]
                    ]
                ]
            ]
        ]);
    }

    public function testBookById(): void
    {
        $user = MockUtils::createUser();
        $this->em->persist($user);

        $bookCategory = MockUtils::createBookCategory();
        $this->em->persist($bookCategory);

        $format = MockUtils::createBookFormat();
        $this->em->persist($format);

        $book = (MockUtils::createBook())
            ->setCategories(new ArrayCollection([$bookCategory]))
            ->setUser($user);

        $this->em->persist($book);
        $this->em->persist(MockUtils::createBookFormatLink($book, $format));

        $this->em->flush();

        $this->client->request('GET', '/api/v1/book/' . $book->getId());
        $responseContent = $this->client->getResponse()->getContent();
        $this->assertJsonDocumentMatchesSchema($responseContent, [
            'type' => 'object',
            'required' => [
                'id', 'title', 'slug', 'image', 'authors', 'publicationDate', 'rating', 'reviews',
                'categories', 'formats',
            ],
            'properties' => [
                'title' => ['type' => 'string'],
                'slug' => ['type' => 'string'],
                'id' => ['type' => 'integer'],
                'publicationDate' => ['type' => 'integer'],
                'image' => ['type' => 'string'],
                'authors' => [
                    'type' => 'array',
                    'items' => ['type' => 'string'],
                ],
                'rating' => ['type' => 'number'],
                'reviews' => ['type' => 'integer'],
                'categories' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'required' => ['id', 'title', 'slug'],
                        'properties' => [
                            'title' => ['type' => 'string'],
                            'slug' => ['type' => 'string'],
                            'id' => ['type' => 'integer'],
                        ],
                    ],
                ],
            ],
        ]);
    }

    private function createCategory(): int
    {
        $bookCategory = (new BookCategory())->setTitle('Devices')->setSlug('devices');
        $this->em->persist($bookCategory);

        $this->em->persist((new Book())->setTitle('TestBook')
            ->setImage('http://localhost.png')
            ->setIsbn('123321')
            ->setDescription('test')
            ->setPublicationDate(new DateTimeImmutable())
            ->setAutors(['Tester'])
            ->setCategories(new ArrayCollection([$bookCategory]))
            ->setSlug('testbook'));

        $this->em->flush();

        return $bookCategory->getId();
    }

    private function createBook(): int
    {
        $bookCategory = (new BookCategory())->setTitle('Devices')->setSlug('devices');
        $this->em->persist($bookCategory);

        $format = (new BookFormat())
            ->setTitle('format')
            ->setDescription('description format')
            ->setComment(null);

        $this->em->persist($format);

        $book = (new Book())->setTitle('TestBook')
            ->setImage('http://localhost.png')
            ->setIsbn('123321')
            ->setDescription('test')
            ->setPublicationDate(new DateTimeImmutable())
            ->setAutors(['Tester'])
            ->setCategories(new ArrayCollection([$bookCategory]))
            ->setSlug('testbook');

        $this->em->persist($book);
        $join = (new BookToBookFormat())
            ->setPrice(5.5)
            ->setFormat($format)
            ->setDiscountPercent(5)
            ->setBook($book);

        $this->em->persist($join);

        $this->em->flush();

        return $book->getId();
    }
}