<?php

namespace HRETA\EntidadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HRETA\EntidadesBundle\Entity\InformeNc;
use HRETA\EntidadesBundle\Form\InformeNcType;
use HRETA\EntidadesBundle\Util\FlashMessageManager;

/**
 * InformeNc controller.
 *
 */
class InformeNcController extends Controller {

    /**
     * Lists all InformeNc entities.
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

        $entities = $em->getRepository('EntidadesBundle:InformeNc')->findAll();
        $deleteForm = $this->createDeleteForm(-1);
        return $this->render('EntidadesBundle:InformeNc:index.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new InformeNc entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new InformeNc();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::CreateFlash
            );
            return $this->redirect($this->generateUrl('informenc_show', array('id' => $entity->getId())));
        }

        return $this->render('EntidadesBundle:InformeNc:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a InformeNc entity.
     *
     * @param InformeNc $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(InformeNc $entity) {
        $form = $this->createForm(new InformeNcType(), $entity, array(
            'action' => $this->generateUrl('informenc_create'),
            'method' => 'POST',
        ));



        return $form;
    }

    /**
     * Displays a form to create a new InformeNc entity.
     *
     */
    public function newAction() {
        $entity = new InformeNc();
        $form = $this->createCreateForm($entity);

        return $this->render('EntidadesBundle:InformeNc:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InformeNc entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:InformeNc')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('informenc'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:InformeNc:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing InformeNc entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:InformeNc')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('informenc'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EntidadesBundle:InformeNc:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a InformeNc entity.
     *
     * @param InformeNc $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(InformeNc $entity) {
        $form = $this->createForm(new InformeNcType(), $entity, array(
            'action' => $this->generateUrl('informenc_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));



        return $form;
    }

    /**
     * Edits an existing InformeNc entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EntidadesBundle:InformeNc')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                    'error', FlashMessageManager::ErrorFlash
            );
            return $this->redirect($this->generateUrl('informenc'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::UpdateFlash
            );
            return $this->redirect($this->generateUrl('informenc_edit', array('id' => $id)));
        }

        return $this->render('EntidadesBundle:InformeNc:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a InformeNc entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EntidadesBundle:InformeNc')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add(
                        'error', FlashMessageManager::ErrorFlash
                );
                return $this->redirect($this->generateUrl('informenc'));
            }

            $em->remove($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice', FlashMessageManager::SucessDelete
            );
        }

        return $this->redirect($this->generateUrl('informenc'));
    }

    /**
     * Creates a form to delete a InformeNc entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('informenc_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn')))
                        ->getForm()
        ;
    }

}
