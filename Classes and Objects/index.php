<?php

class Personne
{
    // Attributs
    public $Nom = "Ahmed";
    public $Prenom = "Khalouk";
    public $Age = 23;

    // Méthode
    public function showInfoPersonne()
    {
        return "Nom: " . $this->Nom . "<br>Prenom: " . $this->Prenom . '<br>Age: ' . $this->Age;
    }
}

// Creating an object of the Personne class
$personne = new Personne;

// Calling the showInfoPersonne method
echo $personne->showInfoPersonne();
