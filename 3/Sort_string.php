<?php

function sortStringsByLength($strings) {

    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    
    return $strings;
}

$N = intval(trim(fgets(STDIN))); 
$input = trim(fgets(STDIN));
$M = explode(' ', $input); 

$sortedStrings = sortStringsByLength($M);

foreach ($sortedStrings as $string) {
    echo $string . " ";
}
?>
