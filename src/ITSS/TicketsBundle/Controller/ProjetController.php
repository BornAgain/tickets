<?php

namespace ITSS\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use \ITSS\UserBundle\Entity\User;

/**
 * @Route("/project")
 */
class ProjetController extends Controller {

    /**
     * @Route("/",name="itss_tickets_project_index")
     * @Template()
     */
    public function indexAction() {
    // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
    if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
      // Sinon on déclenche une exception « Accès interdit »
      throw new AccessDeniedException('Accès limité aux auteurs.');
    }        
    
    
        $user = new User();
        $user = $this->container->get('security.context')->getToken()->getUser();

//        $entities = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Projet")->findAll();
        //echo $user->getClient()->getProjects();
        // Si l'utilisateur est un client
        if ($user->getClient() != null) {
            // $entities = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Projet")->findOneByIdJoinedToClient($user->getClient()->getId());
            $entities = $user->getClient()->getProjects();
            
            
            // Sinon c'est dans ce cas un administrateur
        } else {
            $entities = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Projet")->findAll();
        }
        return array(
            'entities' => $entities
        );
    }

    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"},name="itss_tickets_project_see")
     * @Template()
     */
    public function seeAction($id) {
    // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
    if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
      // Sinon on déclenche une exception « Accès interdit »
      throw new AccessDeniedException('Accès limité aux auteurs.');
    }         
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ITSSTicketsBundle:Projet")->find($id);
        return array(
            "entity" => $entity
        );
    }

    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"},name="itss_tickets_project_update")
     * @Template()
     */
    public function updateAction($id, Request $request) {
    // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
    if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
      // Sinon on déclenche une exception « Accès interdit »
      throw new AccessDeniedException('Accès limité aux auteurs.');
    }         
        $entity = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Projet")->find($id);
        $form = $this->get('form.factory')->create(new \ITSS\TicketsBundle\Form\ProjetType, $entity);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('itss_tickets_project_see', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView()
        );
    }

    /**
     * @Route("/delete/{id}", requirements={"id" = "\d+"},name="itss_tickets_project_delete")
     */
    public function deleteAction($id) {
    // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
    if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
      // Sinon on déclenche une exception « Accès interdit »
      throw new AccessDeniedException('Accès limité aux auteurs.');
    }         
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ITSSTicketsBundle:Projet")->find($id);
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("itss_tickets_project_index"));
    }

    /**
     * @Route("/add",name="itss_tickets_project_add")
     * @Template()
     */
    public function addAction(Request $request) {
    // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
    if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
      // Sinon on déclenche une exception « Accès interdit »
      throw new AccessDeniedException('Accès limité aux auteurs.');
    }         
        $entity = new \ITSS\TicketsBundle\Entity\Projet();
        $form = $this->get('form.factory')->create(new \ITSS\TicketsBundle\Form\ProjetType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('itss_tickets_project_see', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView()
        );
    }

}
