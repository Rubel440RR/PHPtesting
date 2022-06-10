<?php
if(isset($_GET['submit'])){
    $no=$_GET['number'];
    $a=1;
    for($i=1;$i<=$no;$i++){
        $a=$a*$i;

    }
   // echo $no. " Factorial is " .$a;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <table border="1" align="center">
            <tr>
                <td>Factorial</td>
            </tr>
            <tr>
                <td><?php echo $no. " Factorial is " .$a; ?></td>
            </tr>
        </table>
    </form>
</body>
</html>