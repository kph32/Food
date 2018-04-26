<?php 
ob_start();
session_start();
	//載入當前會員資料
$mem = $_SESSION['mem'];

try{
	require_once("connectFoodie.php"); 
	$memId = $mem['member_id'];
	$shopId = $_REQUEST['shopId'];
	var_dump($shopId);

	$sql = "update favorite_shop set is_delete = 0 where member_id = :member_id and shop_id= :shop_id";

	$collectDel = $pdo->prepare($sql);
	$collectDel->bindValue(":member_id" , $memId); 
	$collectDel->bindValue(":shop_id" , $shopId); 
	$collectDel->execute(); 



}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}








?>