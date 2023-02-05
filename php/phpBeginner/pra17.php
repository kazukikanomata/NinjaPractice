<?php
    $x = 6 - 8;
    $y = -4 + 5;

    if ($x > 0){
        echo "東";
    } else {
        echo "西";
    }
    echo abs($x) . "km";
    if ($y > 0){
        echo "北";
    } else {
        echo "南";
    }
    echo abs($y) . "km";
?>