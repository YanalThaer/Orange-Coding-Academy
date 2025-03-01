
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-success text-white">
                        <h2>Add New User</h2>
                    </div>
                    <div class="card-body">
                        <form action="adduser.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Username:</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
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
                            <div class="d-grid">
                                <button type="submit" name="register" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
