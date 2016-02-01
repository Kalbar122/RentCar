<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Car4Controller extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $car4 = $em->getRepository('RentCarBundle:Car')->findAll();
        return $this->render('RentCarBundle:Car4:index.html.twig', array(
        	'car4'=> $car4));
    }
}