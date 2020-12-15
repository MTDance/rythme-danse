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
     * @Route("/equipe_users", name="administratif_users")
     */
    public function administratif_users()
    {
        return $this->render('equipe/administratif_users.html.twig', [
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

    /**
     * @Route("/equipeA_users", name="artistique_users")
     */
    public function artistique_users()
    {
        return $this->render('equipe/artistique_users.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    /**
     * @Route("/isabelle", name="isabelle")
     */
    public function isabelle()
    {
        return $this->render('equipe/isabelle.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    /**
     * @Route("/isabelle_users", name="isabelle_users")
     */
    public function isabelle_users()
    {
        return $this->render('equipe/isabelle_users.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    /**
     * @Route("/tchad", name="tchad")
     */
    public function tchad()
    {
        return $this->render('equipe/tchad.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    /**
     * @Route("/tchad_users", name="tchad_users")
     */
    public function tchad_users()
    {
        return $this->render('equipe/tchad_users.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }
}
