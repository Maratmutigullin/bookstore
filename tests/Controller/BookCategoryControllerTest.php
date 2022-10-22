<?php

namespace App\Tests\Controller;

use App\Entity\BookCategory;
use App\Tests\AbstractControllerTest;

class BookCategoryControllerTest extends AbstractControllerTest
{
    public function testCategories(): void
    {
        $this->em->persist((new BookCategory())->setTitle('Devices')->setSlug('devices'));

        $this->client->request('GET', '/api/v1/book/categories');
        $responseClient = json_decode($this->client->getResponse()->getContent(), true);

        $this->assertResponseIsSuccessful();
        $this->assertJsonDocumentMatchesSchema($responseClient, [
            'type' => 'object',
            'required' => ['items'],
            'properties' => [
                'items' => [
                    'type' => 'array',
                    'items' => [
                        'type' => 'object',
                        'required' => ['id', 'title', 'slug'],
                        'properties' => [
                            'title' => ['type' => 'string'],
                            'slug' => ['type' => 'strig'],
                            'id' => ['type' => 'integer']
                        ]
                    ]
                ]
            ]
        ]);

    }
}
