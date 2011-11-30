<?php

namespace Migol\CommonPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if (is_object($user) ) {// && $user instanceof UserInterface
            return new RedirectResponse($this->container->get('router')->generate('MigolCommonPagesBundle_dashboard'));
        }else{
            $request = $this->container->get('request');
            /* @var $request \Symfony\Component\HttpFoundation\Request */
            $session = $request->getSession();
            /* @var $session \Symfony\Component\HttpFoundation\Session */
            $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

            return $this->render('MigolCommonPagesBundle:Default:index.html.twig', 
                    array(
                        'last_username' => $lastUsername
                    ));
        }
    }
}
