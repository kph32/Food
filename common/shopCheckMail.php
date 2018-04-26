<?php 
	
try {
	require_once("connectFoodie.php");
	$mail = $_REQUEST['mail'];

	$sql = "select count(*) as count from member where mail = :mail";
	$member = $pdo->prepare($sql);
 	$member->bindValue(":mail",$mail);
 	$member->execute();

 	$result = $member->fetch();
 	echo json_encode($result);

} catch (PDOException $ex) {
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}


?>