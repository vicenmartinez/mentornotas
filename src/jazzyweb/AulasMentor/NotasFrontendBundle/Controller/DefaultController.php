<?php

namespace jazzyweb\AulasMentor\NotasFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('JAMNotasFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
