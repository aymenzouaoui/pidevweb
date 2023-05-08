<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Validation;
use App\Form\ValidationType;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/validation')]
class ValidationController extends AbstractController
{
    #[Route('/', name: 'app_validation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {$this->denyAccessUnlessGranted('ROLE_ADMIN');

        // or add an optional message - seen by developers
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
    
        $validations = $entityManager
            ->getRepository(Validation::class)
            ->findAll();

        return $this->render('validation/index.html.twig', [
            'validations' => $validations,
        ]);
    }

    #[Route('/{id}/new', name: 'app_validation_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager,$id): Response
{
    $validation = new Validation();
    $user = $entityManager->getRepository(User::class)->find($id);
    $validation->setIdu($user);

    $form = $this->createForm(ValidationType::class, $validation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $validation->setIdu($user);
        $imageA = $form->get('imagea')->getData();
        $imageB = $form->get('imageb')->getData();

        if ($imageA) {
            $filenameA = md5(uniqid()) . '.' . $imageA->guessExtension();
            $imageA->move(
                $this->getParameter('images_directory'),
                $filenameA
            );
            $validation->setImagea('http://localhost/img/' . $filenameA);
        }

        if ($imageB) {
            $filenameB = md5(uniqid()) . '.' . $imageB->guessExtension();
            $imageB->move(
                $this->getParameter('images_directory'),
                $filenameB
            );
            $validation->setImageb('http://localhost/img/' . $filenameB);
        }

        $entityManager->persist($validation);
        $entityManager->flush();

        return $this->redirectToRoute('app_validation_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('validation/new.html.twig', [
        'validation' => $validation,
        'form' => $form,
    ]);
}

    #[Route('/{id}', name: 'app_validation_show', methods: ['GET'])]
    public function show(Validation $validation,EntityManagerInterface $entityManager): Response
    {$this->denyAccessUnlessGranted('ROLE_ADMIN');

        // or add an optional message - seen by developers
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
    
        $user = $entityManager->getRepository(User::class)->find(240);
        return $this->render('validation/show.html.twig', [
            'validation' => $validation,
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_validation_edit', methods: ['GET', 'POST'])]
    
public function edit(Request $request, Validation $validation, EntityManagerInterface $entityManager): Response
{$this->denyAccessUnlessGranted('ROLE_ADMIN');

    // or add an optional message - seen by developers
    $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');

    $form = $this->createForm(ValidationType::class, $validation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        return $this->redirectToRoute('app_validation_show', ['id' => $validation->getId()]);
    }

    return $this->renderForm('validation/edit.html.twig', [
        'validation' => $validation,
        'form' => $form,
    ]);
}


    #[Route('/{id}', name: 'app_validation_delete', methods: ['POST'])]
    public function delete(Request $request, Validation $validation, EntityManagerInterface $entityManager): Response
    {$this->denyAccessUnlessGranted('ROLE_ADMIN');

        // or add an optional message - seen by developers
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
    
        if ($this->isCsrfTokenValid('delete' . $validation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($validation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_validation_index', [], Response::HTTP_SEE_OTHER);
    }
}
