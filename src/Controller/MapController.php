<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Colis;

class MapController extends AbstractController
{
    #[Route('/map/{id}', name: 'app_map')]
    public function index(Request $request): Response
    {
        // Récupération de tous les colis depuis la base de données
        $colisRepository = $this->getDoctrine()->getRepository(Colis::class);
        $colis = $colisRepository->find($request->get('id'));

        return $this->render('map/index.html.twig', [
            'controller_name' => 'MapController',
            'coli' => $colis, // Passage des colis au Twig
        ]);
    }
}

