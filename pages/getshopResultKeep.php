<?php
ob_start();
session_start();


try {
  require_once("../common/connectFoodie.php");
  // select COUNT(*) as keep from shop s, favorite_shop f where f.shop_id = s.shop_id and s.shop_id = :shop_id and f.is_delete = 1


// select s.shop_name, ROUND(AVG(h.score),1) as scorea, COUNT(h.score) as scoreb, s.open_time, s.close_time, s.address, s.shop_image, s.shop_id from shop s,tag t, shopscore h where s.shop_id = h.shop_id and s.shop_id = t.shop_id and t.city = :shop_place and t.area = :shop_miniplace and t.foodtype like concat('%',:shop_foodtype,'%') and t.time like concat('%',:shop_shoptime,'%') and s.coupon = 1 group by shop_id

  $sql = "select *, ROUND(AVG(h.score),1) as scorea, COUNT(h.score) as scoreb, COUNT(*) as keep from favorite_shop f, shop s, tag t, shopscore h where s.permitted = '1' and s.shop_id = h.shop_id and s.shop_id = f.shop_id and f.is_delete = 1 and s.shop_id = t.shop_id and t.city = :shop_place and t.area = :shop_miniplace and t.foodtype like concat('%',:shop_foodtype,'%') and t.time like concat('%',:shop_shoptime,'%') group by f.shop_id order by keep DESC;";


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