<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method ="POST" action="">
    <input type="text" name="comment" placeholder="Enter your name">
    <button type="submit">Send</button>
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $comment = htmlspecialchars($_POST["comment"]);
        echo "Your comment is: $comment";
    }

    echo "<br>";

    $name = "Yanal";

    function sayHallo(){
        echo "Hello " . $GLOBALS["name"]; 
    }
    sayHallo();
    echo "<br>";

    $servers = [
        'Host' => $_SERVER['HTTP_HOST'] ?? 'N/A',
        'Document Root' => $_SERVER['DOCUMENT_ROOT'] ?? 'N/A',
        'System Root' => $_SERVER['SystemRoot'] ?? 'N/A',
        'Server Name' => $_SERVER['SERVER_NAME'] ?? 'N/A',
        'Server Port' => $_SERVER['SERVER_PORT'] ?? 'N/A',
        'Current File Dir' => $_SERVER['PHP_SELF'] ?? 'N/A',
        'Request URI' => $_SERVER['REQUEST_URI'] ?? 'N/A',
        'Server Software' => $_SERVER['SERVER_SOFTWARE'] ?? 'N/A',
        'Client Info' => $_SERVER['HTTP_USER_AGENT'] ?? 'N/A',
        'Remote Address' => $_SERVER['REMOTE_ADDR'] ?? 'N/A',
        'Remote Port' => $_SERVER['REMOTE_PORT'] ?? 'N/A',
    ];
    // print_r($server);
?>

<h2>Server info</h2>
<ul>
    <?php foreach($servers as $key => $value): ?>
        <li><strong><?= htmlspecialchars($key); ?></strong> : <?= htmlspecialchars($value); ?></li>
    <?php endforeach; ?>

    <?php foreach($servers as $key => $value) {
        echo "<li><strong>$key</strong> : $value</li>";
    } 
    ?>
</ul>
</body>
</html>