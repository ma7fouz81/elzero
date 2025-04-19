<?php

//Array Functions P1
/*
$friends=["Ahmed","Mohammed","Mahmoud","Ali","Amr"];
echo '<pre>';
print_r(array_chunk($friends,2));
echo '</pre>';

$countries=["EG"=>"Egypt","Ksa"=>"saudi Arabia","Sy"=>"Syria","USA"=>"United State"];

echo '<pre>';
print_r(array_chunk($countries,2,True));
echo '</pre>';

echo '<pre>';
print_r(array_change_key_case($countries)); // convert keys to lower case [default]
echo '</pre>';
echo '<pre>';
print_r(array_change_key_case($countries,CASE_UPPER)); 
echo '</pre>';

$key=["A","M","K","O"];
$Value=["Ahmed","Mohammed","Kamal","Osama"];

echo '<pre>';
print_r(array_combine($key,$Value));
echo '</pre>';

$letters=["A","M","K","A","M"];

echo '<pre>';
print_r(array_count_values($letters));
echo '</pre>';


//Array Functions P2

$members=["Ahmed","Mahfouz","Saad","Ali","Osama","Amir"];
echo '<pre>';
print_r($members);
echo '</pre>';
echo '<pre>';
print_r(array_reverse($members,True));
echo '</pre>';

$member=["A"=>"Ahmed","M"=>"Mahfouz","S"=>"Saad","O"=>"Osama"];
echo '<pre>';
print_r($member);
echo '</pre>';
echo '<pre>';
print_r(array_flip($member));
echo '</pre>';

$counting=["A","B","C",[1,2,3]];
echo count($counting); //4
echo '<br>';
echo count($counting , 1); //7
echo '<br>';

$search=["1",2,3,4];
if (in_array("1",$search)){
    echo "element is found";
}
echo '<br>';
$searching=["1",2,3,4];
if (in_array(1,$searching,True)){
    echo "element is found"; // مش هيطبع لان انا هنا حددت النوع بتاعه وهو مش موجود كرقم
}

$courses=["PHP"=>80,"Java"=>90,"Css"=>75,"Html"=>60];

if (array_key_exists("PHP",$courses)){
    echo "course is found and price is ".$courses["PHP"];
}


//Array Functions P3

$partners=["Ahmed","Mahfouz","Saad","Ali","Osama","Amir","Ahmed","1",1];

echo '<pre>';
print_r(array_keys($partners));
echo '</pre>';

echo '<pre>';
print_r(array_keys($partners,"Ahmed"));
echo '</pre>';

echo '<pre>';
print_r(array_keys($partners,1));
echo '</pre>';

echo '<pre>';
print_r(array_keys($partners,1,True));
echo '</pre>';

$arr=["A"=>"Ahmed","M"=>"Mahfouz","S"=>"Saad","O"=>"Osama"];

echo '<pre>';
print_r(array_values($arr));
echo '</pre>';


$letter=["A","M","K","A","M"];

echo '<pre>';
print_r(array_pad($letter,10,"x"));
echo '</pre>';

echo '<pre>';
print_r(array_pad($letter,-10,"x"));
echo '</pre>';

$product=[10,2,5,8];

echo array_product($product).'<br>'; //multible

$sum=[10,2,5,8];

echo array_sum($sum).'<br>';


//Current, Next, Prev, Reset, End

$peoples=["Ahmed","Mohammed","Kamal","Osama","Ali"];

echo current($peoples).'<br>';
echo next($peoples).'<br>';
echo current($peoples).'<br>';
echo prev($peoples).'<br>';
echo end($peoples).'<br>';
echo current($peoples).'<br>';


// Array Merge, Array Replace, Array Rand, Shuffle

$merge_one=["one"=>"php","two"=>"css","three"=>"java"];
$merge_two=["one"=>"html","four"=>"python"];

echo '<pre>';
print_r(array_merge($merge_one,$merge_two));
echo '</pre>';

$merge_three=[10=>"php",20=>"css",30=>"java"];
$merge_four=[40=>"html",50=>"python"];

echo '<pre>';
print_r(array_merge($merge_three,$merge_four));
echo '</pre>';

$merge_five=[10=>"php",20=>"css",30=>"java"];
$merge_six=[40=>"html",10=>"python"];

echo '<pre>';
print_r(array_merge($merge_five,$merge_six));
echo '</pre>';


//#simple comparison
/*###########
$merge_one=["one"=>"php","two"=>"css","three"=>"java"];
$merge_two=["one"=>"html","four"=>"python"];

echo '<pre>';
print_r(array_merge($merge_one,$merge_two));
echo '</pre>';


$main=["one"=>"php","two"=>"css","three"=>"java"];
$replace=["one"=>"html","four"=>"python"];

echo '<pre>';
print_r(array_replace($main,$replace));
echo '</pre>';


$main2=[10=>"php",20=>"css",30=>"java"];
$replace2=[40=>"html",10=>"python"];

echo '<pre>';
print_r(array_merge($main2,$replace2));
echo '</pre>';

$main3=[10=>"php",20=>"css",30=>"java"];
$replace3=[40=>"html",10=>"python"];

echo '<pre>';
print_r(array_replace($main3,$replace3));
echo '</pre>';
*/############

/*
$nums=["A","B","C","D","E"];
echo array_rand($nums).'<br>'; // print index of number not number
echo $nums[array_rand($nums)]; //print number 

echo '<pre>';
print_r(array_rand($nums,3));
echo '</pre>';

$num=[1,2,3,4,5];
shuffle($num);
echo '<pre>';
print_r($num);
echo '</pre>';

$char=["A","B","C","D"];
echo '<pre>';
print_r($char);
echo '</pre>';
$first=array_shift($char);
echo $first; // A
echo '<pre>';
print_r($char);
echo '</pre>';

#############################

$char=["A","B","C","D"];
echo '<pre>';
print_r($char);
echo '</pre>';
$last=array_pop($char);
echo $last; // A
echo '<pre>';
print_r($char);
echo '</pre>';

echo"#############################";

echo '<pre>';
print_r($char);
echo '</pre>';

array_push($char,"X","Y","Z");

echo '<pre>';
print_r($char);
echo '</pre>';

echo"#############################";

echo '<pre>';
print_r($char);
echo '</pre>';

array_push($char,"1");
$char[]="1";

echo '<pre>';
print_r($char);
echo '</pre>';

echo"#############################";

echo '<pre>';
print_r($char);
echo '</pre>';
array_unshift($char,"one","two","three");
echo '<pre>';
print_r($char);
echo '</pre>';

//Array Slice, Array Splice


$chars=["A","B","C","D","E"];
$Chars_with_string_keys=["A"=>1,"B"=>2,"C"=>3];
$Chars_with_numeric_keys=[10=>1,20=>2,30=>3];

echo '<pre>';
print_r(array_slice($chars,2));
print_r(array_slice($chars,-4));
print_r(array_slice($chars,2,-1));
echo '</pre>';

echo '<pre>';
print_r(array_slice($Chars_with_string_keys,0,3));
print_r(array_slice($Chars_with_numeric_keys,0,2));
print_r(array_slice($Chars_with_numeric_keys,0,2,True));
echo '</pre>';

echo"#############################";

$numbers=[10,20,30,40,50,60,70];
// echo '<pre>';
// print_r(array_splice($numbers,3));
// print_r($numbers);
// echo '</pre>';

// echo '<pre>';
// print_r(array_splice($numbers,2,-2));
// print_r($numbers);
// echo '</pre>';

echo '<pre>';
print_r(array_splice($numbers,2,2,["one","two"]));
print_r($numbers);
echo '</pre>';
echo"#############################";

$person=["ziad","Ahmed","youssef","fady","mohammed","Belal","Hesham"];
sort($person); //sort array Ascending
echo '<pre>';
print_r($person);
echo '</pre>';

rsort($person); ////sort array Descending
echo '<pre>';
print_r($person);
echo '</pre>';

$country=["S"=>"Syria","I"=>"Iraq","E"=>"Egypt","Q"=>"Qatar"];
asort($country); //sort array Ascending according value
echo '<pre>';
print_r($country);
echo '</pre>';

arsort($country); //sort array Descending according value
echo '<pre>';
print_r($country);
echo '</pre>';

$codes=["1"=>"Syria","5"=>"Iraq","2"=>"Egypt","3"=>"Qatar"];
ksort($codes); //sort array Ascending according key
echo '<pre>';
print_r($codes);
echo '</pre>';

krsort($codes); //sort array Descending according key
echo '<pre>';
print_r($codes);
echo '</pre>';

$files=["Photo20.png","Photo1.png","Photo3.png"];
sort($files); 
echo '<pre>';
print_r($files);
echo '</pre>';

natsort($files); 
echo '<pre>';
print_r($files);
echo '</pre>';


//Array Filter, Array Map

function add_title($fname,$lname){
    return "Hello Mr $fname $lname ";
}

$fname=["Ahmed","Mohammed","Ali","Hossam"];
$lname=["Amr","Mohab","ehab","youssef"];

echo '<pre>';
print_r(array_map("add_title",$fname,$lname));
print_r(array_map(fn($fn,$ln)=>"Hello Mr $fn $ln",$fname,$lname));
echo '</pre>';


$_nums = [
    6 => 1,
    4 => 8,
    5 => 4
];

function checkNums($n1) {
    return $n1 > 4 ;
}

echo '<pre>';
print_r(array_filter($_nums, "checkNums"));
echo '</pre>';

echo '<pre>';
print_r(array_filter($_nums, "checkNums", ARRAY_FILTER_USE_KEY));
echo '</pre>';



$num_s = [
    6 => 1,
    4 => 8,
    5 => 4
];

function check_nums($n1,$n2 ) {
    return $n1 > 4 || $n2 > 4;
}

echo '<pre>';
print_r(array_filter($num_s, "check_nums", ARRAY_FILTER_USE_BOTH));
echo '</pre>';



// Array Reduce


function sum($n1, $n2) {
    return $n1 + $n2;
}

$summation = [10, 20, 50, 100, 10];
echo array_reduce($summation, "sum",100)."<br>";

echo"#########<br>";

function add($carry, $item) {
    echo "$carry<br>"; //carry=>current
    echo "$item<br>";//item => next
    echo $carry + $item . "<br>";
    echo "############<br>";
    return $carry + $item;
}

$nums = [10, 20, 50, 100, 10];

echo array_reduce($nums, "add", 100);
*/
#############################################

//problem_1

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];
  
  $friends = array_change_key_case($friends);

  echo '<pre>';
  print_r(array_chunk($friends, 2, true));
  echo '</pre>';
 
//problem_2

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

$changes=array_combine($codes,$means);
echo '<pre>';
print_r(array_change_key_case($changes));
echo '</pre>';

//problem_3

$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];
  

  $friends_change=array_flip($friends);
echo '<pre>';
print_r(array_reverse(array_change_key_case($friends_change)));
echo '</pre>';

//problem_4

$nums = [10, 20, 30];

$result=array_reduce($nums,function($carry,$item){return $carry + $item; });

echo $result.'<br>';

//problem_5


$nums = [5, 10, 20, 5, 30, 40];

function check_num($number){
    return $number!=5;
}

echo array_sum(array_filter($nums,"check_num"));

//problem_6 

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

$chars = array_merge($chars, array_fill(0, 5, $char));
echo '<pre>';
print_r($chars);
echo '</pre>';

//problem_7

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"

end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

next($names);
next($names);
next($names);

echo current($names) . "<br>"; // "Mahmoud"

//problem_8

$chars = ["A", "B", "C"];

array_push($chars,"D"); // first method
$chars[]="D"; // second method
$chars[count($chars)] = "D"; // third method
$chars = array_merge($chars, ["D"]); // fourth method

echo '<pre>';
print_r($chars);
echo '</pre>';

//problem_9

$nums = [1, 2, 3, 4, 5, 6];

echo '<pre>';
print_r(array_slice($nums,1,-2));
echo '</pre>';

//problem_10

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

array_splice($mix, 3, 3, $nums);

echo '<pre>';
print_r($mix);
echo '</pre>';

$arr = ["A", "B", "C", "D", "E"];

echo count($arr).'<br>';

//problem_11

$nums = [11, 2, 10, 7, 20, 50];

$result=0;
foreach($nums as $num){
    $result+=$num;

}
echo $result.'<br>';

//problem_12

$nums = [10, 100, -20, 50, 30];

$min = $nums[0]; 

foreach ($nums as $num) {
  if ($num < $min) {
    $min = $num; 
  }
}

echo $min .'<br>';

//problem_13 
$chars = ["o", "r", "e", "z", "l", "E"];
echo $chars[5] . $chars[4] . $chars[3] . $chars[2] . $chars[1] . $chars[0] .'<br>';

//problem_14

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

$result=[];
foreach($mix as $arr){
    if(is_int($arr)&& $arr % 2 !=0){
        $result[] = $arr;
    }
}
echo '<pre>';
print_r($result);
echo '</pre>';

//problem_15

$nums = [1, 2, 3, 4, 5, 6];
for($i=count($nums)-1;$i>0;$i--){
    $j=random_int(0,$i);
    $temp=$nums[$i];
    $nums[$i]=$nums[$j];
    $nums[$j]=$temp;
}
echo '<pre>';
print_r($nums);
echo '</pre>';

//problem_16

$title = "E&z\$r0 W\$b Sch00&";

echo str_replace(["&","$","0"],["l","e","o"],$title,$repl).'<br>';
echo $repl;
