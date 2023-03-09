<?php

namespace App\Tests\Controller;

use App\Controller\ReviewController;
use App\Entity\Book;
use App\Entity\Review;
use App\Tests\AbstractControllerTest;
use App\Tests\MockUtils;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

class ReviewControllerTest extends AbstractControllerTest
{
    public function testReviews(): void
    {
        $user = MockUtils::createUser();
        $this->em->persist($user);

        $book = MockUtils::createBook()->setUser($user);
        $this->em->persist($book);
        $this->em->persist(MockUtils::createReview($book));

        $this->em->flush();

        $this->client->request('GET', '/api/v1/book/' . $book->getId() . '/reviews');
        $responseContent = $this->client->getResponse()->getContent();

        $this->assertResponseIsSuccessful();
        $this->assertJsonDocumentMatchesSchema($responseContent, [
            'type' => 'object',
            'required' => ['items', 'rating', 'page', 'pages', 'perPage', 'total'],
            //типы полей
            'properties' => [
                'rating' => ['type' => 'number'],
                'page' => ['type' => 'integer'],
                'pages' => ['type' => 'integer'],
                'perPage' => ['type' => 'integer'],
                'total' => ['type' => 'integer'],
                'items' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'required' => ['id', 'content', 'author', 'rating', 'createdAt'],
                        'properties' => [
                            'id' => ['type' => 'integer'],
                            'rating' => ['type' => 'integer'],
                            'createdAt' => ['type' => 'integer'],
                            'content' => ['type' => 'string'],
                            'author' => ['type' => 'string'],
                        ],
                    ],
                ],
            ],
        ]);
    }

    private function createReview($book)
    {
        $this->em->persist((new Review())
            ->setAuthor('tester')
            ->setContent('tect content')
            ->setCreatedAt(new DateTimeImmutable())
            ->setReating(5)
            ->setBook($book)
        );
    }
}
