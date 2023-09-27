<?php
// task 05: Password Generator
function generatePassword($length)
{
    if ($length >= 8 && $length <= 12) {
        $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-";
        $shuffledString = str_shuffle($string);
        $result = substr($shuffledString, 0, $length);
        echo "Generated Random Password is: {$result}";
        //return $result;
    } else {
        echo "Please input a length between 8 to 12.";
    }
}

generatePassword(12);


?>