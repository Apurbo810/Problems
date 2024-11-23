<?php

$s = trim(fgets(STDIN));


$c = 0; 

for ($i = 1; $i < strlen($s) - 1; $i++) {

    if ($s[$i] == '0' && $s[$i - 1] == '1' && $s[$i + 1] == '1') {
        $c++; 
    }
}


print $c ;
?>
