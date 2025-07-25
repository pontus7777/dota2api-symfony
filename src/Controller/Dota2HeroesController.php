<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Dota2HeroesController extends AbstractController
{
    #[Route('/heroes')]
    public function hero(): Response
    {
        $hero = "axe";
    return $this->render('dota2.heroes.html.twig', [
                         'hero' => $hero,]);
    }
}
