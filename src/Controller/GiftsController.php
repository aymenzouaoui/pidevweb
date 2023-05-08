<?php

namespace App\Controller;

use App\Entity\Gifts;
use App\Form\GiftsType;
use App\Repository\GiftsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\EntityType;

#[Route('/gifts')]
class GiftsController extends AbstractController
{
    #[Route('/', name: 'app_gifts_index', methods: ['GET'])]
    public function index(GiftsRepository $giftsRepository): Response
    {
        $gift = $giftsRepository->findBy([],['id' =>'DESC']);
        return $this->render('gifts/index.html.twig', [
            'gifts' => $gift,
        ]);
    }

    #[Route('/new', name: 'app_gifts_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GiftsRepository $giftsRepository,EntityManagerInterface $entityManager): Response
    {
        $gift = new Gifts();
        $form = $this->createForm(GiftsType::class, $gift);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $image = $form->get('photo')->getData();   
            
 
            if ($image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
 
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier 
                );
            dump($image);
                
            $gift->setPhoto('http://localhost/img/'.$fichier);}
                $entityManager->persist($gift);
                $entityManager->flush();
            return $this->redirectToRoute('app_gifts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gifts/new.html.twig', [
            'gift' => $gift,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gifts_show', methods: ['GET'])]
    public function show(Gifts $gift): Response
    {
        return $this->render('gifts/show.html.twig', [
            'gift' => $gift,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_gifts_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Gifts $gift, GiftsRepository $giftsRepository): Response
    {
        $form = $this->createForm(GiftsType::class, $gift);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('photo')->getData();   
            
 
            if ($image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
 
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier 
                );
            dump($image);
                
            $gift->setPhoto('http://localhost/img/'.$fichier);
                $giftsRepository->save($gift, true);
            }
            return $this->redirectToRoute('app_gifts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gifts/edit.html.twig', [
            'gift' => $gift,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gifts_delete', methods: ['POST'])]
    public function delete(Request $request, Gifts $gift, GiftsRepository $giftsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gift->getId(), $request->request->get('_token'))) {
            $giftsRepository->remove($gift, true);
        }

        return $this->redirectToRoute('app_gifts_index', [], Response::HTTP_SEE_OTHER);
    }
    
    

     
}
