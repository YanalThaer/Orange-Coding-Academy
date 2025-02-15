<?php
// ----------------------------------------------- 1
function isPrime($num) {
    if ($num % 2 == 0){
        echo "$num is a prime number";
    } else {
        echo "$num is not a prime number";
    }
}

$num = 3;
echo isPrime($num);
echo "<br>";

// ----------------------------------------------- 2
function reverseString($str) {
    return strrev($str);
}

echo reverseString("remove");
echo "<br>";

// ----------------------------------------------- 3
function isLowerCase($str) {
    return ctype_lower($str) ? "Your String is Ok" : "Your String contains uppercase letters";
}

echo isLowerCase("remove");
echo "<br>";

// ----------------------------------------------- 4
function swap(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;
swap($x, $y);
echo "x=$x, y=$y";
echo "<br>";

// ----------------------------------------------- 5
function swapNumbers(&$a, &$b) {
    list($a, $b) = array($b, $a);
}

$x = 12;
$y = 10;
swapNumbers($x, $y);
echo "x=$x, y=$y";
echo "<br>";

// ----------------------------------------------- 6
function isArmstrong($num) {
    $sum = 0;
    $digits = str_split($num);
    $numDigits = count($digits);

    foreach ($digits as $digit) {
        $sum += pow($digit, $numDigits);
    }

    return $sum == $num ? "$num is Armstrong Number" : "$num is not an Armstrong Number";
}

echo isArmstrong(407);
echo "<br>";

// ----------------------------------------------- 7
function isPalindrome($str) {
    $str = strtolower($str);
    return $str == strrev($str) ? "Yes, it is a palindrome" : "No, it is not a palindrome";
}

echo isPalindrome("Eva, can I see bees in a cave?");
echo "<br>";

// ----------------------------------------------- 8
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);
print_r(removeDuplicates($array1));
echo "<br>";

?>