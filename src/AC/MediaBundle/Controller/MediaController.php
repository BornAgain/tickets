<?php

namespace AC\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MediaController extends Controller
{
    /**
     * @Route("/ajouter")
     * @Template()
     */
    public function ajouterAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/modifier")
     * @Template()
     */
    public function modifierAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/lister")
     * @Template()
     */
    public function listerAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/voir")
     * @Template()
     */
    public function voirAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/supprimer")
     * @Template()
     */
    public function supprimerAction()
    {
        return array(
                // ...
            );    }

}
