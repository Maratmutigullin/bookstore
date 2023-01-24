<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $androidCategory = $this->getReference(BookCategoryFixtures::ANDROID_CATEGORY);
        $devicesCategory = $this->getReference(BookCategoryFixtures::DEVICES_CATEGORY);

        $book = (new Book())
            ->setTitle('PHP developer')
            ->setPublicationDate(new \DateTimeImmutable('2019-01-01'))
            ->setMeap(false)
            ->setIsbn('123321')
            ->setDescription('test description')
            ->setAutors(['Plum Island'])
            ->setSlug('php')
            ->setCategories(new ArrayCollection([$androidCategory, $devicesCategory]))
            ->setImage('https://m.media-amazon.com/images/I/51D1Z40PIUL._SX260_.jpg');

        $manager->persist($book);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            BookCategoryFixtures::class
        ];
    }
}