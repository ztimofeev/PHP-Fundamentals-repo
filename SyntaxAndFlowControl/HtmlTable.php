<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Info</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 3px 5px;
            font-family: "Arial Rounded MT Bold", serif;
        }
        .left {
            background-color: orange;
            text-align: left;
        }
        .right{
            text-align: right;
        }
    </style>


</head>
<body>
<form method="get">
    <fieldset>
        <legend>Persons Info</legend>
        Name: <input type="text" name="name" />
        <br />
        Phone: <input type="text" name="phone" />
        <br />
        Age: <input type="text" name="age" />
        <br />
        Address: <input type="text" name="address" />
        <br />
        <input type="submit" value="Send Data">
    </fieldset>

</form>
<hr>

<?php
if (isset($_GET['name']) && isset($_GET['phone']) && isset($_GET['age']) && isset($_GET['address'])) {
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $age = $_GET['age'];
    $address = $_GET['address'];

    $html = "<table><tr><td class='left'>Name</td><td class='right'>" . $name . "</td></tr>
                    <tr><td class='left'>Phone number</td><td class='right'>" . $phone . "</td></tr>
                    <tr><td class='left'>Age</td><td class='right'>" . $age . "</td></tr>
                    <tr><td class='left'>Address</td><td class='right'>" . $address . "</td></tr>
            </table>";

    echo $html;
}

?>
</body>
</html>