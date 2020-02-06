<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('sections/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/vesture")
     */
    public function vesture()
    {
        return $this->render('sections/dance_history.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/tradicionalas_dejas")
     */
    public function tradicionalas_dejas()
    {
        return $this->render('sections/traditional_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/briva_stila_dejas")
     */
    public function briva_stila_dejas()
    {
        return $this->render('sections/freestyle_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
