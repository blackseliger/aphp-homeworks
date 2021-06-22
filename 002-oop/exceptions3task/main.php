<?php
declare(strict_types=1);

/**
 * @throws Exception
 */
function calculate( int $a, int $b): float {
    if (!(is_int($a))  || !(is_int($b))) {
        throw new Exception('аргументы не числа');
    }
    if ((is_float($a)) || (is_float($b))){
        throw new Exception('аргументы числа c плавающей запятой');
    }
    if ((is_string($a)) || (is_string($b))){
        throw new Exception('аргументы строки');
    }
    if ((is_bool($a)) || (is_bool($b))){
        throw new Exception('аргументы являются булевыми значениями');
    }
    if ((is_array($a)) || (is_array($b))){
        throw new Exception('аргументы являются массивами');
    }
    if ((is_null($a)) || (is_null($b))){
        throw new Exception('аргументы не введены, null');
    }
//    оставил проверку на null, но она всегда будет фолс
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
