<style>
    div {
        display: inline-block;
        width: 150px;
        margin: 2px;
        font-style: italic;
        padding: 5px;
    }
</style>

<?php
for ($red = 0; $red <= 255; $red += 51){
    for ($green = 0; $green <= 255; $green += 51){
        for ($blue = 0; $blue <= 255; $blue += 51){
            $color = "rgb($red, $green, $blue)";
            echo "<div style='background: $color'>
                      <strong>grb($red, $green, $blue)</strong>
                  </div>";
        }
    }
}
?>