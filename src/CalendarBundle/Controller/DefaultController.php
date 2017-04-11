<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('CalendarBundle:Cours');

        $cours = $repository->findAll();

        dump($cours);
        return $this->render('CalendarBundle:Default:index.html.twig', array('cours'=> $cours));
    }
}
