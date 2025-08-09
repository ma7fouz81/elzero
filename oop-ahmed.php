<?php
// // Apple.php
namespace Apple;
class create_Phone {
    public $name = "iPhone";
    public function say_hello(){
        echo 'Hello From Apple Company<br>';
    }
}

// Sony.php
namespace Sony;
class create_Phone {
    public $name = "Xperia";
    public function say_hello(){
        echo 'Hello From Sony Company<br>';
    }
}

// LG.php
namespace LG;
class create_Phone {
    public $name = "LG Velvet";
    public function say_hello(){
        echo 'Hello From LG Company<br>';
    }
}

echo "<h3>Testing Namespace Classes:</h3>";

$iphone = new \Apple\create_Phone();
$sony   = new \Sony\create_Phone();
$lg     = new \LG\create_Phone();

$iphone->say_hello();
$sony->say_hello();
$lg->say_hello();

echo "<pre>";
print_r($iphone);
print_r($sony);
print_r($lg);
echo "</pre>";
