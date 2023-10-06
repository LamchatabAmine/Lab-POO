<?php
class Person {
    const GREETING = 'Hello, I am a person.';

    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Intern extends Person {
    const GREETING = 'Hello, I am an intern.';

    private $CNE;

    public function __construct($name, $CNE) {
        parent::__construct($name);
        $this->CNE = $CNE;
    }

    public function getCNE() {
        return $this->CNE;
    }
}

class City {
    const GREETING = 'Welcome to the city!';

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Usage
echo 'Person Greeting: ' . Person::GREETING . '<br>';

$person = new Person('AMINE LAMCHATAB');
echo 'Person: ' . $person->getName() . '<br>';

echo 'Intern Greeting: ' . Intern::GREETING . '<br>';
$intern = new Intern('LEO MESSI', 'P123456789');
echo 'Intern: ' . $intern->getName() . ', CNE: ' . $intern->getCNE() . '<br>';

echo 'City Greeting: ' . City::GREETING . '<br>';
$city = new City('TANGER');
echo 'City: ' . $city->getName();
