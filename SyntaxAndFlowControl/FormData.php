<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data</title>
</head>
<body>
<form method="get">
    <input type="text" name="name"><br>
    <input type="text" name="age"><br>
    <input type="radio" name="gender" value="male" checked>Male<br>
    <input type="radio" name="gender" value="female">Female<br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    echo "Hello, my name is {$name}. I'm {$age} old. I'm {$gender}.";
}
?>

</body>
</html>

