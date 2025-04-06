<?php

//1- Function

function Hello($name){
    echo "Hello Mr $name <br>";
}

Hello("Ahmed");
Hello("Mohammed");
Hello("Ali");

echo "********************";
echo '<br>';

function deep_freezer($Item){
    if($Item=="water"){
        echo "make it ice<br>";
    }
    elseif($Item=="coca cola"){
        echo "make it cold <br>";
    }
    elseif($Item=="fruit"){
        echo "make it fresh <br>";
    }
    else{
        echo "Unknown item <br>";
    }
}

deep_freezer("water");
deep_freezer("coca cola");
deep_freezer("fruit");
deep_freezer("wood");

echo "********************";
echo '<br>';

$prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

function get_number($num_one, $num_two) {
    return $num_one + $num_two;
    echo "Will Not Echo Anything"; // مش هيتطبع 
}

$prize_number=get_number(1,2);
var_dump($prize_number); //int(3)

echo "********************";
echo '<br>';

function get_data($name,$country,$age,$adress){
    $line_one="My Name Is $name and My Country Is $country <br>";
    $line_two="My age Is $age and My adress Is $adress <br>";
    return $line_one . $line_two;
}

echo get_data ("Ahmed","Egypt",20,"cairo");

echo "********************";
echo '<br>';

function get_info($name,$country,$age,$adress="cairo"){
    $line_one="My Name Is $name and My Country Is $country <br>";
    $line_two="My age Is $age and My adress Is $adress <br>";
    return $line_one . $line_two;
}

echo get_info ("Ahmed","Egypt",20);

echo "********************";
echo '<br>';

function info($name="private",$country="private",$age="private",$address="private"){
    $line_one="My Name Is $name and My Country Is $country <br>";
    $line_two="My age Is $age and My adress Is $address <br>";
    return $line_one . $line_two;
}

echo info (age:19 , address: "cairo");

echo "********************";
echo '<br>';

function calculate(){
    echo "Number of arguments is  ". func_num_args();
    echo "<br>Arguments Index Number is  ". func_get_arg(3);
    echo '<pre>';
    print_r(func_get_args());
    echo '</pre>';

    $result = 0;
    foreach (func_get_args() as $arg):
        $result += $arg;
    endforeach;
    echo $result;
}

calculate(10, 20, 30, 40, 50);

echo '<br>';
echo "********************";
echo '<br>';

function calc(...$nums){
    echo "Number of arguments is  ". func_num_args();
    echo "<br>Arguments Index Number is  ". func_get_arg(3);
    echo '<pre>';
    print_r($nums);
    echo '</pre>';
    $results = 0;
    foreach ($nums as $num):
        $results += $num;
    endforeach;
    echo $results;
}

calc(10, 20, 30, 40, 50);

echo '<br>';
echo "********************";
echo '<br>';
















