<?php
// echo "Hello, world!";
include_once './autoload.php';



// include_once 'objects/Human/Student.php';
// include_once 'objects/Technics/Car.php';
// include_once 'objects/Technics/TV.php';



use objects\Human\Student as Student;
use objects\Technics\Car as Car;
use objects\Technics\TV as TV;


 $student = new Student();
 $student->setName('gleb');
 $student->setSurname('biryukov');

 echo ($student->getPersonalGreeting());


 $car = new Car("BWB", "4280");

 echo ($car->carGo());
 echo ($car->carStop());

$tv = new TV("animalChannel", "Discovery");

$tv->nextChannel();
$tv->previousChannel();



// https://ru.stackoverflow.com/questions/898353/Не-находит-класс-uncaught-error-class
// помощь