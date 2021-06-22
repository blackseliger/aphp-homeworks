<?php

include_once './autoload.php';

include 'objects\ObjInterface\AllInterface.php';





use objects\LogicOutput\AllInfoOutput;
use objects\LogicOutput\BaseInfo;
use objects\Personal\Director;
use objects\Personal\Employee;
use objects\Personal\Manager;




$info = new BaseInfo();
$people[] = new  Employee('Employee', 'Gleb', 'Biryukov');
$people[] = new Director('Director', 'Ivan', 'Ivanov');
$people[] = new Manager('Manager', 'Andrey', 'Kozulya');

$allInfoOutput = new AllInfoOutput($people, $info);

$allInfoOutput->outPut();