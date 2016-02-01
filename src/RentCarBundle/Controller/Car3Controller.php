<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Car3Controller extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $car3 = $em->getRepository('RentCarBundle:Car')->findAll();
        return $this->render('RentCarBundle:Car3:index.html.twig', array(
        	'car3'=> $car3));
    }
}