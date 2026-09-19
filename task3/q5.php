<?php

function RouteBubble($numbers)
{
    $count = count($numbers);

    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {

                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    return $numbers;
}

$numbers = array(5, 4, 9, 3, 1);

$result = RouteBubble($numbers);

print_r($result);