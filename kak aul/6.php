<?php
$mulai = 3;
$selesai = 30;
$dicari = 90;
$count = 0;

for ($i = $mulai; $i <= $selesai; $i = $i + 3) {
    if ($dicari % $i == 0) {
        $count++;
    }
}

echo "kesempatan: $count";
?>
