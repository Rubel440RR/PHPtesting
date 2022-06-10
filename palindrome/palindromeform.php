<!DOCTYPE html>
<html lang="en">
<head>
    <title>palindrome</title>
</head>
<body>
    <form method="GET" align="center">
        <table>
            Enter the Number
            <input type="text" name="number"><br><br>
            <input type="submit" name="submit"><br><br>


        </table>
    </form>
</body>
</html>

<?php
if(isset($_GET['submit'])){
    $no=$_GET['number'];
    $rev=strrev($no);
    if($no==$rev)
    {
        echo "the number is palindrome";
    }
    else
    {
        echo "the number is not palindrome";
    }
}

?>