<?php
//string
//1- String Access And Update Elements
/*
$str="Ahmed";
echo $str[0].'<br>';
echo $str[3].'<br>';
echo $str[-1].'<br>';

echo strlen($str).'<br>';
echo $str[strlen($str)-1].'<br>'; // d
echo "{$str[strlen($str)-1]}<br>"; //d
echo"########################<br>";

//2- String Functions p1

echo lcfirst("Ahmed Mahfouz <br>");
echo ucfirst("ahmed mahfouz<br>");
echo strtolower("AHMED MAHFOUZ <br>");
echo strtoupper("ahmed mahfouz<br>");
echo ucwords("ahmed mahfouz<br>");
echo ucwords("ahmed mahfouz|saad" ,"|").'<br>';
echo str_repeat("Ahmed",3).'<br>';
echo"########################<br>";

//2- String Functions p2
$names=["Ahmed","Mohammed","Mahmoud","Ali"];

echo implode(" ",$names).'<br>';
echo implode(", ",$names).'<br>';
echo implode("|",$names).'<br>';
echo implode("#",$names).'<br>';

$str="Ahmed Mahfouz Saad Abdel3lem";
echo '<pre>';
print_r(explode(" ",$str));
print_r(explode("S",$str));
print_r(explode(" ",$str,1));
print_r(explode(" ",$str,-1));
print_r(explode(" ",$str,2));
print_r(explode(" ",$str,-2));
echo '<\pre>';

$_str="Ahmed";
echo str_shuffle($_str).'<br>';
echo strrev($_str).'<br>';

echo strlen("   Ali   ").'<br>';
echo strlen(trim("   Ali   ")).'<br>';
echo trim("##Ahmed###","@#").'<br>';
echo trim("#@#Ahmed#@##","@").'<br>'; // لما بيحذف بيحذف من عالاطراف ملوش دعوه باللي فالنص
echo"########################<br>";

//2- String Functions p3

echo chunk_split("Elzero Web School",3,"#").'<br>'; //بعد كل 3 حروف هيحط #

echo '<pre>';
print_r(str_split("Ahmed"));
echo '</pre>';

echo '<pre>';
print_r(str_split("Ahmed",2));
echo '</pre>';

echo "<h3>Hello <b>Elzero</b></h3>".'<br>';

echo strip_tags("<h3>Hello <b>Elzero</b></h3>").'<br>';

echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3><b>").'<br>';

echo nl2br("Elzero\nWeb\nSchool").'<br>';

echo"########################<br>";


//2- String Functions p4

var_dump(strpos("Hello Hello", "H")); // 0
echo '<br>';
var_dump(strpos("Hello Hello", "H", 3)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", "H", 6)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", "h")); // false =>>case sensative
echo '<br>';
var_dump(strpos("Hello Hello", "H", -2)); // false
echo '<br>';
var_dump(strpos("Hello Hello", "H", -5)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", "H", -11)); // 0
echo '<br>';
var_dump(strrpos("Hello Hello", "H")); // 6
echo '<br>';
var_dump(strrpos("Hello Hello", "H", 5)); // 6
echo '<br>';
var_dump(strrpos("Hello Hello", "H", -5)); // 6

echo"########################<br>";
echo '<br>';
var_dump(stripos("Hello Hello", "h")); // 0 =>>case insensative
echo '<br>';
var_dump(strripos("Hello Hello", "h")); // 6
echo '<br>';
echo"########################<br>";
var_dump(substr_count("Hello Hello", "He")); // 2
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1)); // 1
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1, 7)); // 1 =>> (from 1 to 7 and 7 included)
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
echo '<br>';
var_dump(substr_count("abcdabcda", "abcd")); // 2
echo '<br>';
var_dump(substr_count("abcdabcda", "abcda")); // 1

echo"########################<br>";

//2- String Functions p5

parse_str("name=ahmed&email=a.@gmail.com&os=mac",$queury);

echo'<pre>';
print_r($queury);
echo'</pre>';

echo $queury["name"].'<br>';
echo $queury["email"].'<br>';
echo $queury["os"].'<br>';

echo"########################<br>";

echo str_pad("12",8,0,STR_PAD_BOTH).'<br>';
echo str_pad("123",8,0,STR_PAD_BOTH).'<br>';
echo str_pad("1252",8,0,STR_PAD_LEFT).'<br>';
echo str_pad("12445",8,0,STR_PAD_LEFT).'<br>';

echo strtr("A7med Ma7fouz","7","h").'<br>';

$translation = ["7"=> "h" , "3"=>"a"];

echo strtr("A7med M37fouz s33d",$translation).'<br>';

echo"########################<br>";

//2- String Functions p6

echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r); // Elzero Web School
echo '<br>';
echo "Replaces Count Is $r"; // 3
echo '<br>';
echo str_replace(["@", "@"], "A", "Elzer@ Web Sch@@l"); // ElzerA Web SchAAA
echo '<br>';
echo str_replace(["@", "@"], ["l", "o"], "Elzer@ Web Sch@@l"); // Elzerlo Web School

echo '<pre>';
print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two","Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';


echo"########################<br>";
//2- String Functions p7

echo substr_replace("OneTwo", 1, 0);   // 1
echo '<br>';
echo substr_replace("OneTwo", 1, 3);   // One1
echo '<br>';
echo substr_replace("OneTwo", 1, 5);   // OneTw1
echo '<br>';
echo substr_replace("OneTwo", 1, -1);  // OneTw1
echo '<br>';
echo substr_replace("OneTwo", 2, 2);   // On2
echo '<br>';
echo substr_replace("OneTwo", 2, 2, 2);   // On2wo
echo '<br>';
echo substr_replace("OneTwo", 2, 1, 4);   // O2o

echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_A1 eb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "@", 1); // E@
echo '<br>';
echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School => mean insert not replace

echo "<pre>";
print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0));
echo "</pre>";


echo"########################<br>";
//2- String Functions p8

$str = "Welcome To To T To T Elzeroo Web School Website Very_Very_Very_Long";

echo strlen($str) . "<br>";

echo wordwrap($str, 8, "<br>");
echo "<br>";
echo wordwrap($str, 8, "<br>", True);

echo "<br>";

echo ord("a"); // 97

echo "<br>";

echo chr(97); // a

echo "<br>";

echo similar_text("Ahmed","Ahmed",$similarity);

echo "<br>";
echo $similarity;

echo "<br>";

echo similar_text("Ahm_ed","Ahmee_d",$similarity);
echo "<br>";
echo $similarity;

echo "<br>";
//2- String Functions p9

echo strstr("Elzero Web", "W") . "<br>";        // Web
echo strstr("Elzero Web", "z") . "<br>";        // zero Web
echo strstr("Elzero Web", "W", True) . "<br>";  // Elzero
echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7

echo strstr("Elzero Web", "w") . "<br>";        // False
var_dump(strstr("Elzero Web", "w"));
echo "<br>";

echo strstr("Elzero Web", "w") . "<br>";        // False
var_dump(strstr("Elzero Web", "W"));
echo "<br>";

echo number_format(1000000);
echo "<br>";
echo number_format(1000000.2545);
echo "<br>";
echo number_format(1000000.2545,2);
echo "<br>";
echo number_format(1000000.2545,2,"^");
*/

// problem_1

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str = str_replace(["%", 0], [$let_two, $let_one], $str);

echo $str; // Elzero
echo "<br>";
echo "########################";
echo "<br>";

// problem_2

$str = "Orezle";

$str = ucfirst(strtolower(strrev($str)));

echo $str; // Elzero
echo "<br>";

// problem_3
$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat(strtolower($str) . $char, $num);

echo "<br>";
// problem_4
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e,1,5) . "<br>"; // 1
echo substr_count($str, strtolower($o),-3) . "<br>"; // 2

echo "<br>";
// problem_5

$chars = ["E", "l", "z", "e", "r", "o"];

echo implode("",$chars);

echo "<br>";
// problem_6

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$chars = array_filter($chars, 'is_string'); 
$str = implode($chars);                    
$str = ucfirst(strtolower($str));       

echo $str; //Elzero