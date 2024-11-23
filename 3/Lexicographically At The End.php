<?php

fscanf(STDIN, "%s", $a);

$d = str_split($a);
sort($d);
$s = implode($d);
$da = strrev($s);
echo $da;
