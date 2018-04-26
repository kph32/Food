<?php 
	
try {
	$msg = $_REQUEST['msg'];
	$video_time = $_REQUEST['video_time'];
	$video_id = $_REQUEST['video_id'];
	require_once("connectFoodie.php");

	$sql = "insert into videomessage (video_id, message, video_time, create_date) 
	values(:video_id, :msg, :video_time, now())";

	$videoMsgInsert = $pdo->prepare($sql);
	$videoMsgInsert ->bindValue(':video_id',$video_id);
	$videoMsgInsert ->bindValue(':msg',$msg);
	$videoMsgInsert ->bindValue(':video_time',$video_time);
	$videoMsgInsert ->execute();



} catch (PDOException $ex) {
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}


?>