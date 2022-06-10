<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post" cectype="multipart/form-date">
        <input type="file" name="image"><br><br>
        <input type="submit" name="">
    </form>
</body>
</html>

<?php
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['temp_name'];
    $file_name = $_FILES['image']['type'];
}

?>