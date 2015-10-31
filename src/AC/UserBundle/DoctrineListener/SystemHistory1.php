<?php

namespace AC\UserBundle\DoctrineListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Monolog\Logger;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\RedirectResponse;

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
class SystemHistory1 implements AuthenticationSuccessHandlerInterface{
    protected $container;
    protected $router;
    public function __construct(\Symfony\Component\DependencyInjection\Container $container,\Symfony\Component\Routing\Router $router) {
        $this->container = $container;
        $this->router = $router;
    }
    
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)  {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $log = new \AC\MediaBundle\Entity\Log();
        $log->setUser($user);
        $log->setAction("s'est connecté");
        $log->setDate(new \DateTime());
        $log->setComment("");
        
        $em->persist($log);
        $em->flush();
        
        $response = new RedirectResponse($this->router->generate("ac_media_bundle_evenement_ajouter"));
        return $response;
    }    

}
