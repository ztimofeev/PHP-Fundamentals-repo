<form method="get">
    Elements: <input type="text", name="elements">
    <input type="submit">
</form>


<?php
if (isset($_GET['elements'])){
    $inputArr = explode(",", $_GET['elements']);
    $limit = count($inputArr);

    for ($i = 0; $i < $limit / 2; ++$i){
        if ($i != $limit - $i - 1){
            echo $inputArr[$i] . " " . $inputArr[$limit - $i - 1];
        } else {
            echo $inputArr[$i];
        }
        echo "<br>";
    }
}
