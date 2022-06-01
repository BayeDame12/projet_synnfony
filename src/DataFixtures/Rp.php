<?php

namespace App\DataFixtures;
use App\Entity\Rp as EntityRp;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Rp extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      
            $rp=new EntityRp();        
            $rp->setNomComplet("Aly Diop");
            $rp->setLogin("Aly@gmail.com");
            $rp->setPassword("Aly123");
            $rp->setRole("ROLE_RP");
            $manager->persist($rp);
        $manager->flush();
    }
}
