<?php

function calculate(float $num1, float $num2)
{
    echo "Multiplication: " . ($num1 * $num2) . "<br>";
    echo "Difference: " . ($num1 - $num2) . "<br>";
    echo "Division: " . ($num1 / $num2) . "<br>";
}

calculate(10, 5);