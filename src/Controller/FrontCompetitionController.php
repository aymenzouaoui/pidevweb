<?php

namespace App\Controller;

use App\Entity\Competition;
use App\Entity\Gifts;
use App\Entity\User;
use App\Form\UserType;
use App\Form\CompetitionType;
use App\Repository\CompetitionRepository;
use App\Repository\GiftsRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCodeBundle\Factory\QrCodeFactoryInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Knp\Component\Pager\PaginatorInterface;


class FrontCompetitionController extends AbstractController
{
    #[Route('/front/competition', name: 'app_front_competition')]
    public function index(CompetitionRepository $competitionRepository): Response
    {

        return $this->render('front_competition/index.html.twig', [
            'competitions' => $competitionRepository->findAll(),
        ]);
    }

    #[Route('/front/competition/cadeaux', name: 'app_front_cadeaucompetition')]
    public function afficherCadeaux(GiftsRepository $cadeauxRepository, BuilderInterface $qrbuilder,PaginatorInterface $paginator, Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $gifts= $cadeauxRepository->findAll();
       $gifts = $paginator->paginate($gifts, /* query NOT result*/
       $request->query->getInt(key:'page', default: 1),limit:6);
       

     return $this->render('front_competition/cadeauxcompetition.html.twig', [
         'gifts'=> $gifts,
         'user' => $user,
     ]);
    }

/*
    #[Route('/front/competition/cadeaux/#', name: 'exchange_giftsucc')]
    public function afficherCadeauxsucc(GiftsRepository $cadeauxRepository, BuilderInterface $qrbuilder,PaginatorInterface $paginator, Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $gifts= $cadeauxRepository->findAll();
       $gifts = $paginator->paginate($gifts, /* query NOT result
       $request->query->getInt(key:'page', default: 1),limit:6);
       

     return $this->render('front_competition/cadeauxcompetition.html.twig', [
         'gifts'=> $gifts,
         'user' => $user,
     ]);
    }
/*
    #[Route('/front/competition/cadeaux/#', name: 'app_front_afficherqr')]
    public function afficherQr(GiftsRepository $cadeauxRepository, BuilderInterface $qrbuilder): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
          // génération du QR code

        $qrResult = $qrbuilder
        ->size(400)
        ->margin(20)
        ->data('hhhh')
        ->build();

        $base64 = $qrResult->getDataUri();
        $html = '<h1>ddd</h1><img src="'. $base64.'">'; 
       return new Response
        (
            '<html><body>' . $html . '</body></html>'
        );
    }*/
    #[Route('/front/competition/detailscadeau/{id}', name: 'app_front_showdetailscadeau',methods:['GET'])]
    public function show(Gifts $gifts,GiftsRepository $cadeauxRepository, BuilderInterface $qrbuilder): Response
    { 
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $dataCadeau ="https://www.jumia.com.tn/" .$gifts->getDescription().".html\n";
        $qrCode =Builder::create()
        ->writer(new PngWriter())
            ->writerOptions([])
            ->data($dataCadeau)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText("")
            ->labelFont(new NotoSans(20))
            ->labelAlignment(new LabelAlignmentCenter())
            ->build();

        return $this->render('front_competition/showdetailscadeau.html.twig', [
           'gifts' =>$gifts,
           'user' =>$user,
           'qr' =>$qrCode->getDataUri(),
        ]);
    }
    #[Route('/front/competition/{id}', name: 'app_front_participer')]
    public function participer(Competition $comp,CompetitionRepository $competitionRepository,UserRepository $userRepository): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY'); 
        $user = $this->getUser();        
        
        if($user->getCompetitions()->contains($comp))
        {
echo"<script>alerte(\"ff\")</script>" ;
        }
        else
        {
        $comp->setNbp($comp->getNbp()+1) ;
        $comp->addUserPart($user);
        $user->addCompetition($comp);
        $competitionRepository->save($comp, true);
        $userRepository->save($user, true);
        }


        return $this->render('front_competition/index.html.twig', [
            'competitions' => $competitionRepository->findAll(),
        ]);
    }
 
 #[Route('/front/competition/cadeaux/{id}', name:'exchange_gift')]
public function exchangeGift(Request $request,Gifts $gift,UserRepository $userRepository): Response
{
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY'); 
    $user = $this->getUser();        
   $score = $user->getScore();
   $user->addGift($gift);
    $giftValue = $gift->getValue();

        // Déduire la valeur du gift du score de l'utilisateur
        $newScore = $score - $giftValue;
        $user->setScore($newScore);
        
        // Enregistrer la modification dans la base de données
        $userRepository->save($user, true);


        // Rediriger vers la page de profil de l'utilisateur avec un message de succès
        $this->addFlash('success', 'Le gift a été échangé avec succès.');  
        return $this->redirectToRoute('app_front_cadeaucompetition');
}
     
    


}
