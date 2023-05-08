<?php

namespace App\Entity;
use App\Entity\User;

use App\Repository\ReclamationsRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Table(name: '`reclamations`')]
#[ORM\Entity(repositoryClass: ReclamationsRepository::class)]
class Reclamations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'id')]
    private ?int $id=null;


    #[Assert\NotBlank(message: "veuillez saisir l'objet de la reclamation .")]
    #[ORM\Column(length: 255)]
    private ?string $objet =null;

    #[Assert\NotBlank(message: "veuillez remplir la description  .")]
    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    #[ORM\JoinColumn(nullable: false, name: "idc")]
    private ?User $idc ;
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

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

    public function getIdc(): ?User
    {
        return $this->idc;
    }

    public function setIdc(?User $idc): self
    {
        $this->idc = $idc;

        return $this;
    }


}
