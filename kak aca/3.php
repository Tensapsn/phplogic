<?php

function convertTime($time24) {
    $time = explode('.', $time24);
    $hours = $time[0];
    $minutes = $time[1];
    
    $suffix = $hours >= 12 ? 'pm' : 'am';
    $hours = $hours > 12 ? $hours - 12 : $hours;
    $hours = $hours == '00' ? 12 : $hours;
    
    return $hours . ':' . $minutes . ' ' . $suffix;
}

echo convertTime("19.00");
echo convertTime("23.45");
echo convertTime("08.55");

// 19.00 -> 07.00 pm
// 23.45 -> 11.45 pm
// 08.55 -> 08.55 am
?>