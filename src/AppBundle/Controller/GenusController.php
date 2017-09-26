<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        //return new Response('Hola '.$genusName.' Mundo');
        $templating = $this->container->get('templating');
        $html = $templating->render('genus/show.html.twig', array('name'=>$genusName));
        return new Response($html);
    }
}