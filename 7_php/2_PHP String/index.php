<?php

//Convert the entered string to uppercase.(1/A)
// $string = "sarah";
// $uppercase = strtoupper($string);[1]
// echo $uppercase;

// echo strtoupper($string);[2]

// Convert the entered string to lowercase.(1/B)

// $string = "sarah";
//[1]
// $lowercase = strtolower($string);
// echo $lowercase ;

//[2]
// echo strtolower($string);

//Make the first letter of the string uppercase(1/C)

// $string = "sarah mahfouz";
// $first_letter_uppercase = ucfirst($string);
// echo $first_letter_uppercase;

// . Make the first letter of each word capitalized(1.d)

// $string = "sarah mahfouz";
// $first_letter_uppercase = ucwords($string);
// echo $first_letter_uppercase;


// Write a PHP script splitting the following numeric string to be a date format.(2)

//[1]
// echo  "08" .":". "51" .":" . "19" ;

// [2]
// echo date("h:i:sa");

// [3]
//$numeric = '085119';
// $formatted = substr($numeric, 0, 2) . ':' . substr($numeric, 2, 2) . ':' . substr($numeric, 4, 2);
// echo $formatted;

// Write a PHP script to check whether the sentence contains a specific word(3)

// $string = "I am a full stack developer at orange coding academy";
// echo str_replace("orange" , "Word Found!", $string);

// Write a PHP script to extract the file name from the URL.(4)

// $url = "www.orange.com/index.php";
// echo basename($url);

// Write a PHP script to extract the username from the following email address.(5)

// [1]
// $email =  "info@orange.com";
// $name = explode('@', $email)[0];
// echo $name;

// [2]
// $email =  "info@orange.com";
// echo strstr($email,'@',true);

//[3]
// $email = "info@orange.com";
// $aa = substr($email, 0, strpos($email, "@"));
// echo $aa;


// Write a PHP script to get the last three characters from the string.(6)

// $email = "info@orange.com";
// [1]
// $aa = substr($email, strpos($email, "c"));
// echo $aa;
// [2]
// $aa = substr($email, 12, strpos($email, "."));
// echo $aa;

// Write a PHP script to generate simple random passwords [do not use rand () function] from a
// given string (7)

// function generateRandomPassword($characters, $length = 12) {
//     $password = '';
//     $charactersLength = strlen($characters);
//     for ($i = 0; $i < $length; $i++) {
//         $randomIndex = random_int(0, $charactersLength - 1);
//         $password .= $characters[$randomIndex];
//     }

//     return $password;
// }
// $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// $password = generateRandomPassword($characters, 12);
// echo "Generated Password: " . $password;

// Write a PHP script to replace the first word of the sentence with another word. (8)
// function replaceFirstWord($sentence, $newWord) {
//     $words = explode(' ', $sentence);
//     $words[0] = $newWord;
//     return implode(' ', $words);
// }

// $sentence = "That new trainee is so genius.";
// $newWord = "the";

// $result = replaceFirstWord($sentence, $newWord);
// echo $result;


// Write a PHP script to find the first character that is different between two strings. (9)
// $string1 = "dragonball";
// $string2 = "dragonboll";

// $length1 = strlen($string1);
// $length2 = strlen($string2);
// $minLength = ($length1 < $length2) ? $length1 : $length2;

// for ($i = 0; $i < $minLength; $i++) {
//     if ($string1[$i] != $string2[$i]) {
//         echo "First difference between two strings at position " . ($i + 1) . ": \"{$string1[$i]}\" vs \"{$string2[$i]}\"";
//         break;
//     }
// }

// --------------------------------------------------------------- 10
// $string = "Twinkle, twinkle, little star.";
// $array = explode(", ", $string);

// var_dump($array);

// --------------------------------------------------------------- 11
// $char = 'a';

// if ($char == 'z') {
//     $nextChar = 'a';
// } else {
//     $nextChar = chr(ord($char) + 1);
// }

// echo "Next letter after '$char' is '$nextChar'.";

// --------------------------------------------------------------- 12
// $original = "The brown fox";
// $insert = "quick";
// $position = strpos($original, "brown");

// if ($position !== false) {
//     $newString = substr($original, 0, $position) . $insert . " " . substr($original, $position);
// } else {
//     $newString = $original;
// }

// echo $newString;

// echo "<br>";

// $sentence = "The quick brown fox";
// $words = explode(" ", $sentence);
// echo $words[0];

// --------------------------------------------------------------- 13
// $number = "0000657022.24";
// $cleanNumber = ltrim($number, '0');

// echo $cleanNumber;

// --------------------------------------------------------------- 14
// $original = "The quick brown fox jumps over the lazy dog";
// $remove = "fox";

// $newString = str_replace($remove, "", $original);
// $newString = trim($newString);

// echo $newString;

// --------------------------------------------------------------- 15
// $original = "The quick brown fox jumps over the lazy dog---";
// $newString = rtrim($original, '-');

// echo $newString;

// --------------------------------------------------------------- 16
// $original = '\"\1+2/3*2:2-3/4*3';
// $newString = str_replace(array('"', '\\', '+', '/', '*', ':', '-', '.'), ' ', $original);

// echo $newString;

// --------------------------------------------------------------- 17
// $original = "The quick brown fox jumps over the lazy dog";
// $words = explode(" ", $original);
// $firstFiveWords = array_slice($words, 0, 5);
// $newString = implode(" ", $firstFiveWords);

// echo $newString;

// --------------------------------------------------------------- 18
// $original = '2,543.12';
// $newString = str_replace(',', '', $original);

// echo $newString;

// --------------------------------------------------------------- 19
// for ($i = 97; $i <= 122; $i++) {
//     echo chr($i) . " ";
// }

?> 