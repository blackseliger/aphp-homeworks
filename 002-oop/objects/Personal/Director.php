<?php
declare(strict_types=1);

namespace objects\Personal;


use objects\AbstractPerson;

//include 'objects\ObjInterface\AllInterface.php';





class Director extends AbstractPerson implements  LeadInterface
{


    public function moreInfo(): string
    {
        return"$this->profession : The main role is the management of the entire technological process." .PHP_EOL;
    }

    public function getProfession(): string
    {
        return "Profession: $this->profession";
    }

    public function getFullName(): string
    {
        return "Full Name: $this->surname $this->name";
    }

    public function getSalary(): int
    {
        return 65;
    }
}