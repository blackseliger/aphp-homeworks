<?php

declare(strict_types=1);

namespace objects;

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




