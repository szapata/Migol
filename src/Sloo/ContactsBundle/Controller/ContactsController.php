<?php

namespace Sloo\ContactsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Sloo\ContactsBundle\Entity\ContactList;


class ContactsController extends Controller
{
    
    
    public function indexAction($name)
    {
        return $this->render('SlooContactsBundle:Default:index.html.twig', array('name' => $name));
    }
    public function contactsWidgetAction($followers, $user2){
        $user = $this->get('security.context')->getToken()->getUser();
        if($followers){
            $offset = rand(0, $user2->getFollowers()->count()-10);
            $contacts = ($offset >=0)?$user2->getFollowers()->slice($offset,10):$user2->getFollowers();
        }else{
            $offset = rand(0, $user2->getFollowlist()->count()-10);
            $contacts = ($offset >=0)?$user2->getFollowlist()->slice($offset,10):$user2->getFollowlist();
        }
        return $this->render('SlooContactsBundle:Default:widgetContact.html.twig',array('user'=> $user,
                                                                                         'user2' => $user2,
                                                                                         'contacts'=> $contacts,
                                                                                         'followers'=> $followers));
    }
    public function showAllContactsAction($username, $followers){
        $pageSize=15;
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username);
        if($followers){
            $contacts = $user2->getFollowers()->slice(0,$pageSize);
        }else{
            $contacts = $user2->getFollowlist()->slice(0,$pageSize);
        }
        $contactsToShow = Array();
        foreach($contacts as $contact){
                array_push($contactsToShow,array('user'=>$contact, 'following'=> $user->getFollowlist()->contains($contact)));
        }
        return $this->render('SlooContactsBundle:Default:showContacts.html.twig', 
                array(  'user'  => $user,
                        'user2' =>  $user2,
                        'showFollowers' => $followers,
                        'lists'    => null,
                        'contacts'  =>  $contactsToShow,
                        'lastpage'  => $user2->getFollowlist()->count()>=$pageSize?false:true
                ));
    }

    public function showContactsAction(){
        $pageSize=15;
        $user = $this->get('security.context')->getToken()->getUser();
        $request = $this->get('request');
        $username = $request->request->get('username');
        $showFollowers = $request->request->get('showFollowers');
        $offset = $request->request->get('page');
        $em = $this->getDoctrine()->getEntityManager();
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username);
        $contactsJSON = Array();
        if($showFollowers){
            $contacts = $user2->getFollowers()->slice($offset*$pageSize,$pageSize);
        }else{
            $contacts = $user2->getFollowlist()->slice($offset*$pageSize,$pageSize);
        }
        foreach ($contacts as $contact){
            $contactJSON = array( 
                            'username'         =>  $contact->getUsername(),
                            'firstname'        =>  $contact->getFirstname()==null?'':$contact->getFirstname(),
                            'lastname'         =>  $contact->getLastname()==null?'':$contact->getLastname(),
                            'following'        =>  $user->getFollowlist()->contains($contact)
                           );
            array_push($contactsJSON,$contactJSON);
        }
        $response = new Response(json_encode($contactsJSON),200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    public function followUserAction(){
        $request = $this->get('request');
        $username2 = $request->request->get('user');
        $em = $this->getDoctrine()->getEntityManager();
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username2);
        $user = $this->get('security.context')->getToken()->getUser();
        $user->addUser($user2);
        $em->persist($user);
        $em->flush();
        $response = new Response(json_encode(array('success'=> true)),200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    public function unfollowUserAction(){
        $request = $this->get('request');
        $username2 = $request->request->get('user');
        $em = $this->getDoctrine()->getEntityManager();
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username2);
        $user = $this->get('security.context')->getToken()->getUser();
        $user->getFollowlist()->removeElement($user2);
        
        // Delete user from lists
        $user2lists = $user2->getContactlists();
        
        // Re- Assign the user to the lists 
        foreach ($user2lists as $u2list){
            if($u2list->getOwner() == $user){
                $u2list->getUsercontactlists()->removeElement($user2);
            }
        }
        
        $em->persist($user);
        $em->flush();
        $response = new Response(json_encode(array('success'=> true)),200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
}
