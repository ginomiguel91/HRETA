<?php

namespace HRETA\EntidadesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InformeNcType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero',null,array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'Número' ),'label'=>'Número'))
            ->add('acuerdos',null,array('attr' => array ( 'class' => 'span12 offset2' , 'placeholder' => 'Acuerdos' ),'label'=>'Acuerdos'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HRETA\EntidadesBundle\Entity\InformeNc'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hreta_entidadesbundle_informenc';
    }
}
