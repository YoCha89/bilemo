<?php

namespace App\DataFixtures;
use App\Entity\Brand;
use App\Entity\Capacity;
use App\Entity\Model;
use App\Entity\Color;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ModelFixtures extends Fixture implements DependentFixtureInterface{

	public const MODEL_REFERENCE = 'model';


	public function load(ObjectManager $manager){

        $faker = Factory::create('fr_FR');

        $i=0;

        for ($count = 0; $count < 60; $count++){

            $tmp = new Model();


			$brand = $this->getReference(BrandFixtures::BRAND_REFERENCE.'_'.$faker->numberBetween(0, 5));
			$color = $this->getReference(ColorFixtures::COLOR_REFERENCE.'_'.$faker->numberBetween(0, 7));
			$capacity = $this->getReference(CapacityFixtures::CAPACITY_REFERENCE.'_'.$faker->numberBetween(0, 6));

			$name = strtoupper(substr($brand->getName(), 0, 3)) . strtoupper(substr($color->getName(), 0, 3)) . $capacity->getName();

            $tmp->setName($name);
            $tmp->setBrand($brand);
            $tmp->setColor($color);
            $tmp->setCapacity($capacity);

			$this->setReference(self::MODEL_REFERENCE.'_'.$i, $tmp);
			$i++;

            $manager->persist($tmp);
        }

        $manager->flush();

    }

	public function getDependencies() {
        return [
            BrandFixtures::class,
            ColorFixtures::class,
            CapacityFixtures::class,
        ];
    }
}