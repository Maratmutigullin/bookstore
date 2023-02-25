<?php

namespace App\Exception;

use Symfony\Component\Console\Exception\RuntimeException;
class BookAlreadyExistsException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("book already exists");
    }
}