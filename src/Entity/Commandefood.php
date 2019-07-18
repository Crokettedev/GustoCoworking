<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandefoodRepository")
 */
class Commandefood
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nourriture", inversedBy="commandefoods")
     */
    private $id_food;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="commandefoods")
     */
    private $id_users;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Assert\Length(
     *
     *     max="20",
     *     maxMessage="Le numéro de carte est trop long. Veuillez en renseigné un valide."
     * )
     *
     */
    private $numcarte;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *
     *     max="5",
     *     maxMessage="La date d'expira est trop long. Veuillez en renseigné un valide."
     * )
     */
    private $dateexp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codesecu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFood(): ?Nourriture
    {
        return $this->id_food;
    }

    public function setIdFood(?Nourriture $id_food): self
    {
        $this->id_food = $id_food;

        return $this;
    }

    public function getIdUsers(): ?User
    {
        return $this->id_users;
    }

    public function setIdUsers(?User $id_users): self
    {
        $this->id_users = $id_users;

        return $this;
    }

    public function getNumcarte(): ?string
    {
        return $this->numcarte;
    }

    public function setNumcarte(string $numcarte): self
    {
        $this->numcarte = $numcarte;

        return $this;
    }

    public function getDateexp(): ?string
    {
        return $this->dateexp;
    }

    public function setDateexp(string $dateexp): self
    {
        $this->dateexp = $dateexp;

        return $this;
    }

    public function getCodesecu(): ?string
    {
        return $this->codesecu;
    }

    public function setCodesecu(string $codesecu): self
    {
        $this->codesecu = $codesecu;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string) $this->id_food;
        return (string) $this->id_users;
    }
}
