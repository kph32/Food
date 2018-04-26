<?php
ob_start();
session_start();

$_SESSION["ShopResult-submitshopid"] = $_REQUEST["ShopResult-submitshopid"];
// echo $_SESSION["ShopResult-submitshopid"];
// echo $_SESSION["memId"];
header("Location:ShopResultItem.php");

?>