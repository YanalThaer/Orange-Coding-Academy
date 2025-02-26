<?php

setcookie("message", "Hello from Page 2", time() + (86400 * 30), "/"); 
?>





<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1</h1>
    <p>Hello from page 1</p>
    <a href="page2.php">go to page 2 </a>
</body>
</html>