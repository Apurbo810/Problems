<?php

fscanf(STDIN, "%d", $n); 

$inputLine = trim(fgets(STDIN)); 
$a = array_map('intval', explode(' ', $inputLine));  

fscanf(STDIN, "%d", $t); 

function a($n, $a, $t) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            for ($k = $j + 1; $k < $n; $k++) {
                if ($a[$i] + $a[$j] + $a[$k] == $t) {
                    return array($a[$i], $a[$j], $a[$k]);
                }
            }
        }
    }
    return false;
}

$result = a($n, $a, $t);

    sort($result); 
    echo implode(" ", $result) . "\n";


?>
