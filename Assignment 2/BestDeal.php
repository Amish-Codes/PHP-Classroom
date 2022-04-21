<?php
$quantity1 = 70;
$quantity2 = 100;
$price1 = 1035;
$price2 = 1200;

if ($price1/$quantity1 < $price2/$quantity2 ) {
    echo "Best Deal is $quantity1 items for Rs. $price1";
} else {
    echo "Best Deal is $quantity2 items for Rs. $price2";
}