<?php

namespace HRETA\EntidadesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RtfArquitecturaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero','integer',array('attr' => array (  'class' => 'span4 offset2', 'placeholder' => 'Número' ),'label'=>'Número'))
            ->add('version','text',array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'Versión' ),'label'=>'Versión'))
            ->add('fechai','datetime',array('widget'=>'single_text','label'=>'Fecha de Inicio'))
            ->add('fechaf','datetime',array('widget'=>'single_text','label'=>'Fecha de Fin'))        
           // ->add('objetivos','textarea',array('attr' => array ( 'class' => 'span12 offset2' , 'placeholder' => 'objetivos'),'label'=>'Objetivos'))
            ->add('idrevisor',null,array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'revisor' ),'label'=>'Revisor'))
            ->add('idexped',null,array('attr' => array ( 'class' => 'span4 offset2' , 'placeholder' => 'idexpediente' ),'label'=>'Expediente'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HRETA\EntidadesBundle\Entity\RtfArquitectura'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hreta_entidadesbundle_rtfarquitectura';
    }
}
