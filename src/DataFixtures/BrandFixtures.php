<?php

namespace App\DataFixtures;
use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Faker\Provider\DateTime;

class BrandFixtures extends Fixture {

	public const BRAND_REFERENCE = 'brand';

	public function load(ObjectManager $manager) {

		$brand = ['iPhone', 'Samsung', 'Oppo', 'Huawei', 'Xiaomi', 'FairPhone'];
		$i = 0;

		foreach($brand as $b){
			$tmp = new Brand();

			$tmp->setName($b);
			$this->setReference(self::BRAND_REFERENCE.'_'.$i, $tmp);
			$i++;
			
			$manager->persist($tmp);
		}

			$manager->flush();
	}
}