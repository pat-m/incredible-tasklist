<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AppController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function index(): RedirectResponse
    {
        return $this->redirect('app');
    }
}
