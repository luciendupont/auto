<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $marque = new Marque();
        $marque ->setNom('vsp');
        $marque->setModele('voituresanspermis');
        $marque->setAnnee('2020');
        $marque->setPrix('11100.00');
        $marque->setImage('v.png');    
        $manager->persist($marque);

        $marque1 = new Marque();
        $marque1 ->setNom('peugeot');
        $marque1->setModele('peugeot_suv');
        $marque1->setPrix('21200.00');
        $marque1->setAnnee('2020');
        $marque1->setImage('p.png');    
        $manager->persist($marque1);

        $marque2 = new Marque();
        $marque2 ->setNom('citroen');
        $marque2->setModele('citroen_aircross');
        $marque2->setPrix('31200');
        $marque2->setAnnee('2021');
        $marque2->setImage('c.png');    
        $manager->persist($marque2);

        $marque3 = new Marque();
        $marque3 ->setNom('bmw');
        $marque3->setModele('bmw_x');
        $marque3->setAnnee('2022');
        $marque3->setPrix('46100.00');
        $marque3->setImage('b.png');    
        $manager->persist($marque3);

        $marque4 = new Marque();
        $marque4 ->setNom('americaine');
        $marque4->setModele('americaine-suv');
        $marque4->setAnnee('2021');
        $marque4->setPrix('56100.00');
        $marque4->setImage('a.png');    
        $manager->persist($marque4);

        




















        $manager->flush();
    }
}
