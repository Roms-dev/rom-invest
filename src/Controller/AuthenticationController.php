<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class AuthenticationController extends AbstractController
{
    #[Route("/login")]
    public function login()
    {
        return $this->render("pages/authentication/login.html.twig");
    }

    #[Route("/register")]
    public function register()
    {
        return $this->render("pages/authentication/register.html.twig");
    }
}