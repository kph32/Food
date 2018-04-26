<?php
ob_start();
session_start();

echo '1';
$_SESSION["point"] = '1';
// $_SESSION["where"] = $_SERVER["PHP_SELF"];
// $_SESSION["where"] = $_SERVER['HTTP_REFERER'];

?>