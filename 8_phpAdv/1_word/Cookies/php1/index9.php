<?php
if (!isset($_COOKIE['userLevel'])) {
    setcookie("userLevel", "User Level: Beginner", time() + 86400, "/");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newLevel = $_POST["userLevel"];
    setcookie("userLevel", $newLevel, time() + 86400, "/");
    header("Location: index9.php");
    exit();
}

$currentLevel = isset($_COOKIE["userLevel"]) ? $_COOKIE["userLevel"] : "Not set yet :("; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task(9)</title>
</head>
<body>
    <h1>Welcom</h1>
    <p><?php echo $currentLevel; ?></p>
    <form action="index9.php" method="post">
        <select name="userLevel" id="userLevel">
            <option value="User Level: Beginner">Beginner</option>
            <option value="User Level: Intermediate">Intermediate</option>
            <option value="User Level: Advanced">Advanced</option>
        </select>
        <button type="submit">submit</button>
    </form>
</body>
</html>
