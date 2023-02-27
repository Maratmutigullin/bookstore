<?php

namespace App\Exception;

use RuntimeException;

class UploadFileInvalidException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('uploaded file type is invalid');
    }
}