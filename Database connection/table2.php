<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table 2</title>
</head>
<body>
    <form align="center" method="GET">
        <h1>Login</h1>
        <table border="10"align ="center">
            <tr>
                <td>Gmail</td>
                <td>
                    <input type="text" name="gmail">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="pw">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" name="login" value="Login">
                </td>
            </tr>
 
        </table>
    </form>

    <form align="center" action="signup.php">
        <table align="center">
            <a>Don't have an account?</a>
            <a href="#"><input type="submit" name="signup" value="Signup"> </a>
        </table>
    </form>
</body>
</html>


<?php
$server="localhost";
$username="root";
$password="";
$database="login";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn )
{
    die("Failed to Connect :" . mysqli_connect_error());
}

if(isset($_GET['login']))
{
    $gmail=$_GET['gmail'];
    $pw=$_GET['pw'];

    $sql= "INSERT INTO `login` (`gmail`, `password`) VALUES ('$gmail', '$pw');";
    mysqli_query($conn, $sql);
}




?>
