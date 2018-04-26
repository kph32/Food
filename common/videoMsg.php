<?php 
	
try {
	require_once("connectFoodie.php");
	$isReturn = $_REQUEST['isReturn'];
	$video_id = $_REQUEST['video_id'];
	$sql = "select * from videomessage where video_id = :video_id order by video_time";

	$video = $pdo->prepare($sql);
	$video ->bindValue(':video_id',$video_id);
	$video ->execute();

	$videoMsg = $video->fetchAll();

	if($isReturn == "1"){
		echo json_encode($videoMsg);
	}


} catch (PDOException $ex) {
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}


?>