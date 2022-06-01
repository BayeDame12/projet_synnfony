<?php

namespace App\DataFixtures;

use App\Entity\Professeur as EntityProfesseur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Professeur extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $grade=["MASTER","INGENIEUR","DOCTEUR"];
                
                    $user = new EntityProfesseur();
                    $pos=round(0,2);
                    $user->setNomComplet("Matar Diop");        
                    $user->setRole("ROLE_PROFESSEUR");
                    $user->setGrade($grade[$pos]);
                    $manager->persist($user);
                    // $this->addReference("Professeur".$i, $user);
                    $manager->flush();
}
    
}
