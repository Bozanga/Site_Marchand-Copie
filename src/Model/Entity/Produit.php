<?php

namespace App\Model\Entity;

class Produit
{
    private $id;

    private $marque_id;

    private $tva_id;

    private $name;

    private $description;

    private $image;

    private $prix_unit;

    private $ram;

    private $ref;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of marque_id
     */ 
    public function getMarque_id()
    {
        return $this->marque_id;
    }

    /**
     * Set the value of marque_id
     *
     * @return  self
     */ 
    public function setMarque_id($marque_id)
    {
        $this->marque_id = $marque_id;

        return $this;
    }

    /**
     * Get the value of tva_id
     */ 
    public function getTva_id()
    {
        return $this->tva_id;
    }

    /**
     * Set the value of tva_id
     *
     * @return  self
     */ 
    public function setTva_id($tva_id)
    {
        $this->tva_id = $tva_id;

        return $this;
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
     * Get the value of prix_unit
     */ 
    public function getPrix_unit()
    {
        return $this->prix_unit;
    }

    /**
     * Set the value of prix_unit
     *
     * @return  self
     */ 
    public function setPrix_unit($prix_unit)
    {
        $this->prix_unit = $prix_unit;

        return $this;
    }

    /**
     * Get the value of ram
     */ 
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set the value of ram
     *
     * @return  self
     */ 
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get the value of ref
     */ 
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set the value of ref
     *
     * @return  self
     */ 
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }
}