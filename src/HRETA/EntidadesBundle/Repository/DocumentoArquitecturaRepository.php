<?php

namespace HRETA\EntidadesBundle\Repository;

use Doctrine\ORM\EntityRepository;

class DocumentoArquitecturaRepository extends EntityRepository {

    public function getDocumentos() {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
                ->select('d')
                ->from('EntidadesBundle:DocumentoArquitectura', 'd')
                ->leftJoin('p.idexped', 'ea')
                ->where('ea.id IS NULL')
        ;
        return $query;
    }

}
