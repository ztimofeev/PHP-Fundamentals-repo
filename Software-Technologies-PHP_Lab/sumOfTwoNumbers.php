
<form>
    <div>First Number: </div>
    <input type="text" name="num1" />
    <div>Second Number: </div>
    <input type="text" name="num2" />
    <div><input type="submit" value="Go!!!"/></div>
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])){
    $firstNum = intval($_GET['num1']);
    $secondNum = intval($_GET['num2']);
    $sum = $firstNum + $secondNum;
    echo "$firstNum + $secondNum = $sum";
}
?>
