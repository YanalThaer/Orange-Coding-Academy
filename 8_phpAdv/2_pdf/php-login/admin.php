<?php
include 'db.php';
session_start();
if($_SESSION["role"]==1){
    header("Location: home.php");
}
$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    <div class="d-flex justify-content-between">
        <h2 class="mb-4">Admin Dashboard - Mange users</h2>
        <a href="home.php" class="btn btn-success h-50  ">Home</a>
       <a href="addnewuser.php"> <button class="btn btn-primary">Add User</button></a>
       
                    
                             <form action='logout_process.php' method='POST'>
                                    <button type='submit' name='logout' class='btn btn-danger'>Logout</button>
                                  </form>
                                  
                         
    </div>
    
    <!-- <form action="add_user"></form> -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Registered At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']); ?></td>
                    <td><?= htmlspecialchars($user['user_name']); ?></td>
                    <td><?= htmlspecialchars($user['email']); ?></td>
                    <td><?= htmlspecialchars($user['created_at']); ?></td>
                  
                    <td>
                        <form action="delete_user.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <form action="update_user_form.php" method="POST" style="display: inline;">
                            <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                            <button type="submit" class="btn btn-warning btn-sm mt-3">Update</button>
                         </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



    </div>
    
</body>
</html>