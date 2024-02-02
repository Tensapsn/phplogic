<?php

$mulai = '10:35';
$selesai = '11:40';

// misahin jam dan menit
list($jam_mulai, $menit_mulai) = explode(':', $mulai);
list($jam_selesai, $menit_selesai) = explode(':', $selesai);

// mengubah ke jumlah menit
$total_mulai = $jam_mulai * 60 + $menit_mulai;
$total_selesai = $jam_selesai * 60 + $menit_selesai;

$selisih = $total_selesai - $total_mulai;

// mengubah kembali ke format jam dan menit
$jam = floor($selisih / 60);
$menit = $selisih % 60;

echo $jam . " jam " . $menit . " menit";
?>