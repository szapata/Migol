<?php

namespace Migol\UserBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseController;
use FOS\UserBundle\Model\UserInterface;
use Sloo\ContactsBundle\Controller\DefaultController as DFcontroller;


class ProfileController extends BaseController
{
    
    /**
     * Show the user specified
     */
    public function showProfileAction($username)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->container->get('doctrine.orm.entity_manager');
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username);
        $followed = $user->getFollowlist()->contains($user2);
        $lists = $this->container->get('sloo_contacts_lists')->showListsAction($user, $em, $user2);
        $offset_follows = rand(0, $user2->getFollowlist()->count()-10);
        $offset_followers = rand(0, $user2->getFollowers()->count()-10);
        
        return $this->container->get('templating')->renderResponse('MigolUserBundle:Profile:show.html.'.$this->container->getParameter('fos_user.template.engine'), 
                array(  'user'  => $user,
                        'user2' =>  $user2,
                        'followed' => $followed,
                        'lists'    => $lists,
                        'follows'  => ($offset_follows >=0)?$user2->getFollowlist()->slice($offset_follows,10):$user2->getFollowlist(),
                        'followers' => ($offset_followers >=0)?$user2->getFollowers()->slice($offset_followers,10):$user2->getFollowers()
                ));
    
    }
}
