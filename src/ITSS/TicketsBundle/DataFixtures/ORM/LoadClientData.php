<?php

namespace Ac\MediaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadEvenementData
 *
 * @author ydi
 */
class LoadClientData implements FixtureInterface {

    public function load(ObjectManager $manager) {


//CLIENT 
        $clientsTable = array(
            array('AL Baraka Fondep', 'Morocco'),
            array('AL Baraka', 'Tunisia'),
            array('BNM', 'Mauritania'),
            array('UNB', 'Egypt'),
            array('CAIRO', 'Egypt'),
        );

        $clients = array();

        foreach ($clientsTable as $clientTab) {

            $entity = new \ITSS\TicketsBundle\Entity\Client();
            $entity->setName($clientTab[0]);
            $entity->setCountry($clientTab[1]);
            $manager->persist($entity);
            $manager->flush();
            $clients[] = $entity;
        }

        $productsTable = array(
            array('T-Reporting'),
            array('T-DM'),
            array('T-Cartography'),
            array('JBloader'),
            array('T-GIBS'),
        );
        $products = array();
        foreach ($productsTable as $productTab) {

            $entity = new \ITSS\TicketsBundle\Entity\Product();
            $entity->setName($productTab[0]);
            $manager->persist($entity);
            $manager->flush();
            $products[] = $entity;
        }

        $projets = array();
        for ($index = 0; $index < 20; $index++) {
            $nb = rand(0, 4);
            $entity = new \ITSS\TicketsBundle\Entity\Projet();
            $entity->setName($clients[$nb] . " " . $products[$nb]);
            $entity->setClient($clients[$nb]);
            $entity->setProduct($products[$nb]);
            $entity->setStatut("step1");
            $entity->setDateBegin(new \DateTime());
            $entity->setDateEnd(new \DateTime());
            $manager->persist($entity);
            $manager->flush();
            $projets[] = $entity;
        }

        for ($index = 7; $index < 30; $index++) {
            $nb = rand(7, 30);
            $nb2 = rand(0, 4);
            $entity = new \ITSS\TicketsBundle\Entity\Ticket();
            $entity->setTitle("Request ".$index);
            $entity->setProjet($projets[$nb2]);
            $entity->setDateCreate(new \DateTime());
            $entity->setDateEdit(new \DateTime());
            $entity->setContent("My Content");
            $manager->persist($entity);
            $manager->flush();
            $projets[] = $entity;
        }
    }

}
