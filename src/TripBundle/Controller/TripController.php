<?php

namespace TripBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TripBundle\Entity\Trip;
use TripBundle\Form\TripType;

/**
 * Trip controller.
 *
 * @Route("/trip")
 */
class TripController extends Controller
{
    /**
     * Lists all Trip entities.
     *
     * @Route("/", name="trip_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trips = $em->getRepository('TripBundle:Trip')->findAll();

        return $this->render('trip/index.html.twig', array(
            'trips' => $trips,
        ));
    }

    /**
     * Creates a new Trip entity.
     *
     * @Route("/new", name="trip_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $trip = new Trip();
        $form = $this->createForm(new TripType(), $trip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trip);
            $em->flush();

            return $this->redirectToRoute('trip_show', array('id' => $trip->getId()));
        }

        return $this->render('trip/new.html.twig', array(
            'trip' => $trip,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Trip entity.
     *
     * @Route("/{id}", name="trip_show")
     * @Method("GET")
     */
    public function showAction(Trip $trip)
    {
        $deleteForm = $this->createDeleteForm($trip);

        return $this->render('trip/show.html.twig', array(
            'trip' => $trip,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Trip entity.
     *
     * @Route("/{id}/edit", name="trip_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Trip $trip)
    {
        $deleteForm = $this->createDeleteForm($trip);
        $editForm = $this->createForm(new TripType(), $trip);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trip);
            $em->flush();

            return $this->redirectToRoute('trip_edit', array('id' => $trip->getId()));
        }

        return $this->render('trip/edit.html.twig', array(
            'trip' => $trip,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Trip entity.
     *
     * @Route("/{id}", name="trip_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Trip $trip)
    {
        $form = $this->createDeleteForm($trip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trip);
            $em->flush();
        }

        return $this->redirectToRoute('trip_index');
    }

    /**
     * Creates a form to delete a Trip entity.
     *
     * @param Trip $trip The Trip entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Trip $trip)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trip_delete', array('id' => $trip->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
