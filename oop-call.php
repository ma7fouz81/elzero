<?php

class Iphone{
    public $name; 
    public $ram; 

    public function __call($method,$params){
        echo 'The Method ['.$method. '] is not found<br>';
        print_r($params);
    }
}
$Iphone=new Iphone();
$Iphone->say_hello("Ahmed",'2GB');
echo '<pre>';
print_r($Iphone);
echo '</pre>';
echo '-------------------<br>';
?>
<?php

class iphone {
    public $name; 
    public $ram; 

    public function __call($method, $params) {
        echo 'The Method [' . $method . '] is not found<br>';
        foreach ($params as $index => $param) {
            echo "Param " . ($index + 1) . ": " . $param . "<br>";
        }
    }
}

$iphone = new iphone();
$iphone->say_hello("Ahmed", '2GB');

echo '<pre>';
print_r($Iphone);
echo '</pre>';
