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

    // Destructor
    public function __destruct() {
        echo "<br> À la prochaine fois, M. " . $this->Nom . " " . $this->CNE;
    }

}

$stagiaire = new Stagiaire(1, "Ahmed",  'P123456789');


