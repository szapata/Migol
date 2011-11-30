<?php

namespace Style\BootstrapFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('StyleBootstrapFormBundle:Default:index.html.twig', array('name' => $name));
    }
}
