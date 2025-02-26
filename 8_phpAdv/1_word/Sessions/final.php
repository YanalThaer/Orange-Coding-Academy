<?php
session_start();
?>

<h2>Review Your Information</h2>
<p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
<p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
<p><strong>Address:</strong> <?php echo $_SESSION['address']; ?></p>
<p><strong>Phone:</strong> <?php echo $_SESSION['phone']; ?></p>

<form method="post" action="submit.php">
    <button type="submit">Submit</button>
</form>
