<?php
class Iphone{
public $name;

public function __construct($n){
    $this->name=$n;
    echo 'Hello '.$n;

}
}
$Iphone= new Iphone('Ahmed');
echo '<pre>';
print_r($Iphone);
echo '</pre>';
?>
<?php

class MyDevice {
    public function __construct() {
        echo "Device is turned on.<br>";
    }

    public function __destruct() {
        echo "Device is turned off.<br>";
    }

    public function useDevice() {
        echo "Using the device...<br>";
    }
}

$device = new MyDevice();
$device->useDevice();

?>

