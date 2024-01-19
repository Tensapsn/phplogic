<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 97, 66];

$kompeten = array_filter($bilangan, function($value) {
    return $value >= 75;
});

$notkompeten = array_filter($bilangan, function($value) {
    return $value < 75;
});

print_r($kompeten);
print_r($notkompeten);
