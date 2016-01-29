<?php

namespace Kasia\EpopeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Kasia\EpopeeBundle\Entity\Reflection;
use Kasia\EpopeeBundle\Form\ReflectionType;

class ReflectionController extends Controller
{
    public function insertAction(Request $request)
    {
    	$reflection = new Reflection();
        //$reflection->setCreatedAt(new DateTime());
    	$form = $this->createForm(new ReflectionType(), $reflection);
    	if ($request->isMethod('POST')
                && $form->handleRequest($request)
                && $form->isValid()
                ) {
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($reflection);
                        $em->flush();
                         return $this->redirect($this->generateUrl('kasia_epopee_reflection_list', array()));
                }
        return $this->render('KasiaEpopeeBundle:Reflection:insert.html.twig', array('form' => $form->createView()));
    }

}
/*public function indexAction()
    {
		$em = $this->getDoctrine()->getManager();
		$reflectionRepository = $em->getRepository("KasiaEpopeeBundle:Reflection"); 
		$reflections = $
        return $this->render('KasiaEpopeeBundle:Default:index.html.twig'), array('reflections'=$reflections);
    }
*/