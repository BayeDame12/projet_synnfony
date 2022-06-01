<?php

namespace App\DataFixtures;
use App\Entity\Ac as EntityAc;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Ac extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      
            $ac=new EntityAc();        
            $ac->setNomComplet("Malick Ba");
            $ac->setLogin("Malick@gmail.com");
            $ac->setPassword("Malick123");
            $ac->setRole("ROLE_AC");
            $manager->persist($ac);
        $manager->flush();
    }
}
