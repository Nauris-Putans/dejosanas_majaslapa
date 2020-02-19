<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('sections/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/vesture", name="vesture")
     */
    public function vesture()
    {
        return $this->render('sections/dance_history.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/tradicionalas_dejas", name="deju_veidi/tradicionalas_dejas")
     */
    public function tradicionalas_dejas()
    {
        return $this->render('dance_types/traditional_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/briva_stila_dejas", name="deju_veidi/briva_stila_dejas")
     */
    public function briva_stila_dejas()
    {
        return $this->render('dance_types/freestyle_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/ielu_dejas", name="deju_veidi/ielu_dejas")
     */
    public function ielu_dejas()
    {
        return $this->render('dance_types/street_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/elektroniskas_muzikas_dejas", name="deju_veidi/elektroniskas_muzikas_dejas")
     */
    public function elektroniskas_muzikas_dejas()
    {
        return $this->render('dance_types/electro_music_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/vesturiskas_dejas", name="deju_veidi/vesturiskas_dejas")
     */
    public function vesturiskas_dejas()
    {
        return $this->render('dance_types/historic_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/latinamerikas_dejas", name="deju_veidi/latinamerikas_dejas")
     */
    public function latinamerikas_dejas()
    {
        return $this->render('dance_types/latin_american_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/deju_veidi/swinga_dejas", name="deju_veidi/swinga_dejas")
     */
    public function swinga_dejas()
    {
        return $this->render('dance_types/swing_dances.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/galerija/foto", name="galerija/foto")
     */
    public function foto()
    {
        return $this->render('sections/gallery/foto.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/galerija/video", name="galerija/video")
     */
    public function video()
    {
        return $this->render('sections/gallery/video.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/par_mani", name="par_mani")
     */
    public function par_mani()
    {
        return $this->render('sections/about_me.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

}
