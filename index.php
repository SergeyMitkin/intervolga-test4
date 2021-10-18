<?php
$array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51]; // Объявляем массив

function consistentPairs($array){

    $cnt = 0; // Количество последовательных пар одинаковых элементов
    $n = count($array); // Число элементов в массиве

    for ($i=0; $i<$n-1; $i++){

        // Если последовательные элементы равны, инкрементируем $cnt
        if ($array[$i] === $array[$i+1]){
            $cnt++;
        }
    }

    return $cnt;
}

echo consistentPairs($array);