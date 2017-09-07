<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Mapping Tool</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        table, td {
            border: 2px solid darkgray;
            background-color: lightgray;
        }
        td {
            padding:3px 5px 3px 5px;
        }
    </style>
</head>
<body>

<form method="get">
    <fieldset>
        <legend>Write your text below:</legend>
            <textarea name="text" rows="5" cols="50"></textarea>
            <br />
            <input type="submit" value="Send" />
    </fieldset>
<hr />
<br />

<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    $text = strtolower($text);
    $tokens = preg_split("/\W+/", $text, -1,PREG_SPLIT_NO_EMPTY);

    $wordCount = [];
    foreach ($tokens as $token) {
        if (!isset($wordCount[$token])){
            $wordCount[$token] = 0;
        }
        $wordCount[$token] += 1;
    }

    $html = "<table border='2'>";
    foreach ($wordCount as $key => $value) {
        $html .= "<tr><td>$key</td><td>$value</td></tr>";
    }
    $html .= "</table>";

    echo $html;
}
?>
</body>
</html>