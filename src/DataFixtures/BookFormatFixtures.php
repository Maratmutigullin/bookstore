<?php

namespace App\DataFixtures;

use App\Entity\BookFormat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFormatFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $format1 = (new BookFormat())
            ->setDescription('description1')
            ->setTitle('title1')
            ->setComment('comment');

        $format2 = (new BookFormat())
            ->setDescription('description2')
            ->setTitle('title2')
            ->setComment('comment2');

        $manager->persist($format1);
        $manager->persist($format2);
        $manager->flush();
    }

//    public function getDependencies()
//    {
//        return [
//            BookCategoryFixtures::class
//        ];
//    }
}