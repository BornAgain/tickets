<?php

namespace ITSS\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/client")
 */
class ClientController extends Controller {

    /**
     * @Route("/",name="itss_tickets_client_index")
     * @Template()
     */
    public function indexAction() {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux auteurs.');
        }
        $entities = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Client")->findAll();

        return array(
            'entities' => $entities
        );
    }

    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"},name="itss_tickets_client_see")
     * @Template()
     */
    public function seeAction($id) {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux auteurs.');
        }
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ITSSTicketsBundle:Client")->find($id);
        return array(
            "entity" => $entity
        );
    }

    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"},name="itss_tickets_client_update")
     * @Template()
     */
    public function updateAction($id, Request $request) {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux auteurs.');
        }
        $entity = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Client")->find($id);
        $form = $this->get('form.factory')->create(new \ITSS\TicketsBundle\Form\ClientType, $entity);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('itss_tickets_client_see', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView()
        );
    }

    /**
     * @Route("/delete/{id}", requirements={"id" = "\d+"},name="itss_tickets_client_delete")
     */
    public function deleteAction($id) {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux auteurs.');
        }
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ITSSTicketsBundle:Client")->find($id);
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("itss_tickets_client_index"));
    }

    /**
     * @Route("/add",name="itss_tickets_client_add")
     * @Template()
     */
    public function addAction(Request $request) {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux auteurs.');
        }
        $entity = new \ITSS\TicketsBundle\Entity\Client();
        $form = $this->get('form.factory')->create(new \ITSS\TicketsBundle\Form\ClientType, $entity);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('itss_tickets_client_see', array('id' => $entity->getId())));
        }
//        var_dump($form->createView());
        return array(
            'form' => $form->createView()
        );
    }

}
