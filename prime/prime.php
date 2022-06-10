<?php
$n=23;$a=0;
for($i=2;$i<$n-1;$i++)
{
    if($n%$i==0)
    {
        $a=$a+1;
    }

}
if($a==0)
{
    echo $n." is Prime Number";
}else
{
    echo $n." is Not Prime Number";
}
?>