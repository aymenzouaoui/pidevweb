<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;



class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            // User is already authenticated, redirect to home page
            return $this->redirectToRoute('app_accueil');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        // handle the login form submission
        if ($request->isMethod('POST')) {
            $username = $request->request->get('_username');
            $password = $request->request->get('_password');

            // do something with the username and password
        }

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }
    #[Route('/loginm', name: 'app_loginm')]
    public function indexm(Request $request,UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher, NormalizerInterface $Normalizer): response
    {
        // Handle the login form submission
        if ($request->isMethod('GET')) {
            $username = $request->query->get('username');
            $password = $request->query->get('password');
    
            $user = $userRepository->findUserByEmail($username);
          
            if ($user !== null && $userPasswordHasher->isPasswordValid($user, $password)) {
                // User is authenticated, serialize the user object
                $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'user']);
                $retour = json_encode($jsonContent);
                return new Response($retour);
        }}
    
        // Authentication failed or user not authenticated
        return new response(null);
    }
}
