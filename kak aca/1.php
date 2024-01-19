<?php

// Luas yang diketahui
$luasDiketahui = 25;

$sisi = 1;

while ($sisi * $sisi != $luasDiketahui) {
    $sisi++;

    if ($sisi > $luasDiketahui / 2) {
        echo "Tidak dapat menemukan sisi persegi dengan luas $luasDiketahui.";
        break;
    }
}

echo "Luas persegi dengan luas $luasDiketahui centimeter persegi adalah $sisi centimeter.";

?>
