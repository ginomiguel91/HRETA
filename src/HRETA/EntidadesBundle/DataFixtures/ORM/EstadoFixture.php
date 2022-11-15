<?php

namespace HRETA\EntidadesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HRETA\EntidadesBundle\Entity\EstadoSolucion;

class EstadoFixture implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $parameters = array(
            array('denominador' => 'Nueva'),
            array('denominador' => 'Asignada'),
            array('denominador' => 'Aceptada'),
            array('denominador' => 'Resuelta'),
        );

        foreach ($parameters as $parameter) {

            $entity = new EstadoSolucion();
            $entity->setDenominacion($parameter['denominador']);

            $manager->persist($entity);
        }
        $manager->flush();
    }

}
