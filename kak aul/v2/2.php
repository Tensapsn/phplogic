<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// cari duplikat
$commonNumbers = array_intersect($bil1, $bil2);

// nyatuin array
$mergedNumbers = array_merge($bil1, $bil2);

// cari bilangan unik
$uniqueNumbers = array_diff($mergedNumbers, $commonNumbers);

echo "nomer duplikat:\n";
foreach($commonNumbers as $number) {
    echo $number . "\n";
}

echo "nomer unik:\n";
foreach($uniqueNumbers as $number) {
    echo $number . "\n";
}

?>