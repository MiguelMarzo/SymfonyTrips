<?php

namespace TripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TripBundle:Default:index.html.twig');
    }
}
