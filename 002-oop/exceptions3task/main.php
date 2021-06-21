<?php
declare(strict_types=1);

/**
 * @throws Exception
 */
function calculate($a, $b): float {
    if (!(is_int($a))  || !(is_int($b))) {
        throw new Exception('аргументы не числа');
    } else if ((is_float($a)) || (is_float($b))){
        throw new Exception('аргументы числа c плавающей запятой');
    }  else if ((is_string($a)) || (is_string($b))){
        throw new Exception('аргументы строки');
    }  else if ((is_bool($a)) || (is_bool($b))){
        throw new Exception('аргументы являются булевыми значениями');
    }   else if ((is_array($a)) || (is_array($b))){
        throw new Exception('аргументы являются массивами');
    }   else if ((is_null($a)) || (is_null($b))){
        throw new Exception('аргументы не введены, null');
    }
    echo $a/$b .PHP_EOL;;
    return $a/$b;
}

try {
    calculate('f','a');
} catch (Exception $e) {
    echo 'Перехвачено исключение: '. $e->getMessage() .PHP_EOL;
} finally {
    echo 'Повторите запрос' .PHP_EOL;
}



//calculate('n','a');
