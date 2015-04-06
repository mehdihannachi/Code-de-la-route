<?php
namespace Cdlr\codeBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class rechercheAutoEcoleForm extends AbstractType {
    public function buildForm(FormBuilderInterface 
            $builder,array $options){
        $builder 
                ->add('Region')
                ->add('Valider','submit');
            }
            public function getName(){
       // return 'Modele';
    }
}


