<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Der Vorname kann nicht leer sein !")
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @Assert\NotBlank(message="Der Nachname kann nicht leer sein !")
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $adress;

    /**
     * 1 objet de type Person a 1 objet de type Image
     * @ORM\Column(nullable=true) 
     * @ORM\OneToOne(targetEntity="Image", cascade={"persist", "remove"})
     */
    private $image;

    /**
     * 1 objet de type Person a plusieurs objet de type Vacation (vacance)
     * @ORM\OneToMany(targetEntity="Vacation", mappedBy="person", cascade={"persist", "remove"})
     */
    private $vacations;

    public function __construct()
    {
        $this->vacations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getVacations()
    {
        return $this->vacations;
    }

    
    public function addVacations(Vacation $vacation)
    {
        $this->vacations->add($vacation);
        $vacation->setPerson($this);
    }

    
    public function removeVacation(Vacation $vacation)
    {
        $this->vacations->removeElement($vacation);
    }
}
