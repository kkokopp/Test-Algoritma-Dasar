<?php 

$array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

$letter = array_filter($array, 'is_string');
$number = array_filter($array, 'is_numeric');

sort($letter);
sort($number);

$result = array_merge($letter, $number);

print_r($result);

?>
