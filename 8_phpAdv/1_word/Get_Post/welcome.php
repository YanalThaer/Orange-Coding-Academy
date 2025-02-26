<?php
if (isset($_GET["first_name"]) && isset($_GET["last_name"])) {
    echo "Hi " . htmlspecialchars($_GET["first_name"]) . " " . htmlspecialchars($_GET["last_name"]);
}
?>
