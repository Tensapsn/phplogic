<?php

$panjangTanah = 13; // dalam meter
$lebarTanah = 9; // dalam meter
$luasTanah = $panjangTanah * $lebarTanah;

if ($luasTanah < 90) {
    $tipeRumah = 'Tipe 36';
} elseif ($luasTanah >= 90 && $luasTanah <= 96) {
    $tipeRumah = 'Tipe 45';
} elseif ($luasTanah > 96 && $luasTanah <= 120) {
    $tipeRumah = 'Tipe 54';
} elseif ($luasTanah > 120 && $luasTanah <= 150) {
    $tipeRumah = 'Tipe 60';
} else {
    $tipeRumah = 'Tipe 70';
}

// output
echo "Luas tanah Dani: $luasTanah m2\n";
echo "Tipe rumah yang sesuai: $tipeRumah";

?>
