<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chack Prime</title>
</head>
<body><form method="GET" align="center">
    Enter The Number
    <input type="text" name="number"><br><br>
    <input type="Submit" name="chack" value="Chack"><br><br>
    </form>
</body>
</html>



<?php
if(isset($_GET['chack'])){
    $no=$_GET['number'];

$a=0;

for($i=2;$i<=$no-1;$i++){
    if($no%$i==0){
        $a++;
    }
}

if($a==0){
    echo $no." is Prime";
}else
{
    echo $no." is Not Prime";
}


}

?>