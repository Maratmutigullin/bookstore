<?php

namespace App\Tests\Security\Voter;

use App\Entity\User;
use App\Repository\BookRepository;
use App\Security\Voter\AuthorBookVoter;
use App\Tests\AbstractTestCase;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

class AuthorBookVoterTest extends AbstractTestCase
{
    private BookRepository $bookRepository;

    private TokenInterface $token;

    protected function setUp(): void
    {
        parent::setUp();
        $this->bookRepository = $this->createMock(BookRepository::class);
        $this->token = $this->createMock(TokenInterface::class);
    }

    public function testVoterNotSupports(): void
    {
        $user = new User();
        $voter = new AuthorBookVoter($this->bookRepository);
        $this->assertEquals(VoterInterface::ACCESS_ABSTAIN, $voter->vote($this->token, 1, ['test']));
    }

    public function testVote(): void
    {
        $this->vote(true, VoterInterface::ACCESS_GRANTED);
    }

    public function testVoteRestrict(): void
    {
        $this->vote(false, VoterInterface::ACCESS_DENIED);
    }

    private function vote(bool $existUserBookByIdResult, int $expectedAccess): void
    {
        $user = new User();
        $voter = new AuthorBookVoter($this->bookRepository);

        $this->token->expects($this->once())
            ->method('getUser')
            ->willReturn($user);

        $this->bookRepository->expects($this->once())
            ->method('existsUserBookById')
            ->with(1, $user)
            ->willReturn($existUserBookByIdResult);

        $this->assertEquals($expectedAccess, $voter->vote($this->token, 1, [AuthorBookVoter::IS_AUTHOR]));    }

}
