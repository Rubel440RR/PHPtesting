<?php
if(isset($_GET['convartf']))
{
    $a=$_GET['f'];
    $cal = 33.8;
    $ans = $a/$cal;
   
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
                <td><?php echo $a."F=".$ans; ?>°C </td>
            </tr>
        </table>
    </form>
</body>
</html>