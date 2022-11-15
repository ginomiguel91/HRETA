<?php

namespace HRETA\EntidadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HRETA\EntidadesBundle\Entity\ExpedienteArquitectura;
use HRETA\EntidadesBundle\Form\ExpedienteArquitecturaType;
use HRETA\EntidadesBundle\Util\FlashMessageManager;

/**
 * ExpedienteArquitectura controller.
 *
 */
class ExpedienteArquitecturaController extends Controller {
    /* public function documentosExpedienteAction($id) {
      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('EntidadesBundle:ExpedienteArquitectura')->find($id);

      if (!$entity) {
      throw $this->createNotFoundException('Unable to find ExpedienteArquitectura entity.');
      }

      $entities = $em->getRepository('EntidadesBundle:DocumentoArquitectura')->findBy(array('idexped' => $id));
      $deleteForm = $this->createDeleteForm(-1);
      return $this->render('EntidadesBundle:ExpedienteArquitectura:documentosExpediente.html.twig', array(
      'entities' => $entities,
      'delete_form' => $deleteForm->createView(),
      'entity' => $entity,
      ));
      }/**

      /**
     * Lists all ExpedienteArquitectura entities.
     *
     */

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
      if ($request->query->has("reject")) {
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::RejectedFlash
            );
        }
        $entities = $em->getRepository('EntidadesBundle:ExpedienteArquitectura')->findAll();
        $deleteForm = $this->createDeleteForm(-1);
        return $this->render('EntidadesBundle:ExpedienteArquitectura:index.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new ExpedienteArquitectura entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new ExpedienteArquitectura();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::CreateFlash
            );
            $this->container->get('create.document.evaluation')->CreateDocumentEvaluacion($entity);

            return $this->redirect($this->generateUrl('expedientearquitectura_show', array('id' => $entity->getId())));
        }

        return $this->render('EntidadesBundle:ExpedienteArquitectura:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ExpedienteArquitectura entity.
     *
     * @param ExpedienteArquitectura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ExpedienteArquitectura $entity) {
        $form = $this->createForm(new ExpedienteArquitecturaType(), $entity, array(
            'action' => $this->generateUrl('expedientearquitectura_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new ExpedienteArquitectura entity.
     *
     */
    public function newAction() {
        $entity = new ExpedienteArquitectura();
        $form = $this->createCreateForm($entity);

        return $this->render('EntidadesBundle:ExpedienteArquitectura:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ExpedienteArquitectura entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:ExpedienteArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('expedientearquitectura'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:ExpedienteArquitectura:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing ExpedienteArquitectura entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:ExpedienteArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('expedientearquitectura'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:ExpedienteArquitectura:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a ExpedienteArquitectura entity.
     *
     * @param ExpedienteArquitectura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(ExpedienteArquitectura $entity) {
        $form = $this->createForm(new ExpedienteArquitecturaType(), $entity, array(
            'action' => $this->generateUrl('expedientearquitectura_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));



        return $form;
    }

    /**
     * Edits an existing ExpedienteArquitectura entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:ExpedienteArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('expedientearquitectura'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::UpdateFlash
            );


            return $this->redirect($this->generateUrl('expedientearquitectura_edit', array('id' => $id)));
        }

        return $this->render('EntidadesBundle:ExpedienteArquitectura:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ExpedienteArquitectura entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EntidadesBundle:ExpedienteArquitectura')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add(
                        'error', FlashMessageManager::ErrorFlash
                );
                return $this->redirect($this->generateUrl('expedientearquitectura'));
            }

            $em->remove($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::SucessDelete
            );
        }

        return $this->redirect($this->generateUrl('expedientearquitectura'));
    }

    /**
     * Creates a form to delete a ExpedienteArquitectura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('expedientearquitectura_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn')))
                        ->getForm()
        ;
    }

}
