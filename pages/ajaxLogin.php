<?php
ob_start();
session_start();
try{
  //從前端送來的json字串
  $loginInfo = json_decode($_REQUEST["loginInfo"]);

  require_once("../common/connectFoodie.php");
  $sql = "select * from member where member_id=:memId and password=:memPsw";
  $member = $pdo->prepare( $sql);
  $member->bindValue(":memId",$loginInfo->memId);
  $member->bindValue(":memPsw",$loginInfo->memPsw);
  $member->execute();
  if( $member->rowCount()!=0){
  	$memRow = $member->fetch();
  	
  	echo $memRow["name"];
    $_SESSION["memId"] = $memRow["member_id"];
    $_SESSION["memName"] = $memRow["name"];
    $_SESSION["email"] = $memRow["mail"];
    $_SESSION["phone"] = $memRow["phone"];
    $_SESSION["password"] = $memRow["password"];

  // 產品
  // $sql2 = "select * from product where where shop_id=:memId";
  // $product = $pdo->prepare( $sql2);
  // $product->bindValue(":memId",$loginInfo->memId);
  // $product->execute();
  // if( $product->rowCount()!=0){
  //   $productRow = $product->fetch();
    
  //   $_SESSION["productname"] = $productRow["name"];
  //   $_SESSION["price"] = $productRow["price"];
  //   $_SESSION["spec"] = $productRow["spec"];
  //   $_SESSION["info"] = $productRow["info"];

  }else{
  	echo "error";
  }
}catch(PDOException $ex){
  echo "資料庫操作失敗，原因 : " , $ex->getMessage() , "<br>";
  echo "行號 : " , $ex->getLine() , "<br>";
}
?>