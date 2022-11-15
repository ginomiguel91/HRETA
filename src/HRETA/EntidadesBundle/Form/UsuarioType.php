<?php

namespace HRETA\EntidadesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text',array('attr' => array ( 'class' => 'span6 offset2' , 'placeholder' => 'Usuario' ),'label'=>'Usuario')) 
            ->add('email','email',array('attr' => array ( 'class' => 'span12 offset2' , 'placeholder' => '@' ,'max_length' => 30,'trim' => true,),'label'=>'Correo')) 
            ->add('password','password',array('attr' => array ( 'class' => 'span12 offset2' , 'placeholder' => 'Contraseña','max_length' => 30,'trim' => true, ),'label'=>'Contraseña'))
            ->add('roles', 'choice', array('label' => 'Rol', 'required' => true, 'choices' => array( 1 => 'ROLE_ADMIN', 2 => 'ROLE_USER'), 'multiple' => true,'max_length' => 15,'trim' => true,))
            ->add('nombre','text',array('attr' => array ( 'class' => 'span6 offset2' , 'placeholder' => 'Nombre' )))
            ->add('apellidos','text',array('attr' => array ( 'class' => 'span8 offset2' , 'placeholder' => 'Apellidos' )))
          
       
     
           
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HRETA\EntidadesBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hreta_entidadesbundle_usuario';
    }
}
