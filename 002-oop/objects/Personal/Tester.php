<?php


namespace objects\Personal;


use objects\AbstractPerson;
use objects\Interface\AllInterface\ApplicationCreatorInterface;


class Tester extends AbstractPerson implements ApplicationCreatorInterface
{

    public function moreInfo(): string
    {
        return "$this->profession : Testing the app";
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
        return 30;
    }
}