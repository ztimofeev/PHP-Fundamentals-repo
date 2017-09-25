<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="sub">Substract</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="text" name="num1" />
    </div>
    <div>
        Number 2:
        <input type="text" name="num2" />
    </div>
    <div>
        <input type="submit" name="calculation" value="Calculation!" />
    </div>
</form>

<?php
if (isset($_GET['calculation'])){
    $operation = $_GET['operation'];
    $number_one = $_GET['num1'];
    $number_two = $_GET['num2'];
    if ($operation == 'sum') {
        echo ' == ' . ($number_one + $number_two);
    } elseif ($operation == 'sub') {
        echo ' == ' . ($number_one - $number_two);
    } else {
        echo ' == Invalid operation supplied!';
    }
}
?>
</body>
</html>
