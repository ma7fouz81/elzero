<?php
class main{
public $name;
public $email;

public function __construct($n,$e){
    $this->name=$n;
    $this->email=$e;
}
}
$main=new main('Ahmed','a@gmail.com');

// $copy = $main; //copy By Reference 
$copy = clone $main;
$main->name='Mahfouz';
$copy->name='saad';

echo '<pre>';
print_r($main);
echo '</pre>'; 

echo '<pre>';
print_r($copy);
echo '</pre>'; 
