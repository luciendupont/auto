<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConcessionController extends AbstractController
{
    #[Route('/concession', name: 'app_concession')]
    public function index(): Response
    {
        return $this->render('concession/index.html.twig', [
            'controller_name' => 'ConcessionController',
        ]);
    }
}
