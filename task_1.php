<?php
//String Manipulation
$text = "The quick brown fox jumps over the lazy dog.";
function stringManipulation($text)
{
    $replace = str_replace("brown", "red", $text);
    return strtolower($replace);
}

echo stringManipulation($text);
?>