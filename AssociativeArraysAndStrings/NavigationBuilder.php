<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navigation Builder</title>
</head>
<body>
<div>
    <form method="get">
        <div>
            Categories: <input type="text" name="categories"/>
        </div>
        <div>
            Tags: <input type="text" name="tags"/>
        </div>
        <div>
            Months: <input type="text" name="months"/>
        </div>
        <div>
            <input type="submit" value="Generate"/>
        </div>
    </form>
</div>

<?php

if (isset($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months'])) {
    $cat = $_GET['categories'];
    $tag = $_GET['tags'];
    $months = $_GET['months'];

    $cat = explode(', ', $cat);
    $tag = explode(', ', $tag);
    $months = explode(', ', $months);

    $html = "<div><h2>Categories</h2><ul>";
    for ($i = 0; $i < count($cat); $i++) {
        $html .= "<li>$cat[$i]</li>";
    }

    $html .= "</ul><h2>Tags</h2><ul>";
    for ($i = 0; $i < count($tag); $i++) {
        $html .= "<li>$tag[$i]</li>";
    }

    $html .= "</ul><h2>Months</h2><ul>";
    for ($i = 0; $i < count($months); $i++) {
        $html .= "<li>$months[$i]</li>";
    }
    $html .= "</ul></div>";

    echo $html;
}


?>

</body>
</html>

