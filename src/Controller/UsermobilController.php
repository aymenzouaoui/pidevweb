<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
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

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use DateTime;
use Symfony\Component\Validator\Constraints\Email;


#[Route('/userm')]
class UsermobilController extends AbstractController

{
    #[Route('/', name: 'app_user_indexm', methods: ['GET'])]
    public function indexm(Request $request, ManagerRegistry $registry, PaginatorInterface $paginator, UserRepository $userRepository,NormalizerInterface $Normalizer): Response
    {
        $queryBuilder = $userRepository->createQueryBuilder('u')
        ->where('u.roles LIKE :role')
        ->setParameter('role', '%"ROLE_TRANSPORTEUR"%')
        ->orderBy('u.id', 'DESC');
    $users = $queryBuilder->getQuery()->getResult();
    $jsonContent = $Normalizer->normalize($users, 'json', ['groups' => 'user']);
    $retour = json_encode($jsonContent);
    return new Response($retour);


     }
    #[Route('/searchm', name: 'app_userm_search', methods: ['GET'])]
    public function searchStudentxm(Request $request, NormalizerInterface $Normalizer)
    {
        //die("test");
        $repository = $this->getDoctrine()->getRepository(User::class);
        $requestString = $request->get('searchValue');
        $users = $repository->findBySearchQuerya($requestString);
        
        $jsonContent = $Normalizer->normalize($users, 'json', ['groups' => 'user']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    }


    #[Route('/newm', name: 'app_userm_new', methods: ['GET', 'POST'])]
    public function newm(Request $req, UserRepository $em, UserPasswordHasherInterface $userPasswordHasher,NormalizerInterface $Normalizer): Response
    {
        function generateToken($length = 32)
        {
            return base64_encode(random_bytes($length));
        }


        $em=$this->getDoctrine()->getManager();
        $user = new User();
        $user->setNom($req->get('nom'));
        $user->setPrenom($req->get('prenom'));
      
      
      
        $user->setCin($req->get('cin'));
        $user->setPassword(
            $userPasswordHasher->hashPassword(
                $user,
                $req->get('password' )
            )
        );
       // $user->setPassword($req->get('password'));
            
       
        $dateDebString = $req->get("date_n");
        $dateDeb = DateTime::createFromFormat('Y-m-d', $dateDebString);
        $user->setDateNaissance($dateDeb);
       
        if($req->get('roles')=="a"){
        $roles = ["ROLE_USER"];}
        if($req->get('roles')=="b") {
        $roles = ["ROLE_TRANSPORTEUR"];}
        else{
        $roles = ["ROLE_ADMIN"];
        }

        $user->setRoles($roles);
        $user->setEmail($req->get('email'));
        $user->setNumtel($req->get('numtel'));
        $user->setAdress($req->get('adress'));
      

            $user->setImage("http://localhost/img/useravatar.jpg");
            $token = generateToken();
            $user->setToken($token);
            $user->setScore("00");
            $user->setCompteEx(new \DateTime());
            $user->setDatecreationc(new \DateTime());
            $user->setTokenEx(new \DateTime());
           
            /* dump($form->get('roles')->getData());
            dump($user->getRoles());
            die("end"); */
           
            
            $em->persist($user);
            $em->flush();
            


          

           
    
    $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'user']);
    $retour = json_encode($jsonContent);
    return new Response($retour);

}

    #[Route('/profilm', name: 'app_userm_show', methods: ['GET'])]
    public function show(NormalizerInterface $Normalizer): Response
    {
       
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        /* dump($user);
        die(); */
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'user']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    
    }
    #[Route('/{id}', name: 'app_userm_showpm', methods: ['GET'])]


    public function showpm(User $user,NormalizerInterface $Normalizer): Response
    {
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'user']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    }

    #[Route('/editm/{id}', name: 'app_userm_edit', methods: ['GET', 'POST'])]
    public function editm(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher): Response
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

    #[Route('/deletem/{id}', name: 'app_userm_delete', methods: ['GET', 'POST'])]
    public function deletem(Request $request, User $user, UserRepository $userRepository,$id,NormalizerInterface $Normalizer): Response
    {
       $em=$this->getDoctrine()->getManager();
            $user=$em->getRepository(User::class)->find($id);
            $em->remove($user);
            $em->flush();
       
        $jsonContent = $Normalizer->normalize($user, 'json', ['groups' => 'user']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    
    }

    }