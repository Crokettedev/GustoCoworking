<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nourriture", inversedBy="paniers")
     */
    private $idfood;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="paniers")
     */
    private $idusers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdfood(): ?Nourriture
    {
        return $this->idfood;
    }

    public function setIdfood(?Nourriture $idfood): self
    {
        $this->idfood = $idfood;

        return $this;
    }

    public function getIdusers(): ?User
    {
        return $this->idusers;
    }

    public function setIdusers(?User $idusers): self
    {
        $this->idusers = $idusers;

        return $this;
    }
}
