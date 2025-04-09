<?php

//1- Function
/*
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

// $group_of_skills = ["HTML", "CSS", "JS", "PHP"];

function get_data($name, $country = "Private", ...$skills) {
    echo "Hello $name Your Country Is $country <br>";
    foreach ($skills as $skill) :
        echo "-- $skill <br>";
    endforeach;
}

// get_data("Osama", "Egypt", ...$group_of_skills);
get_data("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);

echo '<br>';
echo "********************";
echo '<br>';

function say_hello_to($someone)
{
    return "Hello $someone";
}

echo say_hello_to("Ahmed");

echo '<br>';
echo "********************";
echo '<br>';

function say_hello($someone)
{
    return "Hello $someone";
}

$func="say_hello";
echo $func("Ahmed");

echo '<br>';
echo "********************";
echo '<br>';

function testing(){
    return "hello testing";
}
if(function_exists("testing")){
    echo testing();
}else{
    echo "function is not exist";
}

echo '<br>';
echo "********************";
echo '<br>';

echo strlen("Ahmed"); // 5
echo '<br>';
$_func="strlen";
echo $_func ("Ahmed");

echo '<br>';
echo "********************";
echo '<br>';

function add_five($number){
    $number+=5;
    return $number;
}
$num=15;
echo add_five($num);//20
echo '<br>';
echo $num; //15
echo '<br>';
echo add_five(15);//20

echo '<br>';
echo "********************";
echo '<br>';

function addfive(&$number){
    $number+=5;
    return $number;
}
$num=15;
echo addfive($num);//20
echo '<br>';
echo $num; //20

echo '<br>';
echo "********************";
echo '<br>';

$say_hello = function($name){
    return "Hello $name";
};

echo $say_hello("Ahmed");

echo '<br>';

$say_hola = function($name){
    return "hola $name";
};

echo $say_hola("Ahmed");

echo '<br>';

$msg="Hi";
$say_hi = function($name) use($msg){
    return "$msg $name";
};

echo $say_hi("Ahmed");

echo '<br>';

//Anonymous Function

$nums = [10, 20, 30, 40, 50];

function adding_five($item) {
    return $item + 5;
}

$nums_after_adding_five = array_map("adding_five", $nums);

echo '<pre>';
print_r($nums_after_adding_five);
echo '</pre>';

$nums_after_adding_ten = array_map(function($item) { return $item + 10;}, $nums);
   
echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';
*/
//////////////////////////////////////////////////////////////

//problem_1:
function greeting($name,$gender=""){
    if($gender=="Male"){
        echo "Hello Mr $name";
        echo '<br>';
    }elseif($gender=="Female"){
        echo "Hello Miss $name";
        echo '<br>';
    }else{
        echo "Hello $name";
    }
}


echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
echo '<br>';

//problem_2:

// Write Function Content Here

function getarguments(...$args) {
    foreach($args as $arg){
        echo " ".$arg;
    }
}

echo getarguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo getarguments("I", "Love", "PHP"); // I Love PHP

echo '<br>';

function get_arguments() {
    foreach(func_get_args() as $arg){
        echo " ".$arg;
    }
}

echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP

echo '<br>';

//problem_3:

function sum_all(...$nums){
    $result=0;
    foreach($nums as $num){
        if($num==5){
            continue;
        }elseif($num==10){
            $result+=20;
        }else{
            $result+=$num;
        }
    }
    return $result;
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo '<br>';
echo sum_all(5, 10, 5, 10); // 40

echo '<br>';
//problem_4:
  
function multiply(...$numbers){
    $result=1;
    foreach($numbers as $number){
        if(is_string($number)){
            continue;
        }if(is_float($number)){
            $number=(int)$number;
        }
            $result *=$number;
    }
    return $result;
}

// Needed Output
echo multiply(10, 20); // 200
echo '<br>';
echo multiply("A", 10, 30); // 300
echo '<br>';
echo multiply(100.5, 10, "B"); // 1000

echo '<br>';
//problem_5:

function check_status($a, $b, $c) {
    $name = "";
    $age = 0;
    $status = true;

    foreach ([$a, $b, $c] as $item) { 
        if (is_string($item)) {
            $name = $item;
        } elseif (is_int($item) || is_float($item)) {
            $age = $item;
        } elseif (is_bool($item)) {
            $status = $item;
        }
    }

    $availability = $status ? "You Are Available For Hire" : "You Are Not Available For Hire";
    return "Hello $name, Your Age Is $age, $availability";
}


echo check_status("Osama", 38, true); 
echo '<br>';
echo check_status(38, "Osama", true); 
echo '<br>';
echo check_status(true, 38, "Osama"); 
echo '<br>';
echo check_status(false, "Osama", 38);

echo '<br>';
//problem_6:

function calculate($num1, $num2, $operation = "add"){
    if($operation=="a" ||$operation=="add"){
        return $num1 + $num2;
    }elseif($operation=="s" ||$operation=="subtract"){
        return $num1 - $num2;
    }elseif($operation=="m" ||$operation=="multiply"){
        return $num1 * $num2;
    }else{
        return $num1 + $num2;
    }
}

// Needed Output
echo calculate(10, 20); // 30
echo '<br>';
echo calculate(10, 20, "a"); // 30
echo '<br>';
echo calculate(10, 20, "s"); // -10
echo '<br>';
echo calculate(10, 20, "subtract"); // -10
echo '<br>';
echo calculate(10, 20, "multiply"); // 200
echo '<br>';
echo calculate(10, 20, "m"); // 200

echo '<br>';
//problem_7:


$nums = [10, 20, 30, 40, 50];

function adding_five($item) {
    return $item + 5;
}

$nums_after_adding_five = array_map("adding_five", $nums);

echo '<pre>';
print_r($nums_after_adding_five);
echo '</pre>';

$nums_after_adding_ten = array_map(function($item) { return $item + 10;}, $nums);
   
echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';








