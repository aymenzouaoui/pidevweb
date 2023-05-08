<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Form\AnnoncesType;
use App\Repository\AnnoncesRepository;
use App\Repository\ColisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Snipe\BanBuilder\CensorWords;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/annonces')]
class AnnoncesController extends AbstractController
{
    #[Route('/', name: 'app_annonces_index', methods: ['GET'])]
    public function index(AnnoncesRepository $annoncesRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
    
        if  ($user->getRoles() ==('ROLE_TRANSPORTEUR')) 
        
        
        
        
        $annonces = $annoncesRepository->findByType("offre");
        else if ($user->getRoles() ==('ROLE_USER'))
            $annonces = $annoncesRepository->findByType("demande");
        else 
            $annonces = $annoncesRepository->findAll();
        
    
        $annonces = $paginator->paginate(
            $annonces,
            $request->query->getInt('page', 1),
            4 // nombre d'éléments à afficher par page
        );

        return $this->render('annonces/indexfront.html.twig', [
            'annonces' => $annonces,
        ]);
    }
    


    /* #[Route('/indexback', name: 'app_annonces_index', methods: ['GET'])]
    public function indexback(AnnoncesRepository $annoncesRepository,Request $request, PaginatorInterface $paginator): Response
    { 
        $query = $annoncesRepository->createQueryBuilder('a')->getQuery();

    $annonces = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
       4 // nombre d'éléments à afficher par page
    );

    return $this->render('annonces/indexback.html.twig', [
        'annonces' => $annonces,
    ]);
    }*/

    #[Route('/new/{id}', name: 'app_annonces_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnnoncesRepository $annoncesRepository, EntityManagerInterface $entityManager, $id, ColisRepository $cr): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $annonce = new Annonces();
        $form = $this->createForm(AnnoncesType::class, $annonce);
        $form->handleRequest($request);

        $censor = new CensorWords;
        $langs = array('fr', 'it', 'en-us', 'en-uk', 'de', 'es', 'tn');
        $badwords = $censor->setDictionary($langs);
        $censor->setReplaceChar("*");
        $censoredString = $censor->censorString($annonce->getDescription());
        $annonce->setDescription($censoredString['clean']);
        $colis = $cr->find($request->get('id'));
        if ($form->isSubmitted() && $form->isValid()) {
            $annonce->setIdColis($colis);
            $annonce->setIdaU($user);

            $rolestrans[] = 'ROLE_USER';
            /*  dump($user->getRoles());
       die("test"); */
            if ($user->getRoles()[0] =="ROLE_USER" )
                $annonce->setType("offre");
            else
                $annonce->setType("demande");

            $annoncesRepository->save($annonce, true);
            return $this->redirectToRoute('app_annonces_index', [], Response::HTTP_SEE_OTHER);
        }
        $annonce = $annoncesRepository->findAll() ;
        return $this->renderForm('annonces/new.html.twig', [
            'annonces' => $annonce,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_annonces_show', methods: ['GET'])]
    public function show(Annonces $annonce): Response
    {
        return $this->render('annonces/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_annonces_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Annonces $annonce, AnnoncesRepository $annoncesRepository,): Response
    {
        $form = $this->createForm(AnnoncesType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $annoncesRepository->save($annonce, true);

            return $this->redirectToRoute('app_annonces_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('annonces/edit.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_annonces_delete', methods: ['POST'])]
    public function delete(Request $request, Annonces $annonce, AnnoncesRepository $annoncesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $annonce->getId(), $request->request->get('_token'))) {
            $annoncesRepository->remove($annonce, true);
        }

        return $this->redirectToRoute('app_annonces_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/annonces/search', name: 'app_annonces_search', methods: ['GET'])]
    public function search(Request $request)
    {
        $criteria = $request->query->all();

        // Effectuez votre recherche avancée en utilisant les critères fournis
        $query = DB::table('my_table');

        if (isset($criteria['search_term'])) {
            $query->where('column1', 'LIKE', '%' . $criteria['search_term'] . '%');
        }

        if (isset($criteria['category'])) {
            $query->where('column2', '=', $criteria['category']);
        }

        // Autres critères de recherche à ajouter ici

        $results = $query->get();

        // Renvoyer les résultats sous forme de réponse JSON
        return response()->json([
            'results' => $results,
        ]);
    }
}
