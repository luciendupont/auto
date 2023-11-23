<?php

namespace App\Entity;

use App\Repository\ConcessionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConcessionRepository::class)]
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

    #[ORM\Column]
    private ?bool $voituredisponible = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prixdelavoiture = null;

    #[ORM\Column(length: 255)]
    private ?string $imagedelavoiture = null;

    #[ORM\OneToMany(mappedBy: 'concession', targetEntity: Vendeur::class)]
    private Collection $vendeur;

    #[ORM\ManyToMany(targetEntity: Marque::class, mappedBy: 'concession')]
    private Collection $marques;

    public function __construct()
    {
        $this->vendeur = new ArrayCollection();
        $this->marques = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Vendeur>
     */
    public function getVendeur(): Collection
    {
        return $this->vendeur;
    }

    public function addVendeur(Vendeur $vendeur): static
    {
        if (!$this->vendeur->contains($vendeur)) {
            $this->vendeur->add($vendeur);
            $vendeur->setConcession($this);
        }

        return $this;
    }

    public function removeVendeur(Vendeur $vendeur): static
    {
        if ($this->vendeur->removeElement($vendeur)) {
            // set the owning side to null (unless already changed)
            if ($vendeur->getConcession() === $this) {
                $vendeur->setConcession(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Marque>
     */
    public function getMarques(): Collection
    {
        return $this->marques;
    }

    public function addMarque(Marque $marque): static
    {
        if (!$this->marques->contains($marque)) {
            $this->marques->add($marque);
            $marque->addConcession($this);
        }

        return $this;
    }

    public function removeMarque(Marque $marque): static
    {
        if ($this->marques->removeElement($marque)) {
            $marque->removeConcession($this);
        }

        return $this;
    }
}
