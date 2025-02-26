<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $uname = $_POST["uname"];
    setcookie("uname", $uname, strtotime("+1 minute"), "/");
    header("Location: index4.php");
    exit();
}

if(isset($_COOKIE["uname"])){
    echo "Welcome " . $_COOKIE["uname"] . "!";
} else {
    echo "انت مين؟";
}

?>
<form action="index4.php" method = "POST">
    <label for="uname">User Name:</label>
    <input type="text" name = "uname" id="uname"><br>
    <input type="submit" value="Submit">
</form>