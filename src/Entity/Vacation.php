<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VacationRepository")
 */
class Vacation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $finishAt;

    /**
     * 
     * Plusieurs vacances appertiennent à 1 person
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="vacations")
     */
    private $person;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartAt(): ?\DateTimeInterface
    {
        return $this->startAt;
    }

    public function setStartAt(?\DateTimeInterface $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function getFinishAt(): ?\DateTimeInterface
    {
        return $this->finishAt;
    }

    public function setFinishAt(?\DateTimeInterface $finishAt): self
    {
        $this->finishAt = $finishAt;

        return $this;
    }

    public function getPerson()
    {
        return $this->person;
    }

    
    public function setPerson($person): void
    {
        $this->person = $person;

    }
}
