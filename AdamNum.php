<?php
function checkAdamNum($number) {
    $reverse = strrev($number);
    $square = $number**2;
    $revsquare = $reverse**2;

    return (strrev($square)==$revsquare? 'true': 'false');
}
echo checkAdamNum(12);
?>
