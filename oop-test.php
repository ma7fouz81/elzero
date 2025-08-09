<?php
class AppleDevice{
    private $lock;

    public function change_lock($lo){
        $this->lock=sha1($lo);
    }
}
$iphone6plus= new AppleDevice();
// $iphone6plus->lock='afl,sh'; => Error ,Cannot access private property
$iphone6plus->change_lock('Ahmed@1234');

echo '<pre>';
var_dump($iphone6plus);
echo '</pre>';