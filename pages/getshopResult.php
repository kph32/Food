<?php
ob_start();
session_start();
try{
  require_once("../common/connectFoodie.php");
  $sql = "select *, COUNT(h.score) as scoreb, ROUND(AVG(h.score),1) as scorea from shopscore h, shop s, tag t where s.permitted = '1' and h.shop_id = s.shop_id and s.shop_id = t.shop_id and t.city = :shop_place and t.area = :shop_miniplace and t.foodtype like concat('%',:shop_foodtype,'%') and t.time like concat('%',:shop_shoptime,'%') group by h.shop_id order by scorea DESC;";
  $products = $pdo->prepare($sql);

  $products -> bindValue(":shop_place",$_SESSION["SearchBox-place"]);
  $products -> bindValue(":shop_miniplace",$_SESSION["SearchBox-miniplace"]);
  $products -> bindValue(":shop_foodtype",$_SESSION["SearchBox-foodtype"]);
  $products -> bindValue(":shop_shoptime",$_SESSION["SearchBox-shoptime"]);
  $products -> execute();
  
  if( $products->rowCount() == 0 ){ //找不到
    //傳回空的JSON字串
    echo "{}";
  }else{ //找得到
    //取回一筆資料
    $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
    //送出json字串
    echo json_encode($prodRow);
  }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>