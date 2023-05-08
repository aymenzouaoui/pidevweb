<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Competition;
use App\Entity\Gifts;
use App\Entity\User;
use App\Form\UserType;
use App\Form\CompetitionType;
use App\Repository\CompetitionRepository;
use App\Repository\GiftsRepository;
use Symfony\Component\HttpFoundation\Request;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCodeBundle\Factory\QrCodeFactoryInterface;

class TestCadeauController extends AbstractController
{
    #[Route('/test/cadeau', name: 'app_test_cadeau')]
    public function index(Gifts $gifts,GiftsRepository $cadeauxRepository, BuilderInterface $qrbuilder): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $dataCadeau = "Nom du cadeau" . $gifts->getName() . "\n" ;
        
          // génération du QR code

        $qrCode = Builder::create()
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
        ->build();;

        

        return $this->render('test_cadeau/index.html.twig', [
            'gifts' => $cadeauxRepository->findAll(),
            'user' => $user,
            'qr'=>$qrCode ->getDataUri(),
        ]);

      
    }
}
