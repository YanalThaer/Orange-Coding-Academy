<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fruit = $_POST["fruit"];
    setcookie("fruit", $fruit, time() + 20, "/");
    header("Location: index6.php");
    exit();
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clear"])){
    setcookie("fruit", "", time() - 20, "/");
    unset($_COOKIE["fruit"]);
    header("Location: index6.php");
    exit();
} else if (isset($_COOKIE["fruit"])){
    echo "You selected: " . $_COOKIE["fruit"];
} else {
    echo "Please select a fruit";
}
?>

<form action="index6.php" method = "POST">
    <select name="fruit" id="fruit">
        <option value="none"></option>
        <option value="apple">Apple</option>
        <option value="banana">Banana</option>
        <option value="orange">Orange</option>
        <option value="grape">Grape</option>
    </select>
    <input type="submit" value="Submit" name="submit">
    <input type="submit" value="Clear" name="clear">
</form>