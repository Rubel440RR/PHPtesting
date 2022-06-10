<?php
$a=0;$b=1;
echo "fibo is - ".$a ." ".$b ." ";
for($i=2;$i<15;$i++)
{
    $f=$a+$b;
    echo $f." ";
    $a=$b;
    $b=$f;
}

?>