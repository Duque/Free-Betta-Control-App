<?php

namespace fbc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EscritorioController extends Controller {

    public function indexAction() {

        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery(
                        'SELECT count(b.idBetta) FROM fbcAppBundle:Bettas b WHERE b.sexo = :sexo'
                )->setParameter('sexo', 'm');

        $machos = $query->getSingleResult();

        $query2 = $em->createQuery(
                        'SELECT count(b.idBetta) FROM fbcAppBundle:Bettas b WHERE b.sexo = :sexo'
                )->setParameter('sexo', 'f');

        $hembras = $query2->getSingleResult();

        $query3 = $em->createQuery(
                'SELECT count(b.idBetta) FROM fbcAppBundle:Bettas b');

        $total = $query3->getSingleResult();

        $query4 = $em->createQuery(
                'SELECT count(p.idPuesta) FROM fbcAppBundle:Puestas p');

        $puestas = $query4->getSingleResult();

        $repository = $this->getDoctrine()
                ->getRepository('fbcAppBundle:Bettas');

        $query5 = $repository->createQueryBuilder('b')
                ->orderBy('b.idBetta', 'DESC')
                ->setMaxResults(1)
                ->getQuery();

        $ultimoBetta = $query5->getResult();
        
        $repository2 = $this->getDoctrine()
                ->getRepository('fbcAppBundle:Puestas');
        
        
        $query5 = $repository2->createQueryBuilder('p')
                ->orderBy('p.idPuesta', 'DESC')
                ->setMaxResults(1)
                ->getQuery();

        $ultimaPuesta = $query5->getResult();

        return $this->render('fbcAppBundle:Default:escritorio.html.twig', array('alerta' => 'sin enviar', 'machos' => $machos, 'hembras' => $hembras, 'total' => $total, 'puestas' => $puestas, 'ultimoBetta' => $ultimoBetta, 'ultimaPuesta'=>$ultimaPuesta));
    }

}
