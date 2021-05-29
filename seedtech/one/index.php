<?php
    // 文字列
    // 文字列は文字
    // 文字列は''で囲う
    // echo ⇨ 出力せよという命令

    // 文字列の連結 ⇨ .で繋げる
    echo '池見';
    echo '洋'.'<br>';
    echo 'Hello World!'.'<br>';
    echo '池見'.'洋'.'<br>';


    // 四則演算
    echo 3 + 2 .'<br>';
    echo 3 - 1 .'<br>';
    echo 3 * 2 .'<br>';
    echo 6 / 3 .'<br>';
    echo 4 % 3 .'<br>';
    // FizzBuzz問題
    // echo '3 + 2';

    // 変数　⇨　値を格納する箱
    // 　nameという箱に池見という文字列を格納
    $name = '池見';
    $name = '洋';
    // varchar
    echo $name .'<br>';

    $calc = 300;
    $sum = $calc * $calc;
    echo $sum .'<br>';

    // 条件文
    // if文
    // if(条件を記載){
    //     条件がパスされた時に行いたいことを記載
    // }
    $var = 8;
    if($var > 10){
      echo '10より大きい！';
    } else{
      // if文の条件がパスされなかった場合の処理
      echo '10より小さい！';
    }

    $var = 50;
    if($var >= 20 && $var < 30){
        echo '20代です';
    }elseif($var >= 30 && $var < 40){
        echo '30代です';
    } else{
        echo 'それ以外';
    }

    // 繰り返し文
    // for(初期化式（初期値）; 条件式（どこからどこまで）; 変化式（どのように）;){
    //     条件をパス下場合の処理
    // }

    // $i = 0
    // $i = $i + 1;
    for($i = 0; $i < 10; $i++){
        echo $i .'<br>';
    }
?>