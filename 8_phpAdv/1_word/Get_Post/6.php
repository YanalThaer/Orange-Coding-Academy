<?php
//1. Setting and Retrieving a User Preference
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST["color"];
    setcookie("background_color", $color, strtotime("+1 year"), "/"); // name,value,time,path
    header("Location: 6.php");
    exit();
}

if (isset($_COOKIE["background_color"])) {
    echo "<style>body { background-color: " . $_COOKIE["background_color"] . " }</style>";
    echo "background-color: " . $_COOKIE["background_color"] . ";";
}
?>

<form action="6.php" method="post">
    <label for="color">background color:</label>
    <select name="color" id="color">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        <option value="pink">pink</option>
    </select>
    <input type="submit" value="Color">
</form> 


