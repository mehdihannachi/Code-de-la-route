<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cdlr\codeBundle\Entity\Question;
use Cdlr\codeBundle\Form\QuestionType;
use Cdlr\codeBundle\Form\ImageType;
use Symfony\Component\Validator\Constraints\Image;

/**
 * Question controller.
 *
 */
class QuestionController extends Controller {

    /**
     * Lists all Question entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CdlrcodeBundle:Question')->findAll();

        return $this->render('CdlrcodeBundle:Question:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function questionSuivanteAction() {
        $n = 1;
        $em = $this->getDoctrine()->getManager();
        $ques = $em->getRepository('CdlrcodeBundle:Question')->find(1);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $rep = $_POST['group1'];
            //return $this->render('CdlrcodeBundle:Question:reponse.html.twig', array('rep'=>$n));
            return $this->redirect($this->generateUrl('question_show', array('id' => $n + 1)));
        }

        return $this->render('CdlrcodeBundle:Question:show.html.twig', array('entity' => $ques));
    }

    /**
     * Creates a new Question entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Question();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('question_show', array('id' => $entity->getQuestionId())));
        }

        return $this->render('CdlrcodeBundle:Question:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Question entity.
     *
     * @param Question $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Question $entity) {
        $form = $this->createForm(new QuestionType(), $entity, array(
            'action' => $this->generateUrl('question_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Question entity.
     *
     */
    public function newAction() {
        $entity = new Question();
        $form = $this->createCreateForm($entity);

        return $this->render('CdlrcodeBundle:Question:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Question entity.
     *
     */
    public function showAction($id, $note) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CdlrcodeBundle:Question')->find($id);
        $questions = $em->getRepository('CdlrcodeBundle:Question')->findAll();
        if (!$entity) {throw $this->createNotFoundException('Unable to find Question entity.');}
        $deleteForm = $this->createDeleteForm($id);
//$em = $this->getDoctrine()->getManager();
        $ques = new Question;
        $ques = $em->getRepository('CdlrcodeBundle:Question')->find($id);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {$rep = $_POST['group1'];
               if ($rep === $ques->getBonneReponse()) {$note++;}
            if ($id < 5) { //return $this->render('CdlrcodeBundle:Question:reponse.html.twig', array('rep'=>$n));
                 return $this->redirect($this->generateUrl('question_show', array('id' => $id + 1, 'note' => $note)));
            } else { if ($note<3){
                return $this->render('CdlrcodeBundle:Question:reponse.html.twig', array('rep' => $note, 'quest'=>$questions));}
                else {return $this->render('CdlrcodeBundle:Question:reponse2.html.twig', array('rep' => $note, 'quest'=>$questions));}  }
        }
        if ($ques->getReponse3() != null) {
            return $this->render('CdlrcodeBundle:Question:show.html.twig', array('entity' => $entity, 'delete_form' => $deleteForm->createView(),));
        } else {
            return $this->render('CdlrcodeBundle:Question:show2.html.twig', array('entity' => $entity));
        }
        
    }

    /**
     * Displays a form to edit an existing Question entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:Question')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CdlrcodeBundle:Question:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Question entity.
     *
     * @param Question $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Question $entity) {
        $form = $this->createForm(new QuestionType(), $entity, array(
            'action' => $this->generateUrl('question_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Question entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CdlrcodeBundle:Question')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('question_edit', array('id' => $id)));
        }

        return $this->render('CdlrcodeBundle:Question:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Question entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CdlrcodeBundle:Question')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Question entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('question'));
    }

    /**
     * Creates a form to delete a Question entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('question_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function uploadAction($id) {


        $im = new Image();
        $Form = $this->createForm(new ImageType(), $im);
        $request = $this->get('request');
        $Form->handleRequest($request);
        if ($Form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $stream = fopen($im->getImg(), 'r');
            $im->setImg(stream_get_contents($stream));
            $em->persist($im);
            $em->flush();
        }
        $em = $this->getDoctrine()->getManager();
        $image_obj = $em->getRepository('CdlrcodeBundle:Image')->find($id);

        $photo = $image_obj->getImg();

        $response = base64_encode(stream_get_contents($photo));






        return $this->render("CdlrcodeBundle:Question:Upload.html.twig", array('Form' => $Form->createView(), 'response' => $response));
    }

    public function someAction($id) {
        $em = $this->get('doctrine')->getManager();
        $image_obj = $em->getRepository('CdlrcodeBundle:Image')->find($id);
        return new Response(
                $image_obj->getImg(), Response::HTTP_OK, array('content-type' => 'image/jpeg'));
    }

}
