<?php

class Robot {
    private $name;
    private $food;
    function __construct(){
        $this->name = 'ドラえもん';
        $this->food = 'どら焼き';
    }

    private function talk(){
        echo 'こんにちは。僕の名前は' . $this->name . 'です。';
    }

    private function eat(){
        echo '好きな食べ物は' . $this->food . 'です。';
    }

    public function greeting(){
        $this->talk();
        $this->eat();
    }
    public function setName($namae){
        $this->name = $namae;
    }
    public function setFood($tabemono){
        $this->food = $tabemono;
    }
    public function getName(){
        return $this->name;
    }
    public function getFood(){
        return $this->food;
    }
}

$robot = new Robot();
$robot->setName('たろう');
$robot->setFood('ハンバーガー');
$robot->greeting();
echo $robot->getName();
echo $robot->getFood();