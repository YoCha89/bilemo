<?php

namespace App\DataFixtures;
use App\Entity\CellPhone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Faker\Provider\DateTime;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CellPhoneFixtures  extends Fixture {

	public const CELL_PHONE_REFERENCE = 'cellPhone';


	public function load(ObjectManager $manager) {

		$brands = ['iPhone', 'Samsung', 'Oppo', 'Huawei', 'Xiaomi', 'FairPhone'];
        $colors = ['Blue', 'Red', 'Yellow', 'Green', 'Purple', 'White', 'Black', 'Orange'];
        $capacities = ['80GO', '180GO', '360GO', '500GO', '75GO', '400GO', '300GO'];



		for ($count = 0; $count < 100; $count++) {

			$brand = array_rand(array_flip($brands),1);
	        $color = array_rand(array_flip($colors),1);
	        $capacity = array_rand(array_flip($capacities),1);

	        $model = strtoupper($brand . $capacity. strtoupper(substr($color, 0, 3)));
			$tmp = new CellPhone();

            $tmp->setBrand($brand);
            $tmp->setColor($color);
            $tmp->setCapacity($capacity);
			$tmp->setModel($model);

			$manager->persist($tmp);
        }

        $manager->flush();

	}

}