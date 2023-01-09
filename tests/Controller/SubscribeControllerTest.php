<?php

namespace App\Tests\Controller;

use App\Tests\AbstractControllerTest;

class SubscribeControllerTest extends AbstractControllerTest
{

    public function testAction(): void
    {
        $content = json_encode(['email' => 'test@email.com', 'agreed' => true]);
        $this->client->request('POST', '/api/v1/subscribe', [], [], [], $content);
        $this->assertResponseIsSuccessful();
    }
    public function testSubscribeNotAgreed(): void
    {
        $content = json_encode(['email' => 'test@email.com', 'agreed' => true]);
        $this->client->request('POST', '/api/v1/subscribe', [], [], [], $content);
        $responseContent = json_encode($this->client->getResponse()->getContent());

        $this->assertResponseStatusCodeSame(\Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST);
        $this->assertJsonDocumentMatches($responseContent, [
            '$.message' => 'validation failed',
            '$.details.violations' => self::countOf(1),
            '$.details.violations[0]' => 'agreed'
        ]);

    }
}
