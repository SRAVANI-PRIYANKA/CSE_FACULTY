<?php
unset($_SESSION["roll_number"]);
unset($_SESSION["name"]);
unset($_SESSION["name"]);
session_destroy();
header("Location: /cs/z/login.php");
?>

