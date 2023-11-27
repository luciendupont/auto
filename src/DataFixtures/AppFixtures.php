<?php

namespace App\DataFixtures;

use App\Entity\Concession;
use App\Entity\Marque;
use App\Entity\Personne;
use App\Entity\User;
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

        $concession = new Concession();
        $concession->setNomdelavoiture('vsp1');
        $concession->setMarquedelavoiture('aixam');
        $concession->setDescription('voiture sans permis de coueleur  rouge');
        $concession->setVoituredisponible('oui');
        $concession->setPrixdelavoiture('11000.00');
        $concession->setImagedelavoiture('v1.png');
        $manager->persist($concession);

        $concession1 = new Concession();
        $concession1->setNomdelavoiture('vsp2');
        $concession1->setMarquedelavoiture('aixam');
        $concession1->setDescription('voiture sans permis de couleur blanches avec le toit rouge');
        $concession1->setVoituredisponible('oui');
        $concession1->setPrixdelavoiture('11100.00');
        $concession1->setImagedelavoiture('v2.png');
        $manager->persist($concession1);

        $concession2 = new Concession();
        $concession2->setNomdelavoiture('vsp3');
        $concession2->setMarquedelavoiture('aixam');
        $concession2->setDescription('voiture sans permis de coueleur bleu ');
        $concession2->setVoituredisponible('oui');
        $concession2->setPrixdelavoiture('11200.00');
        $concession2->setImagedelavoiture('v3.png');
        $manager->persist($concession2);

        $concession3 = new Concession();
        $concession3->setNomdelavoiture('peugeot1');
        $concession3->setMarquedelavoiture('peugeot 2008');
        $concession3->setDescription('peugeot 2008 de couleur rouge');
        $concession3->setVoituredisponible('oui');
        $concession3->setPrixdelavoiture('21100.00');
        $concession3->setImagedelavoiture('p.png');
        $manager->persist($concession3);

        $concession4 = new Concession();
        $concession4->setNomdelavoiture('peugeot2');
        $concession4->setMarquedelavoiture('peugeot 3008');
        $concession4->setDescription('peugeot 3008  de couleur bleu');
        $concession4->setVoituredisponible('oui');
        $concession4->setPrixdelavoiture('21200.00');
        $concession4->setImagedelavoiture('p2.png');
        $manager->persist($concession4);

        $concession5 = new Concession();
        $concession5->setNomdelavoiture('peugeot3');
        $concession5->setMarquedelavoiture('peugeot 5008');
        $concession5->setDescription('peugeot5008 de couleur grise');
        $concession5->setVoituredisponible('oui');
        $concession5->setPrixdelavoiture('21300.00');
        $concession5->setImagedelavoiture('p3.png');
        $manager->persist($concession5);

        $concession6 = new Concession();
        $concession6->setNomdelavoiture('citroen1');
        $concession6->setMarquedelavoiture('citroen c 3 aircross');
        $concession6->setDescription('citroen c3 aircross porte bagage rouge');
        $concession6->setVoituredisponible('oui');
        $concession6->setPrixdelavoiture('31000');
        $concession6->setImagedelavoiture('c1.png');
        $manager->persist($concession6);

        $concession7 = new Concession();
        $concession7->setNomdelavoiture('citroen2');
        $concession7->setMarquedelavoiture('citroen c5 aircross');
        $concession7->setDescription('citroen  c5 aircross balnche noir et rouge');
        $concession7->setVoituredisponible('oui');
        $concession7->setPrixdelavoiture('32000.00');
        $concession7->setImagedelavoiture('c2.png');
        $manager->persist($concession7);

        $concession8 = new Concession();
        $concession8->setNomdelavoiture('citroen3');
        $concession8->setMarquedelavoiture('citroen c4 aircross');
        $concession8->setDescription('citroen c4  grise');
        $concession8->setVoituredisponible('oui');
        $concession8->setPrixdelavoiture('34000.00');
        $concession8->setImagedelavoiture('c4.png');
        $manager->persist($concession8);

        $concession9 = new Concession();
        $concession9->setNomdelavoiture('bmw1');
        $concession9->setMarquedelavoiture('bmw x1');
        $concession9->setDescription('bmw  verte version  x ');
        $concession9->setVoituredisponible('oui');
        $concession9->setPrixdelavoiture('43000.00');
        $concession9->setImagedelavoiture('b1.png');
        $manager->persist($concession9);

        $concession10 = new Concession();
        $concession10->setNomdelavoiture('bmw2');
        $concession10->setMarquedelavoiture('bmw x2');
        $concession10->setDescription('voitures blanche  de marque  bmw  de serie x');
        $concession10->setVoituredisponible('oui');
        $concession10->setPrixdelavoiture('44000.00');
        $concession10->setImagedelavoiture('b2.png');
        $manager->persist($concession10);

        $concession11 = new Concession();
        $concession11->setNomdelavoiture('bmw3');
        $concession11->setMarquedelavoiture('bmwx5');
        $concession11->setDescription(' bmw avec prise  air  grise ');
        $concession11->setVoituredisponible('oui');
        $concession11->setPrixdelavoiture('46000.00');
        $concession11->setImagedelavoiture('b3.png');
        $manager->persist($concession11);

        $concession12 = new Concession();
        $concession12->setNomdelavoiture('jeep1');
        $concession12->setMarquedelavoiture('jeep');
        $concession12->setDescription(' jeep de couleur  vert jaune ');
        $concession12->setVoituredisponible('oui');
        $concession12->setPrixdelavoiture('51000.00');
        $concession12->setImagedelavoiture('a1.png');
        $manager->persist($concession12);

        $concession13 = new Concession();
        $concession13->setNomdelavoiture('jeep2');
        $concession13->setMarquedelavoiture('jeep');
        $concession13->setDescription('jeep de  coueleur  bordeaux');
        $concession13->setVoituredisponible('oui');
        $concession13->setPrixdelavoiture('52000.00');
        $concession13->setImagedelavoiture('a2.png');
        $manager->persist($concession13);

        $concession14= new Concession();
        $concession14->setNomdelavoiture('dodge');
        $concession14->setMarquedelavoiture('dodge');
        $concession14->setDescription('dogde  de coueleur  noir');
        $concession14->setVoituredisponible('oui');
        $concession14->setPrixdelavoiture('61000.00');
        $concession14->setImagedelavoiture('a3.png');
        $manager->persist($concession14);

        $personne=new Personne();
        $personne->setNom('');
        $personne->setPrenom('');
        $personne->setDatedenaissance('');
        $personne->setDatedupermis('');
        $personne->setMail('');
        $personne->setTelephone('');
        $personne->setAdresse('');
        $personne->setCodepostal('');
        $personne->setVille('');
        $manager->persist($personne);


        $user = new User();
        $user->setNom('dupont')
              ->setPrenom('lucien')
              ->setEmail('lucienluludupont@gmail.com')
              ->setTelephone('0610041848')
              ->setPassword(password_hash('Amiens80', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_ADMIN', 'ROLE_USER'])
              ->setAdresse('7 mail roger salengro apt 55')
              ->setCp('80090')
              ->setVille('Amiens');
        $manager->persist($user);


        $user1 = new User();
        $user1->setPrenom('brigitte')
              ->setNom('dupont')
              ->setEmail('kelly@gmail.com')
              ->setTelephone('7896547800')
              ->setPassword(password_hash('password', PASSWORD_DEFAULT))
              ->setRoles(['ROLE_USER'])
              ->setAdresse('308 Post Avenue')
              ->setCp('69000')
              ->setVille('Lugdunum');
        $manager->persist($user1);
        $manager->flush();
    }
}
