<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function adminAction()
    {
        return $this->render('CdlrcodeBundle:Default:admin.html.twig');
    }
    public function candidatAction()
    {
        return $this->render('CdlrcodeBundle:Default:candidat.html.twig');
    }
    public function gerantAction()
    {
        return $this->render('CdlrcodeBundle:Default:gerant.html.twig');
    }
    public function moniteurAction()
    {
        return $this->render('CdlrcodeBundle:Default:moniteur.html.twig');
    }
}
