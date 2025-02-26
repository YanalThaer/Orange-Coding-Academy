<?php

if($_SERVER["REQUEST_METHOD"] == "GET") {
    header("Location: index5.php");
}
$product = $_GET['product'];// super global variable
if(isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);// decode the cookie value to an associative array.
} else {
    $cart = [];
}

$cart[] = $product; 
setcookie('cart', json_encode($cart), time() + (86400 * 30), "/");
header("Location: index5.php");
exit();
?>
