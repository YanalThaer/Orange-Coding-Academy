<?php
echo "IP الخادم: " . $_SERVER["SERVER_ADDR"] . "<br>";
echo "اسم الملف الحالي: " . $_SERVER["SCRIPT_NAME"] . "<br>";
echo "المتصفح المستخدم: " . $_SERVER["HTTP_USER_AGENT"] . "<br>";
echo "طريقة الطلب: " . $_SERVER["REQUEST_METHOD"] . "<br>";
echo "IP العميل: " . $_SERVER["REMOTE_ADDR"];
?>
