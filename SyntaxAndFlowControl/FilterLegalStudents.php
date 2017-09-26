<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Render Students Info</title>
</head>
<body>
<form method = "get">
    <div>
        Delimeter:
        <select name="delimeter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="name"/>
    </div>
    <div>
        Ages:
        <input type="text" name="age"/>
    </div>
    <div>
        <input type="submit" name="submit" value="Filter!"/>
    </div>

    <?php

    $html = '<table border="1" cellpadding="0"><thead><tr><th>Name</th><th>Age</th></tr></thead><tbody>';

    if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['delimeter'])){
        $delimeter = $_GET['delimeter'];
        $name = explode($delimeter, $_GET['name']);
        $age = explode($delimeter, $_GET['age']);

        for ($i = 0; $i < count($name); $i++) {
            if ($age[$i] > 18) {
                $html .= '<tr><td>' . $name[$i] . '</td><td>' . $age[$i] . '</td></tr>';
            }
        }
        $html .= '</tbody></table>';
    }

    if (isset($_GET['submit'])){
        echo $html;
    }
    ?>

</form>

</body>
</html>