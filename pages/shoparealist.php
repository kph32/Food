<meta charset="utf-8">
<?php
ob_start();
session_start();
include '../views/header.php';
include '../common/Navbar.php';
include '../common/Searchbox.php';
?>
<?php
try{
	require_once("../common/connectFoodie.php");
	$shop_name = $_REQUEST['ShopAreaShopInfo-shop_name'];
	$shop_phone = $_REQUEST['ShopAreaShopInfo-shop_phone'];
	$city = $_REQUEST['ShopAreaShopInfo-city'];
	$area = $_REQUEST['ShopAreaShopInfo-area'];
	$address = $_REQUEST['ShopAreaShopInfo-address'];
	$open_time = $_REQUEST['ShopAreaShopInfo-opentime'];
	$close_time = $_REQUEST['ShopAreaShopInfo-closetime'];
	// 營業時段
	$time = implode('', $_REQUEST['ShopAreaShopInfo-time']);
	// 輸入陣列用''方開每個選項
	$foodtype = implode('', $_REQUEST['ShopAreaShopInfo-foodtype']);
	$menu = $_REQUEST['ShopAreaShopInfo-menu'];
	$theFile01 = $_REQUEST['theFile01'];
	$theFile02 = $_REQUEST['theFile02'];
	$theFile03 = $_REQUEST['theFile03'];
	$announcement = $_REQUEST['ShopAreaShopInfo-announcement'];
	$introduction = $_REQUEST['ShopAreaShopInfo-announcement2'];
	$menuword1 = $_REQUEST['ShopAreaShopInfo-menuword1'];
	$theFile04 = $_REQUEST['theFile04'];
	$menuword2 = $_REQUEST['ShopAreaShopInfo-menuword2'];
	$theFile05 = $_REQUEST['theFile05'];
	$shopMovie = $_REQUEST['shopMovie'];
	
	// echo $menuword1;
	
// 	//上傳圖片
// foreach( $_FILES["upFile"]["error"] as $i => $data ){
// 	switch ($_FILES["upFile"]["error"][$i]){
// 		case 0 :
// 		    $dir = "images";
// 		    if( file_exists($dir) === false){
// 		    	mkdir($dir);
// 		    }
// 		    $from = $_FILES["upFile"]["tmp_name"];
// 		    $to = "../assets/images/shopProduct/" .mb_convert_encoding($_FILES["upFile"]["name"][$i],"big5","utf-8");;
// 		    copy($from, $to);
// 		    echo "拷貝成功<br>";
// 			break;
// 		case 1 :
// 			echo "上傳檔太大,不可超過", ini_get("upload_max_filesize") , "<br>";
// 			break;
// 		case 2 :
// 			echo "上傳檔太大,不可超過","bytes<br>";
// 			break;
// 		case 3 :
// 			echo "上傳過程有誤<br>";
// 			break;
// 		case 4 :
// 			echo "未選檔案<br>";
// 			break;
// 		}
// }

	// 改新shop資料
	$sql = "update shop 
          set shop_name = '{$shop_name}',
              address = '{$address}',
              open_time = '{$open_time}',
              close_time = '{$close_time}',
              phone = '{$shop_phone}',
              shop_image = '{$theFile01}',
              shop_video_id = '{$shopMovie}',
              announcement = '{$announcement}',
              introduction = '{$introduction}',
              menu = '{$menu}',
              menuword1 = '{$menuword1}',
              menuword2 = '{$menuword2}'
          where shop_id=:memId";

     echo $sql,'<br>';
    $aaa = $pdo->prepare( $sql);
    $aaa->bindValue(":memId",$_SESSION['memId']);
    $aaa->execute();


    // 攤商tag編輯
	    require_once("../common/connectFoodie.php");
	  $sql = 'select * from tag where shop_id=:shop_id';
	  $products = $pdo->prepare( $sql);
	  $products->bindValue(":shop_id",$_SESSION["memId"]);
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
	  require_once("../common/connectFoodie.php");

	  $sql = "insert into tag(shop_id,city,area,foodtype,time) 
	      value(:shop_id,'{$city}','{$area}','{$time}','{$foodtype}')";
	    $products = $pdo->prepare( $sql);
		  $products->bindValue(":shop_id",$_SESSION["memId"]);
		  $products->execute();
	    
	}catch(PDOException $ex){
	  echo "資料庫操作失敗，原因 : " , $ex->getMessage() , "<br>";
	  echo "行號 : " , $ex->getLine() , "<br>";
	}

	  
	}else{
	  try{
	  //更新資料
	    echo "更新";
	  require_once("../common/connectFoodie.php");

	  $sql = "update tag 
	          set city = '{$city}',
	              area = '{$area}',
	              foodtype = '{$foodtype}',
	              time = '{$time}'
	          where shop_id=:shop_id";

	    $products = $pdo->prepare( $sql);
	    $products->bindValue(":shop_id",$_SESSION["memId"]);
	    $products->execute();
	}catch(PDOException $ex){
	  echo "資料庫操作失敗，原因 : " , $ex->getMessage() , "<br>";
	  echo "行號 : " , $ex->getLine() , "<br>";
	}
	}

	// 攤商圖片編輯
	  require_once("../common/connectFoodie.php");
	  $sql = 'select * from photofilm where shop_id=:shop_id';
	  $products = $pdo->prepare( $sql);
	  $products->bindValue(":shop_id",$_SESSION["memId"]);
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
	  require_once("../common/connectFoodie.php");

	  $sql = "insert into photofilm(shop_id,image1,image2,image3,image4,image5) 
	      value(:shop_id,'{$theFile01}','{$theFile02}','{$theFile03}','{$theFile04}','{$theFile05}')";
	      $products = $pdo->prepare( $sql);
		  $products->bindValue(":shop_id",$_SESSION["memId"]);
		  $products->execute();
	    
		}catch(PDOException $ex){
		  echo "資料庫操作失敗，原因 : " , $ex->getMessage() , "<br>";
		  echo "行號 : " , $ex->getLine() , "<br>";
		}

	  
	}else{
	  try{
	  //更新資料
	    echo "更新";
	  require_once("../common/connectFoodie.php");

	  $sql = "update photofilm 
	          set image1 = '{$theFile01}',
	              image2 = '{$theFile02}',
	              image3 = '{$theFile03}',
	              image4 = '{$theFile04}',
	              image5 = '{$theFile05}'
	          where shop_id=:shop_id";

	    $products = $pdo->prepare( $sql);
	    $products->bindValue(":shop_id",$_SESSION["memId"]);
	    $products->execute();
		}catch(PDOException $ex){
		  echo "資料庫操作失敗，原因 : " , $ex->getMessage() , "<br>";
		  echo "行號 : " , $ex->getLine() , "<br>";
		}
	}

	




    // 連結到攤商專區
	header("Location:../pages/ShopArea.php");


}catch(PDOException $e){
	echo "資料庫操作失敗,原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
}
?>