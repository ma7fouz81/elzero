
<!-- Week 1&2 -->


<!-- //data types -->
<?php
echo gettype(true);
echo gettype(false);
echo '<br>';
echo gettype('Ahmed');
echo '<br>';
echo gettype(10);
echo '<br>';
echo gettype(10.5);
echo '<br>';
echo gettype(["Ahmed","Mahfouz"]);
echo '<br>';
echo gettype(array("egy" => "egypt"));
echo '<br>';
echo gettype(array("egypt"));


 //Type Juggling And Automatic Type Conversion -->



echo true; //1
echo '<br>';
echo 1+true; //2
echo '<br>';
echo gettype(1+true); // int
echo '<br>';
echo 1+"2"; // 3
echo '<br>';
echo gettype(1+"2"); // int
echo '<br>';
echo 1+"2 book"; // 3 => warning non numeric 
echo '<br>';
echo gettype(1+"2 book"); // int =>> warning
echo '<br>';
echo 10+10.5; //20.5
echo '<br>';
echo gettype(10+10.5); // double


// <!-- type casting -->


echo 1+(int)"2 book"; //3
echo '<br>';
echo gettype( 1+(int)"2 book"); // int 
echo '<br>';
echo 10+10.5; //20.5
echo '<br>';
echo 10+(int)10.5; //20
echo '<br>';
echo gettype(10+(int)10.5); // int
echo '<br>';
echo 10.5+10.5; // 21 
echo '<br>';
echo gettype(10.5+10.5); //double
echo '<br>';
echo (int)(10.5+10.5); //21
echo '<br>';
echo gettype((int)(10.5+10.5)); // int

// <!-- Boolean And Converting To Boolean -->

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



// <!-- String And Escaping -->

echo "'PHP'";
echo '<br>';
echo '"PHP"';
echo '<br>';
echo '\'PHP\'';
echo '<br>';
echo 'PHP\\';
echo '<br>';
echo 'PHP on
Multible
Lines';
echo '<br>';
echo nl2br('PHP on
Multible
Lines');

// <!-- Heredoc And Nowdoc -->



$name = "Ahmed";

// Heredoc It analyzes the code

echo <<<"here"
Hello PHP 
special characters $ \\\
my name is $name
here;

echo '<br>';

// Nowdoc It escaping the code only

echo <<<'Now'
Hello PHP 
special characters $ \\\\
my name is $name
Now;

echo '<ul>';
echo '<li>'. $name .'</li>';
echo '<li>'. $name .'</li>';
echo '<li>'. $name .'</li>';
echo '</ul>';

echo '<br>';

echo <<<"ullinks"
<ul>
    <li> $name</li>
    <li> $name</li>
    <li> $name</li>
</ul>
ullinks;
echo"///////////////////////////////////////////////////////////////////////";

echo '<pre>';
print_r([

    "0" => "Ahmed",
    "A" => "Ali",
    "B" => "Basem",
    true =>"Amr",
    false => "Mohammed",
    "Eman",
    "Mahmoud",
    "Names"=>["osama","osman","omar"]
]);
echo '</pre>';