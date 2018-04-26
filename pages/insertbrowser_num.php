<?php
ob_start();
session_start();
try{
  require_once("../common/connectFoodie.php");
  $sql = "update shop set browser_num = browser_num + 1 where shop_id = :shop_id;";
  $products = $pdo->prepare($sql);

  $products -> bindValue(":shop_id",$_SESSION["ShopResult-submitshopid"]);
  $products -> execute();
  
  // 因為是insert資料所以不用回傳
  // if( $products->rowCount() == 0 ){ //找不到
  //   //傳回空的JSON字串
  //   echo "{}";
  // }else{ //找得到
  //   //取回一筆資料
  //   $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
  //   //送出json字串
  //   echo json_encode($prodRow);
  // }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>