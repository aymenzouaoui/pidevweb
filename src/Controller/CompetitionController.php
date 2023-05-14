<?php

namespace App\Controller;

use App\Entity\Competition;
use App\Form\CompetitionType;
use App\Repository\CompetitionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Component\Serializer\SerializerInterface ;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer ; 
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Json; 
use Symfony\Component\HttpFoundation\JsonResponse ; 
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/competition')]
class CompetitionController extends AbstractController


{ 
    
    
    #[Route('/newm/b', name: 'app_competition_newmm')]
    public function newmm(Request $req, CompetitionRepository $competitionRepository, NormalizerInterface $Normalizer): Response
    {
        $competition = new Competition();
        $em = $this->getDoctrine()->getManager();
        $competition->setTitle($req->get('titre'));
        $competition->setDateDeb(new \DateTime());
        $competition->setDateFin(new \DateTime());
        $competition->setType($req->get('type'));
       // $competition->setNbp($req->get('nbr'));
        $competition->setIdUc(161);

        $em->persist($competition);
        $em->flush();

        $jsonContent = $Normalizer->normalize($competition, 'json', ['groups' => 'user']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    }

    #[Route("/Allcompetition", name: "list2")]
    public function getcompetitions(EntityManagerInterface $entityManager,CompetitionRepository $competitionRepository, SerializerInterface $serializer)
    {
        $competitions = $entityManager
        ->getRepository(Competition::class)
        ->findAll() ;      
        $json = $serializer->serialize($competitions, 'json', ['groups' => ["competitions", "gifts"]]);
        return new Response($json);
    }
    /*afficher toutes les comp*/
    #[Route('/', name: 'app_competition_index', methods: ['GET'])]
    public function index(CompetitionRepository $competitionRepository): Response
    {
       $competition = $competitionRepository->findBy([],['id' =>'DESC']);
        return $this->render('competition/index.html.twig', [
            'competitions' => $competition,
        ]);
    }

     /*ajouter  une comp*/
    #[Route('/new', name: 'app_competition_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CompetitionRepository $competitionRepository): Response
    {
        $competition = new Competition();
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $valeur1 = $data->getDateDeb(); 
            $valeur2 = $data->getDateFin(); 
            /*if($valeur1 > $valeur2) {
                return $this->renderForm('competition/new.html.twig', [
                    'competition' => $competition,
                    'form' => $form,
                ]);*/
                $competitionRepository->save($competition, true);

            return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
            
            }

        return $this->renderForm('competition/new.html.twig', [
            'competition' => $competition,
            'form' => $form,
        ]);
    }



    #[Route('/{id}', name: 'app_competition_show', methods: ['GET'])]
    public function show(Competition $competition): Response
    {
        return $this->render('competition/show.html.twig', [
            'competition' => $competition,
        ]);
    }


 /*modifier une  comp*/
    #[Route('/{id}/edit', name: 'app_competition_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Competition $competition, CompetitionRepository $competitionRepository): Response
    {
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $competitionRepository->save($competition, true);

            return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('competition/edit.html.twig', [
            'competition' => $competition,
            'form' => $form,
        ]);
    }
    #[Route('/edit/b/{id}', name: 'app_competition_edit')]
    public function editComp(Request $req, NormalizerInterface $Normalizer,$id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $competition =$em->getRepository(Competition::class)->find($id);
        $competition->setTitle($req->get('titre'));
        $competition->setDateDeb(new \DateTime());
        $competition->setDateFin(new \DateTime());
        $competition->setType($req->get('type'));
       // $competition->setNbp($req->get('nbr'));
        $competition->setIdUc(161);

        $em->persist($competition);
        $em->flush();

        $jsonContent = $Normalizer->normalize($competition, 'json', ['groups' => 'user']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    }



    /*supprimer une comp*/
    #[Route('/{id}', name: 'app_competition_delete', methods: ['POST'])]
    public function delete(Request $request, Competition $competition, CompetitionRepository $competitionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competition->getId(), $request->request->get('_token'))) {
            $competitionRepository->remove($competition, true);
        }

        return $this->redirectToRoute('app_competition_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route("/deleteCompetitionJSON/{id}", name: "deleteCompetitionJSON")]
    public function deleteCompJSON(Request $req, NormalizerInterface $Normalizer,$id)
    {

        $em = $this->getDoctrine()->getManager();
        $competition = $em->getRepository(Competition::class)->find($id);
        
        $em->remove($competition);
        $em->flush();
        //$jsonContent = $Normalizer->normalize($competition, 'json', ['groups' => 'competitions']);
        return new JsonResponse(['message' => 'Comp deleted successfully']);
    }

    
    /*soooort*/
    #[Route('/sort-by-nbp', name: 'app_competition_sort_by_nbp', methods: ['GET'])]
public function sortByNbp(CompetitionRepository $competitionRepository): Response
{
    $competitions = $competitionRepository->findAll();
    usort($competitions, function($a, $b) {
        return $a->getNbp() <=> $b->getNbp();
    });
    return $this->render('competition/sorted.html.twig', [
        'competitions' => $competitions,
    ]);
}

    
}