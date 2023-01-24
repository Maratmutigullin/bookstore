<?php


namespace App\Model;


class BookListResponse
{
    /**
     * @var BookListItem[]
     */
    private array $items;

    /**
     * @var BookCategory[]
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @var BookCategory[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}