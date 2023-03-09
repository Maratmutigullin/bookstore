<?php

namespace App\Tests\Service;

use App\Entity\Subscriber;
use App\Exception\SubscriberEmailExistsExeption;
use App\Model\SubscriberRequest;
use App\Repository\SubscriberRepository;
use App\Service\SubscriberService;
use App\Tests\AbstractTestCase;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;

class SubscriberServiceTest extends AbstractTestCase
{
    private SubscriberRepository $repository;

    private const EMAIL = 'test@test.com';

    public function setUp(): void
    {
        parent::setUp();
        $this->repository = $this->createMock(SubscriberRepository::class);
    }

    public function testSubscribeAlreadyExist(): void
    {
        $this->expectException(SubscriberEmailExistsExeption::class);
        $this->repository->expects($this->once())
            ->method('existsByEmail')
            ->with(self::EMAIL)
            ->willReturn(true);
        $request = new SubscriberRequest();
        $request->setEmail(self::EMAIL);

        (new SubscriberService($this->repository))->subscribe($request);
    }

    public function testSubscribe(): void
    {

        $this->repository->expects($this->once())
            ->method('existsByEmail')
            ->with(self::EMAIL)
            ->willReturn(false);

        $expectedSubscrier = new Subscriber();
        $expectedSubscrier->setEmail(self::EMAIL);

        $request = new SubscriberRequest();
        $request->setEmail(self::EMAIL);

        $this->repository->expects($this->once())
            ->method('saveAndCommit')
            ->with($expectedSubscrier);

        (new SubscriberService($this->repository))->subscribe($request);
    }
}