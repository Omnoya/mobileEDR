<?php

namespace EDR\AppliBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EDR\AppliBundle\Entity\Etablissement;
use EDR\AppliBundle\Form\EtablissementType;

/**
 * Etablissement controller.
 *
 */
class EtablissementController extends Controller
{
    /**
     * Lists all Etablissement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etablissements = $em->getRepository('EDRAppliBundle:Etablissement')->findAll();
        // récupere moi toute les données dans la table etablissement //
        return $this->render('EDRAppliBundle:etablissement:index.html.twig', array(
            'etablissements' => $etablissements,
        ));
    }

    /**
     * Creates a new Etablissement entity.
     *
     */
    public function newAction(Request $request)
    {
        $etablissement = new Etablissement();
        $form = $this->createForm('EDR\AppliBundle\Form\EtablissementType', $etablissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etablissement); // stock et verification des données 
            $em->flush();

            return $this->redirectToRoute('etablissement_show', array('id' => $etablissement->getId()));
        }

        return $this->render('EDRAppliBundle:etablissement:new.html.twig', array(
            'etablissement' => $etablissement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Etablissement entity.
     *
     */
    public function showAction(Etablissement $etablissement)
    {
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($etablissement);

        $id_etab = $etablissement->getId();
        $Avis_etablissement = $em->getRepository('EDRAppliBundle:Avis')->getAvis_etablissement($id_etab);

        return $this->render('EDRAppliBundle:etablissement:show.html.twig', array(
            'etablissement' => $etablissement,
            'avis_etablissement' => $Avis_etablissement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays restaurants by category.
     *
     */
    public function showByCategoryAction($category, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('EDRAppliBundle:Categorie')->findAll();

        $etablissements = $em->getRepository('EDRAppliBundle:Etablissement')->getEtabWithCategory($category);
        
        $form = $this->createForm('EDR\AppliBundle\Form\EtabFindByTagType');
        if ($request->isMethod('POST')) {
            $id = $request->request->get('etab_find_by_tag')['nom'];

            $etablissements = $em->getRepository('EDRAppliBundle:Etablissement')->getEtabWithTag($id);
            //$tags_etab = $etablissements[0]->getTags()->getSnapshot();
            //$tags_etab = $em->getRepository('EDRAppliBundle:Etablissement')->findById($etablissements[0]->getId());
        }

        /*// Récupération de la liste des tags de chaque établissement
        $tags = [];
        foreach($etablissements as $etablissement){
            foreach($etablissement->getTags() as )
        }*/

        return $this->render('EDRAppliBundle:Appli:show.html.twig', array(
            'etablissements' => $etablissements,
            'categories' => $categories,
            'form' => $form->createView(),
            //"tags_etab" => $tags_etab
        ));
        

    }

    public function showByTagAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('EDRAppliBundle:Categorie')->findAll();

        $form = $this->createForm('EDR\AppliBundle\Form\EtabFindByTagType');
        $id = $request->request->get('etab_find_by_tag')['nom'];

        $etablissements = $em->getRepository('EDRAppliBundle:Etablissement')->findBy(array('id_tag' => $id));

        return $this->render('EDRAppliBundle:Appli:index.html.twig', array(
            'categories' => $categories,
            'etablissements' => $etablissements,
            'form' => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Etablissement entity.
     *
     */
    public function editAction(Request $request, Etablissement $etablissement)
    {
        $deleteForm = $this->createDeleteForm($etablissement);
        $editForm = $this->createForm('EDR\AppliBundle\Form\EtablissementType', $etablissement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em = $this->getDoctrine()->getManager();

            if ($editForm->get('uploadPhoto')->getData() != null) {
                //unlink(__DIR__.'/../../../../web/uploads/photos/'.$etablissement->getPhoto());
                $etablissement->removeUpload();
                //$etablissement->setPhoto(null);
            }

            $etablissement->preUpload();

            $em->persist($etablissement);
            $em->flush();

            return $this->redirectToRoute('etablissement_edit', array('id' => $etablissement->getId()));
        }

        return $this->render('EDRAppliBundle:etablissement:edit.html.twig', array(
            'etablissement' => $etablissement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView()
        ));
    }

    /**
     * Deletes a Etablissement entity.
     *
     */
    public function deleteAction(Request $request, Etablissement $etablissement)
    {
        $form = $this->createDeleteForm($etablissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etablissement);
            $em->flush();
        }

        return $this->redirectToRoute('etablissement_index');
    }

    /**
     * Creates a form to delete a Etablissement entity.
     *
     * @param Etablissement $etablissement The Etablissement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Etablissement $etablissement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etablissement_delete', array('id' => $etablissement->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
