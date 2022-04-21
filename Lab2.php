<?php
$array1 = array("10","20","30","40","50");
$array2 = array(60,70,80,90,100);
$ass_array = array("AMish"=>"26", "C"=>"45", "DIpendra"=>"53");
$ass_array2 = array("AMish"=>"1","B"=>"2","C"=>"45","D"=>"53");
$array3 = [1,2,3,4];
$array4 = [1,2,3,4,5];
$array5 = [34.65,5,7,3,45,989,0];

print_r(array_change_key_case($ass_array));
echo "<br>";
print_r(array_chunk($array1,3));
echo "<br>";
print_r(array_combine($array1,$array2));
echo "<br>";
print_r(array_count_values($ass_array));
echo "<br>";
print_r(array_diff($array4,$array3));
echo "<br>";
print_r(array_diff_key($ass_array2,$ass_array));
echo "<br>";
print_r((array_diff_assoc($ass_array2,$ass_array)));
echo "<br>";
print_r((array_fill(0,3,3)));
echo "<br>";
print_r(array_fill_keys("A",4));
echo "<br>";
print_r(array_intersect($array3,$array4));
echo "<br>";
array_push($array2,110);
print_r($array2);
echo "<br>";
print_r(array_pop($array2));
echo "<br>";
unset($array2[2]);
print_r($array2);
echo "<br>";
if(array_key_exists("AMish",$ass_array)) {
    echo "Exist";
} else {
    echo "Not Exist";
}

//$ new = echo "Exist"?array_key_exists("AMish",$ass_array):"Not Exist";
//
echo "<br>";
print_r(array_keys($ass_array2));
echo "<br>";
print_r(array_merge($array1,$array2));
echo "<br>";
print_r(array_replace($array4,$array2));
echo "<br>";
print_r(array_slice($array3,2,4));
echo "<br>";
print_r(array_splice($array3,0,2,$array4));
echo "<br>";
print_r(array_search(2,$ass_array2));
echo "<br>";
print_r(array_sum($array2));
echo "<br>";

//sorting functions in array

print_r(sort($array5));
echo "<br>";
print_r(rsort($array5));
echo "<br>";
print_r(asort($array5));
echo "<br>";
print_r(arsort($array5));
echo "<br>";
print_r(ksort($array5));
echo "<br>";
print_r(krsort($array5));
echo "<br>";
print_r(usort($array5));
echo "<br>";
print_r(ursort($array5));
echo "<br>";
print_r(uksort($array5));
echo "<br>";
print_r(ukrsort($array5));
echo "<br>";

//mathematical functions

//round();
//ceil();
//floor();
//explode();
//implode();
//number_format();