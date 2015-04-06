<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cdlr\codeBundle\Entity\CoursView;
use Cdlr\codeBundle\Form\CoursViewType;

/**
 * CoursView controller.
 *
 */
class CoursViewController extends Controller
{

    /**
     * Lists all CoursView entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:CoursView')->findAll();

        return $this->render('CdlrcodeBundle:CoursView:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CoursView entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CoursView();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('coursview_show', array('id' => $entity->getId())));
        }

        return $this->render('CdlrcodeBundle:CoursView:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CoursView entity.
     *
     * @param CoursView $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CoursView $entity)
    {
        $form = $this->createForm(new CoursViewType(), $entity, array(
            'action' => $this->generateUrl('coursview_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CoursView entity.
     *
     */
    public function newAction()
    {
        $entity = new CoursView();
        $form   = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:CoursView:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CoursView entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:CoursView')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CoursView entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:CoursView:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CoursView entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:CoursView')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CoursView entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:CoursView:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CoursView entity.
    *
    * @param CoursView $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CoursView $entity)
    {
        $form = $this->createForm(new CoursViewType(), $entity, array(
            'action' => $this->generateUrl('coursview_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CoursView entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:CoursView')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CoursView entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('coursview_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:CoursView:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CoursView entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:CoursView')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CoursView entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('coursview'));
    }

    /**
     * Creates a form to delete a CoursView entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coursview_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
