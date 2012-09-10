<?php

namespace fbc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BuscarController extends Controller {

    public function indexAction() {
        $form = $this->createForm(new \fbc\AppBundle\Form\BuscarType());
        return $this->render('fbcAppBundle:Bloques:buscar.html.twig', array(
                    'form' => $form->createView()));
    }

    public function resultadosAction() {
        $form = $this->createForm(new \fbc\AppBundle\Form\BuscarType());
        $request=  $this->getRequest();
        $formDatos = $request->get($form->getName());//Instanciamos los datos
        //del formulario en $formDatos con la clase BuscarType
        $keywords=$formDatos['keywords'];//$keywords recibe la búsqueda del 
        //objeto formDatos
        
        $repositorioBettas = $this->getDoctrine()
            ->getRepository('fbcAppBundle:Bettas'); //Creamos un repositorio en
            //donde haremos nuestras consultas a la clase Bettas
        
        $repositorioPuestas = $this->getDoctrine()
            ->getRepository('fbcAppBundle:Puestas');//Lo mismo con las puestas
        
        //--PENDIENTE--
        //Es necesario que las keywords estén contenidas en los campos,
        //hay que modificar el Query Builder para ello
        $queryBettas = $repositorioBettas->createQueryBuilder('b')
            ->where('b.codBetta = :keywords')//Es posible que sea en esta línea
            ->setParameter('keywords', $keywords)
            ->orderBy('b.idBetta', 'ASC')
            ->getQuery();
        
        //--PENDIENTE--
        $queryPuestas = $repositorioPuestas->createQueryBuilder('p')
            ->where('p.codPuesta = :keywords')
            ->setParameter('keywords', $keywords)
            ->orderBy('p.idPuesta', 'ASC')
            ->getQuery();
        
        //Recuperamos los datos necesarios
        $resultadoBettas = $queryBettas->getResult();
        $resultadoPuestas = $queryPuestas->getResult();
        
        return $this->render('fbcAppBundle:Default:resultado.html.twig', array(
                    'resultadoBettas' => $resultadoBettas,
                    'resultadoPuestas' => $resultadoPuestas,  
                    'form' => $form->createView(),
                    'keywords' => $keywords));
    }

}
