<?php
ob_start();
session_start();
?>
<?php
  require_once("../common/connectFoodie.php");
  $sql = 'select * from product where shop_id=:shop_id and product_id=:product_id';
  // $products =  $pdo->query($sql);
  $products = $pdo->prepare( $sql);
  $products->bindValue(":shop_id",$_SESSION["memId"]);
  $products->bindValue(":product_id",$_SESSION["memId"].'005');
  $products->execute();


  // 清除暫存
  $_SESSION["productsnb"]= 0;
  
  while($prodRow = $products->fetch()){
    $_SESSION["productsnb"]=count($prodRow);
    }//while

if($_SESSION["productsnb"]==0){
   try{
  //放入資料
    echo "放入";
  $loginInfo = json_decode($_REQUEST["loginInfo"]);

  require_once("../common/connectFoodie.php");

  $sql = "insert into product(shop_id,name,price,spec,info,is_deleted,img,product_id) 
      value('{$_SESSION["memId"]}','{$loginInfo->proName}','{$loginInfo->proPic}','{$loginInfo->proSpec}','{$loginInfo->proInfo}',0,'{$loginInfo->proImg}',:product_id)";
  
    $products = $pdo->prepare( $sql);
    $products->bindValue(":product_id",$_SESSION["memId"].'005');
    $products->execute();

}catch(PDOException $ex){
  echo "資料庫操作失敗，原因 : " , $ex->getMessage() , "<br>";
  echo "行號 : " , $ex->getLine() , "<br>";
}

  
}else{
  try{
  //更新資料
    echo "更新";
  $loginInfo = json_decode($_REQUEST["loginInfo"]);

  require_once("../common/connectFoodie.php");

  $sql = "update product 
          set name = '{$loginInfo->proName}',
              price = '{$loginInfo->proPic}',
              spec = '{$loginInfo->proSpec}',
              info = '{$loginInfo->proInfo}',
              img = '{$loginInfo->proImg}'
          where shop_id='{$_SESSION["memId"]}' and product_id=:product_id";

    $products = $pdo->prepare( $sql);
    $products->bindValue(":product_id",$_SESSION["memId"].'005');
    $products->execute();

}catch(PDOException $ex){
  echo "資料庫操作失敗，原因 : " , $ex->getMessage() , "<br>";
  echo "行號 : " , $ex->getLine() , "<br>";
}
}

?>