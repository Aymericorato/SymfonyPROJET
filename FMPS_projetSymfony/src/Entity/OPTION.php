<?php

namespace App\Entity;

use App\Repository\OPTIONRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OPTIONRepository::class)
 * @ORM\Table(name="`option`")
 */
class OPTION
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
    private $OPT_LIBELLE;

    /**
     * @ORM\ManyToMany(targetEntity=ENTREPRISE::class, mappedBy="id")
     */
    private $ENT_ID;

    public function __construct()
    {
        $this->ENT_ID = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getOPTLIBELLE(): ?string
    {
        return $this->OPT_LIBELLE;
    }

    public function setOPTLIBELLE(string $OPT_LIBELLE): self
    {
        $this->OPT_LIBELLE = $OPT_LIBELLE;

        return $this;
    }

    /**
     * @return Collection<int, ENTREPRISE>
     */
    public function getENTID(): Collection
    {
        return $this->ENT_ID;
    }

    public function addENTID(ENTREPRISE $eNTID): self
    {
        if (!$this->ENT_ID->contains($eNTID)) {
            $this->ENT_ID[] = $eNTID;
            $eNTID->addOPTID($this);
        }

        return $this;
    }

    public function removeENTID(ENTREPRISE $eNTID): self
    {
        if ($this->ENT_ID->removeElement($eNTID)) {
            $eNTID->removeOPTID($this);
        }

        return $this;
    }
}
