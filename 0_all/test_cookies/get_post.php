<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method ="get" action="get_post.php">
    Name : <input type="text" name="name">
    Age : <input type="text" name="age">

    <button type="submit">Send</button>
</form>

<form method ="post" action="get_post.php">
    Car : <input type="text" name="car">
    Modle : <input type="text" name="modle">

    <button type="submit">Send</button>
</form>

<?php
    if(isset($_GET['name']) && isset($_GET['age']) && !empty($_GET['name']) && !empty($_GET['age'])) {
        $name = htmlspecialchars($_GET["name"]);
        $age = htmlspecialchars($_GET["age"]);
        echo "Your name is: $name <br>";
        echo "Your age is: $age <br>";
    } else {
        echo "Please enter your name and age <br>";
    }

    if(isset($_POST['car']) && isset($_POST['modle']) && !empty($_POST['car']) && !empty($_POST['modle'])) {
        $car = htmlspecialchars($_POST["car"]);
        $modle = htmlspecialchars($_POST["modle"]);
        echo "Your Car is: $car <br>";
        echo "Your Modle is: $modle <br>";
    } else {
        echo "Please enter your car and modle <br>";
    }
?>
</body>
</html>