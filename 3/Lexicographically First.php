<?php

fscanf(STDIN, "%s", $a);

$d= str_split($a);
sort($d);
echo implode($d);