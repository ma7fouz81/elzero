<?php
abstract class MakeDevice{
    
    abstract public function test_performance();
    abstract public function verify_owner();
    abstract public function say_hello($n);
}

class iphone extends MakeDevice{
    public $owner;
    public function test_performance(){
        echo 'performance test is good'.'<br>';
    }
    public function verify_owner(){
        echo 'owner is verifed'.'<br>';
    }
    public function say_hello($x){
        $this->owner=$x;
        echo 'welcome '.$x.'<br>';
    }
}

class ipad extends MakeDevice{
    public $owner;
        public function test_performance(){
        echo 'performance test is good'.'<br>';
    }
    public function verify_owner(){
        echo 'owner is verifed'.'<br>';
    }
    public function say_hello($y){
        $this->owner=$y;
        echo 'welcome '.$y.'<br>';
    }
}

$iphone=new iphone();
$iphone->say_hello('Ahmed');
echo '<pre>';
print_r($iphone);
echo '</pre>';

$ipad=new ipad();
$ipad->say_hello('Ali');
echo '<pre>';
print_r($ipad);
echo '</pre>';
