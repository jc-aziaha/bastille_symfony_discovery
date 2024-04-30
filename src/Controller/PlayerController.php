<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PlayerController extends AbstractController
{
    #[Route('/players', name: 'app_player')]
    public function index(): Response
    {
        $players = ["Mario", "Luigi", "Tod", "Bowser", "Peach", "Yoshi"];

        return $this->render('player/index.html.twig', [
            "players" => $players
        ]);
    }
}
