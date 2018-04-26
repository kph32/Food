<?php
ob_start();
session_start();
include '../views/header.php';
include '../common/Navbar.php';
include '../common/Searchbox.php';


// Turn off error reporting
error_reporting(1);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
include '../common/connectFoodie.php';

//$_SESSION['name']=$_POST['name'];
//$_SESSION['member_id']=$_POST['member_id'];
$name = $_SESSION['name'];
$shop_message = isset($_POST["shop_message"]) ? $_POST["shop_message"] : '';
$message_date = date('Y-m-d G:i:s');

$shop_id = $_SESSION["ShopResult-submitshopid"];
$_SESSION['member_id'] = $_SESSION['memId'];
$member_id = $_SESSION['member_id'];
//var_dump($_POST["shop_message"]);
//die();
// $conn = new mysqli('localhost', 'root', 'josh', 'foodie_react');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($shop_message != '') {
    $stmt = $conn->query("INSERT INTO mem_message(`name`,shop_message,message_date,is_delete,shop_id,member_id)
 VALUES ('$name','$shop_message','$message_date','0','$shop_id','$member_id')");


}


try {
// 連到這個資料夾
require_once("../common/connectFoodie.php");
$sql = "select p.image2, s.shop_name from photofilm p, shop s where s.shop_id = :shop_id and p.shop_id = s.shop_id";
$products = $pdo->prepare($sql);

// $_SESSION["ShopResult-submitshopid"] = $_REQUEST["ShopResult-submitshopid"];
$products->bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);

// $products -> bindValue(":shop_miniplace",$_REQUEST["SearchBox-miniplace"]);
// $products -> bindValue(":mem_id", $_SESSION["memId"]);
$products->execute();

// 這邊先設定評分為100給後面判斷用
$_SESSION["point"] = '100';


if ($products->rowCount() != 0){
while ($prod = $products->fetch(PDO::FETCH_ASSOC)){
?>

<div class="ShopResultItem-Container">
    <div class="ShopResultItem-InfoBig">
        <div class="ShopResultItem-Con col-sm-1 col-xs-0"></div>
        <div class="ShopResultItem-Pic col-sm-5 col-xs-12">
            <div class="ShopResultItem-PicBig">
                <img src="../assets/images/sripic/<?php echo $prod["image2"]; ?>" alt="攤商照片"
                     id="ShopResultItem-PicImageBig">
            </div>

            <div class="ShopResultItem-Order col-sm-0">
                <ul>
                    <li> <?php echo "<a href='order.php?shop_id=" . $_SESSION["ShopResult-submitshopid"] . "' >"; ?>
                        <img src="../assets/images/shopresultitem/shopresultitem_orderaa.png" alt="線上預定"/></li>
                    </a>
                    <li><a href="ShopResultItembuy.php"><img
                                    src="../assets/images/shopresultitem/shopresultitem_orderbb.png" alt="優惠券"/></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="ShopResultItem-Info col-sm-5 ShopResultItem-left">
            <div class="ShopResultItem-InfoTop">
                <div class="ShopResultItem-InfoTitle">
                    <h4><?php echo $prod["shop_name"]; ?></h4>
                    <div class="ShopResultItem-Score">
                        <?php
                        }//while

                        } else {
                            echo "查無此攤商，請重新輸入";
                        }
                        } catch (PDOException $ex) {
                            echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                            echo "錯誤行號 : ", $ex->getLine(), "<br>";
                        }
                        ?>
                        <?php
                        try {
                        // 連到這個資料夾
                        require_once("../common/connectFoodie.php");
                        $sql = "select ROUND(AVG(score),1) as scorea, COUNT(score) as scoreb from shopscore where shop_id = :shop_id";
                        $products = $pdo->prepare($sql);

                        // $_SESSION["ShopResult-submitshopid"] = $_REQUEST["ShopResult-submitshopid"];
                        $products->bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);

                        // $products -> bindValue(":shop_miniplace",$_REQUEST["SearchBox-miniplace"]);
                        // $products -> bindValue(":mem_id", $_SESSION["memId"]);
                        $products->execute();


                        if ($products->rowCount() != 0){
                        while ($prod = $products->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <ul>
                            <li class="ShopResultItem-bb">總評價：<?php echo $prod["scorea"]; ?> /
                                共<?php echo $prod["scoreb"]; ?>人評
                            </li>
                            <li class="ShopResultItem-aa" id="ShopResultItem-a1">★</li>
                            <li class="ShopResultItem-aa" id="ShopResultItem-a2">★</li>
                            <li class="ShopResultItem-aa" id="ShopResultItem-a3">★</li>
                            <li class="ShopResultItem-aa" id="ShopResultItem-a4">★</li>
                            <li class="ShopResultItem-aa" id="ShopResultItem-a5">★</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php
                }//while

                } else {
                    echo "查無此攤商，請重新輸入";
                }
                } catch (PDOException $ex) {
                    echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                    echo "錯誤行號 : ", $ex->getLine(), "<br>";
                }
                ?>
                <?php
                try {
                // 連到這個資料夾
                require_once("../common/connectFoodie.php");
                $sql = "select (CASE f.is_delete WHEN '1' THEN '../assets/images/shopresultitem/shopresultitem_unlove.png' WHEN '0' THEN '../assets/images/shopresultitem/shopresultitem_love.png' END ) as favor from favorite_shop f where f.shop_id = :shop_id and f.member_id = :mem_id";
                $products = $pdo->prepare($sql);

                // $_SESSION["ShopResult-submitshopid"] = $_REQUEST["ShopResult-submitshopid"];
                $products->bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);

                // $products -> bindValue(":shop_miniplace",$_REQUEST["SearchBox-miniplace"]);
                $products->bindValue(":mem_id", $_SESSION["memId"]);
                $products->execute();

                if ($products->rowCount() != 0){
                while ($prod = $products->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div class="ShopResultItem-InfoImage">
                    <!-- <form action="ShopResultItem-intofavorite.php"> -->
                    <a href="updateFavoritesession.php">
                        <?php
                        if (isset($_SESSION["memId"]) === true) {  //未登入
                            ?>
                            <img src=<?php echo $prod["favor"]; ?> alt="加入最愛" id="ShopResultItem-ImageToLove"/>
                            <?php
                        } else {
                            ?>
                            <img src="../assets/images/shopresultitem/shopresultitem_love.png" alt="加入最愛"
                                 id="ShopResultItem-ImageToLove"/>
                            <?php
                        }
                        ?>
                    </a>
                    <!-- <input type="hidden" name="ShopResultItem-favorite"> -->
                    <!-- <input type="submit" name="ShopResultItem-favoritecheck"> -->
                    <!-- </form> -->
                    <?php
                    }//while

                    }else{
                    ?>
                    <div class="ShopResultItem-InfoImage">
                        <!-- <form action="ShopResultItem-intofavorite.php"> -->
                        <a href="updateFavoritesession.php">
                            <?php
                            if (isset($_SESSION["memId"]) === true) {  //未登入
                                ?>
                                <img src="../assets/images/shopresultitem/shopresultitem_love.png" alt="加入最愛"
                                     id="ShopResultItem-ImageToLove"/>
                                <!-- <img src=<?php echo $prod["favor"]; ?> alt="加入最愛" id="ShopResultItem-ImageToLove"/> -->
                                <?php
                            } else {
                                ?>
                                <img src="../assets/images/shopresultitem/shopresultitem_love.png" alt="加入最愛"
                                     id="ShopResultItem-ImageToLove"/>
                                <?php
                            }
                            ?>
                        </a>
                        <?php
                        }
                        } catch (PDOException $ex) {
                            echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                            echo "錯誤行號 : ", $ex->getLine(), "<br>";
                        }
                        ?>








                        <?php
                        try {
                        // 連到這個資料夾
                        require_once("../common/connectFoodie.php");
                        $sql = "select t.time, t.foodtype, m.name, s.address, s.open_time, s.close_time, s.phone, (CASE s.coupon WHEN '1' THEN '優惠券' WHEN '0' THEN '沒有優惠活動' END ) as couponshow from tag t, shop s, member m where s.shop_id = :shop_id and m.member_id = s.shop_id and s.shop_id = t.shop_id";
                        $products = $pdo->prepare($sql);

                        // $_SESSION["ShopResult-submitshopid"] = $_REQUEST["ShopResult-submitshopid"];
                        $products->bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);

                        // $products -> bindValue(":shop_miniplace",$_REQUEST["SearchBox-miniplace"]);
                        // $products -> bindValue(":mem_id", $_SESSION["memId"]);
                        $products->execute();


                        if ($products->rowCount() != 0){
                        while ($prod = $products->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <a href="updatepointsession.php">
                            <img src="../assets/images/shopresultitem/shopresultitem_point.png" alt="我要評價"/>
                        </a>
                    </div>
                </div>
                <div class="clearfix" id="InfoImageclearfix"></div>

                <div class="ShopResultItem-InfoMiddle">
                    <ul>
                        <li><img src="../assets/images/shopresultitem/shopresultitem_food.png"
                                 alt="食物種類"/><?php echo $prod["foodtype"]; ?></li>
                        <li><img src="../assets/images/shopresultitem/shopresultitem_time.png"
                                 alt="時段"/><?php echo $prod["time"]; ?></li>
                        <li><img src="../assets/images/shopresultitem/shopresultitem_ticket.png"
                                 alt="優惠"/><?php echo $prod["couponshow"]; ?></li>
                    </ul>
                </div>
                <div class="clearfix"></div>

                <div class="ShopResultItem-InfoBottom">
                    <ul>
                        <li><span>老闆稱呼：</span><?php echo $prod["name"]; ?></li>
                        <li><span>電話：</span><?php echo $prod["phone"]; ?></li>
                        <li><span>常註地址：</span><?php echo $prod["address"]; ?><img
                                    src="../assets/images/mapsearch/mapsearch_location.png" alt="位置"/></li>
                        <li class="ShopResultItem-Add"><span>現在位置：</span><?php echo $prod["address"]; ?><img
                                    src="../assets/images/mapsearch/mapsearch_location.png" alt="位置"/></li>
                        <li><span>營業時間：</span><?php echo $prod["open_time"]; ?>~<?php echo $prod["close_time"]; ?></li>
                        <li class="ShopResultItem-Open"><span>營業狀態：</span>營業中</li>
                    </ul>
                </div>

                <div class="ShopResultItem-People bounce">
                    <ul>

                        <?php
                        }//while

                        } else {
                            echo "查無此攤商，請重新輸入";
                        }
                        } catch (PDOException $ex) {
                            echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                            echo "錯誤行號 : ", $ex->getLine(), "<br>";
                        }
                        ?>

                        <?php

                        try {
                            // 連到這個資料夾
                            require_once("../common/connectFoodie.php");
                            // SELECT COUNT(*) FROM score WHERE score1>=60;
                            $sql2 = "select COUNT(*) as keep from shop s, favorite_shop f where f.shop_id = s.shop_id and s.shop_id = :shop_id and f.is_delete = 1";
                            $products2 = $pdo->prepare($sql2);
                            // $_SESSION["ShopResult-submitshopid"] = $_REQUEST["ShopResult-submitshopid"];
                            $products2->bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);
                            $products2->execute();

                            if ($products2->rowCount() != 0) {
                                while ($prod = $products2->fetch(PDO::FETCH_ASSOC)) {
                                    ?>

                                    <li><span>收藏人數：</span><?php echo $prod["keep"]; ?></li>

                                    <?php
                                }//while

                            } else {
                                echo "查無此攤商，請重新輸入";
                            }
                        } catch (PDOException $ex) {
                            echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                            echo "錯誤行號 : ", $ex->getLine(), "<br>";
                        }
                        ?>

                        <?php
                        try {
                        // 連到這個資料夾
                        require_once("../common/connectFoodie.php");
                        $sql = "select s.shop_video_id, s.videoword, s.menuword1, s.menuword2, p.image1, p.image2, p.image3, p.image4, p.image5, s.announcement, s.browser_num, s.createdate, s.menu from photofilm p, shop s where s.shop_id = :shop_id and p.shop_id = s.shop_id";
                        $products = $pdo->prepare($sql);
                        // echo $_SESSION["ShopResult-submitshopid"];
                        // $_SESSION["ShopResult-submitshopid"] = $_REQUEST["ShopResult-submitshopid"];
                        $products->bindValue(":shop_id", $_SESSION["ShopResult-submitshopid"]);
                        // $products -> bindValue(":shop_miniplace",$_REQUEST["SearchBox-miniplace"]);
                        // $products -> bindValue(":mem_id", $_SESSION["memId"]);
                        $products->execute();


                        if ($products->rowCount() != 0){
                        while ($prod = $products->fetch(PDO::FETCH_ASSOC)){
                        ?>


                        <li><span>瀏覽人次：</span><?php echo $prod["browser_num"]; ?></li>
                        <li><span>進駐日期：</span><?php echo $prod["createdate"]; ?></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="ShopResultItem-Con col-sm-1 col-xs-0"></div>
        <div class="clearfix"></div>

        <div class="ShopResultItem-InfoSmall">
            <div class="ShopResultItem-Con col-sm-1"></div>
            <div class="ShopResultItem-Piclist col-sm-5">
                <div class="ShopResultItem-PicSmall ShopResultItem-right">
                    <img src="../assets/images/sripic/<?php echo $prod["image1"]; ?>" alt="小照片1"
                         class="ShopResultItem-PicImageSmall"><img
                            src="../assets/images/sripic/<?php echo $prod["image2"]; ?>" alt="小照片2"
                            class="ShopResultItem-PicImageSmall"><img
                            src="../assets/images/sripic/<?php echo $prod["image3"]; ?>" alt="小照片3"
                            class="ShopResultItem-PicImageSmall">
                </div>
            </div>

            <div class="ShopResultItem-Order col-sm-5 col-xs-0">
                <ul>
                    <li>
                        <?php

//                        $sql = "select shop_id from shop";
//                        $result = $pdo->query($sql);
//
//                        $shops = array();
//
//                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//                            $shops[] = $row;
//
//                        }

//                        foreach ($shops as $item) {

                            echo "<a href='order.php?shop_id=" . $_SESSION["ShopResult-submitshopid"] . "' >";

//                        }
                        ?>
                        <img src="../assets/images/shopresultitem/shopresultitem_orderaa.png" alt="線上預定"/></a ></li>

                    <li><a href="ShopResultItembuy.php"><img
                                    src="../assets/images/shopresultitem/shopresultitem_orderbb.png" alt="優惠券"/></a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

        <div class="ShopResultItem-Con col-sm-1 col-xs-1"></div>
        <div class="ShopResultItem-Infomation col-sm-10 col-xs-10">
            <div class="ShopResultItem-Announcement">
                <div class="ShopResultItem-Voice">
                    <img src="../assets/images/shopresultitem/shopresultitem_voice.png" alt="喇叭"/>&nbsp;&nbsp;公告:
                </div>
                <div class="ShopResultItem-Border"></div>
                <div class="ShopResultItem-VoiceSmall">
                    <?php echo $prod["announcement"]; ?>
                </div>
            </div>

            <div class="ShopResultItem-Menu">
                <div class="ShopResultItem-MenuItem">
                    <img src="../assets/images/shopresultitem/shopresultitem_fork.png" alt="叉子"/>&nbsp;&nbsp;菜單
                </div>
                <?php echo $prod["menu"]; ?>
            </div>
        </div>
        <div class="clearfix"></div>


        <div class="ShopResultItem-Con col-sm-1 col-xs-1"></div>
        <div class="ShopResultItem-ImagePic col-sm-10 col-xs-11">
            <div class="ShopResultItem-ImagePicIntro">
                <img src="../assets/images/shopresultitem/shopresultitem_intro.png" alt="背景看板"/>
            </div>
            <div class="ShopResultItem-ImagePicTitle">
                攤車簡介
            </div>
            <div class="ShopResultItem-ImagePicWord">
                <?php echo $prod["introduction"]; ?>
            </div>
            <div class="ShopResultItem-Image">
                <img src="../assets/images/sripic/<?php echo $prod["image4"]; ?>" alt="攤商圖片"/>
                <p><?php echo $prod["menuword1"]; ?></p>
            </div>
            <div class="ShopResultItem-Image">
                <img src="../assets/images/sripic/<?php echo $prod["image5"]; ?>" alt="攤商圖片"/>
                <p><?php echo $prod["menuword2"]; ?></p>
            </div>
        </div>
        <div class="clearfix"></div>


        <div class="ShopResultItem-Con col-sm-1 col-xs-1"></div>
        <div class="ShopResultItem-Infomation col-sm-10 col-xs-10">
            <div class="ShopResultItem-Video">
                <div class="ShopResultItem-VideoBorder"></div>
                <div class="ShopResultItem-VideoTitle">
                    <img src="../assets/images/shopresultitem/shopresultitem_video.png" alt="影片"/>&nbsp;&nbsp;宣傳影片:
                </div>
                <div class="ShopResultItem-VideoMovie">
                    <div style="position:relative;height:0;padding-bottom:75.0%">
                        <iframe src="<?php echo $prod["shop_video_id"]; ?>" width="480" height="360" frameborder="0"
                                style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="ShopResultItem-VideoWord">
                    <?php echo $prod["videoword"]; ?>
                </div>
                <div class="ShopResultItem-VideoBorderBottom"></div>
            </div>

            <?php
            }//while

            } else {
                echo "查無此攤商，請重新輸入";
            }
            } catch (PDOException $ex) {
                echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                echo "錯誤行號 : ", $ex->getLine(), "<br>";
            }
            ?>

            <div class="ShopResultItem-Message">
                <div class="ShopResultItem-MessageItem">
                    留言版
                </div>

                <?php

                try {
                    $sql = "select m.memarea,s.* from mem_message s join member m on m.name = s.name order by message_date DESC limit 0,2";
                    $mem_message = $pdo->query($sql);

                    $floor = 0;

                    while ($mem_messageRow = $mem_message->fetch(PDO::FETCH_ASSOC)) {
                        $floor++;
                        ?>


                        <div class="ShopResultItem-MessagePlace">
                            <div class="ShopResultItem-MessageImage">
                                <img src="../assets/images/shopresultitem/shopresultitem_beau.jpg" alt="留言大頭貼"/>
                            </div>
                            <div class="ShopResultItem-MessageWordList">
                                <div class="ShopResultItem-MessageName">
                                    <span><?php echo $mem_messageRow["name"]; ?></span>&nbsp;<?php echo $mem_messageRow["memarea"]; ?>
                                </div>
                                <div class="ShopResultItem-MessageTime">
                                    發表時間： <?php echo $mem_messageRow["message_date"]; ?>
                                </div>
                                <div class="ShopResultItem-MessageWord">
                                    <?php echo $mem_messageRow["shop_message"]; ?>
                                </div>
                            </div>
                            <div class="ShopResultItem-MessageCheck">
                                檢舉
                            </div>
                            <div class="clearfix"></div>
                            <div class="ShopResultItem-MessageFloor">
                                <?php echo $floor; ?> 樓
                            </div>
                        </div>
                        <?php

                    }//while

                } catch
                (PDOException $ex) {
                    echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                    echo "錯誤行號 : ", $ex->getLine(), "<br>";
                }
                ?>


                <?php

                if ($_SESSION['member_id'] == "") {
                    echo "留言請登入";
                } else {

                    $member_id = $_SESSION['member_id'];
                }
                    try {
                        $sql = "select * from member WHERE member_id = '$member_id'";
                        $members = $pdo->query($sql);

                        while ($memRow = $members->fetch(PDO::FETCH_ASSOC)) {

                            ?>
                            <div class="ShopResultItem-MessagePlace">

                                <div class="ShopResultItem-MessageImage">
                                    <img src="../assets/images/shopresultitem/<?php echo $memRow["img"]; ?>.jpg"
                                         alt="留言大頭貼"/>
                                </div>
                                <form action="" method="post">
                                    <div class="ShopResultItem-MessageWordList">
                                        <div class="ShopResultItem-MessageName">
                                            <span> <?= $_SESSION['name'] ?></span>&nbsp;&nbsp;
                                        </div>
                                        <div class="ShopResultItem-MessageTime">

                                        </div>
                                        <!--                                    <div class="ShopResultItem-MessageWord"></div>-->
                                    </div>
                                    <div class="ShopResultItem-MessageCheck">

                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="ShopResultItem-MessageFloor">

                                    </div>
                                    <div class="ShopResultItem-MessageReback">
                                        <input name="shop_message" maxlength="150" type="text" placeholder="回覆..."
                                               class="ShopResultItem-MessageTest"/>
                                        <a href="#content"> <input type="submit" value="送出"
                                                                   class="ShopResultItem-MessageSubmit"/></a>
                                    </div>


                                </form>

                            </div>
                            <?php


                    }//while

                }
                catch
                (PDOException $ex) {
                    echo "錯誤原因 : ", $ex->getMessage(), "<br>";
                    echo "錯誤行號 : ", $ex->getLine(), "<br>";
                }
                ?>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <?php
    include '../views/footer.php';
    ?>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.js"></script> -->
<script type="text/javascript">
    // 新增瀏覽次數
    function shopinit() {
        // alert("跨出第一步");
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    //modify here
                    // showShopListTime(xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
        }
        var url = "insertbrowser_num.php";
        xhr.open("Get", url, true);
        xhr.send(null);

        // alert("跨出第一步");
        var imgs = document.getElementsByClassName("ShopResultItem-PicImageSmall");
        for (var i in imgs) {
            imgs[i].onclick = showLarge;
        }

        // 這個換成PHP了
        // var heart = document.getElementById("ShopResultItem-ImageToLove");
        // heart.onclick = switchFavorite;

        var a1 = document.getElementById("ShopResultItem-a1");
        var a2 = document.getElementById("ShopResultItem-a2");
        var a3 = document.getElementById("ShopResultItem-a3");
        var a4 = document.getElementById("ShopResultItem-a4");
        var a5 = document.getElementById("ShopResultItem-a5");
        a1.onclick = ShopResultItem_showa1;
        a2.onclick = ShopResultItem_showa2;
        a3.onclick = ShopResultItem_showa3;
        a4.onclick = ShopResultItem_showa4;
        a5.onclick = ShopResultItem_showa5;

    }
    var timerId, opacity;
    function showOpacity() {
        opacity += 0.01;
        document.getElementById("ShopResultItem-PicImageBig").style.opacity = opacity;
        if (opacity > 1) {
            clearInterval(timerId);
        }
        console.log(opacity);
    }

    function showLarge(e) {
        // console.log("yoooooo");
        //換圖
        document.getElementById("ShopResultItem-PicImageBig").src = e.target.src;
        //淡入
        opacity = 0;
        // alert("跨出第一步");
        document.getElementById("ShopResultItem-PicImageBig").style.opacity = opacity;
        clearInterval(timerId);
        timerId = setInterval(showOpacity, 10);
    }

    function ShopResultItem_showa1() {
        // alert("跨出第一步");
        // 為什麼寫javascript不行
        // opacity = #fa0;
        // var a1 = document.getElementById("ShopResultItem-a1");
        // a1.color = #fa0;
        $('#ShopResultItem-a1').css('color', '#fa0');
        $('#ShopResultItem-a2').css('color', '#fa0');
        $('#ShopResultItem-a3').css('color', '#fa0');
        $('#ShopResultItem-a4').css('color', '#fa0');
        $('#ShopResultItem-a5').css('color', '#fa0');
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    //modify here
                    getpointa1(xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
        }
        // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
        var url = "getpointa1.php";
        xhr.open("Get", url, true);
        xhr.send(null);
    }
    function getpointa1(jsonStr) {

        var point = JSON.parse(jsonStr);
        // alert(point);
        // alert(shop.length);
        $_SESSION["point"] = point;

    }
    function ShopResultItem_showa2() {
        $('#ShopResultItem-a1').css('color', '#BDB7B7');
        $('#ShopResultItem-a2').css('color', '#fa0');
        $('#ShopResultItem-a3').css('color', '#fa0');
        $('#ShopResultItem-a4').css('color', '#fa0');
        $('#ShopResultItem-a5').css('color', '#fa0');
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    //modify here
                    getpointa2(xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
        }
        // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
        var url = "getpointa2.php";
        xhr.open("Get", url, true);
        xhr.send(null);
    }
    function getpointa2(jsonStr) {

        var point = JSON.parse(jsonStr);
        // alert(point);
        // alert(shop.length);
        $_SESSION["point"] = point;

    }
    function ShopResultItem_showa3() {
        $('#ShopResultItem-a1').css('color', '#BDB7B7');
        $('#ShopResultItem-a2').css('color', '#BDB7B7');
        $('#ShopResultItem-a3').css('color', '#fa0');
        $('#ShopResultItem-a4').css('color', '#fa0');
        $('#ShopResultItem-a5').css('color', '#fa0');
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    //modify here
                    getpointa3(xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
        }
        // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
        var url = "getpointa3.php";
        xhr.open("Get", url, true);
        xhr.send(null);
    }
    function getpointa3(jsonStr) {

        var point = JSON.parse(jsonStr);
        // alert(point);
        // alert(shop.length);
        $_SESSION["point"] = point;

    }
    function ShopResultItem_showa4() {
        $('#ShopResultItem-a1').css('color', '#BDB7B7');
        $('#ShopResultItem-a2').css('color', '#BDB7B7');
        $('#ShopResultItem-a3').css('color', '#BDB7B7');
        $('#ShopResultItem-a4').css('color', '#fa0');
        $('#ShopResultItem-a5').css('color', '#fa0');
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    //modify here
                    getpointa4(xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
        }
        // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
        var url = "getpointa4.php";
        xhr.open("Get", url, true);
        xhr.send(null);
    }
    function getpointa4(jsonStr) {

        var point = JSON.parse(jsonStr);
        // alert(point);
        // alert(shop.length);
        $_SESSION["point"] = point;

    }
    function ShopResultItem_showa5() {
        $('#ShopResultItem-a1').css('color', '#BDB7B7');
        $('#ShopResultItem-a2').css('color', '#BDB7B7');
        $('#ShopResultItem-a3').css('color', '#BDB7B7');
        $('#ShopResultItem-a4').css('color', '#BDB7B7');
        $('#ShopResultItem-a5').css('color', '#fa0');

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    //modify here
                    getpointa5(xhr.responseText);
                } else {
                    alert(xhr.status);
                }
            }
        }
        // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
        var url = "getpointa5.php";
        xhr.open("Get", url, true);
        xhr.send(null);
    }
    function getpointa5(jsonStr) {

        var point = JSON.parse(jsonStr);
        // alert(point);
        // alert(shop.length);
        $_SESSION["point"] = point;

    }


    window.onload = shopinit;

</script>