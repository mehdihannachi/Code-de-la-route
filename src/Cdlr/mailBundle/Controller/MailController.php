<?php

namespace Cdlr\mailBundle\Controller;
use Cdlr\mailBundle\Entity\Mail;
use Cdlr\mailBundle\Form\MailType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller
{
   
     public function indexAction()
    {
        return $this->render('CdlrmailBundle:Default:index.html.twig', array());
    }
   public function sendMailAction() {
 $mail = new Mail();
 $form= $this->createForm(new MailType(), $mail);
 $request= $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
 if ($form->isValid()) {
     
 $message = \Swift_Message::newInstance('test')
 ->setSubject($mail->getObjet())
 ->setFrom($mail-> getFrom())
 ->setTo($mail->getTo())
 ->setBody($mail->getText());
 $this->container->get('mailer')->send($message);
// return $this->render('CdlrmailBundle:Default:index.html.twig', array('to' =>$mail->getTo(),'from' => $mail-> getFrom()));
 }
 return $this->redirect($this->generateUrl('my_app_mail_form'));
}
public function newAction() {
 $mail = new Mail();
 $form= $this-> createForm(new MailType(), $mail);
 $request = $this->get('request');
 //$form->handleRequest($request);
 if ($form->handleRequest($request)->isValid()) {
 $this->sendMailAction('page.jim2@gmail.com', $mail-> getFrom(), $mail->getNom(), $mail->getText());
 }
 return $this->render('CdlrmailBundle:Default:mail.html.twig', array('form' =>$form->createView())); }
}
