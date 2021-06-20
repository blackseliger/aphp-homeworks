<?php

declare(strict_types=1);

function autoload($classname)
{
    $fileName = __DIR__.'/'.str_replace('\\','/', $classname).'.php';
    if (is_file($fileName)) {
        require_once($fileName);
    } else {
        // $message = sprintf('File "%s" not exists', $path);
        // die($message);
        echo "Dont";
    }
}


// регистрация
spl_autoload_register('autoload');