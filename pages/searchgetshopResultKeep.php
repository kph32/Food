<?php
ob_start();
session_start();


try {
  require_once("../common/connectFoodie.php");
  // select COUNT(*) as keep from shop s, favorite_shop f where f.shop_id = s.shop_id and s.shop_id = :shop_id and f.is_delete = 1


  $sql = "select *, ROUND(AVG(h.score),1) as scorea, COUNT(h.score) as scoreb, COUNT(*) as keep from favorite_shop f, shop s, shopscore h where s.permitted = '1' and s.shop_id = h.shop_id and s.shop_id = f.shop_id and f.is_delete = 1 and s.shop_name like concat('%',:shop_name,'%') group by f.shop_id order by keep DESC;";


  $products = $pdo->prepare($sql);

  $products -> bindValue(":shop_name",$_SESSION["Navbar-searchname"]);
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