<?php
session_start();
$timeout = 5;

//              true                   &&       true    8 - 7 = 1  > 30
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: 4.php");
    exit();
}
$_SESSION['last_activity'] = time(); // 7
echo "Welcome, " . $_SESSION['last_activity'];
?>
