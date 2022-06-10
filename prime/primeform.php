<center>
   <!DOCTYPE html>
<html lang="en">
<head>
    <title>Prime or not</title>
</head>
<body>
    <form method="GET">
        Enter the Number
        <input type="text" name ="number"><br><br>
        <input type="submit" name="submit" value="submit"><br><br>
    </form>
</body>
</html>

<?php
if(isset($_GET['submit'])){
    $n=$_GET['number'];
    $a=0;
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

}
?>
</center>