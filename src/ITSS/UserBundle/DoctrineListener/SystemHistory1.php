<?php

namespace ITSS\UserBundle\DoctrineListener;

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
    public function __construct(\Symfony\Component\DependencyInjection\Container $container) {
        $this->container = $container;        
    }
    
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)  {
        $user = $this->container->get('security.context')->getToken()->getUser();
        var_dump($user);
        exit();
        
        $response = new RedirectResponse('/');
        return $response;
    }    

}
