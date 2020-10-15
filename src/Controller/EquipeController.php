<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{
    /**
     * @Route("/equipe", name="administratif")
     */
    public function administratif()
    {
        return $this->render('equipe/administratif.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    /**
     * @Route("/equipeA", name="artistique")
     */
    public function artistique()
    {
        return $this->render('equipe/artistique.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

}
