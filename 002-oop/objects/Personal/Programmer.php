<?php
declare(strict_types=1);

namespace objects\Personal;


use objects\AbstractPerson;
//include 'objects\ObjInterface\AllInterface.php';



class Programmer extends AbstractPerson implements ApplicationCreatorInterface
{


    public function moreInfo(): string
    {
        return "$this->profession : Development of the application.";
    }

    public function getProfession(): string
    {
        return "Profession: $this->profession";
    }

    public function getFullName(): string
    {
        return "Full Name: $this->surname $this->name" ;
    }

    public function getSalary(): int
    {
        return 50;
    }
}