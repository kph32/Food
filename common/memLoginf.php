<meta charset="UTF-8" />
<?php 

ob_start();
session_start();

try{
	require_once("connectFoodie.php"); 
	$memId = $_REQUEST["memId"];
	$memPsw = $_REQUEST["memPsw"];
	$sql = "select * 
			from member 
			where member_id = :memId and password = :memPsw and is_deleted = 0" ; 
	//:memId  :memPsw 日後會餵給prepare($sql)的未知參數
	$member = $pdo->prepare($sql);
	$member->bindValue(":memId" , $memId); // 綁定數值(":memId" , $memId) ("未知參數",接收的值)
	$member->bindValue(":memPsw" , $memPsw);
	$member->execute(); //執行prepare的方法

	if($member->rowCount() !=0 ){
		//登入成功進行跳轉
		$_SESSION['mem']= $member->fetch(PDO::FETCH_ASSOC);
		header("Location: ../pages/memArea.php");
	    exit; 
	}else{
		//登入失敗會alert訊息,並且跳轉到原登入畫面
		echo "<script>alert('查無此帳密,請重新登入');location.href='../pages/memLogin.php'</script>";
	}
}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}




 ?>