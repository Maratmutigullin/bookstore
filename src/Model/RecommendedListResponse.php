<?php


namespace App\Model;


class RecommendedListResponse
{
    /**
     * @var RecommendedBook[]
     */
    private array $items;

    /**
     * @var RecommendedBook[]
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @var RecommendedBook[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}