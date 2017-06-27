<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\User\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    /**
     * This action will check request parameters and authenticate via GitHub API
     *
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        $client = new \Github\Client();
        //$client->authenticate('username', 'password', \Github\Client::AUTH_HTTP_PASSWORD);

        try {
            $client->user()->myRepositories();
        } catch (\Exception $exception) {
            $error = $exception->getMessage();
        }

        return $this->render('login/login.html.twig', ["error" => $error]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        $this->redirectToRoute("login");
    }
}