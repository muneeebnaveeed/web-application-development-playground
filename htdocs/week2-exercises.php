<!DOCTYPE html>
<html>
<body>
<?php
include 'week2-header.php';          // warns and continues if missing
require_once 'week2-header.php';     // already included -> ignored; would be fatal if missing
?>
<h1>Week 2 - in-curriculum examples (2php.pdf)</h1>
<pre>
<?php
// ---- Data types & loose typing --------------------------------------------
echo "PHP_INT_MAX = " . PHP_INT_MAX . "\n";
$a = 1; $b = 1.5; $c = "I Love PHP"; $d = true;
var_dump($a); var_dump($b); var_dump($c); var_dump($d);
echo "1 + 1.5 = " . ($a + $b) . "\n";            // 2.5 (float)
echo "1 + (int)1.5 = " . ($a + (int) $b) . "\n";  // 2  (explicit cast truncates)

// ---- Constants ------------------------------------------------------------
define('PI', 3.14);
echo "PI = " . PI . "\n";                          // PI = 4; would be a fatal error

// ---- Operators ------------------------------------------------------------
echo "10 % 3 = " . (10 % 3) . "\n";
echo "-(-5) = " . -(-5) . "\n";
echo "10 . 3 = " . (10 . 3) . "\n";                // "103" - dot concatenates, even numbers
$x = 'Pretty'; $x .= ' Cool!'; echo "$x\n";
var_dump(1 == "1");                                // true  - value only
var_dump(1 === "1");                               // false - value AND type
var_dump(1 and 4, 6 or 9, 1 xor 1, 1 xor 0, !0);   // logical: non-zero is true

// ---- Arrays: numeric / associative / multidimensional ----------------------
$movie = ["Shaolin Monk", "Drunken Master", "American Ninja", "Once upon a time in China", "Replacement Killers"];
echo $movie[3] . "\n";
$movie[3] = "Eastern Condors";
echo $movie[3] . "\n";

$persons = ["Mary" => "Female", "John" => "Male", "Mirriam" => "Female"];
print_r($persons);
echo "Mary is a " . $persons["Mary"] . "\n";

$movies = [
    "comedy"  => ["Pink Panther", "John English", "See no evil hear no evil"],
    "action"  => ["Die Hard", "Expendables"],
    "epic"    => ["The Lord of the rings"],
    "Romance" => ["Romeo and Juliet"],
];
echo $movies["comedy"][0] . "\n";                  // nested numeric array inside associative

// ---- Array operators ------------------------------------------------------
$x = ['id' => 1]; $y = ['value' => 10];
print_r($x + $y);                                  // union
$x = ["id" => 1]; $y = ["id" => "1"];
var_dump($x == $y, $x === $y, $x != $y, $x !== $y); // true false false true

// ---- Array functions ------------------------------------------------------
$lecturers = ["Mr. Jones", "Mr. Banda", "Mrs. Smith"];
echo count($lecturers) . " " . (is_array($lecturers) ? "is_array" : "") . "\n";
$p = $persons; sort($p);  print_r($p);             // by value, keys DROPPED -> numeric
$p = $persons; ksort($p); print_r($p);             // by key, keys kept
$p = $persons; asort($p); print_r($p);             // by value, keys kept

$odd_numbers = [1, 3, 5, 7, 9];
echo "first: " . reset($odd_numbers) . " / " . $odd_numbers[0] . "\n";
echo "last:  " . end($odd_numbers) . " / " . $odd_numbers[count($odd_numbers) - 1] . "\n";
$odd_numbers[5] = 11; unset($odd_numbers[2]); print_r($odd_numbers); // unset leaves a hole in the keys

// stack / queue
$n = [1, 2, 3];
array_push($n, 4);     print_r($n);   // [1,2,3,4]
array_pop($n);         print_r($n);   // [1,2,3]
array_unshift($n, 0);  print_r($n);   // [0,1,2,3]
array_shift($n);       print_r($n);   // [1,2,3]

// merge / sort / slice / splice
$all = array_merge([1, 3, 5, 7, 9], [2, 4, 6, 8, 10]); print_r($all);
$s = [4, 2, 3, 1, 5]; sort($s); print_r($s); rsort($s); print_r($s);   // sort in place, returns bool
$numbers = [1, 2, 3, 4, 5, 6];
print_r(array_slice($numbers, 3));       // [4,5,6]  - copy, original untouched
print_r(array_slice($numbers, 3, 2));    // [4,5]
print_r(array_splice($numbers, 3, 2));   // [4,5]  - AND removes them from $numbers
print_r($numbers);                       // [1,2,3,6]
?>
</pre>
</body>
</html>
