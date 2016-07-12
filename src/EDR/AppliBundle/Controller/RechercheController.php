<?php

namespace EDR\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RechercheController extends Controller
{
    public function indexAction()
    {
        return $this->render('EDRAppliBundle:Map:recherche.html.twig');
    }
}