<?php
declare(strict_types=1);

namespace objects\LogicOutput;


use objects\AbstractPerson;

//include 'objects\ObjInterface\AllInterface.php';

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