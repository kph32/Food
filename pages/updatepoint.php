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
if($_SESSION["score"] === '000'){  //未評分過
  if($_SESSION["point"] === '100'){
    echo "<script>alert('你還沒選擇分數噢'); location.href = 'ShopResultItem.php';</script>";
  }else{
    try {
      require_once("../common/connectFoodie.php");
      //啟用交易管理
      $sql = "insert into shopscore (score_id, shop_id, score, create_time) value (:mem_id, :shop_id, :point, now())"; 

      // $sql = "update favorite_shop if is_delete is 0 set is_delete = 1 else set is_delete = 0 where shop_id = :shop_id and member_id = : mem_id";  
      
      $favorite = $pdo->prepare( $sql);
      //寫到訂單主檔
      //INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`)
      // $_SESSION["memId"] = "josh1111";
      // $_SESSION["ShopResult-submitshopid"] = "friedrice";
      $favorite = $pdo->prepare($sql);
      $favorite -> bindValue(":mem_id", $_SESSION["memId"]);
      $favorite -> bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);
      $favorite -> bindValue(":point", $_SESSION["point"]);
      $favorite -> execute();

      header("Location:ShopResultItem.php");
    } catch (PDOException $ex) {
      echo "錯誤原因 : " , $ex->getMessage(), "<br>";
      echo "錯誤行號 : " , $ex->getLine(), "<br>";
    }
  }
}else{
  // echo $_SESSION["point"];
  // echo $_SESSION["where"];
  echo "<script>alert('你已經評分過了噢'); location.href = 'ShopResultItem.php';</script>";
}

?>    
</center>
</body>
</html>