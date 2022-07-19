<?php

namespace App\DataFixtures;
use App\Entity\Phone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Faker\Provider\DateTime;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PhoneFixtures  extends Fixture implements DependentFixtureInterface{

	public const PHONE_REFERENCE = 'phone';


	public function load(ObjectManager $manager) {
		$faker = Factory::create('fr_FR');

		$stocks = [0, 10, 20, 30, 40, 50, 60];

		for ($count = 0; $count < 200; $count++) {
			$tmp = new Phone();

			$model = $this->getReference(ModelFixtures::MODEL_REFERENCE.'_'.$faker->numberBetween(0,59));
			$stock = array_rand($stocks);

			$tmp->setModel($model);
			$tmp->setStock($stocks[$stock]);

			$manager->persist($tmp);
        }

        $manager->flush();

	}

	public function getDependencies() {
        return [
            ModelFixtures::class,
        ];
    }
}