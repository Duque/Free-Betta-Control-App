<?php

namespace fbc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PuestaController extends Controller {

    public function indexAction($id) {
        //Recogemos datos del formulario si hay
        $request = $this->getRequest();

        //Creamos el controlador de entidades
        $em = $this->getDoctrine()->getEntityManager();
        //Cargamos los datos de los bettas
        $puesta = $em->getRepository('fbcAppBundle:Puestas')->find($id);

        //Creamos el formulario
        $form = $this->createForm(new \fbc\AppBundle\Form\PuestasType(), $puesta);

        //Si request se ha invocado por "Post"...
        if ($request->getMethod() == 'POST') {
            //Cargamos el objeto $bettaForm con los datos del formulario
            $form->bindRequest($request);


            if ($form->isValid()) { //Y Si el form es válido...
                $em->flush();

                return $this->render('fbcAppBundle:Default:puesta.html.twig', array(
                            'puesta' => $puesta,
                            'form' => $form->createView(),
                            'alerta' => 'enviado'));
            }
        }

        return $this->render('fbcAppBundle:Default:puesta.html.twig', array(
                    'puesta' => $puesta,
                    'form' => $form->createView(),
                    'alerta' => 'sin enviar'));
    }

    public function nuevaPuestaAction() {
        //Recogemos datos del formulario si hay
        $request = $this->getRequest();
        $puesta = new \fbc\AppBundle\Entity\Puestas();
        //Creamos el controlador de entidades
        $em = $this->getDoctrine()->getEntityManager();
        //Cargamos los datos de los bettas
        //Creamos el formulario
        $form = $this->createForm(new \fbc\AppBundle\Form\PuestasType(), $puesta);

        //Si request se ha invocado por "Post"...
        if ($request->getMethod() == 'POST') {
            //Cargamos el objeto $bettaForm con los datos del formulario
            $form->bindRequest($request);


            if ($form->isValid()) { //Y Si el form es válido...
                //Al incluir fotos y puestas quitar estas 2 lineas
                $puesta->setImagenesPuesta(-1);

                //Guardamos en la base de datos
                $em->persist($puesta);
                $em->flush();

                return $this->redirect($this->generateUrl('puesta', array(
                                    'id' => $puesta->getIdPuesta())
                                ));
            }
        }

        return $this->render('fbcAppBundle:Default:nuevaPuesta.html.twig', array(
                    'puesta' => $puesta,
                    'form' => $form->createView(),
                    'alerta' => ''));
    }
    
    public function confirmarBorradoPuestaAction($id, $codPuesta) {
        return $this->render('fbcAppBundle:Default:borrarPuesta.html.twig', array(
                    'id' => $id,
                    'codPuesta' => $codPuesta));
    }

    public function borrarPuestaAction($id) {
        //Creamos el objeto que maneja las entidades
        $em = $this->getDoctrine()->getEntityManager();
        //Cargamos el repositorio del Bundle y entidad indicadas
        $puesta = $em->getRepository('fbcAppBundle:Puestas')->find($id);
        $em->remove($puesta);
        $em->flush();
        return $this->redirect($this->generateUrl('puestas'));
    }

}