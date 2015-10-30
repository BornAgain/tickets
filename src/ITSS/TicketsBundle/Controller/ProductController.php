<?php

namespace ITSS\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

    /**
     * @Route("/index2")
     */
class ProductController extends Controller
{
    /**
     * @Route("/index2")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/see")
     * @Template()
     */
    public function seeAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/update")
     * @Template()
     */
    public function updateAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/delete")
     * @Template()
     */
    public function deleteAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/add")
     * @Template()
     */
    public function addAction()
    {
        return array(
                // ...
            );    }

}
