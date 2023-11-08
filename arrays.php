<!DOCTYPE html>
<html>
<head>
    <title>PHP Arrays and Functions Demo</title>
</head>
<body>
<h2>PHP Arrays and Functions Demo</h2>

<?php
// Indexed Array
$fruits = array("Apple", "Banana", "Cherry", "Date");

echo "<h3>Indexed Array:</h3>";
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";

// Associative Array
$person = array("first_name" => "John", "last_name" => "Doe", "age" => 30);

echo "<h3>Associative Array:</h3>";
echo "<ul>";
foreach ($person as $key => $value) {
    echo "<li>$key: $value</li>";
}
echo "</ul>";

// Function to Calculate Sum
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$numbers = array(5, 10, 15, 20);
$total = calculateSum($numbers);

echo "<h3>Function to Calculate Sum:</h3>";
echo "Sum of numbers: $total";

// Function to Capitalize Text
function capitalizeText($text) {
    return ucwords($text);
}

$string = "hello, world!";
$capitalizedString = capitalizeText($string);

echo "<h3>Function to Capitalize Text:</h3>";
echo "Original: $string<br>";
echo "Capitalized: $capitalizedString";
?>
</body>
</html>
