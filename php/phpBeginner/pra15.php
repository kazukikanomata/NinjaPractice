<?php

// PHPは整数の割り算の結果は浮動小数点となる。floorで小数点以下を切り捨てよう。
// intdivを使ってもOKだ。
    $quotient = floor(20 / 7);
    $remainder = 20 % 7;
    // echo "商:{$quotient} 余り:{$remainder}"
    echo "商:" . $quotient . "" . "余り:" . $remainder; 
?>