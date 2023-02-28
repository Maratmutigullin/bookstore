<?php

namespace App\Exception;

use Symfony\Component\String\Exception\RuntimeException;

class BookCategoryAlreadyExistsException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("book category already exists");
    }
}