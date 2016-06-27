<?php

namespace EDR\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function viewAction()
    {
        return $this->render('UserBundle:User:index.html.twig');
    }
}
