<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends controller
{
    /**
     * @Route("/primeraPagina/{nombre}")
     */
    public function muestraPagina($nombre)
    {
        $posiciones = [
            'Primero',
            'Segundo',
            'Tercero'
        ];

        return $this->render('genus/show.html.twig', [
            'nombre' => $nombre,
            'posiciones' => $posiciones
        ]);
    }
}