<?php

namespace HRETA\EntidadesBundle\Util;

use HRETA\EntidadesBundle\Entity\DocumentoArquitectura;
use HRETA\EntidadesBundle\Entity\Evaluacion;

class CreateDocumentEvaluation {

    private $em;

    function __construct($em) {
        $this->em = $em;
    }

    public function CreateDocumentEvaluacion($idExped) {
        $entities = $this->em->getRepository('EntidadesBundle:TipoDoc')->findAll();       
        foreach ($entities as $entity) {            
            $doc = new DocumentoArquitectura();
            $doc->setVersion('v1');
            $doc->setAplicaAlProyecto(true);
            $doc->setIdexped($idExped);
            $doc->setTblTipoDocid($entity);
            $this->em->persist($doc);          
        }
        $this->em->flush();
    }

}
