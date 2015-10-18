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
class MediaFixture implements Doctrine\Common\DataFixtures\FixtureInterface {

    public function load(\Doctrine\Common\Persistence\ObjectManager $manager) {
        $themeDuMois = array("Vision", "L'appel Divin", "La protection Divine", "L'Adoration", "La bénédiction",
            "La direction", "L'invincibilité", "L'alliance", "Le surnaturel");
        $themeDuMoisObjets = array();

        foreach ($themeDuMois as $key => $themeDM) {
            $obj = new \AC\MediaBundle\Entity\ThemeDuMois();
            $obj->setDate(new \DateTime());
            $obj->setTheme($themeDM);
            $obj->setMois('0'.($key+1));
            $manager->persist($obj);
            $themeDuMoisObjets[] = $obj;
        }

        $orateur = array("Pst Doudou", "Pst Arlette", "Ancienne Laure", "Ancien Cyrille", "Ancien Eli");
        $orateurObjets = array();

        foreach ($orateur as $ora) {
            $obj = new \AC\MediaBundle\Entity\Serviteur();
            $obj->setName($ora);
            $obj->setType("orateur");
                    
            $manager->persist($obj);
            $orateurObjets[] = $obj;
        }
        
        $conducteur = array("Grace Lalle", "Jean-Christophe", "Ancien Cyrille", "Ancien Eli");
        $conducteurObjets = array();

        foreach ($conducteur as $cond) {
            $obj = new \AC\MediaBundle\Entity\Serviteur();
            $obj->setName($cond);
            $obj->setType("conducteur");
                    
            $manager->persist($obj);
            $conducteurObjets[] = $obj;
        }
        
        for ($i=0;$i<100;$i++){
            $evenement = new \AC\MediaBundle\Entity\Evenement();
            $evenement->setTheme("Theme ".$i);
            $evenement->setChoeur("choeur");
            $evenement->setDate(new \DateTime());
            $evenement->setTags("tags");
            $evenement->setType("Culte");
            $evenement->setThemeMois($themeDuMoisObjets[($i+1)%8]);
            $evenement->setConducteur($conducteurObjets[($i+1)%4]);
            $evenement->setOrateur($orateurObjets[($i+1)%5]);
            $manager->persist($evenement);
            $manager->flush();
            
        }
    }

}
