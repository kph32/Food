<?php 
try {
	require_once("connectFoodie.php");
	$memId = $_REQUEST['member_id'];

	$sql = "select count(*) as count from member where member_id = :member_id";
	$member = $pdo->prepare($sql);
 	$member->bindValue(":member_id",$memId);
 	$member->execute();

 	$result = $member->fetch();

 	echo json_encode($result);
} catch (PDOException $ex) {
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}
?>