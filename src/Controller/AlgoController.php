<?php

namespace App\Controller;

use App\Entity\Maison;
use App\Form\QuestionnaireType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AlgoController extends AbstractController
{
    #[Route('/', name: 'app_algo')]
    public function index(): Response
    {
        
        $form=$this->createForm(QuestionnaireType::class);
        return $this->render('algo/index.html.twig', [
            "form"=>$form,
        ]);
    }
}
