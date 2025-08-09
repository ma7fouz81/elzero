<?php
class iphone{
    public $name;
    public $ram;
    private $coloring;

    public function __get($prop){
        echo 'This property ['.$prop.'] is not found';
    }
}
$iphone=new iphone();
echo $iphone->coloring;
echo '<pre>';
print_r($iphone);
echo '</pre>'; 
?>

<?php
class sony{
    public $name;
    public $ram;
    private $coloring;

    public function __set($prop,$val){
        echo 'This property ['.$prop.'] is not found<br>';
        echo 'And you cannt assign this value ['.$val.'] ';
    }
}
$sony=new sony();
$sony->coloring='Red';
echo '<pre>';
print_r($sony);
echo '</pre>'; 
?>
