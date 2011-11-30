<?php

namespace Sloo\ContactsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Sloo\ContactsBundle\Entity\ContactList;


class ListsController extends Controller
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
    public function showUserInListsAction(){
        $request = $this->get('request');
        $username = $request->request->get('user');
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $user2 = $em->getRepository('MigolUserBundle:User')->findOneByUsername($username);
        $lists = $this->get('sloo_contacts_lists')->showListsAction($user, $em, $user2);
        $response = new Response(json_encode($lists),200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
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
    public function deleteListAction(){
        $request = $this->get('request');
        $todelete = json_decode($request->request->get('id'),true);
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('SlooContactsBundle:ContactList')->find($todelete);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find List entity.');
        }

        $em->remove($entity);
        $em->flush();
        $response = new Response(json_encode($todelete),200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
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
    public function listsWidgetAction(){
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $contactLists = $em->getRepository('SlooContactsBundle:ContactList')->findBy(array('owner' => $user->getId()),null,3); 
        return $this->render('SlooContactsBundle:Lists:show3.html.twig', array(
                                'user' => $user,
                                'contactlists' => $contactLists
                            ));
    }
    public function listsAction(){
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $userlists = $em->getRepository('SlooContactsBundle:ContactList')->findBy(array('owner' => $user->getId()));
        return $this->render('SlooContactsBundle:Lists:showall.html.twig', array('lists' => $userlists));
    }
    
}
