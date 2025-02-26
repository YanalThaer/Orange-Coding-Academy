<?php
session_start();
if (!isset($_SESSION["score"])) {
    $_SESSION["score"] = 0;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["answer"] == "correct") {
        $_SESSION["score"] += 1;
    }
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
        <p>ما هو لون السماء؟</p>
        <button name="answer" value="correct">أزرق</button>
        <button name="answer" value="wrong">أحمر</button>
    </form>
    <p>درجتك: <?php echo $_SESSION["score"]; ?></p>
</body>
</html>