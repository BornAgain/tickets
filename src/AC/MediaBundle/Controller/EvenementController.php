<?php

namespace AC\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/evenement")
 */
class EvenementController extends Controller {

    /**
     * @Route("/ajouter", name="ac_media_bundle_evenement_ajouter")
     */
    public function ajouterAction(\Symfony\Component\HttpFoundation\Request $request) {
        ini_set('memory_limit', '128M');
        $entity = new \AC\MediaBundle\Entity\Evenement();
        $form = $this->get('form.factory')->create(new \AC\MediaBundle\Form\EvenementType, $entity);

        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
                        
            $entity_theme_mois = $this->getDoctrine()
                    ->getRepository('ACMediaBundle:ThemeDuMois')
                    ->findByMois($entity->getDate()->format('m'));          
            
            $entity->setThemeMois($entity_theme_mois[0]);
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            return $this->redirect($this->generateUrl('ac_media_bundle_evenement_voir', array('id' => $entity->getId())));
        }

        return $this->render("ACMediaBundle:Evenement:ajouter.html.twig", array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/modifier/{id}", name="ac_media_bundle_evenement_modifier")
     */
    public function modifierAction($id, \Symfony\Component\HttpFoundation\Request $request) {
        $entity = $this->getDoctrine()->getManager()->getRepository("ACMediaBundle:Evenement")->find($id);
        $form = $this->get('form.factory')->create(new \AC\MediaBundle\Form\EvenementType, $entity);

        if ($form->handleRequest($request)->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $entity_theme_mois = $this->getDoctrine()
                    ->getRepository('ACMediaBundle:ThemeDuMois')
                    ->findByMois($entity->getDate()->format('m'));          
            
            $entity->setThemeMois($entity_theme_mois[0]);            
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ac_media_bundle_evenement_lister', array('id' => $entity->getId())));
        }

        return $this->render("ACMediaBundle:Evenement:modifier.html.twig", array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/supprimer/{id}", name="ac_media_bundle_evenement_supprimer")
     */
    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ACMediaBundle:Evenement")->find($id);
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("ac_media_bundle_evenement_lister"));
    }

    /**
     * @Route("/lister", name="ac_media_bundle_evenement_lister")
     */
    public function listerAction() {
        $entities = $this->getDoctrine()->getManager()->getRepository("ACMediaBundle:Evenement")->findAll();

        return $this->render("ACMediaBundle:Evenement:lister.html.twig", array(
                    'entities' => $entities
        ));
    }

    /**
     * @Route("/voir/{id}", name="ac_media_bundle_evenement_voir")
     */
    public function voirAction($id) {

        $entity = $this->getDoctrine()
                ->getRepository('ACMediaBundle:Evenement')
                ->find($id);

        $action = $this->generateUrl('ac_media_bundle_file_ajouter', array(
            'id' => $entity->getId()
        ));
        $entity_child = new \AC\MediaBundle\Entity\File();
        $form = $this->get('form.factory')->create(new \AC\MediaBundle\Form\FileType(), $entity_child, array('action' => $action,
        ));




        return $this->render("ACMediaBundle:Evenement:voir.html.twig", array(
                    "entity" => $entity,
                    "form" => $form->createView()
        ));
    }

}
