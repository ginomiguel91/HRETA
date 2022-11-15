<?php

namespace HRETA\EntidadesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NoConformidadType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipo',null,array('attr' => array ( 'class' => 'span12 offset2' , 'placeholder' => 'Tipo' ),'label'=>'Tipo'))
            ->add('asunto',null,array('attr' => array ( 'class' => 'span12 offset2' , 'placeholder' => 'Asunto' ),'label'=>'Asunto'))
            ->add('fecha','datetime',array('widget'=>'single_text','label'=>'Fecha'))
            ->add('fechaSolucion','datetime',array('widget'=>'single_text','label'=>'Fecha de Solución'))
            ->add('descripcion','textarea',array('attr' => array ( 'class' => ' span12 ', 'placeholder' => 'Descripción'),'label'=>'Descripción'))
            ->add('idinforme',null,array('attr' => array ( 'class' => 'span2 ' , 'placeholder' => 'ID Informe' ),'label'=>'Informe'))
            ->add('idestado',null,array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'ID Estado' ),'label'=>'Estado'))
            ->add('idcomplejidad',null,array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'ID Comlejidad' ),'label'=>'Comlejidad'))
            ->add('idimpacto',null,array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'ID Impacto' ),'label'=>'Impacto'))
            ->add('iddocumentoarquitectura',null,array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'ID documento' ),'label'=>'Documento'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HRETA\EntidadesBundle\Entity\NoConformidad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hreta_entidadesbundle_noconformidad';
    }
}
