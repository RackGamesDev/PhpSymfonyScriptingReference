<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\ServicioEjemplo; //Importando servicio personalizado desde src/Services


class PruebaController extends AbstractController {
    #[Route('/')] //La ruta a la que afectara este controller
    public function index(ServicioEjemplo $servicio): Response { //Se piden por parametros los servicios que se vallan a usar
        //El codigo que se ejecutara al acceder a la ruta
        $contents = $this->renderView('home/index.html.twig'); //Leyendo un html gracias a twigs
        //echo "asdf"; //No se deberia usar echo
        //$_SERVER['REQUEST_METHOD']; Asi se sabe el metodo de la peticion entrante
        //$servicio->hola(); //Usando un servicio personalizado
        //dd($servicio->hola());
        return new Response($contents); //Siempre hay que devolver una respuesta
    }
}