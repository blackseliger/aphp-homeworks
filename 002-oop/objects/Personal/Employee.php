<?php
declare(strict_types=1);

namespace objects\Personal;


use objects\AbstractPerson;

class Employee extends AbstractPerson
{

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
        return 25;
    }
}