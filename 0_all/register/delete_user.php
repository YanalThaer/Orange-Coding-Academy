<?php 
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user_id"])){
    $user_id = $_POST["user_id"];

    try{
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id]);

        header("Location: admin.php");
        exit();
    }catch(PDOException $e){
        die("Error deleting user: " . $e->getMessage());
    }
}