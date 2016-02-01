<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Car2Controller extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $car2 = $em->getRepository('RentCarBundle:Car')->findAll();
        return $this->render('RentCarBundle:Car2:index.html.twig', array(
        	'car2'=> $car2));
    }
}