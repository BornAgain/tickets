<?php

namespace AC\UserBundle\DoctrineListener;

use Doctrine\ORM\Event\LifecycleEventArgs;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SystemHistory
 *
 * @author inouss
 */
class SystemHistory {

    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\Container $container) {
        $this->container = $container;
    }

    public function postPersist(LifecycleEventArgs $args) {
//        $this->container->get('doctrine')
//        $this->em->persist($entityCNOPS);
//        $this->em->flush();
        
        $languages = $this->container->get('doctrine');
    }

    public function onAuthenticationSuccess(Request $request, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token) {
        $this->logger->info('Authentification');
    }

}
