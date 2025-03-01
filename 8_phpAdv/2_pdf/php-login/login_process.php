<?php
include 'db.php';
session_start();
if(isset($_POST["login"])){
    $email = htmlspecialchars(trim($_POST["email"]));
    $password =htmlspecialchars(trim($_POST["password"]));

try{
    // $checkQuery = "SELECT * FROM users WHERE email = ? ";
    // $stmt =$pdo->prepare($checkQuery);
    // $stmt->execute([$email]);
    $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user && password_verify($password,$user["password_user"]))
   {
        $_SESSION["username"]=$user["user_name"];
        $_SESSION["email"]=$user["email"];
        $_SESSION["created_at"]=$user["created_at"];
        $_SESSION["role"]=$user["role"];
        if($_SESSION["role"]==1){
            header("Location: home.php");
        }else{
            header("Location: admin.php");
        }
}
    else{
        echo "invalide email or password";
    }
}catch(PDOException $e){
    die("Error: " . $e->getMessage());

}
}

?>