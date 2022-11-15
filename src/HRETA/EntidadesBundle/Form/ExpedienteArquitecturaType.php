<?php

namespace HRETA\EntidadesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ExpedienteArquitecturaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('version', 'text', array('attr' => array('class' => 'span6 offset2', 'placeholder' => 'Versión'),'label'=>'Versión'))
                ->add('datosDelExpediente', 'textarea', array('attr' => array('class' => 'span12 offset2', 'placeholder' => 'Datos del Expediente'),'label'=>'Datos del Expediente'))
                ->add('idproy', 'entity', array(
                    'attr' => array('class' => 'span6 offset2', 'placeholder' => 'idproy'),
                    'class' => 'EntidadesBundle:Proyecto',
                    'query_builder' => function(EntityRepository $er) {
                           return $er->getProyectos();
            }
        ,'label'=>'Proyecto'));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'HRETA\EntidadesBundle\Entity\ExpedienteArquitectura'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'hreta_entidadesbundle_expedientearquitectura';
    }

}
