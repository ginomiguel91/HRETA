<?php

namespace HRETA\EntidadesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HRETA\EntidadesBundle\Entity\ImpactoNc;

class ImpactoFixture implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $parameters = array(
            array('denominador' => 'ALTO', 'impacto' => 10),
            array('denominador' => 'MEDIO', 'impacto' => 5),
            array('denominador' => 'BAJO', 'impacto' => 2),
        );

        foreach ($parameters as $parameter) {

            $entity = new ImpactoNc();
            $entity->setDenominacion($parameter['denominador']);
            $entity->setImpacto($parameter['impacto']);
            $manager->persist($entity);
        }
        $manager->flush();
    }

}
