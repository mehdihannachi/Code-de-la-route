<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cdlr\codeBundle\Entity\OffreEmploi;
use Cdlr\codeBundle\Form\OffreEmploiType;

/**
 * OffreEmploi controller.
 *
 */
class OffreEmploiController extends Controller
{

    /**
     * Lists all OffreEmploi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:OffreEmploi')->findAll();

        return $this->render('CdlrcodeBundle:OffreEmploi:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new OffreEmploi entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new OffreEmploi();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offreemploi_show', array('id' => $entity->getAnnonceId())));
        }

        return $this->render('CdlrcodeBundle:OffreEmploi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a OffreEmploi entity.
     *
     * @param OffreEmploi $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(OffreEmploi $entity)
    {
        $form = $this->createForm(new OffreEmploiType(), $entity, array(
            'action' => $this->generateUrl('offreemploi_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new OffreEmploi entity.
     *
     */
    public function newAction()
    {
        $entity = new OffreEmploi();
        $form   = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:OffreEmploi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OffreEmploi entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:OffreEmploi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OffreEmploi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:OffreEmploi:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OffreEmploi entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:OffreEmploi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OffreEmploi entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:OffreEmploi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a OffreEmploi entity.
    *
    * @param OffreEmploi $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OffreEmploi $entity)
    {
        $form = $this->createForm(new OffreEmploiType(), $entity, array(
            'action' => $this->generateUrl('offreemploi_update', array('id' => $entity->getAnnonceId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing OffreEmploi entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:OffreEmploi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OffreEmploi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('offreemploi_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:OffreEmploi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a OffreEmploi entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:OffreEmploi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OffreEmploi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('offreemploi'));
    }

    /**
     * Creates a form to delete a OffreEmploi entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offreemploi_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
