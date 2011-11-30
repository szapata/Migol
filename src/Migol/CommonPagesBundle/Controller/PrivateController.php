<?php

namespace Migol\CommonPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class PrivateController extends Controller
{
    
    public function indexAction()
    {
      return $this->render('MigolCommonPagesBundle:Private:index.html.twig');
    }
}
