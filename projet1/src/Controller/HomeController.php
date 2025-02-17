<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);
    }
    #[Route('/service/{name}', name: 'show_service')]
    public function showService(string $name): Response
    {
        return $this->render('service/showService.html.twig',[
            'name' => $name,
        ]);
    }
    
    #[Route('/go-to-index', name: 'go_to_index')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('app_home');
    }
}
