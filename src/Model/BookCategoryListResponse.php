<?php


namespace App\Model;

class BookCategoryListResponse
{
    /**
     * @var BookCategoryListItem[]
     */
    private array $items;

    /**
     * @var BookCategoryListItem[]
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @var BookCategoryListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}