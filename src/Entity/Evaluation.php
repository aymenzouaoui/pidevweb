<?php

namespace App\Entity;
use App\Entity\User;


use Doctrine\ORM\Mapping as ORM;


#[ORM\Table(name: '`evaluation`')]
#[ORM\Entity(repositoryClass :EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'id')]
    private ?int $id = null;
    
    

    #[ORM\ManyToOne(inversedBy: 'evaluation')]
    #[ORM\JoinColumn(nullable: false, name: "idTransporteur")]
    private ?User $idTransporteur ;



    #[ORM\Column]
    private ?int $note = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->Note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

   
    public function getIdTransporteur(): ?User
    {
        return $this->idTransporteur;
    }

    public function setIdTransporteur(?User $idTransporteur): self
    {
        $this->idTransporteur = $idTransporteur;

        return $this;
    }

    public function __toString()
    {
        return $this->getNote();
    }

   
}
