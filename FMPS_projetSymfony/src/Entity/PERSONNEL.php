<?php

namespace App\Entity;

use App\Repository\PERSONNELRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PERSONNELRepository::class)
 */
class PERSONNEL
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
<<<<<<< Updated upstream

    /**
     * @ORM\Column(type="integer")
     */
    private $PER_ID;
=======
>>>>>>> Stashed changes

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $PER_NOM;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $PER_PRENOM;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $PER_GENRE;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $PER_MAIL;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $PER_TELEPHONE;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $PER_METIER;

    /**
     * @ORM\ManyToOne(targetEntity=ENTREPRISE::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $ENT_ID;

    /**
     * @ORM\ManyToMany(targetEntity=PROFIL::class, inversedBy="id")
     */
    private $PRO_ID;

    public function __construct()
    {
        $this->PRO_ID = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPERNOM(): ?string
    {
        return $this->PER_NOM;
    }

    public function setPERNOM(string $PER_NOM): self
    {
        $this->PER_NOM = $PER_NOM;

        return $this;
    }

    public function getPERPRENOM(): ?string
    {
        return $this->PER_PRENOM;
    }

    public function setPERPRENOM(string $PER_PRENOM): self
    {
        $this->PER_PRENOM = $PER_PRENOM;

        return $this;
    }

    public function getPERGENRE(): ?string
    {
        return $this->PER_GENRE;
    }

    public function setPERGENRE(string $PER_GENRE): self
    {
        $this->PER_GENRE = $PER_GENRE;

        return $this;
    }

    public function getPERMAIL(): ?string
    {
        return $this->PER_MAIL;
    }

    public function setPERMAIL(string $PER_MAIL): self
    {
        $this->PER_MAIL = $PER_MAIL;

        return $this;
    }

    public function getPERTELEPHONE(): ?string
    {
        return $this->PER_TELEPHONE;
    }

    public function setPERTELEPHONE(string $PER_TELEPHONE): self
    {
        $this->PER_TELEPHONE = $PER_TELEPHONE;

        return $this;
    }

    public function getPERMETIER(): ?string
    {
        return $this->PER_METIER;
    }

    public function setPERMETIER(string $PER_METIER): self
    {
        $this->PER_METIER = $PER_METIER;

        return $this;
    }

    public function getENTID(): ?ENTREPRISE
    {
        return $this->ENT_ID;
    }

    public function setENTID(?ENTREPRISE $ENT_ID): self
    {
        $this->ENT_ID = $ENT_ID;

        return $this;
    }

    /**
     * @return Collection<int, PROFIL>
     */
    public function getPROID(): Collection
    {
        return $this->PRO_ID;
    }

    public function addPROID(PROFIL $pROID): self
    {
        if (!$this->PRO_ID->contains($pROID)) {
            $this->PRO_ID[] = $pROID;
        }

        return $this;
    }

    public function removePROID(PROFIL $pROID): self
    {
        $this->PRO_ID->removeElement($pROID);

        return $this;
    }
}
