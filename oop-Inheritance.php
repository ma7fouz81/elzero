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

class sony extends AppleDevice
{
    public $camera='25MB';
}

$iphone6plus= new AppleDevice();
$iphone6plus->change_spec('2GB','5 inche','64 GB','silver');
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';

$sony =new sony();
$sony->change_spec('2GB','5 inche','64 GB','silver');
echo '<pre>';
var_dump($sony);
echo '</pre>';