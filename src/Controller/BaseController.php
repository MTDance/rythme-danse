<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {
        return $this->render('base/accueil.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    /**
     * @Route("/accueil_users", name="accueil_users")
     */
    public function accueil_users()
    {
        return $this->render('base/accueil_users.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('users.html.twig');
    }

   
}
