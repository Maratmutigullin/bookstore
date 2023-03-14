<?php

namespace App\Model\Author;

use App\Validation\AtLeastOneRequired;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\ZeroComparisonConstraintTrait;

#[AtLeastOneRequired(['nextId', 'previousId'])]
class UpdateBookChapterSortRequest
{
    //$nextId $previousId поля между кот мы вставляем перемещаемый элемент

    #[Positive]
    private ?int $id;

    #[Positive]
    private ?int $nextId = null;

    #[Positive]
    private ?int $previousId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNextId(): ?int
    {
        return $this->nextId;
    }

    public function setNextId(?int $nextId): self
    {
        $this->nextId = $nextId;

        return $this;
    }

    public function getPreviousId(): ?int
    {
        return $this->previousId;
    }

    public function setPreviousId(?int $previousId): self
    {
        $this->previousId = $previousId;

        return $this;
    }
}