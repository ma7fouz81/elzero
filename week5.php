<?php

//1- If, Elseif, Else - Basics

// if(10 < 5)
// {
//     echo "First Condition is True";
// }
// elseif(10 > 5)
// {
//     echo "Second Condition is True";
// }
// else{
//     echo "False";
// }

// echo '<br>';

// $Page="Home";

// if($Page=="Home")
// {
//     echo "Hello, this is the page";
// }

// echo '<br>';

// $lang="Arabic";
// if($lang=="Arabic")
// {
//     echo "مرحبا";
// }
// elseif ($lang=="English")
// {
//     echo "Hello";
// }
// else{
//     echo "UnKnown language";
// }

// echo '<br>';

// $title="";
// if($title == "")
// {
//     echo "Unknown title";
// }
// else{
//     echo $title;
// }

// echo '<br>';

//2- Nested if

// 1-first scenario
// $name = "Ahmed";
// $is_student = true;
// $is_orphan = true;
// $country = "Egypt";
// $country_discount = 50;
// $price = 100;
// $student_discount = 10;
// $orphan_discount = 15;

// //ifهنا هيطبع رسايل ال
// if($country=="Egypt"){
//     if($is_student==true){
//         echo "Hello $name";
//         echo '<br>';
//         echo "Price is $price";
//         echo '<br>';
//         echo "student_discount is".$price-$student_discount-$country_discount; // 40
//     }
// }
// else{
//     echo "Hello $name";
//     echo '<br>';
//     echo "the final Price is $price";
// }

// echo '<br>';

// // elseهنا هيطبع رسايل ال
// if($country=="KSA"){
//     if($is_student==true){
//         echo "Hello $name";
//         echo '<br>';
//         echo "Price is $price";
//         echo '<br>';
//         echo "student_discount is".$price-$student_discount;
//     }
// }
// else{
//     echo "Hello $name";
//     echo '<br>';
//     echo "the final Price is $price"; //100
// }

// echo '<br>';
// echo "********************";
// echo '<br>';

//2-second scenario
// $name = "Ahmed";
// $is_student = false;
// $is_orphan = false;
// $country = "Egypt";
// $country_discount = 50;
// $price = 100;
// $student_discount = 10;
// $orphan_discount = 15;

//ifهنا هيطبع رسايل ال
// if($country=="Egypt"){
//     if($is_student==true){
//         if($orphan_discount==true)
//         {
//         echo "Hello $name";
//         echo '<br>';
//         echo "course Price is $price";
//         echo '<br>';
//         echo "student_discount is".$price-$student_discount-$country_discount;
//         echo "orphan_discount is ".$price-$student_discount-$orphan_discount-$country_discount;
//         }
//     }
// }
// else{
//     echo "Hello $name";
//     echo '<br>';
//     echo "the final Price is $price";
// }

// echo '<br>';

// elseهنا هيطبع رسايل ال
// if($country=="KSA"){
//     if($is_student==true){
//         if($orphan_discount==true)
//         {
//         echo "Hello $name";
//         echo '<br>';
//         echo "course Price is $price";
//         echo '<br>';
//         echo "student_discount is".$price-$student_discount-$country_discount;
//         echo "orphan_discount is ".$price-$student_discount-$orphan_discount-$country_discount;
//         }
//     }
// }
// else{
//     echo "Hello $name";
//     echo '<br>';
//     echo "the final Price is" .$price-$country_discount;
// }

// echo '<br>';
// echo "********************";
// echo '<br>';

//3-  Ternary Conditional Operator

$a=10;
if($a > 8)
{
    echo "Good";
}
else {
    echo "Bad";
}

echo '<br>';

echo $a > 8 ? "Good" : "Bad";
echo '<br>';
$result= $a > 8 ? "Good" : "Bad";
echo $result;
echo '<br>';

echo "I Love PHP Becauese it's a $result Language";

echo '<br>';

echo "I Love PHP Becauese it's a" .($a > 8 ? "Good" : "Bad"). "Language";

echo '<br>';

echo "I Love PHP Becauese it's a ";
$a=10;
if($a > 8)
{
    echo "Good";
}
else {
    echo "Bad";
}

echo " Language";

echo '<br>';
echo "********************";
echo '<br>';

//4- Switch

$day="thu";
switch($day){

case "Sat":
    echo "Hello Today is $day we are open from 10:15";
    break;

case "Sun":
    echo "Hello Today is $day we are open from 11:14";
    break;

case "Mon":
case "thu":
    echo "Hello Today is $day we are open from 12:15";
    break;

default:
    echo "Unknown day";    
}

echo '<br>';
echo "********************";
echo '<br>';

//5- Loops

//1- while loop
$i=1;
while($i <=10)
{
    echo "$i <br>";
    $i++;
}

$a=1;
while($a <=10):
    echo "$a <br>";
    $a++;
endwhile;

$x=0;
while($x <= 10)
{
    echo "$x <br>";
    $x+=2;
}

echo '<br>';
echo "********************";
echo '<br>';

//2- Do loop

$index=1;
do{
    echo "$index <br>";
    $index++;
}while($index<=10);


$b=4;
do{
    echo "$b <br>"; //4
    $b++;
}while($b<=3); 

echo '<br>';
echo "********************";
echo '<br>';

//3- For loop

for($x=0;$x<=10;$i++)
{
    echo "$x<br>";
    $x++;
}

$x=0;
for(;;)
{
    if($x<=10)
    {
        break;
    }
    echo "$x<br>";
    $x++;
}

echo '<br>';
echo "********************";
echo '<br>';

//3- Foreach loop

$countries = ["EG", "SA", "QA", "SY"];

echo '<pre>';
print_r($countries);
echo '</pre>';

//($array as $value)
foreach ($countries as $country)
 {
    echo $country . "<br>";
}

$countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

echo '<pre>';
print_r($countries_with_discount);
echo '</pre>';
//($array as $key => value)
foreach ($countries_with_discount as $country => $discount)
 {
    echo "Country Name Is $country And Discount Is $discount <br>";
}

//4- Break, Continue
echo '<br>';
echo "********************";
echo '<br>';

$_countries = ["EG", "SA", "QA", "SY"];

//($array as $value)
foreach ($_countries as $country)
 {
    if($country == "QA")
    {
        break;
    }
    echo $country . "<br>";
}

$_countries = ["EG", "SA", "QA", "SY"];

//($array as $value)
foreach ($_countries as $country)
 {
    if($country == "QA")
    {
        continue;
    }
    echo $country . "<br>";
}

echo '<br>';
echo "********************";
echo '<br>';

//5- Include And Require

include("test.php"); // $a = 10
echo $a .'<br>'; // 10

echo"continue"; // continue

echo '<br>';
echo "********************";
echo '<br>';

include("tests.php"); // $a = 10
echo $a .'<br>'; // error because name of file wrong 

echo"continue"; // continue

echo '<br>';
echo "********************";
echo '<br>';

require("test.php"); // $a = 10
echo $a .'<br>'; // 10

echo"continue"; // continue

echo '<br>';
echo "********************";
echo '<br>';

// require("tests.php"); // $a = 10
// echo $a .'<br>'; // error because name of file wrong 

// echo"continue"; // مش هيكمل الكود 

echo '<br>';
echo "********************";
echo '<br>';

include("test.php"); // $a = 10
echo $a .'<br>'; // 10

$a=20;
include("test.php"); // $a = 10
echo $a .'<br>'; // 10

echo"continue"; // continue

echo '<br>';
echo "********************";
echo '<br>';

include_once("test.php"); // $a = 10
echo $a .'<br>'; // 10

$a=20;
include_once("test.php"); // $a = 10
echo $a .'<br>'; // 20

echo"continue"; // continue