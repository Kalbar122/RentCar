<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Car5Controller extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $car5 = $em->getRepository('RentCarBundle:Car')->findAll();
        return $this->render('RentCarBundle:Car5:index.html.twig', array(
        	'car5'=> $car5));
    }
}