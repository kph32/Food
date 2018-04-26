<?php
ob_start();
session_start();

echo '3';
$_SESSION["point"] = '3';
// $_SESSION["where"] = $_SERVER["PHP_SELF"];
// $_SESSION["where"] = $_SERVER['HTTP_REFERER'];

?>