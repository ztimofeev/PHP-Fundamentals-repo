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
    } elseif ($n == 3) {
        echo 1 . ' ' . 1 . ' ' . 2;
    } else {
        echo 1 . ' ' . 1 . ' ' . 2 . ' ';
        $b = 1;
        $c = 1;
        $fibo = 2;
        for ($i = 3; $i < $n; $i++){
            $a = $b;
            $b = $c;
            $c = $fibo;
            $fibo = $a + $b + $c;
            echo $fibo . ' ';
        }
    }
}
?>
</body>
</html>