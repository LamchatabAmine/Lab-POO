<?php
interface Greeting {
    public function greet();
}

class Person implements Greeting {
    protected $Id;
    protected $name;

    public function __construct($Id, $name) {
        $this->Id = $Id;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function greet() {
        return "Hello, I am {$this->name}.";
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

// Usage
$person = new Person(1, 'AMINE LAMCHATAB');
echo $person->greet() . '<br>';

$stagiair = new Stagiair(1, 'LEO MESSI', 'P123456789');
echo $stagiair->greet() . ' <br> CNE: ' . $stagiair->getCNE() . '<br>';
