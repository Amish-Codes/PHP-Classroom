<?php
$String1 = 'National';
$String2 = 'Nationel';

$pos = strspn($String1 ^ $String2, "\0");

echo $String1[$pos]." in String1, and ".$String2[$pos]." in String2 <br>";