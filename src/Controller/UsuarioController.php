<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UsuarioRepository;
use App\Entity\Usuario;
use App\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

final class UsuarioController extends AbstractController
{

    #[Route('/usuario', name: 'app_usuario')] //Se le pone tanto la url como un nombre
    public function index(UsuarioRepository $repository): Response //El objeto que usa por parametros se manda desde el servicio, un EntityRepository sirve para manejar consultas relacionadas con esa tabla
    {
        //$usuarios = $repository->findAll(); //Se obtienen todos los registros de la tabla gracias al Repository
        $usuarios = $repository->findBy([], ['id' => 'ASC']); //Se obtienen todos los registros de la tabla ordenados por el campo nombre de forma ascendente

        dump($usuarios); //Mostrar rapidamente variables en el html
        //dd($usuarios); //Hace lo mismo pero detiene la ejecucion devolviendo una respuesta
        return $this->render('usuario/index.html.twig', [
            'controller_name' => 'UsuarioController', 'variable' => 'asdf', 'usuarios' => $usuarios, //Mandando variables al html.twig para que se muestren
        ]);
    }

    #[Route('/usuario/{id<\d+>}', name: 'app_usuario_show')] //Usando variables en la url (se pueden poner mas de una ruta en un solo controller) (el <> es un regex)
    public function show($id, UsuarioRepository $repository): Response{ //Las variables de la url entraran a la funcion por parametros

        //$usuario = $repository->findOneBy(['id' =>  $id]); //Se obtiene un registro de la tabla (comparando todos los elementos de ese array asociativo)
        $usuario = $repository->find($id); //Obtiene el registro con ese id (mas rapido)
        if ($usuario === null){
            throw $this->createNotFoundException("Usuario $id no encontrado"); //Si no se encuentra el registro se lanza una excepcion (si en .env estaba puesto "dev" devolvera el error completo, si era "prod" devovlera un 404)
        }
        return $this->render('usuario/show.html.twig', [
             'usuario' => $usuario
        ]);
    }
    //Una forma alternativa mas corta
    #[Route('/usuariover/{id<\d+>}', name: 'app_usuario_show_ver')]
    public function showver(Usuario $usuario): Response{
        return $this->render('usuario/show.html.twig', [
             'usuario' => $usuario
        ]);
    }

    #[Route('/usuario/nuevo', name: 'app_usuario_new')]
    public function new(Request $request, EntityManagerInterface $manager, UsuarioRepository $repository): Response{ //Recibe la request en caso de que se llegue aqui mediante el submit (POST)
        
        $usuario = new Usuario();

        $form = $this->createForm(UsuarioType::class, $usuario); //Declarar un formulario html en base a una clase formulario creada para una entity (php bin/console make:form) (es mejor pasarle ya el objeto para hacer bien las validaciones del orm)
        //Para personalizar el form se hace desde su archivo, en este caso en /src/Form/UsuarioType.php

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){ //Este codigo se ejecutara con el submit, ya que mandara a esta misma url una peticion POST con todos los datos (el isValid es para comprobar las validaciones)
            $manager->persist($usuario);
            $manager->flush(); //Insertar en la base de datos
            return $this->redirectToRoute('app_usuario'); //Redirigir a otra pagina
        }
        return $this->render('usuario/new.html.twig', [
            'form' => $form //Devolver el formulario para imprimirlo en el html
        ]);
    }

    #[Route('/usuario/editar/{id<\d+>}', name: 'app_usuario_edit')]
    public function edit(Usuario $usuario, Request $request, EntityManagerInterface $manager): Response{
        //Metodo para editar, se sigue necesitando el form para editar los datos y el entity para saber cual cambiar
        $form = $this->createForm(UsuarioType::class, $usuario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->flush();
            return $this->redirectToRoute('app_usuario');
        }
        return $this->render('usuario/edit.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/usuario/borrar/{id<\d+>}', name: 'app_usuario_delete')]
    public function delete(Request $request, Usuario $usuario, EntityManagerInterface $manager): Response{
        //Metodo para borrar, se necesita el entity para saber cual borrar
        if ($request->isMethod('POST')){ //Si se llega a aqui con POST (osea desde el form de confirmar) se borra del todo
            $manager->remove($usuario); //Borrar un registro
            $manager->flush();
            return $this->redirectToRoute('app_usuario');
        }
        
        return $this->render('usuario/delete.html.twig', [
            'id' => $usuario->getId(),
        ]);
    }
}