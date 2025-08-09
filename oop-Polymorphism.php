 <?php
interface Mobile{
    public function pressHome();
}

class Iphone implements Mobile{
    public $name;

    public function pressHome(){
        echo 'You will see opend Apps'.'<br>';
    }
}

class Sony implements Mobile{
    public $name;

    public function pressHome(){
        echo 'You will clase all Apps'.'<br>';
    }
}

$Iphone=new Iphone();
$Iphone->pressHome();
echo '<pre>';
print_r($Iphone);
echo '</pre>';
$Sony=new Sony();
$Sony->pressHome();
echo '<pre>';
print_r($Sony);
echo '</pre>'; 
echo'---------------------<br>';
?>
<?php
interface DBMS{
    public function getuser();
    public function getArtical();
    public function showStatus();
}
class MySQL implements DBMS{
    public function getuser(){
        echo 'Select * from user'.'<br>';
    }
    public function getArtical(){
         echo 'Select * from Artical'.'<br>';
    }
    public function showStatus(){
         echo 'Select * from Status'.'<br>';
    }
}
$row= new MySQL();
$row->getuser();
$row->getArtical();
$row->showStatus();
echo '<pre>';
print_r($row);
echo '</pre>';
?>