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
    private $company;

    public function __construct($name, $company) {
        parent::__construct($name);
        $this->company = $company;
    }

    public function getCompany() {
        return $this->company;
    }

    public function introduce() {
        return "Hello, I'm {$this->getName()}, an intern at {$this->getCompany()}.";
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
$person = new Person('John Doe');
echo 'Person: ' . $person->getName() . '<br>';

$intern = new Intern('Alice Smith', 'Tech Co.');
echo 'Intern: ' . $intern->introduce() . '<br>';

$city = new City('New York');
echo 'City: ' . $city->getName();
