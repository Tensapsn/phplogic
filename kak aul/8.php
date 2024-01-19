<?php
$beratBadan = 44; // dalam kilogram
$tinggiBadan = 148; // dalam centimeter

// konversi tinggi badan ke meter
$tinggiBadanMeter = $tinggiBadan / 100;

// rumus imt
$imt = $beratBadan / ($tinggiBadanMeter ** 2);

if ($imt < 18.5) {
    $kategori = "Berat badan kurang";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    $kategori = "Normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    $kategori = "Berat badan lebih";
} else {
    $kategori = "Obesitas";
}

echo "IMT Beni adalah $imt, termasuk dalam kategori: $kategori";
?>
