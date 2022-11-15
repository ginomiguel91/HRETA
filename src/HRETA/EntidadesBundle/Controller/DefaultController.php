<?php

namespace HRETA\EntidadesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

//use HTML2PDF;
//use HTML2PDF_locale;

class DefaultController extends Controller {

    public function indexAction() {

        return $this->render('EntidadesBundle:Default:index.html.twig');
    }

    public function graficaTipoProyectoAction() {
        $em = $this->getDoctrine()->getManager();
        $tipoProyectos = $em->getRepository('EntidadesBundle:TipoProyecto')->findAll();

        $entities = array();
        foreach ($tipoProyectos as $tipoProyecto) {
            $entity = new \stdClass();
            $entity->value = count($tipoProyecto->getProyectos());
            $entity->label = $tipoProyecto->getDenominacion();
            $entities[] = $entity;
        }

        return $this->render('EntidadesBundle:Proyecto:graficaTipoProyectos.html.twig', array(
                    'entities' => $entities,
        ));
    }
    public function graficaVistaAspectosAction() {
        $em = $this->getDoctrine()->getManager();
        $tipoDocs = $em->getRepository('EntidadesBundle:TipoDoc')->findAll();

        $vista= array();
        $aspectos= array();
        foreach ($tipoDocs as $tipoDoc) {
            $vista[] = $tipoDoc->getDenominador();
            $aspectos[] = count($tipoDoc->getAspectos());           
        }

        return $this->render('EntidadesBundle:Proyecto:graficaVistaAspectos.html.twig', array(
                    'vista' => $vista,
                    'aspectos' => $aspectos,
        ));
    }

    public function pdfAction($id) {
        $em = $this->getDoctrine()->getManager();

        $rtfarquitectura = $em->getRepository('EntidadesBundle:RtfArquitectura')->find($id);
        $expediente = $em->getRepository('EntidadesBundle:ExpedienteArquitectura')->findOneBy(array('id' => $rtfarquitectura->getIdexped()));
        $docs = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->findBy(array('idexped' => $expediente->getId()));


        // $deleteForm = $this->createDeleteForm(-1);

        $html = $this->renderView('EntidadesBundle:DocumentoArquitectura:pdf.html.twig', array(
            'rtfarquitectura' => $rtfarquitectura,
            'expediente' => $expediente,
            'docs' => $docs,
        ));


        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="DICTAMEN-' . $expediente->getIdProy() . '-' . $expediente->getIdProy()->getVersion() . '.pdf"',
                )
        );
    }
    
    public function acercadeAction(){
        return $this->render('EntidadesBundle:Default:acercade.html.twig');
    }

}
