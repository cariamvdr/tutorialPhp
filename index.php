<?php
include_once Person.php;
include_once Employee.php;

$attilio = Person::generatePersonByName("Attilio");
$pietro  = Person::generatePersonByAge(24);
$davide  = Person::generatePersonByNameAge("Davide", 25);

$attilio->toString_name();
$pietro->toString_age();
$davide->toString();

$gianluca = new Employee("Gianluca",24,"Ingegnere");
$gianluca->toString();
