<?php
abstract class MakeDevice{
    abstract public function test_performance();
    abstract public function verify_owner();
    abstract public function say_hello($n);
}

class iphone{
    public $name;
    public function test_performance(){
         echo 'performance test is good'.'<br>';
    }
    public function verify_owner(){
          echo 'owner is verifed'.'<br>';
    }
    public function say_hello($x){
        $this->name=$x;
        echo 'welcome '.$x.'<br>';
}
}

class ipad extends MakeDevice{
    // public $name;
        public function test_performance(){
        echo 'performance test is good'.'<br>';
    }
    public function verify_owner(){
        echo 'owner is verifed'.'<br>';
    }
    public function say_hello($y){
        $this->name=$y;
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
