<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Of Two Number</title>
</head>
<body><center>
    <form method="post">
        Enter The 1st Number 
        <input type="text" name="one"><br><br>
        Enter The 2nd Number 
        <input type="text" name="two"><br><br>
        <input type="submit" name="submit" value="submit" >

</form>
</center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $sum=0;
$one=$_POST['one'];
$two=$_POST['two'];
$sum=$one+$two;
echo $sum;
}
?>