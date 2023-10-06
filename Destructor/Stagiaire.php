<?php

class Stagiaire {

    // Attributs
    public $Nom ;
    public $Prenom ;
    public $Age ;

    // Destructor
    public function __destruct()
    {
        echo " <br> À la prochaine fois, M. " . $this->Nom . " " . $this->Prenom;
    }
}

$stagiaire = new Stagiaire("Ahmed", "khalouk", 25);
?>