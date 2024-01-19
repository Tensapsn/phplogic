<?php

function generateNomorPeserta($mataLomba, $nomorPeserta, $pendidikan) {
    switch ($mataLomba) {
        case 'Web App':
            $kodeMataLomba = '01W';
            break;
        case 'Android':
            $kodeMataLomba = '02A';
            break;
        case 'Game':
            $kodeMataLomba = '03G';
            break;
    }

    switch ($pendidikan) {
        case 'SMP':
            $kodePendidikan = 'P';
            break;
        case 'SMA':
        case 'SMK':
        case 'MA':
            $kodePendidikan = 'A';
            break;
    }

    $tahunPelaksanaan = date('Y');
    $duaDigitTahun = substr($tahunPelaksanaan, -2);

    // Menggabungkan semua kode untuk membentuk nomor peserta
    $nomorPesertaEko = sprintf("%03d", $nomorPeserta); // Menggunakan 3 digit untuk nomor peserta
    $nomorPesertaFinal = $nomorPesertaEko . $kodeMataLomba . $kodePendidikan . $duaDigitTahun;

    return $nomorPesertaFinal;
}

// Informasi yang diketahui
$mataLombaEko = 'Web App';
$nomorPesertaEko = 121;
$pendidikanEko = 'SMK';

// Menggunakan fungsi generateNomorPeserta untuk mendapatkan nomor peserta Eko
$nomorPesertaEkoFinal = generateNomorPeserta($mataLombaEko, $nomorPesertaEko, $pendidikanEko);

// Menampilkan hasil
echo "Nomor peserta Eko: $nomorPesertaEkoFinal";

?>
