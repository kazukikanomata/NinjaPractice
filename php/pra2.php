<?php
// \n→ これが改行
// print もいいね

for ($val = 1; $val < 16; $val++){
    echo $val. "<br>";
}

// 別解
foreach(range(1,15) as $i){
    echo $i. '<br>';
}
?>