<?php

namespace App\Tests\Service;

use App\Entity\User;
use App\Exception\UserAlreadyExistsException;
use App\Model\SignUpRequest;
use App\Repository\UserRepository;
use App\Service\SignUpService;
use App\Tests\AbstractTestCase;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;

class SignUpServiceTest extends AbstractTestCase
{
    private UserPasswordHasher $hasher;

    private UserRepository $userRepository;

    private AuthenticationSuccessHandler $successHandler;


    protected function setUp(): void
    {
        parent::setUp();
        $this->userRepository = $this->createMock(UserRepository::class);
        $this->successHandler = $this->createMock(AuthenticationSuccessHandler::class);
        $this->hasher = $this->createMock(UserPasswordHasher::class);
    }

    public function testSignUpUserAlreadyExists(): void
    {
        $this->expectException(UserAlreadyExistsException::class);
        $this->userRepository->expects($this->once())
            ->method('existsByEmail')
            ->with('test@test.com')
            ->willReturn(true);

        $this->createService()->signUp((new SignUpRequest())->setEmail('test@test.com'));
    }

    private function createService(): SignUpService
    {
        return new SignUpService($this->hasher, $this->userRepository, $this->successHandler);
    }

    public function testSignUp(): void
    {
        $response = new Response();
        $expectedHasherUser = (new User())
            ->setRoles(['ROLE_USER'])
            ->setEmail('test@test.com')
            ->setFirstName('tester')
            ->setLastName('Testov');

        $expectedUser = clone $expectedHasherUser;
        $expectedUser->setPassword('hashed_password');

        $this->userRepository->expects($this->once())
            ->method('existsByEmail')
            ->with('test@test.com')
            ->willReturn(false);

        $this->hasher->expects($this->once())
            ->method('hashPassword')
            ->with($expectedHasherUser, 'testtest')
            ->willReturn('hashed_password');

        $this->userRepository->expects($this->once())
            ->method('saveAndCommit')
            ->with($expectedUser);

        $this->successHandler->expects($this->once())
            ->method('handleAuthenticationSuccess')
            ->with($expectedUser)
            ->willReturn($response);

        $signUprequest = (new SignUpRequest())
            ->setEmail('test@test.com')
            ->setFirstName('tester')
            ->setLastName('Testov')
            ->setPassword('testtest');

        $this->assertEquals($response, $this->createService()->signUp($signUprequest));
    }
}
