<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST["name"]) && !empty($_POST["email"])){
$name=htmlspecialchars(trim($_POST["name"]));
$email=htmlspecialchars(trim($_POST["email"]));
$role=$_POST["options"];

    $user_id = $_POST["user_id"];

    try{
        
        $sql = "UPDATE  users set user_name= ?, email=?, role=? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$email,$role,$user_id]);

        header("Location: admin.php");
         exit();
    }catch(PDOException $e){
        die("Error updating user: " . $e->getMessage());

    }
}
else{
    echo "plzz put data in fields";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['options'])) {
        $selected_option = $_POST['options'];
        echo "You selected: " . htmlspecialchars($selected_option);
    } else {
        echo "No option selected.";
    }
}
?>