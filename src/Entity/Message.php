<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'receiverId')]
    #[ORM\JoinColumn(nullable: false,name:"receiverId")]
    private ?User $receiverId = null;

    #[ORM\ManyToOne(inversedBy: 'senderId')]
    #[ORM\JoinColumn(nullable: false,name:"senderId")]
    private ?User $senderId = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column(name:"timestamp",type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $timestamp = null;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReceiverId(): ?User
    {
        return $this->receiverId;
    }

    public function setReceiverId(?User $receiverId): self
    {
        $this->receiverId = $receiverId;

        return $this;
    }

    public function getSenderId(): ?User
    {
        return $this->senderId;
    }

    public function setSenderId(?User $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
