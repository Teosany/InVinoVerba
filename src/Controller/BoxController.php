<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BoxController extends AbstractController
{
    #[Route('/box', name: 'app_box')]
    public function index(): Response
    {
        return $this->render('box/index.html.twig', [
            'controller_name' => 'BoxController',
        ]);
    }
}
