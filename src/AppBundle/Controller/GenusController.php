<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/primeraPagina")
     */
    public function muestraPagina()
    {
        return new Response('Primera página en PHP 7.1');
    }
}