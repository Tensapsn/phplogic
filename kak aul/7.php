<?php
// Data andi
$usiaAndi = 25;
$nilaiMath = 83;
$nilaiEnglish = 86;
$nilaiIndonesian = 87;

// Syarat
$usiaMin = 16;
$usiaMax = 25;
$nilaiMathMin = 87;
$nilaiEnglishMin = 85;
$nilaiIndonesianMin = 87;
$rataRataMin = 85;

if ($usiaAndi >= $usiaMin && $usiaAndi <= $usiaMax
    && $nilaiMath >= $nilaiMathMin
    && $nilaiEnglish >= $nilaiEnglishMin
    && $nilaiIndonesian >= $nilaiIndonesianMin
) {

    $rataRata = ($nilaiMath + $nilaiEnglish + $nilaiIndonesian) / 3;


    if ($rataRata >= $rataRataMin) {
        echo "Andi diterima";
    } else {
        echo "Andi ditolak karena rata tdk cukup";
    }
} else {
    echo "Andi ditolak karena kurang/lebih umur dan belet";
}
?>
