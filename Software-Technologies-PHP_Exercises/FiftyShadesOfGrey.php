<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 10px;
        }
    </style>
</head>
<body>

<?php
$grInd = 0;
for ($i = 0; $i < 5; $i++){
    for ($j = 0; $j < 10; $j++){
        echo "<div style='background-color:RGB($grInd, $grInd, $grInd)'></div>";
        $grInd += 5;
    }
    $grInd += 1;
    echo "<br/>";
}
?>

</body>
</html>