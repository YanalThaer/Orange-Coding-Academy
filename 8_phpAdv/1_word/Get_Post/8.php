<?php
session_start();
if (!isset($_SESSION["csrf_token"])) {
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32)); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["csrf_token"] !== $_SESSION["csrf_token"]) {
        die("طلب غير صالح!");
    }
    echo "تم إرسال البيانات بنجاح!";
}
?>
<form method="post">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION["csrf_token"]; ?>">
    <input type="text" name="data" placeholder="أدخل بيانات">
    <button type="submit">إرسال</button>
</form>
