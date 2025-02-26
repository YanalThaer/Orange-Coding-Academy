<?php
// Set a secure and HTTP-only cookie
$cookie_name = "secureCookie";
$cookie_value = "This is a secure cookie";
$cookie_expire = time() + (86400 * 30); // 30 days
$cookie_path = "/";

// Set the cookie
setcookie($cookie_name, htmlspecialchars($cookie_value), $cookie_expire, $cookie_path, "", true, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cookie Test</title>
</head>
<body>
    <h1>Secure Cookie Test</h1>
    <p>Check if the secure cookie is set:</p>
    <?php
    if(isset($_COOKIE[$cookie_name])) {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie '" . $cookie_name . "' is not set!";
    }
    ?>

    <h2>Attempt to access the cookie using JavaScript</h2>
    <script>
        // Try to access the cookie using JavaScript
        var cookieValue = document.cookie.split('; ').find(row => row.startsWith('secureCookie='));
        if (cookieValue) {
            console.log("Cookie accessed via JavaScript: " + cookieValue);
        } else {
            console.log("Cookie cannot be accessed via JavaScript (HTTP-only).");
        }
    </script>
</body>
</html>