<?php

$totalBensin = 0;
$bensinPadaKMSebelum = 0;

for ($km = 1; $km <= 100; $km++) {
    if ($km == 1) {
        $totalBensin += 10;
        $bensinPadaKMSebelum = 10;
    } else {
        $bensin = $bensinPadaKMSebelum * 0.8;
        $totalBensin += $bensin;
        $bensinPadaKMSebelum = $bensin;
    }
}

$totalBensin = round($totalBensin, 2);

echo "Total bahan bakar yang digunakan: " . $totalBensin . " kg";

?>  