 <?php

//1- If, Elseif, Else - Basics

/*if(10 < 5)
{
    echo "First Condition is True";
}
elseif(10 > 5)
{
    echo "Second Condition is True";
}
else{
    echo "False";
}

echo '<br>';

$Page="Home";

if($Page=="Home")
{
    echo "Hello, this is the page";
}

echo '<br>';

$lang="Arabic";
if($lang=="Arabic")
{
    echo "مرحبا";
}
elseif ($lang=="English")
{
    echo "Hello";
}
else{
    echo "UnKnown language";
}

echo '<br>';

$title="";
if($title == "")
{
    echo "Unknown title";
}
else{
    echo $title;
}

echo '<br>';

//2- Nested if

// 1-first scenario
$name = "Ahmed";
$is_student = true;
$is_orphan = true;
$country = "Egypt";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;

//ifهنا هيطبع رسايل ال
if($country=="Egypt"){
    if($is_student==true){
        echo "Hello $name";
        echo '<br>';
        echo "Price is $price";
        echo '<br>';
        echo "student_discount is".$price-$student_discount-$country_discount; // 40
    }
}
else{
    echo "Hello $name";
    echo '<br>';
    echo "the final Price is $price";
}

echo '<br>';

// elseهنا هيطبع رسايل ال
if($country=="KSA"){
    if($is_student==true){
        echo "Hello $name";
        echo '<br>';
        echo "Price is $price";
        echo '<br>';
        echo "student_discount is".$price-$student_discount;
    }
}
else{
    echo "Hello $name";
    echo '<br>';
    echo "the final Price is $price"; //100
}

echo '<br>';
echo "********************";
echo '<br>';

// 2-second scenario
$name = "Ahmed";
$is_student = false;
$is_orphan = false;
$country = "Egypt";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;

// ifهنا هيطبع رسايل ال
if($country=="Egypt"){
    if($is_student==true){
        if($orphan_discount==true)
        {
        echo "Hello $name";
        echo '<br>';
        echo "course Price is $price";
        echo '<br>';
        echo "student_discount is".$price-$student_discount-$country_discount;
        echo "orphan_discount is ".$price-$student_discount-$orphan_discount-$country_discount;
        }
    }
}
else{
    echo "Hello $name";
    echo '<br>';
    echo "the final Price is $price";
}

echo '<br>';

// elseهنا هيطبع رسايل ال
if($country=="KSA"){
    if($is_student==true){
        if($orphan_discount==true)
        {
        echo "Hello $name";
        echo '<br>';
        echo "course Price is $price";
        echo '<br>';
        echo "student_discount is".$price-$student_discount-$country_discount;
        echo "orphan_discount is ".$price-$student_discount-$orphan_discount-$country_discount;
        }
    }
}
else{
    echo "Hello $name";
    echo '<br>';
    echo "the final Price is" .$price-$country_discount;
}

echo '<br>';
echo "********************";
echo '<br>';

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


// echo '<br>';
// echo "********************";
// echo '<br>';

// problem_1:
$a = 100;
$b = 200;
$c = 100;

if($b>$a){
    if($a==$c){
        if(($a+$c)===$b){
            echo"Yes";
        }
    }
}

//   Check That:
//   Variable "b" Larger Than Variable "a"
//   Variable "a" Identical To Variable "c"
//   Variable "a" Plus Variable "c" Identical To Variable "b"

// "Yes"

echo '<br>';
echo "********************";
echo '<br>';

// problem_2:

// Test Case 1
$a = 100;
$b = 200;
$c = 300;
if($a>$b)
{
    echo "A is Larger than B";
}
elseif($a>$c){
    echo "A is Larger than B";
}
else{
    echo"A Is Not Larger Than B Or C";
}
// A Is Not Larger Than B Or C

echo '<br>';
echo "********************";
echo '<br>';

// problem_3:

$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}
echo '<br>';
echo "********************";
echo '<br>';

echo ($a + $b === $c)?"A + B = C":
     (($a + $c === $b)?"A + C = B":
     (($b + $c === $a)?"B + C = A":"The End"));

echo '<br>';
echo "********************";
echo '<br>';

// problem_4:
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}
echo '<br>';
echo "********************";
echo '<br>';

echo ($age > 18)?"The Age Is Good To Go<br>".
     ((gettype($name) === "string")?"The Name Is Good To Go<br>".
     (($country === "Egypt")?"The Country Is Good To Go<br>": "")
     :"")
    :"";

echo '<br>';
echo "********************";
echo '<br>';

// problem_5:
     $genre = "Hack And Slash";

     if ($genre === "RPG") {
     
       echo "I Recommend Ys Games";
     
     } elseif ($genre === "Hack And Slash") {
     
       echo "I Recommend Castlevania Games";
     
     } elseif ($genre === "FPS") {
     
       echo "I Recommend Uncharted Games";
     
     } elseif ($genre === "Platform") {
     
       echo "I Recommend Megaman Games";
     
     } elseif ($genre === "Puzzle") {
     
       echo "I Recommend Megaman Games";
     
     } else {
     
       echo "I Recommend Shadow Of Mordor And Shadow Of War";
     
     }

echo '<br>';
echo "********************";
echo '<br>';

$genre = "Hack And Slash";

switch($genre)
{
    case"RPG":
        echo "I Recommend Ys Games";
        break;
    case"Hack And Slash":    
        echo "I Recommend Castlevania Games";
        break;

    case"FPS": 
       echo "I Recommend Uncharted Games";    
       break;
       
     case"Platform":
        echo "I Recommend Megaman Games";
        break;
    case"Puzzle":
        echo"I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";    

}
     
echo '<br>';
echo "********************";
echo '<br>';

// problem_6:

$num_one = 23;
$num_two = 5;
$op = "/";

if($op =="+")
{
    echo $num_one+$num_two;
}
elseif($op=="-")
{
    echo $num_one-$num_two;
}
elseif($op=="*")
{
    echo $num_one*$num_two;
}
elseif($op=="/"){
    if($num_two != 0){
        echo intdiv($num_one,$num_two); //Integer division
        echo '<br>'; // 
        echo $num_one % $num_two; // Remainder
    }
    else{
        echo "Cannot divide by zero";
    }
}
else {
    echo "Unknown Operation";
}

echo '<br>';
echo "********************";
echo '<br>';

// problem_7:

$index = 10;

for($index=10;$index>0;$index--)
{
    echo  $index.'<br>';
  
}

echo '<br>';
echo "********************";
echo '<br>';

// problem_8:

$index = 0;

for($index=2;$index<=20;$index+=2)
{
    echo  $index.'<br>';
}

echo '<br>';
echo "********************";
echo '<br>';

// problem_9:

$num = 2;
while ($num < 520) {
    if ($num == 2) {
        echo "1<br>";
        $num = 1;
    }
    
    $num = $num * 2 + 2;
    echo $num . "<br>";
    
    if ($num == 382) {
        break;
    }
}

echo '<br>';
echo "********************";
echo '<br>';

// problem_10:

$start = 10;
$end = 0;
$stop = 3;

for ($i = $start; $i >= $stop; $i--) {
    if ($i < 10) {
        echo "0" . $i . "<br>";
    } else {
        echo $i . "<br>";
    }
}
*/

// problem_11:

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

foreach ($mix as $value) {
    if ($value == 1 || gettype($value) != "integer") {
        continue;
    }
    echo $value . "<br>";
}

echo '<br>';
echo "********************";
echo '<br>';

// problem_12:
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $key => $value) {
    echo "The Name Is $key And I Need $value Pound From Him<br>";
}

echo '<br>';
echo "********************";
echo '<br>';

$mix = [1, 2, "A", "B", "C", 3, 4];

$numbers_count=0;
$letters_count=0;
foreach($mix as $value){
    if(is_numeric($value)){
        echo $value.'<br>';
        $numbers_count++;
    }
    else{
        $letters_count++;
    }
}
echo "\"$numbers_count Numbers Printed\"<br>";
echo "\"$letters_count Letters Ignored\"<br>";

echo '<br>';
echo "********************";
echo '<br>';

// problem_13:

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach($nums as $num){
    if($num %2==0){
        echo $num / 2 . '<br>';
    }
}

echo '<br>';
echo "********************";
echo '<br>';

// problem_14:

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

$count = $nums[$help_num]; //1
$end = $count + $nums[$help_num]; // 1 + 1 = 2 

for ($i = $count; $i <= $end; $i++) {
    echo $names[$i] . "<br>";
}

echo '<br>';
echo "********************";
echo '<br>';

// problem_15:

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

for ($i = 0; $i < count($nums); $i++) {
    for ($j = 0; $j < count($nums); $j++) {
        $sum = $nums[$i] + $nums[$j];
        if ($sum == 10 || $sum == 12) {
            echo "{$nums[$i]} + {$nums[$j]} = $sum<br>";
        }
    }
}





