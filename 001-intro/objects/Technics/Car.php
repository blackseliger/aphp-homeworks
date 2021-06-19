<?php


namespace Cars;

class Car {

    public string $name;
    public string $serialNumber;


    public function __construct(string $name, string $serialNumber) {
        $this->name = ucfirst($name);
        $this->serialNumber = $serialNumber;
    }

    public function carGo(): string {
        return "Car $this->name with $this->serialNumber started to move" .PHP_EOL;
    }

    public function carStop(): string {
        return "Car $this->name with $this->serialNumber stopped here" .PHP_EOL;
    }
}
