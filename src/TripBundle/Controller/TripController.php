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
class TripController extends Controller {

    /**
     * Lists all Trip entities.
     *
     * @Route("/", name="trip_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $trips = $em->getRepository('TripBundle:Trip')->findAll();

        return $this->render('trip/index.html.twig', array(
                    'trips' => $trips,
        ));
    }

    /**
     * Muestra el formulario de creación de libros.
     * 
     * @Route("/trip/create", name="trip_create")
     */
    public function createAction() {
        return $this->render('trip/new.html.twig');
    }

    /**
     * Creates a new Trip entity.
     *
     * @Route("/trip/new", name="trip_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $postData = $request->request;

        $trip = new Trip($postData->get("name"), $postData->get("description"), $postData->get("url"), $postData->get("price"));
        $em = $this->getDoctrine()->getManager();
        $em->persist($trip);
        $em->flush();

        return $this->forward('TripBundle:Trip:index');
    }

    /**
     * Finds and displays a Trip entity.
     *
     * @Route("/{id}", name="trip_show")
     * @Method("GET")
     */
    public function showAction(Trip $trip) {
        return $this->render('trip/show.html.twig', array(
                    'trip' => $trip,
        ));
    }

    /**
     * Displays a form to edit an existing Trip entity.
     *
     * @Route("/{id}/edit", name="trip_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction($id) {
        $trip = $this->getDoctrine()->getRepository('TripBundle:Trip')
                ->find($id);
        if ($trip) {
            return $this->render('trip/edit.html.twig', array('trip' => $trip));
        } else {
            return $this->forward('TripBundle:Trip:index');
        }
    }

    /**
     * Recibe el trip con sus campos modificados para su actualización.
     * 
     * @Route("/trip/update", name="update_trip")
     */
    public function updateAction(Request $request) {
        $postData = $request->request;
        $trip = $this->getDoctrine()->getRepository('TripBundle:Trip')
                ->find($postData->get("id"));

        $trip->setName($postData->get("name"));
        $trip->setDescription($postData->get("description"));
        $trip->setUrlPicture($postData->get("url"));
        $trip->setPrice($postData->get("price"));

        $em = $this->getDoctrine()->getManager();
        $em->merge($trip);
        $em->flush();

        return $this->forward('TripBundle:Trip:index');
    }

    /**
     * Deletes a Trip entity.
     *
     * @Route("/{id}/delete", name="trip_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($id) {
        $trip = $this->getDoctrine()->getRepository('TripBundle:Trip')
                ->find($id);

        if ($trip) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($trip);
            $em->flush();
            return $this->forward('TripBundle:Trip:index');
        }
    }

    /**
     * Busca trips por nombre.
     * 
     * @Route("/trip/search", name="search_trip")
     */
    public function searchAction(Request $request) {
        $trips = array();
        $searchTerm = $request->get('searchTerm');
        $em = $this->getDoctrine();

        //Si la cadena de búsqueda no está definida o es vacía
        if (!isset($searchTerm) || trim($searchTerm) === '') {
            $trips = $em->getRepository('TripBundle:Trip')
                    ->findAll();
        } else {
            //Buscar trips cuyo título contenga la cadena de búsqueda
            $trips = $em->getRepository("TripBundle:Trip")->createQueryBuilder('b')
                            ->where('b.name LIKE :searchTerm')
                            ->setParameter("searchTerm", '%' . $searchTerm . '%')
                            ->getQuery()->getResult();
        }

        return $this->render('trip/index.html.twig', array('trips' => $trips));
    }

}
