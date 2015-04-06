<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cdlr\codeBundle\Entity\AutoEcole;
use Cdlr\codeBundle\Form\AutoEcoleType;

use Cdlr\codeBundle\Form\rechercheAutoEcoleForm;

/**
 * AutoEcole controller.
 *
 */
class AutoEcoleController extends Controller
{

    /**
     * Lists all AutoEcole entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:AutoEcole')->findAll();

        return $this->render('CdlrcodeBundle:AutoEcole:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AutoEcole entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AutoEcole();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('autoecole_show', array('id' => $entity->getId())));
        }

        return $this->render('CdlrcodeBundle:AutoEcole:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AutoEcole entity.
     *
     * @param AutoEcole $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AutoEcole $entity)
    {
        $form = $this->createForm(new AutoEcoleType(), $entity, array(
            'action' => $this->generateUrl('autoecole_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AutoEcole entity.
     *
     */
    public function newAction()
    {
        $entity = new AutoEcole();
        $form   = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:AutoEcole:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AutoEcole entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:AutoEcole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AutoEcole entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:AutoEcole:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AutoEcole entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:AutoEcole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AutoEcole entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:AutoEcole:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AutoEcole entity.
    *
    * @param AutoEcole $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AutoEcole $entity)
    {
        $form = $this->createForm(new AutoEcoleType(), $entity, array(
            'action' => $this->generateUrl('autoecole_update', array('id' => $entity->getAutoecoleId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AutoEcole entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:AutoEcole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AutoEcole entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('autoecole_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:AutoEcole:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AutoEcole entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:AutoEcole')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AutoEcole entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('autoecole'));
    }

    /**
     * Creates a form to delete a AutoEcole entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('autoecole_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    /** methode recherche autoecole  par region **/
    public function rechercheRegionAction(){
       $AutoEcole=new AutoEcole();
       $em=$this->getDoctrine()->getManager();
       $au=$em->getRepository("CdlrcodeBundle:AutoEcole")->findAll();
       $Form=$this->createForm(new rechercheAutoEcoleForm(),$AutoEcole);
       $request= $this->get('request_stack')->getCurrentRequest();
       $Form->handleRequest($request);
       if($Form->isValid()){
       
       $au=$em->
               getRepository("CdlrcodeBundle:AutoEcole")->findBy(array('region'=>$AutoEcole->getRegion()));
       }
       return $this->render("CdlrcodeBundle:AutoEcole:recherche.html.twig", array('Form'=>$Form->createView(),'autoecoles'=>$au));
       
   }
}
