<?php
// Array Sorting

$grades = [85, 92, 78, 88, 95];
//$grades2 = [80, 46, 33, 82, 99, 56]; // added for testing function
function printGrades($grades)
{
    rsort($grades);
    print_r($grades);
}

printGrades($grades);
//print_r($grades); 
//printGrades($grades2); // added for testing function



?>
