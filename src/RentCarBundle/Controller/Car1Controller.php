<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Car1Controller extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $car1 = $em->getRepository('RentCarBundle:Car')->findAll();
        return $this->render('RentCarBundle:Car1:index.html.twig', array(
        	'car1'=> $car1));
    }
}

