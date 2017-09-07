<!DOCTYPE html>
<html>
<head>
    <title>Word Filter</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="get">
    Text: <input type="text" name="text">
    <br>
    Banwords: <input type="text" name="banlist">
    <br>
    <input type="submit" value="Replace">
</form>

<?php
if (isset($_GET['text']) && isset($_GET['banlist'])){
    $text = $_GET['text'];
    $banlist = $_GET['banlist'];

    $banlist = explode(', ', $banlist);

    foreach ($banlist as $banword) {
        $asterix = '';
        for ($i = 0; $i < strlen($banword); $i++) {
            $asterix .= '*';
        }

        $text = str_replace($banword, $asterix, $text);
    }

    echo $text;
}
?>

</body>
</html>
