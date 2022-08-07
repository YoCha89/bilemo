<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Faker\Factory;

class UserFixtures extends Fixture 
{
    public const USER_REFERENCE = 'user';

    public function load(ObjectManager $manager): void
    {  
        $faker = Factory::create('fr_FR');
        $pass = password_hash('abcd1234', PASSWORD_DEFAULT);
        $rand=['azertyuiopqsdfghjklmwxcvbn'];

        $userAdmin = new User();
        $userAdmin->setEmail('admin@gmail.com');
        $userAdmin->setRoles(['ROLE_SUPER_ADMIN']);
        $userAdmin->setPassword($pass, PASSWORD_DEFAULT);

        $manager->persist($userAdmin);

        for($i=0; $i<=1; $i++){

            $client = new User();
            $client->setEmail(str_replace(' ','',$faker->name().'@gmail.com'));
            $client->setRoles(['ROLE_ADMIN']);
            $client->setPassword($pass, PASSWORD_DEFAULT);

            $manager->persist($client);

            for($j=0; $j<=5; $j++){
                $user = new User();
                $user->setEmail(str_replace(' ','',$faker->name().'@gmail.com'));
                $user->setPassword($pass, PASSWORD_DEFAULT);
                $client->setUserClient($client);
                $manager->persist($user);

            }

        }

        $manager->flush();

    }
}
