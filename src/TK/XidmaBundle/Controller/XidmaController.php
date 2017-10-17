<?php

namespace TK\XidmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class XidmaController extends Controller
{
    public function accueilAction()
    {
        return $this->render('TKXidmaBundle:Xidma:accueil.html.twig');
    }

    public function directAction()
    {
        return $this->render('TKXidmaBundle:Xidma:direct.html.twig');
    }

    public function galerieAction()
    {
        return $this->render('TKXidmaBundle:Xidma:galerie.html.twig');
    }

    public function searchAction()
    {
        return $this->render('TKXidmaBundle:Xidma:search.html.twig');
    }
}