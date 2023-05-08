<?php

namespace App\Controller;
use App\Entity\Evaluation;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EvaluationController extends AbstractController
{
    /**
     * @Route("/evaluation", name="evaluation")
     */
    public function evaluation(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
      
        if ($request->isMethod('post')) {
           
            $rating = $request->request->get('rating');

            // Faites ici tout ce que vous souhaitez faire avec l'ID du transporteur et la note

            // Vous pouvez par exemple enregistrer la note dans une base de données avec Doctrine ORM :
             $entityManager = $this->getDoctrine()->getManager();
             $evaluation = new Evaluation();
             $evaluation->setIdTransporteur($user);
             $evaluation->setNote($rating);
             $entityManager->persist($evaluation);
            $entityManager->flush();

            return $this->redirectToRoute('evaluation'); // Redirigez l'utilisateur vers la page d'évaluation après avoir soumis le formulaire
        }

        return $this->render('evaluation.html.twig');
    }
}
