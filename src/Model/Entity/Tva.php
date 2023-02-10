<?php

namespace App\Entity;

class Tva
{
    private $id;

    private $name;

    private $taux;

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
     * Get the value of taux
     */ 
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set the value of taux
     *
     * @return  self
     */ 
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }
}