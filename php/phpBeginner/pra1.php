<?php

// 1： 型を宣言する
class NINJA {
    public $title;
    public $sub_title;

    // 3: インスタンス作成時に実行される関数
    public function __construct($ninja_title, $ninja_sub_title){
        $this->title = $ninja_title;
        $this->sub_title = $ninja_sub_title;
    }

    public function Hello(){
        echo $this->title . 'を' . $this->sub_title;
    }
}


// 2: インスタンスを作成する
$ninja = new NINJA("PHPの問題集', 'スタート！");

// 4:　呼び出し
// echo $ninja->title;
// echo $ninja->sub_title;
$ninja->Hello();