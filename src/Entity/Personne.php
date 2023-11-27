<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonneRepository::class)]
#[ApiResource()]
class Personne
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
    private ?string $datedenaissance = null;

    #[ORM\Column(length: 255)]
    private ?string $datedupermis = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $codepostal = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\OneToMany(mappedBy: 'personne', targetEntity: Vendeur::class)]
    private Collection $vendeur;

    public function __construct()
    {
        $this->vendeur = new ArrayCollection();
    }

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

    public function getDatedenaissance(): ?string
    {
        return $this->datedenaissance;
    }

    public function setDatedenaissance(string $datedenaissance): static
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    public function getDatedupermis(): ?string
    {
        return $this->datedupermis;
    }

    public function setDatedupermis(string $datedupermis): static
    {
        $this->datedupermis = $datedupermis;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(string $codepostal): static
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

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
            $vendeur->setPersonne($this);
        }

        return $this;
    }

    public function removeVendeur(Vendeur $vendeur): static
    {
        if ($this->vendeur->removeElement($vendeur)) {
            // set the owning side to null (unless already changed)
            if ($vendeur->getPersonne() === $this) {
                $vendeur->setPersonne(null);
            }
        }

        return $this;
    }
}
