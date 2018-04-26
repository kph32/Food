<?php 
	
try {
	require_once("connectFoodie.php");
	$memId = $_REQUEST['memId'];

	$sql = "select count(0) as count from member where member_id = :member_id and is_deleted = 0";
	$member = $pdo->prepare($sql);
 	$member->bindValue(":member_id",$memId);
 	$member->execute();

 	$result = $member->fetchALL();
 	echo $result[0]['count'];

} catch (PDOException $ex) {
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}


?>