<?php
ob_start();
session_start();

echo '4';
$_SESSION["point"] = '4';
// $_SESSION["where"] = $_SERVER["PHP_SELF"];
// $_SESSION["where"] = $_SERVER['HTTP_REFERER'];

?>