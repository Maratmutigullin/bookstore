<?php

namespace App\Exception;

use Symfony\Component\String\Exception\RuntimeException;

class BookFormatNotFoundException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("book format not found");
    }
}