<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\QuizQuestionRepository ; 

#[ORM\Table(name: 'QuizQuestion')]
#[ORM\Entity(repositoryClass :QuizQuestionRepository::class)]
class QuizQuestion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string")]
    private ?string $question = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $answer1 = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $answer2 = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $answer3 = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $correctAnswer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer1(): ?string
    {
        return $this->answer1;
    }

    public function setAnswer1(?string $answer1): self
    {
        $this->answer1 = $answer1;

        return $this;
    }

    public function getAnswer2(): ?string
    {
        return $this->answer2;
    }

    public function setAnswer2(?string $answer2): self
    {
        $this->answer2 = $answer2;

        return $this;
    }

    public function getAnswer3(): ?string
    {
        return $this->answer3;
    }

    public function setAnswer3(?string $answer3): self
    {
        $this->answer3 = $answer3;

        return $this;
    }

    public function getCorrectAnswer(): ?string
    {
        return $this->correctAnswer;
    }

    public function setCorrectAnswer(?string $correctAnswer): self
    {
        $this->correctAnswer = $correctAnswer;

        return $this;
    }
}