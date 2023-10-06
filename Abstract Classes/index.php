<?php
class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }
}

class Stagiaire extends Person
{
    private $CNE;


    public function __construct($name, $CNE)
    {
        parent::__construct($name);
        $this->CNE = $CNE;
    }

    public function getCNE()
    {
        return $this->CNE;
    }
}

class Ville
{
    private $name;


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

// Usage
$Personne = new Person('LAMCHATAB AMINE');
echo 'Personne: ' . $Personne->getName() . '<br>';

$Stagiaire = new Stagiaire('Alice Smith', 'P123456789');
echo 'Stagiaire: ' . $Stagiaire->getName() . ', CNE: ' . $Stagiaire->getCNE() . '<br>';

$Ville = new Ville('New York');
echo 'Ville: ' . $Ville->getName();
