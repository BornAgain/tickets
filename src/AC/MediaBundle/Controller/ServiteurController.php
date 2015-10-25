<?php

namespace AC\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
     * @Route("/serviteur")
     */
class ServiteurController extends Controller
{
    /**
     * @Route("/ajouter", name="ac_media_bundle_serviteur_ajouter")
     * @Template()
     */
    public function ajouterAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \AC\MediaBundle\Entity\Serviteur();
        $form = $this->get('form.factory')->create(new \AC\MediaBundle\Form\ServiteurType, $entity);
        
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ac_media_bundle_serviteur_lister', array('id' => $entity->getId())));   }
             return array(
                'form' => $form->createView()
            ); 
    }

    /**
     * @Route("/modifier/{id}", name="ac_media_bundle_serviteur_modifier")
     * @Template()
     */
    public function modifierAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = $this->getDoctrine()->getManager()->getRepository("ACMediaBundle:Serviteur")->find($id);
        $form = $this->get('form.factory')->create(new  \AC\MediaBundle\Form\ServiteurType, $entity);
     
        if ($form->handleRequest($request)->isValid()) {
          
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ac_media_bundle_serviteur_lister', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView());
        
    }

    /**
     * @Route("/supprimer/{id}", name="ac_media_bundle_serviteur_supprimer")
     * @Template()
     */
    public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ACMediaBundle:Serviteur")->find($id);
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("ac_media_bundle_serviteur_lister"));
    }

    /**
     * @Route("/lister", name="ac_media_bundle_serviteur_lister")
     * @Template()
     */
    public function listerAction()
    {
         $entities = $this->getDoctrine()->getManager()->getRepository("ACMediaBundle:Serviteur")->findAll();

        return array(
            'entities' => $entities
        );  
        
    }

    /**
     * @Route("/voir/{id}", name="ac_media_bundle_serviteur_voir")
     * @Template()
     */
    public function voirAction($id)
    {
        $entity = $this->getDoctrine()
        ->getRepository('ACMediaBundle:Serviteur')
        ->find($id);

       
        return array(
            "entity"=>$entity
                // ...
            );     }

}
