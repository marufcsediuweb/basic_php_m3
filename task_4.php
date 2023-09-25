<?php
// Multidimensional Array
$studentGrades = array(
    'Rashidul' => array('Math' => 46, 'English' => 55, 'Science' => 34),
    'Shawon' => array('Math' => 82, 'English' => 43, 'Science' => 67),
    'Tariqul' => array('Math' => 77, 'English' => 81, 'Science' => 58)
);

//echo $studentGrades['Shawon']['English']; // Working or not testing

function averageGrade($marks)
{
    foreach ($marks as $key => $value) {
        $average = (array_sum($value)) / 3;
        echo "Average grade of {$key} is {$average}";
        echo PHP_EOL;
    }
}
averageGrade($studentGrades);

?>