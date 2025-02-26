<?php
session_start();

$products = [
    [
        "id" => 1,
        "name" => "Laptop", 
        "price" => 700
    ],
    ["id" => 2, "name" => "Phone", "price" => 300],
    ["id" => 3, "name" => "Smart Watch", "price" => 150],
    ["id" => 4, "name" => "Tablet", "price" => 400]
];

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product_id"])) {
    $product_id = intval($_POST["product_id"]);
    foreach ($products as $product) {
        if ($product["id"] === $product_id) {
            $_SESSION["cart"][] = $product;
            break;
        }
    }
}

if (isset($_POST["clear_cart"])) {
    unset($_SESSION["cart"]);
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
</head>
<body>
    <h2>Online Store</h2>

    <h3>Available Products:</h3>
    <form method="post">
        <?php foreach ($products as $product): ?>
            <p>
                <?php echo $product["name"] . " - " . $product["price"] . " JD"; ?>
                <button type="submit" name="product_id" value="<?php echo $product["id"]; ?>">Add to Cart</button>
            </p>
        <?php endforeach; ?>
    </form>

    <h3>Shopping Cart:</h3>
    <?php if (!empty($_SESSION["cart"])): ?>
        <ul>
            <?php foreach ($_SESSION["cart"] as $item): ?>
                <li><?php echo $item["name"] . " - " . $item["price"] . " JD"; ?></li>
            <?php endforeach; ?>
        </ul>
        <form method="post">
            <button type="submit" name="clear_cart">Clear Cart</button>
        </form>
    <?php else: ?>
        <p>The cart is empty.</p>
    <?php endif; ?>

</body>
</html>
