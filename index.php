<!-- Week 3 -->
 
<?php
##variables
$username= "Ahmed";
$userName= "Mahfouz";
echo "Hello $username";
echo '<br>';
echo "Hello $userName";
echo '<br>';
echo "//////////////////////////////////";
echo '<br>';
//variable variable
$a="Ahmed";
$$a="Mahfouz";
$$$a="Saad";
echo $a;
echo '<br>';
echo $$a;
echo '<br>';
echo $Ahmed;
echo '<br>';
echo $$$a;
echo '<br>';
echo $Mahfouz;
echo '<br>';
echo "Hello $a";
echo '<br>';
echo "Hello ${$a}";
echo '<br>';
echo "Hello ${$$a}";
echo '<br>';
echo "//////////////////////////////////";
echo '<br>';
// Assign By Value And By Reference

$a="Ahmed";
$b="Mahfouz";
$b=$a;
$b="Saad";

echo $a; // Ahmed
echo '<br>';
echo $b; // Saad
echo '<br>';

echo "//////////////////////////////////";
echo '<br>';
$a="Ahmed";
$b="Mahfouz";
$b=&$a;
$b="Saad";

echo $a; // Saad
echo '<br>';
echo $b; // Saad
echo '<br>';

echo "//////////////////////////////////";
echo '<br>';
// Introduction To Constants

define("DB_NAME","elzero");
echo DB_NAME;
echo '<br>';
define("MAIN_NUM",10);
//define("MAIN_NUM",5); // Warning: Constant MAIN_NUM already defined 
echo MAIN_NUM *10;
echo '<br>';
echo "//////////////////////////////////";
echo '<br>';

//Predefined And Magic Constants 

//1-Predefined Constants[Case sensitive]
echo PHP_VERSION; //تخزن رقم اصدار الكود  
echo '<br>';
echo PHP_OS_FAMILY; // تعرض نوع نظام التشغيل [windows]
echo '<br>';
echo PHP_INT_MAX; // عرض أكبر عدد صحيح يمكن تخزينه بناءً على نظام التشغيل 
echo '<br>';
echo get_include_path(); // عرض المسارات التي يستخدمها PHP للبحث عن الملفات المضمنة افتراضيًا.
echo '<br>';

//2-Magic Constants[Case insensitive]
echo __LINE__; // رقم السطر
echo '<br>';
echo __FILE__; // اقدر اوصل للمكان اللي انا فيه بتاع الملفات
echo '<br>';
echo __DIR__; 
