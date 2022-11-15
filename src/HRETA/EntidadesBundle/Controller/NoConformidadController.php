<?php

namespace HRETA\EntidadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HRETA\EntidadesBundle\Entity\NoConformidad;
use HRETA\EntidadesBundle\Form\NoConformidadType;
use HRETA\EntidadesBundle\Util\FlashMessageManager;

/**
 * NoConformidad controller.
 *
 */
class NoConformidadController extends Controller {

    /**
     * Lists all NoConformidad entities.
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

        $entities = $em->getRepository('EntidadesBundle:NoConformidad')->findAll();
        $deleteForm = $this->createDeleteForm(-1);
        return $this->render('EntidadesBundle:NoConformidad:index.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new NoConformidad entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new NoConformidad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::CreateFlash
            );

            return $this->redirect($this->generateUrl('noconformidad_show', array('id' => $entity->getId())));
        }

        return $this->render('EntidadesBundle:NoConformidad:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a NoConformidad entity.
     *
     * @param NoConformidad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(NoConformidad $entity) {
        $form = $this->createForm(new NoConformidadType(), $entity, array(
            'action' => $this->generateUrl('noconformidad_create'),
            'method' => 'POST',
        ));



        return $form;
    }

    /**
     * Displays a form to create a new NoConformidad entity.
     *
     */
    public function newAction() {
        $entity = new NoConformidad();
        $form = $this->createCreateForm($entity);

        return $this->render('EntidadesBundle:NoConformidad:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a NoConformidad entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:NoConformidad')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('noconformidad'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:NoConformidad:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing NoConformidad entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:NoConformidad')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('noconformidad'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:NoConformidad:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a NoConformidad entity.
     *
     * @param NoConformidad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(NoConformidad $entity) {
        $form = $this->createForm(new NoConformidadType(), $entity, array(
            'action' => $this->generateUrl('noconformidad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));



        return $form;
    }

    /**
     * Edits an existing NoConformidad entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:NoConformidad')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('noconformidad'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::UpdateFlash
            );

            return $this->redirect($this->generateUrl('noconformidad_edit', array('id' => $id)));
        }

        return $this->render('EntidadesBundle:NoConformidad:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a NoConformidad entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EntidadesBundle:NoConformidad')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add(
                        'error', FlashMessageManager::ErrorFlash
                );
                return $this->redirect($this->generateUrl('noconformidad'));
            }

            $em->remove($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::SucessDelete
            );
        }

        return $this->redirect($this->generateUrl('noconformidad'));
    }

    /**
     * Creates a form to delete a NoConformidad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('noconformidad_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn')))
                        ->getForm()
        ;
    }

}
