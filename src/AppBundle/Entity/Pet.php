<?php

// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Pet
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Name
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * Name
     * @ORM\Column(type="string", length=100)
     */
    private $species;

    /**
     * Gender (M or F)
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $gender;

    /**
     * Date of birth
     * @ORM\Column(type="date", nullable=true)
     */
    private $birth_date;

    /**
     * Neutered or spayed
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $neutered;
    
    /**
     * Breed
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $breed;

    /**
     * Weight (kg)
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $weight;

    /**
     * Colour
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $colour;

    /**
     * URL of image
     * @ORM\Column(type="text", nullable=true)
     */
    private $image;

    /**
     * Further description of the pet
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get species
     */ 
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set species
     *
     * @return  self
     */ 
    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of birth_date
     */ 
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * Set the value of birth_date
     *
     * @return  self
     */ 
    public function setBirthDate($birth_date)
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    /**
     * Get the value of neutered
     */ 
    public function getNeutered()
    {
        return $this->neutered;
    }

    /**
     * Set the value of neutered
     *
     * @return  self
     */ 
    public function setNeutered($neutered)
    {
        $this->neutered = $neutered;

        return $this;
    }

    /**
     * Get the value of breed
     */ 
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * Set the value of breed
     *
     * @return  self
     */ 
    public function setBreed($breed)
    {
        $this->breed = $breed;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of colour
     */ 
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Set the value of colour
     *
     * @return  self
     */ 
    public function setColour($colour)
    {
        $this->colour = $colour;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}