<?php

namespace App\Controller;

/*use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatsController extends AbstractController
{
    #[Route('/stats', name: 'app_stats')]
    public function index(): Response
    {
        return $this->render('stats/index.html.twig', [
            'controller_name' => 'StatsController',
        ]);
    }
}*/
// dans le contrôleur de votre choix
use App\Entity\Competition;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CompetitionRepository;

class StatsController extends AbstractController
{
    #[Route('/stats', name: 'app_stats')]
    public function index(CompetitionRepository $repository, NormalizerInterface $normalizer): Response
    {
        $repository = $this->getDoctrine()->getRepository(Competition::class);
        
        // récupère les compétitions et le nombre de participants pour chaque compétition
        $competitions = $repository->findAll();

        $labels = array();
        $data = array();

        foreach ($competitions as $competition) {
            $labels[] = $competition->getTitle();
            $data[] = ($competition->getNbp());
        }

        $average = array_sum($data) / count($data);

        $chartData = array(
            'labels' => $labels,
            'data' => $data,
        );

        $normalizedChartData = $normalizer->normalize($chartData);

        return $this->render('stats/index.html.twig', [
            'average' => $average,
            'chartData' => json_encode($normalizedChartData),
        ]);
    }
}

