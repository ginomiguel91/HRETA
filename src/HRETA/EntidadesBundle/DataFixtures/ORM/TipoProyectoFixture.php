<?php

namespace HRETA\EntidadesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HRETA\EntidadesBundle\Entity\TipoProyecto;

class TipoProyectoFixture implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $parameters = array(
            array('denominador' => 'Educativo'),
            array('denominador' => 'Medicina'),
            array('denominador' => 'Gestión de Procesos Juridicos'),
            array('denominador' => 'Industrial'),
            array('denominador' => 'Componentes Bases'),
            array('denominador' => 'Sistema de Gestión Documental'),
            array('denominador' => 'Juegos'),
            array('denominador' => 'Control de Procesos'),
            array('denominador' => 'Sistema de Expertos'),
        );

        foreach ($parameters as $parameter) {

            $entity = new TipoProyecto();
            $entity->setDenominacion($parameter['denominador']);
            $manager->persist($entity);
        }
        $manager->flush();
    }

}
