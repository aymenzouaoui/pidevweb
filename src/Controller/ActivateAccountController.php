<?php

namespace App\Controller;
use App\Entity\User;

use App\Form\ActivateAccountType ;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActivateAccountController extends AbstractController
{
    #[Route('/activate', name: 'activate_account')]
   
    public function activate(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActivateAccountType ::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $data['email']]);

            if (!$user) {
                $this->addFlash('error', 'User not found');
            } elseif ($user->isStatus()) {
                $this->addFlash('success', 'Account already activated');
            } elseif ($user->getToken() !== $data['activation_code']) {
                $this->addFlash('error', 'Invalid activation code');
            } else {
                $user->setStatus(true);
                $user->setToken(null);
                $entityManager->flush();

                $this->addFlash('success', 'Account activated successfully');
                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('activate_account/sendmail.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
