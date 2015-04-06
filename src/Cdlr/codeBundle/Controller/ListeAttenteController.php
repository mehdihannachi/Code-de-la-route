<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cdlr\codeBundle\Entity\ListeAttente;
use Cdlr\codeBundle\Form\ListeAttenteType;

/**
 * ListeAttente controller.
 *
 */
class ListeAttenteController extends Controller
{

    /**
     * Lists all ListeAttente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:ListeAttente')->findAll();

        return $this->render('CdlrcodeBundle:ListeAttente:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ListeAttente entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ListeAttente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('listeattente_show', array('id' => $entity->getId())));
        }

        return $this->render('CdlrcodeBundle:ListeAttente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ListeAttente entity.
     *
     * @param ListeAttente $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ListeAttente $entity)
    {
        $form = $this->createForm(new ListeAttenteType(), $entity, array(
            'action' => $this->generateUrl('listeattente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ListeAttente entity.
     *
     */
    public function newAction()
    {
        $entity = new ListeAttente();
        $form   = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:ListeAttente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ListeAttente entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:ListeAttente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ListeAttente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:ListeAttente:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ListeAttente entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:ListeAttente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ListeAttente entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:ListeAttente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ListeAttente entity.
    *
    * @param ListeAttente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ListeAttente $entity)
    {
        $form = $this->createForm(new ListeAttenteType(), $entity, array(
            'action' => $this->generateUrl('listeattente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ListeAttente entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:ListeAttente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ListeAttente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('listeattente_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:ListeAttente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ListeAttente entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:ListeAttente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ListeAttente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('listeattente'));
    }

    /**
     * Creates a form to delete a ListeAttente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listeattente_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
