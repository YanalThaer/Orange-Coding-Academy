<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>
</head>
<body>
    <h1>Page 2</h1>
    <?php
    if(isset($_COOKIE["message"])) {
        $message = $_COOKIE["message"];
        echo "<p>file cookie is set: $message</p>";
    } else {
        echo "<p> file cookie is not set</p>";
    }
    ?>
    <a href="page1.php">back to page 1</a>
</body>
</html>
<?php
