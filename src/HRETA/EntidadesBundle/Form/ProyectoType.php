<?php

namespace HRETA\EntidadesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProyectoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('attr' => array ( 'class' => 'span6 offset2' , 'placeholder' => 'Nombre' )))
            ->add('version','text',array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'Versión' ),'label'=>'Versión'))
            ->add('descripcion','textarea',array('attr' => array ( 'class' => 'span12 offset2' , 'placeholder' => 'Descripción'),'label'=>'Descripción'))
            ->add('idus',null,array('attr' => array ( 'class' => 'span9 offset2' , 'placeholder' => 'idusuario' ),'label'=>'Usuario'))
            ->add('idtipo',null,array('attr' => array ( 'class' => 'span9 offset2' , 'placeholder' => 'Tipo' ),'label'=>'Tipo de Proyecto'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HRETA\EntidadesBundle\Entity\Proyecto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hreta_entidadesbundle_proyecto';
    }
}
