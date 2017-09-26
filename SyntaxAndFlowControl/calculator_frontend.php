<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Render Students Info</title>
</head>
<body>

<form method = "get">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="sub">Subtract</option>
            <option value="none">I don't know what you wont?!?</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="text" name="num1">
    </div>
    <div>
        Number 2:
        <input type="text" name="num2">
    </div>

    <?php if(isset($result)): ?>
        <div>
            Result:
            <input type="text" disabled="disabled" readonly="readonly" value="<?= $result; ?>">
        </div>
    <?php endif; ?>
    <div>
        <input type="submit" name ="calculate" value="Calculate" />
    </div>
</form>

</body>
</html>