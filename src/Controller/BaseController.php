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
     * @Route("/accueil_event", name="accueil_event")
     */
    public function accueil_event()
    {
        return $this->render('base/accueil_event.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}
