<?php

ob_start();
session_start();
//啟用session
// include '../common/common.php';
include '../../views/header.php';
include '../../common/connectFoodie.php';
try{
    
    $sql = "select * from member where member_id = :member_id and password = :password";
    $member = $pdo->prepare($sql);
    $member -> bindValue(":member_id",$_REQUEST["member_id"]);
    $member -> bindValue(":password",$_REQUEST["password"]);
    $member -> execute();

    if( $member->rowCount() !=0 ){
        $memRow = $member->fetch(PDO::FETCH_ASSOC);

        //登入成功，將登入者資訊寫入session
        $_SESSION["member_id"] = $memRow["member_id"];
        $_SESSION["name"] = $memRow["name"] ;
        $_SESSION["password"] = $memRow["password"];

    }else{
        echo "查無此帳密，請重新登入";
    }
}catch(PDOException $ex){
    echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
    echo "行號：",$ex->getLine(),"<br>";
}

?>
    <div class="memLogin">
        <div class="memLogin-container">
            <div class="memLogin-contain">
                <img src="../../assets/images/Searchbox-pon.png">
                <form method="post" action="admin.php">
                    <div class="memLogin-account">
                        帳號： <input type="text" name="member_id">
                    </div>
                    <div class="memLogin-psw">
                        密碼： <input type="text" name="password">
                    </div>
                    <div class="memLogin-submit">
                        <input type="submit" name="submit" value="登入">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
include '../../views/footer.php';
?>