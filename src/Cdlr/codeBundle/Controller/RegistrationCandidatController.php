<?php

namespace Cdlr\codeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationCandidatController extends Controller
{
    public function registerAction()
    {
        return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('Cdlr\codeBundle\Entity\Candidat');
    }
}