<?php
if(isset($_GET['convartc']))
{
    $a=$_GET['c'];
    $cal = 33.8;
    $ans = $a*$cal;
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>convart</title>
</head>
<body>
    <form method="GET" >
        <table align="center" border="1">
            <tr>
                <td><?php echo $a."°C=".$ans; ?>F </td>
            </tr>
        </table>
    </form>
</body>
</html>