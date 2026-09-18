<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        td, th { text-align: center; }
        th { background-color: #f0e6c8; }
    </style>
</head>
<body>
<table border="1" cellpadding="6" cellspacing="0">
<?php
$size = 9;

echo "<tr><th></th>";
for ($col = 1; $col <= $size; $col++) {
    echo "<th>$col</th>";
}
echo "</tr>";

for ($row = 1; $row <= $size; $row++) {
    echo "<tr><th>$row</th>";
    for ($col = 1; $col <= $size; $col++) {
        echo "<td>" . $row * $col . "</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>
