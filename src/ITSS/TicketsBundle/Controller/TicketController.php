<?php

namespace ITSS\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use \ITSS\UserBundle\Entity\User;

/**
 * @Route("/ticket")
 */
class TicketController extends Controller {

    /**
     * @Route("/",name="itss_tickets_ticket_index")
     * @Template()
     */
    public function indexAction() {
        $user = new User();
        $user = $this->container->get('security.context')->getToken()->getUser();



        if (!$user->isSuperAdmin()) {
            $entities = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Ticket")->findOneByIdJoinedToUser($user->getId());
            // Sinon c'est dans ce cas un administrateur
        } else {
            $entities = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Ticket")->findAll();
            //$entities = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Ticket")->findOneByIdJoinedToUser($user->getId());
        }

        return array(
            'entities' => $entities
        );
    }

    /**
     * @Route("/see/{id}", requirements={"id" = "\d+"},name="itss_tickets_ticket_see")
     * @Template()
     */
    public function seeAction($id, Request $request) {
        $user = new User();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $entity = new \ITSS\TicketsBundle\Entity\Ticket();
        $entity = $em->getRepository("ITSSTicketsBundle:Ticket")->find($id);

        if ($user->getId() != $entity->getUser()->getId()) {
            throw $this->createNotFoundException('The ticket does not exist');
        }


        $entityComment = new \ITSS\TicketsBundle\Entity\Comment();
        $form = $this->get('form.factory')->create(new \ITSS\TicketsBundle\Form\CommentType(), $entityComment);

        if ($form->handleRequest($request)->isValid()) {
            $entityComment->setTicket($entity);
            $em = $this->getDoctrine()->getManager();

            $entityComment->setUser($user);

            $em->persist($entityComment);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice_ticket_add', 'Comment added.');

            $entityComment = new \ITSS\TicketsBundle\Entity\Comment();
        }

        return array("entity" => $entity, "form" => $form->createView()
        );
    }

    /**
     * @Route("/update/{id}", requirements={"id" = "\d+"},name="itss_tickets_ticket_update")
     * @Template()
     */
    public function updateAction($id, Request $request) {
        $user = new User();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $entity = $this->getDoctrine()->getManager()->getRepository("ITSSTicketsBundle:Ticket")->find($id);

        if ($user->getId() != $entity->getUser()->getId()) {
            throw $this->createNotFoundException('The ticket does not exist');
        }

        $form = $this->get('form.factory')->create(new \ITSS\TicketsBundle\Form\TicketType, $entity);
        if ($form->handleRequest($request)->isValid()) {
            $entity->setDateEdit(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('itss_tickets_ticket_see', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView()
        );
    }

    /**
     * @Route("/delete/{id}", requirements={"id" = "\d+"},name="itss_tickets_ticket_delete")
     */
    public function deleteAction($id) {
        $user = new User();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ITSSTicketsBundle:Ticket")->find($id);

        if ($user->getId() != $entity->getUser()->getId()) {
            throw $this->createNotFoundException('The ticket does not exist');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("itss_tickets_ticket_index"));
    }

    /**
     * @Route("/add",name="itss_tickets_ticket_add")
     * @Template()
     */
    public function addAction(Request $request) {
        $user = $this->container->get('security.context')->getToken()->getUser();


        $entity = new \ITSS\TicketsBundle\Entity\Ticket();
        $form = $this->get('form.factory')->create(new \ITSS\TicketsBundle\Form\TicketType($user->getClient()->getId()), $entity);

        $entity->setUser($user);


        if ($form->handleRequest($request)->isValid()) {
//            $entity->setDateCreate(new \DateTime());
//            $entity->setDateEdit(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('itss_tickets_ticket_see', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView()
        );
    }

}
