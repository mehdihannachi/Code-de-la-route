<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cdlr\codeBundle\Entity\VenteVoiture;
use Cdlr\codeBundle\Form\VenteVoitureType;

/**
 * VenteVoiture controller.
 *
 */
class VenteVoitureController extends Controller
{

    /**
     * Lists all VenteVoiture entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:VenteVoiture')->findAll();

        return $this->render('CdlrcodeBundle:VenteVoiture:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new VenteVoiture entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new VenteVoiture();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ventevoiture_show', array('id' => $entity->getAnnonceId())));
        }

        return $this->render('CdlrcodeBundle:VenteVoiture:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a VenteVoiture entity.
     *
     * @param VenteVoiture $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(VenteVoiture $entity)
    {
        $form = $this->createForm(new VenteVoitureType(), $entity, array(
            'action' => $this->generateUrl('ventevoiture_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new VenteVoiture entity.
     *
     */
    public function newAction()
    {
        $entity = new VenteVoiture();
        $form   = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:VenteVoiture:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a VenteVoiture entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:VenteVoiture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VenteVoiture entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:VenteVoiture:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing VenteVoiture entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:VenteVoiture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VenteVoiture entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:VenteVoiture:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a VenteVoiture entity.
    *
    * @param VenteVoiture $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(VenteVoiture $entity)
    {
        $form = $this->createForm(new VenteVoitureType(), $entity, array(
            'action' => $this->generateUrl('ventevoiture_update', array('id' => $entity->getAnnonceId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing VenteVoiture entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:VenteVoiture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VenteVoiture entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ventevoiture_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:VenteVoiture:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a VenteVoiture entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:VenteVoiture')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find VenteVoiture entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ventevoiture'));
    }

    /**
     * Creates a form to delete a VenteVoiture entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ventevoiture_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
