<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["username"] == "admin" && $_POST["password"] == "1234") {
    $_SESSION["username"] = $_POST["username"];
    header("Location: dashboard.php");
    exit();
}
?>
<form method="post">
    <input type="text" name="username" placeholder="name" required>
    <input type="password" name="password" placeholder="password" required>
    <button type="submit">login</button>
</form>
