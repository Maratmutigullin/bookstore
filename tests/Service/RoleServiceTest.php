<?php

namespace App\Tests\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\RoleService;
use App\Tests\AbstractTestCase;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class RoleServiceTest extends AbstractTestCase
{
    private User $user;

    private UserRepository $userRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->userRepository = $this->createMock(UserRepository::class);
        $this->user = new User();
        $this->userRepository->expects($this->once())
            ->method('getUser')
            ->with(1)
            ->willReturn($this->user);

        $this->userRepository->expects($this->once())
            ->method('commit');
    }

    public function testGrandAdmin()
    {
        $this->createService()->grandAdmin(1);
        $this->assertEquals(['ROLE_ADMIN'], $this->user->getRoles());
    }

    public function testGrandAuthor()
    {
        $this->createService()->grandAuthor(1);
        $this->assertEquals(['ROLE_AUTHOR'], $this->user->getRoles());
    }

    private function createService(): RoleService
    {
        return new RoleService($this->userRepository);
    }
}
