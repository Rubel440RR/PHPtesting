<?php
$a=0;
$b=1;
echo $a. " " . $b . " ";
for($i=2;$i<10;$i++){
    $f=$a+$b;
    echo $f." " ;
    $a=$b;
    $b=$f;
}

?>