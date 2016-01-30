<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarsController extends Controller
{
    public function indexAction()
    {
        return $this->render('RentCarBundle:Cars:index.html.twig');
    }
}

