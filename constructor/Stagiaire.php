<?php

class Stagiaire {

    // Attributs
    public $Nom ;
    public $Prenom ;
    public $Age ;

    public function __construct($Nom, $Prenom, $Age)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Age = $Age;

        echo "Bienvenue M. " . $this->Nom . " " . $this->Prenom;
    }

}

$stagiaire = new Stagiaire("Ahmed", "khalouk", 25);
?>