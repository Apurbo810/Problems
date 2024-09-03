<?php
//show the value largest number of the given three numbers

fscanf(STDIN, "%d %d %d", $a, $b, $c);
if($a>$b && $a>$c)
{
    echo $a;
}
else if($b>$a && $b>$c)
{
    echo $b;
}
else
{
    echo $c;
}


?>