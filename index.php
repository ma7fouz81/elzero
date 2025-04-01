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
?>

<?php
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
echo $b; // 0

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