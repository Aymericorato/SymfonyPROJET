<?php

namespace App\Entity;

use App\Repository\PROFILRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PROFILRepository::class)
 */
class PROFIL
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=100)
     */
    private $PRO_LIBELLE;

    /**
     * @ORM\ManyToMany(targetEntity=PERSONNEL::class, mappedBy="PER_ID")
     */
    private $PER_ID;

    public function __construct()
    {
        $this->PER_ID = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPROID(): ?int
    {
        return $this->id;
    }

    public function setPROID(int $PRO_ID): self
    {
        $this->id = $PRO_ID;

        return $this;
    }

    public function getPROLIBELLE(): ?string
    {
        return $this->PRO_LIBELLE;
    }

    public function setPROLIBELLE(string $PRO_LIBELLE): self
    {
        $this->PRO_LIBELLE = $PRO_LIBELLE;

        return $this;
    }

    /**
     * @return Collection<int, PERSONNEL>
     */
    public function getPERID(): Collection
    {
        return $this->PER_ID;
    }

    public function addPERID(PERSONNEL $pERID): self
    {
        if (!$this->PER_ID->contains($pERID)) {
            $this->PER_ID[] = $pERID;
            $pERID->addPROID($this);
        }

        return $this;
    }

    public function removePERID(PERSONNEL $pERID): self
    {
        if ($this->PER_ID->removeElement($pERID)) {
            $pERID->removePROID($this);
        }

        return $this;
    }
}
