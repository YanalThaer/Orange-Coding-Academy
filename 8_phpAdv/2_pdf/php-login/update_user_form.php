<?php
include "db.php";
if (isset($_POST["user_id"])) {
    $user_id = $_POST["user_id"];

    // Fetch user data
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <!-- ✅ Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Update User Data</h3>
            </div>
            <div class="card-body">
                <form action="updat.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name="name" type="text" class="form-control" value="<?= htmlspecialchars($user['user_name']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input name="email" type="email" class="form-control" value="<?= htmlspecialchars($user['email']); ?>" required>
                    </div>
                    <!-- radios -->
                    <div class="container mt-5">
                <h4>Select an option:</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="options" id="option1" value="1" checked>
                    <label class="form-check-label" for="option1">
                        role 1
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="options" id="option2" value="2">
                    <label class="form-check-label" for="option2">
                        role 2
                    </label>
                </div>
            </div>
                    <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['id']); ?>">

                    <button name="update" type="submit" class="btn btn-success">Update User Data</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ✅ Bootstrap JS (optional for features like modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
