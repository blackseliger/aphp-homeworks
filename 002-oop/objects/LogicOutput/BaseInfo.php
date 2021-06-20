<?php
declare(strict_types=1);

namespace objects\LogicOutput;

class BaseInfo
{
    public function getBaseInfo( $student): string {
        return $student->getFullName()
            . ", ". "Salary ".  $student->getSalary() . " parrots, "
            . " ". $student->getProfession(). "." .PHP_EOL ;
    }
}