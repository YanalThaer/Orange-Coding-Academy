<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["username"] == "admin" && $_POST["password"] == "1234") {
    $_SESSION["username"] = $_POST["username"];
    header("Location: 2.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
