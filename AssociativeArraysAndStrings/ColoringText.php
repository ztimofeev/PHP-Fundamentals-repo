<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coloring Text</title>
</head>
<body>

<form method="GET">
    <fieldset>
        <legend>Fill the text here:</legend>
            <label>
                <textarea rows="10" cols="50" name="text"></textarea>
            </label>
        <br>
        <input type="submit" value="Process">
    </fieldset>
</form>
<hr>

declare(strict_types=1);
<?php
if (isset($_GET['text'])) {
    $str = $_GET['text'];
    $str = str_split($str);
    $html = "<h2>";
    foreach ($str as $char) {
        $color = "blue";
        if (ord($char) % 2 == 0) {
            $color = "red";
        }
        $html .= "<span style='color: $color'>$char</span>" . ' ';
    }
    $html .= "</h2>";
    echo $html;
}
?>

</body>
</html>
