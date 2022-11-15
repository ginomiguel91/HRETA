<?php

namespace HRETA\EntidadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HRETA\EntidadesBundle\Entity\Aspectos;
use HRETA\EntidadesBundle\Form\AspectosType;
use HRETA\EntidadesBundle\Util\FlashMessageManager;

/**
 * Aspectos controller.
 *
 */
class AspectosController extends Controller {

    /**
     * Lists all Aspectos entities.
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
        $entities = $em->getRepository('EntidadesBundle:Aspectos')->findAll();
        $deleteForm = $this->createDeleteForm(-1);

        return $this->render('EntidadesBundle:Aspectos:index.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new Aspectos entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Aspectos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::CreateFlash
            );

            return $this->redirect($this->generateUrl('aspectos_show', array('id' => $entity->getId())));
        }

        return $this->render('EntidadesBundle:Aspectos:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Aspectos entity.
     *
     * @param Aspectos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Aspectos $entity) {
        $form = $this->createForm(new AspectosType(), $entity, array(
            'action' => $this->generateUrl('aspectos_create'),
            'method' => 'POST',
        ));



        return $form;
    }

    /**
     * Displays a form to create a new Aspectos entity.
     *
     */
    public function newAction() {
        $entity = new Aspectos();
        $form = $this->createCreateForm($entity);

        return $this->render('EntidadesBundle:Aspectos:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Aspectos entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:Aspectos')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('aspectos'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:Aspectos:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Aspectos entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:Aspectos')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('aspectos'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:Aspectos:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Aspectos entity.
     *
     * @param Aspectos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Aspectos $entity) {
        $form = $this->createForm(new AspectosType(), $entity, array(
            'action' => $this->generateUrl('aspectos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));



        return $form;
    }

    /**
     * Edits an existing Aspectos entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:Aspectos')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('aspectos'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::UpdateFlash
            );
            return $this->redirect($this->generateUrl('aspectos_edit', array('id' => $id)));
        }

        return $this->render('EntidadesBundle:Aspectos:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Aspectos entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EntidadesBundle:Aspectos')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add(
                        'error', FlashMessageManager::ErrorFlash
                );
                return $this->redirect($this->generateUrl('aspectos'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::SucessDelete
            );
        }

        return $this->redirect($this->generateUrl('aspectos'));
    }

    /**
     * Creates a form to delete a Aspectos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('aspectos_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn')))
                        ->getForm()
        ;
    }

}
