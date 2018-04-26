<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<link href="" rel="stylesheet">
</head>
<body>
<center>
<?php 
if($_SESSION["mostlove"] === '000'){  //未加到最愛過
    try {
      require_once("../common/connectFoodie.php");
      //啟用交易管理
      $sql = "insert into favorite_shop ( is_delete, collect_time, shop_id, member_id) value ( 1, now(), :shop_id, :mem_id)"; 

      // $sql = "update favorite_shop if is_delete is 0 set is_delete = 1 else set is_delete = 0 where shop_id = :shop_id and member_id = : mem_id";  
      
      $favorite = $pdo->prepare( $sql);
      //寫到訂單主檔
      //INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`)
      // $_SESSION["memId"] = "josh1111";
      // $_SESSION["ShopResult-submitshopid"] = "friedrice";
      $favorite = $pdo->prepare($sql);
      $favorite -> bindValue(":mem_id", $_SESSION["memId"]);
      $favorite -> bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);
      // $favorite -> bindValue(":point", $_SESSION["point"]);
      $favorite -> execute();

      header("Location:ShopResultItem.php");
    } catch (PDOException $ex) {
      echo "錯誤原因 : " , $ex->getMessage(), "<br>";
      echo "錯誤行號 : " , $ex->getLine(), "<br>";
    }

}else{
  // echo $_SESSION["point"];
  // echo $_SESSION["where"];
  // echo "<script>alert('你已經評分過了噢'); location.href = 'ShopResultItem.php';</script>";
  try {
      require_once("../common/connectFoodie.php");
      //啟用交易管理
      $sql = "update favorite_shop set is_delete = CASE WHEN is_delete = 0 THEN 1 WHEN is_delete = 1 THEN 0 END where shop_id = :shop_id and member_id = :mem_id"; 

      // $sql = "update favorite_shop if is_delete is 0 set is_delete = 1 else set is_delete = 0 where shop_id = :shop_id and member_id = : mem_id";  
      
      $favorite = $pdo->prepare( $sql);
      //寫到訂單主檔
      //INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`)
      // $_SESSION["memId"] = "josh1111";
      // $_SESSION["ShopResult-submitshopid"] = "friedrice";
      $favorite = $pdo->prepare($sql);
      $favorite -> bindValue(":mem_id", $_SESSION["memId"]);
      $favorite -> bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);
      // $favorite -> bindValue(":point", $_SESSION["point"]);
      $favorite -> execute();

      header("Location:ShopResultItem.php");
    } catch (PDOException $ex) {
      echo "錯誤原因 : " , $ex->getMessage(), "<br>";
      echo "錯誤行號 : " , $ex->getLine(), "<br>";
    }
}

?>    
</center>
</body>
</html>