<?php

namespace uni\bundle\sistemasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\sistemasBundle\Entity\maqvirtual;
use uni\bundle\sistemasBundle\Form\maqvirtualType;

/**
 * maqvirtual controller.
 *
 */
class maqvirtualController extends Controller
{

    /**
     * Lists all maqvirtual entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniSistemasBundle:maqvirtual')->findAll();

        return $this->render('uniSistemasBundle:maqvirtual:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new maqvirtual entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new maqvirtual();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('maqvirtual_show', array('id' => $entity->getId())));
        }

        return $this->render('uniSistemasBundle:maqvirtual:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a maqvirtual entity.
     *
     * @param maqvirtual $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(maqvirtual $entity)
    {
        $form = $this->createForm(new maqvirtualType(), $entity, array(
            'action' => $this->generateUrl('maqvirtual_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new maqvirtual entity.
     *
     */
    public function newAction()
    {
        $entity = new maqvirtual();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniSistemasBundle:maqvirtual:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a maqvirtual entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maqvirtual')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maqvirtual entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:maqvirtual:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing maqvirtual entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maqvirtual')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maqvirtual entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniSistemasBundle:maqvirtual:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a maqvirtual entity.
    *
    * @param maqvirtual $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(maqvirtual $entity)
    {
        $form = $this->createForm(new maqvirtualType(), $entity, array(
            'action' => $this->generateUrl('maqvirtual_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing maqvirtual entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniSistemasBundle:maqvirtual')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find maqvirtual entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('maqvirtual_edit', array('id' => $id)));
        }

        return $this->render('uniSistemasBundle:maqvirtual:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a maqvirtual entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniSistemasBundle:maqvirtual')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find maqvirtual entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('maqvirtual'));
    }

    /**
     * Creates a form to delete a maqvirtual entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('maqvirtual_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
