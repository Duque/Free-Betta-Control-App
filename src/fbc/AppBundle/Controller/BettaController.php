<?php

namespace fbc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BettaController extends Controller {

    public function indexAction($id) {
        //Recogemos datos del formulario si hay
        $request = $this->getRequest();

        //Creamos el controlador de entidades
        $em = $this->getDoctrine()->getEntityManager();
        //Cargamos los datos de los bettas
        $betta = $em->getRepository('fbcAppBundle:Bettas')->find($id);

        //Creamos el formulario
        $form = $this->createForm(new \fbc\AppBundle\Form\BettasType(), $betta);

        //Si request se ha invocado por "Post"...
        if ($request->getMethod() == 'POST') {
            //Cargamos el objeto $bettaForm con los datos del formulario
            $form->bindRequest($request);


            if ($form->isValid()) { //Y Si el form es válido...
                $em->flush();

                return $this->render('fbcAppBundle:Default:betta.html.twig', array(
                            'betta' => $betta,
                            'form' => $form->createView(),
                            'alerta' => 'enviado'));
            }
        }

        return $this->render('fbcAppBundle:Default:betta.html.twig', array(
                    'betta' => $betta,
                    'form' => $form->createView(),
                    'alerta' => 'sin enviar'));
    }

    public function nuevoAction() {
       //Recogemos datos del formulario si hay
        $request = $this->getRequest();
        $betta = new \fbc\AppBundle\Entity\Bettas();
        //Creamos el controlador de entidades
        $em = $this->getDoctrine()->getEntityManager();
        //Cargamos los datos de los bettas
        

        //Creamos el formulario
        $form = $this->createForm(new \fbc\AppBundle\Form\NuevoBettaType(), $betta);

        //Si request se ha invocado por "Post"...
        if ($request->getMethod() == 'POST') {
            //Cargamos el objeto $betta con los datos del formulario
            $form->bindRequest($request);


            if ($form->isValid()) { //Y Si el form es válido...
                //Falta terminar el tema de asignar puestas
                $betta ->setIdPuesta(-1); 
                //ES NECESARIO CAMBIAR LAS RUTAS HARDCODEADAS
                //movemos la imagen cargada
                //$form['imagenesBetta']->getData()->move('/var/www/fbc/web/uploads/'.$betta->getCodBetta(), $betta->getCodBetta().'.jpg');
                //Guardamos en la base de datos                
                $em->persist($betta);
                $em->flush();

                return $this->render('fbcAppBundle:Default:betta.html.twig', array(
                            'betta' => $betta,
                            'form' => $form->createView(),
                            'alerta' => 'enviado'));
            }
        }

        return $this->render('fbcAppBundle:Default:nuevoBetta.html.twig', array(
                    'betta' => $betta,
                    'form' => $form->createView(),
                    'alerta' => ''));
    }
    
    public function confirmarBorradoBettaAction($id, $codBetta) {
        return $this->render('fbcAppBundle:Default:borrarBetta.html.twig', array(
                    'id' => $id,
                    'codBetta' => $codBetta));
    }


    public function borrarBettaAction($id) {
        //Creamos el objeto que maneja las entidades
        $em = $this->getDoctrine()->getEntityManager();
        //Cargamos el repositorio del Bundle y entidad indicadas
        $bettas = $em->getRepository('fbcAppBundle:Bettas')->find($id);
        $em->remove($bettas);
        $em->flush();
        return $this->redirect($this->generateUrl('bettas'));
    }
}
