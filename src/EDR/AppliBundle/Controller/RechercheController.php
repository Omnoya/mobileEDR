// src/EDR/AppliBundle/Controller/RechercheController.php

<?php
namespace EDR\AppliBundle\Controller;

class RechercheController extends Controller
{
    public function IndexAction()
    {

        return $this->render(
            'recherche.html.twig',
            array('recherche' => $recherche)
        );
    }
}