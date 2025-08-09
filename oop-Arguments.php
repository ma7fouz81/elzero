<?php

class AppleDevice{
    //properties

    public $ram;
    public $inches;
    public $space;
    public $color;

    //Methods

    public function change_spec($ra,$in,$sp,$co){
       $this->ram=$ra;
       $this->inches=$in;
       $this->space=$sp;
       $this->color=$co;
    }
}

$iphone6plus= new AppleDevice();
$iphone6plus->change_spec('2GB','5 inche','64 GB','silver');
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

$iphone7plus= new AppleDevice();
$iphone7plus->change_spec('3GB','6 inche','128 GB','Gold');
echo '<pre>';
var_dump($iphone7plus);
echo '</pre>';


