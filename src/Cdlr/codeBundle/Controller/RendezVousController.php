<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cdlr\codeBundle\Entity\RendezVous;
use Cdlr\codeBundle\Form\RendezVousType;

/**
 * RendezVous controller.
 *
 */
class RendezVousController extends Controller
{

    /**
     * Lists all RendezVous entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:RendezVous')->findAll();

        return $this->render('CdlrcodeBundle:RendezVous:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new RendezVous entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new RendezVous();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rendezvous_show', array('id' => $entity->getRdvId())));
        }

        return $this->render('CdlrcodeBundle:RendezVous:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a RendezVous entity.
     *
     * @param RendezVous $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(RendezVous $entity)
    {
        $form = $this->createForm(new RendezVousType(), $entity, array(
            'action' => $this->generateUrl('rendezvous_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new RendezVous entity.
     *
     */
    public function newAction()
    {
        $entity = new RendezVous();
        $form   = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:RendezVous:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RendezVous entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:RendezVous')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RendezVous entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:RendezVous:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RendezVous entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:RendezVous')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RendezVous entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:RendezVous:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a RendezVous entity.
    *
    * @param RendezVous $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RendezVous $entity)
    {
        $form = $this->createForm(new RendezVousType(), $entity, array(
            'action' => $this->generateUrl('rendezvous_update', array('id' => $entity->getRdvId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing RendezVous entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:RendezVous')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RendezVous entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rendezvous_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:RendezVous:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a RendezVous entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:RendezVous')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RendezVous entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rendezvous'));
    }

    /**
     * Creates a form to delete a RendezVous entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rendezvous_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
