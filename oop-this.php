<?php

class AppleDevice{
    //properties

    public $ram='1GB';
    public $inches='4 inch';
    public $space='128';
    public $color='Red';
    public $ownername;

    //Methods

    public function getspecification(){
        echo 'This Iphone Ram is '.$this->ram.'<br>';
        echo 'This Iphone Ram is '.$this->inches.'<br>';
        echo 'This Iphone Ram is '.$this->space.'<br>';
        echo 'This Iphone Ram is '.$this->color.'<br>';
    }


    //    public function getOwnerName(){
    //     if(strlen($this->ownername) <3){
    //         echo 'Error, Owner Name is less than 3 character'.'<br>';
    //     }
    //     else{
    //         echo 'Greet!';
    //     }
    // }

           public function getOwnerName($name){
        if(strlen($name) >3){
            echo 'Error, Owner Name is less than 3 character'.'<br>';
        }
        else{
            echo 'Greet!';
        }
    }
}

$iphone6plus= new AppleDevice();
$iphone6plus->ram ='2GB';
$iphone6plus->inches ='5 inche';
$iphone6plus->space ='64 GB';
$iphone6plus->color ='silver';
// $iphone6plus->getspecification();
// $iphone6plus->ownername='Ahmed';
$iphone6plus->getOwnerName("os");
echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';