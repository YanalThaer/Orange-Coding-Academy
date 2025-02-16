<?php
// ----------------------------------------------- 1
// $colors = array('white', 'green', 'red');
// echo "The memory of that scene for me is like a frame of
// film forever frozen at that moment: the {$colors[2]}
// carpet, the {$colors[1]} lawn, the {$colors[0]} house,
// the leaden sky. The new president and his first lady. - Richard M. Nixon";

// ----------------------------------------------- 2
// $colors = array('white', 'green', 'red');
// echo "<ul>";
// foreach ($colors as $color) {
//     echo "<li>$color</li>";
// }
// echo "</ul>";

// ----------------------------------------------- 3
// $cities = array(
//     "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
//     "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
//     "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
//     "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
//     "Portugal"=>"Lisbon", "Spain"=>"Madrid"
// );
// asort($cities);
// foreach ($cities as $country => $capital) {
//     echo "The capital of $country is $capital <br>";
// }

// ----------------------------------------------- 4
// $color = array(4 => 'white', 6 => 'green', 11 => 'red');
// echo $color[4];
// echo "<br>";
// echo reset($color);
// echo "<br>";

// ----------------------------------------------- 5
// $array = array(1, 2, 3, 4, 5);
// $newItem = '$';
// array_splice($array, 3, 0, $newItem);
// print_r($array);
// echo "<br>";

// ----------------------------------------------- 6
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// asort($fruits);
// foreach ($fruits as $key => $value) {
//     echo "$key = $value <br>";
// }

// ----------------------------------------------- 7
// $temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76,
// 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
// $average = array_sum($temps) / count($temps);
// sort($temps);
// $lowest = array_slice($temps, 0, 5);
// $highest = array_slice($temps, -5);
// echo "Average Temperature is: $average <br>";
// echo "List of five lowest temperatures: " . implode(", ", $lowest) . "<br>";
// echo "List of five highest temperatures: " . implode(", ", $highest) . "<br>";

// ----------------------------------------------- 8
// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $result = array_merge($array1, $array2);
// print_r($result);
// echo "<br>";

// ----------------------------------------------- 9
// $colors = array("red", "blue", "white", "yellow");
// $upperColors = array_map('strtoupper', $colors);

// print_r($upperColors);
// echo "<br>";
// echo implode(", ", $upperColors);
// echo "<br>";
// foreach ($upperColors as $color) {
//     echo "$color, ";
// }

// ----------------------------------------------- 10
// $colors = array("RED", "BLUE", "WHITE", "YELLOW");
// $lowerColors = array_map('strtolower', $colors);
// print_r($lowerColors);
// echo "<br>";

// ----------------------------------------------- 11
// for ($i = 200; $i <= 250; $i++) {
//     if ($i % 4 == 0) {
//         echo $i . ", ";
//     }
// }
// echo "<br>";

// ----------------------------------------------- 12
// $words = array("abcd", "abc", "de", "hjjj", "g", "wer");
// $lengths = array_map('strlen', $words); // (4 , 3 , 2 , 4 , 1 , 3)
// echo "The shortest array length is " . min($lengths) . ". The longest array length is "
// . max($lengths) . ".";
// echo "<br>";

// $words = array("ahmad", "hani", "khalil", "hjjj", "ggg", "wer");

// $shortest = strlen($words[0]); 
// $longest = strlen($words[0]);


// foreach($words as $word){

//     $length = strlen($word);


//     if($length < $shortest){
//         $shortest = $length;
//     }

//     if ($length > $longest) {
//         $longest = $length;
//     }
// }

// echo "The shortest array length is $shortest. The longest array length is $longest.";
// echo "<br>";

// ----------------------------------------------- 13
// $numbers = range(11, 20);
// shuffle($numbers); // randomize the order of the array
// $randomNumbers = array_slice($numbers, 0, 10);
// print_r($randomNumbers);
// echo "<br>";

// ----------------------------------------------- 14
// $array1 = array(2, 0, 10, 12, 6);
// $filteredArray = array_filter($array1); // removes falsey values from the array (0 and null and false and empty string)
// echo min($filteredArray);
// echo "<br>";

?>