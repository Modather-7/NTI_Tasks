<?php

$films = array("Fast", "Predestination", "Persuit", "Prestige");

$keyword = "avatar";

$found = false;

foreach ($films as $film) {
    if (strtolower($film) == strtolower($keyword)) {
        echo "yes";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "no";
}