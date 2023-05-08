<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colisr
 *
 * @ORM\Table(name="colisr", indexes={@ORM\Index(name="fk_c1", columns={"id_c"}), @ORM\Index(name="fk_user", columns={"id_u"})})
 * @ORM\Entity
 */
class Colisr
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    


    public function getId(): ?int
    {
        return $this->id;
    }



}
