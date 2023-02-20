<?php

namespace App\Exception;

use Symfony\Component\String\Exception\RuntimeException;

class UserAlreadyExistsException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("user already exists");
    }
}