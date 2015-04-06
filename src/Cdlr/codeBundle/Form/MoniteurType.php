<?php

namespace Cdlr\codeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MoniteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('cin')
            ->add('dateNaissance')
            ->add('tel')
            ->add('region')
            ->add('mail')
            ->add('pwd')
            ->add('autoecole')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cdlr\codeBundle\Entity\Moniteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cdlr_codebundle_moniteur';
    }
}
