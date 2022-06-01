<?php

namespace App\DataFixtures;
use App\Entity\Classe as EntityClasse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Classe extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $niveaux=["L1","L2","L3"];
        $filieres=["MAE","IAGE","GLRS"];
            for ($i = 1; $i <=10; $i++) {
            $pos= rand(0,2);
            $classe = new EntityClasse();
            $classe->setLibelle($niveaux[$pos]."".$filieres[$pos]);            $classe->setNiveau($niveaux[$pos]);
            $classe->setFilliere($filieres[$pos]);
            $manager->persist($classe);
            $this->addReference("Classe".$i, $classe);
            }

        $manager->flush();
    }
}
