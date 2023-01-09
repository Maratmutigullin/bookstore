<?php

namespace App\Exception;

use Symfony\Component\String\Exception\RuntimeException;

class SubscriberEmailExistsExeption extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("subscriber already exists");
    }
}