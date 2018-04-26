<?php
ob_start();
session_start();

echo '5';
$_SESSION["point"] = '5';
// $_SESSION["where"] = $_SERVER["PHP_SELF"];
// $_SESSION["where"] = $_SERVER['HTTP_REFERER'];

?>