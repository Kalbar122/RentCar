<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cars = $em->getRepository('RentCarBundle:Car')->findAll();
        return $this->render('RentCarBundle:Cars:index.html.twig', array(
        	'cars'=> $cars
        ));
    }
}

