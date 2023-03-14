<?php

namespace App\Exception;

use Symfony\Component\Console\Exception\RuntimeException;

class BookChapterNotFoundException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("book chapter not found");
    }
}