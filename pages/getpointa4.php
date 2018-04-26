<?php
ob_start();
session_start();

echo '2';
$_SESSION["point"] = '2';
// $_SESSION["where"] = $_SERVER["PHP_SELF"];
// $_SESSION["where"] = $_SERVER['HTTP_REFERER'];

?>