<?php
    if (isset($_GET['submit'])) {
        $num = $_GET['num'];
        $fact = 1;
        for($i=1 ; $i<=$num ; $i++){
            $fact=$fact* $i;
        }
       // header("location:factpage2.php?fact=$fact");
    }
    echo $fact;
?>