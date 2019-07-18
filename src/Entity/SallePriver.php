<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SallePriverRepository")
 */
class SallePriver
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\Column(type="integer")
     */
    private $places;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_matin;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_aprem;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_journe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): self
    {
        $this->places = $places;

        return $this;
    }

    public function getPrixMatin(): ?int
    {
        return $this->prix_matin;
    }

    public function setPrixMatin(int $prix_matin): self
    {
        $this->prix_matin = $prix_matin;

        return $this;
    }

    public function getPrixAprem(): ?int
    {
        return $this->prix_aprem;
    }

    public function setPrixAprem(int $prix_aprem): self
    {
        $this->prix_aprem = $prix_aprem;

        return $this;
    }

    public function getPrixJourne(): ?int
    {
        return $this->prix_journe;
    }

    public function setPrixJourne(int $prix_journe): self
    {
        $this->prix_journe = $prix_journe;

        return $this;
    }
}
