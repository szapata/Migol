<?php

namespace RIA\BackboneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('RIABackboneBundle:Default:index.html.twig', array('name' => $name));
    }
}
