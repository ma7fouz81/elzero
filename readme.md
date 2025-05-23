# PHP Basics – My Learning Journey (Weeks 1 to 4)

Hey there!  
This repo is a reflection of my PHP learning progress through the first few weeks. It includes code snippets, concepts, and examples I've practiced — from basic data types to operators and more advanced features like heredoc, type juggling, and array tricks.

Everything here is beginner-friendly and well-commented. Hope this helps others too!

---

## Week 1 & 2: Starting with the Basics

### Data Types in PHP

```php
echo gettype(true); // boolean
echo gettype("Ahmed"); // string
echo gettype(10); // integer
echo gettype(10.5); // double
echo gettype(["Ahmed", "Mahfouz"]); // array
```

---

### Type Juggling & Type Casting

```php
echo 1 + "2"; // 3
echo gettype(1 + "2"); // integer

echo (int)"2 book"; // 2
echo gettype(10 + (int)10.5); // integer
```

---

### Boolean Conversion

```php
var_dump((bool)0); // false
var_dump((bool)"Ahmed"); // true
var_dump((bool)["value"]); // true
```

---

### Strings & Escaping

```php
echo 'PHP'; // simple string
echo "PHP\nMultiline"; // interpreted string
echo nl2br("PHP\non\nMultiple\nLines");
```

---

### Heredoc & Nowdoc

```php
$name = "Ahmed";

// Heredoc (parses variables)
echo <<<"TXT"
Hello, my name is $name
TXT;

// Nowdoc (no parsing)
echo <<<'TXT'
Hello, my name is $name
TXT;
```

---

## Arrays in PHP

```php
print_r([
  "0" => "Ahmed",
  "A" => "Ali",
  true => "Amr",
  false => "Mohammed",
  "Names" => ["Osama", "Omar"]
]);
```

---

## Week 3: Variables, Constants & References

### Variable Variables

```php
$a = "Ahmed";
$$a = "Mahfouz";
echo $Ahmed; // Outputs: Mahfouz
```

---

### Assign by Value vs Reference

```php
$a = "Ahmed";
$b = &$a;
$b = "Saad";
echo $a; // Outputs: Saad
```

---

### Constants

```php
define("DB_NAME", "elzero");
echo DB_NAME; // elzero
```

---

### Magic Constants

```php
echo __LINE__; // Current line number
echo __FILE__; // Full path of the current file
echo __DIR__;  // Directory of the file
```

---

## Week 4: All About Operators

### Arithmetic Operators

```php
echo 10 + 20; // 30
echo 10 - 5; // 5
echo 2 ** 3; // 8 (exponentiation)
```

---

### Assignment Operators

```php
$a = 10;
$a += 20;
```

---

### Comparison Operators

```php
var_dump(100 == "100"); // true
var_dump(100 === "100"); // false
var_dump(10 <=> 20); // -1
```

---

### Logical Operators

```php
var_dump(100 > 50 && 50 > 10); // true
var_dump(100 > 50 xor 10 > 5); // false
```

---

### String Operators

```php
$a = "Ahmed";
$b = "Mahfouz";
echo $a . " " . $b;
```

---

### Array Operators

```php
$arr1 = [1 => "One"];
$arr2 = [2 => "Two"];
print_r($arr1 + $arr2);

var_dump($arr1 == $arr2); // compares values
var_dump($arr1 === $arr2); // strict comparison
```

---

### Operator Precedence

```php
echo 2 + 3 * 6; // 20
echo (2 + 3) * 6; // 30

$a = 10 || false; // true (1)
$b = 10 or false; // 10
```

---

### Error Control

```php
@$x = $undefined; // suppress error if $undefined is not defined
```

---

## Summary

This repo is a work-in-progress as I continue my PHP journey. I’m using it to reinforce my learning and share some useful snippets along the way.  
Feel free to fork, star, or contribute ideas!

Stay tuned for more updates!



<!-- ###################################################### -->
<!-- ###################################################### -->

<!-- ######    (Week 5)    ########################## -->


```php
# PHP Control Structures

## 1. If, Elseif, Else - Basics

```php
if(10 < 5) {
    echo "First Condition is True";
} elseif(10 > 5) {
    echo "Second Condition is True";
} else {
    echo "False";
}
```

### Example:
```php
$Page="Home";
if($Page=="Home") {
    echo "Hello, this is the page";
}
```

```php
$lang="Arabic";
if($lang=="Arabic") {
    echo "مرحبا";
} elseif ($lang=="English") {
    echo "Hello";
} else {
    echo "Unknown language";
}
```

## 2. Nested if

```php
$name = "Ahmed";
$is_student = true;
$is_orphan = true;
$country = "Egypt";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;

if($country=="Egypt"){
    if($is_student==true){
        echo "Hello $name";
        echo "Price is $price";
        echo "student_discount is".($price-$student_discount-$country_discount);
    }
} else {
    echo "Hello $name";
    echo "the final Price is $price";
}
```

## 3. Ternary Conditional Operator

```php
$a=10;
$result= $a > 8 ? "Good" : "Bad";
echo "I Love PHP Because it's a $result Language";
```

## 4. Switch Statement

```php
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
```

## 5. Loops

### While Loop
```php
$i=1;
while($i <=10) {
    echo "$i <br>";
    $i++;
}
```

### Do While Loop
```php
$index=1;
do{
    echo "$index <br>";
    $index++;
}while($index<=10);
```

### For Loop
```php
for($x=0;$x<=10;$x++) {
    echo "$x<br>";
}
```

### Foreach Loop
```php
$countries = ["EG", "SA", "QA", "SY"];
foreach ($countries as $country) {
    echo $country . "<br>";
}
```

## 6. Include and Require

```php
include("test.php"); // Includes file
require("test.php"); // Requires file
```

## 7. Problem-Solving Examples

### Problem 1
```php
$a = 100;
$b = 200;
$c = 100;
if($b>$a){
    if($a==$c){
        if(($a+$c)===$b){
            echo "Yes";
        }
    }
}
```

### Problem 6: Calculator
```php
$num_one = 23;
$num_two = 5;
$op = "/";

if($op == "+") {
    echo $num_one+$num_two;
} elseif($op=="-") {
    echo $num_one-$num_two;
} elseif($op=="*") {
    echo $num_one*$num_two;
} elseif($op=="/") {
    if($num_two != 0){
        echo intdiv($num_one,$num_two);
        echo $num_one % $num_two;
    } else {
        echo "Cannot divide by zero";
    }
} else {
    echo "Unknown Operation";
}
```

### Problem 10: Countdown
```php
$start = 10;
$stop = 3;
for ($i = $start; $i >= $stop; $i--) {
    echo ($i < 10 ? "0".$i : $i) . "<br>";
}
```
```

