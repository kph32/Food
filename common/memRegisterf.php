<?php 

try{
	require_once("connectFoodie.php");
	$memId = $_REQUEST['memId'];
	$memPsw = $_REQUEST['memPsw'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$mail = $_REQUEST['mail'];
	$memarea = $_REQUEST['memarea'];

	// var_dump($memId,$memPsw,$name,$phone,$mail,$memarea);

	$sql = "insert into member(member_id,role,name,memarea,password,mail,phone,is_deleted) 
			value(:memId,'user',:name,:memarea,:password,:mail,:phone,0)";

	$member = $pdo->prepare($sql);
	$member->bindValue(":memId",$memId);
	$member->bindValue(":password",$memPsw);
	$member->bindValue(":name",$name);
	$member->bindValue(":phone",$phone);
	$member->bindValue(":mail",$mail);
	$member->bindValue(":memarea",$memarea);
	$member->execute();

	header("Location:../pages/memLogin.php");





}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}








 ?>