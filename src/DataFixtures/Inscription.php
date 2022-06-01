<?php

namespace App\DataFixtures;
use App\Entity\Inscription as EntityInscription;
use App\Entity\Inscription as EntityEtudiant;
use App\Entity\Inscription as EntityClasse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Inscription extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        {
        
            $data=new EntityInscription();
            $etudiant = new EntityEtudiant();
            $classe = new EntityClasse();
    
            $annee=rand(2019,2020);
            // $data->setAnneeScolaire($annee);
            // $data ->setClasse("L1IAGE");
            // $data->setEtudiant("Etudiant".$i);
            $manager->persist($data);

            

        $manager->flush();
    }
 }
}