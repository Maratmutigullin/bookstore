<?php

namespace App\Model\Author;

use Symfony\Component\Validator\Constraints\NotBlank;

class CreateBookRequest
{
    #[NotBlank]
    private string $title;


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
}