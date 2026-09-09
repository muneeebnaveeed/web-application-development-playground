<!DOCTYPE html>
<html>
<body>
<h1>Week 1 - in-curriculum exercises (1php.pdf)</h1>
<?php
// Exercise Part 1: define name and age so this exact sentence prints
$name = "Jake";
$age = 20;
echo "Hello $name. You are $age years old.\n<br>";

// Exercise Part 2: sum x and y into sum
$x = 1;
$y = 2;
$sum = $x + $y;
echo "$x + $y = $sum<br>";

# Trying the curriculum's examples ------------------------------------------
// double quotes interpolate, single quotes don't -> use concatenation (.)
$txt = "PHP";
echo "I love $txt!<br>";
echo 'I love ' . $txt . '!<br>';

// echo can print an expression directly
echo 5 + 4;
echo "<br>";

// keywords/functions are case-insensitive, variables are case-sensitive
ECHO "echo works in any case<br>";
$color = "red";
echo "My car is " . $color . "<br>";       // "red"
echo "My house is " . ($COLOR ?? "(undefined: \$COLOR is a different variable)") . "<br>";

/* a comment can also
   knock out part of a line */
$z = 5 /* + 15 */ + 5;
echo "z = $z<br>";                          // 10
?>
</body>
</html>
