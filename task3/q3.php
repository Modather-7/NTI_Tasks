<?php

function sumArray(array $numbers)
{
    return array_sum($numbers);
}

$numbers = array(1, 2, 3, 4, 5);

echo sumArray($numbers);
