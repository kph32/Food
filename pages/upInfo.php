<?php
ob_start();
session_start();
try{
  //從前端送來的json字串
  $loginInfo = json_decode($_REQUEST["loginInfo"]);

  require_once("../common/connectFoodie.php");
  $sql = "update member 
          set password = '{$loginInfo->shopPass}',
              mail = '{$loginInfo->shopMail}',
              phone = '{$loginInfo->shop_phone}'
          where member_id=:memId";

  $member = $pdo->prepare( $sql);
  $member->bindValue(":memId",$_SESSION["memId"]);
  $member->execute();
    
    // $_SESSION["memId"] = $loginInfo->memId;
    $_SESSION["email"] = $loginInfo->shopMail;
    $_SESSION["phone"] = $loginInfo->shop_phone;
    $_SESSION["password"] = $loginInfo->shopPass;

}catch(PDOException $ex){
  echo "資料庫操作失敗，原因 : " , $ex->getMessage() , "<br>";
  echo "行號 : " , $ex->getLine() , "<br>";
}

?>