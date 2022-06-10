<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table</title>
</head>
<body>
    <form>
        <table border="1" align="center">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"> </td>
        </tr>
        <tr>
            <td>Roll</td>
            <td><input type="text" name="roll"> </td>
        </tr>
        <tr>
            <td>Reg. No</td>
            <td><input type="text" name="reg"> </td>
        </tr>
        <tr>
            <td>Mobile No.</td>
            <td><input type="text" name="mobile"> </td>
        </tr>
        <tr>
            <td>Gamil</td>
            <td><input type="text" name="gamil"> </td>
        </tr>
        <tr>
           <td align="center" colspan="2"> <input type="submit" name="submit"> </td>
        </tr>
        </table>
    </form>
</body>
</html>

<hr>

<?php
if(isset($_GET['submit']))
{
    $name=$_GET['name'];
    $roll=$_GET['roll'];
    $reg=$_GET['reg'];
    $mobile=$_GET['mobile'];
    $gamil=$_GET['gamil'];

}
?>
<form method="GET">
    <table border="1" align="center">
        <tr>
            <td align="center" colspan="2">Display</td>
        </tr>
        <tr>
        <td>Name</td>
        <td><?php echo $name ?> </td>
        </tr>
        <tr>
        <td>Roll</td>
        <td><?php echo $roll ?> </td>
        </tr>
        <tr>
        <td>Reg. No</td>
        <td><?php echo $reg ?> </td>
        </tr>
        <tr>
        <td>Mobile No.</td>
        <td><?php echo $mobile ?> </td>
        </tr>
        <tr>
        <td>Gamil</td>
        <td><?php echo $gamil ?> </td>
        </tr>
    </table>
</form>