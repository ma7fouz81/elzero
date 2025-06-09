<?php
/*[Year]
Y => Four Digits
y => Two Digits

[Month]
m => 01-12
M => Text Month => 3 Letters
F => Full Text
t => Number Of Days In This Month

[Day]
d => Day Of The Month 1-31
j => Day Without Leading Zero
D => Text Day => 3 Letters
l => Full Text
z => Day Of The Year 0-365
S => st, rd, nth Suffix For Day Of The Month

[Time]
a => Small am/pm
A => Capital am/pm

[Hour]
g => 1-12
h => 01-12
G => 0-23
H => 00-23

[Minutes, Seconds, Micro]
i => 00-59
s => 00-59
u => Microseconds

 */

echo date_default_timezone_get().'<br>';

echo date("Y-m-d H:i:s").'<br>';

date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get().'<br>';

echo date("Y-m-d H:i:s").'<br>';

echo "*************************<br>";

$day = date_create("",timezone_open("Indian/Antananarivo"));

echo date_format($day, "Y-m-d H:i:s").'<br>';

echo "*************************<br>";

var_dump(checkdate(7,5,2004));
echo '<br>';
var_dump(checkdate(2,31,1989));
echo '<br>';
var_dump(checkdate(6,10,2004));
echo '<br>';
echo "*************************<br>";

date_default_timezone_set("Africa/Cairo");

$day = date_create();

//year
echo date_format($day,"Y").'<br>'; // 2025
echo date_format($day,"y").'<br>'; // 25
echo "*************************<br>";
//month
echo date_format($day,"M").'<br>'; // Apr
echo date_format($day,"m").'<br>'; // 04
echo date_format($day,"F").'<br>'; // April
echo date_format($day,"t").'<br>'; // 30
echo "*************************<br>";
//Day
echo date_format($day,"d").'<br>'; // 28
echo date_format($day,"j").'<br>'; // 28
echo date_format($day,"D").'<br>'; // Mon
echo date_format($day,"l").'<br>'; // Monday
echo date_format($day,"z").'<br>'; // 117
echo date_format($day,"S").'<br>'; // th
echo "*************************<br>";
//Time
echo date_format($day,"a").'<br>'; //pm
echo date_format($day,"A").'<br>'; //PM
echo date_format($day,"g a").'<br>'; // 4 pm
echo date_format($day,"h a").'<br>'; // 04 PM
echo date_format($day,"G").'<br>'; // 16
echo date_format($day,"H").'<br>'; // 16
echo date_format($day,"H/i/s").'<br>'; // [hour - min -sec]
echo date_format($day,"H/i/s/u").'<br>'; // [hour - min -sec - micro_sec]
echo "*************************<br>";
// Datetime Functions

date_default_timezone_set("Africa/Cairo");
echo date("Y-m-d H:i:s").'<br>';

$d = date_create();

// date_add($d, date_interval_create_from_date_string("1 year 2 months 5 days"));
// date_sub($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

// date_modify($d, "+6 months");
date_modify($d, "-2 months");

echo date_format($d, "Y/m/d H-i-s a");
echo "<br>*************************<br>";

// Time, GetDate, Date_Parse

echo '<pre>';
print_r(getdate());
echo '</pre>';

$t =getdate();
echo $t["year"];

echo '<pre>';
print_r(Date_Parse("1989-10-25 14:20:45")); // if there is error can be detected and valid it
echo '</pre>';
echo "*************************<br>";

$reg=date_create("2004-7-5");
$now=date_create();
$diff= date_diff($reg,$now);
echo '<pre>';
print_r($diff);
echo '</pre>';

echo "you are a member for ".$diff->days." Days<br>";
echo "*************************<br>";

echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
echo date("Y-m-d M D H:i:s", strtotime("tomorrow", strtotime("1982-10-25"))) . "<br>";
echo "*************************<br>";

//problems

//problem_1

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get().'<br>';
echo date("Y-m-d H:i:s").'<br>';

$d= date_create();
echo date_format($d, "D, d M y - H:i:s A").'<br>';
echo date_format($d, "l, d F Y - H:i:s A");
/*
"Asia/Riyadh"
"Wed, 09 Nov 22 - 07:11:22 PM"
"Wednesday, 09 November 2022 - 07:11:22 PM"
*/
echo "<br>*************************<br>";

//problem_2
$date = "2005-10-02";
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get().'<br>';

echo date("Y-m-d H:i:s").'<br>';
echo date("Y-m-d H:i:s",strtotime("+15 hour +15 minute +15 second"));
/*
"Africa/Cairo"
"2005, October, Sunday '02nd' 15:15:15"\
*/
echo "<br>*************************<br>";

//problem_3

date_default_timezone_set("Africa/Cairo"); 

$date = "1990-10-01";

$t= strtotime($date);

$seconds_diff = $t - 0; 
$days = $seconds_diff / (60 * 60 * 24); 
$years = $days / 365.25; 

echo "From Epoch Time Till $date Is Approximately " . round($days, 1) . " Days<br>";
echo "From Epoch Time Till $date Is Approximately " . round($years, 1) . " Years<br>";

echo "<br>*************************<br>";
//problem_4

date_default_timezone_set("Africa/Cairo"); 

$date = date_create("1990-10-01");         
$epoch = date_create("1970-01-01");        

$diff = date_diff($epoch, $date);          

$days = ($diff->y * 365.25) + ($diff->m * 30) + $diff->d;

$years = $days / 365.25;

echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($days, 1) . " Days<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . round($years, 1) . " Years<br>";

echo "<br>*************************<br>";
//problem_5

echo time() . "<br>";
echo strtotime("now") . "<br>";
//1746100118

echo "<br>*************************<br>";
// str_replace Examples

// Basic string replacement
$text = "Hello World";
$result = str_replace("World", "PHP", $text);
echo "Basic replacement: " . $result . "<br>"; // Output: Hello PHP

// Multiple replacements at once
$text2 = "I love cats. Cats are cute. CATS are amazing.";
$result2 = str_replace(["cats", "CATS"], "dogs", $text2);
echo "Multiple replacements: " . $result2 . "<br>"; // Output: I love dogs. Cats are cute. dogs are amazing.

// Case-sensitive replacements with count
$text3 = "apple apple APPLE";
$count = 0;
$result3 = str_replace("apple", "orange", $text3, $count);
echo "Case-sensitive replacement: " . $result3 . "<br>"; // Output: orange orange APPLE
echo "Number of replacements: " . $count . "<br>"; // Output: 2

// Array replacement
$fruits = ["apple", "banana", "orange"];
$result4 = str_replace("a", "X", $fruits);
echo "Array replacement: ";
print_r($result4); // Output: Array ( [0] => Xpple [1] => bXnXnX [2] => orXnge )