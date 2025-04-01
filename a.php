<!-- Week 1&2 -->

<!-- Data Types -->
<?php
echo gettype(true); // boolean
echo '<br>';
echo gettype(false); // boolean
echo '<br>';
echo gettype('Ahmed'); // string
echo '<br>';
echo gettype(10); // integer
echo '<br>';
echo gettype(10.5); // double (float)
echo '<br>';
echo gettype(["Ahmed","Mahfouz"]); // array
echo '<br>';
echo gettype(array("egy" => "egypt")); // array
echo '<br>';
echo gettype(array("egypt")); // array
?>

<!-- Type Juggling And Automatic Type Conversion -->
<?php
echo true; // Outputs: 1
echo '<br>';
echo 1+true; // Outputs: 2
echo '<br>';
echo gettype(1+true); // Outputs: integer
echo '<br>';
echo 1+"2"; // Outputs: 3
echo '<br>';
echo gettype(1+"2"); // Outputs: integer
echo '<br>';
echo 1+"2 book"; // Outputs: 3 with warning (non-numeric string)
echo '<br>';
echo gettype(1+"2 book"); // Outputs: integer with warning
echo '<br>';
echo 10+10.5; // Outputs: 20.5
echo '<br>';
echo gettype(10+10.5); // Outputs: double
?>

<!-- Type Casting -->
<?php
echo 1+(int)"2 book"; // Outputs: 3
echo '<br>';
echo gettype(1+(int)"2 book"); // Outputs: integer
echo '<br>';
echo 10+10.5; // Outputs: 20.5
echo '<br>';
echo 10+(int)10.5; // Outputs: 20
echo '<br>';
echo gettype(10+(int)10.5); // Outputs: integer
echo '<br>';
echo 10.5+10.5; // Outputs: 21
echo '<br>';
echo gettype(10.5+10.5); // Outputs: double
echo '<br>';
echo (int)(10.5+10.5); // Outputs: 21
echo '<br>';
echo gettype((int)(10.5+10.5)); // Outputs: integer
?>

<!-- Boolean And Converting To Boolean -->
<?php
var_dump((bool) 0); // bool(false)
echo "<br>";
var_dump((bool) array()); // bool(false)
echo "<br>";
var_dump((bool) []); // bool(false)
echo "<br>";
var_dump((bool) ""); // bool(false)
echo "<br>";
var_dump((bool) "0"); // bool(false)
echo "<br>";
var_dump((bool) 1); // bool(true)
echo "<br>";
var_dump((bool) "Ahmed"); // bool(true)
echo "<br>";
var_dump((bool) [1]); // bool(true)
echo "<br>";
var_dump((bool) 10); // bool(true)
echo "<br>";
var_dump((bool) -10); // bool(true)
// ?>

// <!-- String And Escaping -->
// <?php
echo "'PHP'"; // Outputs: 'PHP'
echo '<br>';
echo '"PHP"'; // Outputs: "PHP"
echo '<br>';
echo '\'PHP\''; // Outputs: 'PHP'
echo '<br>';
echo 'PHP\\'; // Outputs: PHP\
echo '<br>';
echo 'PHP on
Multible
Lines'; // Outputs on multiple lines
echo '<br>';
echo nl2br('PHP on
Multible
Lines'); // Converts newlines to <br> tags
?>

<!-- Heredoc And Nowdoc -->
<?php
$name = "Ahmed";

// Heredoc - parses variables and special characters
echo <<<"here"
Hello PHP
Special Chars $$$ \\\\
My Name Is $name
here;

echo '<br>';

// Nowdoc - treats content as single-quoted string (no parsing)
echo <<<'Now'
Hello PHP
Special Chars $$$ \\\\
My Name Is $name
Now;

// Another example with HTML
$ulinks = <<<ullinks
<ul>
    <li> $name</li>
</ul>
ullinks;
echo $ulinks;
// ?>

// <!-- Array Example -->
// <?php
echo "///////////////////////////////////////////////////////////////////////";

echo '<pre>';
print_r([
    "0" => "Ahmed",
    "A" => "Ali",
    "B" => "Basem",
    true => "Amr",    // true becomes 1 as key
    false => "Mohammed", // false becomes 0 as key
    "Eman",           // auto-indexed as 2 (next numeric index)
    "Mahmoud",        // auto-indexed as 3
    "Names" => ["osama", "osman", "omar"]
]);
echo '</pre>';
?>

<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->


<!-- Week 3 -->
<?php
// Basic types
echo gettype(true);
echo gettype(false);
echo '<br>';
echo gettype('Ahmed');
echo '<br>';
echo gettype(10);

// Variables
$username = "Ahmed";
$userName = "Mahfouz";
echo "Hello $username";
echo '<br>';
echo gettype(10.5);
echo "Hello $userName";
echo '<br>';
echo gettype(["Ahmed", "Mahfouz"]);
echo "//////////////////////////////////";
echo '<br>';
echo gettype(array("egy" => "egypt"));

// Variable variable
$a = "Ahmed";
$$a = "Mahfouz";
$$$a = "Saad";
echo $a;
echo '<br>';
echo gettype(array("egypt"));

// Type Juggling And Automatic Type Conversion
echo true; //1
echo $$a;
echo '<br>';
echo 1 + true; //2
echo $Ahmed;
echo '<br>';
echo gettype(1 + true); // int
echo $$$a;
echo '<br>';
echo 1 + "2"; // 3
echo $Mahfouz;
echo '<br>';
echo gettype(1 + "2"); // int
echo "Hello $a";
echo '<br>';
echo 1 + "2 book"; // 3 => warning non numeric 
echo "Hello ${$a}";
echo '<br>';
echo gettype(1 + "2 book"); // int =>> warning
echo "Hello ${$$a}";
echo '<br>';
echo 10 + 10.5; //20.5
echo "//////////////////////////////////";
echo '<br>';
echo gettype(10 + 10.5); // double

// Type casting
// Assign By Value And By Reference
$a = "Ahmed";
$b = "Mahfouz";
$b = $a;
$b = "Saad";

echo 1 + (int)"2 book"; //3
echo $a; // Ahmed
echo '<br>';
echo gettype(1 + (int)"2 book"); // int 
echo $b; // Saad
echo '<br>';
echo 10 + 10.5; //20.5

echo "//////////////////////////////////";
echo '<br>';
echo 10 + (int)10.5; //20
$a = "Ahmed";
$b = "Mahfouz";
$b = &$a;
$b = "Saad";

echo $a; // Saad
echo '<br>';
echo gettype(10 + (int)10.5); // int
echo $b; // Saad
echo '<br>';
echo 10.5 + 10.5; // 21 

echo "//////////////////////////////////";
echo '<br>';
echo gettype(10.5 + 10.5); //double

// Introduction To Constants
define("DB_NAME", "elzero");
echo DB_NAME;
echo '<br>';
echo (int)(10.5 + 10.5); //21
define("MAIN_NUM", 10);
//define("MAIN_NUM", 5); // Warning: Constant MAIN_NUM already defined 
echo MAIN_NUM * 10;
echo '<br>';
echo "//////////////////////////////////";
echo '<br>';
echo gettype((int)(10.5 + 10.5)); // int

// Boolean And Converting To Boolean
var_dump((bool) 0);
echo "<br>";
var_dump((bool) array());
echo "<br>";
var_dump((bool) []);
echo "<br>";
var_dump((bool) "");
echo "<br>";
var_dump((bool) "0");
echo "<br>";
var_dump((bool) 1);
echo "<br>";
var_dump((bool) "Ahmed");
echo "<br>";
var_dump((bool) [1]);
echo "<br>";
var_dump((bool) 10);
echo "<br>";
var_dump((bool) -10);

// String And Escaping
// Predefined And Magic Constants 
echo "'PHP'";
// 1-Predefined Constants[Case sensitive]
echo PHP_VERSION; // Stores code version number  
echo '<br>';
echo '"PHP"';
echo PHP_OS_FAMILY; // Shows operating system type [windows]
echo '<br>';
echo '\'PHP\'';
echo PHP_INT_MAX; // Shows maximum integer based on OS 
echo '<br>';
echo 'PHP\\';
echo get_include_path(); // Shows paths PHP uses to search for included files
echo '<br>';
echo 'PHP on
Multible
Lines';
echo '<br>';
echo nl2br('PHP on
Multible
Lines');

// Heredoc And Nowdoc
$name = "Ahmed";

// Heredoc - It analyzes the code
echo <<<"here"
Hello PHP 
special characters $ \\\
my name is $name
here;

// 2-Magic Constants[Case insensitive]
echo __LINE__; // Line number
echo '<br>';

// Nowdoc - It escapes the code only
echo <<<'Now'
Hello PHP 
special characters $ \\\\
my name is $name
Now;

echo '<ul>';
echo '<li>' . $name . '</li>';
echo '<li>' . $name . '</li>';
echo '<li>' . $name . '</li>';
echo '</ul>';

echo __FILE__; // Shows current file path
echo '<br>';

echo <<<"ullinks"
<ul>
    <li> $name</li>
    <li> $name</li>
    <li> $name</li>
</ul>
ullinks;
echo "///////////////////////////////////////////////////////////////////////";

echo '<pre>';
print_r([
    "0" => "Ahmed",
    "A" => "Ali",
    "B" => "Basem",
    true => "Amr",
    false => "Mohammed",
    "Eman",
    "Mahmoud",
    "Names" => ["osama", "osman", "omar"]
]);
echo '</pre>';
echo __DIR__;
?>

<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////-->


<!-- Week 4 -->
 
<?php
//Arithmetic Operators

//1-addition

echo 10+20;
echo '<br>';
echo gettype(10+20);
echo '<br>';
echo 9.5+20.5;
echo '<br>';
echo gettype(9.5+20.5);
echo '<br>';
//2-subtraction

echo 10-20;
echo '<br>';
echo gettype(10-20);
echo '<br>';
echo 9.5-20.5;
echo '<br>';
echo gettype(9.5-20.5);
echo '<br>';
//3-muliplication

echo 10*20;
echo '<br>';
echo gettype(10*20);
echo '<br>';
echo 9.5*20.5;
echo '<br>';
echo gettype(9.5*20.5);
echo '<br>';

//4-Division

echo 20 / 10;
echo '<br>';
echo gettype( 20 / 10);
echo '<br>';
echo 20 / 8;
echo '<br>';
echo gettype(20 / 8);
echo '<br>';

//5-modulus

echo 20 % 10;
echo '<br>';
echo gettype( 20 % 10);
echo '<br>';
echo 21 % 10;
echo '<br>';
echo gettype(21%10);
echo '<br>';
echo 25 % 10;
echo '<br>';
echo gettype(25%10);
echo '<br>';

//6-exponentiation

echo 2 ** 4;
echo '<br>';
echo gettype( 2 ** 4);
echo '<br>';
echo 2 * 2 * 2 * 2;
echo '<br>';
echo gettype(2 * 2 * 2 * 2);
echo '<br>';
echo 2 ** 5;
echo '<br>';
echo gettype(2 ** 5);
echo '<br>';

//7-identity

echo "100";
echo '<br>';
echo gettype("100");
echo '<br>';
echo +"100";
echo '<br>';
echo gettype(+"100");
echo '<br>';

//8-negation

echo "100";
echo '<br>';
echo gettype("100");
echo '<br>';
echo -"100";
echo '<br>';
echo gettype(-"100");
echo '<br>';

echo "-100";
echo '<br>';
echo gettype("100");
echo '<br>';
echo -"-100";
echo '<br>';
echo gettype(-"-100");
echo '<br>';
echo "*******************************************";
echo '<br>';
// ?>

// <?php
//1- Assignment Operators
$a = 10;
// $a = $a + 20;
$a += 20;

$b = 20;
// $b = $b - 5;
$b -= 5;

$c = 4;
// $c = $c ** 4;
$c **= 4;

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';
echo "******************";
echo '<br>';

//2- Comparison Operators

//1- equal =>> بيقارن قيمه فقط

var_dump(100==100);
echo '<br>';
var_dump(100=="100");
echo '<br>';
var_dump(100.0==100);
echo '<br>';
var_dump(100 != 100);
echo '<br>';
echo "******************";
echo '<br>';

//2- identical =>> بيقارن قيمه ونوع

var_dump(100 === 100);
echo '<br>';
var_dump(100 === "100");
echo '<br>';
var_dump(100.0 === 100);
echo '<br>';
var_dump(100 !== "100");

echo '<br>';
echo "******************";
echo '<br>';

var_dump(100 >100);
echo '<br>';
var_dump(100 == 100);
echo '<br>';
var_dump(100 >= 100);
echo '<br>';
var_dump(100 >= 10);
echo '<br>';
var_dump(10 < 50);
echo '<br>';
var_dump(100 <=> 10); // 1
echo '<br>';
var_dump(10 <=> 10); // 0
echo '<br>';
var_dump(10 <=> 100); // -1

echo '<br>';
echo "******************";
echo '<br>';

//3-  Increment And Decrement Operators

$a=0;

echo $a++; //0 
echo '<br>';
echo $a; // 1
echo '<br>';

$b=0;
echo $b--; //0
echo '<br>';
echo $b; //-1 
echo '<br>';

$c=0;

echo ++$c; //1
echo '<br>';
echo $c; // 1
echo '<br>';

$d=0;
echo --$d; //-1
echo '<br>';
echo $d; //-1 

echo '<br>';
echo "******************";
echo '<br>';

//4-  Logical Operators

var_dump(100 > 50 and 50 > 10 and 10 > 5);
echo '<br>';
var_dump(100 > 50 or 50 < 10 or 10 < 5);
echo '<br>';
// xor =>> one is true but not both
var_dump(100 > 50 xor 10 < 5); 
echo '<br>';
var_dump(100 > 50 xor 10 > 5);

echo '<br>';
echo "******************";
echo '<br>';

// 5- String Operators[concatination]

$a="Ahmed";
$b="Mahfouz";

echo "$a $b";
echo '<br>';
echo $a. " " .$b;
echo '<br>';
echo "{$a} {$b}";

echo '<br>';
echo "******************";
echo '<br>';

//6-Array Operators

//1- equal & not equal [same key & value  without ordering]
$arr1=[1 => "1", 2 => "2"];
$arr2=[3 => "3", 4 => "4"];
$arr3=$arr1 + $arr2;

echo "<pre>";
print_r($arr1 + $arr2);
echo '<br>';
print_r($arr3);
echo "</pre>";

$arr3=[5 => "10", 6 => "20"];
$arr4=[6 => "20", 5 => "10"];

var_dump($arr3 == $arr4);
echo '<br>';
var_dump($arr3 != $arr4);
echo '<br>';
var_dump($arr3 <> $arr4);

echo '<br>';
echo "******************";
echo '<br>';

//2- identical [same key & value & typewith ordering]

$arr5=[1 => "10", 2 => "20"];
$arr6=[1 => "20", 2 => "10"];

var_dump($arr5===$arr6); 
echo '<br>';

$arr5=[1 => "10", 2 => "20"];
$arr6=[1 => "10", 2 => "10"];
var_dump($arr5===$arr6); 
echo '<br>';

$arr5=[1 => "10", 2 => "20"];
$arr6=[1 => "10", 2 => "20"];
var_dump($arr5===$arr6); 

echo '<br>';
echo "******************";
echo '<br>';

//7-  Operator Precedence(اولويه العمليات الحسابيه)

echo 2+3*6; // 20
echo '<br>';
echo (2+3)*6; // 30
echo '<br>';
$a= 10 || false; //(10 || false)
echo $a; // true => 1

echo '<br>';
$b= 10 or false; // (10) or false
echo $b; // 10

echo '<br>';

$b= 0 or false; // (0) or false
echo $b; // false 0

//8- Error Control Operator

// $a=10;
// $b=@$a or die ("variable not found"); // variable not found
// echo $b; 


// $c=10;
// $b=@$a or die ("variable not found"); // variable not found
// echo "test $d"; 

// echo '<br>';
// echo "******************";
// echo '<br>';

// <!--////////////////////////////////////////////////////////////////////////////-->
// <!--////////////////////////////////////////////////////////////////////////////-->
// <!--////////////////////////////////////////////////////////////////////////////-->
// <!--////////////////////////////////////////////////////////////////////////////-->
// <!--////////////////////////////////////////////////////////////////////////////-->
// <!--////////////////////////////////////////////////////////////////////////////-->
// <!--////////////////////////////////////////////////////////////////////////////-->