<?php

//1- File System Function Part One 4 Functions

echo round (disk_total_space("C:")/1024/1024/1024) ."<br>" ; //=>GB
echo round (disk_free_space("C:") /1024/1024/1024) ."<br>";  //=>GB

var_dump(file_exists("test.text")); 
echo "<br>";
// echo filesize("testt.txt"); // if file is'nt exist will give you error

echo "************************<br>";

//2- Is_Dir, MkDir, RmDir

var_dump(is_dir("Subjects"));

mkdir("Test/Upload/Files",0777,true); 

echo "<br>";

var_dump(file_exists("Test/Upload/Files")); 

echo "<br>";

rmdir("Test/Upload/Files"); 

echo "************************<br>";

//3- Basename, Dirname, Realpath, Pathinfo

echo basename(__FILE__) .'<br>';
echo basename(__FILE__,"php") .'<br>';

echo dirname(__FILE__,1) .'<br>'; // print folder name
echo dirname(__FILE__,2) .'<br>'; // print folder name
echo dirname(__FILE__,3) .'<br>'; // print folder name

echo realpath(__FILE__) .'<br>'; 

echo '<pre>';
print_r(pathinfo(__FILE__)) .'<br>';            
echo '</pre>';

//access
echo pathinfo(__FILE__)["filename"] .'<br>';

//using flags
echo pathinfo(__FILE__,PATHINFO_FILENAME);

echo "<br>************************<br>";

//4- fopen - fread - fclose

// $handle = fopen("test.txt","r"); //for read
// $handle = fopen("test.txt","r+"); //for read $ write
// $handle = fopen("testtttt.txt","w"); //for write
// $handle = fopen("test.txt","w+"); //for write & read

// $handle = fopen("test.txt","r"); //for read
// echo '<br>';
// // echo fgets($handle);
// echo '<br>';
// echo fread($handle,1024);

// fclose($handle);

// 5- fopen Part 2 - fwrite

// $handle = fopen("test.txt","a"); //for write
// echo '<br>';
// fwrite($handle,"\r\n I Love PHP"); 

// fclose($handle);


// 6-  fopen Part 3 - file, feof And Loop Practice

$handle = fopen("test.txt","r");
echo '<br>';
echo count(file("test.txt"));

$line = 1;

while(! feof($handle)){
    echo "line $line => " . fgets($handle)."<br>";
    $line++;
}
fclose($handle);

/*
output
line 1 => I Love PHP
line 2 => I Love PHP
line 3 => I Love PHP
line 4 => I Love PHP
line 5 => I Love PHP
line 6 => I Love PHP
*/

echo "************************<br>";

//7- ftell, fseek, rewind 

$handle = fopen("test.txt", "r");
echo ftell($handle) . "<br>"; // 0
echo fgets($handle) . "<br>";
echo fgets($handle) . "<br>";
rewind($handle);
echo fgets($handle) . "<br>"; 
echo ftell($handle) . "<br>"; //13
echo mb_strlen("I Love PHP \r\n"); // 13
fclose($handle);

echo "<br>************************<br>";
/*
echo '<pre>';
print_r(glob("*.*"));
echo '<pre>';

echo '<pre>';
print_r(glob("old/*.*"));
echo '<pre>';

// rename => same place

rename("Old/work.txt", "Old/working.txt");

// Rename => Other Place => "Cut" || "Move"

rename("Old/working.txt", "New/working_2.txt");

// // Move To Other Place

rename("Old/ahmed.pptx", "New/ahmed.pptx");


copy("Old/info.docx", "New/info.docx");

unlink("Old/info.txt"); 
*/

