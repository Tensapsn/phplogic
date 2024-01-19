
<?php

$jamSekarang = 13;
$menitSekarang = 15;

if (($jamSekarang >= 7 && $jamSekarang < 11) || ($jamSekarang == 11 && $menitSekarang < 30)) {
    $status = "waktu kerja";
} elseif (($jamSekarang == 11 && $menitSekarang >= 30) || ($jamSekarang == 12 && $menitSekarang <= 15)) {
    $status = "waktu istirahat";
} elseif (($jamSekarang > 12 && $jamSekarang < 16 || $menitSekarang >= 15)) {
    $status = "waktu kerja";
} else {
    $status = "bukan waktu kerja";
}

echo $status;
?>



<!-- pukul 07.00 sampai 11.30 = waktu kerja
pukul 11.30 sampai 12.15 = waktu istirahat
pukul 12.15 sampai 16.00 = waktu kerja
pukul 16.00 sampai 07.00 = bukan waktu kerja -->
