<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }


    #[Route('/dwwm', name: 'app_dwwm')]
    public function dwwm(): Response
    {
        return $this->render("test/dwwm.html.twig");
    }
    
    
    #[Route('/user/{id<\d+>}/edit', name: 'app_user_edit')]
    // #[Route('/user/{id<[0-9]+>}/edit', name: 'app_user_edit')]
    public function edit(string $id): Response
    {
        return $this->render("test/edit_user.html.twig", [
            "id" => $id
        ]);
    }

}
