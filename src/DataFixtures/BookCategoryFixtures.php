<?php

namespace App\DataFixtures;

use App\Entity\BookCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookCategoryFixtures extends Fixture
{
    public const ANDROID_CATEGORY = 'android';

    public const DEVICES_CATEGORY = 'devices';

    public function load(ObjectManager $manager): void
    {
        $categories = [
            self::DEVICES_CATEGORY => (new BookCategory())->setTitle('Devices')->setSlug('devices'),
            self::ANDROID_CATEGORY => (new BookCategory())->setTitle('Andrid')->setSlug('android'),
        ];

        foreach ($categories as $categorie) {
            $manager->persist($categorie);
        }

        $manager->flush();

        foreach ($categories as $code => $categorie) {
            $this->addReference($code, $categorie);
        }

//        $manager->persist((new BookCategory())->setTitle('Data')->setSlug('data'));
//        $manager->persist((new BookCategory())->setTitle('Android')->setSlug('android'));
//        $manager->persist((new BookCategory())->setTitle('Networking')->setSlug('networking'));
//
//        $manager->flush();
    }
}
