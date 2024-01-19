<?php
$jamSekarang = 5;

$jamMulai = 7;
$jamSelesai = 12;
$istirahatMulai = 12;
$istirahatSelesai = 13;

if ($jamSekarang >= $jamMulai && $jamSekarang < $jamSelesai) {
    $status = "Jam kerja";
} elseif ($jamSekarang >= $istirahatMulai && $jamSekarang < $istirahatSelesai) {
    $status = "Jam istirahat";
} else {
    $status = "Waktu bebas";
}

echo "Sekarang pukul " . $jamSekarang . ":00, maka sekarang adalah " . $status;
?>
