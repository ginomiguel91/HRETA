<?php

namespace HRETA\EntidadesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentoArquitecturaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('version','text',array('attr' => array ( 'placeholder' => 'Versión' )))
            ->add('aplicaAlProyecto')
            ->add('causaNoAplicar','textarea',array('attr' => array ('placeholder' => 'Causa de no aplicar')))   
            //->add('idexped',null,array('label'=>'Proyecto'))
            //->add('tblTipoDocid','entity',array('label'=>'Tipo de Documento'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HRETA\EntidadesBundle\Entity\DocumentoArquitectura'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hreta_entidadesbundle_documentoarquitectura';
    }
}
