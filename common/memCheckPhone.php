<meta charset="UTF-8" />
<?php 


try{
	require_once('connectFoodie.php');
	$phone = $_REQUEST['phone'];
	// $phone = '0911222333';

	$sql = "select count(0) as count from member where phone = :phone and is_deleted = 0";
	$member = $pdo->prepare($sql);
	$member->bindValue(":phone",$phone);
	$member->execute();

	$result = $member->fetchAll();
	echo '{"count":"'.$result[0]['count'].'"}';
	// var_dump($result);



}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}





 ?>