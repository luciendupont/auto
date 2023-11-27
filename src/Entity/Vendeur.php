<?php

namespace App\Entity;

use App\Repository\VendeurRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: VendeurRepository::class)]
#[ApiResource()]
class Vendeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $dateachatvoiture = null;

    #[ORM\Column(length: 255)]
    private ?string $prixdelavente = null;

    #[ORM\Column(length: 255)]
    private ?string $remiseachat = null;

    #[ORM\ManyToOne(inversedBy: 'vendeur')]
    private ?Personne $personne = null;

    #[ORM\ManyToOne(inversedBy: 'vendeur')]
    private ?Concession $concession = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateachatvoiture(): ?string
    {
        return $this->dateachatvoiture;
    }

    public function setDateachatvoiture(string $dateachatvoiture): static
    {
        $this->dateachatvoiture = $dateachatvoiture;

        return $this;
    }

    public function getPrixdelavente(): ?string
    {
        return $this->prixdelavente;
    }

    public function setPrixdelavente(string $prixdelavente): static
    {
        $this->prixdelavente = $prixdelavente;

        return $this;
    }

    public function getRemiseachat(): ?string
    {
        return $this->remiseachat;
    }

    public function setRemiseachat(string $remiseachat): static
    {
        $this->remiseachat = $remiseachat;

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): static
    {
        $this->personne = $personne;

        return $this;
    }

    public function getConcession(): ?Concession
    {
        return $this->concession;
    }

    public function setConcession(?Concession $concession): static
    {
        $this->concession = $concession;

        return $this;
    }
}
