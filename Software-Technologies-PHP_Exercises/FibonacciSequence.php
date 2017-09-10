<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" value="Изпращане" />
</form>

<?php
if (isset($_GET['num'])){
    $n = intval($_GET['num']);

    if ($n == 1) {
        echo 1;
    } elseif ($n == 2) {
        echo 1 . ' ' . 1;
    } else {
        echo 1 . ' ' . 1 . ' ';
        $b = 1;
        $fibo = 1;
        for ($i = 2; $i < $n; $i++){
            $a = $b;
            $b = $fibo;
            $fibo = $a + $b;
            echo $fibo . ' ';
        }
    }
}
?>
</body>
</html>