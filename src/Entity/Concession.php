<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ConcessionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConcessionRepository::class)]
#[ApiResource()]
class Concession
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomdelavoiture = null;

    #[ORM\Column(length: 255)]
    private ?string $marquedelavoiture = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column (length: 255)]
    private ?bool $voituredisponible = null;

    #[ORM\Column(length: 255)]
    private ?string $prixdelavoiture = null;

    #[ORM\Column(length: 255)]
    private ?string $imagedelavoiture = null;

     
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomdelavoiture(): ?string
    {
        return $this->nomdelavoiture;
    }

    public function setNomdelavoiture(string $nomdelavoiture): static
    {
        $this->nomdelavoiture = $nomdelavoiture;

        return $this;
    }

    public function getMarquedelavoiture(): ?string
    {
        return $this->marquedelavoiture;
    }

    public function setMarquedelavoiture(string $marquedelavoiture): static
    {
        $this->marquedelavoiture = $marquedelavoiture;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function isVoituredisponible(): ?bool
    {
        return $this->voituredisponible;
    }

    public function setVoituredisponible(bool $voituredisponible): static
    {
        $this->voituredisponible = $voituredisponible;

        return $this;
    }

    public function getPrixdelavoiture(): ?string
    {
        return $this->prixdelavoiture;
    }

    public function setPrixdelavoiture(string $prixdelavoiture): static
    {
        $this->prixdelavoiture = $prixdelavoiture;

        return $this;
    }

    public function getImagedelavoiture(): ?string
    {
        return $this->imagedelavoiture;
    }

    public function setImagedelavoiture(string $imagedelavoiture): static
    {
        $this->imagedelavoiture = $imagedelavoiture;

        return $this;
    }


  
}
