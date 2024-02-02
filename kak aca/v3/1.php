<!-- golongan 1 = 3.000 per hour
golongan 2 = 3.500 per hour
golongan 3 = 4.000 per hour
golongan 4 = 5.000 per hour -->
<?php

function hitungGaji($golongan, $totalKerja) {
    $gaji = [
        1 => 3000,
        2 => 3500,
        3 => 4000,
        4 => 5000
    ];

    if ($totalKerja <= 40) {
        return $gaji[$golongan] * $totalKerja;
    } else {
        $jamReguler = 40;
        $jamLembur = $totalKerja - $jamReguler;
        $gajiReguler = $gaji[$golongan] * $jamReguler;
        $gajiLembur = $gaji[$golongan] * $jamLembur * 1.5;
        return $gajiReguler + $gajiLembur;
    }
}

$golongan = 2;
$totalKerja = 45;

echo "Total Gaji: " . hitungGaji($golongan, $totalKerja);

?>