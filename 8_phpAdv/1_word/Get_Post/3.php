<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    $name = htmlspecialchars($_REQUEST["name"]);
    $message = htmlspecialchars($_REQUEST["message"]);
    echo "Name: $name <br> message: $message";
}
?>
<form method="post">
    <input type="text" name="name" placeholder="name" required> <br>
    <textarea name="message" placeholder="اكتب رسالتك هنا..." required></textarea> <br>
    <button type="submit">send</button>
</form>
