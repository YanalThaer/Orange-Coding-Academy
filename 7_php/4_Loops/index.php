<?php
// ----------------------------------------------- 1
$number = implode("-", range(1, 10));
echo $number;
echo "<br>";

// ----------------------------------------------- 2
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
    $sum += $i;
}
echo "Total: $sum";
echo "<br>";

// ----------------------------------------------- 3
$string = "A,B,C,D,E";
$letters = explode(",", $string);
for ($i = 0; $i < count($letters); $i++) {
    $letter = $letters[$i];
    switch ($letter) {
        case 'A':
            echo "$letter $letter $letter $letter $letter<br>";
            break;
        case 'B':
            echo "A A A $letter $letter<br>";
            break;
        case 'C':
            echo "A A $letter $letter $letter<br>";
            break;
        case 'D':
            echo "A $letter $letter $letter $letter<br>";
            break;
        case 'E':
            echo "$letter $letter $letter $letter $letter<br>";
            break;
    }
}
echo "<br>";
// for ($i = 0; $i < 5; $i++) {
//     for ($j = 0; $j < 5; $j++) {
//         echo chr(65 + min($i, $j)) . " ";
//     }
//     echo "<br>";
// }
// echo "<br>";

// ----------------------------------------------- 4
$string = "1,2,3,4,5";
$letters = explode(",", $string);
$size = count($letters);
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($j < $size - $i - 1) {
            echo "1 ";
        } else {
            echo $letters[$i] . " ";
        }
    }
    echo "<br>";
}
// for ($i = 0; $i < 5; $i++) {
//     for ($j = 0; $j < 5; $j++) {
//         echo max(1, min($i + 1, $j + 1)) . " ";
//     }
//     echo "<br>";
// }
echo "<br>";

// ----------------------------------------------- 5
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo ($i == $j) ? ($i + 1) . " " : "0 ";
    }
    echo "<br>";
}
echo "<br>";

// ----------------------------------------------- 6
$num = 5;
$fact = 1;
for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}
echo "Factorial of $num is: $fact";
echo "<br>";

// ----------------------------------------------- 7
$n = 10;
$fib = [0, 1];
for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}
echo implode(", ", $fib);
echo "<br>";

// ----------------------------------------------- 8
$text = "Orange Coding Academy";
echo substr_count(strtolower($text), 'c');
echo "<br>";

// ----------------------------------------------- 9
echo "<table border='1' cellpadding='3px' cellspacing='0px'>";
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>$i * $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

// ----------------------------------------------- 10
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
echo "<br>";

// ----------------------------------------------- 11
$n = 5;
$count = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $count++ . " ";
    }
    echo "<br>";
}
echo "<br>";

// ----------------------------------------------- 12
function generatePattern($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo chr(65 + $j) . " ";
        }
        echo "<br>";
    }
    for ($i = $n - 2; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++) {
            echo chr(65 + $j) . " ";
        }
        echo "<br>";
    }
}
$n = 5;
generatePattern($n);

// $size = 5;
// for ($i = 0; $i < $size; $i++) {
//     echo str_repeat(" ", $size - $i - 1);
//     for ($j = 0; $j <= $i; $j++) {
//         echo chr(65 + $j) . " ";
//     }
//     echo "<br>";
// }
// for ($i = $size - 2; $i >= 0; $i--) {
//     echo str_repeat(" ", $size - $i - 1);
//     for ($j = 0; $j <= $i; $j++) {
//         echo chr(65 + $j) . " ";
//     }
//     echo "<br>";
// }
// echo "<br>";

?>