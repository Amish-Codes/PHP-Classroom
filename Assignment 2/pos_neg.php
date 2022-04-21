<?php
$value = 10;
if (is_numeric($value)) {
    if ($value > 0) {
        echo "Number $value is positive";
    } elseif ($value < 0) {
        echo "Number $value is negative";
    } else {
        echo "Number $value is zero";
    }
} else {
    echo "$value is Not a number";
}