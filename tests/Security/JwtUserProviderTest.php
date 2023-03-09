<?php

namespace App\Tests\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use App\Repository\UserRepository;
use App\Security\JwtUserProvider;
use App\Tests\AbstractTestCase;

class JwtUserProviderTest extends AbstractTestCase
{
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->userRepository = $this->createMock(UserRepository::class);
    }

    public function testSupportsClass(): void
    {
        $user = (new User())
            ->setEmail('test@test.com');
        $userProvider = new JwtUserProvider($this->userRepository);

        $this->userRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['email' => 'test@test.com'])
            ->willReturn($user);

        $this->assertEquals($user, $userProvider->loadUserByIdentifier('test@test.com'));
    }

    public function testLoadUserByIdentifierNotFoundException(): void
    {
        $this->expectException(UserNotFoundException::class);

        $this->userRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['email' => 'test@test.com'])
            ->willReturn(null);

        (new JwtUserProvider($this->userRepository))->loadUserByIdentifier('test@test.com');
    }

    public function testLoadUserByIdentitfierAndPayLoad(): void
    {
        $user = (new User())
            ->setEmail('test@test.com');
        $userProvider = new JwtUserProvider($this->userRepository);

        $this->userRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['id' => 1])
            ->willReturn($user);

        $this->assertEquals($user, $userProvider->loadUserByIdentifierAndPayload('test@test.com', ['id'=> 1]));
    }

    public function testLoadUserByIdentifierAndPayloadNotFoundException(): void
    {
        $this->expectException(UserNotFoundException::class);

        $this->userRepository->expects($this->once())
            ->method('findOneBy')
            ->with(['id' => 1])
            ->willReturn(null);

        (new JwtUserProvider($this->userRepository))->loadUserByIdentifierAndPayload('test@test.com', ['id'=> 1]);
    }
}
