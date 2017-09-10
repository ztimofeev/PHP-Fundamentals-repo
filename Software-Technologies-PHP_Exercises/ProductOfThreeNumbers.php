<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    K: <input type="text" name="num3" />
    <input type="submit" value="Изпращане" />
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2']) & isset($_GET['num3'])){

    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $num3 = intval($_GET['num3']);
    $result = "Positive";

    if (($num1 < 0 && $num2 > 0 && $num3 > 0) || ($num1 > 0 && $num2 < 0 && $num3 > 0) ||
        ($num1 > 0 && $num2 > 0 && $num3 < 0) || ($num1 < 0 && $num2 < 0 && $num3 < 0)) {
        $result = "Negative";
    }

    echo $result;
}
?>
</body>
</html>