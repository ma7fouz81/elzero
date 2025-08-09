<!-- self vs $this

self:
- Refer to Current Class
- Access Static Members
- Not Use ($) Because its Not Represent a Variable But Present Class Construction

$this:
- Refer to Current Object
- Access Non Static Members
- Use ($) Because It Represent a Variable -->

<?php

class AppleDevice{
    public $ownerName;
    const OWNERNAME=5;
    public function getOwnerName(){
        if(strlen($this->ownerName) < self::OWNERNAME){
            echo 'owner name cant be less than '.self::OWNERNAME.' characters';
        }
        else{
            echo 'your name has been set';
        }
    }
}

$iphone=new AppleDevice();
$iphone->getOwnerName='Ahmed';
$iphone->getOwnerName();
echo '<br>';
echo $iphone::OWNERNAME;
echo '<br>';
echo AppleDevice::OWNERNAME;
echo '<pre>';
var_dump($iphone);
echo '</pre>';
