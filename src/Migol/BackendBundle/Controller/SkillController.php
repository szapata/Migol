<?php

namespace Migol\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Migol\BackendBundle\Entity\Skill;
use Migol\BackendBundle\Form\SkillType;

/**
 * Skill controller.
 *
 */
class SkillController extends Controller
{
    /**
     * Lists all Skill entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MigolBackendBundle:Skill')->findAll();

        return $this->render('MigolBackendBundle:Skill:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Skill entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MigolBackendBundle:Skill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Skill entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MigolBackendBundle:Skill:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Skill entity.
     *
     */
    public function newAction()
    {
        $entity = new Skill();
        $form   = $this->createForm(new SkillType(), $entity);

        return $this->render('MigolBackendBundle:Skill:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Skill entity.
     *
     */
    public function createAction()
    {
        $entity  = new Skill();
        $request = $this->getRequest();
        $form    = $this->createForm(new SkillType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_migol_skill_show', array('id' => $entity->getId())));
            
        }

        return $this->render('MigolBackendBundle:Skill:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Skill entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MigolBackendBundle:Skill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Skill entity.');
        }

        $editForm = $this->createForm(new SkillType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MigolBackendBundle:Skill:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Skill entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MigolBackendBundle:Skill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Skill entity.');
        }

        $editForm   = $this->createForm(new SkillType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_migol_skill_edit', array('id' => $id)));
        }

        return $this->render('MigolBackendBundle:Skill:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Skill entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MigolBackendBundle:Skill')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Skill entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_migol_skill'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
