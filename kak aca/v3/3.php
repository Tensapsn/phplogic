<?php

function hitungBis($penumpang) {
    $kapasitas = 7;
    $bis = intdiv($penumpang, $kapasitas);
    if ($penumpang % $kapasitas > 0) {
        $bis++; 
    }
    return $bis;
}

$penumpang = 15;
echo "Jumlah bis: " . hitungBis($penumpang) . "<br> Jumlah penumpang: " . $penumpang;

?>