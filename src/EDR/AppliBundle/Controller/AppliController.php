<?php

namespace EDR\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppliController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('EDRAppliBundle:Categorie')->findAll();
        
        return $this->render('EDRAppliBundle:Appli:index.html.twig', array(
            'categories' => $categories
        ));
        
    }
}
