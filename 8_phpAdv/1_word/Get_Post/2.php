<?php
if (isset($_GET["query"])) {
    $query = htmlspecialchars($_GET["query"]);
    echo "نتائج البحث عن: $query";
}
?>
<form method="get">
    <input type="text" name="query" placeholder="ابحث هنا...">
    <button type="submit">بحث</button>
</form>
