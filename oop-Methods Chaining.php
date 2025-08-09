<?php
class Iphone {

    public $name;
    public $email;

    public function pressPower() {
        echo 'You Have Pressed The Power Button<br>';
        return $this;
    }

    public function bootPhone() {
        echo 'The Phone is Booting Now...<br>';
        return $this;
    }

    public function sayWelcome() {
        echo 'Welcome To Phone<br>';
        return $this;
    }

}
$iphone = new Iphone();
$iphone->pressPower()->bootPhone()->sayWelcome();
echo '<pre>';
print_r($iphone);
echo '</pre>';