<?php

// echo 'Hello';

class Human {
    public $name;

    function greeting($aisatsu){
        echo $this->name . 'からの' . $aisatsu;
    }
}

// インスタンス化　＝　クラスを使って実態をつくること
// $human = new Human();
// $human->greeting('こんにちは');
// $human->greeting('こんばんは');

$taro = new Human();
$taro->name = '太郎';
$taro->greeting('こんにちは');

// 花子さんからこんばんは
$hanako = new Human();
$hanako->name = '花子';
$hanako->greeting('こんばんは');