<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cdlr\codeBundle\Entity\Moniteur;
use Cdlr\codeBundle\Form\MoniteurType;

/**
 * Moniteur controller.
 *
 */
class MoniteurController extends Controller
{

    /**
     * Lists all Moniteur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:Moniteur')->findAll();

        return $this->render('CdlrcodeBundle:Moniteur:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Moniteur entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Moniteur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('moniteur_show', array('id' => $entity->getId())));
        }

        return $this->render('CdlrcodeBundle:Moniteur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Moniteur entity.
     *
     * @param Moniteur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Moniteur $entity)
    {
        $form = $this->createForm(new MoniteurType(), $entity, array(
            'action' => $this->generateUrl('moniteur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Moniteur entity.
     *
     */
    public function newAction()
    {
        $entity = new Moniteur();
        $form   = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:Moniteur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Moniteur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:Moniteur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Moniteur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:Moniteur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Moniteur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:Moniteur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Moniteur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:Moniteur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Moniteur entity.
    *
    * @param Moniteur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Moniteur $entity)
    {
        $form = $this->createForm(new MoniteurType(), $entity, array(
            'action' => $this->generateUrl('moniteur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Moniteur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:Moniteur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Moniteur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('moniteur_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:Moniteur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Moniteur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:Moniteur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Moniteur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('moniteur'));
    }

    /**
     * Creates a form to delete a Moniteur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('moniteur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
