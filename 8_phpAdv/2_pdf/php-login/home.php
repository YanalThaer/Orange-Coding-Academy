<?php
include "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>User Dashboard</h2>
                    </div>
                    <div class="card-body text-center">
                       
                        <?php
                        if (isset($_SESSION["username"])) {
                            echo "<h4 class='mb-4'>Welcome, " . htmlspecialchars($_SESSION["username"]) . " 👋</h4>";
                            echo "<h4 class='mb-4'>your E-mail: " . htmlspecialchars($_SESSION["email"]) . "</h4>";
                            echo "<h4 class='mb-4'>registeration date: " . htmlspecialchars($_SESSION["created_at"]) . "</h4>";
                            echo "<form action='logout_process.php' method='POST'>
                                    <button type='submit' name='logout' class='btn btn-danger'>Logout</button>
                                  </form>";
                                  
                                  if($_SESSION['role']==3){
                                      echo "<a href='admin.php' name='gotodashboard' class='btn btn-success mt-3'>dash board</a>";
                                  }
                                  
                        } else {
                            echo "<p class='text-muted'>No user is currently logged in.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
