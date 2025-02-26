<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["theme"] = $_POST["theme"];
    $_SESSION["language"] = $_POST["language"];
}
$theme = isset($_SESSION["theme"]) ? $_SESSION["theme"] : "light";
$language = isset($_SESSION["language"]) ? $_SESSION["language"] : "Arabic";
?>
<!DOCTYPE html>
<html>
<body style="background-color: <?php echo $theme == 'dark' ? 'black' : 'white'; ?>; color: <?php echo $theme == 'dark' ? 'white' : 'black'; ?>;">
    <form method="post">
        <select name="theme">
            <option value="light">Light</option>
            <option value="dark">Dark</option>
        </select>
        <select name="language">
            <option value="English">English</option>
            <option value="Arabic">Arabic</option>
        </select>
        <button type="submit">submit</button>
    </form>
</body>
</html>
