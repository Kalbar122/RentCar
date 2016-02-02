<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class orderController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $order = $em->getRepository('RentCarBundle:Car')->findAll();
        return $this->render('RentCarBundle:Order:index.html.twig', array(
        	'order'=> $order));
    }
}

