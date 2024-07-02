<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

echo "<br/><br/>";

echo "<b>Method 1:</b>";
echo "<br/>";
// Define the Large numbers Method 1
$largestNumber = max($num1, $num2, $num3);

echo "Here are $largestNumber is largest number";

echo "<br/><br/>";





echo "<b>Method 2:</b>";
echo "<br/>";

// Define the Large numbers Method 2
if ($num1 >= $num2 && $num1 >= $num3) {
    $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest = $num2;
} else {
    $largest = $num3;
}
echo "Largest among of number $num1, $num2, and $num3. Here are $largest is largest number";
