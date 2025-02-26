<?php

session_start();
// $_SESSION["userName"] = "Yanal";
// echo "Session has been set";

// if (isset($_SESSION["userName"])) {
//     echo "Welcome " . $_SESSION["userName"];
// } else {
//     echo "Session is not set";
// }

session_unset();
session_destroy();

echo "deleted";

?>