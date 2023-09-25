<?php
// Array Manipulation 
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEven($num)
{
    return $num % 2 != 0;
}

$result = array_filter($numbers, "removeEven");

print_r($result);

?>