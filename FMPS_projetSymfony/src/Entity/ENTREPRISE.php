<?php

namespace App\Entity;

use App\Repository\ENTREPRISERepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ENTREPRISERepository::class)
 */
class ENTREPRISE
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $ENT_RAISONSOCIALE;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ENT_ADRESSE1;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ENT_ADRESSE2;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ENT_ADRESSE3;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ENT_VILLE;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $ENT_CODEPOSTAL;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ENT_PAYS;

    /**
     * @ORM\ManyToMany(targetEntity=OPTION::class, inversedBy="ENT_ID")
     */
    private $OPT_ID;

    public function __construct()
    {
        $this->OPT_ID = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getENTID(): ?int
    {
        return $this->ENT_ID;
    }

    public function setENTID(int $ENT_ID): self
    {
        $this->ENT_ID = $ENT_ID;

        return $this;
    }

    public function getENTRAISONSOCIALE(): ?string
    {
        return $this->ENT_RAISONSOCIALE;
    }

    public function setENTRAISONSOCIALE(string $ENT_RAISONSOCIALE): self
    {
        $this->ENT_RAISONSOCIALE = $ENT_RAISONSOCIALE;

        return $this;
    }

    public function getENTADRESSE1(): ?string
    {
        return $this->ENT_ADRESSE1;
    }

    public function setENTADRESSE1(?string $ENT_ADRESSE1): self
    {
        $this->ENT_ADRESSE1 = $ENT_ADRESSE1;

        return $this;
    }

    public function getENTADRESSE2(): ?string
    {
        return $this->ENT_ADRESSE2;
    }

    public function setENTADRESSE2(?string $ENT_ADRESSE2): self
    {
        $this->ENT_ADRESSE2 = $ENT_ADRESSE2;

        return $this;
    }

    public function getENTADRESSE3(): ?string
    {
        return $this->ENT_ADRESSE3;
    }

    public function setENTADRESSE3(?string $ENT_ADRESSE3): self
    {
        $this->ENT_ADRESSE3 = $ENT_ADRESSE3;

        return $this;
    }

    public function getENTVILLE(): ?string
    {
        return $this->ENT_VILLE;
    }

    public function setENTVILLE(string $ENT_VILLE): self
    {
        $this->ENT_VILLE = $ENT_VILLE;

        return $this;
    }

    public function getENTCODEPOSTAL(): ?string
    {
        return $this->ENT_CODEPOSTAL;
    }

    public function setENTCODEPOSTAL(string $ENT_CODEPOSTAL): self
    {
        $this->ENT_CODEPOSTAL = $ENT_CODEPOSTAL;

        return $this;
    }

    public function getENTPAYS(): ?string
    {
        return $this->ENT_PAYS;
    }

    public function setENTPAYS(string $ENT_PAYS): self
    {
        $this->ENT_PAYS = $ENT_PAYS;

        return $this;
    }

    /**
     * @return Collection<int, OPTION>
     */
    public function getOPTID(): Collection
    {
        return $this->OPT_ID;
    }

    public function addOPTID(OPTION $oPTID): self
    {
        if (!$this->OPT_ID->contains($oPTID)) {
            $this->OPT_ID[] = $oPTID;
        }

        return $this;
    }

    public function removeOPTID(OPTION $oPTID): self
    {
        $this->OPT_ID->removeElement($oPTID);

        return $this;
    }
}
