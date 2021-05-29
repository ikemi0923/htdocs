<?php

$name = "Rob";

echo $name;

echo "<p>私の名前は、".$name."です。</p>";

echo "<p>私の名前は ${name}です。</p>";

$mynumber = 45;

echo "<p>番号　${mynumber}</p>";

$calc = $mynumber * 31 / 97 + 4;

echo "<p>計算結果 ${calc}</p>";

$mybool = true;

echo "<p>現在の状態は、 ${mybool}です。</p>";

$mybool = false;

echo "<p>現在の状態は、 ${mybool}です。</p>";
