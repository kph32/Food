<?php 
    if(!isset($_SESSION)) 
    { 
    	ob_start();
        session_start(); 
    }
	//載入當前會員資料
$mem = $_SESSION['mem'];

try{
	require_once("connectFoodie.php"); 
	$memId = $mem['member_id'];

	$sql = "select  favorite_shop.is_delete , favorite_shop.shop_id , favorite_shop.collect_time , favorite_shop.member_id , shop.open_time , shop.announcement, shop.shop_id ,shop.shop_image  from shop join favorite_shop  on favorite_shop.shop_id = shop.shop_id and favorite_shop.member_id= :memId and  favorite_shop.is_delete = 1";

	$collect = $pdo->prepare($sql);
	$collect->bindValue(":memId" , $memId); 
	$collect->execute(); 

	$collectAll = $collect->fetchAll(); 

	// var_dump($collectAll);
	// echo $collectAll[0]["shop_id"];
	// echo $collectAll[0]["collect_time"];
	// echo $collectAll[0]["member_id"];
	// echo $collectAll[0]["open_time"];
	// echo $collectAll[0]["announcement"];
	// echo $collectAll[0]["shop_image"];

}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}








?>