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
        $this->CNE= $CNE;
    }

    public function getCNE() {
        return $this->CNE;
    }

    public function introduce() {
        return "Hello, I'm {$this->getName()}, an intern my CNE : {$this->getCNE()}.";
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
$person = new Person('LAMCHATAB AMINE');
echo 'Person: ' . $person->getName() . '<br>';

$intern = new Intern('LEO MESSI', 'P123456789');
echo 'Intern: ' . $intern->introduce() . '<br>';

$city = new City('TANGER');
echo 'City: ' . $city->getName();
