<?php

namespace EDR\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EDR\AppliBundle\Entity\Tag;
use Symfony\Component\HttpFoundation\Request;

class AppliController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('EDRAppliBundle:Categorie')->findAll();

        $form = $this->createForm('EDR\AppliBundle\Form\EtabFindByTagType');
        $id = $request->request->get('etab_find_by_tag')['nom'];

        $etablissements = $em->getRepository('EDRAppliBundle:Etablissement')->findBy(array('id' => $id));

        return $this->render('EDRAppliBundle:Appli:index.html.twig', array(
            'categories' => $categories,
            'etablissements' => $etablissements,
            'form' => $form->createView()
        ));
    }
}
