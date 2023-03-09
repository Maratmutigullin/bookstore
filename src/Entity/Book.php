<?php

namespace App\Entity;

use App\Repository\BookRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id;

    #[ORM\Column(type: 'string' ,length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image;

    #[ORM\Column(type: 'simple_array', nullable: true)]
    private ?array $autors;

    #[ORM\Column(type: 'date_immutable', nullable: true)]
    private ?DateTimeInterface $publicationDate;

    /**
     * @var UserInterface
     */
    #[ORM\JoinColumn(nullable: false)]
    #[ORM\ManyToOne(targetEntity: User::class)]
    private UserInterface $user;

    /**
     * @var Collection<BookCategory>
     */
    #[ORM\ManyToMany(targetEntity: BookCategory::class)]
    #[ORM\JoinTable(name: 'book_to_book_category')]
    private Collection $categories;

    #[ORM\Column(type: 'string' ,length: 13, nullable: true)]
    private ?string $isbn;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description;

    /**
     * @var Collection<BookToBookFormat>
     */
    #[ORM\OneToMany(mappedBy: 'book', targetEntity: BookToBookFormat::class)]
    private Collection $formats;

    /**
     * @var Collection<Review>
     */
    #[ORM\OneToMany(mappedBy: 'book', targetEntity: Review::class)]
    private Collection $reviews;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->formats = new ArrayCollection();
        $this->reviews = new ArrayCollection();
    }

    /**
     * @param int|null $id
     * @return Book
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string|null $slug
     */
    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getAutors(): ?array
    {
        return $this->autors;
    }

    public function setAutors(?array $autors): self
    {
        $this->autors = $autors;

        return $this;
    }


    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(?DateTimeInterface $publicationDate): self
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * @return Collection<BookCategory >
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function setCategories(Collection $categories): self
    {
        $this->categories = $categories;
        return $this;
    }


    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(?string $isbn): self
    {
        $this->isbn = $isbn;
        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }


    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getFormats(): Collection
    {
        return $this->formats;
    }

    public function setFormats(Collection $formats): self
    {
        $this->formats = $formats;
        return $this;
    }

    public function getReviews(): ArrayCollection|Collection
    {
        return $this->reviews;
    }

    public function setReviews(ArrayCollection|Collection $reviews): self
    {
        $this->reviews = $reviews;
        return $this;
    }


    public function getUser(): UserInterface
    {
        return $this->user;
    }

    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

}
