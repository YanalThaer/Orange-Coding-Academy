<?php
session_start();
if (!isset($_SESSION["visit_time"])) {
    $_SESSION["visit_time"] = date("Y-m-d H:i:s");
}
$ip_address = $_SERVER["REMOTE_ADDR"];
echo "وقت زيارتك الأولى: " . $_SESSION["visit_time"] . "<br>";
echo "عنوان IP الخاص بك: " . $ip_address;
?>
