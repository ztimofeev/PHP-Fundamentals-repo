<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Render Students Info</title>
</head>
<body>
<form method = "get">
    <div>
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="sub">Subtract</option>
        </select>
    </div>
    <div>
        <input type="text" name="num1">
    </div>
    <div>
        <input type="text" name="num2">
    </div>
    <div>
        <input type="submit" name ="submit" value="Calculate" />
    </div>
</form>

<?php
$html = "<ul><li style='color: red'>";
if (isset($_GET['submit'])) {
    $operation = $_GET['operation'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if ($operation == 'sum') {
        $html .= ($num1 + $num2) . "</li></ul>";
    } else {
        $html .= ($num1 - $num2) . "</li></ul>";
    }
    echo $html;
}
?>

</body>
</html>