<?php 
require_once 'namespace.php'; // Corrected: added a semicolon at the end

// Usage
$person = new MyApp\Person(1, 'AMINE LAMCHATAB');
echo 'Person: ' . $person->getName() . '<br>';

$stagiair = new MyApp\Stagiair(1, 'LEO MESSI', 'P123456789');
echo 'Stagiair: ' . $stagiair->getName() . ' <br> CNE: ' . $stagiair->getCNE() . '<br>';

echo  MyApp\Person::Bienvenue();
