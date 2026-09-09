<?php
// Week 2 - assignment to submit (2php.pdf): one program, three parts

// 1. A new array holding the even numbers 2..10
$even_numbers = [2, 4, 6, 8, 10];
echo "1. Even numbers: ";
print_r($even_numbers);
echo "<br>";

// 2. Concatenate male_names and female_names into names
//    (the curriculum does not define these two arrays, so they are declared here)
$male_names = ["Peter", "Alfred", "Simon"];
$female_names = ["Kate", "Anna"];
$names = array_merge($male_names, $female_names);
echo "2. Names (male + female): ";
print_r($names);
echo "<br>";

// 3. A new array of some names, sorted alphabetically, then printed
$some_names = ["Zoltan", "Muneeb", "Eszter", "Bence", "Anna"];
sort($some_names);
echo "3. Sorted names: ";
print_r($some_names);
echo "<br>";
foreach ($some_names as $name) {
    echo $name . "<br>";
}
?>
