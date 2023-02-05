<?php
    $list = [1, 0, -1, 5.5, -4.5, (-2) * 2, 0];
    $min = 1000000;
    foreach($list as $li){
        if($li < $min){
            $min = $li;
        }
    } 
    // min($list);
    // はや
    echo $min;

?>