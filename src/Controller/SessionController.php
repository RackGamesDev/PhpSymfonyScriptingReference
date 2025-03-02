<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

//Archivo necesario para manejar sesiones y poder guardar datos segun el usuario (en las cookies)
//Es OBLIGATORIO avisar sobre estas cookies por temas legales

class SessionController extends AbstractController
{
    /**
     * @Route("/session/set/{key}/{value}", name="set_session")
     */
    #[Route('/session/set/{key}/{value}', name: 'set_session')]
    public function setSession(SessionInterface $session, $key, $value): Response
    {
        $session->set($key, $value);
        return new Response("Session value set for key '$key' with value '$value'");
    }

    /**
     * @Route("/session/get/{key}", name="get_session")
     */
    #[Route("/session/get/{key}", name: "get_session")]
    public function getSession(SessionInterface $session, $key): Response
    {
        $value = $session->get($key, 'default_value');
        return new Response("Session value for key '$key' is '$value'");
    }

    /**
     * @Route("/session/remove/{key}", name="remove_session")
     */
    #[Route("/session/remove/{key}", name: "remove_session")]
    public function removeSession(SessionInterface $session, $key): Response
    {
        $session->remove($key);
        return new Response("Session value for key '$key' has been removed");
    }

    /**
     * @Route("/session/clear", name="clear_session")
     */
    #[Route("/session/clear", name: "clear_session")]
    public function clearSession(SessionInterface $session): Response
    {
        $session->clear();
        return new Response("All session data has been cleared");
    }
}