<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Entity\Colis;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/Json')]

class SerializerController extends AbstractController
{
    #[Route('/allColis', name: 'app_colis_json_all')]
    public function allColis(NormalizerInterface $normalizer): JsonResponse
    {
        $colis = $this->getDoctrine()->getRepository(Colis::class)->findAll();
        
        $jsonContent = $normalizer->normalize($colis, null, ['groups' => 'colis']);
    
        return new JsonResponse($jsonContent);
    }
    #[Route('/allColis/{id}', name: 'app_colis_json')]
    public function ColisID($id, NormalizerInterface $normalizer): JsonResponse
    {
        $colis = $this->getDoctrine()->getRepository(Colis::class)->find($id);
        
        $jsonContent = $normalizer->normalize($colis, null, ['groups' => 'colis']);
    
        return new JsonResponse($jsonContent);
    }
    #[Route('/new', name: 'app_json_new')]
    public function add(Request $request, EntityManagerInterface $entityManager, NormalizerInterface $normalizer): Response
    {
        $coli = new Colis();
        $user = $entityManager->getRepository(User::class)->find(($request->get("id_u")));

        $coli->setIdu($user);
        $coli->setNomExpediteur($request->get("NomExpediteur"));
        $coli->setAdresseExpediteur($request->get("AdresseExpediteur"));
        $coli->setNomDestinataire($request->get("NomDestinataire"));
        $coli->setAdresseDestinataire($request->get("AdresseDestinataire"));
        $coli->setPoids($request->get("poids"));
        $coli->setStatut("en attente");
        $today = new \DateTime();
        $coli->setDateExpedition($today);
        $entityManager->persist($coli);
        $entityManager->flush();
    
        $jsonContent = $normalizer->normalize($coli, null, ['groups' => 'colis']);
        return new Response(json_encode($jsonContent));
    }

#[Route('/{id}/edit', name:'app_json_edit')]
public function updateJson(Request $req,$id,NormalizerInterface $Normalizer)
{   
    $entityManager=$this->getDoctrine()->getManager();
    $coli=$entityManager->getRepository(Colis::class)->find($id);
    $user = $entityManager->getRepository(User::class)->find(72);
  
    $coli->setNomExpediteur($req->get("NomExpediteur"));
    $coli->setAdresseExpediteur($req->get("AdresseExpediteur"));
    $coli->setNomDestinataire($req->get("NomDestinataire"));
    $coli->setAdresseDestinataire($req->get("AdresseDestinataire"));
    $coli->setPoids($req->get("poids"));
    $coli->setStatut("en attente");
    $today = new \DateTime();
    $coli->setDateExpedition($today);
    $entityManager->persist($coli);
    $entityManager->flush();
    $jsonContent = $Normalizer->normalize($coli, 'json', ['groups' => 'colis']);
        return new Response(json_encode($jsonContent));




}



#[Route('/delete/{id}', name: 'app_json_delete')]
public function delete(Request $request, Colis $colis,$id): JsonResponse
{   
    $colis= $this->getDoctrine()->getRepository(Colis::class)->find($id);
    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->remove($colis);
    $entityManager->flush();

    return new JsonResponse([
        'message' => 'Le colis a été supprimé avec succès.'
    ]);
}
#[Route('/allAnnonces', name: 'app_annonces_json_all')]
    public function allAnnonces(NormalizerInterface $normalizer): JsonResponse
    {
        $annonce = $this->getDoctrine()->getRepository(Annonces::class)->findAll();
        
        $jsonContent = $normalizer->normalize($annonce, null, ['groups' => 'annonces']);
    
        return new JsonResponse($jsonContent);
    }
    #[Route('/allAnnonces/{id}', name: 'app_annonces_json')]
    public function AnnonceID($id, NormalizerInterface $normalizer): JsonResponse
    {
        $annonce = $this->getDoctrine()->getRepository(Annonces::class)->find($id);
        
        $jsonContent = $normalizer->normalize($annonce, null, ['groups' => 'annonces']);
    
        return new JsonResponse($jsonContent);
    }
    #[Route('/annonce/new', name: 'app_jsona_new')]
    public function adda(Request $request, EntityManagerInterface $entityManager, NormalizerInterface $normalizer): Response
    {
        $annonce = new Annonces();
        $user = $entityManager->getRepository(User::class)->find(($request->get("id_u")));
        $colis=$entityManager->getRepository(Colis::class)->find(136);
        $annonce->setIdaU($user);
        $annonce->setType($request->get("Type"));
        $annonce->setIdColis($colis);
        $annonce->setVilleDep($request->get("VilleDep"));
        $annonce->setVilleArr($request->get("VilleArr"));
        $annonce->setDateDep($request->get("DateDep"));
        $annonce->setDateArr($request->get("DateArr"));
        $annonce->setPrix($request->get("Prix"));
        $annonce->setDescription($request->get("Description"));
        $entityManager->persist($annonce);
        $entityManager->flush();
    
        $jsonContent = $normalizer->normalize($annonce, null, ['groups' => 'annonces']);
        return new Response(json_encode($jsonContent));
    }

#[Route('/{id}/edita', name:'app_json_edita', methods: ['GET'])]
public function updateJsona(Request $req,$id,NormalizerInterface $Normalizer)
{   
    $entityManager=$this->getDoctrine()->getManager();
    $annonce=$entityManager->getRepository(Annonces::class)->find($id);
    $user = $entityManager->getRepository(User::class)->find(72);
    $colis=$entityManager->getRepository(Colis::class)->find(120);
    $annonce->setIdaU($user);
        $annonce->setType($req->get("Type"));
        $annonce->setIdColis($colis);
        $annonce->setVilleDep($req->get("VilleDep"));
        $annonce->setVilleArr($req->get("VilleArr"));
        $annonce->setDateDep($req->get("DateDep"));
        $annonce->setDateArr($req->get("DateArr"));
        $annonce->setPrix($req->get("Prix"));
        $annonce->setDescription($req->get("Description"));
    $entityManager->persist($annonce);
    $entityManager->flush();
    $jsonContent = $Normalizer->normalize($annonce, 'json', ['groups' => 'annonces']);
        return new Response(json_encode($jsonContent));




}



#[Route('/annonce/delete/{id}', name: 'app_json_deleteA')]
public function deleteA(Request $request, Annonces $annonce,$id): JsonResponse
{   
    $annonce= $this->getDoctrine()->getRepository(Annonces::class)->find($id);
    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->remove($annonce);
    $entityManager->flush();

    return new JsonResponse([
        'message' => 'Lannonce a été supprimé avec succès.'
    ]);
}
}
