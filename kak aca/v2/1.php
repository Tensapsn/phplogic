<?php

function hitung($number) {
    $pembagi = [];
    $dibagi = [3, 5, 7, 10];

    foreach ($dibagi as $bagi) {
        if ($number % $bagi == 0) {
            $pembagi[] = $bagi;
        }
    }

    return $pembagi;
}

function output($pembagi) {
    if (in_array(5, $pembagi) && in_array(10, $pembagi)) {
        echo "bisa dibagi dengan 5 dan 10";
    } else if (in_array(5, $pembagi)) {
        echo "bisa dibagi dengan 5";
    } else if (in_array(10, $pembagi)) {
        echo "bisa dibagi dengan 10";
    } else if (in_array(3, $pembagi)) {
        echo "bisa dibagi dengan 3";
    } else if (in_array(7, $pembagi)) {
        echo "bisa dibagi dengan 7";
    } else {
        echo "tidak bisa dibagi dengan 3, 5, 7, atau 10";
    }
}

$pembagi = hitung(2);
output($pembagi);


// dibagi 3, 5, 7, 10