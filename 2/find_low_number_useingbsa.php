<?php

function binarySearch(array $arr, $x) 
{
    // Check for empty array 
    if (count($arr) === 0) return -1;
    
    $low = 0;
    $high = count($arr) - 1;
    
    while ($low <= $high) {
        // Compute middle index 
        $mid = floor(($low + $high) / 2);
        
        // Element found at mid 
        if ($arr[$mid] == $x) {
            return $mid; // Return the index if found
        }
        
        if ($x < $arr[$mid]) {
            // Search the left side of the array 
            $high = $mid - 1;
        } else {
            // Search the right side of the array 
            $low = $mid + 1;
        }
    }
    
    // Element not found 
    return -1;
}


$n = (int)trim(fgets(STDIN)); 
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));  


sort($arr);


$lowestValue = $arr[0];
echo $lowestValue . PHP_EOL;

$index = binarySearch($arr, $value);

