<meta charset="UTF-8">
<?php
ob_start();
session_start();
if(isset($_SESSION["memId"]) === false){
    echo "<script>alert('還沒登入不能加入最愛噢'); location.href = 'ShopResultItem.php';</script>";
}else{
    try {
        require_once("../common/connectFoodie.php");
        //啟用交易管理
        $_SESSION["mostlove"]='000';
        $sql = "select f.is_delete from shop s, favorite_shop f where s.shop_id = f.shop_id and f.shop_id = :shop_id and f.member_id = :mem_id";

        // $sql = "update favorite_shop if is_delete is 0 set is_delete = 1 else set is_delete = 0 where shop_id = :shop_id and member_id = : mem_id";  
        
        $favorite = $pdo->prepare( $sql);
        //寫到訂單主檔
        //INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`)
        // $_SESSION["memId"] = "josh1111";
        // $_SESSION["ShopResult-submitshopid"] = "friedrice";
        $favorite = $pdo->prepare($sql);
        $favorite -> bindValue(":mem_id", $_SESSION["memId"]);
        $favorite -> bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);
        $favorite -> execute();

    	if( $favorite->rowCount() !=0 ){
    		while($prod = $favorite->fetch(PDO::FETCH_ASSOC)){
    			$_SESSION["mostlove"] = $prod["is_delete"];
    			// echo $_SESSION["score"];
    			header("Location:updateFavorite.php");
    		}
    	}else{
    		header("Location:updateFavorite.php");
    	}
        
      } catch (PDOException $ex) {
        echo "錯誤原因 : " , $ex->getMessage(), "<br>";
        echo "錯誤行號 : " , $ex->getLine(), "<br>";
      }

    // $_SESSION["ShopResult-submitshopid"] = $_REQUEST["ShopResult-submitshopid"];
    // // echo $_SESSION["ShopResult-submitshopid"];
    // // echo $_SESSION["memId"];
    // header("Location:ShopResultItem.php");
}
?>