<?php

namespace HRETA\EntidadesBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProyectoRepository extends EntityRepository {

    public function getProyectos() {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
                ->select('p')
                ->from('EntidadesBundle:Proyecto', 'p')
                ->leftJoin('p.idexped', 'ea')
                ->where('ea.id IS NULL')
        ;
        return $query;
    }



}
