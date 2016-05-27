<?php

namespace EDR\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EDRApplicationBundle:Default:index.html.twig');
    }
}
