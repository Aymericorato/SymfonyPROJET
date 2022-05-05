<?php

namespace App\Entity;

use App\Repository\UTILISATEURRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UTILISATEURRepository::class)
 */
class UTILISATEUR
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

  
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $UTIL_LOGIN;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $UTIL_MDP;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $UTIL_ROLE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUTILID(): ?int
    {
        return $this->UTIL_ID;
    }

    public function setUTILID(int $UTIL_ID): self
    {
        $this->UTIL_ID = $UTIL_ID;

        return $this;
    }

    public function getUTILLOGIN(): ?string
    {
        return $this->UTIL_LOGIN;
    }

    public function setUTILLOGIN(string $UTIL_LOGIN): self
    {
        $this->UTIL_LOGIN = $UTIL_LOGIN;

        return $this;
    }

    public function getUTILMDP(): ?string
    {
        return $this->UTIL_MDP;
    }

    public function setUTILMDP(string $UTIL_MDP): self
    {
        $this->UTIL_MDP = $UTIL_MDP;

        return $this;
    }

    public function getUTILROLE(): ?string
    {
        return $this->UTIL_ROLE;
    }

    public function setUTILROLE(string $UTIL_ROLE): self
    {
        $this->UTIL_ROLE = $UTIL_ROLE;

        return $this;
    }
}
