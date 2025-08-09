<?php

class AppleDevice{
    //properties

    public $ram='1GB';
    public $inches='4 inch';
    public $space='128';
    public $color='Red';

    //Methods

    public function doubleHomePressed(){
        echo 'You pressed on screen twice';
    }
}

$iphone6plus= new AppleDevice();
$iphone6plus->ram ='2GB';
$iphone6plus->inches ='5 inche';
$iphone6plus->space ='64 GB';
$iphone6plus->color ='silver';
$iphone6plus->doubleHomePressed();
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

$iphone7plus= new AppleDevice();
$iphone7plus->ram ='4GB';
$iphone7plus->inches ='6 inche';
$iphone7plus->space ='256 GB';
$iphone7plus->color ='Black';
echo '<pre>';
var_dump($iphone7plus);
echo '</pre>';

$iphone8plus= new AppleDevice(); // default falue in attributes
echo '<pre>';
var_dump($iphone8plus);
echo '</pre>';

