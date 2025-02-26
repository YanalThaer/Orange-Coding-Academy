<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["survey_answers"] = $_POST;
}
?>
<form method="post">
    <p>ما هو لونك المفضل؟</p>
    <input type="text" name="color">
    <p>ما هو طعامك المفضل؟</p>
    <input type="text" name="food">
    <p>وين بتحبو اتسافرو</p>
    <input type="text" name="travil">
    <button type="submit">إرسال</button>
</form>
<?php
if (isset($_SESSION["survey_answers"])) {
    echo "<h3>إجاباتك:</h3>";
    echo "اللون المفضل: " . $_SESSION["survey_answers"]["color"] . "<br>";
    echo "الطعام المفضل: " . $_SESSION["survey_answers"]["food"] . "<br>";
    echo "المكان المفضل للترفيه: " . $_SESSION["survey_answers"]["travil"] . "<br>";
}
?>
