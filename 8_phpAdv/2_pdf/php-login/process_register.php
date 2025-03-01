<?php
include 'db.php';

if(isset($_POST["register"])){
    $username = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role="1";
try{
    $checkQuery = "SELECT * FROM users WHERE email = ? OR user_name = ?";
    $stmt =$pdo->prepare($checkQuery);
    $stmt->execute([$email, $username]);

    if($stmt->rowCount() >0){
        echo "User already exists!";
    }else {
        $sql = "INSERT INTO users (user_name, email, password_user,role) VALUES (?, ?, ?,?)";
        $stmt = $pdo->prepare($sql);
// register to login
        if($stmt->execute([$username, $email, $password, $role])){
            header("Location: login.php");
        }else{
            echo "Error: Could not complete registration.";
        }
    }
    
}catch(PDOException $e){
    die("Error: " . $e->getMessage());

}
}
?>