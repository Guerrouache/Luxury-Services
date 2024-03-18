<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/job')]
class JobController extends AbstractController
{
    #[Route('/', name: 'app_job')]
    public function index(): Response
    {
        return $this->render('job/index.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }

    #[Route('/show', name: 'app_job_show')]
    public function show(): Response
    {
        return $this->render('job/show.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }
}