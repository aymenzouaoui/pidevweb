<?php

namespace App\Entity;
use App\Entity\User ;
use App\Entity\Vehicule ;
use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTime;

#[ORM\Table(name : '`reservation`')]
#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name : 'idRes')]
    private ?int $id = null;


    #[Assert\NotBlank(message:"La date debut ne doit pas etre vide")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_deb = null;

    #[Assert\NotBlank(message:"La date fin ne doit pas etre vide")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column]
    //#[Assert\NotBlank(message:"Le somme ne doit pas être vide")]
    private ?float $somme = null;

    #[ORM\Column(length: 30)]
    private ?string $etat = "En attente";

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false,name:"idV")]
    private ?Vehicule $idVeh = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $idTrans = null;

    public function __construct()
    {
        $this->date_deb = new DateTime();
        $this->date_fin = new DateTime();
    }
    

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->date_deb;
    }

    public function setDateDeb(\DateTimeInterface $date_deb): self
    {
        $this->date_deb = $date_deb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getSomme(): ?float
    {
        return $this->somme;
    }

    public function setSomme(float $somme): self
    {
        $this->somme = $somme;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

   
    public function __toString(): string
    {
        return $this->etat;
    }

   

    

    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function getIdVeh(): ?Vehicule
    {
        return $this->idVeh;
    }

    public function setIdVeh(?Vehicule $idVeh): self
    {
        $this->idVeh = $idVeh;

        return $this;
    }

    public function getIdTrans(): ?User
    {
        return $this->idTrans;
    }

    public function setIdTrans(?User $idTrans): self
    {
        $this->idTrans = $idTrans;

        return $this;
    }
    
}