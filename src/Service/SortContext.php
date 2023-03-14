<?php

namespace App\Service;

class SortContext
{
    private function __construct(private SortPosition $postiton, private int $nearId)
    {

    }

    public static function fromNeighbours(?int $nextId, ?int $previousId): self
    {
        $position = match (true) {
            null === $previousId && null !== $nextId => SortPosition::AsFirst,
            null !== $previousId && null === $nextId => SortPosition::AsLast,
            default => SortPosition::Between,
        };

        return new self($position, SortPosition::AsLast === $position ? $previousId : $nextId);
    }



    public function getPostiton(): SortPosition
    {
        return $this->postiton;
    }

    public function getNearId(): int
    {
        return $this->nearId;
    }

}