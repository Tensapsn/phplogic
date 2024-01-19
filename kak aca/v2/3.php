<?php

function hitungSuku($a, $n) {
    $suku = [];
    for ($i = 1; $i <= $n; $i++) {
        $suku[] = $a * 4 + $i * 3;
    }
    return $suku;
}

$a = 9;
$n = 12;

$suku = hitungSuku($a, $n);

foreach($suku as $key => $value) {
    echo "Suku " . ($key+1) . " adalah: " . $value . "<br>  ";
}

?>