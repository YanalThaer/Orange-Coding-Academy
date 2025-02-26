<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["first_name"]);
    $lastName = htmlspecialchars($_POST["last_name"]);
    $email = htmlspecialchars($_POST["email"]);
    echo "Name: $firstName $lastName <br> Email: $email";
}
?>
<form method="post">
    <input type="text" name="first_name" placeholder="first name" required>
    <input type="text" name="last_name" placeholder="last name" required>
    <input type="email" name="email" placeholder="email" required>
    <button type="submit">send</button>
</form>
