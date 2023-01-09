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

    private EntityManagerInterface $em;

    private const EMAIL = 'test@test.com';

    public function setUp(): void
    {
        parent::setUp();
        $this->repository = $this->createMock(SubscriberRepository::class);
        $this->em = $this->createMock(EntityManagerInterface::class);
    }

    public function testSubscribealreadyExist(): void
    {
        $this->expectException(SubscriberEmailExistsExeption::class);
        $this->repository->expects($this->once())
            ->method('existsByEmail')
            ->with(self::EMAIL)
            ->willReturn(true);
        $request = new SubscriberRequest();
        $request->setEmail(self::EMAIL);

        (new SubscriberService($this->repository, $this->em))->subscribe($request);
    }
    public function testSubscribe(): void
    {

        $this->repository->expects($this->once())
            ->method('existsByEmail')
            ->with(self::EMAIL)
            ->willReturn(false);

        $expectedSubscrier = new Subscriber();
        $expectedSubscrier->setEmail(self::EMAIL);

        $this->em->expects($this->once())
            ->method('flush');

        $request = new SubscriberRequest();
        $request->setEmail(self::EMAIL);

        (new SubscriberService($this->repository, $this->em))->subscribe($request);
    }
}