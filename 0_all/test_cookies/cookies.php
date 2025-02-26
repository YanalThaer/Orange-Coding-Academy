<?php

// setcookie("username", "Yanal", time() + 86400 , "/");
// echo "Cookie has been set";

// echo "<br>";

// if (isset($_COOKIE["username"])) {
//     echo "Welcome " . $_COOKIE["username"];
// } else {
//     echo "Cookie is not set";
// }

setcookie("username", " ", time() - 3600 , "/");
echo "Cookie has been deleted";


?>