<?php
namespace App\Tests;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Helmich\JsonAssert\JsonAssertions;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

abstract class AbstractControllerTest extends WebTestCase
{
    use JsonAssertions;

    protected KernelBrowser $client;

    protected ?EntityManagerInterface $em;

    protected UserPasswordHasherInterface $hasher;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = static::createClient();
        $this->em = self::getContainer()->get('doctrine.orm.entity_manager');
        $this->hasher = self::getContainer()->get('security.user_password_hasher');
    }

    protected function createAdmin(string $userName, string $password): User
    {
        return $this->createUserWithRoles($userName, $password, ['ROLE_ADMIN']);
    }

    protected function createUser(string $userName, string $password): User
    {
        return $this->createUserWithRoles($userName, $password, ['ROLE_USER']);
    }

    protected function createAuthor(string $userName, string $password): User
    {
        return $this->createUserWithRoles($userName, $password, ['ROLE_AUTHOR']);
    }

    protected function auth(string $userName, string $password)
    {
        $this->client->request(
            'POST',
            '/api/v1/auth/login',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode([
                'username' => $userName,
                'password' => $password
            ])
        );

        $this->assertResponseIsSuccessful();
        $data = json_decode($this->client->getResponse()->getContent(), true);

        $this->client->setServerParameter('HTTP_Authorization', sprintf('Bearer %s', $data['token']));
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null;
    }

    private function createUserWithRoles(string $username, string $password, array $roles): User
    {
        $user = (new User())
            ->setFirstName($username)
            ->setLastName($username)
            ->setRoles($roles)
            ->setEmail($username);

        $user->setPassword($this->hasher->hashPassword($user, $password));

        $this->em->persist($user);
        $this->em->flush();

        return $user;
    }


}