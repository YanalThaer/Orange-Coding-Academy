<?php
session_start();
if ($_SESSION["role"] == "admin") {
    echo "hi admin!";
    exit();
} else if ($_SESSION["role"] == "editor") {
    echo "hi Editor!";
    exit();
} else {
    echo "hi Viewer!";
    exit();
}
?>
