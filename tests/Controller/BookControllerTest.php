<?php

namespace App\Tests\Controller;

use App\Entity\Book;
use App\Entity\BookCategory;
use App\Tests\AbstractControllerTest;
use Doctrine\Common\Collections\ArrayCollection;

class BookControllerTest extends AbstractControllerTest
{
    public function testCategories(): void
    {
        $categoryId = $this->createCategory();

        $this->client->request('GET', '/api/v1/category/' . $categoryId . '/books');
        $responseClient = $this->client->getResponse()->getContent();

        $this->assertResponseIsSuccessful();

        $this->assertJsonDocumentMatchesSchema($responseClient, [
            'type' => 'object',
            'required' => ['items'],
            'properties' => [
                'items' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'required' => ['id', 'title', 'slug', 'image', 'authors', 'meap', 'publicationDate'],
                        'properties' => [
                            'title' => ['type' => 'string'],
                            'slug' => ['type' => 'string'],
                            'id' => ['type' => 'integer'],
                            'image' => ['type' => 'string'],
                            'meap' => ['type' => 'boolean'],
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

    private function createCategory(): int
    {
        $bookCategory = (new BookCategory())->setTitle('Devices')->setSlug('devices');
        $this->em->persist($bookCategory);

        $this->em->persist((new Book())->setTitle('TestBook')
            ->setImage('http://localhost.png')
            ->setMeap(true)
            ->setPublicationDate(new \DateTimeImmutable())
            ->setAutors(['Tester'])
            ->setCategories(new ArrayCollection([$bookCategory]))
            ->setSlug('testbook'));

        $this->em->flush();

        return $bookCategory->getId();
    }
}