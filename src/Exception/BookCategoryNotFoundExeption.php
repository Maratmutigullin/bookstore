<?php

namespace App\Exception;

use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\HttpFoundation\Response;

class BookCategoryNotFoundExeption extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("book category not found", Response::HTTP_NOT_FOUND);
    }
}