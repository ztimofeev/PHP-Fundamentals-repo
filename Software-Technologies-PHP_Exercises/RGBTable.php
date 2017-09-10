<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        td{
            width: 50px;
            height: 50px;
            border: 1px solid black;
            font-weight: bold;
            padding-left: 3px;
        }
    </style>
</head>
<body>

<?php
echo "<table>
    <tr>
       <td>Red</td><td>Green</td><td>Blue</td>";

for ($i = 51; $i <= 255; $i += 51){

    echo "<tr><td style='background-color: rgb($i, 0, 0)'></td><td style='background-color: rgb(0, $i, 0)'></td><td style='background-color: rgb(0, 0, $i)'></td></tr>";
}
echo "</tr> 
</table>";
?>

</body>
</html>