<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Entity\Competition;

use App\Form\VehiculeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReservationRepository;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\VehiculeRepository;
use Dompdf\Dompdf;
use Dompdf\Options; 
use Symfony\Component\Serializer\SerializerInterface ;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer ; 
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Json; 
use Symfony\Component\HttpFoundation\JsonResponse ; 
use App\Entity\Reclamation;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Repository\CompetitionRepository;

#[Route('/vehicule')]
class VehiculeController extends AbstractController
{
    #[Route("/AllVehicule", name: "list")]
    public function getVehicules(EntityManagerInterface $entityManager,VehiculeRepository $repo, SerializerInterface $serializer)
    {
        $vehicules = $entityManager
            ->getRepository(Vehicule::class)
            ->findBy([],['idV' => 'DESC']) ;
        $json = $serializer->serialize($vehicules, 'json', ['groups' => "vehicules"]);
        return new Response($json);
    }

   
    
    #[Route('/', name: 'app_vehicule_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,ReservationRepository $reservationRepository,VehiculeRepository $vehiculeRepository,PaginatorInterface $paginator): Response
    {
        $valeur = new \DateTime('now');
        $reservations = $reservationRepository->findBy([], ['id' => 'DESC']);
    $reservationAndVehicules = [];
    foreach($reservations as $tabreservation){
        $tabreservation->getDateDeb()->modify('+1 day');
        $tabreservation->getDateFin()->modify('-1 day');

        if( $tabreservation->getEtat()=="Confirmée" && $valeur >= $tabreservation->getDateDeb() && $valeur <= $tabreservation->getDateFin()) 
                {                            
                    $veh = $vehiculeRepository->findOneById($tabreservation->getIdVeh()) ;
                    $veh->setEtat(1); 
                    $vehiculeRepository->save($veh, true);
                }  
                else
                {
                    $veh = $vehiculeRepository->findOneById($tabreservation->getIdVeh()) ;
                    $veh->setEtat(0); 
                    $vehiculeRepository->save($veh, true);
                   }         
        }
    
    foreach ($reservations as $reservation) {
        $valeurfin = $reservation->getDateFin();
        $valeurdeb = $reservation->getDateDeb();
        $diff = $valeurfin->diff($valeur);
        if ($diff->format('%R') === '+' && $reservation->getEtat()=="Confirmée")
        {
            $reservation->setEtat("En retard");
            $reservationRepository->save($reservation, true); 
        }
      
    }

        $vehicules = $entityManager
            ->getRepository(Vehicule::class)
            ->findBy([],['idV' => 'DESC']) ;

        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    #[Route('/new', name: 'app_vehicule_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('img')->getData();   
            
 
            if ($image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
 
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier 
                );
            dump($image);
                
            $vehicule->setImg('http://localhost/img/'.$fichier);}
            $entityManager->persist($vehicule);
            $entityManager->flush();

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('vehicule/new.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    #[Route('/{idV}', name: 'app_vehicule_show', methods: ['GET'])]
    public function show(Vehicule $vehicule,ReservationRepository $reservationRepository): Response
    {
        
        $tabreservations = $reservationRepository->findByVehiculeResCon($vehicule->getIdV());
        $res = [];

        foreach($tabreservations as $tabreservation){
            $endDate = $tabreservation->getDateFin();
            $endDate->modify('+1 day');
            $endDateStr = $endDate->format('Y-m-d');
            
            $res[] = [              
                'id' => $tabreservation->getId(),
                'start' => $tabreservation->getDateDeb()->format('Y-m-d'),
                'end' => $endDateStr,
                'title' => 'Reservé',
                'description' => 'Reservé',
                'backgroundColor' => '#ff949f',
                'borderColor' => '#ff0000',
                'textColor' => '#ffffff',
                'allDay' => true,
            ];
        }
        $data = json_encode($res);

        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,'data' => $data,

        ]);
    }

    #[Route('/{idV}/edit', name: 'app_vehicule_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('img')->getData();


            if ($image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                dump($image);

                $vehicule->setImg('http://localhost/img/' . $fichier);}
                $entityManager->persist($vehicule);
                $entityManager->flush();
            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    #[Route('/{idV}', name: 'app_vehicule_delete', methods: ['POST'])]
    public function delete(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getIdv(), $request->request->get('_token'))) {
            $entityManager->remove($vehicule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }


   
  
}