<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            width: 10px;
            height: 10px
        }
    </style>
</head>
<body>

<?php
for ($i = 0; $i < 9; $i++){
    for ($j = 0; $j < 5; $j++){
        $color = 1;
        if ((($i == 1 || $i == 2 || $i == 3) && ($j == 1 || $j == 2 || $j == 3 || $j == 4)) ||
            (($i == 5 || $i == 6 || $i == 7) && ($j == 0 || $j == 1 || $j == 2 || $j == 3))){
            $color = 0;
        }

        if ($color == 1){
            echo "<button style='background-color: blue'>" . $color . "</button>";
        } else {
            echo "<button>" . $color . "</button>";
        }
    }
    echo "<br/>";
}

?>

</body>
</html>