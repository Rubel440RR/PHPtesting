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
<form  align="center" action="page1.php">
    <table align="center" colspan="2">
        <input type="submit" name="back" value="Back">
    </table>
</form>