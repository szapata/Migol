<?php

namespace Migol\CommonPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GlobalBlocksController extends Controller
{
    
    public function profilePhotoAction()
    {
      $user = $this->get('security.context')->getToken()->getUser();
      return $this->render('MigolCommonPagesBundle:Private:photo.html.twig', array('user' => $user));
    }
    public function profileBigPhotoAction()
    {
      $user = $this->get('security.context')->getToken()->getUser();
      return $this->render('MigolCommonPagesBundle:Private:photoBig.html.twig', array('user' => $user));
    }
    public function topNavBarAction(){
      $user = $this->get('security.context')->getToken()->getUser();
      return $this->render('MigolCommonPagesBundle:Private:privateTopNavBar.html.twig', array('user' => $user));  
    }
    public function leftMenuAction(){
      $user = $this->get('security.context')->getToken()->getUser();
      return $this->render('MigolCommonPagesBundle:Private:menu.html.twig', array('user' => $user));  
    }
    public function followedTeamsAction($user, $user2){
      return $this->render('MigolCommonPagesBundle:Private:followedTeamsWidget.html.twig', array('user' => $user, 'user2' => $user2));  
    }
    public function followedCompetitionsAction(){
      return $this->render('MigolCommonPagesBundle:Private:followedCompetitionsWidget.html.twig');  
    }
}
