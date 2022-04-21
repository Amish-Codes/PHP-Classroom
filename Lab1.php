<?php
$str = "PLearning PHP";

// slash method in string
echo addcslashes("Hello World","ld")."<br>";
echo addslashes("add 'here' slash")."<br>";

// conversion binary to hexadecimal
$hex = bin2hex("$str");
echo $hex."<br>";

// chopping of string
echo chop("Hello World"," ld")."<br>";

// trimming of string, both parameter should be in quotes.
echo trim("$str","P")."<br>";
echo rtrim("$str","P")."<br>";
echo ltrim("$str","L")."<br>";
