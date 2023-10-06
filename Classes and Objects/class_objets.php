<?php

class Stagaire
{
    // Attributs
    public $Id;

    // Méthode
    function setId($Id)
    {
        $this->Id = $Id;
    }
    function getId()
    {
        return $this->Id;
    }
    
}

// Creating an object of the Stagaire class
$Stagaire = new Stagaire;
$Stagaire->setId(1);

// Calling the method
echo $Stagaire->getId();
