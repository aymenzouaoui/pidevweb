<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\UserRepository;
use App\Repository\VehiculeRepository;
use MercurySeries\FlashyBundle\FlashyNotifier ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options; 
use Knp\Component\Pager\PaginatorInterface;


#[Route('/reservation')]
class ReservationController extends AbstractController
{

    #[Route("/Allreservation", name: "list")]
    public function getVehicules(EntityManagerInterface $entityManager,ReservationRepository $repo, SerializerInterface $serializer)
    {
        $vehicules = $entityManager
            ->getRepository(Vehicule::class)
            ->findBy([],['idV' => 'DESC']) ;
        $json = $serializer->serialize($vehicules, 'json', ['groups' => "vehicules"]);
        return new Response($json);
    }

    #[Route('/{id}/#', name: 'app_reservation_terminer')]
    public function terminer(ReservationRepository $reservationRepository,Reservation $reservation,FlashyNotifier $flashy)
    {
        if($reservation->getEtat()=="Annulée")
        $flashy->error('impossible de terminer une reservation annulée', 'http://your-awesome-link.com');
        else if($reservation->getEtat()=="Terminée")
        $flashy->error('La réservation a déjà été terminée', 'http://your-awesome-link.com');
        else
        {
        $reservation->setEtat("Terminée");
        $flashy->success('La réservation a été terminée avec succès', 'http://your-awesome-link.com');
        $reservationRepository->save($reservation, true);
    
    }
    return $this->redirectToRoute('app_reservation_index') ;
}


    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
public function index(Request $request,ReservationRepository $reservationRepository, UserRepository $userRepository, VehiculeRepository $vehiculeRepository,PaginatorInterface $paginator): Response
{
    $reservations = $reservationRepository->findBy([], ['id' => 'DESC']);
    $reservationAndVehicules = [];
    foreach ($reservations as $reservation) {
        $valeur2 = $reservation->getDateFin();
        $valeur1 = new \DateTime('now');
        $diff = $valeur2->diff($valeur1);
        if ($diff->format('%R') === '+' && $reservation->getEtat()=="Confirmée")
        {
            $reservation->setEtat("En retard");
            $reservationRepository->save($reservation, true);
        }
        else if ($diff->format('%R') === '-' && $reservation->getEtat()=="Confirmée")
        {
            $veh = $vehiculeRepository->findOneById($reservation->getIdVeh()) ;
            $veh->setEtat(1); 
            $vehiculeRepository->save($veh, true);
           } 
        else
          {
              $veh = $vehiculeRepository->findOneById($reservation->getIdVeh()) ;
                $veh->setEtat(0); 
               $vehiculeRepository->save($veh, true);
                   } 
        $user  = $userRepository->find($reservation->getIdTrans());
        $vehicule = $vehiculeRepository->find($reservation->getIdVeh());
        $reservationAndVehicules[] = [
            'reservation' => $reservation,
            'vehicule' => $vehicule,
            'user' => $user,
        ];
    } 

    $reservationAndVehicules = $paginator->paginate(
        $reservationAndVehicules, /* query NOT result */
        $request->query->getInt('page', 1),
        5
    );

    return $this->render('reservation/index.html.twig', [
        'reservationsAndVehicules' => $reservationAndVehicules,
    ]);
}

#[Route('/{id}/c', name: 'app_reservation_confirme')]
public function confirmer(ReservationRepository $reservationRepository,Reservation $reservation,FlashyNotifier $flashy)
{
    $valeur2 = $reservation->getDateDeb(); 
    $valeur1 = new \DateTime('now');
    $interval = $valeur1->diff($valeur2);
    $days = $interval->days;
    if($reservation->getEtat()=="Annulée")
    $flashy->error('impossible de confirmer une reservation annulée', 'http://your-awesome-link.com');
    else if($reservation->getEtat()=="Confirmée")
    $flashy->error('La réservation a déjà été confirmée', 'http://your-awesome-link.com');
    else if($reservation->getEtat()=="En retard")
    $flashy->error('impossible de confirmer une reservation en retard', 'http://your-awesome-link.com');
    else if($reservation->getEtat()=="Terminée")
    $flashy->error('impossible de confirmer une reservation terminée', 'http://your-awesome-link.com');
    else
    {
    $reservation->setEtat("Confirmée");
    $vehicule = $reservation->getIdVeh() ; 
    $flashy->success('La réservation a été confirmée avec succès', 'http://your-awesome-link.com');
    $reservationRepository->save($reservation, true);
}
        return $this->redirectToRoute('app_reservation_index') ;
}

    #[Route('/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $reservationRepository->remove($reservation, true);
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
   
}
