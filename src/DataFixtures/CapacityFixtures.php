<?php

namespace App\DataFixtures;

use App\Entity\Capacity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Provider\DateTime;

class CapacityFixtures extends Fixture{

	public const CAPACITY_REFERENCE = 'capacity';

	public function load(ObjectManager $manager) {	
       $capacities = ['80GO', '180GO', '360GO', '500GO', '75GO', '400GO', '300GO'];

       $i=0;
        foreach($capacities as $c){
            $tmp = new Capacity();

            $tmp->setName($c);
			$this->setReference(self::CAPACITY_REFERENCE.'_'.$i, $tmp);
			$i++;

            $manager->persist($tmp);
        }

        $manager->flush();

    }
}