<?php

$tests = array(1, "tariq", 1.5, true, 7, 's', false);

foreach ($tests as $value) {

    if (is_bool($value)) {

        if ($value == true) {
            echo "Yes<br>";
        } else {
            echo "No<br>";
        }
    }
}