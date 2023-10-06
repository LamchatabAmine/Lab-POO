<?php
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Intern extends Person {
    private $CNE;


    public function __construct($name, $CNE) {
        parent::__construct($name);
        $this->CNE = $CNE;
    }

    public function getCNE()
    {
        return $this->CNE;
    }
}

class City {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Usage
$person = new Person('AMINE LAMCHATAB');
echo 'Person: ' . $person->getName() . '<br>';

$intern = new Intern('LEO MESSI', 'P123456789');
// 'name' is protected in Person, so it's not directly accessible in Intern
// echo 'Intern: ' . $intern->name; // This would produce an error
echo 'Intern: ' . $intern->getName() . ', CNE: ' . $intern->getCNE() . '<br>';

$city = new City('New York');
echo 'City: ' . $city->getName();
