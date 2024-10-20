<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service/{name}', name: 'show_service')]
    public function showService(string $name): Response
    {
        return new Response('Le service s\'appelle : ' . htmlspecialchars($name));
    }
}