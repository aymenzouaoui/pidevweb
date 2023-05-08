<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\User1Type;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use Knp\Component\Pager\PaginatorInterface;


#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/search', name: 'app_admin_search', methods: ['GET'])]
    public function searchStudentx(Request $request, NormalizerInterface $Normalizer)
    {
        //die("test");
        $repository = $this->getDoctrine()->getRepository(User::class);
        $requestString = $request->get('searchValue');
        $users = $repository->findBySearchQuerya($requestString);
        $jsonContent = $Normalizer->normalize($users, 'json', ['groups' => 'user']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    }


    #[Route('/', name: 'app_admin_index', methods: ['GET'])]
    public function index(UserRepository $userRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
        if ($user && $user->getRoles()[0] == "ROLE_ADMIN") {
            $query = $userRepository->createQueryBuilder('u')
                ->orderBy('u.id', 'DESC')
                ->getQuery();
            $pagination = $paginator->paginate(
                $query,
                $request->query->getInt('page', 1),
                10 // <-- Number of items per page
            );
            return $this->render('admin/index.html.twig', [
                'users' => $pagination,
            ]);
        } 
    }
    #[Route('/new', name: 'app_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response

    {
        function generateToken($length = 32)
        {
            return base64_encode(random_bytes($length));

        }

        $user = $this->getUser();
        if ($user && $user->getRoles()[0] == "ROLE_ADMIN") {
            $user = new User();
            $form = $this->createForm(User1Type::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $password = $form->get('password')->getData();
                if (empty($password)) {
                    $form->get('password')->addError(new FormError('Veuillez entrer un mot de passe.'));
                    return $this->renderForm('user/new.html.twig', [
                        'user' => $user,
                        'form' => $form,
                    ]);
                }


                $token = generateToken();
                $user->setToken($token);
                $user->setScore("00");
                $user->setCompteEx(new \DateTime());
                $user->setDatecreationc(new \DateTime());
                $user->setTokenEx(new \DateTime());
                $roles = [];
                $roles = $form->get('roles')->getData();
                $user->setRoles($roles);
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );

                $image = $form->get('image')->getData();


                if ($image) {
                    $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                    $image->move(
                        $this->getParameter('images_directory'),
                        $fichier
                    );
                    dump($image);

                    $user->setImage('http://localhost/img/' . $fichier);
                }

                $entityManager->persist($user);
                $entityManager->flush();
                $entityManager->persist($user);
                $entityManager->flush();
                $userRepository->save($user, true);

                return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('admin/new.html.twig', [
                'user' => $user,
                'form' => $form,
            ]);
        }
    }
    #[Route('/{id}', name: 'app_admin_show', methods: ['GET'])]

    public function show(User $user): Response
    {
        return $this->render('admin/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository, EntityManagerInterface $entityManager): Response

    {
        $form = $this->createForm(User1Type::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $roles = [];
            $roles = $form->get('roles')->getData();
            $user->setRoles($roles);
            $userRepository->save($user, true);
            $image = $form->get('image')->getData();


            if ($image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                dump($image);

                $user->setImage('http://localhost/img/' . $fichier);
                $entityManager->persist($user);
                $entityManager->flush();
                $userRepository->save($user, true);
            }
            return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/{id}/block', name: 'app_admin_block_user', methods: ['GET'])]
    public function blockUser(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $isBlocked = $request->request->get('isBlocked');
        if ($isBlocked === 'true') {
            $user->setStatus(true);
        } else {
            $user->setStatus(false);
        }

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin_index');
    }
}
