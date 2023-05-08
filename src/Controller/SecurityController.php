<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
class SecurityController extends AbstractController
{
    #[Route('/security', name: 'app_security')]
    public function index(): Response
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout(): void
    {
        // controller can be blank: it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
    #[Route('/securitySuccess', name: 'app_securitySussess')]
    public function loginSuccessHandler(Request $request)
    {
        $user = $this->getUser();
        $roles = $user->getRoles();

        // Check if the user is an admin or not and redirect accordingly
        if (in_array('ROLE_ADMIN', $roles)) {
            return $this->redirectToRoute('app_stats_index');
        } else {
            return $this->redirectToRoute('app_accueil');
        }
    }
}
