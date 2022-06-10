<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display data</title>
</head>
<body><form method="GET"><table>
    Name:<input type="text" name="name">
    Roll:<input type="text" name="roll"><br><br><br><br><br>
    Math:<input type="text" name="math"><br><br>
    English:<input type="text" name="english"><br><br>
    Computer:<input type="text" name="computer"><br><br>
    <input type="submit" name="submit">
</table>
</form>
</body>
</html>
<?php
if(isset($_GET['submit'])){
$name=$_GET['name'];
$roll=$_GET['roll'];
$math=$_GET['math'];
$english=$_GET['english'];
$computer=$_GET['computer'];
echo "<br><br><br><br>";
echo "Name: ". $name."<br>";
echo "Roll: ". $roll."<br>";
echo "Math: ". $math."<br>";
echo "English: ". $english."<br>";
echo "Computer: ". $computer."<br>";
}


?>