<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\UserType;
use App\Form\SearchForm;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicule;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Form\FrontReservationType;
use Dompdf\Dompdf;
use Dompdf\Options; 
use App\Repository\VehiculeRepository;
use MercurySeries\FlashyBundle\FlashyNotifier ;
use App\Entity\SearchData ; 

class FrontReservationController extends AbstractController
{
    
    #[Route('/front/reservation/MesReservations/{id}/#', name: 'app_reservation_annuler')]
    public function annuler(ReservationRepository $reservationRepository,Reservation $reservation,FlashyNotifier $flashy)
    {
        $valeur2 = $reservation->getDateDeb(); 
        $valeur1 = new \DateTime('now');
        $interval = $valeur1->diff($valeur2);
        $days = $interval->days;
        if($reservation->getEtat()=="Terminée")
        $flashy->error('impossible d\' annuler une reservation terminée', 'http://your-awesome-link.com');
        else if($reservation->getEtat()=="Annulée")
        $flashy->error('La réservation a déjà été annulée', 'http://your-awesome-link.com');
        else if($reservation->getEtat()=="En cours")
        $flashy->error('impossible d\' annuler une reservation en cours', 'http://your-awesome-link.com');
        else if($reservation->getEtat()=="En retard")
        $flashy->error('impossible d\' annuler cette reservation ', 'http://your-awesome-link.com');
        else
        {
        $reservation->setEtat("Annulée");
        $flashy->success('La réservation a été annulée avec succès', 'http://your-awesome-link.com');
        $reservationRepository->save($reservation, true);
    
    }
            return $this->redirectToRoute('app_interface_Mesreservation') ;
    }
    
    
    #[Route('/front/reservation/MesReservations/{id}', name: 'app_reservation_download')]
    public function usersDataDownload(Reservation $reservation)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $vehicule = $reservation->getIdVeh();
        
        $valeur1 = $reservation->getDateDeb(); 
        $valeur2 = $reservation->getDateFin(); 
        if($valeur1 == $valeur2)
        $days = 1 ; 
        else 
        {
        $interval = $valeur1->diff($valeur2);
        $days = $interval->days;
        }
        
        $reservationAndVehicule[] = [
            'reservation' => $reservation,
            'vehicule' => $vehicule,
        ];
        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);

        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);

        // On génère le html
        $html = $this->renderView('reservation/download.html.twig', [
            'reservationsAndVehicules' => $reservationAndVehicule,
            'user' => $user,
            'periode' => $days
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'Amena-'. $this->getUser()->getId() .'.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);

        return new Response();
    }
  
    #[Route('/front/reservation', name: 'app_front_reservation')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $vehicules = $entityManager
        ->getRepository(Vehicule::class)
        ->findAll();
    return $this->render('front_reservation/index.html.twig', [
        'vehicules' => $vehicules,
    ]);
    }
   

    #[Route('/front/reservation/MesReservations', name: 'app_interface_Mesreservation')]
    public function mesRes(Request $request,ReservationRepository $reservationRepository, VehiculeRepository $vehiculeRepository): Response
    {
        
        
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $reservations = $reservationRepository->findByUser($user->getId());
        $reservationAndVehicule = [];
        foreach ($reservations as $reservation) {
            $vehicule = $vehiculeRepository->find($reservation->getIdVeh());
            $reservationAndVehicule[] = [
                'reservation' => $reservation,
                'vehicule' => $vehicule,
            ];
        }
    
        return $this->render('front_reservation/mesReservations.html.twig', [
            'reservationsAndVehicules' => $reservationAndVehicule,
        ]);
    }
    
   
    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReservationRepository $reservationRepository,VehiculeRepository $VehiculeRepository): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);
            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }
  
    #[Route('/front/reservation/{idV}', name: 'app_interface_reservation')]
    public function detaille(Request $request,ReservationRepository $reservationRepository,Vehicule $vehicule,FlashyNotifier $flashy): Response
    {
        $tabreservations = $reservationRepository->findByVehiculeResCon($vehicule->getIdV());
        $res = [];
        $valeurac = new \DateTime('now');
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

        $reservation = new Reservation();
        $form = $this->createForm(FrontReservationType::class, $reservation);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->setIdVeh($vehicule) ; 
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
            $user = $this->getUser();
            $reservation->setIdTrans($user);   
            $data = $form->getData();
            $valeur1 = $data->getDateDeb(); 
            $valeur2 = $data->getDateFin(); 
           if ($valeur1<$valeurac) {
                $flashy->error('Date invalide', 'http://your-awesome-link.com');
                return $this->redirectToRoute('app_interface_reservation', [
                    'idV' => $vehicule->getIdV(),]);
            } 
            if ($valeur1>$valeur2) {
                $flashy->error('Date invalide', 'http://your-awesome-link.com');
                return $this->redirectToRoute('app_interface_reservation', [
                    'idV' => $vehicule->getIdV(),]);
            } 
        foreach($tabreservations as $tabreservation){
            $tabreservation->getDateDeb()->modify('+1 day');
            $tabreservation->getDateFin()->modify('-1 day');

            if( $tabreservation->getEtat()=="Confirmée" && $valeur1 >= $tabreservation->getDateDeb() && $valeur1 <= $tabreservation->getDateFin()) 
                    {        
                 $flashy->error('La vehicule est reservé dans cette periode', 'http://your-awesome-link.com');
                 return $this->redirectToRoute('app_interface_reservation', [
                        'idV' => $vehicule->getIdV(),]); 
                    }   
                    if( $tabreservation->getEtat()=="Confirmée" && $valeur2 >= $tabreservation->getDateDeb() && $valeur2 <= $tabreservation->getDateFin()) 
                    {        
                 $flashy->error('La vehicule est reservé dans cette periode', 'http://your-awesome-link.com');
                 return $this->redirectToRoute('app_interface_reservation', [
                        'idV' => $vehicule->getIdV(),]); 
                    }          
            } 
          
            
            if($valeur1 == $valeur2)
            $days = 1 ; 
            else 
            {
            $interval = $valeur1->diff($valeur2);
            $days = $interval->days;
            }
            $reservation->setSomme(($days+1)*$vehicule->getPrix()) ; 
            $reservationRepository->save($reservation, true);
            $this->addFlash('success', 'Reservation ajouté avec succes');
            return $this->redirectToRoute('app_interface_Mesreservation', [
            ]);        
        }
       

        return $this->renderform('front_reservation/showveh.html.twig', [
            'vehicule' => $vehicule,
            'reservation' => $reservation,
            'form' => $form,
            'data' => $data,
            ]);
    }

  
    

}
