<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoursController extends AbstractController
{
    /**
     * @Route("/cours", name="cours")
     */
    public function cours()
    {
        return $this->render('cours/cours.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }
    
    /**
     * @Route("/cours_users", name="cours_users")
     */
    public function cours_users()
    {
        return $this->render('cours/cours_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/eveil", name="eveil")
     */
    public function eveil()
    {
        return $this->render('cours/eveil.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/eveil_users", name="eveil_users")
     */
    public function eveil_users()
    {
        return $this->render('cours/eveil_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/classique", name="classique")
     */
    public function classique()
    {
        return $this->render('cours/classique.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/classique_users", name="classique_users")
     */
    public function classique_users()
    {
        return $this->render('cours/classique_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/contemporain", name="contemporain")
     */
    public function contemporain()
    {
        return $this->render('cours/contemporain.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/contemporain_users", name="contemporain_users")
     */
    public function contemporain_users()
    {
        return $this->render('cours/contemporain_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/modern", name="modern")
     */
    public function modern()
    {
        return $this->render('cours/modern.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/modern_users", name="modern_users")
     */
    public function modern_users()
    {
        return $this->render('cours/modern_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/ftp", name="ftp")
     */
    public function ftp()
    {
        return $this->render('cours/ftp.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/ftp_users", name="ftp_users")
     */
    public function ftp_users()
    {
        return $this->render('cours/ftp_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/yoga", name="yoga")
     */
    public function yoga()
    {
        return $this->render('cours/yoga.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/yoga_users", name="yoga_users")
     */
    public function yoga_users()
    {
        return $this->render('cours/yoga_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/ragga", name="ragga")
     */
    public function ragga()
    {
        return $this->render('cours/ragga.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/ragga_users", name="ragga_users")
     */
    public function ragga_users()
    {
        return $this->render('cours/ragga_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/tbc", name="tbc")
     */
    public function tbc()
    {
        return $this->render('cours/tbc.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/tbc_users", name="tbc_users")
     */
    public function tbc_users()
    {
        return $this->render('cours/tbc_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/hip_hop", name="hip_hop")
     */
    public function hip_hop()
    {
        return $this->render('cours/hip_hop.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/hip_hop_users", name="hip_hop_users")
     */
    public function hip_hop_users()
    {
        return $this->render('cours/hip_hop_users.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

}
