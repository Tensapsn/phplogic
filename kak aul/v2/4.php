<?php

$numbers = range(1, 10);
$perkalian = [1, 2, 3];

$results = array_map(function($number) use ($numbers) {
    return array_map(function($kali) use ($number) {
        return "$number x $kali = " . $number * $kali . "\n";
    }, $numbers);
}, $perkalian);

$results = array_merge(...$results);

foreach ($results as $result) {
    echo $result . "<br>";
}

?>