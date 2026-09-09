<?php

$even_numbers = [2, 4, 6, 8, 10];
echo "1. Even numbers: ";
print_r($even_numbers);
echo "<br>";

$male_names = ["Peter", "Alfred", "Simon"];
$female_names = ["Kate", "Anna"];
$names = array_merge($male_names, $female_names);
echo "2. Names (male + female): ";
print_r($names);
echo "<br>";

$some_names = ["Zoltan", "Muneeb", "Eszter", "Bence", "Anna"];
sort($some_names);
echo "3. Sorted names: ";
print_r($some_names);
echo "<br>";
foreach ($some_names as $name) {
    echo $name . "<br>";
}
?>
