<?php

$pattern = '/[.,!@#$%^&*()\/]/';  


$s = trim(fgets(STDIN)); 

$e = preg_replace($pattern, "", $s);

echo $e ;
?>
