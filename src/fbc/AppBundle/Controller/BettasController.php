<?php

namespace fbc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BettasController extends Controller {

    public function indexAction() {
        //Creamos el objeto que maneja las entidades
        $em = $this->getDoctrine()->getEntityManager();
        //Cargamos el repositorio del Bundle y entidad indicadas
        $bettas = $em->getRepository('fbcAppBundle:Bettas')->findAll();
        return $this->render('fbcAppBundle:Default:bettas.html.twig', 
                array('bettas' => $bettas));
    }

}
