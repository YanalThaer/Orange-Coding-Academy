<?php
//2. Visit Counter with Cookies
if(isset($_COOKIE["counts"])) {
    echo "counts: " . $_COOKIE["counts"] +1;
    $counts = $_COOKIE["counts"];
    $counts++;
    setcookie("counts", $counts, strtotime("+1 year"), "/");

} else {
    $counts = 1;
    setcookie("counts", $counts, strtotime("+1 year"), "/");
    echo "counts: " . $counts;
}

?>
  