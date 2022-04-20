<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/Riot', name: 'app_home')]
    public function number(): Response
    {

            $number = random_int(1,500);
            return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'slash' => '//',
            'bienvenue' => 'BIENVENUE JOUEUR',
            'number' => $number]);
    }
}
