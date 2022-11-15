<?php

namespace HRETA\EntidadesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HRETA\EntidadesBundle\Entity\Usuario;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UsuarioFixture implements FixtureInterface, ContainerAwareInterface {

    private $container;

    public function load(ObjectManager $manager) {
        $entity = new Usuario();
        $entity->setNombre('admin');
        $entity->setApellidos('admin');
        $entity->setUsername('admin');
        $entity->setEmail('admin@uci.cu');
        $entity->setEnabled(true);
        $entity->setPassword('admin');
        $entity->addRole(1);
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($entity);
        $passwordCodificado = $encoder->encodePassword(
                $entity->getPassword(), $entity->getSalt()
        );
        $entity->setPassword($passwordCodificado);

        $manager->persist($entity);



        $entity = new Usuario();
        $entity->setNombre('user');
        $entity->setApellidos('user');
        $entity->setUsername('user');
        $entity->setEmail('user@uci.cu');
        $entity->setEnabled(true);
        $entity->setPassword('user');
        $entity->addRole(2);
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($entity);
        $passwordCodificado = $encoder->encodePassword(
                $entity->getPassword(), $entity->getSalt()
        );
        $entity->setPassword($passwordCodificado);

        $manager->persist($entity);

        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null) {
        return $this->container = $container;
    }

}
