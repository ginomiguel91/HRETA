<?php

namespace HRETA\EntidadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HRETA\EntidadesBundle\Entity\RtfArquitectura;
use HRETA\EntidadesBundle\Form\RtfArquitecturaType;
use HRETA\EntidadesBundle\Util\FlashMessageManager;

/**
 * RtfArquitectura controller.
 *
 */
class RtfArquitecturaController extends Controller {

    /**
     * Lists all RtfArquitectura entities.
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

        $entities = $em->getRepository('EntidadesBundle:RtfArquitectura')->findAll();
        $deleteForm = $this->createDeleteForm(-1);
        return $this->render('EntidadesBundle:RtfArquitectura:index.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new RtfArquitectura entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new RtfArquitectura();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::CreateFlash
            );

            return $this->redirect($this->generateUrl('rtfarquitectura_show', array('id' => $entity->getId())));
        }

        return $this->render('EntidadesBundle:RtfArquitectura:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a RtfArquitectura entity.
     *
     * @param RtfArquitectura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(RtfArquitectura $entity) {
        $form = $this->createForm(new RtfArquitecturaType(), $entity, array(
            'action' => $this->generateUrl('rtfarquitectura_create'),
            'method' => 'POST',
        ));



        return $form;
    }

    /**
     * Displays a form to create a new RtfArquitectura entity.
     *
     */
    public function newAction() {
        $entity = new RtfArquitectura();
        $form = $this->createCreateForm($entity);

        return $this->render('EntidadesBundle:RtfArquitectura:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RtfArquitectura entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:RtfArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('rtfarquitectura'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:RtfArquitectura:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing RtfArquitectura entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:RtfArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('rtfarquitectura'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:RtfArquitectura:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a RtfArquitectura entity.
     *
     * @param RtfArquitectura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(RtfArquitectura $entity) {
        $form = $this->createForm(new RtfArquitecturaType(), $entity, array(
            'action' => $this->generateUrl('rtfarquitectura_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));



        return $form;
    }

    /**
     * Edits an existing RtfArquitectura entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:RtfArquitectura')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('rtfarquitectura'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::UpdateFlash
            );

            return $this->redirect($this->generateUrl('rtfarquitectura_edit', array('id' => $id)));
        }

        return $this->render('EntidadesBundle:RtfArquitectura:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a RtfArquitectura entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EntidadesBundle:RtfArquitectura')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add(
                        'error', FlashMessageManager::ErrorFlash
                );
                return $this->redirect($this->generateUrl('rtfarquitectura'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::SucessDelete
            );
        }

        return $this->redirect($this->generateUrl('rtfarquitectura'));
    }

    /**
     * Creates a form to delete a RtfArquitectura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('rtfarquitectura_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn')))
                        ->getForm()
        ;
    }

}
