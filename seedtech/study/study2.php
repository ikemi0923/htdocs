<?php
    $greeting = 'hello';
    echo $greeting;

    // 変数は一言いうと、『箱』
    //     ⇨１つのものを格納

    // 配列は一言でいうと『タンス』
    //     ⇨複数のものを格納

    $fruits = array('ばなな','りんご','ぶどう');
    // 配列自体はechoできない
    // 配列（プログラミング）は0番スタート
    echo $fruits[0];

    $fruits = ['パイナップル','メロン'];

    // 連想配列
    // タンスに鍵をかけましょう
    // key=>value
    $alphabet = ['a'=>'A', 'b'=>'B'];
    echo $alphabet['a'];

    // 繰り返し文
    // foreach文

    $families = ['お父さん', 'お母さん', '自分'];
    foreach($families as $family){
         echo $family . '<br>';
    }

    // 配列とforeach文はセット

    // foreach ⇨ 繰り返し文をそれぞれ