<?php

namespace EDR\AppliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppliController extends Controller
{
    public function indexAction()
    {
        return $this->render('EDRAppliBundle:Appli:index.html.twig');
    }
}
