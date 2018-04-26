<?php 
	
try {
	require_once("connectFoodie.php");
	$shopName = $_REQUEST['shopName'];

	$sql = "select count(*) as count from member where name = :name";
	$member = $pdo->prepare($sql);
 	$member->bindValue(":name",$shopName);
 	$member->execute();

 	$result = $member->fetch();
 	echo json_encode($result);

} catch (PDOException $ex) {
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}


?>