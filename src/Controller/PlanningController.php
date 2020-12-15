<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlanningController extends AbstractController
{
    /**
     * @Route("/planning", name="planning")
     */
    public function planning()
    {
        return $this->render('planning/planning.html.twig', [
            'controller_name' => 'PlanningController',
        ]);
    }

    /**
     * @Route("/planning_users", name="planning_users")
     */
    public function planning_users()
    {
        return $this->render('planning/planning_users.html.twig', [
            'controller_name' => 'PlanningController',
        ]);
    }

}
