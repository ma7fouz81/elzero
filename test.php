<?php


function add_title($fname,$lname){
    return "Hello Mr $fname $lname ";
}

$fname=["Ahmed","Mohammed","Ali","Hossam"];
$lname=["Amr","Mohab","ehab","youssef"];

echo '<pre>';
print_r(array_map("add_title",$fname,$lname));
print_r(array_map(fn($fn,$ln)=>"Hello Mr $fn $ln",$fname,$lname));
echo '</pre>';