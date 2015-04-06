<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cdlr\codeBundle\Entity\Cours;
use Cdlr\codeBundle\Form\CoursType;

/**
 * Cours controller.
 *
 */
class CoursController extends Controller
{

    /**
     * Lists all Cours entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:Cours')->findAll();

        return $this->render('CdlrcodeBundle:Cours:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Cours entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Cours();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cours_show', array('id' => $entity->getCoursId())));
        }

        return $this->render('CdlrcodeBundle:Cours:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Cours entity.
     *
     * @param Cours $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cours $entity)
    {
        $form = $this->createForm(new CoursType(), $entity, array(
            'action' => $this->generateUrl('cours_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cours entity.
     *
     */
    public function newAction()
    {
        $entity = new Cours();
        $form   = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:Cours:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cours entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:Cours:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cours entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:Cours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Cours entity.
    *
    * @param Cours $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cours $entity)
    {
        $form = $this->createForm(new CoursType(), $entity, array(
            'action' => $this->generateUrl('cours_update', array('id' => $entity->getCoursId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cours entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:Cours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cours_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:Cours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Cours entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:Cours')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cours entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cours'));
    }

    /**
     * Creates a form to delete a Cours entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cours_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
