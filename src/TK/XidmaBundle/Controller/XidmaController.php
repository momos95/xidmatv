<?php

namespace TK\XidmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class XidmaController extends Controller
{
    public function accueilAction()
    {
        return $this->render('TKXidmaBundle:Xidma:accueil.html.twig');
    }
}