<?php
include 'db.php';

if(isset($_POST["register"])){
    $username = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role=$_POST["options"];
try{
    $checkQuery = "SELECT * FROM users WHERE email = ? OR username = ?";
    $stmt =$pdo->prepare($checkQuery);
    $stmt->execute([$email, $username]);


    if($stmt->rowCount() >0){
        echo "User already exists!";
    }else {
        $sql = "INSERT INTO users (username, email, password,role) VALUES (?, ?, ?,?)";
        $stmt = $pdo->prepare($sql);

        if($stmt->execute([$username, $email, $password, $role])){
            header("Location: admin.php");
        }else{
            echo "Error: Could not complete registration.";
        }
    }
}catch(PDOException $e){
    die("Error: " . $e->getMessage());

}
}
?>