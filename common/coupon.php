<?php
ob_start();
session_start();
try{
	require_once("connectFoodie.php");
	// $sql="	update shop 
	// 		set coupon=:coupon
	// 		where shop_id=:shop_id;"
	// $coupon = $pdo->prepare($sql);
	// $coupon->bindValue(":shop_id",$_SESSION["memId"]);
	// $coupon->bindValue(":coupon",$_REQUEST["coupon"]);
	// $coupon->execute();
	$coupon=$_REQUEST["coupon"];
	$shop_id=$_SESSION["memId"];
	
	$sql="	update shop 
			set coupon=$coupon
			where shop_id='$shop_id'";
    // echo $sql;			
	$pdo->exec($sql);//執行//

}catch(PDOException $e){
	echo "資料庫操作失敗,原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";	
}
?>