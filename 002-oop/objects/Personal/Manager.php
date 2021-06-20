<?php
declare(strict_types=1);
namespace objects\Personal;


use objects\AbstractPerson;
use objects\Interface\AllInterface\WebinarSpeakerInterface;


class Manager extends AbstractPerson implements WebinarSpeakerInterface
{


    public function moreInfo(): string
    {
        return "$this->profession : Conducting webinars for colleagues ";
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
        return 35;
    }
}