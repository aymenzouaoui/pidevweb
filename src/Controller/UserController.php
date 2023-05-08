<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Proxies\__CG__\App\Entity\Colis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

use App\Form\ResetPasswordType;
use App\Form\ResetRequestType;
use App\Repository\AnnoncesRepository;
use App\Repository\ColisRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/user')]
class UserController extends AbstractController

{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request, ManagerRegistry $registry, PaginatorInterface $paginator, UserRepository $userRepository): Response
    {
        $queryBuilder = $userRepository->createQueryBuilder('u')
        ->where('u.roles LIKE :role')
        ->setParameter('role', '%"ROLE_TRANSPORTEUR"%')
        ->orderBy('u.id', 'DESC');
    $users = $queryBuilder->getQuery()->getResult();
    $pagination = $paginator->paginate(
        $queryBuilder,
        $request->query->getInt('page', 1), /*page number*/
            2 /*limit per page*/
        );
        return $this->render('user/index.html.twig', ['users' => $users, 'pagination' => $pagination]);
    }
    #[Route('/search', name: 'app_user_search', methods: ['GET'])]
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


    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        function generateToken($length = 32)
        {
            return base64_encode(random_bytes($length));
        }

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
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
            $user->setImage("http://localhost/img/useravatar.jpg");
            $token = generateToken();
            $user->setToken($token);
            $user->setScore("00");
            $user->setCompteEx(new \DateTime());
            $user->setDatecreationc(new \DateTime());
            $user->setTokenEx(new \DateTime());
            $roles = [];
            $roles = $form->get('roles')->getData();
            $user->setRoles($roles);
            /* dump($form->get('roles')->getData());
            dump($user->getRoles());
            die("end"); */
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );


            $image = $form->get('image')->getData();


            $userRepository->save($user, true);

            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/profil', name: 'app_user_show', methods: ['GET'])]
    public function show(): Response
    {
        //die("tes");
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        /* dump($user);
        die(); */
       
       
        return $this->render('user/back/show.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/{id}', name: 'app_user_showp', methods: ['POST', 'GET' ])]


    public function showp($id, userRepository $userRepository, colisRepository $colisRepository,AnnoncesRepository $annoncesRepository,Request $request): Response
    {
        $user = $userRepository->find($id);

        $queryBuilder = $colisRepository->createQueryBuilder('u')
            ->where('u.id_u = :id')
            ->setParameter('id', $id);
            
        $colis = $queryBuilder->getQuery()->getResult();
        
        $queryBuilder = $annoncesRepository->createQueryBuilder('u')
            ->where('u.ida_U = :id')
            ->setParameter('id', $id);
            
        $annnonces = $queryBuilder->getQuery()->getResult();
     
        if ($request->isMethod('post')) {
           
            $rating = $request->request->get('rating');

            // Faites ici tout ce que vous souhaitez faire avec l'ID du transporteur et la note

            // Vous pouvez par exemple enregistrer la note dans une base de données avec Doctrine ORM :
             $entityManager = $this->getDoctrine()->getManager();
             $evaluation = new Evaluation();
             $evaluation->setIdTransporteur($user);
             $evaluation->setNote($rating);
             $user->setScore($user->getScore()+$rating*50);
             $entityManager->persist($evaluation);
            $entityManager->flush();
        }
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'colis' => $colis,
            'annnonces' => $annnonces,
        ]); 
    }

    #[Route('/edit/{id}', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher): Response
    {


        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the submitted password value
            $newPassword = $form->get('password')->getData();
            $roles = [];
            $roles = $form->get('roles')->getData();
            $user->setRoles($roles);
            // Check if the password field is not empty
            if (!empty($newPassword)) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            }
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





            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_user_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, UserRepository $userRepository, $id): Response
    {

        $user = $this->getUser();
        if ($user && $user->getRoles()[0] == "ROLE_ADMIN") {
            // dump($user);
            // die("test");
            $userRepository->remove($userRepository->find($id), true);
        }
        /*  if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
        }
 */
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
