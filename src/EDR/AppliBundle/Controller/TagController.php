<?php

namespace EDR\AppliBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EDR\AppliBundle\Entity\Tag;
use EDR\AppliBundle\Form\TagType;

/**
 * Tag controller.
 *
 */
class TagController extends Controller
{
    /**
     * Lists all Tag entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('EDRAppliBundle:Tag')->findBy(array(),array('id' => 'desc'));

        return $this->render('EDRAppliBundle:tag:index.html.twig', array(
            'tags' => $tags,
        ));
    }

    /**
     * Creates a new Tag entity.
     *
     */
    public function newAction(Request $request)
    {
        $tag = new Tag();
        $form = $this->createForm('EDR\AppliBundle\Form\TagType', $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            return $this->redirectToRoute('tag_show', array('id' => $tag->getId()));
            //return $this->redirectToRoute('tag_index');
        }

        return $this->render('EDRAppliBundle:tag:new.html.twig', array(
            'tag' => $tag,
            'form' => $form->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing Tag entity.
     *
     */
    public function editAction(Request $request, Tag $tag)
    {
        $deleteForm = $this->createDeleteForm($tag);
        $editForm = $this->createForm('EDR\AppliBundle\Form\TagType', $tag);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'mesConfirm',
                'Modification Réussie !'
            );

            //return $this->redirectToRoute('tag_edit', array('id' => $tag->getId()));
            return $this->redirectToRoute('tag_index');
        }

        return $this->render('EDRAppliBundle:tag:edit.html.twig', array(
            'tag' => $tag,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tag entity.
     *
     */
    public function deleteAction($id)   //(Request $request, Tag $tag)
    {
        //$form = $this->createDeleteForm($tag);
        //$form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $tag = $em->getRepository('EDRAppliBundle:Tag')->find($id);

            $em->remove($tag);
            $em->flush();

        $this->get('session')->getFlashBag()->add(
            'mesConfirm',
            'Suppression Réussie !'
        );
        //}

        return $this->redirectToRoute('tag_index');
    }

    /**
     * Creates a form to delete a Tag entity.
     *
     * @param Tag $tag The Tag entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tag $tag)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tag_delete', array('id' => $tag->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
