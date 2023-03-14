<?php

namespace App\Entity;

use App\Repository\BookChapterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookChapterRepository::class)]
class BookChapter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id;

    #[ORM\JoinColumn(nullable: false)]
    #[ORM\ManyToOne(targetEntity: Book::class)]
    private Book $book;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private $sort = 0;

    #[ORM\Column(type: 'integer')]
    private $level;

    #[ORM\JoinColumn(nullable: true)]
    #[ORM\ManyToOne(targetEntity: BookChapter::class)]
    private ?BookChapter $parent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function setBook(Book $book): self
    {
        $this->book = $book;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): self
    {
        $this->title = $title;
        return $this;
    }


    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getSort(): int
    {
        return $this->sort;
    }

    public function setSort(int $sort): self
    {
        $this->sort = $sort;
        return $this;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level): self
    {
        $this->level = $level;
        return $this;
    }

    public function getParent(): ?BookChapter
    {
        return $this->parent;
    }

    public function setParent(?BookChapter $parent): self
    {
        $this->parent = $parent;
        return $this;
    }

    public function hasParent(): bool
    {
        return null !== $this->parent;
    }
}