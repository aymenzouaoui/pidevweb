<?php

namespace App\Entity;
use App\Form\UserType;
use App\Entity\Colis;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("user")]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'L\'adresse e-mail est obligatoire')]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/',
        message: 'L\'adresse e-mail doit être valide et contenir un nom de domaine valide'
    )]
    #[Groups("user")]
    private ?string $email = null;

    #[ORM\Column]
    #[Groups("user")]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column(nullable: true)]
    #[Groups("user")]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 2,
        minMessage: 'Le nom doit comporter au moins {{ limit }} caractères'
    )]
    #[Groups("user")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le prenom est obligatoire')]
    #[Assert\Length(
        min: 2,
        minMessage: 'Le prenom doit comporter au moins {{ limit }} caractères'
    )]
    #[Groups("user")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Groups("user")]
    #[Assert\NotBlank(message: 'L\'adresse est obligatoire')]
    #[Assert\Length(
        min: 2,
        minMessage: 'L\'adresse doit comporter au moins {{ limit }} caractères'
    )]
    private ?string $adress = null;

    #[ORM\Column(length: 255)]
    #[Groups("user")]
    #[Assert\NotBlank(message: 'Le numéro de CIN est obligatoire')]
    #[Assert\Length(
        min: 8,
        minMessage: 'Le numéro de CIN doit comporter au moins {{ limit }} caractères'
    )]
    private ?string $cin = null;
    #[Groups("user")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
   
    private ?\DateTimeInterface $date_naissance = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups("user")]
    private ?\DateTimeInterface $date_creation_c = null;

    #[ORM\Column]
    #[Groups("user")]
    private ?bool $status = null;

    #[ORM\Column(length: 255)]
    #[Groups("user")]
    private ?string $token = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("user")]

    private ?string $score = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le numéro de téléphone est obligatoire')]
    #[Groups("user")]

    #[Assert\Regex(
        pattern: '/^\+216\d{8}$/',
        message: 'Le numéro de téléphone doit commencer par +216 et être suivi de 8 chiffres'
    )]
    private ?string $numtel = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("user")]

    private ?string $image = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups("user")]
    private ?\DateTimeInterface $compte_ex = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups("user")]
    private ?\DateTimeInterface $token_ex = null;

    #[ORM\OneToMany(mappedBy: 'receiverId', targetEntity: Message::class, orphanRemoval: true)]
    private Collection $receiverId;

    #[ORM\OneToMany(mappedBy: 'senderId', targetEntity: Message::class, orphanRemoval: true)]
    private Collection $senderId;

    #[ORM\OneToMany(mappedBy: 'idu', targetEntity: Validation::class, orphanRemoval: true)]
    private Collection $validations;

    public function __construct()

    {   $this->reservations = new ArrayCollection();
        $this->receiverId = new ArrayCollection();
        $this->senderId = new ArrayCollection();
        $this->validations = new ArrayCollection();
        $this->appointments = new ArrayCollection();
        $this->competitions = new ArrayCollection();
        $this->gifts = new ArrayCollection();
        $this->colis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getDateCreationC(): ?\DateTimeInterface
    {
        return $this->date_creation_c;
    }

    public function setDateCreationC(?\DateTimeInterface $date_creation_c): self
    {
        $this->date_creation_c = $date_creation_c;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCompteEx(): ?\DateTimeInterface
    {
        return $this->compte_ex;
    }

    public function setCompteEx(?\DateTimeInterface $compte_ex): self
    {
        $this->compte_ex = $compte_ex;

        return $this;
    }

    public function getTokenEx(): ?\DateTimeInterface
    {
        return $this->token_ex;
    }

    public function setTokenEx(?\DateTimeInterface $token_ex): self
    {
        $this->token_ex = $token_ex;

        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getReceiverId(): Collection
    {
        return $this->receiverId;
    }

    public function addReceiverId(Message $receiverId): self
    {
        if (!$this->receiverId->contains($receiverId)) {
            $this->receiverId->add($receiverId);
            $receiverId->setReceiverId($this);
        }

        return $this;
    }

    public function removeReceiverId(Message $receiverId): self
    {
        if ($this->receiverId->removeElement($receiverId)) {
            // set the owning side to null (unless already changed)
            if ($receiverId->getReceiverId() === $this) {
                $receiverId->setReceiverId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getSenderId(): Collection
    {
        return $this->senderId;
    }

    public function addSenderId(Message $senderId): self
    {
        if (!$this->senderId->contains($senderId)) {
            $this->senderId->add($senderId);
            $senderId->setSenderId($this);
        }

        return $this;
    }

    public function removeSenderId(Message $senderId): self
    {
        if ($this->senderId->removeElement($senderId)) {
            // set the owning side to null (unless already changed)
            if ($senderId->getSenderId() === $this) {
                $senderId->setSenderId(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getNom();
    }

    /**
     * @return Collection<int, Validation>
     */
    public function getValidations(): Collection
    {
        return $this->validations;
    }

    public function addValidation(Validation $validation): self
    {
        if (!$this->validations->contains($validation)) {
            $this->validations->add($validation);
            $validation->setIdu($this);
        }

        return $this;
    }

    public function removeValidation(Validation $validation): self
    {
        if ($this->validations->removeElement($validation)) {
            // set the owning side to null (unless already changed)
            if ($validation->getIdu() === $this) {
                $validation->setIdu(null);
            }
        }

        return $this;
    }
    /**
     * @return Collection<int, Colis>
     */
    public function getColis(): Collection
    {
        return $this->colis;
    }

    public function addColi(Colis $coli): self
    {
        if (!$this->colis->contains($coli)) {
            $this->colis->add($coli);
            $coli->setIdU($this);
        }

        return $this;
    }

    public function removeColi(Colis $coli): self
    {
        if ($this->colis->removeElement($coli)) {
            // set the owning side to null (unless already changed)
            if ($coli->getIdU() === $this) {
                $coli->setIdU(null);
            }
        }

        return $this;
    }
    #[ORM\OneToMany(mappedBy: 'id_u', targetEntity: Colis::class)]
    private Collection $colis;







    //rayen
    
    #[ORM\OneToMany(mappedBy: 'idTrans', targetEntity: Reservation::class)]
    private Collection $reservations;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Appointment::class)]
    private Collection $appointments;

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setIdTrans($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getIdTrans() === $this) {
                $reservation->setIdTrans(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Appointment>
     */
    public function getAppointments(): Collection
    {
        return $this->appointments;
    }

    public function addAppointment(Appointment $appointment): self
    {
        if (!$this->appointments->contains($appointment)) {
            $this->appointments->add($appointment);
            $appointment->setUser($this);
        }

        return $this;
    }

    public function removeAppointment(Appointment $appointment): self
    {
        if ($this->appointments->removeElement($appointment)) {
            // set the owning side to null (unless already changed)
            if ($appointment->getUser() === $this) {
                $appointment->setUser(null);
            }
        }

        return $this;
    }

    /////////ahlem

    /**
     * @return Collection<int, Competition>
     */
    public function getCompetitions(): Collection
    {
        return $this->competitions;
    }

    public function addCompetition(Competition $competition): self
    {
        if (!$this->competitions->contains($competition)) {
            $this->competitions->add($competition);
            $competition->addUserPart($this);
        }

        return $this;
    }

    public function removeCompetition(Competition $competition): self
    {
        if ($this->competitions->removeElement($competition)) {
            $competition->removeUserPart($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Gifts>
     */
    public function getGifts(): Collection
    {
        return $this->gifts;
    }

    public function addGift(Gifts $gift): self
    {
        if (!$this->gifts->contains($gift)) {
            $this->gifts->add($gift);
            $gift->setUser($this);
        }

        return $this;
    }

    public function removeGift(Gifts $gift): self
    {
        if ($this->gifts->removeElement($gift)) {
            // set the owning side to null (unless already changed)
            if ($gift->getUser() === $this) {
                $gift->setUser(null);
            }
        }

        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Competition::class, mappedBy: 'userPart')]
    private Collection $competitions;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Gifts::class)]
    private Collection $gifts;

    #[ORM\OneToOne(mappedBy: 'id_u', cascade: ['persist', 'remove'])]
    private ?ColisRec $colisRec = null;

    public function getColisRec(): ?ColisRec
    {
        return $this->colisRec;
    }

    public function setColisRec(?ColisRec $colisRec): self
    {
        // unset the owning side of the relation if necessary
        if ($colisRec === null && $this->colisRec !== null) {
            $this->colisRec->setIdU(null);
        }

        // set the owning side of the relation if necessary
        if ($colisRec !== null && $colisRec->getIdU() !== $this) {
            $colisRec->setIdU($this);
        }

        $this->colisRec = $colisRec;

        return $this;
    }


   
   
}
