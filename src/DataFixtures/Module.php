<?php

namespace App\DataFixtures;

use App\Entity\Module as EntityModule;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Module extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i = 1; $i <=10; $i++) {
            $module = new EntityModule();
            $module->setLibelle('Module '.$i);
            $manager->persist($module);
            $this->addReference("Module".$i, $module);
            }

        $manager->flush();
    }
}
