<?php 
ob_start();
session_start();


try{
	require_once("connectFoodie.php");
	$memPsw = $_REQUEST['memPsw'];
	$mail = $_REQUEST['mail'];
	$memarea = $_REQUEST['memarea'];
	$name = $_REQUEST['name'];
	$id = $_REQUEST['id'];
	$phone = $_REQUEST['phone'];

	// var_dump($memPsw,$id,$mail,$memarea,$name);

	$sql = "update member set password = :memPsw,mail = :mail,memarea =:memarea,phone =:phone,name =:name 
			where id = :id ";
    $member = $pdo->prepare($sql);
	$member->bindValue(":memPsw",$memPsw);
	$member->bindValue(":mail",$mail);
	$member->bindValue(":memarea",$memarea);
	$member->bindValue(":name",$name);
	$member->bindValue("id",$id);
	$member->bindValue("phone",$phone);
	$member->execute();
    
    $_SESSION['mem']['password'] = $memPsw;
    $_SESSION['mem']['mail'] = $mail;
    $_SESSION['mem']['memarea'] = $memarea;
    $_SESSION['mem']['name'] = $name;
    $_SESSION['mem']['phone'] = $phone;
    header("Location:../pages/memArea.php");

}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}




 ?>
