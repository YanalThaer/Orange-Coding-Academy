<?php
include "db.php";
?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow-lg" style="width: 350px;">
    <h3 class="text-center mb-3">Login</h3>
    <form id="loginform" action = "login_process.php" method = "POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="loginEmail" name ="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="loginPassword" name = "password" required>
        </div>
        <button type="submit" class="btn btn-success w-100" name = "login">Login</button>
        <p class="text-center mt-3"><a href="register.php">Register</a></p>
        <div class="login-message"></div>
    </form>
</div>

</body>
</html>