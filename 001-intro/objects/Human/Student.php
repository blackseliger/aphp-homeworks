<?php


namespace objects\Human;

class Student {
    // public string $name;
    // public string $surname;


    public function setName(string $name): void {
        $this->name = ucfirst($name);
    }

    public function setSurname(string $surname): void {
        $this->surname = ucfirst($surname);
    }

    public function getPersonalGreeting(): string {
        return "Hello, $this->name $this->surname. Welcome to the course!";
    }

}