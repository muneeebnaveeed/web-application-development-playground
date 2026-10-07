<!DOCTYPE html>
<html>
<head>
    <title>User-Defined Functions</title>
</head>
<body>
<?php
function factorial($n)
{
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result = $result * $i;
    }
    return $result;
}

function is_prime($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function reverse_string($text)
{
    $reversed = "";
    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $reversed = $reversed . $text[$i];
    }
    return $reversed;
}

function sort_array($numbers)
{
    $count = count($numbers);
    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = 0; $j < $count - 1 - $i; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }
    return $numbers;
}

function is_all_lowercase($text)
{
    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] >= 'A' && $text[$i] <= 'Z') {
            return false;
        }
    }
    return true;
}

function is_palindrome($text)
{
    $clean = strtolower(str_replace(' ', '', $text));
    return $clean == reverse_string($clean);
}

echo "<h3>1. Factorial</h3>";
foreach ([0, 1, 5, 10] as $n) {
    echo "$n! = " . factorial($n) . "<br>";
}

echo "<h3>2. Prime check</h3>";
foreach ([1, 2, 7, 9, 13, 20] as $n) {
    echo "$n is " . (is_prime($n) ? "prime" : "not prime") . "<br>";
}

echo "<h3>3. Reverse a string</h3>";
$text = "Hello World";
echo "$text reversed is " . reverse_string($text) . "<br>";

echo "<h3>4. Sort an array</h3>";
$numbers = [5, 3, 8, 1, 9, 2];
echo "Before: " . implode(", ", $numbers) . "<br>";
echo "After: " . implode(", ", sort_array($numbers)) . "<br>";

echo "<h3>5. Is the string all lowercase?</h3>";
foreach (["hello world", "Hello World"] as $text) {
    echo "'$text': " . (is_all_lowercase($text) ? "Yes" : "No") . "<br>";
}

echo "<h3>6. Palindrome check</h3>";
foreach (["madam", "nursesrun", "hello"] as $text) {
    echo "'$text': " . (is_palindrome($text) ? "Yes, palindrome" : "No, not a palindrome") . "<br>";
}
?>
</body>
</html>
