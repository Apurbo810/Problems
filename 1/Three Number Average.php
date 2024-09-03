<?php
//show the average of the given three numbers
fscanf(STDIN, "%d %d %d", $a, $b, $c);

$r=($a+$b+$c)/3;

printf("Average: %.2f",$r);  
?>