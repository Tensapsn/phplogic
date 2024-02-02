<?php
function konversi($detik) {
    $jam = floor($detik / 3600);
    $sisa = $detik % 3600;
    $menit = floor($sisa / 60);
    $detik = $sisa % 60;

    $jam = "$jam jam";
    $menit = "$menit menit";
    $detik = "$detik detik";

    return "$jam, $menit, $detik.";
}

$detik = 524534;
echo konversi($detik);
?>