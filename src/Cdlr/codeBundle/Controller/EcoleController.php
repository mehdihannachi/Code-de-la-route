<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EcoleController extends Controller
{
    public function accueilAction()
    {
        $name="Esprit";
        return $this->render('CdlrcodeBundle:Ecole:accueil.html.twig', array('N' => $name));
    }
    
    public function signAction()
    {
        return $this->render('CdlrcodeBundle:Default:sign-in.html.twig');
    }
    
    public function coursAction()
    {
        return $this->render('CdlrcodeBundle:Cours:index.html.twig');
    }
    
}
