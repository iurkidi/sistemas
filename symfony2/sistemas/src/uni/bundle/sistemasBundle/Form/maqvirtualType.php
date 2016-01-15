<?php

namespace uni\bundle\sistemasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class maqvirtualType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('ipvirtual')
            ->add('tareas')
            ->add('descripcion')
            ->add('hardware')
            ->add('programas')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\bundle\sistemasBundle\Entity\maqvirtual'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_sistemasbundle_maqvirtual';
    }
}
