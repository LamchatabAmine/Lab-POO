<?php

class Stagiaire
{

    // Attributs
    public $Id;
    public $Nom;
    public $CNE;


    public function __construct($Id, $Nom,  $CNE)
    {
        $this->Id = $Id;
        $this->Nom = $Nom;
        $this->CNE = $CNE;

        echo "Bienvenue M. " . $this->Nom . " <br> Id : " . $this->Id . " <br> CNE :" . $this->CNE;
    }
}

$stagiaire = new Stagiaire(1, "Ahmed",  'P123456789');
