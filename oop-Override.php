<?php

class AppleDevice {
    // Properties
    public $ram;
    public $inches;
    public $space;
    public $color;
    public $name;

    // Methods
    public function change_spec($ra, $in, $sp, $co) {
        $this->ram = $ra;
        $this->inches = $in;
        $this->space = $sp;
        $this->color = $co;
    }

    final public function say_hello($n = null) {
        $this->name = $n;
        echo 'Welcome to ' . $n . '<br>';
    }
}

class sony extends AppleDevice {
    public $camera = '25MB';

    // public function say_hello($n = null) {
    //     $this->name = $n;
    //     echo 'Welcome to ' . $n . ', your phone RAM is ' . $this->ram . '<br>';
    // }
}

$iphone6plus = new AppleDevice();
$iphone6plus->change_spec('2GB', '5 inch', '64 GB', 'silver');
$iphone6plus->say_hello('iphone');
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

$sony = new sony();
$sony->change_spec('2GB', '5 inch', '64 GB', 'silver');
$sony->say_hello('sony');
echo '<pre>';
var_dump($sony);
echo '</pre>';
