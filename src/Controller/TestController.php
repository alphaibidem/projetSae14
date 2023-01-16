<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
     #[Route('/cv', name: 'cv')]
    public function page(): Response
    {
        return $this->render('test/cv.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/portfolio', name: 'portfolio')]
    public function page1(): Response
    {
        return $this->render('test/portfolio.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/loisir', name: 'loisir')]
    public function page2(): Response
    {
        return $this->render('test/loisir.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function page3(): Response
    {
        return $this->render('test/contact.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
