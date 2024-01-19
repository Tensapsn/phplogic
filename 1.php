<?php
$umurAndi = 16;
$umurDani = $umurAndi;
$umurBeni = $umurDani + 3;
$umurEko = $umurBeni + 5;

$currentYear = 2024;

$tahunAndi = $currentYear - $umurAndi;
$tahunDani = $tahunAndi;
$tahunBeni = $currentYear - $umurBeni;
$tahunEko = $currentYear - $umurEko;

function isLeapYear($year) {
    return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
}

$andiKabisat = isLeapYear($tahunAndi) ? 'Ya' : 'Tidak';
$ekoKabisat = isLeapYear($tahunEko) ? 'Ya' : 'Tidak';

echo "Andi lahir pada tahun $tahunAndi (Tahun kabisat: $andiKabisat)\n";
echo "Dani lahir pada tahun $tahunDani\n";
echo "Beni lahir pada tahun $tahunBeni\n";
echo "Eko lahir pada tahun $tahunEko (Tahun kabisat: $ekoKabisat)\n";
?>
