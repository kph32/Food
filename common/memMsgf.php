<?php 


    if(!isset($_SESSION)) 
    { 
    	ob_start();
        session_start(); 
    }
	//載入當前會員資料
$mem = $_SESSION['mem'];

try{
	require_once("connectFoodie.php"); 
	$memId = $mem['member_id'];

	$sql = "select * from mem_message where member_id = :memId and is_delete = 0";

	$memMsg = $pdo->prepare($sql);
	$memMsg->bindValue(":memId" , $memId); 
	$memMsg->execute(); 
	$memMsgAll = $memMsg->fetchAll();

	// echo $memMsgAll[0]['member_id'];
	// echo $memMsgAll[0]['shop_id'];
	// echo $memMsgAll[0]['shop_message'];
	// echo $memMsgAll[0]['name'];
	// echo $memMsgAll[3]['id'];



}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}




?>