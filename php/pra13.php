<?php
    $list = [-1, 0, 1, "2", "3A", 4.1, [5], "1,000", 1001];
    // 数字判定
    foreach($list as $li){
        if (is_numeric($li)){
            echo $li . "<br>\n";
        }
    }
?>