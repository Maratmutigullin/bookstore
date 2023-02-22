<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Lexik\Bundle\JWTAuthenticationBundle\Security\User\PayloadAwareUserProviderInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;


class JwtUserProvider implements PayloadAwareUserProviderInterface
{
    public function __construct(private UserRepository $userRepository)
    {

    }

    public function loadUserByIdentifierAndPayload(string $identifier, array $payload): UserInterface
    {
        return $this->getUser('id', $payload['id']);
    }

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        return $this->getUser('email', $identifier);
    }
    //deprecated
    public function loadUserByUsernameAndPayload(string $username, array $payload): ?UserInterface
    {
        return null;
    }

    //не нужен
    public function refreshUser(UserInterface $user): ?UserInterface
    {
        return null;
    }

    public function supportsClass(string $class)
    {
       return $class === User::class || is_subclass_of($class, User::class);
    }

    //не нужен
    public function loadUserByUsername(string $username): ?UserInterface
    {
        return null;
    }

    public function getUser($key, $value): UserInterface
    {
        $user = $this->userRepository->findOneBy([$key => $value]);

        if($user === null) {
            $e = new UserNotFoundException('User with id '.json_encode($value).' not found.');
            $e->setUserIdentifier(json_encode($value));

            throw $e;
        }

        return $user;
    }
}