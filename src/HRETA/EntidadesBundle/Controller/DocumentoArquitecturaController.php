<?php

namespace HRETA\EntidadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HRETA\EntidadesBundle\Entity\DocumentoArquitectura;
use HRETA\EntidadesBundle\Form\DocumentoArquitecturaType;
use HRETA\EntidadesBundle\Entity\Evaluacion;
use HRETA\EntidadesBundle\Util\FlashMessageManager;

/**
 * DocumentoArquitectura controller.
 *
 */
class DocumentoArquitecturaController extends Controller {

    public function evalDocumentSaveAction(Request $request, $id, $idexped) {

        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
        if ($request->query->has("reject")) {
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::EvaluateFlash
            );
        }
        $entity = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('documentoarquitectura'));
        }

        $aspectos = $em->getRepository('EntidadesBundle:Aspectos')->findBy(array('tblTipoDocid' => $entity->getTblTipoDocid()));
        foreach ($aspectos as $key => $aspecto) {
            $eval = $em->getRepository('EntidadesBundle:Evaluacion')->findOneBy(array('tblDocumentoArquitecturaid' => $entity->getId(), 'tblAspectosid' => $aspecto->getId()));
            $eval->setObservaciones($request->get('observacion' . $eval->getId()));
            if ($request->get('choose' . $eval->getId()) == "") {
                $eval->setSatisfecho(false);
            } else {
                $eval->setSatisfecho(true);
            }
        }
//        echo '<pre>';
//        print_r($request);
//        die;
        $em->persist($eval);
        $em->flush();

        return $this->redirect($this->generateUrl('documentoarquitectura', array('idexped' => $idexped)));
    }

    public function evalDocumentAction($id, $idexped) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('documentoarquitectura'));
        }

        $evaluaciones = array();
        $aspectos = $em->getRepository('EntidadesBundle:Aspectos')->findBy(array('tblTipoDocid' => $entity->getTblTipoDocid()));

        foreach ($aspectos as $key => $aspecto) {
            $eval = $em->getRepository('EntidadesBundle:Evaluacion')->findOneBy(array('tblDocumentoArquitecturaid' => $entity->getId(), 'tblAspectosid' => $aspecto->getId()));
            if ($eval) {
                $evaluaciones[$key] = $eval;
            } else {
                $eval = new Evaluacion();
                $eval->setTblAspectosid($aspecto);
                $eval->setTblDocumentoArquitecturaid($entity);
                $em->persist($eval);
                $evaluaciones[$key] = $eval;
            }
        }
        $em->flush();
//        $this->get('session')->getFlashBag()->add(
//                'notice', FlashMessageManager::EvaluateFlash
//        );
        return $this->render('EntidadesBundle:DocumentoArquitectura:evaluacion.html.twig', array(
                    'evaluaciones' => $evaluaciones,
                    'aspectos' => $aspectos,
                    'entity' => $entity,
        ));
    }

    /**
     * Lists all DocumentoArquitectura entities.
     *
     */
    public function indexAction($idexped) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
        if ($request->query->has("reject")) {
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::BeginEvaluateFlash
            );
        }

        $entities = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->findBy(array('idexped' => $idexped));
       // $deleteForm = $this->createDeleteForm(-1, $idexped);
        return $this->render('EntidadesBundle:DocumentoArquitectura:index.html.twig', array(
                    'entities' => $entities,
                    //'delete_form' => $deleteForm->createView(),
                    'idexped' => $idexped,
        ));
    }

    /**
     * Creates a new DocumentoArquitectura entity.
     *
     */
    public function createAction(Request $request, $idexped) {
        $entity = new DocumentoArquitectura();
        $form = $this->createCreateForm($entity, $idexped);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);

            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::CreateFlash
            );

            return $this->redirect($this->generateUrl('documentoarquitectura_show', array('id' => $entity->getId(), 'idexped' => $idexped)));
        }

        return $this->render('EntidadesBundle:DocumentoArquitectura:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'idexped' => $idexped,
        ));
    }

    /**
     * Creates a form to create a DocumentoArquitectura entity.
     *
     * @param DocumentoArquitectura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DocumentoArquitectura $entity, $idexped) {
        $form = $this->createForm(new DocumentoArquitecturaType(), $entity, array(
            'action' => $this->generateUrl('documentoarquitectura_create', array('idexped' => $idexped)),
            'method' => 'POST',
        ));



        return $form;
    }

    /**
     * Displays a form to create a new DocumentoArquitectura entity.
     *
     */
    public function newAction($idexped) {
        $entity = new DocumentoArquitectura();
        $form = $this->createCreateForm($entity, $idexped);

        return $this->render('EntidadesBundle:DocumentoArquitectura:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'idexped' => $idexped,
        ));
    }

    /**
     * Finds and displays a DocumentoArquitectura entity.
     *
     */
    public function showAction($id, $idexped) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('documentoarquitectura'));
        }

       // $deleteForm = $this->createDeleteForm($id, $idexped);

        return $this->render('EntidadesBundle:DocumentoArquitectura:show.html.twig', array(
                    'entity' => $entity,
                 //   'delete_form' => $deleteForm->createView(),
                 ));
    }

    /**
     * Displays a form to edit an existing DocumentoArquitectura entity.
     *
     */
    public function editAction($id, $idexped) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('documentoarquitectura'));
        }

        $editForm = $this->createEditForm($entity);
        //$deleteForm = $this->createDeleteForm($id, $idexped);

        return $this->render('EntidadesBundle:DocumentoArquitectura:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a DocumentoArquitectura entity.
     *
     * @param DocumentoArquitectura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(DocumentoArquitectura $entity) {
        $form = $this->createForm(new DocumentoArquitecturaType(), $entity, array(
            'action' => $this->generateUrl('documentoarquitectura_update', array('id' => $entity->getId(), 'idexped' => $entity->getIdexped()->getId())),
            'method' => 'PUT',
        ));


        return $form;
    }

    /**
     * Edits an existing DocumentoArquitectura entity.
     *
     */
    public function updateAction(Request $request, $id, $idexped) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('documentoarquitectura'));
        }

        //$deleteForm = $this->createDeleteForm($id, $idexped);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::UpdateFlash
            );

            return $this->redirect($this->generateUrl('documentoarquitectura_edit', array('id' => $id, 'idexped' => $idexped)));
        }

        return $this->render('EntidadesBundle:DocumentoArquitectura:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DocumentoArquitectura entity.
     *
     */
//    public function deleteAction(Request $request, $id, $idexped) {
//        $form = $this->createDeleteForm($id, $idexped);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $entity = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->find($id);
//
//            if (!$entity) {
//                $this->get('session')->getFlashBag()->add(
//                        'error', FlashMessageManager::ErrorFlash
//                );
//                return $this->redirect($this->generateUrl('documentoarquitectura'));
//            }
//
//            $em->remove($entity);
//            $em->flush();
//            $this->get('session')->getFlashBag()->add(
//                    'notice', FlashMessageManager::SucessDelete
//            );
//        }
//        return $this->redirect($this->generateUrl('documentoarquitectura', array('idexped' => $entity->getIdexped()->getId())));
//    }

    /**
     * Creates a form to delete a DocumentoArquitectura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
//    private function createDeleteForm($id, $idexped) {
//        $em = $this->getDoctrine()->getManager();
//        $entity = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->find($id);
//        return $this->createFormBuilder()
//                        ->setAction($this->generateUrl('documentoarquitectura_delete', array('id' => $id, 'idexped' => $idexped)))
//                        ->setMethod('DELETE')
//                        ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn')))
//                        ->getForm()
//        ;
//    }

    public function evaluacionAction($idTipoDoc, $idexped) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:Aspectos')->find($idTipoDoc);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('documentoarquitectura'));
        }

        //$deleteForm = $this->createDeleteForm($id, $idexped);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::UpdateFlash
            );
            return $this->redirect($this->generateUrl('documentoarquitectura_edit', array('id' => $id)));
        }

        return $this->render('EntidadesBundle:DocumentoArquitectura:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                  //  'delete_form' => $deleteForm->createView(),
        ));
    }

}
