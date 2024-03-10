<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route('/movie', name: 'app_movie')]
    public function index(): Response
    {
        $movies = [
            "Avengers: Endgame",
            "Inception",
            "Saving Private Ryan",
            "Gladiator"
        ];
        return $this->render('index.html.twig', array(
            'movies' => $movies
        ));
    }
}
