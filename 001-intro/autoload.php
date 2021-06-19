<?php

declare(strict_types=1);



function autoload($classname) {

    var_dump($classname);
//    $fileName = __DIR__.'/'.str_replace('\\', '/', $classname).'.php';
    $fileName = __DIR__.'\objects\\'.str_replace('//','\\', $classname).'.php';
    var_dump($fileName);
//      $fileName = "./path/one".$classname.".php";
    if (is_file($fileName)) {
        require_once($fileName);
    }

}


// регистрация
spl_autoload_register('autoload');