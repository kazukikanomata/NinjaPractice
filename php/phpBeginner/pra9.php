<?php
// 結構ヘビーな内容
    $text = '{"text1":"忍者", "text2":"CODE","text3":"無料問題集" }';
    // jsonを配列にしていく。
    // keyとvalueでループ処理
    foreach(json_decode($text) as $key => $value){
        echo $key . ":" . $value . '<br>'; 
    }
?>