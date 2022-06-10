<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibo</title>
</head>
<body>
    <form method="post">
    Enter the Number <input type="text" name="Number">
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n=$_POST['Number'];
    $a=0;$b=1;
    echo "<br>"."fibo is - "." ";
    echo $a ." " . $b ." ";
    for($i=2;$i<=$n;$i++){
        $f=$a+$b;
        echo $f." ";
        $a=$b;
        $b=$f;
    
    }
}