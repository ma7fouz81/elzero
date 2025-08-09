<?php
class Iphone{
    public static $name='Ahmed';
    public static $ram='2GB';
    public static function say_hello(){
        return 'Hello';
    }
}
echo Iphone::$name.'<br>';
echo Iphone::$ram.'<br>';
echo Iphone::say_hello().'<br>';