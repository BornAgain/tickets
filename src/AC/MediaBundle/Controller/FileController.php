<?php

namespace AC\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/file")
 * @Template()
 */
class FileController extends Controller {

    /**
     * @Route("/ajouter/{id}", name="ac_media_bundle_file_ajouter")
     * @Template()
     */
    public function ajouterAction(\Symfony\Component\HttpFoundation\Request $request, \AC\MediaBundle\Entity\Evenement $evenement) {

        $entity = new \AC\MediaBundle\Entity\File();
        $form = $this->get('form.factory')->create(new \AC\MediaBundle\Form\FileType(), $entity);

        if ($form->handleRequest($request)->isValid()) {

            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $entity->getFile();

            // Generate a unique name for the file before saving it
            $fileName = $file->getClientOriginalName();

            // Move the file to the directory where brochures are stored
            $rootDir = $this->container->getParameter('app_root_files');
            $rootDir .= \AC\MediaBundle\Services\EvenementService::generateUrl($evenement);
            $file->move($rootDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $entity->setName($fileName);
            $entity->setType("string");
            $entity->setUrl($fileName);

            $entity->setEvenement($evenement);


            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            return $this->redirect($this->generateUrl('ac_media_bundle_evenement_voir', array('id' => $entity->getEvenement()->getId())));
        }

        return array(
            'form' => $form->createView()
        );
    }

    /**
     * @Route("/supprimer/{id}", name="ac_media_bundle_file_supprimer")
     */
    public function supprimerAction($id) {

        $entity = new \AC\MediaBundle\Entity\File();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("ACMediaBundle:File")->find($id);
        $parent = $entity->getEvenement();
        $parent_id = $parent->getId();


        $oldDir = $this->container->getParameter('app_root_files');
        $oldDir .= \AC\MediaBundle\Services\EvenementService::generateUrl($parent);

        $newDir = $this->container->getParameter('app_root_files') . "trash/";


        rename($oldDir . $entity->getName(), $newDir . $entity->getName());


        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl("ac_media_bundle_evenement_voir", array('id' => $parent_id)));
    }

    /**
     * @Route("/download/{id}", name="ac_media_bundle_file_download")
     */
    public function downloadAction(\AC\MediaBundle\Entity\File $file) {

        $doc = $this->container->getParameter('app_root_files');
        $doc .= \AC\MediaBundle\Services\EvenementService::generateUrl($file->getEvenement());
        $doc .= $file->getName();
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->setContent(file_get_contents($doc));
        $response->headers->set('Content-Type', 'audio'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-disposition', 'filename=' . $file->getName());

        return $response;
    }

}
