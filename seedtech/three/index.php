<?php

    echo 'hello';

    function morning(){
    echo 'おはよう';
}



    function evening(){
        echo 'こんばんは';
    }

    echo evening();
    echo morning();

                    //   $word ＝　'こんにちは'
                    //   仮の変数を宣言すること
    function greeting($word, $word1){
        echo $word;
        echo $word1;
    }

    greeting('こんにちは', 'こんばんは');
    // greeting('謝謝');
    // ⇨ 関数に渡す値を引数（ひきすう）という


    function calc($word, $num){
        echo $word . 'の値段は' . $num * 1.1 . '円です';
        morning();
    }

    calc('みかん', 100);
    // calc('渋谷駅', 100000000);

    // 戻り値 return

    function name($word){
        return $word;
    }

    echo name('池見');

    // みかんの値段
    function calc1($num1){
        return $num1 * 1.1;
    }

    // りんごの値段
    function calc2($num2){
        return $num2 * 1.1;
    }

    echo calc1(200) + calc2(300);