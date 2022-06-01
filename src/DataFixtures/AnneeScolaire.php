<?php

namespace App\DataFixtures;

use App\Entity\AnneeScolaire as EntityAnneeScolaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnneeScolaire extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      
        for ($i=2019; $i <2022 ; $i++) {    
            $data=new EntityAnneeScolaire();
            $annee= $i."-".($i+1);
            $data->setLibelle($annee);
            $manager->persist($data);
            $this->addReference("AnneeScolaire".$i, $data);
        $manager->flush();
    }
}

}