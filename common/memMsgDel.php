<?php 
ob_start();
session_start();
	//載入當前會員資料
$mem = $_SESSION['mem'];

try{
	require_once("connectFoodie.php"); 
	$id = $_REQUEST['id'];
	var_dump($id);

	$sql = "update mem_message set is_delete = 1 where id = :id ";

	$MsgDel = $pdo->prepare($sql);
	$MsgDel->bindValue(":id" , $id); 
	$MsgDel->execute(); 



}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}








?>