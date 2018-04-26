<?php 
	
try {
	require_once("connectFoodie.php");
	$phone = $_REQUEST['phone'];

	$sql = "select count(*) as count from member where phone = :phone";
	$member = $pdo->prepare($sql);
 	$member->bindValue(":phone",$phone);
 	$member->execute();

 	$result = $member->fetch();
 	echo json_encode($result);

} catch (PDOException $ex) {
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}


?>