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
?>

<!-- String And Escaping -->
<?php
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
?>

<!-- Array Example -->
<?php
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