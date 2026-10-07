<!DOCTYPE html>
<html>
<head>
    <title>String Functions</title>
</head>
<body>
<?php
echo "<h3>1. Changing case</h3>";
$text = "the quick brown fox";
echo "Original: $text<br>";
echo "a) Uppercase: " . strtoupper($text) . "<br>";
echo "b) Lowercase: " . strtolower("THE QUICK BROWN FOX") . "<br>";
echo "c) First character uppercase: " . ucfirst($text) . "<br>";
echo "d) First character of every word uppercase: " . ucwords($text) . "<br>";

echo "<h3>2. Splitting a string</h3>";
$time = '082307';
echo "$time becomes " . substr($time, 0, 2) . ":" . substr($time, 2, 2) . ":" . substr($time, 4, 2) . "<br>";

echo "<h3>3. Does a string contain another string?</h3>";
$sentence = 'The quick brown fox jumps over the lazy dog.';
$search = 'jumps';
if (strpos($sentence, $search) !== false) {
    echo "'$sentence' contains '$search': Yes<br>";
} else {
    echo "'$sentence' contains '$search': No<br>";
}

echo "<h3>4. File name from a URL</h3>";
$url = 'www.example.com/public_html/index.php';
$parts = explode('/', $url);
echo "File name: " . $parts[count($parts) - 1] . "<br>";

echo "<h3>5. User name from an email</h3>";
$email = 'rayy@example.com';
$emailParts = explode('@', $email);
echo "User name: " . $emailParts[0] . "<br>";
?>
</body>
</html>
