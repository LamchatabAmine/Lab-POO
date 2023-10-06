<?php


class Person {
    protected $Id;
    protected $name;
    // public static $welcomeMessage = "Bienvenue Tout le monde";

    public function __construct($Id, $name) {
        $this->Id = $Id;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public static function Bienvenue()
    {
        return "Bienvenue Tout le monde"; 
    }

}

class Stagiair extends Person {
    private $CNE;

    public function __construct($Id, $name, $CNE) {
        parent::__construct($Id, $name);
        $this->CNE = $CNE;
    }

    public function getCNE() {
        return $this->CNE;
    }
}

// class City {
//     private $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function getName() {
//         return $this->name;
//     }
// }

// Usage
$person = new Person(1, 'AMINE LAMCHATAB');
echo 'Person: ' . $person->getName() . '<br>';

$Stagiair = new Stagiair(1, 'LEO MESSI', 'P123456789');
echo 'Stagiair: ' . $Stagiair->getName() . ' <br> CNE: ' . $Stagiair->getCNE() . '<br>';

// $city = new City('TANGER');
// echo 'City: ' . $city->getName() . '<br>';

echo  Person::Bienvenue();
