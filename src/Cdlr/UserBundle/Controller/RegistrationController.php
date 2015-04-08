<?php

namespace Cdlr\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Cdlr\UserBundle\Entity\User;
use Cdlr\UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;


/**
 * User controller.
 *
 */
class RegistrationController extends ContainerAware
{
    public function regFormAction()
    {      

        /** @var  \FOS\UserBundle\Form\Factory\FactoryInterface $formFactory*/
        $formFactory = $this->container->get('fos_user.registration.form.factory');        

        $form = $formFactory->createForm();

        return $this->container->get('templating')->renderResponse('CdlrUserBundle:User:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    public function getTokenAction()
{
    return new Response($this->container->get('form.csrf_provider')
                            ->generateCsrfToken('authenticate'));
}
 }