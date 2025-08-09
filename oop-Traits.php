<?php
trait finger_print_feature{
    public function finger_print(){
        echo 'This phone has finger print feature<br>';
    }
}
trait face_detect_feature{
    public function face_detect(){
        echo 'This phone has face detect feature<br>';
    }
}
trait three_dimentional_feature{
    public function three_dimentional(){
        echo 'This phone has three dimentional feature<br>';
    }
}

class iphone{
    use finger_print_feature;
    use face_detect_feature;
    use three_dimentional_feature;
    public function say_hello(){
        echo 'Hello from iphone<br>';
    }
}
class sony{
    use finger_print_feature;
    public function say_hello(){
        echo 'Hello from sony<br>';
    }
}
class Nokia{
    public function say_hello(){
        echo 'Hello from Nokia<br>';
    }
}

$iphone = new iphone();
$iphone->finger_print();
$iphone->face_detect();
$iphone->three_dimentional();
$iphone->say_hello();
echo '<pre>';
print_r($iphone);
echo '</pre>';

$sony = new sony();
$sony->finger_print();
$sony->say_hello();
echo '<pre>';
print_r($sony);
echo '</pre>';

$Nokia = new Nokia();
$Nokia->say_hello();
echo '<pre>';
print_r($Nokia);
echo '</pre>';
?>
<!-- ////////////// -->

<?php
trait finger_print_feature{
    public function finger_print(){
        echo 'This phone has finger print feature<br>';
        return $this;
    }
}
trait face_detect_feature{
    public function face_detect(){
        echo 'This phone has face detect feature<br>';
        return $this;
    }
}
trait three_dimentional_feature{
    public function three_dimentional(){
        echo 'This phone has three dimentional feature<br>';
        return $this;
    }
}

trait AllFeature{
    use finger_print_feature ,face_detect_feature ,three_dimentional_feature;
}

class iphone{
    use AllFeature;
    public function say_hello(){
        echo 'Hello from iphone<br>';
        return $this;
    }
}
class sony{
    use finger_print_feature;
    public function say_hello(){
        echo 'Hello from sony<br>';
        return $this;
    }
}
class Nokia{
    public function say_hello(){
        echo 'Hello from Nokia<br>';
        return $this;
    }
}

$iphone = new iphone();
$iphone->finger_print()->face_detect()->three_dimentional()->say_hello();
echo '<pre>';
print_r($iphone);
echo '</pre>';

$sony = new sony();
$sony->finger_print()->say_hello();
echo '<pre>';
print_r($sony);
echo '</pre>';

$Nokia = new Nokia();
$Nokia->say_hello();
echo '<pre>';
print_r($Nokia);
echo '</pre>';
?>
<!-- ////////////// -->
<?php
trait MyFeature{
    public function say_hello(){
    echo 'Hello from MyFeature <br>';
    }
}

class MyDevice{
     public function say_hello(){
    echo 'Hello from MyDevice <br>';
    }
}

class Iphone extends MyDevice {
    use MyFeature;
}
$Iphone = new Iphone();
$Iphone->say_hello();
echo '<pre>';
print_r($Iphone);
echo '</pre>';
?>
<!-- ////////////// -->

<?php
trait MyFeature1{
    public function feature(){
    echo 'Hello from MyFeature one <br>';
    }
}

trait MyFeature2{
    public function feature(){
    echo 'Hello from MyFeature two <br>';
    }
}
class Iphone {
    use MyFeature1, MyFeature2 {
        // [Trait Name] [::] [Method Name] [Keyword as] [New Name]
        MyFeature2::feature as osamafeat;

        // [Trait Name] [::] [Method Name] [Keyword insteadof] [Other Method Name]
        MyFeature1::feature insteadof MyFeature2;
    }
}

$iphone = new Iphone();
$iphone->feature();
$iphone->osamafeat();
echo '<pre>';
print_r($iphone);
echo '</pre>';
?>
