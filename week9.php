<?php

//Math Functions

//1- abs, mt_rand, intdiv, fmod

echo abs(10)."<br>";
echo abs(0)."<br>";
echo abs(-10)."<br>";

echo rand()."<br>";
echo mt_getrandmax()."<br>";
echo rand(10,20)."<br>";

echo 11 / 5 ."<br>";
echo gettype(11 / 5) ."<br>";

echo intdiv(11,5)  ."<br>";
echo gettype(intdiv(11,5)) ."<br>";

echo 11 % 5 ."<br>";
echo gettype(11 % 5) ."<br>";

echo fmod(11 , 5) ."<br>";
echo gettype(fmod(11 , 5)) ."<br>";

echo "################################<br>";

echo 11.5 % 5 ."<br>";
echo gettype(11.5 % 5) ."<br>";

echo fmod(11.5 , 5) ."<br>";
echo gettype(fmod(11.5 , 5)) ."<br>";

echo "################################<br>";

//2- ceil, floor

echo ceil(5.99)."<br>";
echo ceil(5.49)."<br>";
echo ceil(5.10)."<br>";
echo ceil(5.01)."<br>";
echo ceil(-5.99)."<br>"; //-5

echo floor(5.99)."<br>";
echo floor(5.49)."<br>";
echo floor(5.10)."<br>";
echo floor(5.01)."<br>";
echo floor(-5.99)."<br>"; //-6
echo "################################<br>";
//3- round

echo round(5.99)."<br>";
echo round(5.45)."<br>";
echo round(5.50)."<br>";
echo round(5.10)."<br>";

echo round(5.99, 1)."<br>"; //6
echo round(5.45, 1)."<br>"; //5.5
echo round(5.50, 1)."<br>"; // 5.5
echo round(5.10, 1)."<br>";  // 5.1
echo round(5.995, 2)."<br>"; //6
echo round(5.994, 1)."<br>"; //6
echo round(5.994, 2)."<br>"; //5.99

echo "################################<br>";

echo round(5.99, 0, PHP_ROUND_HALF_UP)."<br>"; // 6
echo round(5.49, 0, PHP_ROUND_HALF_UP)."<br>"; // 5

echo round(5.50, 0, PHP_ROUND_HALF_DOWN)."<br>"; // 5

echo round(5.50, 0, PHP_ROUND_HALF_EVEN)."<br>"; // 6 
echo round(4.50, 0, PHP_ROUND_HALF_EVEN)."<br>"; // 4

echo round(5.50, 0, PHP_ROUND_HALF_ODD)."<br>"; // 5
echo round(4.50, 0, PHP_ROUND_HALF_ODD)."<br>"; // 5 

echo "################################<br>";

echo sqrt(100)."<br>";
echo sqrt(16)."<br>";
echo sqrt(25)."<br>";
 
echo min(20, 30, -10, 80, -20);
echo'<pre>';
print_r(min([1,2,3],[1,3,6]));
echo'</pre>';

echo max(20, 30, -10, 80, -20);
echo'<pre>';
print_r(max([1,2,3],[1,3,6]));
echo'</pre>';
echo "################################<br>";



//filter_var Validate Filters Part 1


$bool = True; // True | 1 | Yes | on
var_dump(filter_var($bool , FILTER_VALIDATE_BOOL));
echo "<br>";
$bool = False; // False | 0 | No | off
var_dump(filter_var($bool , FILTER_VALIDATE_BOOL));
echo "<br>";
$bool = "Ahmed";
var_dump(filter_var($bool, FILTER_VALIDATE_BOOLEAN, ["flags" => FILTER_NULL_ON_FAILURE]));
echo "<br>";
echo "################################<br>";

$url="http://localhost/elzero/week9.php";
var_dump(filter_var($url, FILTER_VALIDATE_URL));
echo "<br>";
$url="DTJFKGLG;";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE));
echo "<br>";

$url="http://localhost/elzero/week9.php/?id=100";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED));

echo "<br>";
echo "################################<br>";

$url = "https://elzero.org/?id=100";

var_dump(filter_var($url, FILTER_VALIDATE_URL, 
["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));

echo "<br>";
echo "################################<br>";

$ip="192.0.2.146";
var_dump(filter_var($ip, FILTER_VALIDATE_IP,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV4]));

echo "<br>";
echo "################################<br>";

$ip="2001:0db8:85a3:0000:0000:8a2e:0370:7334";
var_dump(filter_var($ip, FILTER_VALIDATE_IP,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

echo "<br>";
echo "################################<br>";

$mac="00-B0-D0-63-C2-26";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC, FILTER_NULL_ON_FAILURE));


echo "<br>";
echo "################################<br>";


//filter_var Validate Filters Part 2


$int = "90";

var_dump(filter_var(
  $int,
  FILTER_VALIDATE_INT,
  ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
));

echo "<br>";

$float = "90";

var_dump(filter_var(
  $float,
  FILTER_VALIDATE_FLOAT,
  ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
));

echo "<br>";
echo "################################<br>";

//filter_var Sanitize  Filters Part 3


/*
filter_var(Value[Required], Filter[Optional], Options[Optional])
--- Sanitize Filters
---
    FILTER_SANITIZE_EMAIL
--- Remove All But Letters + Digits + [#$%&'"+=?^_'([])-@.[]
    Test Y
---
    FILTER_SANITIZE_NUMBER_INT
--- Remove All But Digits, +, -
---
    FILTER_SANITIZE_NUMBER_FLOAT
--- Remove All But Digits, +, - And Optionally [...et]
--- Flags => FILTER_FLAG_ALLOM_THOUSAND
--- Flags => FILTER_FLAG_ALLOM_FRACTION
---
    FILTER_SANITIZE_URL
--- Remove All But Letters + Digits + [#$%&'+?^_'([])-@.[]
    Test Y + Space 
*/

$email = "o@n_Y...n.sa";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));

echo "<br>";

$int = "100 + !@@UHKLJXJFKLJXLJFKL -f;ldkf;lsdkf1;ksdf;lkdsf===-100";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));

echo "<br>";

$float = "1,950,150.65AAASSS ...sdfdsfsdfsdf000d41";
var_dump(filter_var(
  $float,
  FILTER_SANITIZE_NUMBER_FLOAT,
  ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
));

echo "<br>";

$url = "https://elj.wordpress.com/2019-01-03 2erYYYYYo.org";
var_dump(filter_var($url, FILTER_SANITIZE_URL));

echo "<br>";
echo "################################<br>";

//problem_1

$randNum=[];
for($i=0;$i<5;$i++){
    $rand=rand(10,20);
    if($rand==10 || $rand ==20){
        continue;
    }
    $randNum[]=$rand;
}
foreach ($randNum as $num) {
    echo $num . "<br>";
}

//problem_2

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[array_rand($friends)];
echo "<br>";

//problem_3

$num1 = 11.5; // 11
echo round($num1,0, PHP_ROUND_HALF_DOWN);
echo "<br>";
$num2 = 9.4898; // 9.5
echo round($num2,1);
echo "<br>";
$num3 = -7.5; // -7
echo round($num3 ,0 ,PHP_ROUND_HALF_DOWN);

echo "<br>";

//problem_4

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

var_dump(filter_var($url1, FILTER_SANITIZE_URL));
echo "<br>";
var_dump(filter_var($url2, FILTER_SANITIZE_URL));
echo "<br>";
var_dump(filter_var($url3, FILTER_SANITIZE_URL));
echo "<br>";
var_dump(filter_var($url4, FILTER_SANITIZE_URL));
echo "<br>";
echo "#####################";
echo "<br>";

//problem_5

$urls = [
    "http://www.elz ero.org",
    "http://¥elzero.org",
    "https://elzero.org",
    "https://elzero.o¥rg"
];

foreach ($urls as $url) {
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo "\"A Valid URL\"<br>";
    } else {
        echo "\"Not A Valid URL\"<br>";
    }
}



