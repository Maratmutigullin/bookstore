<?php


namespace App\Service;


use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

class RoleService
{
    public function __construct(private UserRepository $userRepository, private EntityManagerInterface $em)
    {

    }

    public function grandAdmin(int $userId): void
    {
        $this->grandRole($userId, 'ROLE_ADMIN');
    }

    public function grandAuthor(int $userId): void
    {
        $this->grandRole($userId, 'ROLE_AUTHOR');
    }

    private function grandRole(int $userId, string $role): void
    {
        $user = $this->userRepository->getUser($userId);

        $user->setRoles([$role]);

        $this->em->flush();
    }
}