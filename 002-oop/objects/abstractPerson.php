<?php

declare(strict_types=1);

namespace objects\abstractPerson;

abstract class AbstractPerson
{
    public string $profession;
    public string $name;
    public string $surname;

    public function __construct(string $profession, string $name, string $surname) {
        $this->profession = ucfirst($profession);
        $this->name = ucfirst($name);
        $this->surname = ucfirst($surname);
    }

    abstract public function getFullName(): string;
    abstract public function getSalary(): int;
    abstract public function getProfession(): string;
}


interface LeadInterface
{
    public function moreInfo() : string;
}

interface ApplicationCreatorInterface
{
    public function moreInfo() : string;
}

interface WebinarSpeakerInterface
{
    public function moreInfo() : string;
}

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

class BaseInfo
{
    public function getBaseInfo( $student): string {
        return $student->getFullName()
            . ", ". "Salary ".  $student->getSalary() . " parrots, "
            . " ". $student->getProfession(). "." .PHP_EOL ;
    }
}

class AllInfoOutput
{
    public array $people;
    public static int $sumSalary = 0;
    public int $countPeople;
    public object $info;

    public function __construct(array $people, object $info) {
        $this->people = $people;
        $this->info = $info; // class BaseInfo
        $this->countPeople = count($people);
    }

    public function outPut(): void {
        foreach ($this->people as $person) {
            if ($person instanceof AbstractPerson) {
                echo($this->info->getBaseInfo($person)) .PHP_EOL;
                self::$sumSalary += $person->getSalary();
                if (($person instanceof  LeadInterface) || ($person instanceof ApplicationCreatorInterface) || ($person instanceof WebinarSpeakerInterface)) {
                    echo("More Info -> ". $person->moreInfo()) .PHP_EOL;
                }
            }
        }
        echo "Общая сумма зарплат:  ". self::$sumSalary .PHP_EOL;
        echo "Общее количество сотрудников: ". $this->countPeople .PHP_EOL;
     }

}




$info = new BaseInfo();
$people[] = new  Employee('Employee', 'Gleb', 'Biryukov');
$people[] = new Director('Director', 'Ivan', 'Ivanov');
$people[] = new Manager('Manager', 'Andrey', 'Kozulya');

$allInfoOutput = new AllInfoOutput($people, $info);

$allInfoOutput->outPut();


