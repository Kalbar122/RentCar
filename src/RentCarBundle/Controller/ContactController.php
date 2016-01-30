<?php

namespace RentCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('RentCarBundle:Contact:index.html.twig');
    }
}

