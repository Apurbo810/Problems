<?php

//fscanf(STDIN, "%s", $a);
$a = "hello";

// Split the string into an array of characters
$d = str_split($a);

// Sort the array of characters
sort($d);

// Join the sorted array back into a string
$s = implode($d);

// Reverse the string using strrev()
$da = strrev($s);

// Output the reversed string
echo $da;
