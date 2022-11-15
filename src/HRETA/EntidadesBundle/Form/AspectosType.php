<?php

namespace HRETA\EntidadesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AspectosType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', null, array('attr' => array('placeholder' => 'Nombre'), 'label' => 'Nombre'))
                ->add('tblTipoDocid', null, array('label' => 'Tipo de Documento'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'HRETA\EntidadesBundle\Entity\Aspectos'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'hreta_entidadesbundle_aspectos';
    }

}
