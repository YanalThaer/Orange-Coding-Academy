<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['phone'] = $_POST['phone'];
    header("Location: final.php");
    exit();
}
?>

<form method="post" action="">
    <label for="address">Address:</label>
    <input type="text" name="address" required><br>
    
    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" required><br>
    
    <button type="submit">Next</button>
</form>
