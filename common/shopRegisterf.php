<meta charset="utf-8">
<?php
try{
	require_once("connectFoodie.php");
	$shopId = $_REQUEST['shopId'];
	$password = $_REQUEST['password'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$mail = $_REQUEST['mail'];

	$sql = "insert into member(member_id,password,name,phone,mail,is_deleted) 
			value(:member_id,:password,:name,:phone,:mail,0)";

	$member = $pdo->prepare($sql);
	$member->bindValue(":member_id",$shopId);
	$member->bindValue(":password",$password);
	$member->bindValue(":name",$name);
	$member->bindValue(":phone",$phone);
	$member->bindValue(":mail",$mail);
	$member->execute();


	$sql2 = "insert into shop(shop_id,shop_name,phone) 
					value(:shop_id,:shop_name,:phone)";

	$member = $pdo->prepare($sql2);
	$member->bindValue(":shop_id",$shopId);
	$member->bindValue(":shop_name",$name);
	$member->bindValue(":phone",$phone);
	$member->execute();

	//相片
	$sql = "insert into photofilm(shop_id) 
					value(:shop_id)";

	$member = $pdo->prepare($sql);
	$member->bindValue(":shop_id",$shopId);
	$member->execute();

	//產品
	$sql = "insert into product(shop_id,product_id,img) 
					value(:shop_id,:product_id,'aaa.png')";

	$member = $pdo->prepare($sql);
	$member->bindValue(":shop_id",$shopId);
	$member->bindValue(":product_id",$shopId.'001');
	$member->execute();

	$sql = "insert into product(shop_id,product_id,img) 
					value(:shop_id,:product_id,'aaa.png')";

	$member = $pdo->prepare($sql);
	$member->bindValue(":shop_id",$shopId);
	$member->bindValue(":product_id",$shopId.'002');
	$member->execute();

	$sql = "insert into product(shop_id,product_id,img) 
					value(:shop_id,:product_id,'aaa.png')";

	$member = $pdo->prepare($sql);
	$member->bindValue(":shop_id",$shopId);
	$member->bindValue(":product_id",$shopId.'003');
	$member->execute();

	$sql = "insert into product(shop_id,product_id,img) 
					value(:shop_id,:product_id,'aaa.png')";

	$member = $pdo->prepare($sql);
	$member->bindValue(":shop_id",$shopId);
	$member->bindValue(":product_id",$shopId.'004');
	$member->execute();

	$sql = "insert into product(shop_id,product_id,img) 
					value(:shop_id,:product_id,'aaa.png')";

	$member = $pdo->prepare($sql);
	$member->bindValue(":shop_id",$shopId);
	$member->bindValue(":product_id",$shopId.'005');
	$member->execute();

	header("Location:../index.php");


}catch(PDOException $e){
	echo "資料庫操作失敗,原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
}