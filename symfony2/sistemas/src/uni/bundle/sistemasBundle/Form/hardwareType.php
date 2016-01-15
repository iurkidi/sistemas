<?php

namespace uni\bundle\sistemasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class hardwareType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('ipreal')
            ->add('memoria')
            ->add('disco')
            ->add('cpu')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\bundle\sistemasBundle\Entity\hardware'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_sistemasbundle_hardware';
    }
}
