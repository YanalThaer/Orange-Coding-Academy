<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    setcookie("uname", $uname, strtotime("+1 year"), "/");
    setcookie("email", $email, strtotime("+1 year"), "/");
    setcookie("password", $password, strtotime("+1 year"), "/");
    header("Location: index3.php");
    exit();
}

if (isset($_POST["uname"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $uname = $_COOKIE["uname"];
    $email = $_COOKIE["email"]; 
    $password = $_COOKIE["password"];
} else {
    $uname = "";
    $email = "";
    $password = "";
}

?>

<form action="index3.php" method ="POST">
    <label for="uname">User Name:</label>
    <input type="text" name="uname" id="uname" value="<?php echo isset($_COOKIE['uname']) ? $_COOKIE['uname'] : ''; ?>"><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>"><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>"><br>
    <input type="submit" value="Submit">
</form>

