<?php

namespace fbc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PuestasController extends Controller {

    public function indexAction() {
        $em=  $this->getDoctrine()->getEntityManager();
        $puestas= $em->getRepository('fbcAppBundle:Puestas')->findAll();
        return $this->render('fbcAppBundle:Default:puestas.html.twig', 
                array('puestas' => $puestas));
    }

}
