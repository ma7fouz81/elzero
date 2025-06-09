<?php

//1- cookies & modify

// setcookie("style","dark",strtotime("+1 year"));

// echo '<pre>';
// print_r($_COOKIE);
// echo '</pre>';
// if(isset($_COOKIE["style"])){

// echo $_COOKIE["style"];

// }

//2- delete

// setcookie("style","dark",time()+10);

// echo '<pre>';
// print_r($_COOKIE);
// echo '</pre>';
// if(isset($_COOKIE["style"])){

// echo $_COOKIE["style"];
// }

//3- Array

// setcookie("style[color]","red");
// setcookie("style[font]","italec");
// setcookie("style[layout]","boxed");
// echo '<pre>';
// print_r($_COOKIE);
// echo '</pre>';
// if(isset($_COOKIE["style"])){

// echo $_COOKIE["style"]["color"];
// }

//session 

session_start();
$_SESSION['name'] = "Ahmed";
$_SESSION['id'] = "221050009";

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo '<a href= "test.php" > Test </a>';

/////////////////////////////////////////////

