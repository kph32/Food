<?php 
  ob_start();
  session_start();
  include '../views/header.php';
  include '../common/Navbar.php';
  include '../common/Searchbox.php';
 
?>


  <script type="text/javascript">
    



function shopArea(event, shoppage) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(shoppage).style.display = "block";
    event.currentTarget.className += " active";
}
  </script>


	<div class="ShopArea-width">
		<div class="con1 col-sm-1 col-xs-0"></div>
		<div class="col-sm-10 col-xs-12">
			<div class="ShopArea-Shopnav">
				<!-- <a href="javascript:;"><img src="../assets/images/Shoplogo.png" alt="回首頁" class="Shoplogo"></a> -->
				<h4>攤商專區</h4>
			</div>
		</div>
		<div class="col-sm-1 con1 col-xs-0"></div>
		<div class="clearfix"></div>

		
		<div class="con1 col-sm-1 col-xs-0"></div>
		<div class="col-sm-2 col-xs-12">
			<div class="ShopArea-box">
				<!-- <div class="leftFont tablinks"  onclick="shopArea(event,'ShopAreaHome')"><a href="javascript:;">攤商專區首頁</a></div> -->
				<div class="leftFont tablinks"  onclick="shopArea(event,'ShopAreaInfo')"><a href="javascript:;">帳號資訊設定</a></div>
				<div class="leftFont tablinks"  onclick="shopArea(event,'ShopAreaShopInfo')"><a href="javascript:;">營業資訊編輯</a></div>
				<div class="leftFont tablinks"  onclick="shopArea(event,'ShopAreaItem')"><a href="javascript:;">商品資訊編輯</a></div>
				<div class="leftFont tablinks"  onclick="shopArea(event,'ShopAreaOrder')"><a href="javascript:;">攤商訂單查詢</a></div>
				<div class="leftFont tablinks"  onclick="shopArea(event,'ShopAreaPromo')"><a href="javascript:;">優惠券活動管理</a></div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-sm-8 col-xs-12">
			<!-- 攤商區首頁 -->
			<!-- <div class="ShopAreaHome-box tabcontent" id="ShopAreaHome">
					<li>
        		<div class="col-sm-6 col-xs-12">
                <div class="con1 col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                  <div class="ShopAreaHome-pic">
                    <img src='../assets/images/Positioning.png' alt="立即定位"/>
                  </div>
                  <div class="ShopAreaHome-text">營業中請開啟定位<br/>營業地址將顯示該定位位置</div>
                  <div class="ShopAreaHome-location">目前定位地點:中壢中央大學資策會</div>
                  <div class="ShopAreaHome-loctime">定位時間:2017/4/9</div>
                  <div class="ShopAreaHome-update">重新定位</div>
                </div>
                <div class="con1 col-sm-2 col-xs-2"></div>
              </div>

              <div class="col-sm-6 col-xs-12">
                <div class="con1 col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                  <div class="ShopAreaHome-qrcode">
                    <img src='../assets/images/qrcode.png' alt="QR code"/>
                  </div>
                  <div class="ShopAreaHome-text">列印張貼QRCode到攤車上，可讓消費者用手機掃描連結到您的攤車資訊頁面並且定位到您的營業位置。</div>
                  <div class="ShopAreaHome-print">列印</div>
                </div>
                <div class="con1 col-sm-2 col-xs-2"></div>
                <div class="clearfix"></div>
              </div>              
            <div class="clearfix"></div>
            </div> -->

      <!-- 帳號資訊設定 -->
            <form action="">
              <div class="ShopAreaInfo-box tabcontent" id="ShopAreaInfo">
                          <h2>帳號資訊</h2>
                          <div class="ShopAreaInfo-info">
                            <ul>
                              <li>
                                <div class="ShopAreaInfo-text">帳號：<input type="text" class="ShopAreaInfo-inp" name="memId" value="<?php echo $_SESSION["memId"]?>" id="memId" readonly/></div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="ShopAreaInfo-text">密碼：<input type="password" class="ShopAreaInfo-inp" value="<?php echo $_SESSION["password"]?>" id="shopPass"/></div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="ShopAreaInfo-text">確認密碼：<input type="password" class="ShopAreaInfo-inp" value="<?php echo $_SESSION["password"]?>"/></div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="ShopAreaInfo-text">電子信箱：<input type="text" class="ShopAreaInfo-inp" value="<?php echo $_SESSION["email"]?>" id="shopMail"/></div>
                                <div class="clearfix"></div>
                              </li>
                              <li>
                                <div class="ShopAreaInfo-text">手機號碼：<input type="text"  class="ShopAreaInfo-inp" value="<?php echo $_SESSION["phone"]?>" id="shop_phone"/></div>
                                <div class="clearfix"></div>
                              </li>
                            </ul>
                          </div>
                          <a href="javascript:;"><div class="ShopAreaInfo-submit" id="aghe">更新</div></a>
                        </div>
            </form>
          <!-- 營業資訊編輯 -->
      <form name="ShopAreaShopInfo-list" method="get" action="shoparealist.php">
        <div class="ShopAreaShopInfo-box tabcontent" id="ShopAreaShopInfo">

          <!-- 抓取商品資料1 -->
            <?php
            try {
              // 抓攤商資料
              require_once("../common/connectFoodie.php");
              $sql = 'select * from shop where shop_id=:shop_id';
              // $products =  $pdo->query($sql);
              $products = $pdo->prepare( $sql);
              $products->bindValue(":shop_id",$_SESSION["memId"]);
              $products->execute();

              while($prodRow = $products->fetch()){
                $shop_name = $prodRow["shop_name"];
                $address = $prodRow["address"];
                $open_time = $prodRow["open_time"];
                $close_time = $prodRow["close_time"];
                $phone = $prodRow["phone"];
                $shop_image = $prodRow["shop_image"];
                $shop_video_id = $prodRow["shop_video_id"];
                $announcement = $prodRow["announcement"];
                $introduction = $prodRow["introduction"];
                $menu = $prodRow["menu"];
                $menuword1 = $prodRow["menuword1"];
                $menuword2 = $prodRow["menuword2"];
                }//while
                // 抓攤商tag
              require_once("../common/connectFoodie.php");
              $sql = 'select * from tag where shop_id=:shop_id';
              // $products =  $pdo->query($sql);
              $products = $pdo->prepare( $sql);
              $products->bindValue(":shop_id",$_SESSION["memId"]);
              $products->execute();

              while($prodRow = $products->fetch()){
                $city = $prodRow["city"];
                $area = $prodRow["area"];
                $foodtype = $prodRow["foodtype"];
                $time = $prodRow["time"];                
                }//while
                  // 抓攤商照片
              require_once("../common/connectFoodie.php");
              $sql = 'select * from photofilm where shop_id=:shop_id';
              // $products =  $pdo->query($sql);
              $products = $pdo->prepare( $sql);
              $products->bindValue(":shop_id",$_SESSION["memId"]);
              $products->execute();

              while($prodRow = $products->fetch()){
                $image1 = $prodRow["image1"];
                $image2 = $prodRow["image2"];
                $image3 = $prodRow["image3"];
                $image4 = $prodRow["image4"];
                $image5 = $prodRow["image5"];             
                }//while
            ?>
                    <div class="ShopAreaShopInfo-shelves">
                      <h5>編輯上架資料</h5>
                      <ul>
                        <li>
                          <div class="ShopAreaShopInfo-text">店家名稱：</div>
                          <div class="ShopAreaShopInfo-inp"><input type="text" name="ShopAreaShopInfo-shop_name" required value="<?php echo @$shop_name;?>"/></div>
                          <div class="clearfix"></div>
                        </li>
                        <li>
                          <div class="ShopAreaShopInfo-text">營業電話：</div>
                          <div class="ShopAreaShopInfo-inp"><input type="text" name="ShopAreaShopInfo-shop_phone" value="<?php echo @$phone;?>"/></div>
                          <div class="clearfix"></div>
                        </li>

                        <li>
                          <div class="ShopAreaShopInfo-text">店家地址：</div>
                          <select class="ShopAreaShopInfo-city" id="ShopAreaShopInfo-city" name="ShopAreaShopInfo-city">
                            <option value="111" <?php echo $city==111 ? "selected":""; ?>>台北市</option>
                            <option value="222" <?php echo $city==222 ? "selected":""; ?>>新北市</option>
                            <option value="333" <?php echo $city==333 ? "selected":""; ?>>桃園市</option>
                            <option value="444" <?php echo $city==444 ? "selected":""; ?>>台中市</option>
                            <option value="555" <?php echo $city==555 ? "selected":""; ?>>宜蘭縣</option>
                          </select>
                          <select class="ShopAreaShopInfo-area" id="ShopAreaShopInfo-area" name="ShopAreaShopInfo-area">
                            <option value="111" <?php echo $city==111 ? "selected":""; ?>>信義區</option>
                            <option value="222" <?php echo $city==222 ? "selected":""; ?>>文山區</option>
                            <option value="333" <?php echo $city==333 ? "selected":""; ?>>中山區</option>
                            <option value="444" <?php echo $city==444 ? "selected":""; ?>>北投區</option>
                            <option value="555" <?php echo $city==555 ? "selected":""; ?>>南港區</option>
                          </select>
                          <div class="clearfix"></div>

<script type="text/javascript">
  var shopplacetag = document.getElementById("ShopAreaShopInfo-city");
console.log(shopplacetag);
shopplacetag.onchange=function(){ 
    // alert("要變了噢");
    var chosenshopoption=this.options[this.selectedIndex].innerHTML; 
    // console.log(chosenshopoption);
    // https://blog.wu-boy.com/2011/08/javascript-reference-select-and-option-objects-%E7%94%A8%E6%B3%95%E4%BB%8B%E7%B4%B9/
    var shopmini = document.getElementById("ShopAreaShopInfo-area");
    if(chosenshopoption=="新北市"){
        shopmini.options[0].innerHTML="三重區";
        shopmini.options[1].innerHTML="板橋區";
        shopmini.options[2].innerHTML="中和區";
        shopmini.options[3].innerHTML="樹林區";
        shopmini.options[4].innerHTML="淡水區";
    }else if(chosenshopoption=="桃園市"){
        shopmini.options[0].innerHTML="桃園區";
        shopmini.options[1].innerHTML="龜山區";
        shopmini.options[2].innerHTML="八德區";
        shopmini.options[3].innerHTML="中壢區";
        shopmini.options[4].innerHTML="蘆竹區";
    }else if(chosenshopoption=="台中市"){
        shopmini.options[0].innerHTML="中區";
        shopmini.options[1].innerHTML="東區";
        shopmini.options[2].innerHTML="西區";
        shopmini.options[3].innerHTML="南區";
        shopmini.options[4].innerHTML="北區";
    }else if(chosenshopoption=="台北市"){
        shopmini.options[0].innerHTML="信義區";
        shopmini.options[1].innerHTML="文山區";
        shopmini.options[2].innerHTML="中山區";
        shopmini.options[3].innerHTML="北投區";
        shopmini.options[4].innerHTML="南港區";
    }else{
        shopmini.options[0].innerHTML="三星鄉";
        shopmini.options[1].innerHTML="礁溪鄉";
        shopmini.options[2].innerHTML="宜蘭市";
        shopmini.options[3].innerHTML="蘇澳鎮";
        shopmini.options[4].innerHTML="頭城鎮";
    }
}
</script>

                          <br/>
                          <div class="ShopAreaShopInfo-text">店家地址：</div>
                          <div class="ShopAreaShopInfo-inp"><input type="text" name="ShopAreaShopInfo-address" value="<?php echo @$address;?>"/></div>
                          <div class="clearfix"></div>
                        </li>
                        <li>
                          <div class="ShopAreaShopInfo-text">營業時間：</div>
                          <div class="ShopAreaShopInfo-inp"><input type="time" name="ShopAreaShopInfo-opentime" value="<?php echo @$open_time;?>"/></div>
                          <div class="clearfix"></div>
                        </li>        
                        <li>
                          <div class="ShopAreaShopInfo-text">打烊時間：</div>
                          <div class="ShopAreaShopInfo-inp"><input type="time" name="ShopAreaShopInfo-closetime" value="<?php echo @$close_time;?>"/></div>
                          <div class="clearfix"></div>
                        </li>           
                      </ul>
                    </div>
                    <div class="ShopAreaShopInfo-sort">
                      <h5>攤車類別</h5>
                      <ul>
                         <li>
                          <div class="ShopAreaShopInfo-text">營業時段：</div>
                          <div class="ShopAreaShopInfo-period required">
                            <input type="checkbox" name="ShopAreaShopInfo-time[]" value="上午/" />上午
                            <input type="checkbox" name="ShopAreaShopInfo-time[]" value="中午/" />中午
                            <input type="checkbox" name="ShopAreaShopInfo-time[]" value="下午/" />下午
                            <input type="checkbox" name="ShopAreaShopInfo-time[]" value="晚上/" />晚上
                            <input type="checkbox" name="ShopAreaShopInfo-time[]" value="消夜/" />宵夜
                          </div>



                          <div class="clearfix"></div>
                        </li>  
                        <li>
                           <div class="ShopAreaShopInfo-text">餐點類別：</div>
                           <div class="ShopAreaShopInfo-meal required">
                               <input type="checkbox" name="ShopAreaShopInfo-foodtype[]" value="主食類/" />主食類
                               <input type="checkbox" name="ShopAreaShopInfo-foodtype[]" value="炸物/" />炸物
                               <input type="checkbox" name="ShopAreaShopInfo-foodtype[]" value="烤物/" />烤物
                               <input type="checkbox" name="ShopAreaShopInfo-foodtype[]" value="蒸物/" />蒸物
                               <input type="checkbox" name="ShopAreaShopInfo-foodtype[]" value="滷味/" />滷味
                               <input type="checkbox" name="ShopAreaShopInfo-foodtype[]" value="甜點飲料/" />甜點飲料
                               <input type="checkbox" name="ShopAreaShopInfo-foodtype[]" value="其他/" />其他
                           </div>
                           <div class="clearfix"></div>
                        </li>  
                      </ul>
                    </div>
        
                            <div class="ShopAreaShopInfo-menu">
                               <h5>菜單　　*限制200字</h5>
                               <input type="text" name="ShopAreaShopInfo-menu" maxlength="200" placeholder="香濃多汁炸雞排" size="20" value="<?php echo @$menu;?>">
                           </div>
        
                           <div class="ShopAreaShopInfo-album">
                               <h5>相簿</h5>
                               <ul>
                                   <li>
                                       <div class="ShopAreaShopInfo-pic">
                                           <div class="col-sm-12 col-xs-12">
                                               <div class="col-sm-7 col-xs-12">
                                                   <div class="ShopAreaShopInfo-text">照片1：</div>
                                                   <div class="ShopAreaShopInfo-file"><input type="file" id="theFile01" name="theFile01" placeholder="<?php echo @$image1;?>"></div>
                                               </div>
                                               <div class="col-sm-3 col-xs-6">
                                                  <img id="image01" src="../assets/images/shopProduct/<?php echo @$image1;?>">
                                               </div>
                                               <!-- <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-up">上傳</a>
                                               </div>
                                               <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-delete">刪除</a>
                                               </div> -->
                                           </div>
                                            
                                       </div>
                                   </li>  
        
                                   <li>
                                       <div class="ShopAreaShopInfo-pic">
                                           <div class="col-sm-12 col-xs-12">
                                               <div class="col-sm-7 col-xs-12">
                                                   <div class="ShopAreaShopInfo-text">照片2：</div>
                                                   <div class="ShopAreaShopInfo-file"><input type="file" id="theFile02" name="theFile02" placeholder="<?php echo @$image2;?>"></div>
                                               </div>
                                               <div class="col-sm-3 col-xs-6">
                                               <img id="image02" src="../assets/images/shopProduct/<?php echo @$image2;?>">
                                               </div>
                                               <!-- <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-up">上傳</a>
                                               </div>
                                               <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-delete">刪除</a>
                                               </div> -->
                                           </div>
                                            
                                       </div>
                                   </li>  
        
                                   <li>
                                       <div class="ShopAreaShopInfo-pic">
                                           <div class="col-sm-12 col-xs-12">
                                               <div class="col-sm-7 col-xs-12">
                                                   <div class="ShopAreaShopInfo-text">照片3：</div>
                                                   <div class="ShopAreaShopInfo-file"><input type="file" id="theFile03" name="theFile03" placeholder="<?php echo @$image3;?>"></div>
                                               </div>
                                               <div class="col-sm-3 col-xs-6">
                                                <img id="image03" src="../assets/images/shopProduct/<?php echo @$image3;?>">
                                               </div>
                                              <!--  <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-up">上傳</a>
                                               </div>
                                               <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-delete">刪除</a>
                                               </div> -->
                                           </div>
                                            <div class="clearfix"></div>
                                       </div>
                                   </li>
                                </ul>
                           </div>
        
                           <div class="ShopAreaShopInfo-Introduction">
                               <h5>攤車公告</h5>
                               <ul>
                                   <li>
                                       <div class="ShopAreaShopInfo-text ShopAreaShopInfo-announcement">公告：<input type="text" name="ShopAreaShopInfo-announcement" maxlength="200" placeholder="這邊可以寫下您攤商的最新公告" size="60" value="<?php echo @$announcement;?>"></div>
                                        
                                       <div class="clearfix"></div>
                                   </li>  
                                   <li>
                                       <div class="ShopAreaShopInfo-text ShopAreaShopInfo-announcement">簡介：<input type="text" name="ShopAreaShopInfo-announcement2" maxlength="200" placeholder="這邊可以寫下您攤商的簡介" size="60" value="<?php echo @$introduction;?>"></div>
                                        
                                       <div class="clearfix"></div>
                                   </li>
                               </ul>                        
                           </div>
        
                           <div class="ShopAreaShopInfo-publicity">
                               <h5>宣傳圖片/影片</h5>
                               <ul>
                                   <li>
                                       <div class="ShopAreaShopInfo-pic">
                                           <div class="col-sm-12 col-xs-12">
                                               <div class="col-sm-7 col-xs-12">
                                                   
                                                   <div class="col-sm-12 col-xs-12">
                                                      <div class="ShopAreaShopInfo-text">照片1：</div>
                                                      <div class="ShopAreaShopInfo-file"><input type="file" id="theFile04" name="theFile04" placeholder="<?php echo @$image4;?>"/></div>
                                                   </div>
                                                   <div class="col-sm-12 col-xs-12">
                                                      <div class="description">圖片說明：</div>
                                                       <div class="ShopAreaShopInfo-filede"><input type="text" name="ShopAreaShopInfo-menuword1" maxlength="20" placeholder="寫下此道料理的簡介" size="20" value="<?php echo @$menuword1;?>">
                                                       </div>
                                                   </div>
                                                   
                                                  </div>
                                               <div class="col-sm-3 col-xs-6">
                                                  <img id="image04" src="../assets/images/shopProduct/<?php echo @$image4;?>">
                                               </div>
                                               <!-- <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-up">上傳</a>
                                               </div>
                                               <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-delete">刪除</a>
                                               </div> -->
                                               
                                           <div class="clearfix"></div>
                                           </div>
                                       </div>
                                   </li>  
        
                                   <li>
                                       <div class="ShopAreaShopInfo-pic">
                                           <div class="col-sm-12 col-xs-12">
                                               <div class="col-sm-7 col-xs-12">
                                                   
                                                   <div class="col-sm-12 col-xs-12">
                                                      <div class="ShopAreaShopInfo-text">照片2：</div>
                                                      <div class="ShopAreaShopInfo-file"><input type="file" id="theFile05" name="theFile05" placeholder="<?php echo @$image5;?>"/></div>
                                                   </div>
                                                   <div class="col-sm-12 col-xs-12">
                                                      <div class="description">圖片說明：</div>
                                                       <div class="ShopAreaShopInfo-filede"><input type="text" name="ShopAreaShopInfo-menuword2" maxlength="20" placeholder="寫下此道料理的簡介" size="20" value="<?php echo @$menuword2;?>">
                                                       </div>
                                                   </div>
                                                   
                                                  </div>
                                               <div class="col-sm-3 col-xs-6">
                                                  <img id="image05" src="../assets/images/shopProduct/<?php echo @$image5;?>">
                                               </div>
                                              <!--  <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-up">上傳</a>
                                               </div>
                                               <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-delete">刪除</a>
                                               </div> -->
                                               
                                           <div class="clearfix"></div>
                                           </div>
                                       </div>
                                   </li>
                                   
                                   <li>
                                       <div class="ShopAreaShopInfo-pic movie">
                                           <div class="col-sm-12 col-xs-12">
                                               <div class="col-sm-7 col-xs-12">
                                                   <div class="description">影片連結：</div>
                                                   <div class="ShopAreaShopInfo-file"><input type="text" placeholder="輸入影片網址" name="shopMovie" value="<?php echo @$shop_video_id;?>"/></div>
                                                   
                                               </div>
                                               <div class="con1 col-sm-3 col-xs-2">
                                                   
                                               </div>
                                               <!-- <div class="col-sm-1 col-xs-3">
                                                  <a href="#" class="ShopAreaShopInfo-up">上傳</a>
                                               </div>
                                               <div class="col-sm-1 col-xs-3">
                                               <a href="#" class="ShopAreaShopInfo-delete">刪除</a>
                                                </div> -->
                                           </div>
                                           <div class="clearfix"></div>
                                       </div>
                                   </li>  
        
                               </ul>
                           <!-- <a href="#" class="ShopAreaShopInfo-submit">送出</a> -->
                           <input type="submit" name="ShopAreaShopInfo-submit" class="ShopAreaShopInfo-submit">
                           <div class="clearfix"></div>
                           </div>

           <?php 
              

            } catch (PDOException $ex) {
              echo "錯誤原因 : " , $ex->getMessage(), "<br>";
              echo "錯誤行號 : " , $ex->getLine(), "<br>";  
            }

            ?>
                         
                    </div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
  $('form').submit(function(event){
    // code goes here
    // alert("l2");
    if ( $('div.ShopAreaShopInfo-period.required :checkbox:checked').length == 0) {
      alert('您的營業時段還未完成，請至少選擇一項');
      event.preventDefault();
    }

    if( $('div.ShopAreaShopInfo-meal.required :checkbox:checked').length == 0) {
      alert('您的餐點類別還未完成，請至少選擇一項');
      event.preventDefault();
    }
  });
</script>
      </form>
      <!-- 商品資訊編輯 -->

             <div class="ShopAreaItem-box tabcontent" id="ShopAreaItem">
                           <div class="con1 col-sm-1 col-xs-0"></div>
                           <div class="col-sm-10 col-xs-12">
                             <h2>商品預定專區</h2>
                             <div class="ShopAreaItem-commodity">
                               <ul>
                                 <a href="javascript:;"><li class="itemlinks" onclick="openItem(event, 'item1')">商品一</li></a>
                                 <a href="javascript:;"><li class="itemlinks" onclick="openItem(event, 'item2')">商品二</li></a>
                                 <a href="javascript:;"><li class="itemlinks" onclick="openItem(event, 'item3')">商品三</li></a>
                                 <a href="javascript:;"><li class="itemlinks" onclick="openItem(event, 'item4')">商品四</li></a>
                                 <a href="javascript:;"><li class="itemlinks" onclick="openItem(event, 'item5')">商品五</li></a>
                               </ul>
                             </div>

                            <!-- 抓取商品資料1 -->
                            <?php
                            try {
                              require_once("../common/connectFoodie.php");
                              $sql = 'select * from product where shop_id=:shop_id and product_id=:product_id';
                              // $products =  $pdo->query($sql);
                              $products = $pdo->prepare( $sql);
                              $products->bindValue(":shop_id",$_SESSION["memId"]);
                              $products->bindValue(":product_id",$_SESSION["memId"].'001');
                              $products->execute();

                              

                              while($prodRow = $products->fetch()){
                                $proName = $prodRow["name"];
                                $proPic = $prodRow["price"];
                                $proSpec = $prodRow["spec"];
                                $proInfo = $prodRow["info"];
                                $proImg = $prodRow["img"];

                                }//while
                            ?>

                              <!-- item1 -->
                            <div class="itemcontent" id="item1">
                               <div class="ShopAreaItem-pic">
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="col-sm-10 col-xs-12">
                                <div class="col-sm-9 col-xs-12">
                                  <div class="ShopAreaItem-text">商品照片：</div>
<form method="post" action="ProductImg.php" enctype="multipart/form-data" >
                                  <div class="ShopAreaItem-file"><input type="file" id="theFile" name="upFile"/></div>
                                  
                                  <!-- <a href="javascript:;" class="ShopAreaItem-delete" id="Product_img">上傳</a> -->
  <input type="submit" value="送出" class="ShopAreaItem-delete" id="Product_img">
</form>
                                  
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                  <img id="image" src="../assets/images/shopProduct/<?php echo $proImg;?>" alt="商品一">
                                </div>
                              </div>
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="clearfix"></div>
                              </div>
                                                     
                              <div class="ShopAreaItem-introduction">
                                <h5>上傳文字介紹</h5>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="col-sm-10 col-xs-12">
                                  <ul>
                                    <li><div class="ShopAreaItem-text">商品名稱：</div><div class="inp"><input type="text" value="<?php echo @$proName;?>" id="proName"/></div>
                                    <div class="clearfix"></div>          
                                    </li>
                                           
                                    <li><div class="ShopAreaItem-text">商品價格：</div><div class="inp"><input type="text"/ value="<?php echo @$proPic;?>" id="proPic"></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品重量：</div><div class="inp"><input type="text" value="<?php echo @$proSpec;?>" id="proSpec"/></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品簡介：</div><textarea cols="30" rows="3" id="proInfo"><?php echo @$proInfo;?></textarea>
                                    <div class="clearfix"></div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="clearfix"></div>
                              </div>
                                <a href="javascript:;"><div class="ShopAreaItem-submit" id="Product_modification">修改</div></a>
                                          <div class="con1 col-sm-1 col-xs-0"></div>
                                          <div class="clearfix"></div>
                              
                                    </div>
                           
                            <?php 
                              

                            } catch (PDOException $ex) {
                              echo "錯誤原因 : " , $ex->getMessage(), "<br>";
                              echo "錯誤行號 : " , $ex->getLine(), "<br>";  
                            }

                            ?>

                            

                            
                                    

                            <!-- 抓取商品資料2 -->
                            <?php
                            try {
                              require_once("../common/connectFoodie.php");
                              $sql = 'select * from product where shop_id=:shop_id and product_id=:product_id';
                              // $products =  $pdo->query($sql);
                              $products = $pdo->prepare( $sql);
                              $products->bindValue(":shop_id",$_SESSION["memId"]);
                              $products->bindValue(":product_id",$_SESSION["memId"].'002');
                              $products->execute();

                              while($prodRow = $products->fetch()){
                                $proName2 = $prodRow["name"];
                                $proPic2 = $prodRow["price"];
                                $proSpec2 = $prodRow["spec"];
                                $proInfo2 = $prodRow["info"];
                                $proImg2 = $prodRow["img"];

                                }//while
                            ?>

                              <!-- item2 -->
                            <div class="itemcontent" id="item2">
                               <div class="ShopAreaItem-pic">
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="col-sm-10 col-xs-12">
                                <div class="col-sm-9 col-xs-12">
                                  <div class="ShopAreaItem-text">商品照片：</div>
<form method="post" action="ProductImg.php" enctype="multipart/form-data" >
                                  <div class="ShopAreaItem-file"><input type="file" id="theFile2" name="upFile"/></div>
                                  
                                  <!-- <a href="javascript:;" class="ShopAreaItem-delete" id="Product_img">上傳</a> -->
  <input type="submit" value="送出" class="ShopAreaItem-delete" id="Product_img2">
</form>
                                  
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                  <img id="image2" src="../assets/images/shopProduct/<?php echo $proImg2;?>" alt="商品二">
                                </div>
                              </div>
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="clearfix"></div>
                              </div>
                                                     
                              <div class="ShopAreaItem-introduction">
                                <h5>上傳文字介紹</h5>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="col-sm-10 col-xs-12">
                                  <ul>
                                    <li><div class="ShopAreaItem-text">商品名稱：</div><div class="inp"><input type="text" value="<?php echo @$proName2;?>" id="proName2"/></div>
                                    <div class="clearfix"></div>          
                                    </li>
                                           
                                    <li><div class="ShopAreaItem-text">商品價格：</div><div class="inp"><input type="text"/ value="<?php echo @$proPic2;?>" id="proPic2"></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品重量：</div><div class="inp"><input type="text" value="<?php echo @$proSpec2;?>" id="proSpec2"/></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品簡介：</div><textarea cols="30" rows="3" id="proInfo2"><?php echo @$proInfo2;?></textarea>
                                    <div class="clearfix"></div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="clearfix"></div>
                              </div>
                                <a href="javascript:;"><div class="ShopAreaItem-submit" id="Product_modification2">修改</div></a>
                                          <div class="con1 col-sm-1 col-xs-0"></div>
                                          <div class="clearfix"></div>
                              
                                    </div>
                           
                            <?php 
                              

                            } catch (PDOException $ex) {
                              echo "錯誤原因 : " , $ex->getMessage(), "<br>";
                              echo "錯誤行號 : " , $ex->getLine(), "<br>";  
                            }

                            ?>

                                    


                            <!-- 抓取商品資料3 -->
                            <?php
                            try {
                              require_once("../common/connectFoodie.php");
                              $sql = 'select * from product where shop_id=:shop_id and product_id=:product_id';
                              // $products =  $pdo->query($sql);
                              $products = $pdo->prepare( $sql);
                              $products->bindValue(":shop_id",$_SESSION["memId"]);
                              $products->bindValue(":product_id",$_SESSION["memId"].'003');
                              $products->execute();

                              while($prodRow = $products->fetch()){
                                $proName3 = $prodRow["name"];
                                $proPic3 = $prodRow["price"];
                                $proSpec3 = $prodRow["spec"];
                                $proInfo3 = $prodRow["info"];
                                $proImg3 = $prodRow["img"];

                                }//while
                            ?>

                              <!-- item3 -->
                            <div class="itemcontent" id="item3">
                               <div class="ShopAreaItem-pic">
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="col-sm-10 col-xs-12">
                                <div class="col-sm-9 col-xs-12">
                                  <div class="ShopAreaItem-text">商品照片：</div>
<form method="post" action="ProductImg.php" enctype="multipart/form-data" >
                                  <div class="ShopAreaItem-file"><input type="file" id="theFile3" name="upFile"/></div>
                                  
                                  <!-- <a href="javascript:;" class="ShopAreaItem-delete" id="Product_img">上傳</a> -->
  <input type="submit" value="送出" class="ShopAreaItem-delete" id="Product_img3">
</form>
                                  
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                  <img id="image3" src="../assets/images/shopProduct/<?php echo $proImg3;?>" alt="商品三">
                                </div>
                              </div>
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="clearfix"></div>
                              </div>
                                                     
                              <div class="ShopAreaItem-introduction">
                                <h5>上傳文字介紹</h5>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="col-sm-10 col-xs-12">
                                  <ul>
                                    <li><div class="ShopAreaItem-text">商品名稱：</div><div class="inp"><input type="text" value="<?php echo @$proName3;?>" id="proName3"/></div>
                                    <div class="clearfix"></div>          
                                    </li>
                                           
                                    <li><div class="ShopAreaItem-text">商品價格：</div><div class="inp"><input type="text"/ value="<?php echo @$proPic3;?>" id="proPic3"></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品重量：</div><div class="inp"><input type="text" value="<?php echo @$proSpec3;?>" id="proSpec3"/></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品簡介：</div><textarea cols="30" rows="3" id="proInfo3"><?php echo @$proInfo3;?></textarea>
                                    <div class="clearfix"></div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="clearfix"></div>
                              </div>
                                <a href="javascript:;"><div class="ShopAreaItem-submit" id="Product_modification3">修改</div></a>
                                          <div class="con1 col-sm-1 col-xs-0"></div>
                                          <div class="clearfix"></div>
                              
                                    </div>
                           
                            <?php 
                              

                            } catch (PDOException $ex) {
                              echo "錯誤原因 : " , $ex->getMessage(), "<br>";
                              echo "錯誤行號 : " , $ex->getLine(), "<br>";  
                            }

                            ?>


                            
                            <!-- 抓取商品資料4 -->
                            <?php
                            try {
                              require_once("../common/connectFoodie.php");
                              $sql = 'select * from product where shop_id=:shop_id and product_id=:product_id';
                              // $products =  $pdo->query($sql);
                              $products = $pdo->prepare( $sql);
                              $products->bindValue(":shop_id",$_SESSION["memId"]);
                              $products->bindValue(":product_id",$_SESSION["memId"].'004');
                              $products->execute();

                              while($prodRow = $products->fetch()){
                                $proName4 = $prodRow["name"];
                                $proPic4 = $prodRow["price"];
                                $proSpec4 = $prodRow["spec"];
                                $proInfo4 = $prodRow["info"];
                                $proImg4 = $prodRow["img"];

                                }//while
                            ?>

                              <!-- item4 -->
                            <div class="itemcontent" id="item4">
                               <div class="ShopAreaItem-pic">
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="col-sm-10 col-xs-12">
                                <div class="col-sm-9 col-xs-12">
                                  <div class="ShopAreaItem-text">商品照片：</div>
<form method="post" action="ProductImg.php" enctype="multipart/form-data" >
                                  <div class="ShopAreaItem-file"><input type="file" id="theFile4" name="upFile"/></div>
                                  
                                  <!-- <a href="javascript:;" class="ShopAreaItem-delete" id="Product_img">上傳</a> -->
  <input type="submit" value="送出" class="ShopAreaItem-delete" id="Product_img4">
</form>
                                  
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                  <img id="image4" src="../assets/images/shopProduct/<?php echo $proImg4;?>" alt="商品四">
                                </div>
                              </div>
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="clearfix"></div>
                              </div>
                                                     
                              <div class="ShopAreaItem-introduction">
                                <h5>上傳文字介紹</h5>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="col-sm-10 col-xs-12">
                                  <ul>
                                    <li><div class="ShopAreaItem-text">商品名稱：</div><div class="inp"><input type="text" value="<?php echo @$proName4;?>" id="proName4"/></div>
                                    <div class="clearfix"></div>          
                                    </li>
                                           
                                    <li><div class="ShopAreaItem-text">商品價格：</div><div class="inp"><input type="text"/ value="<?php echo @$proPic4;?>" id="proPic4"></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品重量：</div><div class="inp"><input type="text" value="<?php echo @$proSpec4;?>" id="proSpec4"/></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品簡介：</div><textarea cols="30" rows="3" id="proInfo4"><?php echo @$proInfo4;?></textarea>
                                    <div class="clearfix"></div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="clearfix"></div>
                              </div>
                                <a href="javascript:;"><div class="ShopAreaItem-submit" id="Product_modification4">修改</div></a>
                                          <div class="con1 col-sm-1 col-xs-0"></div>
                                          <div class="clearfix"></div>
                              
                                    </div>
                           
                            <?php 
                              

                            } catch (PDOException $ex) {
                              echo "錯誤原因 : " , $ex->getMessage(), "<br>";
                              echo "錯誤行號 : " , $ex->getLine(), "<br>";  
                            }

                            ?>


                            <!-- 抓取商品資料5 -->
                            <?php
                            try {
                              require_once("../common/connectFoodie.php");
                              $sql = 'select * from product where shop_id=:shop_id and product_id=:product_id';
                              // $products =  $pdo->query($sql);
                              $products = $pdo->prepare( $sql);
                              $products->bindValue(":shop_id",$_SESSION["memId"]);
                              $products->bindValue(":product_id",$_SESSION["memId"].'005');
                              $products->execute();

                              while($prodRow = $products->fetch()){
                                $proName5 = $prodRow["name"];
                                $proPic5 = $prodRow["price"];
                                $proSpec5 = $prodRow["spec"];
                                $proInfo5 = $prodRow["info"];
                                $proImg5 = $prodRow["img"];

                                }//while
                            ?>

                              <!-- item4 -->
                            <div class="itemcontent" id="item5">
                               <div class="ShopAreaItem-pic">
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="col-sm-10 col-xs-12">
                                <div class="col-sm-9 col-xs-12">
                                  <div class="ShopAreaItem-text">商品照片：</div>
<form method="post" action="ProductImg.php" enctype="multipart/form-data" >
                                  <div class="ShopAreaItem-file"><input type="file" id="theFile5" name="upFile"/></div>
                                  
                                  <!-- <a href="javascript:;" class="ShopAreaItem-delete" id="Product_img">上傳</a> -->
  <input type="submit" value="送出" class="ShopAreaItem-delete" id="Product_img5">
</form>
                                  
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                  <img id="image5" src="../assets/images/shopProduct/<?php echo $proImg5;?>" alt="商品五">
                                </div>
                              </div>
                              <div class="con1 col-sm-1 col-xs-0"></div>
                              <div class="clearfix"></div>
                              </div>
                                                     
                              <div class="ShopAreaItem-introduction">
                                <h5>上傳文字介紹</h5>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="col-sm-10 col-xs-12">
                                  <ul>
                                    <li><div class="ShopAreaItem-text">商品名稱：</div><div class="inp"><input type="text" value="<?php echo @$proName5;?>" id="proName5"/></div>
                                    <div class="clearfix"></div>          
                                    </li>
                                           
                                    <li><div class="ShopAreaItem-text">商品價格：</div><div class="inp"><input type="text"/ value="<?php echo @$proPic5;?>" id="proPic5"></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品重量：</div><div class="inp"><input type="text" value="<?php echo @$proSpec5;?>" id="proSpec5"/></div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li><div class="ShopAreaItem-text">商品簡介：</div><textarea cols="30" rows="3" id="proInfo5"><?php echo @$proInfo5;?></textarea>
                                    <div class="clearfix"></div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="con1 col-sm-1 col-xs-0"></div>
                                <div class="clearfix"></div>
                              </div>
                                <a href="javascript:;"><div class="ShopAreaItem-submit" id="Product_modification5">修改</div></a>
                                          <div class="con1 col-sm-1 col-xs-0"></div>
                                          <div class="clearfix"></div>
                              
                                    </div>
                           
                            <?php 
                              

                            } catch (PDOException $ex) {
                              echo "錯誤原因 : " , $ex->getMessage(), "<br>";
                              echo "錯誤行號 : " , $ex->getLine(), "<br>";  
                            }

                            ?>
              </div>
            </div>


             <!-- 攤商訂單查詢 -->
            <form action=""><div class="ShopAreaOrder-box tabcontent" id="ShopAreaOrder">
                <div class="con1 col-sm-1 col-xs-0"></div>
                <div class="col-sm-10 col-xs-12">
                  <div class="ShopAreaOrder-time">
                    <input type="date"/> 　~　 <input type="date"/>
                    <div class="ShopAreaOrder-inquiry"><input type="button" id="ShopAreaOrder_info" value="查詢" onclick="ya()"></div>
                  </div>
              
                  <div class="ShopAreaOrder-orderif" id="ShopAreaOrder-order">
<!--                     <table border="1" cellspacing="0">
                      <tr>
                        <th>訂單編號</th>
                        <th>消費者</th>
                        <th>下單日期</th>
                        <th>取貨時間</th>
                        <th>品項</th>
                        <th>總金額</th>
                      </tr>
                    </table>   -->                                      
                                            
                </div>
                </div>
                <div class="con1 col-sm-1 col-xs-0"></div>
                <div class="clearfix"></div>
              </div> </form>


              <!-- 優或卷活動管理 -->
             <div class="ShopAreaPromo-box tabcontent" id="ShopAreaPromo">
              <div class="con1 col-sm-1  col-xs-1"></div>
              <div class="col-sm-10 col-xs-10">
                <div class="ShopAreaPromo-description">
                  掃描QR-Code取得買一送一優惠劵!
                </div>
                <div class="ShopAreaPromo-activity">
                  <div class="col-sm-6  col-xs-12">
                    <div class="ShopAreaPromo-offer"><img src="../assets/images/promoimg.png"></div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <div class="ShopAreaPromo-period">
                      <div class="ShopAreaPromo-text">
                        活動期間:<br/>2017/04/01-05/31
                      </div>
                      <div class="ShopAreaPromo-participate">
                        <input type="radio" name="ShopAreaPromo_partYes" value="1" id="ShopAreaPromo_partYes"/> 參加 
                        <p></p>
                        <input type="radio" name="ShopAreaPromo_partYes" value="0" id="ShopAreaPromo_partNo" /> 不參加
                      </div>
                    </div>
                  </div>
                </div>          
              </div>
              <div class="con1 col-sm-1 col-xs-1"></div>
              <div class="clearfix"></div>
            </div>
          </div>  
			

		</div>		



		<div class="con1 col-sm-1"></div>

	</div>


  <script src="../assets/js/ShopAreaInfo.js"></script>
  <script src="../assets/js/ShopAreaItem.js"></script>
  <script src="../assets/js/ShopAreaItemInfo.js"></script>
  <script src="../assets/js/shop_product.js"></script>
  <script src="../assets/js/shopCoupon.js"></script>
	<script src="../assets/js/shopArea.js"></script>
  <script src="../assets/js/Product_img.js"></script>  
  <script src="../assets/js/shopAreaOrder_info.js"></script>

<?php 
  include '../views/footer.php';
?>
