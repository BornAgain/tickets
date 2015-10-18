<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MediaFixture
 *
 * @author inouss
 */
class MediaFixture implements Doctrine\Common\DataFixtures\FixtureInterface{
    
    
    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {
        $themeDuMois = array("Vision","L'appel Divin","La protection Divine","L'Adoration","La bénédiction",
            "La direction","L'invincibilité","L'alliance","Le surnaturel");
        $themeDuMoisObjets = array();
        
        foreach ($themeDuMois as $themeDM){
            $obj = new \AC\MediaBundle\Entity\ThemeDuMois();
            $obj->setDate(new \Symfony\Component\Validator\Constraints\Date())
            $manager->persist($themeDM);
        }
    }

}
