<?php

namespace App\Exception;

use Symfony\Component\Console\Exception\RuntimeException;

class BookChapterInvalidSortException extends RuntimeException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}