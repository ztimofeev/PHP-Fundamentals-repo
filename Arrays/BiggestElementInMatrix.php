<form method="get">
    Elements: <input type="text", name="elements">
    Choose Matrix Collumns Count: <input type="text", name="colls">
    <input type="submit">
</form>


<?php
if (isset($_GET['elements'])){
    $input = explode(" ", $_GET['elements']);

    if (isset($_GET['colls'])){
        $collsCount = intval($_GET['colls']);
    }
    $rowsCount = ceil(count($input) / $collsCount);
    $indexCount = 0;
    $matrixData = [];
    for ($row = 0; $row < $rowsCount; $row++) {
        $matrixData[$row] = [];
        for ($coll = 0; $coll < $collsCount; $coll++) {
            $matrixData[$row][$coll] = $input[$indexCount];
            $indexCount++;
            if ($indexCount == count($input)){
                break 2;
            }
        }
    }


    echo "<pre>";
    print_r($matrixData);
    echo "</pre>";

    $maxValue = $matrixData[0][0];
    $minValue = $matrixData[0][0];
    foreach ($matrixData as $row){
        foreach ($row as $coll){
            if ($coll > $maxValue){
                $maxValue = $coll;
            }
            if ($coll < $minValue){
                $minValue = $coll;
            }
        }
    }
    echo "Max value: $maxValue" . "<br>";
    echo "Min value: $minValue";
}