<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $fileName = $_FILES["file"]["name"];
    $fileSize = $_FILES["file"]["size"];
    $fileType = $_FILES["file"]["type"];
    
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $fileName);
    
    echo "تم رفع الملف: $fileName <br> النوع: $fileType <br> الحجم: $fileSize بايت";
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">upload</button>
</form>
