<?php

namespace Cdlr\codeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) { {
            $builder
            ->add('nom')
            ->add('categorie')
            ->add('file');
        }
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Cdlr\codeBundle\Entity\Cours'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'cdlr_codebundle_cours';
    }

}
