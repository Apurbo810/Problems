<?php

function binarySearchRotated(array $arr, $x) 
{
    $low = 0;
    $high = count($arr) - 1;
    
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        
        // Element found at mid
        if ($arr[$mid] == $x) {
            return $mid;
        }
        
        // Check if the left half is sorted
        if ($arr[$low] <= $arr[$mid]) {
            // Check if the target is in the left half
            if ($x >= $arr[$low] && $x < $arr[$mid]) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        } 
        // Right half is sorted
        else {
            // Check if the target is in the right half
            if ($x > $arr[$mid] && $x <= $arr[$high]) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
    }
    
    // Element not found
    return -1;
}

$n = (int)trim(fgets(STDIN)); 
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));  
fscanf(STDIN, "%d\n", $x);

$index = binarySearchRotated($arr, $x);
if ($index != -1) {
    echo $index . PHP_EOL;
} else { 
    echo "Element not found" . PHP_EOL;
}

