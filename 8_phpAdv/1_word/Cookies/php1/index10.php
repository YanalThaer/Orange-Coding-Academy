<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quiz</h1>
    <form action="index10.php" method="post">
        <label for="userLevel">1-What is the purpose of the const keyword in JavaScript?</label><br>
        <input type="radio" name="userLevel" value="A">A-Declaring a variable that can be reassigned later<br>
        <input type="radio" name="userLevel" value="B">B-Declaring a constant variable that cannot be reassigned<br>    
        <input type="radio" name="userLevel" value="C">C-Declaring a constant function<br>
        <input type="radio" name="userLevel" value="D">D-Automatically detecting the variable type<br><br><br>

        <label for="userLevel2">2-Which of the following programming languages is primarily used for front-end web development?</label><br>
        <input type="radio" name="userLevel2" value="A">A-Python<br>
        <input type="radio" name="userLevel2" value="B">B-Java<br>
        <input type="radio" name="userLevel2" value="C">C- HTML & CSS<br>
        <input type="radio" name="userLevel2" value="D">D-SQL<br><br>
        <button type="submit">Submit</button>   
    </form> 
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userLevel = $_POST["userLevel"];
    $userLevel2 = $_POST["userLevel2"];
    $score = 0;
    if ($userLevel == "B") {
        $score++;
    }
    if ($userLevel2 == "C") {
        $score++;
    }
    echo "Your score is: " . $score . "/2";
    setcookie("score", $score, strtotime("+1 year"), "/");
}
