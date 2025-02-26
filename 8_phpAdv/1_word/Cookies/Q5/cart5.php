<?php
if(isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true); // decode the cookie value to an associative array.
} else {
    $cart = [];
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>shopping cart</h1>
        <ul class="list-group">
            <?php foreach($cart as $carts): ?>
            <li class="list-group-item"><?php echo htmlspecialchars($carts);?></li>
            <?php endforeach; ?>
        </ul>
        <a href="index5.php" class="btn btn-primary mt-3">Store</a><br>

        <form method="post">
        <button name="clear_cart" class="btn btn-primary mt-3">Clear</button>
    </form>
    </div>

    <?php
    if (isset($_POST["clear_cart"])) {
        setcookie("cart", "", time() - 3600, "/");
        header("Location: " . $_SERVER["PHP_SELF"]);
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
