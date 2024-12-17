<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AlgoController extends AbstractController
{
    #[Route('/', name: 'app_algo')]
    public function index(): Response
    {
        return $this->render('algo/index.html.twig', [
        ]);
    }
}
