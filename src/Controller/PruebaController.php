<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PruebaController extends AbstractController {
    #[Route('/')] //La ruta a la que afectara este controller
    public function index(): Response {
        //El codigo que se ejecutara al acceder a la ruta
        $contents = $this->renderView('home/index.html.twig'); //Leyendo un html gracias a twigs
        echo "asdf";
        echo $_SERVER['REQUEST_METHOD'] === 'POST'; //Asi se sabe el metodo de la peticion entrante
        return new Response($contents); //Siempre hay que devolver una respuesta
    }
}