<?php

namespace Sloo\ContactsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Sloo\ContactsBundle\Entity\ContactList;


class DefaultController extends Controller
{
    
    
    public function indexAction($name)
    {
        return $this->render('SlooContactsBundle:Default:index.html.twig', array('name' => $name));
    }
    //Service method
    public function showListsAction($user, $em, $user2){
        $userlists = $em->getRepository('SlooContactsBundle:ContactList')->findBy(array('owner' => $user->getId()));
        $lists = Array();
        foreach ($userlists as $list){
            $userinlist = $list->getUsercontactlists()->contains($user2);
            
            $listJSON = array( 
                            'name'         =>  $list->getName(),
                            'id'           =>  $list->getId(),
                            'checked'      =>  $list->getUsercontactlists()->contains($user2)?'checked':'' 
                           );
            array_push($lists,$listJSON);
        }     
        return $lists; 
    }
    //controller method
    public function saveListAction(){
        $request = $this->get('request');
        $newList = json_decode($request->request->get('model'),true);
        $user = $this->get('security.context')->getToken()->getUser();
        try{
            $em = $this->getDoctrine()->getEntityManager();
            $listORM = new ContactList();
            $listORM->setName($newList['name']);
            $listORM->setOwner($user);
            $em->persist($listORM);  
        
            $em->flush();
            $newList['id'] = $listORM->getId();
            $response = new Response(json_encode($newList),200);
            //$response = new Response(json_encode($listORM),200);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        catch (\Exception $exception){
            $message = $this->get('translator')->trans('error.listexists');
            $response = new Response(json_encode(array('error'=> true, 'message' => $message)),200);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
                
    }
    public function saveInListsAction(){
        $request = $this->get('request');
        $username2 = $request->request->get('user');
        $listsIds = $request->request->get('optionsCheckboxes');
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username2);
        $user2lists = $user2->getContactlists();
        
        // Re- Assign the user to the lists 
        foreach ($user2lists as $u2list){
            if($u2list->getOwner() == $user){ //only lists owned by the session user
                  $found=false;
                  if($listsIds != null){
                      foreach($listsIds as $listId){

                          if($u2list->getId() == $listId){
                              $found=true;
                              continue;
                          }

                      }
                  }
                  if(!$found){
                      $u2list->getUsercontactlists()->removeElement($user2);
                  }
            }
        }
        if($listsIds != null){
            foreach($listsIds as $listId){
              $l = $em->getRepository('SlooContactsBundle:ContactList')->find($listId);
              if(!$user2lists->contains($l)){
                  $l->addUser($user2);
                  $em->persist($l);
              }
            }  
        }
        $em->flush();
        $response = new Response(json_encode(array('success'=> true)),200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    public function showFollowersAction($username){
        $pageSize=15;
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username);
        $followed = $user->getFollowlist()->contains($user2);
        $offset_follows = rand(0, $user2->getFollowlist()->count()-10);
        $offset_followers = rand(0, $user2->getFollowers()->count()-10);
        return $this->render('SlooContactsBundle:Default:showContacts.html.twig', 
                array(  'user'  => $user,
                        'user2' =>  $user2,
                        'followed' => $followed,
                        'lists'    => null,
                        'follows'  => ($offset_follows >=0)?$user2->getFollowlist()->slice($offset_follows,10):$user2->getFollowlist(),
                        'followers' => ($offset_followers >=0)?$user2->getFollowers()->slice($offset_followers,10):$user2->getFollowers(),
                        'showFollowers' => true,
                        'contacts'  => $user2->getFollowers()->slice(0,$pageSize),
                        'lastpage'  => $user2->getFollowers()->count()>=$pageSize?false:true
                ));
    }
    public function showFollowedUsersAction($username){
        $pageSize=15;
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username);
        $followed = $user->getFollowlist()->contains($user2);
        $offset_follows = rand(0, $user2->getFollowlist()->count()-10);
        $offset_followers = rand(0, $user2->getFollowers()->count()-10);
        return $this->render('SlooContactsBundle:Default:showContacts.html.twig', 
                array(  'user'  => $user,
                        'user2' =>  $user2,
                        'followed' => $followed,
                        'lists'    => null,
                        'follows'  => ($offset_follows >=0)?$user2->getFollowlist()->slice($offset_follows,10):$user2->getFollowlist(),
                        'followers' => ($offset_followers >=0)?$user2->getFollowers()->slice($offset_followers,10):$user2->getFollowers(),
                        'showFollowers' => false,
                        'contacts'  => $user2->getFollowlist()->slice(0,$pageSize),
                        'lastpage'  => $user2->getFollowlist()->count()>=$pageSize?false:true
                ));
    }
    public function showContactsAction(){
        $pageSize=15;
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
                            'lastname'         =>  $contact->getLastname()==null?'':$contact->getLastname()
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
