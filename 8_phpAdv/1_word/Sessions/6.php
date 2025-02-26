<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["role"] = $_POST["role"];
    header("Location: admin.php");
    exit();
}
?>
<form method="post">
    <input type="text" name="username">
    <select name="role">
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
        <option value="viewer">Viewer</option>
    </select>
    <button type="submit">login</button>
</form>
