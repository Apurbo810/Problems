<?php
//Convert Celsius to Fahrenheit

fscanf(STDIN,"%d",$C);
$F=($C*(9/5))+32;

printf("The temperature in Fahrenheit is: %.2F",$F);

?>
