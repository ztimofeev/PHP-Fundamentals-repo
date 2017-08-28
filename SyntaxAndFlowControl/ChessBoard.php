<style>
    div {
        width: 60px;
        height: 60px;
        display: inline-block;
        border: 1px solid black
    }
</style>

<?php
for ($i = 0; $i < 8; $i++){
    for ($j = 0; $j < 8; $j++){
        if ($i % 2 == 0){
            if ($j % 2 == 0){
                $color = 'black';
            } else {
                $color = 'white';
            }
        } else {
            if ($j % 2 == 0){
                $color = 'white';
            } else {
                $color = 'black';
            }
        }

        echo "<div style='background-color: $color'></div>";
    }
    echo "<br />";
}