<?php
$list = [
    1 => '忍者',
    2 => ['CO', 'DE'],
    3 => '{"text1":"無", "text2":"料"}',
    4 => [
      401 => '集',
      402 => '人参',
      403 => '問題',
    ],
];

$answer = "";

foreach($list as $key => $value){
    if ($key == 1){
        $answer = $answer . $value;
    }
    if ($key == 2){
        $answer = $answer . implode("", $value);
    }
    if ($key == 3){
        // jsonにして配列にして、$textをループする
        foreach(json_decode($value) as $text){
            $answer = $answer . $text;
        }
    }
    if ($key == 4){
        // $ninja = $list["忍者"];
        $answer = $answer . $value[401] . $value[403];
    }
}
echo $answer;

