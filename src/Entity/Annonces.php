<?php

namespace App\Entity;
namespace App\Entity;
use App\Entity\Colis;
use App\Entity\User;

use App\Repository\AnnoncesRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Table(name: '`annonces`')]
#[ORM\Entity(repositoryClass: AnnoncesRepository::class)]
class Annonces
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'id_annonce')]
    private ?int $id = null;
    
    //#[Assert\NotBlank(message: "veuillez selectionner le type .")]
    #[ORM\Column(length: 255)]
    private ?string $type = null;

    
    #[Assert\NotEqual(propertyPath: "ville_arr" ,message:"La ville d'arrivée doit être différente de la ville de départ.")]
    #[Assert\NotBlank(message: "veuillez selectionner la ville de depart .")]
    #[ORM\Column(length: 255)]
    private ?string $ville_dep = null;

    #[Assert\NotBlank(message: "veuillez selectionner la ville d'arrivée .")]
    #[ORM\Column(length: 255)]
    private ?string $ville_arr = null;
   
    #[Assert\NotBlank(message: "La date doit être renseignée.")]
    #[Assert\Regex('/^\d{4}-\d{2}-\d{2}$/',message: "La date de départ doit être au format YYYY-MM-DD.")]
    #[ORM\Column(length: 255)]
    private ?string $date_dep = null;

    #[Assert\NotBlank(message: "La date doit être renseignée.")]
    #[Assert\Regex('/^\d{4}-\d{2}-\d{2}$/',message: "La date de départ doit être au format YYYY-MM-DD.")]
    #[Assert\GreaterThan(propertyPath: "date_dep", message: "La date d'arrivée doit être après la date de départ.")]
    #[ORM\Column(length: 255)]
    private ?string $date_arr = null;
    
    #[Assert\NotBlank(message: "La description doit être renseignée.")]
    #[ORM\Column]
    private ?int $prix = null;

    #[Assert\NotBlank(message: "La description doit être renseignée.")]
    #[Assert\Length(min: 11, minMessage: "La description doit contenir au moins 11 caractères.")]
    #[ORM\Column(length: 255)]
    private ?string $description = null;

 


    #[ORM\ManyToOne(inversedBy: 'annonces')]
    #[ORM\JoinColumn(nullable: false, name: "ida_U")]
    private ?User $ida_U ;


    

   
    #[ORM\ManyToOne(inversedBy: 'annonces')]
    #[ORM\JoinColumn(nullable: false, name: "id_colis_id")]

    private ?Colis $idColis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getVilleDep(): ?string
    {
        return $this->ville_dep;
    }

    public function setVilleDep(string $ville_dep): self
    {
        $this->ville_dep = $ville_dep;

        return $this;
    }
    
    public function getVilleArr(): ?string
    {
        return $this->ville_arr;
    }

    public function setVilleArr(string $ville_arr): self
    {
        $this->ville_arr = $ville_arr;

        return $this;
    }

    public function getDateDep(): ?string
    {
        return $this->date_dep;
    }

    public function setDateDep(string $date_dep): self
    {
        $this->date_dep = $date_dep;

        return $this;
    }

    public function getDateArr(): ?string
    {
        return $this->date_arr;
    }

    public function setDateArr(string $date_arr): self
    {
        $this->date_arr = $date_arr;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdaU(): ?User
    {
        return $this->ida_U;
    }

    public function setIdaU(?User $ida_U): self
    {
        $this->ida_U = $ida_U;

        return $this;
    }

    public function getIdColis(): ?Colis
    {
        return $this->idColis;
    }

    public function setIdColis(?Colis $idColis): self
    {
        $this->idColis = $idColis;

        return $this;
    }
}
