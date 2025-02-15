<?php
// ----------------------------------------------- 1
$year = 2013;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}
echo "<br>";

// ----------------------------------------------- 2
$temp = 27;
echo ($temp < 20) ? "It is winter!" : "It is summertime!";
echo "<br>";

// ----------------------------------------------- 3
$a = 2;
$b = 2;
$sum = $a + $b;
echo ($a == $b) ? $sum * 3 : $sum;
echo "<br>";

// ----------------------------------------------- 4
$a = 10;
$b = 10;
echo ($a + $b == 30) ? $a + $b : "false";
echo "<br>";

// ----------------------------------------------- 5
$number = 20;
echo ($number % 3 == 0) ? "true" : "false";
echo "<br>";

// ----------------------------------------------- 6
$number = 50;
echo ($number >= 20 && $number <= 50) ? "true" : "false";
echo "<br>";

// ----------------------------------------------- 7
$a = 1;
$b = 5;
$c = 9;
echo max($a, $b, $c);
echo "<br>";

// ----------------------------------------------- 8
$units = 270;
$bill = 0;

if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
} elseif ($units <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
} else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
}

echo "Electricity Bill: $bill JOD";
echo "<br>";

// ----------------------------------------------- 9
$a = 10;
$b = 5;
$operator = "+";

switch ($operator) {
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "/":
        echo ($b != 0) ? $a / $b : "Cannot divide by zero";
        break;
    default:
        echo "Invalid operator";
}
echo "<br>";

// ----------------------------------------------- 10
$age = 15;
echo ($age >= 18) ? "Eligible to vote" : "Not eligible to vote";
echo "<br>";

// ----------------------------------------------- 11
$number = -60;
if ($number > 0) {
    echo "Positive";
} elseif ($number < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
echo "<br>";

// ----------------------------------------------- 12
$grades = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$average = array_sum($grades) / count($grades);

if ($average < 60) {
    echo "F";
} elseif ($average < 70) {
    echo "D";
} elseif ($average < 80) {
    echo "C";
} elseif ($average < 90) {
    echo "B";
} else {
    echo "A";
}
echo "<br>";

?>