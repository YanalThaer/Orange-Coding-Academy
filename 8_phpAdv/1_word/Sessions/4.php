<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    header("Location: step2.php");
    exit();
}
?>

<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    
    <button type="submit">Next</button>
</form>
