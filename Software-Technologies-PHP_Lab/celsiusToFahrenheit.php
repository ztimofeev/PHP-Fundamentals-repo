<form style="background-color: #cae7ff; padding: 50px; font-style: italic">
    Celsius: <input type="number" name="celsius"/>
    <input type="submit" value="To Fahrenheit" />

    <?php
    function calculate ($celsius){
        return ($celsius * 9 / 5) + 32;
    }

    if (isset($_GET['celsius'])){
        $celsius = floatval($_GET['celsius']);
        $fahrenheit = calculate($celsius);
        echo "$celsius &deg;C = $fahrenheit &deg;F";
    }
    ?>

</form>

<?php $name = "John"; ?>
<?php if ($name == "John"): ?>
    <div style="background-color: green; width: 400px; color: whitesmoke; padding: 30px 30px; font-size: 30px; text-align: center">Hello John</div>
<?php else: ?>
    <div style="background-color: green; width: 400px; color: whitesmoke; padding: 30px 30px; font-size: 30px; text-align: center"">He is not John</div>
<?php endif;?>

<?php $arr = ['Soft', 'Uni', 122, 322.0258, true, 'Brothers'];
var_dump($arr);
?>

<?php
    $num = 100;
    echo var_dump($num);
    $num = $num . 'flower';
    echo var_dump($num);
?>

<ul>
    <?php
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0){
                $color = "green";
            } else {
                $color = "blue";
            }
            echo "<li style='color: $color'>$i</li>";
        }
    ?>
</ul>