<?php

namespace HRETA\EntidadesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HRETA\EntidadesBundle\Entity\ComplejidadNc;

class ComplejidadFixture implements FixtureInterface {



    public function load(ObjectManager $manager) {

        $parameters = array(
            array('denominador' => 'ALTA'),
            array('denominador' => 'MEDIA'),
            array('denominador' => 'BAJA'),
        );

        foreach ($parameters as $parameter) {

            $entity = new ComplejidadNc();
            $entity->setDenominacion($parameter['denominador']);
            $manager->persist($entity);
        }
        $manager->flush();
    }

}
