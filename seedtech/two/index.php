<?php
    $greeting = 'hello';
    echo $greeting;

    // 変数は一言で言うと『箱』
    // 　⇨　１つのものを格納

    // 配列は一言で言うと『タンス』
    // 　⇨　複数のものを格納

    $fruits = array('バナナ','リンゴ','ブドウ');
    // 配列自体はechoできない
    // 配列は０番スタート
    echo $fruits[1];

    $fruits = ['パイナップル','メロン'];

    // 連想配列
    // タンスに鍵をかけましょう
    // key=value
    $alphabet = ['a'=>'A','b'=>'B'];
    echo $alphabet['a'];

    // 繰り返し文
    // foreach文
    $family = ['お父さん','お母さん','自分'];
    foreach($family as $member){
        echo $member . '<br>';
    }

    // 配列とforeach文はセット

    // foreach文　繰り返し文をそれぞれ