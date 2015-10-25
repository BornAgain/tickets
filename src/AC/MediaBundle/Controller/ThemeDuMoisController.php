<?php

namespace AC\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
     * @Route("/theme")
     */

class ThemeDuMoisController extends Controller
{
    /**
     * @Route("/ajouter", name="ac_media_bundle_theme_du_mois_ajouter")
     * @Template()
     */
    public function ajouterAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \AC\MediaBundle\Entity\ThemeDuMois();
        $form = $this->get('form.factory')->create(new \AC\MediaBundle\Form\ThemeDuMoisType, $entity);
        
        if($form->handleRequest($request)->isValid())
        {
            $entity->setMois($entity->getDate()->format('m'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ac_media_bundle_theme_du_mois_lister', array('id' => $entity->getId())));   }
             return array(
                'form' => $form->createView()
            ); 
    }

    /**
     * @Route("/modifier/{id}", name="ac_media_bundle_theme_du_mois_modifier")
     * @Template()
     */
    public function modifierAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = $this->getDoctrine()->getManager()->getRepository("ACMediaBundle:ThemeDuMois")->find($id);
        $form = $this->get('form.factory')->create(new \AC\MediaBundle\Form\ThemeDuMoisType, $entity);
     
        if ($form->handleRequest($request)->isValid()) {
          
            $entity->setMois($entity->getDate()->format('m'));            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ac_media_bundle_theme_du_mois_lister', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView());
        
    }

    /**
     * @Route("/supprimer/{id}", name="ac_media_bundle_theme_du_mois_supprimer")
     * @Template()
     */
    public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ACMediaBundle:ThemeDuMois")->find($id);
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("ac_media_bundle_theme_du_mois_lister"));
    }

    /**
     * @Route("/lister", name="ac_media_bundle_theme_du_mois_lister")
     * @Template()
     */
    public function listerAction()
    {
         $entities = $this->getDoctrine()->getManager()->getRepository("ACMediaBundle:ThemeDuMois")->findAll();

        return array(
            'entities' => $entities
        );  
        
    }

    /**
     * @Route("/voir/{id}", name="ac_media_bundle_theme_du_mois_voir")
     * @Template()
     */
    public function voirAction($id)
    {
        $entity = $this->getDoctrine()
        ->getRepository('ACMediaBundle:ThemeDuMois')
        ->find($id);

       
        return array(
            "entity"=>$entity
                // ...
            );     }

}
