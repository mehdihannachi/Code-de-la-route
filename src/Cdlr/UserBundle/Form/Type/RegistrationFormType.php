<?php

namespace Cdlr\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom')
                ->add('prenom')
                ->add('cin')
                ->add('dateNaissance')
                ->add('tel')
                ->add('region')
                ->add('type');
        ;
    }

    /**
     * @return string
     */
    public function getName() {
        return 'cdlr_user_registration';
    }

    public function getParent() {
        return 'fos_user_registration';
    }

}
