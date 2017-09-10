<DOCTYPE html>
<html>
<head>

</head>

<body>
    <?php
    $towns = "";
    if (isset($_GET['towns'])){
        $towns = explode("\n", $_GET['towns']);
        $towns = array_map('trim', $towns);
        sort($towns, SORT_STRING);
        $towns = implode("\n", $towns);
    }
    ?>

    <style>
        body{
            background-color: antiquewhite;
        }
        #town {
            width: 136px;
        }
    </style>

    <form>
        <legend for="town">Set Towns you want:</legend>
        <textarea id="town" rows="10" name="towns"><?= $towns?></textarea>
        <br />
        <input type="submit" name="Sort" value="Submit"/>
    </form>
    <br />

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])){
        $numberOne = intval($_GET['num1']);
        $numberTwo = intval($_GET['num2']);
        $sum = $numberOne + $numberTwo;

        echo "$numberOne + $numberTwo = $sum";
    }
    ?>

    <form>
        Insert Number: <input type="text" name="num1" />
        <br />
        Insert Number: <input type="text" name="num2" />
        <br />
        <input type="submit" value="Get Sum" />
    </form>





</body>
</html>

