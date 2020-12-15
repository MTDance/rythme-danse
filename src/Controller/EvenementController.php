<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    /**
     * @Route("/evenement", name="evenement")
     */
    public function evenement()
    {
        return $this->render('evenement/evenement.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    /**
     * @Route("/evenement_users", name="evenement_users")
     */
    public function evenement_users()
    {
        return $this->render('evenement/evenement_users.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
}
