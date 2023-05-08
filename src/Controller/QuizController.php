<?php

namespace App\Controller;

use App\Entity\QuizQuestion;
use App\Form\QuizQuestionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{
    #[Route('/', name: 'quiz')]
    public function index(): Response
    {
        $questions = $this->getDoctrine()
            ->getRepository(QuizQuestion::class)
            ->findAll();

        return $this->render('quiz/index.html.twig', [
            'questions' => $questions,
        ]);
    }

    #[Route('/question/new', name: 'quiz_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $question = new QuizQuestion();
        $form = $this->createForm(QuizQuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('quiz');
        }

        return $this->render('quiz/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/question/{id}/edit', name: 'quiz_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, QuizQuestion $question): Response
    {
        $form = $this->createForm(QuizQuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('quiz');
        }

        return $this->render('quiz/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/question/{id}/delete', name: 'quiz_delete')]
    public function delete(Request $request, EntityManagerInterface $entityManager, QuizQuestion $question): Response
    {
        if ($this->isCsrfTokenValid('delete' . $question->getId(), $request->request->get('_token'))) {
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('quiz');
    }
    
}
