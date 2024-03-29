<?php


namespace App\Repository;

use App\Entity\User;
use App\Exception\UserNotFoundException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    use RepositoryModifyTrait;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function existsByEmail(string $email): bool
    {
        return null !== $this->findOneBy(['email' => $email]);
    }

    public function getUser(int $userId): User
    {
        $user = $this->find($userId);
        if($user === null) {
            throw new UserNotFoundException();
        }
        return $user;
    }

//    public function save(User $user): void
//    {
//        $this->_em->persist($user);
//    }
//
//    public function saveAndCommit(User $user): void
//    {
//        $this->save($user);
//        $this->commit();
//    }
//
//    public function commit(): void
//    {
//        $this->_em->flush();
//    }
}