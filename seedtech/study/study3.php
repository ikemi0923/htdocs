<?php

    echo 'hello';

    function morning(){
        echo 'おはよう';
    }


    function evening(){
        echo 'こんばんは';
    }

    evening();
    morning();

                  // $word = 'こんにちは'
                  // $word1 = 'こんばんは'
                  // 仮の変数を宣言すること
    function greeting($word, $word1){
        echo $word;
        echo $word1;
    }

    greeting('こんにちは', 'こんばんは');
    // 関数に渡す値を引数という

    function calc($word, $num){
        echo $word. 'の値段は'. $num * 1.1. '円です。';
        morning();
    }

    calc('みかん', 100);