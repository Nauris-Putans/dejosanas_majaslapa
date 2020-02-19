<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    public function index()
    {
        return $this->render('error404.html.twig', [
            'controller_name' => 'ErrorController',
        ]);
    }
}
