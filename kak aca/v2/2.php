<?php
function hitung($jamPerhari, $istirahat, $istirahatMakan) {

    $totalIstirahat = $istirahat + $istirahatMakan;
    $kerja = ($jamPerhari * 60) - $totalIstirahat;

    $kerjaJam = floor($kerja / 60); 
    $kerjaMenit = $kerja % 60;
    $istirahatJam = floor($totalIstirahat / 60); 
    $istirahatMenit = $totalIstirahat % 60;

    return array('kerjaJam' => $kerjaJam, 'kerjaMenit' => $kerjaMenit, 'istirahatJam' => $istirahatJam, 'istirahatMenit' => $istirahatMenit);
}

$result = hitung(8, 20, 30);

echo "Waktu kerja: " . $result['kerjaJam'] . " jam " . $result['kerjaMenit'] . " menit\n";
echo "Waktu istirahat: " . $result['istirahatJam'] . " jam " . $result['istirahatMenit'] . " menit\n";

?>