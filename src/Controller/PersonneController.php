<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class PersonneController extends AbstractController
{
    #[Route('/personne', name: 'app_personne')]
    public function index(): Response
    {
        return $this->render('personne/index.html.twig', [
            'controller_name' => 'PersonneController',
        ]);
    }
    /**
     * @Route("/test",name="rout_tes")
     * 
     * */
    public function teste(): Response
    {
        return $this->render('personne/teste.html.twig', [
            'controller_name' => 'PersonneController',
        ]);
    }

    
}
