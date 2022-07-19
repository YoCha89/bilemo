<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Color;
use Faker\Factory;

class ColorFixtures extends Fixture
{
    public const COLOR_REFERENCE = 'color';

    public function load(ObjectManager $manager): void
    {
       $colors = ['Blue', 'Red', 'Yellow', 'Green', 'Purple', 'White', 'Black', 'Orange'];

       $i=0;
        foreach($colors as $c){
            $tmp = new Color();

            $tmp->setName($c);
            $this->setReference(self::COLOR_REFERENCE.'_'.$i, $tmp);
            $i++;

            $manager->persist($tmp);
        }

        $manager->flush();

    }
}
