<?php

namespace App\DataFixtures;
use App\Entity\Etudiant as EntityEtudiant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class Etudiant extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $faker = Factory::create('fr_FR');
        // for ($i = 1; $i <=10; $i++) {
            $i = 1;
            $user = new EntityEtudiant();
            $user->setNomComplet("Khadim Niass ");
            $user->setLogin("Khadim@gmail.com");
            $user->setPassword("Khadim".$i);
            $user->setRole("ROLE_ETUDIANT");
            $user->setMatricule("0000"+$i);
            $user->setSexe("M");
            $user->setAdresse("Medina Gounass ");
            $manager->persist($user);
            
        // }

        $manager->flush();
    }
}
