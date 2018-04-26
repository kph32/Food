<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>攤吃貨</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0 content="width=1024">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/searchbox.css">





<!-- below for index -->
	<link rel="stylesheet" type="text/css" href="assets/css/map-3d.css">
	<link rel="stylesheet" type="text/css" href="assets/css/shop-order-show.css">
	<link rel="stylesheet" type="text/css" href="assets/css/video-show.css">
	<link rel="stylesheet" type="text/css" href="assets/css/promo-show.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<script src="assets/js/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/menu_elastic.css">
  <script src="assets/js/snap.svg-min.js"></script>
	

</head>
<body>

<!-- pagetop============================== -->
<p class="pagetop" style="bottom:100%;">
	<a href="#pageTop">
		<img src="assets/images/pageTop.gif" class="animated infinite ">
	</a>
</p>
<?php
    if(!isset($_SESSION)) 
    { 
      ob_start();
        session_start(); 
    }
?>
                 <!-- 燈箱：登入 -->
          <div id="loginBox" style="display: none;">
            <div class="memLogin">
              <div class="memLogin-container">
                <div class="memLogin-contain">
                  <img src="assets/images/Searchbox-pon.png">
                  <div class="memLogin-account">
                    帳號： <input type="text" name="memId" size="18" maxlength="15" id="memId">
                  </div>
                  <div class="memLogin-psw">
                    密碼： <input type="password" name="memPsw" size="18" maxlength="15" id="memPsw">
                  </div>
                  <div class="memLogin-submit">
                    <input type="submit" name="memSubmit" value="登入" id="btnLogin">
                    <input type="button" id="btnLoginCancel" value="取消">
                  </div>
                </div>
              </div>
            </div>
          </div>

<div class="Navbar">
        <div class="Navbar-container col-xs-0">
          <ul class="col-sm-12">
            <li><a href="index.php" class="col-sm-2"><img src="assets/images/navbar/Navbar-logo.png" alt="foodie"/></a></li>
            <li><a href="pages/MapSearch.php" class="Navbar-li col-sm-1"><img src="assets/images/navbar/Navbar-position.png" alt="position"/><div>定位搜索</div></a></li>
            <li><a href="pages/secret.php" class="Navbar-li col-sm-1"><img src="assets/images/navbar/Navbar-news.png" alt="news"/><div>攤車報導</div></a></li>
            <li><a href="pages/videoArea.php" class="Navbar-li col-sm-1"><img src="assets/images/navbar/Navbar-movie.png" alt="movie"/><div>影音宣傳</div></a></li>
            <li>
            <form name="Navbar-searchlist" method="get" action="pages/searchResult.php">
              <div class="col-sm-3">
                <input type="text" placeholder="搜尋美食或攤車名" class="Navbar-search" name="Navbar-searchname" id="Navbar-searchname"/>
                <label for="Navbar-submit">
                  <div class="Navbar-search-go" >
                    <!-- <img src="assets/images/Searchbox-search.png"> -->
                  </div>
                </label>
                <input type="submit" name="Navbar-submit" id="Navbar-submit">
              </div>
            </form>
            </li>


<?php
if( isset($_SESSION["memName"]) === true){
?>
            <li>
              <div class="Navbar-border col-sm-1">
                <a href="pages/shopArea.php"><img src="assets/images/navbar/Navbar-factor.png" class="Navbar-shoplogin" alt="factorlogin"/>
                <div class="Navbar-member">攤商</div></a>
                <div class="col-sm-12">
                <span id="memName"></span>
                  <a href="pages/Sessionout.php" class="Navbar-memtxt">登出</a>
                  <a href="#" class="Navbar-memtxt"><?php echo $_SESSION["memName"] ?></a>
                  <!-- <a href="pages/ShopRegister.php" class="Navbar-memtxt">註冊</a> -->
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>
<?php
  }else if(isset($_SESSION["memId"]) === true){
?>
            <li>
              <div class="col-sm-1">
                <a href="pages/memArea.php"><img src="assets/images/navbar/Navbar-login.png" class="Navbar-login" alt="memlogin"/>
                <div class="Navbar-member">會員</div></a>
                <div class="col-sm-12">
                  <a href="pages/Sessionout.php" class="Navbar-memtxt">登出</a>
                  <a href="#" class="Navbar-memtxt"><?php echo $_SESSION["name"] ?></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>

<?php
  }else{
?>
            <li>
              <div class="col-sm-1">
                <img src="assets/images/navbar/Navbar-login.png" class="Navbar-login" alt="memlogin"/>
                <div class="Navbar-member">會員</div>
                <div class="col-sm-12">
                  <a href="pages/memLogin.php" class="Navbar-memtxt">登入</a>
                  <a href="pages/memRegister.php" class="Navbar-memtxt">註冊</a>
                </div>
              </div>
            </li>
            <li>
              <div class="Navbar-border col-sm-1">
                <img src="assets/images/navbar/Navbar-factor.png" class="Navbar-shoplogin" alt="factorlogin"/>
                <div class="Navbar-member">攤商</div>
                <div class="col-sm-12">
                <span id="memName"></span>
                  <span  class="Navbar-memtxt" id="spanLogin">登入</span>
                  <a href="pages/ShopRegister.php" class="Navbar-memtxt">註冊</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="clearfix"></div>
<?php
  }
?>





        <div class="col-sm-0 container">
          <a href="index.php"><img src="assets/images/navbar/Navbar-logo.png" alt="foodie" class="Navbar-rwdlogo"/></a>
          <div class="menu-wrap">
            <div class="menu col-xs-12">
              <!-- <div class="Navbar-rwd"> -->                
                <Menu>
                    <form name="Navbar-searchlistphone" method="get" action="pages/searchResult.php">
                    <input type="text" placeholder="搜尋美食或攤車名" class="Navbar-search" name="Navbar-searchname" />
                    <label for="Navbar-submitphone">
                    <div class="Navbar-search-go">
                    
                    
                  <!-- <img src="../assets/images/Searchbox-search.png"> -->
                </div>
                <input type="submit" name="Navbar-submitphone" id="Navbar-submitphone"></label>
                </form>
                   
                    <div class="col-xs-12"><a href="pages/MapSearch.php" class="Navbar-li col-xs-12"><img src="assets/images/navbar/Navbar-position.png" alt="position"/>定位搜索</a></div>
                    <div class="col-xs-12"><a href="pages/secret.php" class="Navbar-li col-xs-12"><img src="assets/images/navbar/Navbar-news.png" alt="news"/>攤車報導</a></div>
                    <div class="col-xs-12"><a href="pages/videoArea.php" class="Navbar-li col-xs-12"><img src="assets/images/navbar/Navbar-movie.png" alt="movie"/>影音宣傳</a></div>
                    
<!--                <div class="Navbar-rwdlogin col-xs-12">
                      <img src="assets/images/navbar/Navbar-login.png" class="col-xs-6" alt="memlogin"/>
                      <a href="pages/memLogin.php" class="Navbar-logintxt col-xs-4">會員登入</a>
                      <a href="pages/memRegister.php" class="Navbar-logintxt">註冊</a>
                    </div> -->
<?php
if( isset($_SESSION["memName"]) === true){
?>
      <div class="Navbar-rwdlogin col-xs-12">
        <a href="pages/shopArea.php"><img src="assets/images/navbar/Navbar-factor.png" class="col-xs-6" alt="factor"/></a>
        <a href="pages/Sessionout.php" class="Navbar-logintxt col-xs-4">攤商登出</a>
        <!-- <a href="pages/ShopRegister.php" class="Navbar-logintxt">註冊</a> -->
      </div>
<?php
  }else if(isset($_SESSION["memId"]) === true){
?>
      <div class="Navbar-rwdlogin col-xs-12">
        <a href="pages/memArea.php"><img src="assets/images/navbar/Navbar-login.png" class="col-xs-6" alt="memlogin"/></a>
        <a href="pages/Sessionout.php" class="Navbar-logintxt col-xs-4">會員登出</a>
        <!-- <a href="pages/memRegister.php" class="Navbar-logintxt">註冊</a> -->
      </div>
<?php
  }else{
?>
      <div class="Navbar-rwdlogin col-xs-12">
        <img src="assets/images/navbar/Navbar-login.png" class="col-xs-6" alt="memlogin"/>
        <a class="Navbar-logintxt col-xs-4">會員</a>
        <a href="pages/memLogin.php" class="Navbar-memtxt">登入</a>
        <a href="pages/memRegister.php" class="Navbar-logintxt">註冊</a>
      </div>
      <div class="Navbar-rwdlogin col-xs-12">
        <img src="assets/images/navbar/Navbar-factor.png" class="col-xs-6" alt="factor"/>
        <a class="Navbar-logintxt col-xs-4">攤商</a>
        <span  class="Navbar-memtxt" id="spanLogin2">登入</span>
        <a href="pages/ShopRegister.php" class="Navbar-logintxt">註冊</a>
      </div>
<?php
  }
?>



<!--                     <div class="Navbar-rwdlogin col-xs-12">
                      <img src="assets/images/navbar/Navbar-factor.png" class="col-xs-6" alt="factor"/>
                      <a href="pages/memLogin.php" class="Navbar-logintxt col-xs-4">攤商登入</a>
                      <a href="pages/ShopRegister.php" class="Navbar-logintxt ">註冊</a>
                    </div> -->
                </Menu>
              </div>
              <button class="close-button" id="close-button">Close Menu</button>
                  <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                      <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
                    </svg>
                  </div>
            <!-- </div> -->
            
          </div>
          <button class="menu-button" id="open-button"></button>
            <div class="content-wrap">
              <div class="content">
                <header class="codrops-header">
                </header>
              </div>
             </div>
        </div>
        <form action="/" method="post">
        <div class="Navbar-LightboxShow">
          <div class="Navbar-Lightbox">
            <div class="Navbar-Lightbox-title">會員</div>
            <div class="Navbar-account">帳號：</div>
            <div class="Navbar-input1"><input type="text" name="account" id="account"/></div>
            
            <div class="Navbar-password">密碼：</div>
            <div class="Navbar-input2"><input type="password" name="password" id="password"/></div>
            
            <div class="Navbar-submitLogin">
              <input type="submit" name="Navbar-submitLogin" id="NavbarSubmitLogin" value="登入"/>
            </div>
          </div>
        </div>
        </form>
      </div>    
      
      
<script type="text/javascript" src="assets/js/loginindex.js"></script>



<!-- ==searchbox====================================================================    -->

      <div class="SearchBox">
      	<div class="SearchBox-bg">
	        <div class="SearchBox-container">
	        	<div class="col-sm-12">
	        		<div class="SearchBox-title col-sm-2 col-xs-0">攤車篩選</div>
					<form name="SearchBox-searchlist" method="get" action="pages/shopResult.php">
		        		<div>
			        		<select class="SearchBox-select SearchBox-select1" name="SearchBox-place" id="SearchBox-place">
			        			<option value="111">台北市</option>
			        			<option value="222">新北市</option>
			        			<option value="333">桃園市</option>
			        			<option value="444">台中市</option>
			        			<option value="555">宜蘭縣</option>
			        		</select>
		        		</div>
		        		<div>
			        		<select class="SearchBox-select" name="SearchBox-miniplace" id="SearchBox-miniplace">
			        			<option value="111">信義區</option>
			        			<option value="222">文山區</option>
			        			<option value="333">中山區</option>
			        			<option value="444">景美區</option>
			        			<option value="555">南港鄉</option>
			        		</select>
		        		</div>
		        		<div>
			        		<select class="SearchBox-select" name="SearchBox-foodtype">
			        			<option value="/">全部</option>
			        			<option value="主食類">主食類</option>
			        			<option value="炸物">炸物</option>
			        			<option value="烤物">烤物</option>
			        			<option value="蒸物">蒸物</option>
			        			<option value="滷味">滷味</option>
			        			<option value="甜點飲料">甜點飲料</option>
			        			<option value="其他">其他</option>
			        		</select>
		        		</div>
		        		<div>
			        		<select class="SearchBox-select col-xs-0" name="SearchBox-shoptime">
			        			<option value="/">全時段</option>
			        			<option value="上午">上午</option>
			        			<option value="中午">中午</option>
			        			<option value="下午">下午</option>
			        			<option value="晚上">晚上</option>
			        			<option value="深夜">深夜</option>
			        		</select>
		        		</div>
		        		<div>
			        		<select class="SearchBox-select col-sm-0" name="SearchBox-shoptime">
			        			<option value="/">全時段</option>
			        			<option value="上午">上午</option>
			        			<option value="中午">中午</option>
			        			<option value="下午">下午</option>
			        			<option value="晚上">晚上</option>
			        			<option value="深夜">深夜</option>
			        		</select>
		        		</div>
		        		<a href=""><input type="submit" value="搜尋" id="SearchBox-submit"/></a>
		        		<img src="assets/images/searchbox/Searchbox-search.png" class="SearchBox-searchGo col-xs-0" alt="searchGo"/>
					</form>
	        	</div>
	        </div>
	    </div>
        <div class="SearchBox-pon"></div>
        <div class="clearfix"></div>
     </div>

<!-- =====map-3d=========================================== -->




 <div class="map-3d">
	<div class="map-3d-saerchResultTxt">
		<p>全台灣共有 <strong class="map-3d-strongNumber">0</strong> 攤車進駐，道地美味餐點任你搜尋!</p>
	</div>

	<div class="map-3d-container wow fadeInUp">
		<p>隨時更新攤車最新位置<br/>追隨美味到天涯</p>
		<img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud4" alt="map3dMCloud">
		<img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud5" alt="map3dMCloud">


		<svg id="map-3d-Device" version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
		 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1028.92px"
		 height="649.161px" viewBox="0 0 1028.92 649.161" enable-background="new 0 0 1028.92 649.161" xml:space="preserve">
			<g id="map" i:extraneous="self">
				<g id="OBJECTS">
					<g id="XMLID_1052_">
						<g id="XMLID_1786_">
							<g>
								<path id="XMLID_514_" fill="#232323" d="M440.474,641.615c-8.197,4.77-13.878,7.546-27.879,7.546
									c-10.167,0-94.07-47.591-102.284-52.332L11.127,424.083C4.469,420.239-0.004,413.041,0,404.8
									c0.004-8.24,4.485-15.435,11.147-19.271L596.211,49.285c6.541-3.767,14.12-5.938,22.211-5.938s15.669,2.173,22.21,5.941
									l377.144,219.442c6.649,3.831,11.127,11.007,11.145,19.233c0.018,8.226-4.429,15.421-11.062,19.28L440.474,641.615z"/>
								<rect id="XMLID_513_" x="0.045" y="378.529" fill="#232323" width="20.085" height="26.52"/>
								<rect id="XMLID_512_" x="1008.835" y="259.96" fill="#232323" width="20.085" height="29.553"/>
							</g>
						</g>
						<path id="XMLID_1778_" fill="#444444" d="M440.474,613.918c-8.197,4.769-17.712,7.527-27.879,7.545
							s-94.07-47.591-102.284-52.332L11.127,396.385C4.469,392.542-0.004,385.343,0,377.103c0.004-8.239,4.485-15.435,11.147-19.271
							L596.211,21.588c6.541-3.767,14.12-5.938,22.211-5.938s15.669,2.173,22.21,5.94l377.144,219.443
							c6.649,3.83,11.127,11.007,11.145,19.232s-4.429,15.422-11.062,19.28L440.474,613.918z"/>
						<polygon id="XMLID_1775_" fill="#63D0E7" points="54.57,351.44 573.403,52.214 974.35,285.675 455.518,584.901 				"/>
						<g id="XMLID_1767_">
							<path id="XMLID_1772_" fill="#41403C" d="M194.264,467.155c12.062-6.964,27.088-6.314,38.026,0
								c10.938,6.314,11.892,15.089,0,21.954s-25.975,6.958-38.026,0S182.202,474.119,194.264,467.155z"/>
							<path id="XMLID_1769_" fill="none" stroke="#EAEAEA" stroke-width="2" stroke-miterlimit="10" d="M193.844,466.963
								c11.84-6.836,26.591-6.199,37.327,0c10.737,6.197,11.673,14.812,0,21.55c-11.673,6.74-25.497,6.83-37.327,0
								C182.015,481.684,182.005,473.798,193.844,466.963z"/>
							
								<radialGradient id="XMLID_99_" cx="231.3389" cy="489.7056" r="33.1884" gradientTransform="matrix(-0.4385 -0.8987 1.2749 -0.6221 -291.5422 1002.2506)" gradientUnits="userSpaceOnUse">
								<stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/>
								<stop  offset="0.1342" style="stop-color:#EFEFEF;stop-opacity:0.1342"/>
								<stop  offset="0.5165" style="stop-color:#C6C6C6;stop-opacity:0.5165"/>
								<stop  offset="0.8182" style="stop-color:#ADADAD;stop-opacity:0.8182"/>
								<stop  offset="1" style="stop-color:#A3A3A3"/>
							</radialGradient>
							<path id="XMLID_1768_" fill="url(#XMLID_99_)" d="M194.264,467.155c12.062-6.964,27.088-6.314,38.026,0
								c10.938,6.314,11.892,15.089,0,21.954s-25.975,6.958-38.026,0S182.202,474.119,194.264,467.155z"/>
						</g>
						<g id="XMLID_1764_">
							<path id="XMLID_1766_" fill="#515151" d="M767.346,125.832c0.438-0.26,0.947-0.412,1.493-0.415
								c0.546-0.004,1.058,0.142,1.499,0.396l56.146,32.371c0.443,0.255,0.74,0.733,0.741,1.281c0.001,0.548-0.296,1.027-0.738,1.283
								l-4.081,2.365c-0.659,0.382-1.424,0.601-2.24,0.599s-1.58-0.226-2.236-0.611l-54.829-32.193
								c-0.437-0.256-0.729-0.73-0.73-1.273c-0.002-0.543,0.289-1.019,0.725-1.277L767.346,125.832z"/>
							<path id="XMLID_1765_" fill="#515151" d="M767.346,125.832c0.438-0.26,0.947-0.412,1.493-0.415
								c0.546-0.004,1.058,0.142,1.499,0.396l56.146,32.371c0.443,0.255,0.74,0.733,0.741,1.281c0.001,0.548-0.296,1.027-0.738,1.283
								l-4.081,2.365c-0.659,0.382-1.424,0.601-2.24,0.599s-1.58-0.226-2.236-0.611l-54.829-32.193
								c-0.437-0.256-0.729-0.73-0.73-1.273c-0.002-0.543,0.289-1.019,0.725-1.277L767.346,125.832z"/>
						</g>
						<g id="XMLID_1053_">
							<g id="XMLID_1715_">
								<g id="XMLID_1717_">
									<g id="XMLID_1758_">
										<path id="XMLID_1759_" fill="#3B3C3F" d="M742.818,114.963c4.72-2.725,10.6-2.471,14.879,0c4.28,2.471,4.653,5.904,0,8.59
											s-10.163,2.723-14.879,0C738.102,120.832,738.097,117.688,742.818,114.963z"/>
									</g>
									<g id="XMLID_1748_">
										<g>
											<g id="XMLID_120_">
												<path fill="#253B7D" d="M746.591,117.19c2.295-1.325,5.154-1.202,7.235,0c2.082,1.202,2.264,2.871,0,4.178
													c-2.263,1.306-4.942,1.324-7.235,0C744.298,120.043,744.296,118.515,746.591,117.19z"/>
											</g>
										</g>
									</g>
									<g id="XMLID_1718_">
										<g>
											<g id="XMLID_98_">
												<path fill="#3048A9" d="M748.055,118.054c1.354-0.782,3.043-0.709,4.271,0c1.229,0.709,1.335,1.695,0,2.466
													c-1.336,0.771-2.918,0.782-4.271,0C746.702,119.738,746.7,118.836,748.055,118.054z"/>
											</g>
										</g>
									</g>
								</g>
								
									<radialGradient id="XMLID_246_" cx="697.9331" cy="80.2339" r="12.5967" gradientTransform="matrix(-1 0 0 -1 1456.3936 203.5107)" gradientUnits="userSpaceOnUse">
									<stop  offset="0" style="stop-color:#FFFFFF;stop-opacity:0"/>
									<stop  offset="1" style="stop-color:#A3A3A3"/>
								</radialGradient>
								<path id="XMLID_1716_" fill="url(#XMLID_246_)" d="M742.63,123.633c4.28,2.471,10.16,2.725,14.88,0s4.716-5.868,0-8.591
									s-10.227-2.687-14.88,0S738.35,121.162,742.63,123.633z"/>
							</g>
							<g id="XMLID_1057_">
								<g id="XMLID_1059_">
									<g id="XMLID_1060_">
										<g id="XMLID_1711_">
											<path id="XMLID_1712_" fill="#939393" d="M804.014,135.291c2.298-1.327,5.16-1.203,7.244,0s2.266,2.875,0,4.183
												s-4.948,1.326-7.244,0C801.717,138.148,801.715,136.618,804.014,135.291z"/>
										</g>
										<g id="XMLID_1703_">
											<g>
												<g id="XMLID_92_">
													<path fill="#AAAAAA" d="M805.851,136.375c1.117-0.645,2.51-0.585,3.523,0c1.013,0.585,1.102,1.398,0,2.034
														s-2.407,0.645-3.523,0S804.734,137.021,805.851,136.375z"/>
												</g>
											</g>
										</g>
										<g id="XMLID_1061_">
											<g>
												<g id="XMLID_89_">
													<path fill="#F2F2F2" d="M806.564,136.795c0.659-0.381,1.481-0.345,2.079,0c0.599,0.346,0.65,0.825,0,1.201
														s-1.42,0.381-2.079,0C805.905,137.616,805.904,137.176,806.564,136.795z"/>
												</g>
											</g>
										</g>
									</g>
								</g>
								<radialGradient id="XMLID_247_" cx="810.3071" cy="139.8896" r="7.8995" gradientUnits="userSpaceOnUse">
									<stop  offset="0.1314" style="stop-color:#FFFFFF;stop-opacity:0"/>
									<stop  offset="0.2953" style="stop-color:#FAFAFA;stop-opacity:0.1887"/>
									<stop  offset="0.487" style="stop-color:#ECECEC;stop-opacity:0.4094"/>
									<stop  offset="0.6926" style="stop-color:#D4D4D4;stop-opacity:0.6462"/>
									<stop  offset="0.9066" style="stop-color:#B4B4B4;stop-opacity:0.8925"/>
									<stop  offset="1" style="stop-color:#A3A3A3"/>
								</radialGradient>
								<path id="XMLID_1058_" fill="url(#XMLID_247_)" d="M811.258,135.291c-2.084-1.203-4.946-1.327-7.244,0
									c-2.299,1.327-2.297,2.857,0,4.183c2.296,1.326,4.979,1.308,7.244,0S813.342,136.494,811.258,135.291z"/>
							</g>
						</g>
					</g>
					<g id="XMLID_973_">
						<g>
							
							<line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="609.181" y1="390.316" x2="614.373" y2="387.31"/>
						
							<line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" stroke-dasharray="12.0103,12.0103" x1="624.766" y1="381.289" x2="848.211" y2="251.867"/>
						
							<line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="853.408" y1="248.857" x2="858.6" y2="245.849"/>
						</g>
					</g>
					<polygon id="XMLID_1_" fill="#9AD363" points="451.72,586.745 54.463,351.508 573.398,52.388 974.35,285.675 			"/>
					<g>
						<g>
							<polygon fill="#D6D6D7" points="556.364,245.113 525.638,227.35 525.638,226.502 556.364,244.263 					"/>
							<polygon fill="#BCBEC0" points="556.364,245.113 557.164,244.752 557.164,243.903 556.364,244.263 					"/>
							<polygon fill="#E6E7E8" points="556.364,244.263 557.164,243.903 526.189,226.284 525.638,226.502 					"/>
						</g>
						<g>
							<polygon fill="#D6D6D7" points="556.364,240.274 525.638,222.513 525.638,221.664 556.364,239.425 					"/>
							<polygon fill="#BCBEC0" points="556.364,240.274 557.164,239.915 557.164,239.065 556.364,239.425 					"/>
							<polygon fill="#E6E7E8" points="556.364,239.425 557.164,239.065 526.189,221.446 525.638,221.664 					"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M530.188,218.453l-0.111-0.063c-0.627-0.357-1.525-0.059-1.525,0.663v12.468l2.391,1.361h0.385v-12.467
								C531.329,219.693,530.815,218.811,530.188,218.453z"/>
							<path fill="#E6E7E8" d="M529.804,218.453l-0.11-0.063c-0.628-0.357-1.141-0.059-1.141,0.663v12.468l2.391,1.361v-12.467
								C530.943,219.693,530.431,218.811,529.804,218.453z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M535.918,221.925l-0.112-0.063c-0.628-0.357-1.525-0.059-1.525,0.664v12.467l2.391,1.362h0.386v-12.468
								C537.058,223.166,536.543,222.283,535.918,221.925z"/>
							<path fill="#E6E7E8" d="M535.533,221.925l-0.111-0.063c-0.627-0.357-1.14-0.059-1.14,0.664v12.467l2.391,1.362v-12.468
								C536.672,223.166,536.159,222.283,535.533,221.925z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M541.646,225.05l-0.111-0.063c-0.628-0.358-1.525-0.061-1.525,0.661v12.469l2.392,1.361h0.385v-12.468
								C542.786,226.29,542.273,225.407,541.646,225.05z"/>
							<path fill="#E6E7E8" d="M541.26,225.05l-0.111-0.063c-0.626-0.358-1.14-0.061-1.14,0.661v12.469l2.392,1.361v-12.468
								C542.401,226.29,541.887,225.407,541.26,225.05z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M547.374,228.29l-0.11-0.063c-0.627-0.356-1.526-0.06-1.526,0.664v12.466l2.392,1.362h0.384v-12.468
								C548.514,229.53,548,228.647,547.374,228.29z"/>
							<path fill="#E6E7E8" d="M546.99,228.29l-0.111-0.063c-0.628-0.356-1.141-0.06-1.141,0.664v12.466l2.392,1.362v-12.468
								C548.129,229.53,547.616,228.647,546.99,228.29z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M553.102,231.646l-0.111-0.063c-0.628-0.358-1.524-0.06-1.524,0.663v12.467l2.389,1.362h0.386v-12.468
								C554.242,232.886,553.729,232.004,553.102,231.646z"/>
							<path fill="#E6E7E8" d="M552.717,231.646l-0.112-0.063c-0.628-0.358-1.139-0.06-1.139,0.663v12.467l2.389,1.362v-12.468
								C553.855,232.886,553.343,232.004,552.717,231.646z"/>
						</g>
					</g>
					<polygon id="XMLID_471_" fill="#63A7F7" points="450.976,585.926 53.716,351.449 158.714,291.377 560.57,524.814 			"/>
					<g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M335.163,395.263c0.003,0.172,0.149,0.324,0.438,0.456
									c0.293,0.169,0.668,0.278,1.125,0.329c0.457,0.05,0.833,0.023,1.128-0.08c0.322-0.064,0.486-0.183,0.492-0.354l-0.044,7.651
									c-0.001,0.138-0.165,0.237-0.492,0.304c-0.295,0.104-0.671,0.131-1.128,0.08c-0.457-0.051-0.832-0.16-1.125-0.329
									c-0.293-0.135-0.439-0.27-0.438-0.405L335.163,395.263z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#BD9164" d="M338.346,395.614c-0.006,0.172-0.17,0.29-0.492,0.354
									c-0.294,0.104-0.671,0.13-1.128,0.08c-0.457-0.051-0.832-0.16-1.125-0.329c-0.289-0.132-0.435-0.284-0.438-0.456
									c0.001-0.204,0.148-0.341,0.443-0.41c0.295-0.068,0.671-0.08,1.127-0.029c0.457,0.051,0.833,0.143,1.126,0.278
									C338.185,395.239,338.348,395.411,338.346,395.614z"/>
							</g>
						</g>
						<g>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill-opacity="0.149" points="373.792,401.929 347.135,409.551 
								333.894,402.779 360.5,395.151 					"/>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M357.344,390.158l-0.044,7.602
									c0,0.169-0.165,0.288-0.492,0.355c-0.295,0.102-0.67,0.129-1.127,0.078s-0.833-0.16-1.125-0.328
									c-0.293-0.135-0.439-0.287-0.438-0.457l0.044-7.601c0.004,0.139,0.15,0.29,0.438,0.456c0.293,0.102,0.669,0.176,1.126,0.227
									c0.458,0.052,0.833,0.059,1.127,0.022C357.176,390.413,357.341,390.295,357.344,390.158z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#BD9164" d="M354.16,389.807l0-0.052c0-0.17,0.149-0.306,0.444-0.41
									c0.294-0.07,0.67-0.078,1.127-0.027c0.457,0.05,0.832,0.142,1.125,0.276c0.326,0.173,0.488,0.343,0.487,0.514l0,0.05
									c-0.003,0.138-0.167,0.255-0.492,0.354c-0.293,0.036-0.669,0.029-1.127-0.022c-0.457-0.051-0.833-0.125-1.126-0.227
									C354.311,390.097,354.164,389.946,354.16,389.807z"/>
							</g>
						</g>
						<g>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#9A7652" points="373.814,398 347.158,405.673 333.917,398.904 
								360.523,391.225 					"/>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M348.503,401.943c0.004,0.172,0.167,0.327,0.488,0.462
									c0.292,0.168,0.651,0.277,1.076,0.324c0.457,0.051,0.833,0.022,1.127-0.081c0.322-0.063,0.486-0.183,0.493-0.354l-0.044,7.601
									c-0.001,0.17-0.166,0.289-0.492,0.355c-0.295,0.103-0.671,0.129-1.127,0.078c-0.425-0.046-0.784-0.154-1.077-0.322
									c-0.327-0.138-0.488-0.293-0.488-0.462L348.503,401.943z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#BD9164" d="M351.687,402.294c-0.007,0.171-0.171,0.29-0.493,0.354
									c-0.294,0.104-0.67,0.132-1.127,0.081c-0.425-0.047-0.784-0.156-1.076-0.324c-0.321-0.135-0.484-0.29-0.488-0.462l0-0.051
									c0-0.137,0.165-0.254,0.492-0.354c0.294-0.103,0.654-0.131,1.079-0.084c0.457,0.05,0.832,0.159,1.125,0.327
									c0.325,0.173,0.488,0.326,0.487,0.463V402.294z"/>
							</g>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M370.537,396.874l-0.044,7.651
									c0,0.137-0.149,0.239-0.443,0.31c-0.327,0.1-0.703,0.126-1.127,0.079c-0.457-0.05-0.832-0.159-1.125-0.328
									c-0.326-0.14-0.489-0.275-0.488-0.412l0.044-7.652c0.004,0.174,0.167,0.327,0.487,0.463c0.293,0.169,0.668,0.278,1.125,0.329
									c0.424,0.047,0.8,0.02,1.128-0.081C370.384,397.166,370.532,397.045,370.537,396.874z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#BD9164" d="M367.354,396.521c0.001-0.169,0.166-0.286,0.492-0.353
									c0.295-0.104,0.671-0.132,1.128-0.08c0.424,0.047,0.799,0.156,1.125,0.329c0.293,0.135,0.439,0.285,0.438,0.456
									c-0.005,0.172-0.152,0.292-0.442,0.358c-0.328,0.101-0.704,0.128-1.128,0.081c-0.457-0.051-0.832-0.16-1.125-0.329
									C367.52,396.848,367.358,396.695,367.354,396.521z"/>
							</g>
						</g>
					</g>
					<g id="XMLID_699_">
						<polygon id="XMLID_765_" fill="#ABCACE" points="932.412,273.973 904.107,290.374 932.412,306.696 960.716,290.374 				"/>
						<polygon id="XMLID_764_" fill="#EDEDED" points="932.412,218.172 904.107,234.574 932.412,250.895 960.716,234.574 				"/>
						<polygon id="XMLID_763_" fill="#C8CCCC" points="932.412,306.696 904.107,290.374 904.107,234.574 932.412,250.895 				"/>
						<g id="XMLID_741_">
							<g id="XMLID_756_">
								<polygon id="XMLID_760_" fill="#666666" points="915.853,257.008 910.98,254.198 910.98,244.591 915.853,247.402 						"/>
								<polygon id="XMLID_757_" fill="#666666" points="925.539,262.27 920.665,259.459 920.665,249.852 925.539,252.663 						"/>
							</g>
							<g id="XMLID_749_">
								<polygon id="XMLID_753_" fill="#666666" points="915.853,268.479 910.98,265.668 910.98,256.061 915.853,258.872 						"/>
								<polygon id="XMLID_750_" fill="#666666" points="925.539,273.739 920.665,270.928 920.665,261.321 925.539,264.131 						"/>
							</g>
							<g id="XMLID_742_">
								<polygon id="XMLID_746_" fill="#666666" points="915.853,279.948 910.98,277.137 910.98,267.53 915.853,270.34 						"/>
								<polygon id="XMLID_743_" fill="#666666" points="925.539,285.209 920.665,282.399 920.665,272.792 925.539,275.602 						"/>
							</g>
						</g>
						<polygon id="XMLID_740_" fill="#C1C1C1" points="932.412,306.545 960.716,290.223 960.716,234.422 932.412,250.745 				"/>
						<g id="XMLID_711_">
							<g id="XMLID_733_">
								<polygon id="XMLID_737_" fill="#444444" points="944.159,284.11 939.285,286.92 939.285,296.528 944.159,293.717 						"/>
								<polygon id="XMLID_734_" fill="#444444" points="953.843,278.848 948.97,281.659 948.97,291.266 953.843,288.456 						"/>
							</g>
							<g id="XMLID_726_">
								<polygon id="XMLID_730_" fill="#444444" points="944.159,272.639 939.285,275.45 939.285,285.057 944.159,282.247 						"/>
								<polygon id="XMLID_727_" fill="#444444" points="953.843,267.379 948.97,270.19 948.97,279.797 953.843,276.987 						"/>
							</g>
							<g id="XMLID_719_">
								<polygon id="XMLID_723_" fill="#444444" points="944.159,261.17 939.285,263.981 939.285,273.588 944.159,270.778 						"/>
								<polygon id="XMLID_720_" fill="#444444" points="953.843,255.909 948.97,258.719 948.97,268.327 953.843,265.516 						"/>
							</g>
							<g id="XMLID_712_">
								<polygon id="XMLID_716_" fill="#444444" points="944.159,249.702 939.285,252.51 939.285,262.118 944.159,259.307 						"/>
								<polygon id="XMLID_713_" fill="#444444" points="953.843,244.44 948.97,247.25 948.97,256.858 953.843,254.047 						"/>
							</g>
						</g>
						<g id="XMLID_704_">
							<polygon id="XMLID_708_" fill="#666666" points="924.24,300.616 918.259,297.167 918.259,285.375 924.24,288.825 					"/>
							<polygon id="XMLID_705_" fill="#666666" points="918.259,297.157 912.278,293.708 912.278,281.917 918.259,285.366 					"/>
						</g>
						<g id="XMLID_700_">
							<polygon id="XMLID_703_" fill="#A8A8A8" points="926.332,289.282 924.228,290.493 910.186,282.102 912.232,281.055 					"/>
							<polygon id="XMLID_702_" fill="#8E8E8E" points="910.186,282.102 910.186,282.887 924.228,291.266 924.228,290.493 					"/>
							<polygon id="XMLID_701_" fill="#666666" points="924.228,291.266 926.332,290.024 926.332,289.282 924.228,290.493 					"/>
						</g>
					</g>
					<g>
						<polygon fill="#515151" points="846.395,360.619 815.008,377.443 417.925,139.872 450.614,123.345 				"/>
						<g>
							<g>
								<path fill="#CECECE" d="M505.015,172.394l-2.066,1.181l-6.161-3.691l2.067-1.182L505.015,172.394z M492.694,165.016
									l-2.067,1.178l-6.162-3.689l2.068-1.182L492.694,165.016z M480.372,157.635l-2.067,1.18l-6.162-3.69l2.067-1.18
									L480.372,157.635z M468.048,150.255l-2.067,1.181l-6.16-3.69l2.067-1.18L468.048,150.255z M455.726,142.876l-2.067,1.18
									l-6.162-3.691l2.067-1.179L455.726,142.876z M443.404,135.496l-2.068,1.181l-6.16-3.692l2.067-1.179L443.404,135.496z"/>
							</g>
							<g>
								<path fill="#CECECE" d="M690.849,283.927l-2.066,1.18l-6.161-3.689l2.067-1.182L690.849,283.927z M678.527,276.55
									l-2.067,1.178l-6.163-3.691l2.068-1.182L678.527,276.55z M666.204,269.167l-2.066,1.18l-6.161-3.689l2.067-1.18
									L666.204,269.167z M653.88,261.787l-2.066,1.182l-6.161-3.689l2.068-1.18L653.88,261.787z M604.592,232.269l-2.067,1.18
									l-6.161-3.689l2.067-1.18L604.592,232.269z M592.27,224.889l-2.067,1.181l-6.162-3.691l2.068-1.182L592.27,224.889z
									 M579.948,217.511l-2.067,1.18l-6.16-3.689l2.067-1.182L579.948,217.511z M567.626,210.129l-2.068,1.182l-6.162-3.69
									l2.068-1.178L567.626,210.129z M555.303,202.751l-2.068,1.18l-6.16-3.69l2.067-1.18L555.303,202.751z M542.981,195.371
									l-2.068,1.182l-6.161-3.692l2.067-1.18L542.981,195.371z M530.66,187.993l-2.069,1.178l-6.16-3.688l2.067-1.182
									L530.66,187.993z M518.337,180.612l-2.069,1.181l-6.16-3.691l2.067-1.179L518.337,180.612z"/>
							</g>
						</g>
						<g>
							<g>
								<path fill="#CECECE" d="M765.31,328.907l-2.066,1.181l-6.161-3.691l2.067-1.182L765.31,328.907z M752.989,321.529
									l-2.067,1.178l-6.162-3.689l2.068-1.182L752.989,321.529z M740.667,314.148l-2.067,1.18l-6.162-3.69l2.067-1.18
									L740.667,314.148z M728.343,306.767l-2.067,1.182l-6.16-3.69l2.067-1.18L728.343,306.767z M716.021,299.388l-2.067,1.18
									l-6.162-3.691l2.067-1.178L716.021,299.388z M703.699,292.008l-2.068,1.181l-6.16-3.691l2.067-1.18L703.699,292.008z"/>
							</g>
							<g>
								<g>
									<path fill="#CECECE" d="M827.921,366.642l-2.068,1.182l-6.162-3.691l2.068-1.178L827.921,366.642z M815.598,359.263
										l-2.068,1.18l-6.16-3.689l2.067-1.18L815.598,359.263z M803.276,351.884l-2.068,1.182l-6.161-3.692l2.067-1.18
										L803.276,351.884z M790.955,344.505l-2.069,1.178l-6.16-3.688l2.067-1.182L790.955,344.505z M778.632,337.125l-2.069,1.181
										l-6.16-3.69l2.067-1.18L778.632,337.125z"/>
								</g>
							</g>
						</g>
					</g>
					<g>
						<polygon fill="#515151" points="708.224,440.182 676.438,457.49 272.958,222.431 305.612,205.919 				"/>
						<g>
							<g>
								<path fill="#CECECE" d="M475.121,318.602l-2.066,1.181l-6.262-3.634l2.068-1.182L475.121,318.602z M462.598,311.338
									l-2.068,1.178l-6.263-3.632l2.068-1.182L462.598,311.338z M450.074,304.072l-2.067,1.18l-6.261-3.633l2.067-1.18
									L450.074,304.072z M437.551,296.806l-2.067,1.181l-6.261-3.633l2.067-1.18L437.551,296.806z M425.028,289.542l-2.067,1.18
									l-6.262-3.634l2.067-1.179L425.028,289.542z M412.505,282.276l-2.068,1.181l-6.261-3.635l2.068-1.179L412.505,282.276z
									 M399.982,275.011l-2.068,1.181l-6.262-3.635l2.067-1.18L399.982,275.011z M387.459,267.745l-2.068,1.18l-6.261-3.632
									l2.068-1.18L387.459,267.745z M374.936,260.48l-2.068,1.181l-6.262-3.634l2.068-1.182L374.936,260.48z M362.413,253.215
									l-2.067,1.181l-6.261-3.634l2.067-1.181L362.413,253.215z M349.89,245.949l-2.068,1.182l-6.262-3.633l2.068-1.179
									L349.89,245.949z M337.366,238.685l-2.068,1.18l-6.261-3.634l2.068-1.179L337.366,238.685z M324.844,231.419l-2.068,1.181
									l-6.261-3.634l2.068-1.18L324.844,231.419z M312.321,224.155l-2.069,1.179l-6.261-3.632l2.068-1.181L312.321,224.155z
									 M299.798,216.889l-2.069,1.18l-6.261-3.633l2.068-1.179L299.798,216.889z"/>
							</g>
						</g>
						<g>
							<g>
								<path fill="#CECECE" d="M693.275,447.146l-2.066,1.18l-6.262-3.633l2.067-1.182L693.275,447.146z M680.752,439.882
									l-2.067,1.178l-6.264-3.633l2.068-1.182L680.752,439.882z M668.228,432.615l-2.066,1.18l-6.262-3.633l2.067-1.18
									L668.228,432.615z M655.705,425.349l-2.066,1.182l-6.262-3.633l2.068-1.18L655.705,425.349z M643.182,418.085l-2.067,1.18
									l-6.262-3.635l2.067-1.178L643.182,418.085z M630.66,410.82l-2.068,1.18l-6.261-3.635l2.068-1.178L630.66,410.82z
									 M618.137,403.554l-2.068,1.182l-6.262-3.635l2.067-1.18L618.137,403.554z M605.613,396.289l-2.068,1.18l-6.261-3.633
									l2.068-1.18L605.613,396.289z M593.09,389.023l-2.068,1.182l-6.262-3.635l2.068-1.182L593.09,389.023z M580.567,381.759
									l-2.067,1.18l-6.261-3.633l2.067-1.182L580.567,381.759z M568.044,374.492l-2.068,1.182l-6.262-3.633l2.068-1.178
									L568.044,374.492z M555.521,367.228l-2.068,1.18l-6.261-3.633l2.068-1.18L555.521,367.228z M542.998,359.962l-2.068,1.182
									l-6.261-3.635l2.068-1.18L542.998,359.962z M530.476,352.699l-2.069,1.178l-6.261-3.631l2.068-1.182L530.476,352.699z
									 M517.952,345.432l-2.069,1.181l-6.261-3.634l2.068-1.179L517.952,345.432z"/>
							</g>
						</g>
					</g>
					<g>
						<polygon fill="#515151" points="621.273,490.959 589.487,508.267 186.008,273.208 218.661,256.697 				"/>
						<g>
							<g>
								<path fill="#CECECE" d="M418.756,389.368l-2.066,1.181l-6.262-3.634l2.068-1.182L418.756,389.368z M406.233,382.104
									l-2.068,1.178l-6.263-3.632l2.068-1.182L406.233,382.104z M393.709,374.837l-2.067,1.18l-6.261-3.633l2.067-1.18
									L393.709,374.837z M381.186,367.572l-2.067,1.181l-6.261-3.633l2.067-1.18L381.186,367.572z M368.663,360.307l-2.067,1.18
									l-6.262-3.634l2.067-1.179L368.663,360.307z M356.141,353.042l-2.068,1.181l-6.261-3.635l2.068-1.179L356.141,353.042z
									 M343.618,345.777l-2.068,1.181l-6.262-3.635l2.067-1.18L343.618,345.777z M300.858,318.721l-2.068,1.18l-6.261-3.632
									l2.068-1.18L300.858,318.721z M288.335,311.457l-2.068,1.181l-6.262-3.634l2.068-1.182L288.335,311.457z M275.812,304.192
									l-2.067,1.181l-6.261-3.634l2.067-1.181L275.812,304.192z M263.289,296.925l-2.068,1.182l-6.262-3.633l2.068-1.179
									L263.289,296.925z M250.765,289.662l-2.068,1.18l-6.261-3.634l2.068-1.179L250.765,289.662z M238.243,282.396l-2.068,1.181
									l-6.261-3.634l2.068-1.18L238.243,282.396z M225.72,275.131l-2.069,1.179l-6.261-3.632l2.068-1.181L225.72,275.131z
									 M213.197,267.865l-2.069,1.181l-6.261-3.634l2.068-1.179L213.197,267.865z"/>
							</g>
						</g>
						<g>
							<g>
								<path fill="#CECECE" d="M606.674,498.123l-2.066,1.18l-6.262-3.633l2.067-1.182L606.674,498.123z M594.151,490.859
									l-2.067,1.178l-6.264-3.633l2.068-1.182L594.151,490.859z M581.627,483.591l-2.066,1.18l-6.262-3.633l2.067-1.18
									L581.627,483.591z M569.104,476.326l-2.066,1.182l-6.262-3.633l2.068-1.18L569.104,476.326z M556.581,469.062l-2.067,1.18
									l-6.262-3.635l2.067-1.178L556.581,469.062z M544.059,461.796l-2.068,1.18l-6.261-3.635l2.068-1.178L544.059,461.796z
									 M531.536,454.531l-2.068,1.182l-6.262-3.635l2.067-1.18L531.536,454.531z M519.012,447.265l-2.068,1.18l-6.261-3.633
									l2.068-1.18L519.012,447.265z M506.489,440l-2.068,1.182l-6.262-3.635l2.068-1.182L506.489,440z M493.966,432.736l-2.067,1.18
									l-6.261-3.633l2.067-1.182L493.966,432.736z M481.443,425.468l-2.068,1.182l-6.262-3.633l2.068-1.178L481.443,425.468z
									 M468.919,418.205l-2.068,1.18l-6.261-3.633l2.068-1.18L468.919,418.205z M456.397,410.939l-2.068,1.182l-6.261-3.635
									l2.068-1.18L456.397,410.939z M443.875,403.675l-2.069,1.178l-6.261-3.631l2.068-1.182L443.875,403.675z M431.351,396.409
									l-2.069,1.181l-6.261-3.634l2.068-1.179L431.351,396.409z"/>
							</g>
						</g>
					</g>
					<polygon fill="#FFFFFF" points="841.058,112.863 846.205,114.914 834.304,122.047 829.158,119.996 			"/>
					<line fill="none" stroke="#515151" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" x1="748.16" y1="153.658" x2="778.642" y2="171.508"/>
					<g>
						<polyline fill="#515151" points="748.16,153.658 457.006,328.81 489.694,345.339 778.642,171.508 				"/>
						<g>
							<g>
								<g>
									<path fill="#CECECE" d="M699.416,199.559l2.067,1.182l-6.161,3.691l-2.066-1.181L699.416,199.559z M711.738,192.18
										l2.068,1.182l-6.162,3.689l-2.067-1.178L711.738,192.18z M724.061,184.802l2.067,1.18l-6.162,3.69l-2.067-1.18
										L724.061,184.802z M736.382,177.423l2.067,1.18l-6.16,3.69l-2.067-1.181L736.382,177.423z M748.707,170.042l2.067,1.179
										l-6.162,3.691l-2.067-1.18L748.707,170.042z M761.028,162.663l2.067,1.179l-6.16,3.692l-2.068-1.181L761.028,162.663z"/>
								</g>
							</g>
							<g>
								<g>
									<path fill="#CECECE" d="M513.582,311.092l2.067,1.182l-6.161,3.69l-2.066-1.18L513.582,311.092z M525.905,303.712
										l2.068,1.182l-6.163,3.69l-2.067-1.178L525.905,303.712z M538.227,296.334l2.067,1.18l-6.161,3.69l-2.066-1.18
										L538.227,296.334z M550.549,288.957l2.068,1.18l-6.161,3.689l-2.066-1.182L550.549,288.957z M562.873,281.577l2.067,1.178
										l-6.161,3.691l-2.067-1.18L562.873,281.577z M575.194,274.196l2.068,1.178l-6.162,3.692l-2.068-1.18L575.194,274.196z
										 M587.517,266.816l2.067,1.18l-6.162,3.692l-2.067-1.182L587.517,266.816z M599.839,259.436l2.067,1.18l-6.161,3.69
										l-2.067-1.18L599.839,259.436z M612.161,252.054l2.068,1.182l-6.162,3.691L606,255.746L612.161,252.054z M624.483,244.676
										l2.067,1.182l-6.16,3.689l-2.067-1.18L624.483,244.676z M636.806,237.299l2.068,1.178l-6.162,3.69l-2.068-1.182
										L636.806,237.299z M649.128,229.917l2.067,1.18l-6.16,3.69l-2.068-1.18L649.128,229.917z M661.452,222.538l2.067,1.18
										l-6.161,3.692l-2.068-1.182L661.452,222.538z M673.773,215.158l2.067,1.182l-6.16,3.688l-2.069-1.178L673.773,215.158z
										 M686.095,207.78l2.067,1.179l-6.16,3.691l-2.069-1.181L686.095,207.78z"/>
								</g>
							</g>
						</g>
					</g>
					<g>
						<polygon fill="#515151" points="342.518,341.336 411.064,300.785 379.556,283.56 312.035,323.485 				"/>
						<g>
							<polygon fill="#CECECE" points="368,307.343 370.725,308.429 377.022,304.655 374.297,303.568 					"/>
							<polygon fill="#CECECE" points="356.356,314.576 359.082,315.663 365.378,311.887 362.653,310.801 					"/>
							<polygon fill="#CECECE" points="343.07,322.387 345.795,323.474 352.092,319.699 349.367,318.613 					"/>
							<polygon fill="#CECECE" points="380.595,299.793 383.32,300.878 389.617,297.103 386.893,296.018 					"/>
						</g>
					</g>
					<g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M368.304,183.523l33.091,19.997l0.044,3.317l-34.613-20.956
									L368.304,183.523z M401.352,200.263l-31.617-19.143l1.478-2.359l30.094,18.156L401.352,200.263z M374.072,173.896
									l27.147,16.445l0.044,3.289l-28.621-17.302L374.072,173.896z M376.98,169.134l24.15,14.573l0.045,3.346l-25.672-15.534
									L376.98,169.134z M401.043,177.132l0.044,3.317l-22.676-13.721l1.477-2.357L401.043,177.132z M382.75,159.534l18.204,10.994
									l0.044,3.26l-19.634-11.833L382.75,159.534z M400.867,163.923l0.044,3.289l-16.684-10.036l1.476-2.417L400.867,163.923z
									 M400.779,157.319l0.044,3.317l-13.688-8.251l1.476-2.415L400.779,157.319z M400.734,154.031l-10.738-6.455l1.521-2.398
									l9.173,5.565L400.734,154.031z M394.381,140.37l6.222,3.769l0.043,3.288l-7.742-4.64L394.381,140.37z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M400.603,144.139l-6.222-3.769l6.041-9.84L400.603,144.139z
									 M369.735,181.12l31.617,19.143l0.043,3.258l-33.091-19.997L369.735,181.12z M401.307,196.916l-30.094-18.156l1.43-2.433
									l28.621,17.302L401.307,196.916z M401.219,190.341l-27.147-16.445l1.432-2.375l25.672,15.534L401.219,190.341z
									 M378.412,166.729l22.676,13.721l0.043,3.258l-24.15-14.573L378.412,166.729z M401.043,177.132l-21.155-12.761l1.477-2.416
									l19.634,11.833L401.043,177.132z M384.227,157.176l16.684,10.036l0.044,3.316l-18.204-10.994L384.227,157.176z
									 M400.867,163.923l-15.164-9.164l1.432-2.375l13.688,8.251L400.867,163.923z M400.779,157.319l-12.168-7.349l1.386-2.394
									l10.738,6.455L400.779,157.319z M400.646,147.426l0.044,3.317l-9.173-5.565l1.386-2.392L400.646,147.426z"/>
							</g>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="400.687,150.48 400.643,147.163 400.599,143.875 
								400.417,130.266 439.493,184.515 401.436,206.575 401.392,203.257 401.348,199.999 401.304,196.653 401.26,193.366 
								401.216,190.077 401.172,186.79 401.127,183.444 401.083,180.186 401.04,176.868 400.995,173.524 400.952,170.264 
								400.907,166.948 400.863,163.66 400.819,160.373 400.775,157.055 400.731,153.768 					"/>
						</g>
					</g>
					<g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M322.514,203.479l32.821,20.437v3.317l-34.33-21.416
									L322.514,203.479z M355.335,220.658l-31.359-19.563l1.509-2.339l29.85,18.556V220.658z M328.41,193.929l26.925,16.806v3.289
									l-28.388-17.682L328.41,193.929z M331.381,189.208l23.954,14.895v3.346l-25.462-15.875L331.381,189.208z M355.335,197.525
									v3.318l-22.491-14.022l1.508-2.337L355.335,197.525z M337.279,179.685l18.056,11.236v3.261l-19.474-12.094L337.279,179.685z
									 M355.335,184.315v3.29l-16.548-10.258l1.508-2.397L355.335,184.315z M355.335,177.71v3.318l-13.577-8.434l1.508-2.395
									L355.335,177.71z M355.335,174.422l-10.651-6.598l1.554-2.377l9.098,5.687V174.422z M349.164,160.678l6.171,3.852v3.288
									l-7.68-4.743L349.164,160.678z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M355.335,164.529l-6.171-3.852l6.171-9.759V164.529z
									 M323.976,201.095l31.359,19.563v3.258l-32.821-20.437L323.976,201.095z M355.335,217.312l-29.85-18.556l1.462-2.413
									l28.388,17.682V217.312z M355.335,210.735l-26.925-16.806l1.463-2.356l25.462,15.875V210.735z M332.844,186.821l22.491,14.022
									v3.259l-23.954-14.895L332.844,186.821z M355.335,197.525l-20.983-13.042l1.509-2.396l19.474,12.094V197.525z
									 M338.787,177.347l16.548,10.258v3.315l-18.056-11.236L338.787,177.347z M355.335,184.315l-15.04-9.365l1.463-2.355
									l13.577,8.434V184.315z M355.335,177.71l-12.069-7.511l1.417-2.375l10.651,6.598V177.71z M355.335,167.817v3.317l-9.098-5.687
									l1.417-2.373L355.335,167.817z"/>
							</g>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="355.335,170.871 355.335,167.554 355.335,164.266 
								355.335,150.655 393.683,205.421 355.335,226.971 355.335,223.654 355.335,220.395 355.335,217.048 355.335,213.761 
								355.335,210.472 355.335,207.185 355.335,203.838 355.335,200.58 355.335,197.262 355.335,193.917 355.335,190.657 
								355.335,187.341 355.335,184.052 355.335,180.765 355.335,177.447 355.335,174.159 					"/>
						</g>
					</g>
					<g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M520.374,83.003l41.231,25.674v4.167l-43.126-26.904
									L520.374,83.003z M561.604,104.583l-39.394-24.576l1.896-2.938l37.498,23.311V104.583z M527.781,71.006l33.824,21.112v4.131
									l-35.66-22.212L527.781,71.006z M531.513,65.074l30.091,18.711v4.203l-31.986-19.942L531.513,65.074z M561.604,75.523v4.168
									l-28.252-17.615l1.894-2.937L561.604,75.523z M538.922,53.111l22.682,14.116v4.096L537.142,56.13L538.922,53.111z
									 M561.604,58.929v4.132l-20.788-12.886l1.894-3.011L561.604,58.929z M561.604,50.632v4.167L544.55,44.206l1.894-3.01
									L561.604,50.632z M561.604,46.5l-13.38-8.288l1.951-2.987l11.429,7.144V46.5z M553.853,29.234l7.752,4.839v4.131l-9.647-5.958
									L553.853,29.234z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M561.604,34.073l-7.752-4.839l7.752-12.259V34.073z
									 M522.211,80.008l39.394,24.576v4.094l-41.231-25.674L522.211,80.008z M561.604,100.38l-37.498-23.311l1.837-3.032
									l35.66,22.212V100.38z M561.604,92.119l-33.824-21.112l1.838-2.96l31.986,19.942V92.119z M533.352,62.076l28.252,17.615v4.094
									l-30.091-18.711L533.352,62.076z M561.604,75.523L535.246,59.14l1.896-3.01l24.463,15.192V75.523z M540.817,50.175
									l20.788,12.886v4.166l-22.682-14.116L540.817,50.175z M561.604,58.929l-18.894-11.765l1.839-2.958l17.055,10.594V58.929z
									 M561.604,50.632l-15.161-9.436l1.781-2.983l13.38,8.288V50.632z M561.604,38.204v4.167l-11.429-7.144l1.782-2.981
									L561.604,38.204z"/>
							</g>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="561.604,42.039 561.604,37.873 561.604,33.742 
								561.604,16.644 609.779,85.443 561.604,112.514 561.604,108.346 561.604,104.252 561.604,100.049 561.604,95.92 
								561.604,91.788 561.604,87.658 561.604,83.454 561.604,79.361 561.604,75.193 561.604,70.992 561.604,66.896 561.604,62.729 
								561.604,58.598 561.604,54.469 561.604,50.3 561.604,46.17 					"/>
						</g>
					</g>
					<g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M479.061,115.986l35.638,22.191v3.603l-37.276-23.254
									L479.061,115.986z M514.699,134.639l-34.05-21.242l1.638-2.541l32.412,20.149V134.639z M485.462,105.616l29.236,18.249v3.571
									l-30.824-19.2L485.462,105.616z M488.688,100.488l26.01,16.173v3.633l-27.647-17.237L488.688,100.488z M514.699,109.521v3.602
									l-24.421-15.226l1.637-2.538L514.699,109.521z M495.093,90.148l19.606,12.201v3.54l-21.145-13.132L495.093,90.148z
									 M514.699,95.176v3.572L496.73,87.61l1.638-2.603L514.699,95.176z M514.699,88.005v3.603l-14.742-9.158l1.638-2.601
									L514.699,88.005z M514.699,84.435l-11.565-7.164l1.687-2.582l9.878,6.176V84.435z M507.999,69.51l6.7,4.183v3.57l-8.339-5.151
									L507.999,69.51z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M514.699,73.692l-6.7-4.183l6.7-10.597V73.692z
									 M480.648,113.396l34.05,21.242v3.538l-35.638-22.191L480.648,113.396z M514.699,131.005l-32.412-20.149l1.588-2.62
									l30.824,19.2V131.005z M514.699,123.864l-29.236-18.249l1.589-2.559l27.647,17.237V123.864z M490.278,97.897l24.421,15.226
									v3.539l-26.01-16.173L490.278,97.897z M514.699,109.521l-22.784-14.162l1.639-2.602l21.145,13.132V109.521z M496.73,87.61
									l17.968,11.138v3.601l-19.606-12.201L496.73,87.61z M514.699,95.176l-16.331-10.169l1.588-2.557l14.742,9.158V95.176z
									 M514.699,88.005l-13.104-8.156l1.539-2.578l11.565,7.164V88.005z M514.699,77.263v3.602l-9.878-6.176l1.54-2.577
									L514.699,77.263z"/>
							</g>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="514.699,80.578 514.699,76.977 514.699,73.406 
								514.699,58.626 556.339,118.094 514.699,141.494 514.699,137.892 514.699,134.353 514.699,130.719 514.699,127.149 
								514.699,123.578 514.699,120.009 514.699,116.375 514.699,112.837 514.699,109.234 514.699,105.603 514.699,102.063 
								514.699,98.462 514.699,94.891 514.699,91.321 514.699,87.719 514.699,84.148 					"/>
						</g>
					</g>
					<line fill="none" stroke="#DB8A8A" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" x1="43.843" y1="251.737" x2="43.843" y2="257.683"/>
					<path fill="none" stroke="#DB8A8A" stroke-miterlimit="10" d="M36.179,275.912"/>
					<path fill="none" stroke="#DB8A8A" stroke-miterlimit="10" d="M27.606,271.091"/>
					<g>
						<g>
							<polygon fill="#D6D6D7" points="430.646,248.334 461.372,230.572 461.372,229.724 430.646,247.485 					"/>
							<polygon fill="#BCBEC0" points="430.646,248.334 429.845,247.974 429.845,247.125 430.646,247.485 					"/>
							<polygon fill="#E6E7E8" points="430.646,247.485 429.845,247.125 460.82,229.505 461.372,229.724 					"/>
						</g>
						<g>
							<polygon fill="#D6D6D7" points="430.646,243.496 461.372,225.735 461.372,224.885 430.646,242.647 					"/>
							<polygon fill="#BCBEC0" points="430.646,243.496 429.845,243.136 429.845,242.287 430.646,242.647 					"/>
							<polygon fill="#E6E7E8" points="430.646,242.647 429.845,242.287 460.82,224.667 461.372,224.885 					"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M456.821,221.674l0.111-0.063c0.627-0.357,1.525-0.059,1.525,0.663v12.468l-2.391,1.361h-0.385v-12.467
								C455.681,222.915,456.194,222.033,456.821,221.674z"/>
							<path fill="#E6E7E8" d="M457.206,221.674l0.11-0.063c0.629-0.357,1.141-0.059,1.141,0.663v12.468l-2.391,1.361v-12.467
								C456.066,222.915,456.579,222.033,457.206,221.674z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M451.091,225.147l0.112-0.063c0.627-0.357,1.525-0.059,1.525,0.664v12.467l-2.391,1.362h-0.386v-12.468
								C449.951,226.387,450.466,225.504,451.091,225.147z"/>
							<path fill="#E6E7E8" d="M451.477,225.147l0.111-0.063c0.627-0.357,1.14-0.059,1.14,0.664v12.467l-2.391,1.362v-12.468
								C450.337,226.387,450.851,225.504,451.477,225.147z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M445.363,228.272l0.112-0.063c0.627-0.358,1.525-0.061,1.525,0.661v12.469l-2.392,1.361h-0.385v-12.468
								C444.224,229.511,444.736,228.628,445.363,228.272z"/>
							<path fill="#E6E7E8" d="M445.749,228.272l0.111-0.063c0.627-0.358,1.141-0.061,1.141,0.661v12.469l-2.392,1.361v-12.468
								C444.609,229.511,445.122,228.628,445.749,228.272z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M439.636,231.511l0.11-0.063c0.627-0.356,1.526-0.06,1.526,0.664v12.466l-2.392,1.362h-0.384v-12.468
								C438.496,232.751,439.009,231.869,439.636,231.511z"/>
							<path fill="#E6E7E8" d="M440.02,231.511l0.111-0.063c0.627-0.356,1.141-0.06,1.141,0.664v12.466l-2.392,1.362v-12.468
								C438.88,232.751,439.394,231.869,440.02,231.511z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M433.907,234.868l0.112-0.063c0.628-0.358,1.524-0.06,1.524,0.663v12.467l-2.389,1.362h-0.387V236.83
								C432.768,236.108,433.28,235.226,433.907,234.868z"/>
							<path fill="#E6E7E8" d="M434.292,234.868l0.112-0.063c0.628-0.358,1.139-0.06,1.139,0.663v12.467l-2.389,1.362V236.83
								C433.154,236.108,433.667,235.226,434.292,234.868z"/>
						</g>
					</g>
					<g>
						<g>
							<polygon fill="#D6D6D7" points="457.897,230.086 488.624,212.323 488.624,211.476 457.897,229.236 					"/>
							<polygon fill="#BCBEC0" points="457.897,230.086 457.097,229.725 457.097,228.876 457.897,229.236 					"/>
							<polygon fill="#E6E7E8" points="457.897,229.236 457.097,228.876 488.072,211.257 488.624,211.476 					"/>
						</g>
						<g>
							<polygon fill="#D6D6D7" points="457.897,225.248 488.624,207.486 488.624,206.637 457.897,224.399 					"/>
							<polygon fill="#BCBEC0" points="457.897,225.248 457.097,224.888 457.097,224.039 457.897,224.399 					"/>
							<polygon fill="#E6E7E8" points="457.897,224.399 457.097,224.039 488.072,206.419 488.624,206.637 					"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M484.072,203.426l0.111-0.063c0.627-0.358,1.525-0.059,1.525,0.663v12.468l-2.391,1.361h-0.385v-12.467
								C482.933,204.667,483.445,203.785,484.072,203.426z"/>
							<path fill="#E6E7E8" d="M484.457,203.426l0.111-0.063c0.628-0.358,1.141-0.059,1.141,0.663v12.468l-2.391,1.361v-12.467
								C483.318,204.667,483.83,203.785,484.457,203.426z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M478.343,206.899l0.112-0.063c0.628-0.357,1.525-0.059,1.525,0.664v12.467l-2.391,1.362h-0.386V208.86
								C477.203,208.139,477.717,207.256,478.343,206.899z"/>
							<path fill="#E6E7E8" d="M478.729,206.899l0.111-0.063c0.627-0.357,1.14-0.059,1.14,0.664v12.467l-2.391,1.362V208.86
								C477.589,208.139,478.103,207.256,478.729,206.899z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M472.615,210.023l0.111-0.062c0.628-0.358,1.525-0.061,1.525,0.661v12.469l-2.392,1.36h-0.385v-12.467
								C471.476,211.263,471.988,210.38,472.615,210.023z"/>
							<path fill="#E6E7E8" d="M473,210.023l0.111-0.062c0.626-0.358,1.14-0.061,1.14,0.661v12.469l-2.392,1.36v-12.467
								C471.86,211.263,472.374,210.38,473,210.023z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M466.888,213.263l0.11-0.063c0.627-0.357,1.525-0.06,1.525,0.664v12.466l-2.392,1.362h-0.385v-12.468
								C465.747,214.503,466.261,213.621,466.888,213.263z"/>
							<path fill="#E6E7E8" d="M467.271,213.263l0.111-0.063c0.628-0.357,1.141-0.06,1.141,0.664v12.466l-2.392,1.362v-12.468
								C466.132,214.503,466.646,213.621,467.271,213.263z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M461.159,216.62l0.112-0.063c0.628-0.358,1.524-0.061,1.524,0.663v12.467l-2.389,1.362h-0.387v-12.468
								C460.019,217.86,460.532,216.978,461.159,216.62z"/>
							<path fill="#E6E7E8" d="M461.544,216.62l0.112-0.063c0.628-0.358,1.139-0.061,1.139,0.663v12.467l-2.389,1.362v-12.468
								C460.406,217.86,460.918,216.978,461.544,216.62z"/>
						</g>
					</g>
					<g>
						<g>
							<g>
								<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#BD966E" points="474.493,193.918 472.549,194.909 482.383,198.24 
									487.177,195.734 477.31,192.479 						"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#B75B61" d="M487.177,195.734l-0.059,2.253l-5.035,11.637l-9.836-3.259
									l0.202-7.649l-13.646,32.118l2.557,0.869l1.41,0.463c0.088,0.014,0.186,0.055,0.294,0.117l25.601,8.625l0.458,0.18
									l0.034-0.004l0.032,0.033l0.777-1.842l-0.055,2.07l0.722,0.229l2.164,0.684l-2.83-3.057l0.528-1.191
									c0.165-0.408,0.341-0.83,0.529-1.266l1.515-3.494l1.515-3.568l1.551-3.609l1.515-3.531l1.55-3.572l1.517-3.604l1.549-3.572
									l1.515-3.532l0.388-0.884c0.001-0.073,0.014-0.124,0.036-0.151l2.008-4.684l0.917-2.148l-30.658-9.963l-1.449,3.489
									l2.817-1.44L487.177,195.734z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#9A7A5A" d="M472.549,194.909l9.833,3.332l-0.3,11.384l-9.836-3.259
									l0.202-7.649L472.549,194.909z M460.944,247.488l27.303,9.273l-0.074,2.813l-27.304-9.242L460.944,247.488z M462.77,232.166
									c0.088,0.014,0.186,0.055,0.294,0.117l25.601,8.625l-0.044,1.699l-27.304-9.242l0.043-1.662L462.77,232.166z M461.242,236.177
									l27.304,9.275l-0.075,2.811l-8.817-2.984l0.057-2.145l-4.491-1.537l-0.204,7.723l4.49,1.539l0.074-2.771l8.816,3.021
									l-0.074,2.807l-27.304-9.24L461.242,236.177z M469.606,247.533l4.458,1.543l0.204-7.725l-4.458-1.541L469.606,247.533z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B6046" d="M487.177,195.734l-0.059,2.253l-5.035,11.637l0.3-11.384
									L487.177,195.734z M503.25,208.26l4.66-2.422l1.368,2.086l-7.543,3.868L503.25,208.26z M512.045,212.093l-13.376,6.875
									l1.517-3.604l10.491-5.319L512.045,212.093z M497.12,222.541l2.079-1.077l-0.074,2.809l-3.52,1.799L497.12,222.541z
									 M516.213,218.344l0.667,1.008l-0.037,1.404l-24.305,12.493l1.515-3.568L516.213,218.344z M499.802,242.46l-2.649,1.387
									l0.061-2.328l-6.134,3.148l-0.061,2.291l-2.548,1.305l-0.075,2.846l2.547-1.305l-0.074,2.807l-2.548,1.305l-0.075,2.846
									l11.331-5.801l-0.075,2.846l-11.33,5.768l-0.074,2.809l-27.304-9.244l0.074-2.807l27.304,9.242l0.074-2.813l-27.303-9.273
									l0.074-2.813l27.304,9.24l0.074-2.807l-8.816-3.021l0.074-2.809l8.817,2.984l0.075-2.811l-27.304-9.275l0.075-2.813
									l27.304,9.242l-0.075,2.846l11.329-5.764L499.802,242.46z M489.123,241.087l0.034-0.004l0.032,0.033l0.722,0.229l0.722,0.229
									l-2.011,1.033l0.044-1.699L489.123,241.087z M497.003,249.501l0.075-2.846l2.648-1.352l-0.074,2.811L497.003,249.501z
									 M507.145,217.375l6.301-3.2l1.368,2.05l-7.744,3.996L507.145,217.375z M503.449,222.067l-0.738,0.401l0.076-2.846
									l0.738-0.401L503.449,222.067z M505.702,239.445l0.074-2.811l10.796-5.566l-0.075,2.846l-2.515,1.301l0.062-2.328
									l-6.103,3.145l-0.06,2.291L505.702,239.445z M507.731,243.976l-2.178,1.125l0.074-2.811l2.179-1.123L507.731,243.976z
									 M516.198,245.222l-10.795,5.533l0.074-2.811l10.796-5.568L516.198,245.222z M513.833,240.869l0.075-2.846l2.515-1.299
									l-0.075,2.844L513.833,240.869z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#5F4B36" d="M503.638,207.376c0.001-0.073,0.014-0.124,0.036-0.151
									l2.008-4.684l2.228,3.297l-4.66,2.422L503.638,207.376z M501.735,211.792l7.543-3.868l1.399,2.121l-10.491,5.319
									L501.735,211.792z M507.201,215.232l-3.621,1.846l-0.056,2.143l-0.738,0.401l0.059-2.255l-3.588,1.88l-0.059,2.218
									l-2.079,1.077l1.55-3.572l13.376-6.875l1.4,2.083l-6.301,3.2L507.201,215.232z M488.322,253.916l2.548-1.305l-0.028,1.035
									l6.135-3.146l0.026-0.998l2.649-1.387l-0.075,2.846l-11.331,5.801L488.322,253.916z M499.482,254.583l5.899-3.018l0.021-0.811
									l10.795-5.533l-0.074,2.809l-28.025,14.352l0.074-2.809l11.33-5.768L499.482,254.583z M495.604,226.072l3.52-1.799
									l-0.029,1.072l3.588-1.88l0.026-0.997l0.738-0.401l-0.028,1.072l3.621-1.846l0.029-1.071l7.744-3.996l1.4,2.119l-22.16,11.337
									L495.604,226.072z M488.621,242.607l2.011-1.033l2.164,0.684l7.106-3.605l-0.027,1.037l-11.329,5.764L488.621,242.607z
									 M516.807,222.16l-0.035,1.331l-25.748,13.252l1.515-3.494l24.305-12.493L516.807,222.16z M488.471,248.263l2.548-1.305
									l-0.075,2.846l-2.547,1.305L488.471,248.263z M499.802,242.46l-0.075,2.844l-2.648,1.352l0.074-2.809L499.802,242.46z
									 M505.776,236.634l0.027-1.033l10.796-5.568l-0.027,1.035L505.776,236.634z M513.982,235.214l2.515-1.301l-0.074,2.811
									l-2.515,1.299L513.982,235.214z M505.627,242.291l0.075-2.846l2.179-1.123l-0.075,2.846L505.627,242.291z M505.553,245.101
									l2.178-1.125l-0.028,1.072l6.103-3.182l0.027-0.998l2.514-1.301l-0.074,2.809l-10.796,5.568L505.553,245.101z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE6" d="M479.506,250.859l-4.49-1.539l0.204-7.723l4.491,1.537
									l-0.057,2.145l-0.074,2.809L479.506,250.859z M474.268,241.351l-0.204,7.725l-4.458-1.543l0.204-7.723L474.268,241.351z
									 M491.019,246.958l0.061-2.291l6.134-3.148l-0.061,2.328l-0.074,2.809l-0.075,2.846l-0.026,0.998l-6.135,3.146l0.028-1.035
									l0.074-2.807L491.019,246.958z M505.627,242.291l-0.074,2.811l-0.076,2.844l-0.074,2.811l-0.021,0.811l-5.899,3.018
									l0.02-0.777l0.075-2.846l0.075-2.846l0.074-2.811l0.075-2.844l0.073-2.771l0.027-1.037l5.901-3.051l-0.027,1.033l-0.074,2.811
									L505.627,242.291z M499.257,219.246l3.588-1.88l-0.059,2.255l-0.076,2.846l-0.026,0.997l-3.588,1.88l0.029-1.072l0.074-2.809
									L499.257,219.246z M503.58,217.078l3.621-1.846l-0.057,2.143l-0.075,2.846l-0.029,1.071l-3.621,1.846l0.028-1.072l0.075-2.846
									L503.58,217.078z M507.941,236.031l6.103-3.145l-0.062,2.328l-0.074,2.809l-0.075,2.846l-0.027,0.998l-6.103,3.182
									l0.028-1.072l0.075-2.809l0.075-2.846L507.941,236.031z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#963E52" d="M506.6,200.393l0.033-0.003l15.746,23.653l-5.572-1.883
									l0.037-1.403l0.037-1.404l-0.667-1.008l-1.4-2.119l-1.368-2.05l-1.4-2.083l-1.368-2.048l-1.399-2.121l-1.368-2.086
									l-2.228-3.297L506.6,200.393z M520.32,228.142l-3.72,1.891l-10.796,5.568l-5.901,3.051l-7.106,3.605l-2.83-3.057l0.528-1.191
									c0.165-0.408,0.341-0.83,0.529-1.266l25.748-13.252L520.32,228.142z M489.965,239.275l-0.055,2.07l-0.722-0.229
									L489.965,239.275z"/>
							</g>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE6" d="M502.94,279.416v-8.56l1.862-2.739l0.039-0.009l1.902,0.502
									v4.279v4.28L502.94,279.416z M507.655,276.617v-3.924v-4.637l1.902-2.747l1.902,0.462v6.103v2.457L507.655,276.617z
									 M498.225,282.253v-8.559l1.902-2.748l0.04-0.049l1.902,0.503v2.495v6.063L498.225,282.253z M488.833,287.844v-8.561
									l1.902-2.747l0.04-0.009l1.902,0.5v8.561L488.833,287.844z M493.548,276.485l1.863-2.739l0.04-0.008l1.902,0.501v0.675v7.885
									l-3.804,2.247V276.485z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#C65151" d="M506.744,277.169v4.557l-3.804,2.247v-4.558L506.744,277.169
									z M511.46,274.331v4.557l-3.805,2.287v-4.558L511.46,274.331z M502.068,279.959v4.557l-3.844,2.295v-4.558L502.068,279.959z
									 M497.353,287.316l-3.804,2.286v-4.557l3.804-2.247V287.316z M492.677,290.105l-3.844,2.296v-4.557l3.844-2.256V290.105z"/>
							</g>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE6" d="M551.428,251.228v-8.561l1.862-2.603l0.04-0.006l1.902,0.641
									v4.278v4.28L551.428,251.228z M556.143,248.773v-3.925v-4.636l1.902-2.608l1.903,0.601v6.103v2.457L556.143,248.773z
									 M546.712,253.721v-8.559l1.901-2.608l0.041-0.046l1.901,0.641v2.496v6.063L546.712,253.721z M537.32,258.626v-8.56
									l1.902-2.608l0.04-0.006l1.902,0.64v8.559L537.32,258.626z M542.036,247.612l1.863-2.604l0.04-0.005l1.901,0.64v0.675v7.885
									l-3.804,1.969V247.612z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#C65151" d="M555.231,249.258v4.558l-3.804,1.969v-4.557L555.231,249.258
									z M559.948,246.764v4.557l-3.805,2.009v-4.557L559.948,246.764z M550.555,251.708v4.557l-3.843,2.015v-4.558L550.555,251.708z
									 M545.84,258.719l-3.804,2.009v-4.557l3.804-1.969V258.719z M541.164,261.168l-3.844,2.015v-4.557l3.844-1.976V261.168z"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon fill="#E6E7E8" points="482.653,262.493 477.632,259.58 482.924,257.151 487.672,259.58 					"/>
							<polygon fill="#BCBEC0" points="482.653,262.024 478.519,259.623 482.879,257.623 486.785,259.623 					"/>
						</g>
						<g>
							<g>
								<ellipse fill="#D6D6D7" cx="482.427" cy="270.708" rx="5.702" ry="2.97"/>
								<ellipse fill="#E6E7E8" cx="482.427" cy="270.195" rx="5.702" ry="2.97"/>
							</g>
							<g>
								<polygon fill="#A0A0A0" points="482.879,257.623 482.653,262.024 486.785,259.623 						"/>
								<rect x="481.941" y="256.716" fill="#9B5F0E" width="1.36" height="6.803"/>
								<g>
									<path fill="#00B148" d="M482.571,243.623v16.388c0,0-3.739-0.068-3.965-3.925L482.571,243.623z"/>
									<path fill="#009748" d="M482.571,243.623v16.388c0,0,3.739-0.068,3.965-3.925L482.571,243.623z"/>
								</g>
								<path fill="#E6E7E8" d="M477.632,259.58l5.021,2.913l5.02-2.913l-0.888,0.043l-4.132,2.401l-4.134-2.401L477.632,259.58z"/>
								<polygon fill="#D1D3D4" points="482.653,272.21 479.005,270.092 477.632,259.58 482.653,262.493 						"/>
								<polygon fill="#BCBEC0" points="482.653,272.21 485.949,270.295 487.672,259.58 482.653,262.493 						"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon fill="#E6E7E8" points="528.685,237.5 523.664,234.586 528.956,232.158 533.704,234.586 					"/>
							<polygon fill="#BCBEC0" points="528.685,237.03 524.551,234.629 528.911,232.629 532.816,234.629 					"/>
						</g>
						<g>
							<g>
								<ellipse fill="#D6D6D7" cx="528.459" cy="245.714" rx="5.702" ry="2.97"/>
								<ellipse fill="#E6E7E8" cx="528.459" cy="245.202" rx="5.702" ry="2.97"/>
							</g>
							<g>
								<polygon fill="#A0A0A0" points="528.911,232.629 528.685,237.03 532.816,234.629 						"/>
								<rect x="527.973" y="231.723" fill="#9B5F0E" width="1.361" height="6.803"/>
								<g>
									<path fill="#00B148" d="M528.603,218.629v16.388c0,0-3.739-0.068-3.965-3.925L528.603,218.629z"/>
									<path fill="#009748" d="M528.603,218.629v16.388c0,0,3.739-0.068,3.965-3.925L528.603,218.629z"/>
								</g>
								<path fill="#E6E7E8" d="M523.664,234.586l5.021,2.913l5.02-2.913l-0.888,0.043l-4.132,2.4l-4.134-2.4L523.664,234.586z"/>
								<polygon fill="#D1D3D4" points="528.685,247.217 525.038,245.099 523.664,234.586 528.685,237.5 						"/>
								<polygon fill="#BCBEC0" points="528.685,247.217 531.98,245.302 533.704,234.586 528.685,237.5 						"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon fill="#E6E7E8" points="456.891,248.932 451.87,246.019 457.163,243.589 461.911,246.019 					"/>
							<polygon fill="#BCBEC0" points="456.891,248.462 452.757,246.062 457.117,244.062 461.023,246.062 					"/>
						</g>
						<g>
							<g>
								<ellipse fill="#D6D6D7" cx="456.666" cy="257.146" rx="5.702" ry="2.971"/>
								<ellipse fill="#E6E7E8" cx="456.666" cy="256.634" rx="5.702" ry="2.97"/>
							</g>
							<g>
								<polygon fill="#A0A0A0" points="457.117,244.062 456.891,248.462 461.023,246.062 						"/>
								<rect x="456.179" y="243.156" fill="#9B5F0E" width="1.36" height="6.803"/>
								<g>
									<path fill="#00B148" d="M456.809,230.062v16.388c0,0-3.739-0.069-3.965-3.926L456.809,230.062z"/>
									<path fill="#009748" d="M456.809,230.062v16.388c0,0,3.739-0.069,3.965-3.926L456.809,230.062z"/>
								</g>
								<path fill="#E6E7E8" d="M451.87,246.019l5.021,2.913l5.02-2.913l-0.888,0.043l-4.132,2.4l-4.134-2.4L451.87,246.019z"/>
								<polygon fill="#D1D3D4" points="456.891,258.65 453.244,256.531 451.87,246.019 456.891,248.932 						"/>
								<polygon fill="#BCBEC0" points="456.891,258.65 460.187,256.735 461.911,246.019 456.891,248.932 						"/>
							</g>
						</g>
					</g>
					<polygon fill="#BFBFBF" points="652.773,407.86 763.913,347.236 815.008,377.443 706.566,440.09 			"/>
					<polygon fill="#BFBFBF" points="625.991,162.677 694.36,123.908 745.456,154.115 679.784,194.907 			"/>
					<g>
						<g id="XMLID_465_">
							<polygon id="XMLID_468_" fill="#8E7049" points="630.335,299.961 626.948,299.845 627.941,282.933 631.329,283.049 					"/>
							<path id="XMLID_467_" fill="#647F40" d="M620.845,277.342c0.315-5.378,4.647-9.598,9.674-9.424
								c5.027,0.173,8.848,4.671,8.531,10.05c-0.315,5.378-4.647,9.597-9.675,9.424C624.349,287.219,620.53,282.721,620.845,277.342z"
								/>
							<path id="XMLID_466_" fill="#647F40" d="M630.187,298.153c-0.332-0.816-1.07-1.4-1.969-1.432
								c-1.142-0.038-2.135,0.82-2.385,1.983c-0.056-0.011-0.11-0.021-0.169-0.024c-0.745-0.025-1.386,0.6-1.433,1.395
								c-0.047,0.798,0.519,1.464,1.264,1.489c0.032,0.001,0.062-0.006,0.093-0.006c0.162,0.547,0.628,0.948,1.202,0.969
								c0.577,0.02,1.089-0.354,1.313-0.891c0.265-0.014,0.521-0.063,0.757-0.163c0.224,0.136,0.479,0.223,0.757,0.232
								c0.931,0.032,1.733-0.749,1.792-1.746C631.459,299.096,630.934,298.356,630.187,298.153z"/>
						</g>
						<g id="XMLID_185_">
							<polygon id="XMLID_188_" fill="#8E7049" points="698.27,338.266 694.881,338.15 695.875,321.237 699.262,321.353 					"/>
							<path id="XMLID_187_" fill="#647F40" d="M688.779,315.647c0.316-5.378,4.647-9.599,9.675-9.426
								c5.027,0.174,8.847,4.673,8.531,10.052c-0.316,5.378-4.647,9.597-9.675,9.424S688.464,321.025,688.779,315.647z"/>
							<path id="XMLID_186_" fill="#647F40" d="M698.122,336.457c-0.332-0.815-1.07-1.399-1.969-1.431
								c-1.143-0.039-2.135,0.82-2.385,1.982c-0.057-0.01-0.11-0.021-0.169-0.023c-0.745-0.025-1.387,0.6-1.434,1.395
								c-0.047,0.798,0.519,1.464,1.264,1.489c0.033,0.001,0.062-0.006,0.094-0.007c0.162,0.548,0.627,0.949,1.201,0.97
								c0.577,0.02,1.09-0.354,1.313-0.891c0.264-0.014,0.52-0.063,0.756-0.163c0.225,0.136,0.479,0.223,0.757,0.232
								c0.932,0.032,1.734-0.749,1.792-1.746C699.393,337.401,698.869,336.66,698.122,336.457z"/>
						</g>
						<g id="XMLID_195_">
							<polygon id="XMLID_198_" fill="#8E7049" points="577.593,336.099 574.205,335.982 575.197,319.07 578.586,319.186 					"/>
							<path id="XMLID_197_" fill="#647F40" d="M568.103,313.48c0.316-5.378,4.646-9.598,9.675-9.425
								c5.026,0.173,8.845,4.672,8.53,10.051c-0.316,5.378-4.647,9.597-9.673,9.424C571.605,323.357,567.788,318.858,568.103,313.48z"
								/>
							<path id="XMLID_196_" fill="#647F40" d="M577.444,334.29c-0.332-0.815-1.07-1.399-1.969-1.431
								c-1.142-0.039-2.135,0.82-2.384,1.982c-0.057-0.01-0.111-0.021-0.169-0.023c-0.745-0.025-1.387,0.599-1.434,1.395
								c-0.046,0.798,0.519,1.464,1.264,1.489c0.032,0.001,0.063-0.006,0.093-0.007c0.162,0.548,0.628,0.95,1.202,0.97
								c0.577,0.021,1.089-0.353,1.313-0.891c0.263-0.014,0.52-0.063,0.756-0.163c0.225,0.136,0.478,0.223,0.758,0.232
								c0.93,0.032,1.733-0.749,1.792-1.746C578.717,335.234,578.191,334.493,577.444,334.29z"/>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE5" d="M644.777,309.193l0.118-1.861l-9.495,4.243l-8.033-4.275
									c-0.017-0.023-0.034-0.036-0.053-0.036l-0.051-0.036c-0.054-0.001-0.098-0.014-0.133-0.038l-0.234-0.144l-0.025-0.036
									l-0.097,1.545l-18.926,8.771l5.679,3.031c0.158,0.074,0.314,0.16,0.47,0.256c0.088,0.048,0.166,0.097,0.235,0.145l0.631,0.294
									c0.069,0.049,0.147,0.098,0.234,0.147c0.018,0,0.035,0.012,0.051,0.034l0.289,0.146l0.289,0.148
									c0.018,0,0.036,0.011,0.052,0.034l0.523,0.293c0.086,0.049,0.183,0.098,0.287,0.146l0.104,0.073
									c0.036-0.001,0.071,0.014,0.106,0.036c1.41,0.753,2.823,1.509,4.238,2.266c2.877,1.533,5.756,3.068,8.635,4.604
									c0.072,0.024,0.143,0.063,0.211,0.11l0.654,0.365l0.002-0.037l1.122,0.621c0.072,0.024,0.151,0.063,0.238,0.11l2.118,1.133
									l20.578-9.23l7.91-3.57L644.777,309.193z M668.921,318.784l-35.169,15.8l-32.554-17.356l31.635-14.673l-0.663,4.067
									c-0.025,0.117-0.043,0.233-0.049,0.351c-0.041,0.633,0.268,1.19,0.922,1.671c0.674,0.46,1.497,0.697,2.47,0.72
									c0.974,0.018,1.815-0.189,2.528-0.621c0.732-0.453,1.118-0.995,1.158-1.629c0.003-0.024,0.004-0.059,0.007-0.105
									s0.006-0.093,0.01-0.14l-0.177-4.472L668.921,318.784z M638.697,294.581c-0.076,0.35-0.321,0.649-0.734,0.898
									c-0.452,0.297-0.983,0.439-1.596,0.427c-0.63-0.014-1.16-0.175-1.593-0.489c-0.414-0.29-0.608-0.646-0.581-1.067
									c0.003-0.047,0.016-0.092,0.038-0.14c0.057-0.352,0.282-0.65,0.678-0.901c0.468-0.271,1.018-0.402,1.648-0.39
									c0.612,0.013,1.125,0.163,1.54,0.454c0.43,0.313,0.633,0.669,0.609,1.067C638.702,294.486,638.7,294.534,638.697,294.581z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#3FA3C6" d="M633.258,342.383l30.855-13.879l-0.361,5.69l-30.826,13.847
									l-0.027-0.001L633.258,342.383z M626.773,308.554l-0.493,7.765l-10.845,5.061l-0.289-0.146
									c-0.016-0.022-0.033-0.034-0.051-0.034c-0.087-0.05-0.165-0.099-0.234-0.147l-0.631-0.294
									c-0.069-0.048-0.147-0.097-0.235-0.145c-0.156-0.096-0.313-0.182-0.47-0.256l-5.679-3.031L626.773,308.554z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#B9CBD9" d="M635.4,311.575l9.495-4.243l-0.118,1.861l-0.473,7.45
									l-0.331,5.232l-9.495,4.246L635.4,311.575z M633.258,342.383l0.494-7.8l35.169-15.8l-0.491,7.766l-3.217,1.449l-1.1,0.506
									L633.258,342.383z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#97AEC0" d="M633.258,342.383l-28.471-15.198l-0.969-0.513l-3.112-1.68
									l0.492-7.766l32.554,17.356L633.258,342.383z M635.4,311.575l-0.922,14.547l9.495-4.246l0.331-5.232l10.289,5.409
									l-20.578,9.23l-2.118-1.133c-0.087-0.048-0.166-0.086-0.238-0.11l-1.122-0.621l-0.002,0.037l-0.654-0.365
									c-0.068-0.048-0.139-0.086-0.211-0.11c-2.879-1.536-5.757-3.071-8.635-4.604c-1.415-0.757-2.828-1.513-4.238-2.266
									c-0.035-0.022-0.07-0.037-0.106-0.036L616.586,322c-0.104-0.048-0.201-0.097-0.287-0.146l-0.523-0.293
									c-0.017-0.023-0.034-0.034-0.052-0.034l-0.289-0.148l10.845-5.061l0.493-7.765l0.097-1.545l0.025,0.036l0.234,0.144
									c0.036,0.024,0.08,0.037,0.133,0.038l0.051,0.036c0.019,0,0.036,0.013,0.053,0.036L635.4,311.575z M639.04,302.396
									l0.177,4.472c-0.004,0.047-0.007,0.093-0.01,0.14s-0.004,0.081-0.007,0.105c-0.04,0.634-0.426,1.176-1.158,1.629
									c-0.713,0.432-1.555,0.639-2.528,0.621c-0.973-0.022-1.796-0.26-2.47-0.72c-0.654-0.48-0.963-1.038-0.922-1.671
									c0.006-0.117,0.023-0.233,0.049-0.351l0.663-4.067l1.359-8.205c-0.027,0.421,0.167,0.777,0.581,1.067
									c0.433,0.314,0.963,0.476,1.593,0.489c0.612,0.013,1.144-0.13,1.596-0.427c0.413-0.249,0.658-0.549,0.734-0.898
									L639.04,302.396z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#358AA8" d="M604.787,327.185l28.471,15.198l-0.359,5.657l-28.471-15.2
									L604.787,327.185z M654.593,322.052l-10.289-5.409l0.473-7.45l17.727,9.289L654.593,322.052z"/>
								<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="665.213,327.999 675.249,333.369 632.559,352.571 
									632.504,352.57 593.097,331.489 603.818,326.672 604.787,327.185 604.428,332.84 632.899,348.041 632.926,348.042 
									663.752,334.195 664.114,328.504 						"/>
							</g>
						</g>
						<g id="XMLID_190_">
							<polygon id="XMLID_193_" fill="#8E7049" points="642.279,373.073 638.893,372.957 639.886,356.044 643.272,356.162 					"/>
							<path id="XMLID_192_" fill="#647F40" d="M632.79,350.455c0.316-5.379,4.648-9.598,9.674-9.425
								c5.027,0.173,8.848,4.672,8.532,10.05c-0.316,5.379-4.647,9.598-9.676,9.425C636.294,360.332,632.474,355.833,632.79,350.455z"
								/>
							<path id="XMLID_191_" fill="#647F40" d="M642.132,371.264c-0.332-0.816-1.07-1.399-1.969-1.431
								c-1.144-0.039-2.136,0.82-2.384,1.983c-0.057-0.011-0.11-0.022-0.169-0.024c-0.745-0.026-1.388,0.6-1.434,1.395
								c-0.048,0.797,0.519,1.464,1.264,1.489c0.031,0.001,0.061-0.007,0.093-0.008c0.163,0.548,0.627,0.95,1.202,0.971
								c0.577,0.02,1.089-0.354,1.313-0.892c0.264-0.014,0.52-0.063,0.756-0.162c0.223,0.135,0.479,0.223,0.755,0.232
								c0.933,0.032,1.734-0.749,1.793-1.746C643.404,372.208,642.878,371.468,642.132,371.264z"/>
						</g>
						<g>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill-opacity="0.149" points="665.25,363.457 657.387,359.971 
								686.065,345.648 693.122,348.774 					"/>
							<g>
								<g>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M693.122,348.774l-7.057-3.126l0.081-3.323l7.226-3.771
										L693.122,348.774z M657.909,338.637l0.082-0.003l18.657-9.626l0.163-0.009l8.998-4.548l-0.264,10.765
										c-0.002,0.034-0.003,0.067-0.003,0.1L657.725,349.5l-0.083,0.004L657.909,338.637z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#CE8746" d="M657.731,349.425l7.784,3.34l4.705-2.41l-0.002,0.049
										l15.934-8.154l7.225-3.77l-7.825-3.339c-0.002,0.034-0.003,0.068-0.003,0.101L657.731,349.425z"/>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#9A7652" points="665.509,352.839 657.725,349.5 657.642,349.503 
										657.387,359.971 665.25,363.457 							"/>
								</g>
							</g>
						</g>
						<g>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill-opacity="0.149" points="585.742,348.796 593.249,346.133 
								622.767,361.07 614.401,364.038 					"/>
							<g>
								<g>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M585.855,339.045l7.43,3.917l-0.036,3.171l-7.507,2.663
										L585.855,339.045z M622.884,351.083l-0.085-0.008l-28.624-14.763c0-0.032,0-0.063,0.001-0.096l0.12-10.271l9.258,4.738
										l0.171,0.017l19.194,10.011l0.083,0.006L622.884,351.083z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#CE8746" d="M622.799,351.075l-8.28,2.834l-4.84-2.507l0,0.046
										l-16.393-8.485l-7.43-3.917l8.321-2.829c-0.001,0.032-0.001,0.063-0.001,0.096L622.799,351.075z"/>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#9A7652" points="614.519,353.909 622.799,351.075 622.884,351.083 
										622.767,361.07 614.401,364.038 							"/>
								</g>
							</g>
						</g>
					</g>
					<g>
						<polygon fill="#D6D6D7" points="651.865,402.742 648.27,400.422 648.27,377.703 651.865,380.021 				"/>
						<polygon fill="#BCBEC0" points="651.865,402.742 655.458,400.422 655.458,377.703 651.865,380.021 				"/>
						<polygon fill="#E6E7E8" points="648.27,377.703 651.865,375.384 655.458,377.703 651.865,380.021 				"/>
						<polygon fill="#939598" points="651.865,405.176 648.27,402.858 648.27,398.453 651.865,400.772 				"/>
						<polygon fill="#6D6E71" points="651.865,405.176 655.458,402.858 655.458,398.453 651.865,400.772 				"/>
						<g>
							<circle fill="#FFE14F" cx="651.788" cy="375.192" r="2.764"/>
							<path fill="#FFD200" d="M652.244,372.474c0.626,0.507,1.034,1.271,1.034,2.138c0,1.527-1.239,2.766-2.765,2.766
								c-0.158,0-0.308-0.022-0.457-0.048c0.475,0.386,1.073,0.626,1.731,0.626c1.527,0,2.764-1.237,2.764-2.764
								C654.551,373.822,653.552,372.692,652.244,372.474z"/>
						</g>
					</g>
					<g>
						<g>
							<g>
								<g>
									<ellipse fill="#78A22F" cx="702.848" cy="262.712" rx="1.914" ry="0.868"/>
									<path fill="#9B5F0E" d="M701.894,262.47c0,0.439,0.527,0.799,1.171,0.799h0.024c0.644,0,1.17-0.359,1.17-0.799v-22.753
										c0-0.439-0.526-0.798-1.17-0.798h-0.024c-0.644,0-1.171,0.358-1.171,0.798V262.47z"/>
									<path fill="#9B5F0E" d="M703.033,257.63c0.111,0.11,0.337,0.068,0.498-0.096l0.008-0.006c0.162-0.164,0.205-0.39,0.093-0.5
										l-5.786-5.76c-0.111-0.112-0.337-0.068-0.5,0.096l-0.004,0.006c-0.164,0.164-0.205,0.387-0.094,0.498L703.033,257.63z"/>
									<path fill="#9B5F0E" d="M702.957,254.79c-0.15,0.104-0.15,0.37,0.003,0.59l0.006,0.009c0.149,0.221,0.396,0.317,0.547,0.214
										l7.813-5.362c0.148-0.104,0.148-0.368-0.003-0.59l-0.006-0.009c-0.151-0.22-0.398-0.316-0.548-0.213L702.957,254.79z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="703.746" cy="237.959" r="9.734"/>
									<path fill="#009748" d="M699.514,229.203c-0.734,1.37-1.154,2.935-1.154,4.598c0,5.377,4.359,9.734,9.734,9.734
										c1.52,0,2.95-0.358,4.233-0.979c-1.643,3.057-4.869,5.138-8.582,5.138c-5.375,0-9.733-4.358-9.733-9.734
										C694.012,234.102,696.262,230.78,699.514,229.203z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="697.022" cy="250.45" r="3.97"/>
									<path fill="#009748" d="M695.294,246.878c-0.3,0.559-0.47,1.197-0.47,1.876c0,2.191,1.775,3.969,3.97,3.969
										c0.617,0,1.202-0.146,1.727-0.398c-0.671,1.245-1.987,2.095-3.5,2.095c-2.193,0-3.969-1.776-3.969-3.97
										C693.052,248.877,693.968,247.521,695.294,246.878z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="711.331" cy="250.443" r="4.513"/>
									<path fill="#009748" d="M709.371,246.383c-0.342,0.635-0.536,1.36-0.536,2.131c0,2.492,2.021,4.513,4.513,4.513
										c0.704,0,1.367-0.166,1.962-0.453c-0.762,1.417-2.258,2.381-3.978,2.381c-2.492,0-4.514-2.021-4.514-4.512
										C706.818,248.655,707.862,247.113,709.371,246.383z"/>
								</g>
							</g>
						</g>
						<g>
							<g>
								<g>
									<ellipse fill="#78A22F" cx="725.382" cy="277.134" rx="1.914" ry="0.868"/>
									<path fill="#9B5F0E" d="M724.427,276.892c0,0.439,0.528,0.799,1.172,0.799h0.023c0.644,0,1.17-0.359,1.17-0.799v-22.753
										c0-0.439-0.526-0.798-1.17-0.798h-0.023c-0.644,0-1.172,0.358-1.172,0.798V276.892z"/>
									<path fill="#9B5F0E" d="M725.566,272.052c0.112,0.11,0.338,0.068,0.499-0.096l0.007-0.006c0.163-0.164,0.206-0.39,0.094-0.5
										l-5.786-5.76c-0.112-0.112-0.338-0.068-0.5,0.096l-0.004,0.005c-0.165,0.165-0.205,0.388-0.095,0.499L725.566,272.052z"/>
									<path fill="#9B5F0E" d="M725.49,269.211c-0.149,0.104-0.149,0.37,0.004,0.59l0.005,0.009c0.15,0.221,0.396,0.317,0.548,0.214
										l7.813-5.362c0.149-0.104,0.149-0.368-0.002-0.59l-0.007-0.009c-0.15-0.22-0.398-0.316-0.547-0.213L725.49,269.211z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="726.28" cy="252.381" r="9.734"/>
									<path fill="#009748" d="M722.047,243.625c-0.733,1.37-1.153,2.935-1.153,4.598c0,5.376,4.359,9.734,9.734,9.734
										c1.52,0,2.949-0.358,4.232-0.979c-1.643,3.057-4.868,5.138-8.581,5.138c-5.375,0-9.733-4.358-9.733-9.734
										C716.546,248.524,718.796,245.202,722.047,243.625z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="719.556" cy="264.872" r="3.969"/>
									<path fill="#009748" d="M717.829,261.3c-0.3,0.559-0.471,1.197-0.471,1.875c0,2.192,1.776,3.97,3.97,3.97
										c0.618,0,1.203-0.146,1.728-0.398c-0.671,1.245-1.987,2.095-3.5,2.095c-2.194,0-3.969-1.776-3.969-3.97
										C715.586,263.299,716.501,261.943,717.829,261.3z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="733.865" cy="264.865" r="4.513"/>
									<path fill="#009748" d="M731.904,260.805c-0.341,0.635-0.535,1.36-0.535,2.131c0,2.492,2.021,4.513,4.513,4.513
										c0.704,0,1.367-0.166,1.962-0.453c-0.762,1.417-2.258,2.381-3.978,2.381c-2.493,0-4.514-2.021-4.514-4.512
										C729.352,263.077,730.396,261.535,731.904,260.805z"/>
								</g>
							</g>
						</g>
						<g>
							<g>
								<g>
									<ellipse fill="#78A22F" cx="747.916" cy="290.858" rx="1.914" ry="0.867"/>
									<path fill="#9B5F0E" d="M746.961,290.616c0,0.438,0.528,0.798,1.172,0.798h0.023c0.644,0,1.17-0.359,1.17-0.798v-22.753
										c0-0.439-0.526-0.798-1.17-0.798h-0.023c-0.644,0-1.172,0.358-1.172,0.798V290.616z"/>
									<path fill="#9B5F0E" d="M748.1,285.775c0.111,0.111,0.337,0.068,0.499-0.096l0.007-0.005c0.162-0.164,0.206-0.39,0.093-0.501
										l-5.786-5.759c-0.111-0.112-0.337-0.068-0.499,0.096l-0.005,0.005c-0.164,0.164-0.205,0.387-0.094,0.499L748.1,285.775z"/>
									<path fill="#9B5F0E" d="M748.024,282.934c-0.15,0.105-0.15,0.37,0.003,0.591l0.006,0.009c0.149,0.22,0.396,0.316,0.548,0.214
										l7.813-5.363c0.149-0.103,0.149-0.368-0.003-0.589l-0.006-0.009c-0.15-0.22-0.398-0.317-0.548-0.213L748.024,282.934z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="748.814" cy="266.104" r="9.734"/>
									<path fill="#009748" d="M744.582,257.348c-0.734,1.37-1.154,2.935-1.154,4.598c0,5.376,4.359,9.734,9.734,9.734
										c1.52,0,2.95-0.358,4.233-0.979c-1.643,3.056-4.868,5.137-8.581,5.137c-5.376,0-9.733-4.358-9.733-9.734
										C739.081,262.248,741.33,258.925,744.582,257.348z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="742.089" cy="278.595" r="3.97"/>
									<path fill="#009748" d="M740.363,275.024c-0.301,0.559-0.471,1.197-0.471,1.875c0,2.192,1.775,3.97,3.97,3.97
										c0.617,0,1.202-0.146,1.727-0.398c-0.671,1.245-1.986,2.095-3.5,2.095c-2.193,0-3.969-1.777-3.969-3.97
										C738.12,277.022,739.036,275.667,740.363,275.024z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="756.398" cy="278.587" r="4.512"/>
									<path fill="#009748" d="M754.438,274.529c-0.342,0.635-0.536,1.36-0.536,2.131c0,2.492,2.021,4.513,4.513,4.513
										c0.705,0,1.368-0.166,1.962-0.454c-0.761,1.418-2.257,2.381-3.978,2.381c-2.492,0-4.513-2.021-4.513-4.512
										C751.886,276.799,752.929,275.258,754.438,274.529z"/>
								</g>
							</g>
						</g>
						<g>
							<g>
								<g>
									<ellipse fill="#78A22F" cx="770.45" cy="304.458" rx="1.914" ry="0.868"/>
									<path fill="#9B5F0E" d="M769.496,304.215c0,0.439,0.527,0.799,1.171,0.799h0.024c0.644,0,1.169-0.359,1.169-0.799v-22.753
										c0-0.439-0.525-0.798-1.169-0.798h-0.024c-0.644,0-1.171,0.358-1.171,0.798V304.215z"/>
									<path fill="#9B5F0E" d="M770.634,299.375c0.111,0.11,0.337,0.068,0.498-0.096l0.008-0.006c0.162-0.164,0.205-0.39,0.093-0.5
										l-5.786-5.76c-0.111-0.112-0.337-0.068-0.5,0.096l-0.004,0.005c-0.164,0.165-0.205,0.388-0.094,0.499L770.634,299.375z"/>
									<path fill="#9B5F0E" d="M770.557,296.535c-0.149,0.104-0.149,0.37,0.004,0.59l0.005,0.009
										c0.15,0.221,0.397,0.317,0.548,0.214l7.813-5.362c0.148-0.104,0.148-0.368-0.003-0.59l-0.006-0.009
										c-0.151-0.22-0.398-0.316-0.548-0.213L770.557,296.535z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="771.348" cy="279.705" r="9.734"/>
									<path fill="#009748" d="M767.115,270.948c-0.733,1.37-1.153,2.935-1.153,4.598c0,5.376,4.359,9.734,9.734,9.734
										c1.52,0,2.95-0.358,4.233-0.979c-1.643,3.057-4.869,5.138-8.582,5.138c-5.375,0-9.733-4.358-9.733-9.734
										C761.614,275.847,763.864,272.525,767.115,270.948z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="764.624" cy="292.195" r="3.97"/>
									<path fill="#009748" d="M762.896,288.624c-0.3,0.559-0.47,1.197-0.47,1.876c0,2.191,1.775,3.969,3.969,3.969
										c0.618,0,1.203-0.146,1.728-0.398c-0.671,1.245-1.987,2.095-3.5,2.095c-2.194,0-3.969-1.776-3.969-3.97
										C760.654,290.623,761.57,289.266,762.896,288.624z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="778.932" cy="292.188" r="4.513"/>
									<path fill="#009748" d="M776.972,288.128c-0.342,0.635-0.536,1.36-0.536,2.131c0,2.492,2.021,4.513,4.513,4.513
										c0.704,0,1.367-0.166,1.962-0.453c-0.762,1.417-2.258,2.381-3.978,2.381c-2.493,0-4.514-2.021-4.514-4.512
										C774.419,290.4,775.463,288.858,776.972,288.128z"/>
								</g>
							</g>
						</g>
						<g>
							<g>
								<g>
									<ellipse fill="#78A22F" cx="792.983" cy="318.956" rx="1.914" ry="0.868"/>
									<path fill="#9B5F0E" d="M792.029,318.713c0,0.439,0.528,0.799,1.172,0.799h0.023c0.644,0,1.17-0.359,1.17-0.799V295.96
										c0-0.439-0.526-0.798-1.17-0.798h-0.023c-0.644,0-1.172,0.358-1.172,0.798V318.713z"/>
									<path fill="#9B5F0E" d="M793.167,313.874c0.112,0.11,0.338,0.068,0.499-0.096l0.007-0.006c0.162-0.164,0.206-0.39,0.094-0.5
										l-5.786-5.76c-0.112-0.112-0.338-0.068-0.5,0.096l-0.005,0.006c-0.164,0.164-0.204,0.387-0.094,0.498L793.167,313.874z"/>
									<path fill="#9B5F0E" d="M793.091,311.033c-0.15,0.104-0.15,0.37,0.004,0.59l0.005,0.009c0.15,0.221,0.396,0.317,0.548,0.214
										l7.813-5.362c0.149-0.104,0.149-0.368-0.002-0.59l-0.007-0.009c-0.15-0.22-0.398-0.316-0.547-0.213L793.091,311.033z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="793.882" cy="294.203" r="9.734"/>
									<path fill="#009748" d="M789.649,285.446c-0.733,1.37-1.153,2.935-1.153,4.598c0,5.376,4.358,9.734,9.734,9.734
										c1.519,0,2.949-0.358,4.232-0.979c-1.643,3.057-4.868,5.138-8.581,5.138c-5.375,0-9.733-4.358-9.733-9.734
										C784.148,290.345,786.397,287.023,789.649,285.446z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="787.157" cy="306.693" r="3.969"/>
									<path fill="#009748" d="M785.43,303.122c-0.3,0.559-0.471,1.197-0.471,1.876c0,2.191,1.776,3.969,3.97,3.969
										c0.618,0,1.202-0.146,1.727-0.398c-0.67,1.245-1.986,2.095-3.5,2.095c-2.193,0-3.968-1.776-3.968-3.97
										C783.188,305.121,784.103,303.764,785.43,303.122z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="801.466" cy="306.686" r="4.513"/>
									<path fill="#009748" d="M799.505,302.626c-0.341,0.635-0.535,1.36-0.535,2.131c0,2.492,2.021,4.513,4.512,4.513
										c0.705,0,1.368-0.166,1.963-0.453c-0.762,1.417-2.258,2.381-3.978,2.381c-2.493,0-4.514-2.021-4.514-4.512
										C796.954,304.898,797.998,303.356,799.505,302.626z"/>
								</g>
							</g>
						</g>
						<g>
							<g>
								<g>
									<ellipse fill="#78A22F" cx="815.518" cy="331.367" rx="1.914" ry="0.867"/>
									<path fill="#9B5F0E" d="M814.563,331.125c0,0.439,0.528,0.799,1.171,0.799h0.024c0.644,0,1.17-0.359,1.17-0.799v-22.753
										c0-0.439-0.526-0.798-1.17-0.798h-0.024c-0.643,0-1.171,0.358-1.171,0.798V331.125z"/>
									<path fill="#9B5F0E" d="M815.702,326.284c0.111,0.111,0.337,0.068,0.499-0.096l0.007-0.005
										c0.162-0.164,0.206-0.39,0.093-0.501l-5.786-5.759c-0.111-0.112-0.337-0.068-0.499,0.096l-0.005,0.005
										c-0.164,0.164-0.205,0.387-0.094,0.499L815.702,326.284z"/>
									<path fill="#9B5F0E" d="M815.625,323.444c-0.15,0.104-0.15,0.37,0.003,0.59l0.006,0.009c0.149,0.22,0.396,0.316,0.547,0.214
										l7.813-5.362c0.149-0.104,0.149-0.369-0.003-0.59l-0.006-0.009c-0.151-0.22-0.398-0.316-0.548-0.213L815.625,323.444z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="816.415" cy="306.613" r="9.734"/>
									<path fill="#009748" d="M812.183,297.857c-0.734,1.37-1.154,2.935-1.154,4.598c0,5.376,4.359,9.734,9.734,9.734
										c1.52,0,2.95-0.358,4.233-0.979c-1.643,3.056-4.868,5.137-8.581,5.137c-5.376,0-9.734-4.357-9.734-9.734
										C806.681,302.756,808.931,299.434,812.183,297.857z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="809.691" cy="319.104" r="3.97"/>
									<path fill="#009748" d="M807.964,315.533c-0.301,0.559-0.471,1.197-0.471,1.875c0,2.192,1.775,3.97,3.97,3.97
										c0.617,0,1.202-0.146,1.727-0.398c-0.671,1.245-1.987,2.095-3.5,2.095c-2.193,0-3.969-1.777-3.969-3.97
										C805.721,317.532,806.637,316.175,807.964,315.533z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="824" cy="319.097" r="4.512"/>
									<path fill="#009748" d="M822.04,315.038c-0.342,0.635-0.536,1.36-0.536,2.131c0,2.492,2.021,4.513,4.513,4.513
										c0.705,0,1.367-0.166,1.962-0.454c-0.761,1.418-2.258,2.382-3.978,2.382c-2.492,0-4.513-2.021-4.513-4.512
										C819.488,317.308,820.531,315.767,822.04,315.038z"/>
								</g>
							</g>
						</g>
						<g>
							<g>
								<g>
									<ellipse fill="#78A22F" cx="838.051" cy="344.722" rx="1.914" ry="0.868"/>
									<path fill="#9B5F0E" d="M837.097,344.48c0,0.439,0.527,0.799,1.171,0.799h0.024c0.643,0,1.169-0.359,1.169-0.799v-22.753
										c0-0.439-0.526-0.798-1.169-0.798h-0.024c-0.644,0-1.171,0.358-1.171,0.798V344.48z"/>
									<path fill="#9B5F0E" d="M838.236,339.64c0.111,0.111,0.337,0.068,0.498-0.096l0.008-0.006c0.162-0.164,0.205-0.39,0.093-0.5
										l-5.786-5.76c-0.112-0.111-0.337-0.068-0.5,0.096l-0.004,0.006c-0.164,0.164-0.205,0.387-0.095,0.498L838.236,339.64z"/>
									<path fill="#9B5F0E" d="M838.159,336.799c-0.149,0.104-0.149,0.37,0.004,0.59l0.005,0.009
										c0.15,0.221,0.397,0.317,0.548,0.214l7.813-5.362c0.148-0.103,0.148-0.368-0.003-0.589l-0.006-0.009
										c-0.151-0.221-0.399-0.317-0.548-0.214L838.159,336.799z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="838.949" cy="319.969" r="9.734"/>
									<path fill="#009748" d="M834.716,311.212c-0.733,1.37-1.153,2.936-1.153,4.599c0,5.376,4.359,9.733,9.734,9.733
										c1.52,0,2.95-0.358,4.233-0.979c-1.643,3.057-4.869,5.138-8.582,5.138c-5.375,0-9.733-4.358-9.733-9.734
										C829.215,316.113,831.465,312.79,834.716,311.212z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="832.225" cy="332.459" r="3.969"/>
									<path fill="#009748" d="M830.498,328.889c-0.3,0.558-0.47,1.196-0.47,1.875c0,2.191,1.775,3.97,3.969,3.97
										c0.618,0,1.203-0.146,1.728-0.398c-0.671,1.244-1.987,2.094-3.5,2.094c-2.194,0-3.969-1.776-3.969-3.97
										C828.255,330.887,829.171,329.531,830.498,328.889z"/>
								</g>
								<g>
									<circle fill="#00B148" cx="846.534" cy="332.453" r="4.513"/>
									<path fill="#009748" d="M844.574,328.394c-0.342,0.634-0.536,1.36-0.536,2.13c0,2.492,2.021,4.513,4.513,4.513
										c0.704,0,1.367-0.166,1.962-0.453c-0.762,1.417-2.258,2.381-3.978,2.381c-2.493,0-4.514-2.021-4.514-4.512
										C842.021,330.665,843.065,329.123,844.574,328.394z"/>
								</g>
							</g>
						</g>
					</g>
					<g id="XMLID_807_">
						<g id="XMLID_898_">
							<polygon id="XMLID_964_" fill="#ABCACE" points="803.229,205.25 783.881,216.46 803.229,227.617 822.576,216.46 					"/>
							<polygon id="XMLID_963_" fill="#D7F9F6" points="803.229,167.109 783.881,178.32 803.229,189.477 822.576,178.32 					"/>
							<polygon id="XMLID_962_" fill="#C3DDDC" points="803.229,227.617 783.881,216.46 783.881,178.32 803.229,189.477 					"/>
							<g id="XMLID_940_">
								<g id="XMLID_955_">
									<polygon id="XMLID_959_" fill="#666666" points="791.912,193.655 788.58,191.734 788.58,185.167 791.912,187.088 							"/>
									<polygon id="XMLID_956_" fill="#666666" points="798.53,197.251 795.2,195.33 795.2,188.763 798.53,190.684 							"/>
								</g>
								<g id="XMLID_948_">
									<polygon id="XMLID_952_" fill="#666666" points="791.912,201.494 788.58,199.574 788.58,193.007 791.912,194.928 							"/>
									<polygon id="XMLID_949_" fill="#666666" points="798.53,205.09 795.2,203.169 795.2,196.603 798.53,198.523 							"/>
								</g>
								<g id="XMLID_941_">
									<polygon id="XMLID_945_" fill="#666666" points="791.912,209.333 788.58,207.413 788.58,200.846 791.912,202.768 							"/>
									<polygon id="XMLID_942_" fill="#666666" points="798.53,212.93 795.2,211.009 795.2,204.442 798.53,206.363 							"/>
								</g>
							</g>
							<polygon id="XMLID_939_" fill="#A2BCBA" points="803.229,227.513 822.576,216.356 822.576,178.217 803.229,189.374 					"/>
							<g id="XMLID_910_">
								<g id="XMLID_932_">
									<polygon id="XMLID_936_" fill="#444444" points="811.257,212.179 807.927,214.1 807.927,220.667 811.257,218.745 							"/>
									<polygon id="XMLID_933_" fill="#444444" points="817.877,208.583 814.546,210.504 814.546,217.07 817.877,215.149 							"/>
								</g>
								<g id="XMLID_925_">
									<polygon id="XMLID_929_" fill="#444444" points="811.257,204.339 807.927,206.26 807.927,212.827 811.257,210.906 							"/>
									<polygon id="XMLID_926_" fill="#444444" points="817.877,200.743 814.546,202.664 814.546,209.23 817.877,207.31 							"/>
								</g>
								<g id="XMLID_918_">
									<polygon id="XMLID_922_" fill="#444444" points="811.257,196.5 807.927,198.42 807.927,204.987 811.257,203.066 							"/>
									<polygon id="XMLID_919_" fill="#444444" points="817.877,192.904 814.546,194.824 814.546,201.391 817.877,199.47 							"/>
								</g>
								<g id="XMLID_911_">
									<polygon id="XMLID_915_" fill="#444444" points="811.257,188.66 807.927,190.581 807.927,197.147 811.257,195.227 							"/>
									<polygon id="XMLID_912_" fill="#444444" points="817.877,185.064 814.546,186.985 814.546,193.551 817.877,191.63 							"/>
								</g>
							</g>
							<g id="XMLID_903_">
								<polygon id="XMLID_907_" fill="#666666" points="797.643,223.46 793.555,221.103 793.555,213.045 797.643,215.401 						"/>
								<polygon id="XMLID_904_" fill="#666666" points="793.555,221.096 789.467,218.74 789.467,210.68 793.555,213.037 						"/>
							</g>
							<g id="XMLID_899_">
								<polygon id="XMLID_902_" fill="#A8A8A8" points="799.073,215.713 797.635,216.541 788.038,210.807 789.435,210.09 						"/>
								<polygon id="XMLID_901_" fill="#8E8E8E" points="788.038,210.807 788.038,211.343 797.635,217.07 797.635,216.541 						"/>
								<polygon id="XMLID_900_" fill="#666666" points="797.635,217.07 799.073,216.221 799.073,215.713 797.635,216.541 						"/>
							</g>
						</g>
						<g id="XMLID_809_">
							<polygon id="XMLID_897_" fill="#ABCACE" points="769.312,215.934 743.311,231 769.312,245.994 795.311,231 					"/>
							<polygon id="XMLID_896_" fill="#D7F9F6" points="769.312,164.677 743.311,179.743 769.312,194.735 795.311,179.743 					"/>
							<polygon id="XMLID_895_" fill="#C3DDDC" points="769.312,245.994 743.311,231 743.311,179.743 769.312,194.735 					"/>
							<g id="XMLID_873_">
								<g id="XMLID_888_">
									<polygon id="XMLID_892_" fill="#5BAAA4" points="754.102,200.351 749.625,197.77 749.625,188.944 754.102,191.526 							"/>
									<polygon id="XMLID_889_" fill="#5BAAA4" points="762.999,205.184 758.521,202.603 758.521,193.777 762.999,196.359 							
										"/>
								</g>
								<g id="XMLID_881_">
									<polygon id="XMLID_885_" fill="#5BAAA4" points="754.102,210.887 749.625,208.306 749.625,199.48 754.102,202.062 							"/>
									<polygon id="XMLID_882_" fill="#5BAAA4" points="762.999,215.72 758.521,213.139 758.521,204.313 762.999,206.895 							"/>
								</g>
								<g id="XMLID_874_">
									<polygon id="XMLID_878_" fill="#5BAAA4" points="754.102,221.423 749.625,218.841 749.625,210.016 754.102,212.597 							
										"/>
									<polygon id="XMLID_875_" fill="#5BAAA4" points="762.999,226.255 758.521,223.674 758.521,214.85 762.999,217.43 							"/>
								</g>
							</g>
							<polygon id="XMLID_872_" fill="#A2BCBA" points="769.312,245.854 795.311,230.862 795.311,179.604 769.312,194.597 					"/>
							<g id="XMLID_833_">
								<g>
									<g id="XMLID_1518_">
										<g id="XMLID_1520_">
											<polygon fill="#3D7F79" points="780.102,214.709 775.625,217.291 775.625,226.117 780.102,223.535 									"/>
										</g>
										<g id="XMLID_1519_">
											<polygon fill="#3D7F79" points="788.998,209.877 784.522,212.458 784.522,221.285 788.998,218.703 									"/>
										</g>
									</g>
									<g id="XMLID_1515_">
										<g id="XMLID_1517_">
											<polygon fill="#3D7F79" points="780.102,204.174 775.625,206.756 775.625,215.581 780.102,212.999 									"/>
										</g>
										<g id="XMLID_1516_">
											<polygon fill="#3D7F79" points="788.998,199.342 784.522,201.923 784.522,210.748 788.998,208.167 									"/>
										</g>
									</g>
									<g id="XMLID_1512_">
										<g id="XMLID_1514_">
											<polygon fill="#3D7F79" points="780.102,193.639 775.625,196.22 775.625,205.045 780.102,202.463 									"/>
										</g>
										<g id="XMLID_1513_">
											<polygon fill="#3D7F79" points="788.998,188.806 784.522,191.387 784.522,200.212 788.998,197.631 									"/>
										</g>
									</g>
								</g>
							</g>
							<g id="XMLID_826_">
								<polygon id="XMLID_830_" fill="#666666" points="761.805,240.409 756.312,237.24 756.312,226.41 761.805,229.576 						"/>
								<polygon id="XMLID_827_" fill="#666666" points="756.312,237.231 750.818,234.064 750.818,223.231 756.312,226.4 						"/>
							</g>
							<g id="XMLID_822_">
								<polygon id="XMLID_825_" fill="#A8A8A8" points="763.727,229.998 761.794,231.109 748.896,223.402 750.775,222.44 						"/>
								<polygon id="XMLID_824_" fill="#8E8E8E" points="748.896,223.402 748.896,224.123 761.794,231.821 761.794,231.109 						"/>
								<polygon id="XMLID_823_" fill="#666666" points="761.794,231.821 763.727,230.678 763.727,229.998 761.794,231.109 						"/>
							</g>
							<g id="XMLID_815_">
								<polygon id="XMLID_819_" fill="#666666" points="778.449,239.367 783.944,236.2 783.944,225.368 778.449,228.537 						"/>
								<polygon id="XMLID_816_" fill="#666666" points="783.944,236.191 789.438,233.022 789.438,222.191 783.944,225.359 						"/>
							</g>
							<g id="XMLID_811_">
								<polygon id="XMLID_814_" fill="#A8A8A8" points="776.528,228.957 778.46,230.068 791.359,222.362 789.481,221.399 						"/>
								<polygon id="XMLID_813_" fill="#8E8E8E" points="791.359,222.362 791.359,223.082 778.46,230.779 778.46,230.068 						"/>
								<polygon id="XMLID_812_" fill="#666666" points="778.46,230.779 776.528,229.638 776.528,228.957 778.46,230.068 						"/>
							</g>
						</g>
						<polygon id="XMLID_808_" fill="#C1C1C1" points="803.229,227.513 816.211,220.026 803.229,212.179 803.229,206.289 
							795.2,185.064 795.2,222.986 				"/>
					</g>
					<g>
						<g id="XMLID_620_">
							<rect id="XMLID_623_" x="873.957" y="253.087" fill="#8E7049" width="3.508" height="16.367"/>
							<circle id="XMLID_622_" fill="#647F40" cx="875.71" cy="247.923" r="9.424"/>
							<path id="XMLID_621_" fill="#647F40" d="M877.201,267.712c-0.393-0.777-1.189-1.316-2.12-1.316
								c-1.183,0-2.156,0.863-2.344,1.994c-0.059-0.008-0.116-0.02-0.176-0.02c-0.771,0-1.396,0.625-1.396,1.396
								s0.625,1.396,1.396,1.396c0.032,0,0.063-0.008,0.096-0.01c0.201,0.523,0.705,0.896,1.3,0.896c0.598,0,1.104-0.377,1.303-0.904
								c0.272-0.021,0.533-0.078,0.772-0.182c0.239,0.123,0.507,0.199,0.795,0.199c0.965,0,1.747-0.781,1.747-1.746
								C878.574,268.582,877.986,267.884,877.201,267.712z"/>
						</g>
						<g id="XMLID_626_">
							<rect id="XMLID_629_" x="835.722" y="226.736" fill="#8E7049" width="3.508" height="16.365"/>
							<circle id="XMLID_628_" fill="#647F40" cx="837.476" cy="221.57" r="9.424"/>
							<path id="XMLID_627_" fill="#647F40" d="M838.967,241.361c-0.393-0.777-1.19-1.316-2.121-1.316
								c-1.183,0-2.156,0.863-2.344,1.992c-0.059-0.008-0.115-0.018-0.176-0.018c-0.771,0-1.396,0.625-1.396,1.396
								s0.625,1.396,1.396,1.396c0.033,0,0.063-0.008,0.096-0.01c0.201,0.523,0.706,0.896,1.3,0.896c0.598,0,1.104-0.377,1.303-0.906
								c0.272-0.02,0.533-0.076,0.772-0.182c0.239,0.125,0.508,0.201,0.796,0.201c0.964,0,1.746-0.783,1.746-1.748
								C840.339,242.23,839.751,241.533,838.967,241.361z"/>
						</g>
						<g>
							<g id="XMLID_796_">
								<g>
									<g id="XMLID_213_">
										<ellipse fill="#444444" cx="836.196" cy="266.535" rx="35.609" ry="20.357"/>
									</g>
									<rect id="XMLID_212_" x="800.587" y="261.804" fill="#444444" width="71.218" height="4.73"/>
								</g>
							</g>
							<ellipse id="XMLID_793_" fill="#8E7049" cx="836.196" cy="261.804" rx="35.609" ry="20.357"/>
							<ellipse id="XMLID_790_" fill="#59BAC6" cx="836.196" cy="261.804" rx="30.09" ry="17.203"/>
						</g>
						<g id="XMLID_784_">
							<rect id="XMLID_787_" x="836.564" y="282.285" fill="#8E7049" width="3.507" height="16.367"/>
							<circle id="XMLID_786_" fill="#647F40" cx="838.317" cy="277.121" r="9.424"/>
							<path id="XMLID_785_" fill="#647F40" d="M839.808,296.91c-0.393-0.777-1.19-1.316-2.121-1.316
								c-1.183,0-2.156,0.863-2.344,1.994c-0.059-0.008-0.115-0.018-0.176-0.018c-0.771,0-1.396,0.625-1.396,1.395
								c0,0.771,0.625,1.396,1.396,1.396c0.033,0,0.063-0.008,0.096-0.01c0.201,0.523,0.706,0.896,1.301,0.896
								c0.598,0,1.104-0.377,1.303-0.904c0.271-0.021,0.533-0.078,0.771-0.182c0.239,0.123,0.508,0.199,0.796,0.199
								c0.964,0,1.746-0.781,1.746-1.746C841.18,297.779,840.592,297.082,839.808,296.91z"/>
						</g>
						<g id="XMLID_614_">
							<rect id="XMLID_617_" x="794.934" y="255.837" fill="#8E7049" width="3.508" height="16.367"/>
							<circle id="XMLID_616_" fill="#647F40" cx="796.688" cy="250.673" r="9.424"/>
							<path id="XMLID_615_" fill="#647F40" d="M798.179,270.462c-0.393-0.777-1.19-1.316-2.121-1.316
								c-1.183,0-2.156,0.863-2.344,1.994c-0.059-0.008-0.115-0.02-0.176-0.02c-0.771,0-1.396,0.625-1.396,1.396
								s0.625,1.396,1.396,1.396c0.032,0,0.063-0.008,0.096-0.01c0.201,0.523,0.705,0.896,1.3,0.896c0.598,0,1.104-0.377,1.303-0.904
								c0.272-0.021,0.533-0.078,0.772-0.182c0.239,0.123,0.507,0.199,0.795,0.199c0.965,0,1.747-0.781,1.747-1.746
								C799.551,271.332,798.963,270.634,798.179,270.462z"/>
						</g>
					</g>
					<g id="XMLID_632_">
						<polygon id="XMLID_698_" fill="#ABCACE" points="894.592,294.637 866.287,311.04 894.592,327.362 922.897,311.04 				"/>
						<polygon id="XMLID_697_" fill="#EDEDED" points="894.592,238.836 866.287,255.239 894.592,271.561 922.897,255.239 				"/>
						<polygon id="XMLID_696_" fill="#C8CCCC" points="894.592,327.362 866.287,311.04 866.287,255.239 894.592,271.561 				"/>
						<g id="XMLID_674_">
							<g id="XMLID_689_">
								<polygon id="XMLID_693_" fill="#666666" points="878.034,277.674 873.161,274.864 873.161,265.256 878.034,268.067 						"/>
								<polygon id="XMLID_690_" fill="#666666" points="887.718,282.934 882.845,280.124 882.845,270.516 887.718,273.327 						"/>
							</g>
							<g id="XMLID_682_">
								<polygon id="XMLID_686_" fill="#666666" points="878.034,289.143 873.161,286.333 873.161,276.725 878.034,279.536 						"/>
								<polygon id="XMLID_683_" fill="#666666" points="887.718,294.405 882.845,291.594 882.845,281.987 887.718,284.797 						"/>
							</g>
							<g id="XMLID_675_">
								<polygon id="XMLID_679_" fill="#666666" points="878.034,300.614 873.161,297.803 873.161,288.196 878.034,291.006 						"/>
								<polygon id="XMLID_676_" fill="#666666" points="887.718,305.874 882.845,303.063 882.845,293.456 887.718,296.266 						"/>
							</g>
						</g>
						<polygon id="XMLID_673_" fill="#C1C1C1" points="894.592,327.209 922.897,310.889 922.897,255.088 894.592,271.411 				"/>
						<g id="XMLID_644_">
							<g id="XMLID_666_">
								<polygon id="XMLID_670_" fill="#444444" points="906.339,304.776 901.465,307.584 901.465,317.192 906.339,314.383 						"/>
								<polygon id="XMLID_667_" fill="#444444" points="916.024,299.514 911.15,302.325 911.15,311.932 916.024,309.122 						"/>
							</g>
							<g id="XMLID_659_">
								<polygon id="XMLID_663_" fill="#444444" points="906.339,293.305 901.465,296.116 901.465,305.723 906.339,302.913 						"/>
								<polygon id="XMLID_660_" fill="#444444" points="916.024,288.045 911.15,290.854 911.15,300.461 916.024,297.653 						"/>
							</g>
							<g id="XMLID_652_">
								<polygon id="XMLID_656_" fill="#444444" points="906.339,281.836 901.465,284.645 901.465,294.252 906.339,291.444 						"/>
								<polygon id="XMLID_653_" fill="#444444" points="916.024,276.575 911.15,279.385 911.15,288.993 916.024,286.182 						"/>
							</g>
							<g id="XMLID_645_">
								<polygon id="XMLID_649_" fill="#444444" points="906.339,270.366 901.465,273.176 901.465,282.784 906.339,279.973 						"/>
								<polygon id="XMLID_646_" fill="#444444" points="916.024,265.106 911.15,267.915 911.15,277.522 916.024,274.713 						"/>
							</g>
						</g>
						<g id="XMLID_637_">
							<polygon id="XMLID_641_" fill="#666666" points="886.42,321.282 880.44,317.833 880.44,306.042 886.42,309.491 					"/>
							<polygon id="XMLID_638_" fill="#666666" points="880.44,317.823 874.458,314.374 874.458,302.583 880.44,306.032 					"/>
						</g>
						<g id="XMLID_633_">
							<polygon id="XMLID_636_" fill="#A8A8A8" points="888.512,309.948 886.409,311.159 872.367,302.768 874.412,301.719 					"/>
							<polygon id="XMLID_635_" fill="#8E8E8E" points="872.367,302.768 872.367,303.553 886.409,311.932 886.409,311.159 					"/>
							<polygon id="XMLID_634_" fill="#666666" points="886.409,311.932 888.512,310.69 888.512,309.948 886.409,311.159 					"/>
						</g>
					</g>
					<g>
						<g>
							<polygon fill="#8E5E25" points="704.027,400.417 712.44,405.19 712.44,396.503 704.027,391.732 					"/>
							<polygon fill="#8E5E25" points="680.102,413.902 688.513,418.673 688.513,409.987 680.102,405.216 					"/>
							<polygon fill="#BC8B62" points="712.44,396.515 712.44,396.503 714.283,395.451 714.283,404.135 712.44,405.19 712.44,397.105 
								690.357,409.511 690.357,417.62 688.513,418.673 688.513,409.987 					"/>
						</g>
						<g>
							<polygon fill="#B76A16" points="678.113,404.321 687.998,409.926 716.036,394.453 706.151,388.845 					"/>
							<polygon fill="#9C5708" points="687.998,410.928 687.998,409.926 716.036,394.453 716.036,395.453 					"/>
							<polygon fill="#663700" points="678.113,405.32 687.998,410.928 687.998,409.926 678.113,404.321 					"/>
						</g>
					</g>
					<g>
						<g>
							<polygon fill="#D6D6D7" points="456.296,269.546 425.57,251.784 425.57,250.936 456.296,268.697 					"/>
							<polygon fill="#BCBEC0" points="456.296,269.546 457.096,269.186 457.096,268.337 456.296,268.697 					"/>
							<polygon fill="#E6E7E8" points="456.296,268.697 457.096,268.337 426.122,250.717 425.57,250.936 					"/>
						</g>
						<g>
							<polygon fill="#D6D6D7" points="456.296,264.708 425.57,246.947 425.57,246.098 456.296,263.859 					"/>
							<polygon fill="#BCBEC0" points="456.296,264.708 457.096,264.348 457.096,263.5 456.296,263.859 					"/>
							<polygon fill="#E6E7E8" points="456.296,263.859 457.096,263.5 426.122,245.879 425.57,246.098 					"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M430.121,242.887l-0.111-0.063c-0.627-0.357-1.525-0.06-1.525,0.663v12.468l2.391,1.361h0.385V244.85
								C431.261,244.127,430.748,243.246,430.121,242.887z"/>
							<path fill="#E6E7E8" d="M429.736,242.887l-0.111-0.063c-0.628-0.357-1.141-0.06-1.141,0.663v12.468l2.391,1.361V244.85
								C430.875,244.127,430.363,243.246,429.736,242.887z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M435.851,246.36l-0.112-0.063c-0.628-0.357-1.525-0.059-1.525,0.664v12.466l2.391,1.363h0.386v-12.469
								C436.99,247.599,436.476,246.717,435.851,246.36z"/>
							<path fill="#E6E7E8" d="M435.465,246.36l-0.111-0.063c-0.627-0.357-1.14-0.059-1.14,0.664v12.466l2.391,1.363v-12.469
								C436.604,247.599,436.091,246.717,435.465,246.36z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M441.578,249.484l-0.111-0.062c-0.628-0.358-1.525-0.061-1.525,0.661v12.468l2.392,1.361h0.385v-12.467
								C442.718,250.723,442.206,249.841,441.578,249.484z"/>
							<path fill="#E6E7E8" d="M441.192,249.484l-0.111-0.062c-0.626-0.358-1.14-0.061-1.14,0.661v12.468l2.392,1.361v-12.467
								C442.333,250.723,441.82,249.841,441.192,249.484z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M447.306,252.724l-0.11-0.063c-0.627-0.357-1.525-0.06-1.525,0.663v12.467l2.392,1.362h0.385v-12.469
								C448.446,253.964,447.933,253.082,447.306,252.724z"/>
							<path fill="#E6E7E8" d="M446.922,252.724l-0.111-0.063c-0.628-0.357-1.141-0.06-1.141,0.663v12.467l2.392,1.362v-12.469
								C448.062,253.964,447.548,253.082,446.922,252.724z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M453.035,256.081l-0.112-0.063c-0.628-0.357-1.524-0.06-1.524,0.663v12.468l2.389,1.362h0.387v-12.468
								C454.174,257.321,453.662,256.439,453.035,256.081z"/>
							<path fill="#E6E7E8" d="M452.649,256.081l-0.112-0.063c-0.628-0.357-1.139-0.06-1.139,0.663v12.468l2.389,1.362v-12.468
								C453.788,257.321,453.275,256.439,452.649,256.081z"/>
						</g>
					</g>
					<g>
						<g>
							<polygon fill="#D6D6D7" points="487.412,287.731 456.686,269.968 456.686,269.121 487.412,286.881 					"/>
							<polygon fill="#BCBEC0" points="487.412,287.731 488.212,287.371 488.212,286.521 487.412,286.881 					"/>
							<polygon fill="#E6E7E8" points="487.412,286.881 488.212,286.521 457.237,268.902 456.686,269.121 					"/>
						</g>
						<g>
							<polygon fill="#D6D6D7" points="487.412,282.892 456.686,265.131 456.686,264.282 487.412,282.043 					"/>
							<polygon fill="#BCBEC0" points="487.412,282.892 488.212,282.533 488.212,281.683 487.412,282.043 					"/>
							<polygon fill="#E6E7E8" points="487.412,282.043 488.212,281.683 457.237,264.064 456.686,264.282 					"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M461.236,261.071l-0.111-0.063c-0.627-0.357-1.525-0.059-1.525,0.663v12.468l2.391,1.361h0.385v-12.467
								C462.376,262.311,461.864,261.429,461.236,261.071z"/>
							<path fill="#E6E7E8" d="M460.852,261.071l-0.111-0.063c-0.628-0.357-1.141-0.059-1.141,0.663v12.468l2.391,1.361v-12.467
								C461.991,262.311,461.479,261.429,460.852,261.071z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M466.966,264.543l-0.112-0.063c-0.628-0.357-1.525-0.059-1.525,0.664v12.467l2.391,1.362h0.386v-12.468
								C468.106,265.784,467.591,264.901,466.966,264.543z"/>
							<path fill="#E6E7E8" d="M466.581,264.543l-0.111-0.063c-0.627-0.357-1.14-0.059-1.14,0.664v12.467l2.391,1.362v-12.468
								C467.72,265.784,467.207,264.901,466.581,264.543z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M472.694,267.668l-0.111-0.063c-0.628-0.358-1.525-0.061-1.525,0.661v12.469l2.392,1.361h0.385v-12.468
								C473.833,268.908,473.321,268.025,472.694,267.668z"/>
							<path fill="#E6E7E8" d="M472.308,267.668l-0.111-0.063c-0.626-0.358-1.14-0.061-1.14,0.661v12.469l2.392,1.361v-12.468
								C473.449,268.908,472.935,268.025,472.308,267.668z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M478.421,270.908l-0.11-0.063c-0.627-0.356-1.526-0.06-1.526,0.664v12.467l2.392,1.361h0.384V272.87
								C479.562,272.148,479.048,271.265,478.421,270.908z"/>
							<path fill="#E6E7E8" d="M478.038,270.908l-0.111-0.063c-0.628-0.356-1.141-0.06-1.141,0.664v12.467l2.392,1.361V272.87
								C479.177,272.148,478.664,271.265,478.038,270.908z"/>
						</g>
						<g>
							<path fill="#D1D3D4" d="M484.15,274.264l-0.112-0.063c-0.628-0.358-1.524-0.06-1.524,0.663v12.467l2.389,1.362h0.386v-12.468
								C485.29,275.504,484.777,274.623,484.15,274.264z"/>
							<path fill="#E6E7E8" d="M483.765,274.264l-0.112-0.063c-0.628-0.358-1.139-0.06-1.139,0.663v12.467l2.389,1.362v-12.468
								C484.903,275.504,484.391,274.623,483.765,274.264z"/>
						</g>
					</g>
					<g>
						<g>
							<path fill-rule="evenodd" clip-rule="evenodd" fill-opacity="0.149" d="M523.225,144.503c0-1.841,1.294-3.205,3.883-4.09
								c2.562-0.917,5.658-1.115,9.288-0.598c3.684,0.524,6.78,1.605,9.289,3.244c2.563,1.619,3.883,3.289,3.964,5.009
								c0,0.107,0,0.174,0,0.2c0,0.188-0.027,0.33-0.081,0.43c-0.187,1.628-1.481,2.83-3.883,3.609
								c-0.321,0.141-0.668,0.266-1.041,0.373c-2.375,0.594-5.125,0.67-8.248,0.225c-3.122-0.444-5.858-1.303-8.207-2.57
								c-0.373-0.21
								<g>3-0.733-0.438-1.081-0.674c-2.349-1.457-3.643-3.002-3.883-4.637C523.225,144.864,523.225,144.69,523.225,144.503z
								"/>
							<g>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE5" d="M528.99,138.679c0-0.107,0-0.213,0-0.319
										c0-1.015,0.734-1.791,2.202-2.329c1.442-0.516,3.203-0.625,5.285-0.328c2.055,0.293,3.804,0.902,5.245,1.828
										c1.415,0.922,2.149,1.867,2.202,2.836c0,0.054,0,0.094,0,0.121c0,0.105-0.013,0.197-0.04,0.273
										c-0.107,0.893-0.827,1.564-2.162,2.015c-0.213,0.076-0.427,0.151-0.64,0.229c-1.308,0.349-2.842,0.396-4.604,0.146
										c-1.788-0.256-3.35-0.744-4.685-1.469c-0.213-0.138-0.414-0.272-0.601-0.405C529.857,140.444,529.124,139.579,528.99,138.679
										z M543.883,146.567v-0.562c0.027,0.11,0.04,0.192,0.04,0.245C543.923,146.358,543.91,146.463,543.883,146.567z
										 M542.001,140.413c0.027-0.076,0.041-0.141,0.041-0.193c0-0.027,0-0.055,0-0.081c-0.054-0.675-0.601-1.327-1.642-1.955
										c-1.094-0.638-2.402-1.063-3.923-1.28c-1.548-0.221-2.87-0.169-3.963,0.156c-1.094,0.324-1.642,0.847-1.642,1.567
										c0,0.054,0,0.12,0,0.2c0.106,0.629,0.654,1.24,1.642,1.836c0.16,0.076,0.32,0.165,0.48,0.269
										c0.988,0.487,2.149,0.826,3.483,1.017c1.308,0.186,2.469,0.178,3.483-0.023c0.134-0.063,0.281-0.107,0.44-0.139
										C541.387,141.474,541.921,141.015,542.001,140.413z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#9A7652" d="M542.001,140.413c-0.08,0.602-0.614,1.061-1.602,1.373
										c-0.16,0.031-0.307,0.076-0.44,0.139c-1.014,0.201-2.175,0.209-3.483,0.023c-1.334-0.19-2.496-0.529-3.483-1.017
										c-0.16-0.104-0.32-0.192-0.48-0.269c-0.988-0.596-1.535-1.207-1.642-1.836c0-0.08,0-0.146,0-0.2
										c0-0.721,0.547-1.243,1.642-1.567c1.094-0.325,2.416-0.377,3.963-0.156c1.521,0.217,2.829,0.643,3.923,1.28
										c1.042,0.628,1.588,1.28,1.642,1.955c0,0.026,0,0.054,0,0.081C542.042,140.272,542.029,140.337,542.001,140.413z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#97AEC0" d="M543.883,146.006v0.562
										c-0.107,0.891-0.827,1.563-2.162,2.014c-1.441,0.515-3.189,0.627-5.245,0.333c-2.082-0.297-3.843-0.907-5.285-1.833
										c-1.334-0.832-2.068-1.711-2.202-2.637v-0.32c0-0.053,0-0.133,0-0.24v-5.205c0.134,0.9,0.868,1.766,2.202,2.597
										c0.187,0.133,0.387,0.268,0.601,0.405c1.335,0.725,2.896,1.213,4.685,1.469c1.762,0.251,3.296,0.203,4.604-0.146
										c0.213-0.077,0.427-0.152,0.64-0.229c1.335-0.45,2.055-1.122,2.162-2.015V146.006z"/>
								</g>
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M533.834,126.918c0.747,0.239,1.547,0.421,2.402,0.542
											c1.014,0.146,2.002,0.207,2.962,0.182v12.732l-5.364-0.765V126.918z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M539.199,127.642c-0.96,0.025-1.948-0.036-2.962-0.182
											c-0.855-0.121-1.655-0.303-2.402-0.542c-2.83-0.856-5.312-2.491-7.447-4.905c-2.695-3.105-4.043-6.567-4.043-10.385
											c0-3.843,1.348-6.934,4.043-9.271c2.723-2.309,6.005-3.189,9.85-2.641c3.843,0.547,7.126,2.363,9.849,5.447
											c2.695,3.105,4.043,6.582,4.043,10.424c0,3.818-1.348,6.895-4.043,9.233C544.083,126.51,541.788,127.451,539.199,127.642z"
											/>
									</g>
								</g>
							</g>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE5" d="M531.206,157.31v-6.273v-2.583l1.968-0.661l0.041,0.046
									l1.926,2.694v8.856L531.206,157.31z M540.021,161.928l-3.977-2.042v-8.16v-0.696l1.968-0.663l0.041,0.006l1.969,2.699V161.928
									z M530.305,156.813l-3.978-2.043v-4.429v-4.428l1.968-0.662l0.041,0.006l1.968,2.699V156.813z M544.86,164.462l-3.937-2.037
									v-8.855l1.968-0.663l0.041,0.006l1.928,2.693V164.462z M525.384,154.267l-3.895-2.073v-2.542v-6.313l1.967-0.623l1.928,2.694
									v4.797V154.267z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#D85C48" d="M544.86,164.462v4.715l-3.937-2.077v-4.675L544.86,164.462z
									 M526.327,154.77l3.978,2.043v4.715l-3.978-2.042V154.77z M536.044,159.886l3.977,2.042v4.715l-3.977-2.083V159.886z
									 M531.206,157.31l3.936,2.078v4.715l-3.936-2.079V157.31z M521.489,152.194l3.895,2.073v4.715l-3.895-2.073V152.194z"/>
							</g>
						</g>
						<g id="mill">
							<g id="millbody">
								<g>
									<g enable-background="new    ">
										<g>
											<polygon fill="#A24747" points="619.32,79.947 600.9,69.243 600.777,69.315 619.195,80.018 							"/>
										</g>
										<g>
											<polygon fill="#652C2C" points="619.195,80.018 600.777,69.315 594.275,67.355 612.696,78.057 							"/>
										</g>
										<g>
											<polygon fill="#49637A" points="621.098,78.919 602.68,68.215 594.502,65.753 612.921,76.458 							"/>
										</g>
										<g>
											<polygon fill="#2E3D4C" points="612.921,76.458 594.502,65.753 594.27,65.684 612.688,76.389 							"/>
										</g>
										<g>
											<polygon fill="#BB5252" points="612.696,78.057 594.275,67.355 587.807,76.801 606.225,87.505 							"/>
										</g>
										<g>
											<polygon fill="#55728C" points="612.688,76.389 594.27,65.684 594.043,66.019 612.462,76.722 							"/>
										</g>
										<g>
											<polygon fill="#652C2C" points="606.102,87.577 587.682,76.873 583.262,118.861 601.682,129.565 							"/>
										</g>
										<g>
											<polygon fill="#A24747" points="606.225,87.505 587.807,76.801 587.682,76.873 606.102,87.577 							"/>
										</g>
										<g>
											<polygon fill="#9C4444" points="612.696,78.057 606.225,87.505 606.102,87.577 601.682,129.565 612.03,123.589 
												613.616,122.673 623.967,116.699 619.32,79.947 619.195,80.018 							"/>
										</g>
										<g>
											<polygon fill="#55738D" points="612.688,76.389 612.462,76.722 604.325,88.604 606.102,87.577 606.225,87.505 
												612.696,78.057 619.195,80.018 619.32,79.947 621.098,78.919 612.921,76.458 							"/>
										</g>
										<g>
											<polygon fill="#2E3D4C" points="612.462,76.722 594.043,66.019 585.905,77.9 604.325,88.604 							"/>
										</g>
									</g>
								</g>
								<g>
									<g enable-background="new    ">
										<g>
											<polygon fill="#DCDCDC" points="616.076,115.371 615.462,115.012 613.935,115.893 614.551,116.25 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="614.551,116.25 613.935,115.893 613.937,116.318 614.552,116.674 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="616.071,113.619 615.457,113.26 615.462,115.012 616.076,115.371 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="616.437,113.406 615.825,113.049 615.457,113.26 616.071,113.619 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="614.552,116.674 613.937,116.318 613.469,116.588 614.084,116.945 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="616.435,112.867 615.824,112.509 615.825,113.049 616.437,113.406 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="614.082,116.521 613.467,116.165 613.469,116.588 614.084,116.945 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="616.435,112.867 615.824,112.509 615.456,112.722 616.069,113.079 							"/>
										</g>
										<g>
											<polygon fill="#191918" points="616.071,113.619 615.457,113.26 613.932,114.141 614.546,114.499 							"/>
										</g>
										<g>
											<polygon fill="#161615" points="614.546,114.499 613.932,114.141 613.935,115.893 614.551,116.25 							"/>
										</g>
										<g>
											<polygon fill="#10100F" points="616.076,115.371 616.071,113.619 614.546,114.499 614.551,116.25 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="614.078,114.768 613.463,114.413 613.467,116.165 614.082,116.521 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="614.545,113.96 613.93,113.604 613.932,114.141 614.546,114.499 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="616.069,113.079 615.456,112.722 613.93,113.604 614.545,113.96 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="616.062,111.327 615.451,110.969 615.456,112.722 616.069,113.079 							"/>
										</g>
										<g>
											<polygon fill="#191918" points="616.062,111.327 615.451,110.969 613.925,111.849 614.54,112.208 							"/>
										</g>
										<g>
											<polygon fill="#161615" points="614.54,112.208 613.925,111.849 613.93,113.604 614.545,113.96 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="614.539,111.784 613.923,111.427 613.925,111.849 614.54,112.208 							"/>
										</g>
										<g>
											<polygon fill="#FFFFFF" points="614.069,112.054 614.071,112.479 614.076,114.231 614.078,114.768 614.082,116.521 
												614.084,116.945 614.552,116.674 614.551,116.25 614.546,114.499 614.545,113.96 614.54,112.208 614.539,111.784 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="614.082,116.521 613.467,116.165 611.944,117.045 612.557,117.402 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="614.076,114.231 613.462,113.874 613.463,114.413 614.078,114.768 							"/>
										</g>
										<g>
											<polygon fill="#161615" points="612.552,115.65 611.936,115.293 611.944,117.045 612.557,117.402 							"/>
										</g>
										<g>
											<polygon fill="#10100F" points="614.082,116.521 614.078,114.768 612.552,115.65 612.557,117.402 							"/>
										</g>
										<g>
											<polygon fill="#191918" points="614.078,114.768 613.463,114.413 611.936,115.293 612.552,115.65 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="612.552,115.65 611.936,115.293 611.57,115.505 612.182,115.863 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="614.076,114.231 613.462,113.874 611.934,114.754 612.55,115.112 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="614.071,112.479 613.457,112.121 613.462,113.874 614.076,114.231 							"/>
										</g>
										<g>
											<polygon fill="#FFFFFF" points="612.55,115.112 612.182,115.324 612.182,115.863 612.552,115.65 614.078,114.768 
												614.076,114.231 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="612.55,115.112 611.934,114.754 611.569,114.966 612.182,115.324 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="612.182,115.324 611.569,114.966 611.57,115.505 612.182,115.863 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="614.539,111.784 613.923,111.427 613.456,111.699 614.069,112.054 							"/>
										</g>
										<g>
											<polygon fill="#C5C5C5" points="614.069,112.054 613.456,111.699 613.457,112.121 614.071,112.479 							"/>
										</g>
										<g>
											<polygon fill="#191918" points="614.071,112.479 613.457,112.121 611.932,113 612.546,113.359 							"/>
										</g>
										<g>
											<polygon fill="#10100F" points="614.071,112.479 612.546,113.359 612.55,115.112 614.076,114.231 							"/>
										</g>
										<g>
											<polygon fill="#161615" points="612.546,113.359 611.932,113 611.934,114.754 612.55,115.112 							"/>
										</g>
										<g>
											<path fill="#FFFFFF" d="M616.663,115.705l-4.688,2.707l-0.016-5.387l4.688-2.707L616.663,115.705z M612.182,115.863
												l0.368-0.213l0.005,1.752l1.524-0.881l0.002,0.424l0.469-0.271l-0.001-0.425l1.524-0.88l-0.005-1.752l0.365-0.213
												l-0.002-0.539l-0.367,0.212l-0.006-1.752l-1.521,0.88l-0.001-0.423l-0.47,0.271l0.002,0.423l-1.525,0.881l0.005,1.753
												l-0.368,0.213L612.182,115.863L612.182,115.863z"/>
										</g>
										<g>
											<polygon fill="#FFFFFF" points="616.435,112.867 616.069,113.079 614.545,113.96 614.546,114.499 616.071,113.619 
												616.437,113.406 							"/>
										</g>
										<g>
											<polygon fill="#10100F" points="616.069,113.079 616.062,111.327 614.54,112.208 614.545,113.96 							"/>
										</g>
										<g>
											<polygon fill="#898989" points="611.959,113.025 611.344,112.668 611.359,118.055 611.973,118.412 							"/>
										</g>
										<g>
											<polygon fill="#DCDCDC" points="616.645,110.318 616.034,109.961 611.344,112.668 611.959,113.025 							"/>
										</g>
									</g>
								</g>
							</g>
							<g id="millFan">
								<g enable-background="new    ">
									<g>
										<polygon fill="#B98B0D" points="620.266,101.673 619.654,101.318 618.451,102.01 619.063,102.368 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="619.063,102.368 618.451,102.01 618.48,102.198 619.096,102.553 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="619.096,102.553 618.48,102.198 618.141,102.417 618.756,102.773 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.721,102.566 618.105,102.208 618.141,102.417 618.756,102.773 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.08,98.255 619.467,97.9 619.467,98.343 620.082,98.701 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.082,98.701 619.467,98.343 619.076,98.571 619.688,98.927 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="619.688,98.927 619.076,98.571 619.654,101.318 620.266,101.673 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.555,103.816 615.941,103.458 615.958,103.762 616.573,104.12 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="618.721,102.566 618.105,102.208 615.941,103.458 616.555,103.816 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.573,104.12 615.958,103.762 615.618,103.982 616.23,104.337 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.08,98.255 619.467,97.9 618.992,98.172 619.604,98.53 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.215,104.012 615.599,103.657 615.618,103.982 616.23,104.337 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="618.248,99.759 617.635,99.402 618.105,102.208 618.721,102.566 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.525,99.154 617.912,98.795 617.979,99.203 618.594,99.559 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="619.604,98.53 618.992,98.172 617.912,98.795 618.525,99.154 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="616.215,104.012 615.599,103.657 614.583,104.244 615.197,104.601 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.18,99.352 617.566,98.996 617.635,99.402 618.248,99.759 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="619.07,95.988 618.457,95.631 618.992,98.172 619.604,98.53 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="619.438,95.776 618.824,95.418 618.457,95.631 619.07,95.988 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="619.436,95.33 618.824,94.973 618.824,95.418 619.438,95.776 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="616.055,101.026 615.441,100.667 615.599,103.657 616.215,104.012 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="618.18,99.352 617.566,98.996 615.76,100.039 616.373,100.395 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.373,100.395 615.76,100.039 615.783,100.471 616.394,100.829 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="619.436,95.33 618.824,94.973 618.373,95.234 618.988,95.589 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.033,100.592 615.419,100.237 615.441,100.667 616.055,101.026 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="617.743,96.754 617.13,96.398 617.566,98.996 618.18,99.352 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.02,96.148 617.409,95.791 617.474,96.199 618.09,96.554 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="618.988,95.589 618.373,95.234 617.409,95.791 618.02,96.148 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.203,97.199 615.588,96.841 615.611,97.275 616.223,97.631 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="617.674,96.348 617.058,95.991 617.13,96.398 617.743,96.754 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="617.674,96.348 617.058,95.991 615.588,96.841 616.203,97.199 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.032,94 615.418,93.643 615.441,94.077 616.053,94.432 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="617.238,93.75 616.623,93.392 617.058,95.991 617.674,96.348 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="617.169,93.343 616.555,92.987 616.623,93.392 617.238,93.75 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="617.169,93.343 616.555,92.987 615.418,93.643 616.032,94 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.861,90.802 615.248,90.446 615.268,90.878 615.884,91.236 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="617.516,93.142 616.904,92.786 616.973,93.193 617.586,93.548 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.762,92.871 618.145,92.513 617.839,92.692 618.453,93.047 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="618.453,93.047 617.839,92.692 618.373,95.234 618.988,95.589 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="618.369,92.652 617.755,92.294 616.904,92.786 617.516,93.142 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="616.729,90.746 616.118,90.388 616.555,92.987 617.169,93.343 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.664,90.338 616.048,89.983 616.118,90.388 616.729,90.746 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="616.664,90.338 616.048,89.983 615.248,90.446 615.861,90.802 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.72,88.17 615.104,87.815 615.123,88.11 615.736,88.466 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.72,88.17 615.38,88.388 615.393,88.663 615.518,91 615.543,91.431 615.691,94.199 
											615.714,94.63 615.861,97.395 615.885,97.828 616.033,100.592 616.055,101.026 616.215,104.012 616.23,104.337 
											616.573,104.12 616.555,103.816 616.394,100.829 616.373,100.395 616.223,97.631 616.203,97.199 616.053,94.432 616.032,94 
											615.884,91.236 615.861,90.802 615.736,88.466 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="616.033,100.592 615.419,100.237 614.486,100.775 615.098,101.13 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.113,101.57 614.498,101.212 613.905,101.556 614.516,101.913 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.515,101.467 613.903,101.111 613.905,101.556 614.516,101.913 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.098,101.13 614.486,100.775 613.903,101.111 614.515,101.467 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="615.885,97.828 615.269,97.47 615.419,100.237 616.033,100.592 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.76,92.426 618.143,92.07 618.145,92.513 618.762,92.871 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.861,97.395 615.248,97.039 615.269,97.47 615.885,97.828 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.76,92.426 618.143,92.07 617.755,92.294 618.369,92.652 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="615.861,97.395 615.248,97.039 614.395,97.531 615.01,97.886 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.02,98.327 614.409,97.968 613.893,98.264 614.509,98.622 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.01,97.886 614.395,97.531 613.892,97.82 614.508,98.177 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.508,98.177 613.892,97.82 613.893,98.264 614.509,98.622 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="615.714,94.63 615.098,94.274 615.248,97.039 615.861,97.395 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.691,94.199 615.077,93.84 615.098,94.274 615.714,94.63 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.047,89.987 617.432,89.631 617.221,89.752 617.836,90.11 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="617.836,90.11 617.221,89.752 617.755,92.294 618.369,92.652 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.045,89.542 617.431,89.184 617.432,89.631 618.047,89.987 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="615.691,94.199 615.077,93.84 614.305,94.286 614.921,94.642 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.932,95.082 614.318,94.724 613.886,94.973 614.5,95.331 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.045,89.542 617.431,89.184 617.136,89.354 617.752,89.711 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.921,94.642 614.305,94.286 613.884,94.53 614.499,94.885 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.499,94.885 613.884,94.53 613.886,94.973 614.5,95.331 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="617.013,90.136 616.4,89.78 616.468,90.187 617.083,90.544 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="617.752,89.711 617.136,89.354 616.4,89.78 617.013,90.136 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="615.543,91.431 614.928,91.076 615.077,93.84 615.691,94.199 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.518,91 614.906,90.642 614.928,91.076 615.543,91.431 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="617.299,87.564 616.683,87.207 617.136,89.354 617.752,89.711 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.841,91.837 614.226,91.48 613.877,91.683 614.491,92.04 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="615.518,91 614.906,90.642 614.215,91.042 614.829,91.398 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.49,91.594 613.876,91.238 613.877,91.683 614.491,92.04 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.829,91.398 614.49,91.594 614.491,92.04 614.841,91.837 615.543,91.431 615.518,91 						
											"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.829,91.398 614.215,91.042 613.876,91.238 614.49,91.594 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.611,87.74 615.998,87.382 616.032,87.583 616.644,87.941 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="616.294,88.145 615.68,87.788 616.048,89.983 616.664,90.338 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.26,87.944 615.644,87.586 615.68,87.788 616.294,88.145 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.611,87.74 615.998,87.382 615.644,87.586 616.26,87.944 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.26,87.944 616.294,88.145 616.664,90.338 616.729,90.746 617.169,93.343 617.238,93.75 
											617.674,96.348 617.743,96.754 618.18,99.352 618.248,99.759 618.721,102.566 618.756,102.773 619.096,102.553 
											619.063,102.368 618.594,99.559 618.525,99.154 618.09,96.554 618.02,96.148 617.586,93.548 617.516,93.142 617.083,90.544 
											617.013,90.136 616.644,87.941 616.611,87.74 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="615.393,88.663 614.781,88.306 614.906,90.642 615.518,91 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.38,88.388 614.765,88.032 614.781,88.306 615.393,88.663 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.72,88.17 615.104,87.815 614.765,88.032 615.38,88.388 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="617.668,86.801 617.054,86.446 614.146,88.123 614.762,88.479 						"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M614.762,88.479l2.905-1.678l3.551,14.729l-7.008,4.046l-0.055-19.509
											c0.182-0.104,0.354-0.254,0.506-0.432L614.762,88.479z M614.491,92.04l0.351-0.202l0.079,2.806l-0.422,0.243l0.001,0.444
											l0.433-0.249l0.078,2.806l-0.502,0.291l0.001,0.444l0.513-0.295l0.078,2.805l-0.584,0.337l0.002,0.444l0.598-0.343
											l0.084,3.031l1.019-0.589l0.02,0.325l0.341-0.219l-0.021-0.304l2.166-1.25l0.035,0.207l0.34-0.22l-0.03-0.187l1.202-0.693
											l-0.577-2.747l0.395-0.228l-0.002-0.444l-0.478,0.272l-0.532-2.542l0.366-0.212l-0.002-0.446l-0.446,0.261l-0.535-2.542
											l0.309-0.178l-0.002-0.444l-0.391,0.226l-0.534-2.542l0.211-0.123l-0.002-0.445l-0.293,0.17l-0.452-2.147l-0.653,0.378
											l-0.033-0.201l-0.353,0.203l0.033,0.2l-0.559,0.322l-0.018-0.296l-0.34,0.219l0.015,0.273l-0.631,0.365l0.064,2.369
											l-0.34,0.197L614.491,92.04L614.491,92.04z"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.08,98.255 619.604,98.53 618.525,99.154 618.594,99.559 619.688,98.927 620.082,98.701 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.248,99.759 618.18,99.352 616.373,100.395 616.394,100.829 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="632.508,71.998 631.891,71.639 631.6,71.827 632.215,72.183 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="632.215,72.183 631.6,71.827 631.604,72.998 632.219,73.355 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="632.486,71.618 631.871,71.26 631.891,71.639 632.508,71.998 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="632.486,71.618 631.871,71.26 631.598,71.434 632.215,71.792 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="619.436,95.33 618.988,95.589 618.02,96.148 618.09,96.554 619.07,95.988 619.438,95.776 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.098,101.13 614.515,101.467 614.516,101.913 615.113,101.57 616.055,101.026 
											616.033,100.592 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.545,75.668 628.932,75.312 628.545,75.535 629.158,75.892 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="632.219,73.355 631.604,72.998 628.93,74.629 629.545,74.987 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.545,74.987 628.93,74.629 628.932,75.312 629.545,75.668 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.156,75.222 628.543,74.865 628.545,75.535 629.158,75.892 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="617.743,96.754 617.674,96.348 616.203,97.199 616.223,97.631 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="632.209,69.302 631.594,68.947 631.598,71.434 632.215,71.792 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="632.404,69.151 631.791,68.793 631.594,68.947 632.209,69.302 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="632.385,68.771 631.77,68.414 631.791,68.793 632.404,69.151 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="632.215,71.792 631.598,71.434 628.926,73.155 629.539,73.51 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="632.385,68.771 631.77,68.414 631.594,68.552 632.207,68.909 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="629.152,74.152 628.539,73.793 628.543,74.865 629.156,75.222 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.541,73.903 628.926,73.545 628.539,73.793 629.152,74.152 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.539,73.51 628.926,73.155 628.537,73.403 629.152,73.759 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="632.203,67.528 631.588,67.17 631.594,68.552 632.207,68.909 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.682,77.323 626.068,76.964 625.682,77.189 626.295,77.545 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="629.156,75.222 628.543,74.865 626.066,76.375 626.68,76.733 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.68,76.733 626.066,76.375 626.068,76.964 626.682,77.323 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.293,76.968 625.68,76.612 625.682,77.189 626.295,77.545 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.533,71.381 628.92,71.025 628.533,71.326 629.143,71.682 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="629.143,71.682 628.533,71.326 628.537,73.403 629.152,73.759 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="632.207,68.909 631.594,68.552 628.92,70.628 629.533,70.985 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.533,70.985 628.92,70.628 628.531,70.928 629.143,71.286 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="629.152,73.759 628.537,73.403 626.059,74.993 626.676,75.349 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="626.291,75.99 625.676,75.633 625.68,76.612 626.293,76.968 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.676,75.741 626.061,75.384 625.676,75.633 626.291,75.99 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.676,75.349 626.059,74.993 625.674,75.241 626.289,75.598 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="629.14,70.044 628.527,69.688 628.531,70.928 629.143,71.286 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.527,69.276 628.914,68.918 628.914,69.369 629.529,69.726 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.527,69.276 628.914,68.918 628.525,69.141 629.139,69.5 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.139,69.5 628.525,69.141 628.527,69.688 629.14,70.044 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.818,78.974 623.203,78.619 622.816,78.841 623.432,79.199 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.816,78.479 623.203,78.122 623.203,78.619 623.818,78.974 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="626.293,76.968 625.68,76.612 623.203,78.122 623.816,78.479 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="626.283,73.907 625.67,73.549 625.674,75.241 626.289,75.598 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.67,73.605 626.057,73.249 625.67,73.549 626.283,73.907 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="629.143,71.286 628.531,70.928 626.057,72.849 626.67,73.208 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.43,78.714 622.813,78.358 622.816,78.841 623.432,79.199 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.67,73.208 626.057,72.849 625.67,73.151 626.281,73.507 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="626.289,75.598 625.674,75.241 623.197,76.832 623.811,77.189 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.813,77.581 623.199,77.223 622.811,77.471 623.426,77.829 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="623.426,77.829 622.811,77.471 622.813,78.358 623.43,78.714 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.811,77.189 623.197,76.832 622.809,77.081 623.426,77.437 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="626.279,72.398 625.666,72.041 625.67,73.151 626.281,73.507 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.666,71.657 626.051,71.3 626.053,71.722 626.666,72.08 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.279,71.88 625.664,71.524 625.666,72.041 626.279,72.398 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.666,71.657 626.051,71.3 625.664,71.524 626.279,71.88 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.807,75.83 623.193,75.472 622.807,75.774 623.422,76.13 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="623.422,76.13 622.807,75.774 622.809,77.081 623.426,77.437 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="626.281,73.507 625.67,73.151 623.193,75.073 623.807,75.428 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="623.43,78.714 622.813,78.358 620.338,79.869 620.953,80.225 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.953,80.225 620.338,79.869 620.34,80.272 620.953,80.628 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.953,80.628 620.34,80.272 619.951,80.496 620.566,80.852 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.807,75.428 623.193,75.073 622.807,75.373 623.42,75.73 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.563,80.461 619.951,80.105 619.951,80.496 620.566,80.852 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="623.426,77.437 622.809,77.081 620.334,78.671 620.949,79.028 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="620.561,79.667 619.949,79.312 619.951,80.105 620.563,80.461 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.949,79.418 620.336,79.063 619.949,79.312 620.561,79.667 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="623.418,74.751 622.805,74.393 622.807,75.373 623.42,75.73 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.805,74.079 623.188,73.722 623.191,74.077 623.805,74.432 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.949,79.028 620.334,78.671 619.947,78.919 620.559,79.277 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.805,74.079 623.188,73.722 622.803,73.947 623.416,74.302 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.416,74.302 622.803,73.947 622.805,74.393 623.418,74.751 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.945,78.052 620.332,77.697 619.943,77.997 620.557,78.355 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="620.557,78.355 619.943,77.997 619.947,78.919 620.559,79.277 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="623.42,75.73 622.807,75.373 620.33,77.293 620.945,77.651 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="620.563,80.461 619.951,80.105 617.855,81.38 618.473,81.738 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.945,77.651 620.33,77.293 619.943,77.594 620.557,77.952 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.943,76.542 620.328,76.185 620.328,76.428 620.943,76.786 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.471,81.011 617.854,80.655 617.611,80.813 618.223,81.169 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="620.555,77.105 619.941,76.747 619.943,77.594 620.557,77.952 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="620.559,79.277 619.947,78.919 617.853,80.262 618.469,80.621 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.943,76.542 620.555,76.765 620.555,77.105 620.557,77.952 620.945,77.651 620.943,76.786 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.943,76.542 620.328,76.185 619.941,76.409 620.555,76.765 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.555,76.765 619.941,76.409 619.941,76.747 620.555,77.105 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.469,80.621 617.853,80.262 617.591,80.432 618.205,80.791 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="632.486,71.618 632.215,71.792 629.539,73.51 629.152,73.759 626.676,75.349 626.289,75.598 
											623.811,77.189 623.426,77.437 620.949,79.028 620.559,79.277 618.469,80.621 618.205,80.791 618.223,81.169 618.471,81.011 
											620.561,79.667 620.949,79.418 623.426,77.829 623.813,77.581 626.291,75.99 626.676,75.741 629.152,74.152 629.541,73.903 
											632.215,72.183 632.508,71.998 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.205,80.791 617.591,80.432 617.611,80.813 618.223,81.169 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.271,79.723 617.661,79.367 617.662,79.772 618.275,80.128 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.467,79.98 617.851,79.622 617.662,79.772 618.275,80.128 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="620.557,77.952 619.943,77.594 617.851,79.217 618.467,79.575 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.467,79.575 617.851,79.217 617.661,79.367 618.271,79.723 						"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M614.598,83.379c0.042,0.109,0.063,0.24,0.064,0.391c0.204,0.117,0.41,0.236,0.614,0.354
											c-0.001-0.148-0.023-0.278-0.064-0.39C615.029,83.629,614.784,83.487,614.598,83.379z"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M617.994,82.013l-0.01-3.339l14.563-12.441l0.023,8.052l-17.307,9.991
											c0.004-0.052,0.007-0.102,0.007-0.149c0-0.147-0.021-0.278-0.063-0.39L617.994,82.013z M618.223,81.169l0.246-0.158
											l0.002,0.727l2.092-1.274l0.002,0.392l0.39-0.225v-0.405l2.477-1.511l0.002,0.484l0.39-0.225l-0.004-0.497l2.479-1.51
											l0.002,0.577l0.387-0.224l-0.002-0.589l2.479-1.511l0.002,0.67l0.387-0.224v-0.683l2.674-1.633l-0.004-1.171l0.293-0.187
											l-0.021-0.38l-0.271,0.176l-0.006-2.489l0.195-0.152l-0.021-0.381l-0.178,0.14l-0.004-1.381l-2.674,2.198l-0.002-0.45
											l-0.392,0.225l0.002,0.545l-2.475,2.034v-0.423l-0.387,0.225v0.519l-2.478,2.034V74.08l-0.389,0.225l0.002,0.449l-2.475,2.034
											v-0.242l-0.392,0.225v0.339l-2.09,1.719l0.002,0.752l-0.19,0.147l0.002,0.405l0.188-0.148l0.002,0.641l-0.264,0.171
											L618.223,81.169L618.223,81.169z"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.545,74.987 629.541,73.903 629.152,74.152 629.156,75.222 629.158,75.892 629.545,75.668 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.76,92.426 618.369,92.652 617.516,93.142 617.586,93.548 618.453,93.047 618.762,92.871 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="615.01,97.886 614.508,98.177 614.509,98.622 615.02,98.327 615.885,97.828 615.861,97.395 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.539,73.51 629.533,71.381 629.143,71.682 629.152,73.759 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="617.238,93.75 617.169,93.343 616.032,94 616.053,94.432 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.68,76.733 626.676,75.741 626.291,75.99 626.293,76.968 626.295,77.545 626.682,77.323 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.921,94.642 614.499,94.885 614.5,95.331 614.932,95.082 615.714,94.63 615.691,94.199 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="629.527,69.276 629.139,69.5 629.14,70.044 629.143,71.286 629.533,70.985 629.529,69.726 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="618.045,89.542 617.752,89.711 617.013,90.136 617.083,90.544 617.836,90.11 618.047,89.987 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.676,75.349 626.67,73.605 626.283,73.907 626.289,75.598 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.816,78.479 623.813,77.581 623.426,77.829 623.43,78.714 623.432,79.199 623.818,78.974 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="616.729,90.746 616.664,90.338 615.861,90.802 615.884,91.236 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="626.666,71.657 626.279,71.88 626.279,72.398 626.281,73.507 626.67,73.208 626.666,72.08 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.811,77.189 623.807,75.83 623.422,76.13 623.426,77.437 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.953,80.225 620.949,79.418 620.561,79.667 620.563,80.461 620.566,80.852 620.953,80.628 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="623.805,74.079 623.416,74.302 623.418,74.751 623.42,75.73 623.807,75.428 623.805,74.432 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="620.949,79.028 620.945,78.052 620.557,78.355 620.559,79.277 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="632.385,68.771 632.207,68.909 629.533,70.985 629.143,71.286 626.67,73.208 626.281,73.507 
											623.807,75.428 623.42,75.73 620.945,77.651 620.557,77.952 618.467,79.575 618.271,79.723 618.275,80.128 618.467,79.98 
											620.557,78.355 620.945,78.052 623.422,76.13 623.807,75.83 626.283,73.907 626.67,73.605 629.143,71.682 629.533,71.381 
											632.209,69.302 632.404,69.151 						"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M614.656,83.917L614.656,83.917l0.611,0.357v-0.001C615.066,84.156,614.86,84.037,614.656,83.917z"/>
									</g>
									<g>
										<polygon fill="#D09914" points="614.156,86.067 613.542,85.708 613.597,105.218 614.211,105.576 						"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M614.662,85.635l-0.614-0.355c-0.15,0.175-0.323,0.325-0.506,0.43l0.614,0.357
											C614.338,85.961,614.509,85.813,614.662,85.635z"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M614.663,83.77c0,0.049-0.003,0.099-0.007,0.146c0.203,0.119,0.407,0.237,0.611,0.356
											c0.004-0.051,0.01-0.101,0.01-0.148C615.073,84.006,614.867,83.887,614.663,83.77z"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M614.663,83.77L614.663,83.77c0.204,0.117,0.41,0.236,0.614,0.354l0,0l0,0
											C615.073,84.006,614.867,83.887,614.663,83.77L614.663,83.77z"/>
									</g>
									<g>
										<path fill="#FFFFFF" d="M614.322,83.93c0.002,0.499-0.352,1.104-0.781,1.354l0.614,0.356c0.433-0.25,0.779-0.855,0.777-1.354
											C614.729,84.168,614.527,84.049,614.322,83.93z"/>
									</g>
									<g>
										<polygon fill="#FCB627" points="617.994,82.013 617.38,81.657 614.598,83.379 615.213,83.737 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="617.984,78.674 617.372,78.318 617.38,81.657 617.994,82.013 						"/>
									</g>
									<g>
										<polygon fill="#FCB627" points="632.551,66.233 631.936,65.875 617.372,78.318 617.984,78.674 						"/>
									</g>
									<g>
										<path fill="#FFFFFF" d="M613.541,85.284c-0.217,0.125-0.414,0.139-0.557,0.056l0.61,0.355c0.146,0.083,0.34,0.07,0.561-0.055
											C613.971,85.534,613.723,85.39,613.541,85.284z"/>
									</g>
									<g>
										<path fill="#FFFFFF" d="M614.094,83.428c0.141,0.081,0.229,0.255,0.229,0.501c0.205,0.119,0.406,0.237,0.61,0.356
											c0-0.248-0.088-0.421-0.228-0.502C614.521,83.678,614.278,83.536,614.094,83.428z"/>
									</g>
									<g>
										<path fill="#FFCE37" d="M614.708,83.786l-0.613-0.355c-0.144-0.083-0.341-0.071-0.559,0.056l0.614,0.356
											C614.368,83.714,614.566,83.703,614.708,83.786z"/>
									</g>
									<g>
										<path fill="#FFCE37" d="M612.984,85.338l0.61,0.355c-0.14-0.081-0.228-0.256-0.228-0.503
											c-0.002-0.497,0.348-1.103,0.777-1.352l-0.611-0.356c-0.436,0.25-0.782,0.854-0.781,1.353
											C612.756,85.083,612.843,85.256,612.984,85.338z"/>
									</g>
									<g>
										<path fill="#FFFFFF" d="M613.961,83.61c0.062-0.047,0.124-0.089,0.188-0.127c0.11-0.063,0.22-0.106,0.317-0.132
											c0.349-0.083,0.627,0.063,0.747,0.386c0.041,0.11,0.063,0.24,0.064,0.391c0,0.049-0.006,0.099-0.01,0.148
											c-0.042,0.466-0.275,0.979-0.605,1.36c-0.152,0.177-0.324,0.325-0.506,0.432c-0.538,0.311-0.99,0.135-1.104-0.384
											c-0.017-0.078-0.024-0.167-0.024-0.26c0-0.106,0.011-0.219,0.029-0.33C613.166,84.538,613.517,83.95,613.961,83.61z
											 M614.155,85.64c0.433-0.25,0.779-0.855,0.777-1.354c-0.001-0.498-0.353-0.697-0.782-0.446
											c-0.436,0.249-0.782,0.854-0.78,1.352S613.722,85.89,614.155,85.64L614.155,85.64z"/>
									</g>
									<g>
										<path fill="#FFCE37" d="M614.15,83.841c-0.436,0.249-0.782,0.854-0.78,1.352s0.353,0.698,0.785,0.448
											c0.432-0.25,0.779-0.855,0.777-1.354C614.932,83.791,614.583,83.59,614.15,83.841z"/>
									</g>
									<g>
										<path fill="#FFFFE1" d="M612.742,85.788l0.611,0.357c-0.146-0.087-0.255-0.243-0.301-0.462
											c-0.017-0.078-0.025-0.167-0.025-0.26c0-0.106,0.012-0.219,0.03-0.33l-0.611-0.354c-0.021,0.11-0.031,0.223-0.031,0.329
											c0,0.094,0.009,0.182,0.022,0.26C612.488,85.544,612.594,85.702,612.742,85.788z"/>
									</g>
									<g>
										<path fill="#FFFFE1" d="M614.948,83.406l-0.613-0.356c-0.132-0.077-0.298-0.098-0.482-0.054
											c-0.101,0.023-0.207,0.068-0.314,0.131c-0.063,0.038-0.126,0.079-0.188,0.127c-0.439,0.341-0.796,0.928-0.898,1.485
											l0.611,0.354c0.105-0.557,0.459-1.145,0.9-1.483c0.063-0.047,0.124-0.089,0.188-0.127c0.108-0.063,0.218-0.106,0.315-0.132
											C614.65,83.307,614.816,83.329,614.948,83.406z"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.347,89.477 609.734,89.121 609.542,89.27 610.155,89.625 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="610.155,89.625 609.542,89.27 609.544,90.022 610.158,90.375 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.346,89.073 609.73,88.715 609.734,89.121 610.347,89.477 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.346,89.073 609.73,88.715 609.54,88.865 610.154,89.221 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.417,88.411 609.803,88.052 609.538,88.223 610.153,88.581 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="610.153,88.581 609.538,88.223 609.54,88.865 610.154,89.221 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.066,92.097 607.452,91.74 607.454,92.079 608.066,92.435 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="610.158,90.375 609.544,90.022 607.452,91.74 608.066,92.097 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.395,88.032 609.783,87.674 609.803,88.052 610.417,88.411 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.066,92.435 607.454,92.079 607.066,92.302 607.68,92.659 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="610.15,87.463 609.535,87.108 609.538,87.832 610.15,88.19 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.395,88.032 609.783,87.674 609.538,87.832 610.15,88.19 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="607.679,92.415 607.063,92.058 607.066,92.302 607.68,92.659 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.062,91.25 607.45,90.892 607.062,91.194 607.677,91.55 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="607.677,91.55 607.062,91.194 607.063,92.058 607.679,92.415 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="607.679,92.415 607.063,92.058 604.59,94.093 605.205,94.451 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.202,93.471 604.588,93.115 604.2,93.415 604.812,93.773 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.205,94.899 604.592,94.541 604.204,94.764 604.816,95.122 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.205,94.451 604.59,94.093 604.592,94.541 605.205,94.899 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="604.812,93.773 604.2,93.415 604.204,94.412 604.816,94.767 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.344,97.321 601.728,96.963 601.342,97.187 601.957,97.544 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="604.816,94.767 604.204,94.412 604.204,94.764 604.816,95.122 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="604.816,94.767 604.204,94.412 601.727,96.448 602.342,96.802 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.342,96.802 601.727,96.448 601.728,96.963 602.344,97.321 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="601.952,95.994 601.338,95.636 601.342,96.764 601.955,97.122 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.338,95.694 601.723,95.337 601.338,95.636 601.952,95.994 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="601.955,97.122 601.342,96.764 601.342,97.187 601.957,97.544 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="601.955,97.122 601.342,96.764 598.866,98.799 599.479,99.157 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.474,97.916 598.862,97.558 598.473,97.859 599.09,98.215 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.479,99.157 598.866,98.799 598.867,99.344 599.479,99.703 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="599.09,98.215 598.473,97.859 598.477,99.118 599.094,99.474 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.479,99.703 598.867,99.344 598.479,99.57 599.094,99.925 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.094,99.474 598.477,99.118 598.479,99.57 599.094,99.925 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="599.094,99.474 598.477,99.118 595.805,101.318 596.419,101.673 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="596.217,100.05 595.602,99.695 595.623,100.074 596.237,100.43 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="596.415,100.292 595.801,99.935 595.623,100.074 596.237,100.43 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.346,89.073 610.154,89.221 608.061,90.847 607.676,91.148 605.2,93.072 604.812,93.372 
											602.338,95.295 601.95,95.594 599.473,97.518 599.088,97.82 596.414,99.899 596.217,100.05 596.237,100.43 596.415,100.292 
											599.09,98.215 599.474,97.916 601.952,95.994 602.338,95.694 604.812,93.773 605.202,93.471 607.677,91.55 608.062,91.25 
											610.155,89.625 610.347,89.477 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="610.154,89.221 609.54,88.865 607.449,90.49 608.061,90.847 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.061,90.847 607.449,90.49 607.06,90.791 607.676,91.148 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="610.15,88.19 609.538,87.832 607.444,89.175 608.057,89.533 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.061,90.847 608.058,89.924 607.673,90.173 607.676,91.148 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.058,89.924 607.447,89.568 607.057,89.816 607.673,90.173 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="607.673,90.173 607.057,89.816 607.06,90.791 607.676,91.148 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.057,89.533 607.444,89.175 607.057,89.425 607.671,89.782 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.055,88.348 607.441,87.993 607.443,88.384 608.057,88.74 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="607.67,88.976 607.055,88.62 607.057,89.425 607.671,89.782 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="607.676,91.148 607.06,90.791 604.587,92.713 605.2,93.072 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="607.669,88.572 607.054,88.215 607.055,88.62 607.67,88.976 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.055,88.348 607.441,87.993 607.054,88.215 607.669,88.572 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.197,91.763 604.582,91.407 604.195,91.656 604.807,92.012 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.2,93.072 604.587,92.713 604.199,93.014 604.812,93.372 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="604.807,92.012 604.195,91.656 604.199,93.014 604.812,93.372 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="604.812,93.372 604.199,93.014 601.723,94.939 602.338,95.295 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.338,95.295 601.723,94.939 601.337,95.239 601.95,95.594 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="601.946,93.851 601.332,93.495 601.337,95.239 601.95,95.594 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.332,93.604 601.719,93.246 601.332,93.495 601.946,93.851 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="601.95,95.594 601.337,95.239 598.862,97.163 599.473,97.518 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.469,95.442 598.854,95.083 598.468,95.333 599.083,95.691 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="599.083,95.691 598.468,95.333 598.473,97.462 599.088,97.82 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="599.088,97.82 598.473,97.462 595.799,99.541 596.414,99.899 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="596.406,97.409 595.793,97.052 595.519,97.225 596.136,97.583 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.395,88.032 610.15,88.19 608.057,89.533 607.671,89.782 605.195,91.372 604.807,91.62 
											602.332,93.21 601.945,93.46 599.469,95.05 599.082,95.298 596.406,97.017 596.115,97.205 596.136,97.583 596.406,97.409 
											599.083,95.691 599.469,95.442 601.946,93.851 602.334,93.604 604.807,92.012 605.197,91.763 607.673,90.173 608.058,89.924 
											610.153,88.581 610.417,88.411 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.055,88.348 607.669,88.572 607.67,88.976 607.671,89.782 608.057,89.533 608.057,88.74 
																	"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="607.671,89.782 607.057,89.425 604.582,91.015 605.195,91.372 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.195,91.372 604.582,91.015 604.194,91.264 604.807,91.62 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.342,96.802 602.338,95.694 601.952,95.994 601.955,97.122 601.957,97.544 602.344,97.321 
																	"/>
									</g>
									<g>
										<polygon fill="#D09914" points="604.806,90.722 604.191,90.366 604.194,91.264 604.807,91.62 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.191,90.002 604.578,89.645 604.579,90.129 605.193,90.487 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="604.803,90.225 604.188,89.869 604.191,90.366 604.806,90.722 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.191,90.002 604.578,89.645 604.188,89.869 604.803,90.225 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.191,90.002 604.803,90.225 604.806,90.722 604.807,91.62 605.195,91.372 605.193,90.487 
																	"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="604.807,91.62 604.194,91.264 601.718,92.855 602.332,93.21 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.338,95.295 602.332,93.604 601.946,93.851 601.95,95.594 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.332,93.21 601.718,92.855 601.33,93.102 601.945,93.46 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="601.941,92.468 601.329,92.112 601.33,93.102 601.945,93.46 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.328,91.656 601.713,91.299 601.715,91.875 602.329,92.234 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.328,91.656 601.713,91.299 601.327,91.523 601.938,91.879 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="602.328,91.656 601.938,91.879 601.941,92.468 601.945,93.46 602.332,93.21 602.329,92.234 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="601.938,91.879 601.327,91.523 601.329,92.112 601.941,92.468 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="601.945,93.46 601.33,93.102 598.853,94.693 599.469,95.05 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.473,97.518 599.469,95.442 599.083,95.691 599.088,97.82 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.469,95.05 598.853,94.693 598.468,94.943 599.082,95.298 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="596.414,99.899 595.799,99.541 595.602,99.695 596.217,100.05 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="599.078,94.215 598.464,93.858 598.467,94.943 599.082,95.298 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.463,93.309 598.848,92.952 598.849,93.622 599.465,93.98 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.463,93.309 598.848,92.952 598.462,93.176 599.077,93.533 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.463,93.309 599.077,93.533 599.078,94.215 599.082,95.298 599.469,95.05 599.465,93.98 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.077,93.533 598.462,93.176 598.464,93.858 599.078,94.215 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="599.082,95.298 598.468,94.943 595.791,96.661 596.406,97.017 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="596.406,97.017 595.791,96.661 595.501,96.847 596.115,97.205 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="596.046,94.917 595.432,94.56 595.456,102.613 596.07,102.968 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="596.115,97.205 595.501,96.847 595.519,97.225 596.136,97.583 						"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M613.028,85.423c0,0.094,0.011,0.183,0.024,0.26l-2.428,1.505l0.009,3.338l-14.563,12.441
											l-0.024-8.053l17.014-9.822C613.039,85.206,613.028,85.317,613.028,85.423z M596.136,97.583l0.271-0.174l0.008,2.489
											l-0.197,0.151l0.021,0.38l0.178-0.139l0.004,1.382l2.675-2.199v0.451l0.388-0.224l-0.001-0.546l2.478-2.035l0.002,0.424
											l0.387-0.225l-0.002-0.519l2.478-2.035v0.354l0.388-0.224v-0.448l2.475-2.036l0.001,0.244l0.389-0.225v-0.337l2.092-1.722
											l-0.003-0.751l0.189-0.147l-0.001-0.404l-0.189,0.148v-0.642l0.263-0.17l-0.021-0.379l-0.244,0.158l-0.001-0.727l-2.096,1.275
											l-0.001-0.392l-0.387,0.224l0.001,0.404l-2.477,1.511l-0.005-0.481l-0.391,0.223l0.002,0.497l-2.477,1.512l-0.001-0.578
											l-0.388,0.225v0.59l-2.478,1.511l-0.002-0.671l-0.387,0.224l0.001,0.684l-2.679,1.631l0.005,1.171l-0.291,0.188
											L596.136,97.583L596.136,97.583z"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.066,92.097 608.062,91.25 607.677,91.55 607.679,92.415 607.68,92.659 608.066,92.435 
																	"/>
									</g>
									<g>
										<polygon fill="#D09914" points="613.86,80.722 613.245,80.366 613.347,83.252 613.961,83.61 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="613.224,80.538 612.613,80.181 612.627,80.456 613.241,80.813 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="613.855,80.173 613.244,79.817 612.613,80.181 613.224,80.538 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="613.241,80.813 612.627,80.456 612.287,80.673 612.902,81.031 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.885,80.735 612.269,80.378 612.287,80.673 612.902,81.031 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="612.885,80.735 612.269,80.378 611.714,80.7 612.328,81.056 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.328,81.056 611.714,80.7 611.748,80.901 612.361,81.258 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.361,81.258 611.748,80.901 611.394,81.105 612.009,81.461 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.205,94.451 605.202,93.471 604.812,93.773 604.816,94.767 604.816,95.122 605.205,94.899 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="611.974,81.26 611.361,80.904 611.394,81.105 612.009,81.461 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.131,77.607 613.516,77.25 613.178,77.447 613.792,77.803 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="613.792,77.803 613.178,77.447 613.244,79.817 613.855,80.173 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.13,77.162 613.515,76.804 613.516,77.25 614.131,77.607 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="611.974,81.26 611.361,80.904 610.707,81.281 611.322,81.637 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.13,77.162 613.515,76.804 613.166,77.007 613.78,77.365 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="612.761,78.399 612.144,78.042 612.269,80.378 612.885,80.735 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="605.2,93.072 605.197,91.763 604.807,92.012 604.812,93.372 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.13,77.162 613.78,77.365 613.078,77.768 613.099,78.202 613.792,77.803 614.131,77.607 
																	"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="613.78,77.365 613.166,77.007 612.464,77.412 613.078,77.768 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="613.078,77.768 612.464,77.412 612.488,77.844 613.099,78.202 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.738,77.965 612.123,77.61 612.144,78.042 612.761,78.399 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="611.605,79.065 610.994,78.708 611.361,80.904 611.974,81.26 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.761,78.399 612.738,77.965 611.89,78.455 611.958,78.863 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="612.738,77.965 612.123,77.61 611.275,78.098 611.89,78.455 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="611.89,78.455 611.275,78.098 611.344,78.505 611.958,78.863 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="611.54,78.658 610.925,78.3 610.994,78.708 611.605,79.065 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.122,73.87 613.508,73.513 613.509,73.958 614.123,74.316 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.123,74.316 613.509,73.958 613.088,74.202 613.702,74.557 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="613.702,74.557 613.088,74.202 613.166,77.007 613.78,77.365 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.871,79.49 610.256,79.133 609.963,79.302 610.576,79.66 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.122,73.87 613.508,73.513 613.076,73.762 613.687,74.121 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="611.54,78.658 610.925,78.3 610.172,78.736 610.787,79.091 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.575,79.215 609.961,78.857 609.963,79.302 610.576,79.66 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.787,79.091 610.172,78.736 609.961,78.857 610.575,79.215 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.787,79.091 610.575,79.215 610.576,79.66 610.871,79.49 611.605,79.065 611.54,78.658 
																	"/>
									</g>
									<g>
										<polygon fill="#D09914" points="612.589,75.201 611.974,74.843 612.123,77.61 612.738,77.965 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="613.687,74.121 613.076,73.762 612.294,74.214 612.908,74.572 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.122,73.87 613.687,74.121 612.908,74.572 612.93,75.003 613.702,74.557 614.123,74.316 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.908,74.572 612.294,74.214 612.316,74.648 612.93,75.003 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="599.479,99.157 599.474,97.916 599.09,98.215 599.094,99.474 599.094,99.925 599.479,99.703 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.566,74.767 611.953,74.412 611.974,74.843 612.589,75.201 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="611.101,76.058 610.489,75.702 610.925,78.3 611.54,78.658 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.589,75.201 612.566,74.767 611.383,75.451 611.453,75.857 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="612.566,74.767 611.953,74.412 610.768,75.093 611.383,75.451 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="611.383,75.451 610.768,75.093 610.839,75.5 611.453,75.857 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.112,70.58 613.498,70.222 613.5,70.667 614.114,71.025 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="613.611,71.315 612.998,70.957 613.076,73.762 613.687,74.121 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.114,71.025 613.5,70.667 612.998,70.957 613.611,71.315 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="611.035,75.653 610.422,75.295 610.489,75.702 611.101,76.058 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.112,70.58 613.498,70.222 612.985,70.518 613.598,70.875 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.252,76.549 609.638,76.193 609.248,76.417 609.863,76.775 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="611.035,75.653 610.422,75.295 609.554,75.795 610.169,76.153 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="612.419,72.002 611.805,71.647 611.953,74.412 612.566,74.767 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.169,76.153 609.554,75.795 609.247,75.973 609.861,76.33 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.861,76.33 609.247,75.973 609.248,76.417 609.863,76.775 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.169,76.153 609.861,76.33 609.863,76.775 610.252,76.549 611.101,76.058 611.035,75.653 
																	"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="613.598,70.875 612.985,70.518 612.123,71.016 612.737,71.374 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.112,70.58 613.598,70.875 612.737,71.374 612.759,71.805 613.611,71.315 614.114,71.025 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.737,71.374 612.123,71.016 612.144,71.45 612.759,71.805 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.394,71.571 611.782,71.213 611.805,71.647 612.419,72.002 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.101,67.289 613.49,66.931 613.49,67.376 614.102,67.734 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.102,67.734 613.49,67.376 612.908,67.712 613.52,68.071 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="613.52,68.071 612.908,67.712 612.985,70.518 613.598,70.875 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="610.598,73.052 609.986,72.697 610.422,75.295 611.035,75.653 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.879,72.448 610.265,72.089 610.332,72.496 610.946,72.854 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.419,72.002 612.394,71.571 610.879,72.448 610.946,72.854 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="612.394,71.571 611.782,71.213 610.265,72.089 610.879,72.448 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.101,67.289 613.49,66.931 612.893,67.275 613.509,67.63 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.532,72.648 609.918,72.291 609.986,72.697 610.598,73.052 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="612.248,68.804 611.633,68.449 611.782,71.213 612.394,71.571 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.563,68.175 611.953,67.819 611.973,68.251 612.589,68.609 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="613.509,67.63 612.893,67.275 611.953,67.819 612.563,68.175 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.634,73.611 609.018,73.253 608.57,73.513 609.182,73.871 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="610.532,72.648 609.918,72.291 608.935,72.857 609.55,73.213 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.223,68.373 611.611,68.015 611.633,68.449 612.248,68.804 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.182,73.426 608.569,73.07 608.57,73.513 609.182,73.871 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.55,73.213 608.935,72.857 608.569,73.07 609.182,73.426 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="613.425,64.599 612.808,64.243 612.893,67.275 613.509,67.63 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="610.096,70.047 609.479,69.691 609.918,72.291 610.532,72.648 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.373,69.442 609.759,69.083 609.827,69.492 610.441,69.847 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="612.223,68.373 611.611,68.015 609.759,69.083 610.373,69.442 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="610.027,69.64 609.413,69.285 609.479,69.691 610.096,70.047 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.389,64.863 611.775,64.506 611.792,64.831 612.407,65.188 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="612.063,65.384 611.452,65.029 611.611,68.015 612.223,68.373 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.389,64.863 612.048,65.081 612.063,65.384 612.223,68.373 612.248,68.804 612.394,71.571 
											612.419,72.002 612.566,74.767 612.589,75.201 612.738,77.965 612.761,78.399 612.885,80.735 612.902,81.031 613.241,80.813 
											613.224,80.538 613.099,78.202 613.078,77.768 612.93,75.003 612.908,74.572 612.759,71.805 612.737,71.374 612.589,68.609 
											612.563,68.175 612.407,65.188 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.389,64.863 611.775,64.506 611.433,64.723 612.048,65.081 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.048,65.081 611.433,64.723 611.452,65.029 612.063,65.384 						"/>
									</g>
									<g>
										<polygon fill="#B98B0D" points="610.027,69.64 609.413,69.285 608.319,69.917 608.932,70.274 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.015,70.671 608.4,70.315 607.927,70.588 608.541,70.947 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.932,70.274 608.539,70.5 608.541,70.947 609.015,70.671 610.096,70.047 610.027,69.64 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.932,70.274 608.319,69.917 607.925,70.143 608.539,70.5 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="608.539,70.5 607.925,70.143 607.927,70.588 608.541,70.947 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.866,66.427 609.251,66.072 609.287,66.278 609.9,66.635 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="609.557,66.833 608.943,66.476 609.413,69.285 610.027,69.64 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.866,66.427 609.251,66.072 608.912,66.29 609.525,66.647 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.525,66.647 608.912,66.29 608.943,66.476 609.557,66.833 						"/>
									</g>
									<g>
										<path fill="#EAAB1E" d="M614.465,83.351c-0.101,0.025-0.207,0.068-0.317,0.132c-0.063,0.038-0.126,0.08-0.188,0.127
											l-0.101-2.888l-2.906,1.679l-3.551-14.729l7.007-4.046L614.465,83.351z M608.541,70.947l0.476-0.273l0.534,2.542l-0.368,0.212
											l0.001,0.444l0.451-0.26l0.534,2.542l-0.308,0.178l0.002,0.445l0.389-0.227l0.535,2.542l-0.212,0.124l0.001,0.443l0.295-0.17
											l0.451,2.147l0.651-0.377l0.033,0.201l0.354-0.204l-0.033-0.201l0.558-0.321l0.019,0.295l0.34-0.218l-0.018-0.274l0.633-0.363
											l-0.064-2.37l0.34-0.196l-0.001-0.445l-0.351,0.203l-0.078-2.808l0.421-0.242l-0.001-0.445l-0.435,0.25l-0.076-2.806
											l0.503-0.29l-0.002-0.445l-0.516,0.296l-0.076-2.806l0.581-0.336l-0.001-0.445l-0.594,0.343l-0.084-3.031l-1.019,0.589
											l-0.021-0.325l-0.341,0.219l0.018,0.304l-2.164,1.251l-0.033-0.207l-0.342,0.219l0.03,0.188l-1.202,0.693l0.577,2.747
											l-0.393,0.228L608.541,70.947L608.541,70.947z"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="614.101,67.289 613.509,67.63 612.563,68.175 612.589,68.609 613.52,68.071 614.102,67.734 
																	"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.55,73.213 609.182,73.426 609.182,73.871 609.634,73.611 610.598,73.052 610.532,72.648 
																	"/>
									</g>
									<g>
										<polygon fill="#FCB627" points="613.058,85.093 612.446,84.739 595.432,94.56 596.046,94.917 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="612.248,68.804 612.223,68.373 610.373,69.442 610.441,69.847 						"/>
									</g>
									<g>
										<polygon fill="#EAAB1E" points="609.866,66.427 609.525,66.647 609.557,66.833 610.027,69.64 610.096,70.047 610.532,72.648 
											610.598,73.052 611.035,75.653 611.101,76.058 611.54,78.658 611.605,79.065 611.974,81.26 612.009,81.461 612.361,81.258 
											612.328,81.056 611.958,78.863 611.89,78.455 611.453,75.857 611.383,75.451 610.946,72.854 610.879,72.448 610.441,69.847 
											610.373,69.442 609.9,66.635 						"/>
									</g>
									<g>
										<polygon fill="#D09914" points="607.403,67.671 606.788,67.315 610.34,82.042 610.954,82.401 						"/>
									</g>
									<g>
										<polygon fill="#FCB627" points="614.41,63.625 613.796,63.268 606.788,67.315 607.403,67.671 						"/>
									</g>
								</g>
							</g>
						</g>
						<g id=redH>
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#F97C67" d="M596.537,115.012l-2.958-1.719l-10.976,3.1l-0.062,1.154
								l-20.482,5.596l-0.057-0.288l-0.773-2.269l-0.033-0.045l34.042-9.353l0.033,0.045L596.537,115.012z M584.214,123.705
								l-20.079,5.49l-0.339-1.047c-0.019-0.083-0.041-0.127-0.065-0.13l-0.616-1.846l20.008-5.501L584.214,123.705z M586.328,129.762
								l-20.084,5.529l-1.021-3.024l20.013-5.538L586.328,129.762z M598.333,120.264l1.955,5.674l-2.296,0.615L598.333,120.264z
								 M568.32,141.341l-1.019-3.062l34.005-9.318l1.021,3.023L568.32,141.341z M603.346,135.049l1.058,2.987l-34.007,9.358
								l-1.021-3.024L603.346,135.049z M608.549,150.22l-33.933,9.326l-1.09-3.073l33.972-9.322L608.549,150.22z M606.478,144.128
								l-33.971,9.321l-1.055-3.027l33.968-9.322L606.478,144.128z M575.705,165.306l-3.245,0.889l3.366-3.158l-0.188-0.505
								l33.934-9.288l0.741,2.185l-2.847,0.821l-1.564,0.432c-0.097,0.014-0.22,0.051-0.366,0.111l-28.483,8.135l-0.476,0.175
								l-0.038-0.005l-0.037,0.036l-0.679-2.016L575.705,165.306z"/>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#BD966E" points="598.556,116.164 587.618,119.269 582.602,116.393 
								593.578,113.293 596.537,115.012 					"/>
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B6046" d="M564.135,129.195l1.087,3.072l1.021,3.024l1.058,2.989
								l1.019,3.062l1.056,3.029l1.021,3.024l1.056,3.028l1.055,3.027l1.019,3.024l1.09,3.073l0.245,0.795l-26.736-15.409l0.08-1.473
								l0.162-2.986l13.633-17.619l0.057,0.288l1.057,3.03l0.616,1.846c0.024,0.002,0.046,0.047,0.065,0.13L564.135,129.195z
								 M585.236,126.729l-1.021-3.024l-1.091-3.034l-0.651-1.891l0.068-1.233l0.062-1.154l5.016,2.876l-0.671,12.301l-0.62-1.807
								L585.236,126.729z M562.977,138.582l-3.76-2.148l-0.354,6.528l3.757,2.188L562.977,138.582z M563.392,145.492l3.722,2.183
								l0.354-6.527l-3.723-2.183L563.392,145.492z M556.598,158.816l-6.336-3.655l-0.526,9.672l6.334,3.696L556.598,158.816z
								 M572.46,166.194l3.245-0.889l0.798-0.174l0.037-0.036l0.038,0.005l0.476-0.175l-1.258,23.125l-29.107-16.688l1.058-19.425
								l11.206,6.514l-0.935,17.195l6.165,3.474l0.933-17.158L572.46,166.194z M567.213,174.872l6.407,3.666l0.526-9.672l-6.404-3.704
								L567.213,174.872z"/>
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#E2625C" d="M562.001,122.854l-13.633,17.619l-0.162,2.986l-6.164,1.78
								l0.039-0.034l19.079-24.67l0.035,0.005l0.033,0.045L562.001,122.854z M563.115,126.172l-1.057-3.03l20.482-5.596l-0.068,1.233
								l0.651,1.891L563.115,126.172z M565.223,132.267l-1.087-3.072l20.079-5.49l1.021,3.024L565.223,132.267z M567.301,138.28
								l-1.058-2.989l20.084-5.529l0.62,1.807l10.94-3.107l0.104-1.909l2.296-0.615l1.019,3.024L567.301,138.28z M603.346,135.049
								l-33.97,9.321l-1.056-3.029l34.007-9.357L603.346,135.049z M604.404,138.036l1.016,3.064l-33.968,9.322l-1.056-3.028
								L604.404,138.036z M547.745,151.937l-3.865-2.202l4.246-4.803l26.736,15.409l-0.245-0.795l33.933-9.326l1.023,3.023
								l-33.934,9.288l0.188,0.505l-3.366,3.158l-7.345-4.232l-6.164-3.511L547.745,151.937z M573.526,156.474l-1.019-3.024
								l33.971-9.321l1.02,3.024L573.526,156.474z M575.705,165.306l0.119-2.189l0.679,2.016L575.705,165.306z"/>
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#9A7A5A" d="M598.556,116.164l-0.224,4.1l-0.341,6.289l-0.104,1.909
								l-10.94,3.107l0.671-12.301L598.556,116.164z M607.467,156.249l-1.165,21.406l-30.507,10.396l1.258-23.125l28.483-8.135
								c0.146-0.06,0.269-0.097,0.366-0.111L607.467,156.249z M591.103,174.585l0.455-8.319l-4.961,1.42l-0.452,8.318L591.103,174.585
								z M592.61,166.045l-0.451,8.281l4.996-1.416l0.455-8.358L592.61,166.045z"/>
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE6" d="M563.392,145.492l0.354-6.527l3.723,2.183l-0.354,6.527
								L563.392,145.492z M562.977,138.582l-0.358,6.568l-3.757-2.188l0.354-6.528L562.977,138.582z M556.598,158.816l-0.529,9.713
								l-6.334-3.696l0.526-9.672L556.598,158.816z M567.213,174.872l0.529-9.71l6.404,3.704l-0.526,9.672L567.213,174.872z
								 M592.61,166.045l5-1.493l-0.455,8.358l-4.996,1.416L592.61,166.045z M591.103,174.585l-4.958,1.419l0.452-8.318l4.961-1.42
								L591.103,174.585z"/>
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#5F4B36" points="565.115,161.962 564.182,179.12 558.017,175.646 
								558.951,158.451 					"/>
						</g>
						
						<g>
							<path fill-rule="evenodd" clip-rule="evenodd" fill-opacity="0.149" d="M623.546,186.8c2.563,1.619,3.885,3.289,3.965,5.008
								c0,0.107,0,0.174,0,0.201c0,0.186-0.027,0.33-0.08,0.43c-0.186,1.628-1.482,2.83-3.885,3.609
								c-0.32,0.141-0.666,0.266-1.041,0.372c-2.375,0.596-5.123,0.673-8.246,0.228c-3.123-0.446-5.859-1.303-8.208-2.572
								c-0.373-0.214-0.732-0.439-1.08-0.674c-2.35-1.457-3.644-3.001-3.885-4.637c0-0.161,0-0.334,0-0.521
								c0-1.842,1.295-3.205,3.885-4.09c2.562-0.916,5.657-1.115,9.288-0.598C617.943,184.081,621.039,185.161,623.546,186.8z"/>
							<g>
								<g>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE5" d="M606.691,181.915c0-0.105,0-0.213,0-0.32
										c0-1.014,0.721-1.791,2.162-2.332c1.469-0.513,3.23-0.623,5.285-0.33c2.082,0.297,3.83,0.906,5.246,1.83
										c1.439,0.924,2.188,1.872,2.24,2.842c0,0.053,0,0.092,0,0.119c0,0.107-0.012,0.197-0.039,0.275
										c-0.107,0.893-0.84,1.563-2.201,2.007c-0.188,0.082-0.389,0.159-0.602,0.235c-1.334,0.345-2.883,0.39-4.645,0.139
										c-1.787-0.255-3.336-0.742-4.645-1.463c-0.213-0.136-0.426-0.273-0.641-0.41
										C607.546,183.681,606.826,182.815,606.691,181.915z M621.585,189.805v-0.562c0.027,0.083,0.039,0.166,0.039,0.246
										C621.625,189.595,621.613,189.7,621.585,189.805z M610.214,180.296c-1.094,0.324-1.641,0.846-1.641,1.567
										c0,0.055,0,0.12,0,0.2c0.105,0.63,0.654,1.24,1.641,1.835c0.16,0.077,0.309,0.165,0.441,0.264
										c1.014,0.491,2.176,0.831,3.482,1.017c1.334,0.191,2.496,0.184,3.484-0.023c0.16-0.057,0.32-0.1,0.479-0.133
										c0.988-0.313,1.521-0.77,1.602-1.373c0.027-0.076,0.041-0.14,0.041-0.194c0-0.026,0-0.054,0-0.079
										c-0.053-0.676-0.6-1.328-1.643-1.956c-1.094-0.637-2.414-1.065-3.963-1.286C612.617,179.917,611.308,179.972,610.214,180.296
										z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#97AEC0" d="M621.585,189.805c-0.107,0.864-0.84,1.534-2.201,2.007
										c-1.416,0.52-3.164,0.631-5.246,0.334c-2.055-0.292-3.816-0.905-5.285-1.834c-1.307-0.852-2.027-1.73-2.162-2.63v-0.321
										c0-0.079,0-0.16,0-0.24v-5.205c0.135,0.9,0.855,1.766,2.162,2.592c0.215,0.137,0.428,0.274,0.641,0.41
										c1.309,0.721,2.857,1.208,4.645,1.463c1.762,0.251,3.311,0.206,4.645-0.139c0.213-0.076,0.414-0.153,0.602-0.235
										c1.361-0.444,2.094-1.114,2.201-2.007v5.244V189.805z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#9A7652" d="M610.214,180.296c1.094-0.324,2.402-0.379,3.924-0.162
										c1.549,0.221,2.869,0.649,3.963,1.286c1.043,0.628,1.59,1.28,1.643,1.956c0,0.025,0,0.053,0,0.079
										c0,0.055-0.014,0.118-0.041,0.194c-0.08,0.604-0.613,1.061-1.602,1.373c-0.158,0.033-0.318,0.076-0.479,0.133
										c-0.988,0.207-2.15,0.215-3.484,0.023c-1.307-0.186-2.469-0.525-3.482-1.017c-0.133-0.099-0.281-0.187-0.441-0.264
										c-0.986-0.595-1.535-1.205-1.641-1.835c0-0.08,0-0.146,0-0.2C608.574,181.142,609.121,180.62,610.214,180.296z"/>
								</g>
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M616.9,170.88c-0.959,0.022-1.947-0.039-2.961-0.184
											c-0.855-0.121-1.668-0.304-2.443-0.547c-2.828-0.857-5.298-2.49-7.405-4.898c-2.696-3.107-4.044-6.568-4.044-10.385
											c0-3.844,1.349-6.935,4.044-9.273c2.694-2.311,5.978-3.191,9.849-2.64c3.844,0.548,7.113,2.361,9.809,5.44
											c2.695,3.107,4.045,6.582,4.045,10.426c0,3.816-1.35,6.895-4.045,9.232C621.773,169.745,619.49,170.688,616.9,170.88z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M611.496,170.149c0.775,0.243,1.588,0.426,2.443,0.547
											c1.014,0.145,2.002,0.206,2.961,0.184v12.732l-5.404-0.771V170.149z"/>
									</g>
								</g>
							</g>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE5" d="M589.75,191.741v-6.273v-2.583l1.968-0.662l0.041,0.047
									l1.927,2.693v8.856L589.75,191.741z M598.565,196.359l-3.977-2.042v-8.159v-0.697l1.967-0.663l0.041,0.006l1.968,2.7V196.359z
									 M588.848,191.243l-3.978-2.043v-4.428v-4.428l1.969-0.662l0.041,0.006l1.968,2.7V191.243z M603.404,198.894l-3.937-2.038
									v-8.855l1.968-0.663l0.041,0.006l1.927,2.693V198.894z M583.928,188.698l-3.895-2.073v-2.542v-6.314l1.968-0.623l1.927,2.695
									v4.796V188.698z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#D85C48" d="M603.404,198.894v4.715l-3.937-2.077v-4.675L603.404,198.894
									z M584.871,189.2l3.978,2.043v4.715l-3.978-2.043V189.2z M594.589,194.317l3.977,2.042v4.715l-3.977-2.083V194.317z
									 M589.75,191.741l3.936,2.078v4.715l-3.936-2.078V191.741z M580.033,186.625l3.895,2.073v4.715l-3.895-2.072V186.625z"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon fill="#BCBEC0" points="627.655,223.913 614.885,216.532 614.885,214.068 627.655,221.45 					"/>
							<polygon fill="#939598" points="627.655,223.913 640.425,216.532 640.425,214.068 627.655,221.45 					"/>
							<polygon fill="#D1D3D4" points="627.655,221.45 640.425,214.068 627.552,206.746 614.885,214.068 					"/>
						</g>
						<g>
							<path fill="#939598" d="M629.951,213.917c0,0.557-0.668,1.011-1.483,1.011h-0.029c-0.816,0-1.482-0.454-1.482-1.011v-39.31
								c0-0.556,0.666-1.012,1.482-1.012h0.029c0.815,0,1.483,0.456,1.483,1.012V213.917z"/>
							<path fill="#6D6E71" d="M628.476,173.597v41.33c0.811-0.002,1.475-0.456,1.475-1.01v-39.31
								C629.951,174.053,629.287,173.6,628.476,173.597z"/>
						</g>
						<g>
							<polygon fill="#414042" points="625.81,191.744 621.169,188.994 621.169,166.833 625.81,169.583 					"/>
							<polygon fill="#6D6E71" points="625.81,191.744 633.351,187.228 633.351,165.069 625.81,169.583 					"/>
							<polygon fill="#58595B" points="621.169,166.833 628.71,162.689 633.351,165.069 625.81,169.583 					"/>
							<g>
								<path fill="#939598" d="M631.962,185.047c-0.598,1.863-2.365,3.539-3.763,3.382c-1.331-0.15-1.454-1.886-0.513-3.579
									c0.801-1.428,2.157-2.429,3.178-2.429C631.921,182.421,632.458,183.499,631.962,185.047z"/>
								<path fill="#939598" d="M631.962,177.994c-0.598,1.861-2.365,3.539-3.763,3.381c-1.331-0.15-1.454-1.886-0.513-3.579
									c0.801-1.427,2.157-2.429,3.178-2.429C631.921,175.368,632.458,176.444,631.962,177.994z"/>
								<path fill="#939598" d="M631.962,171.057c-0.598,1.863-2.365,3.54-3.763,3.383c-1.331-0.15-1.454-1.887-0.513-3.58
									c0.801-1.427,2.157-2.429,3.178-2.429C631.921,168.432,632.458,169.508,631.962,171.057z"/>
							</g>
							<g>
								<path fill="#5BD23F" d="M631.882,184.64c-0.6,1.861-2.367,3.538-3.764,3.381c-1.332-0.15-1.455-1.886-0.514-3.579
									c0.801-1.428,2.157-2.429,3.178-2.429C631.841,182.013,632.376,183.09,631.882,184.64z"/>
								<path fill="#FFED4F" d="M631.882,177.585c-0.6,1.861-2.367,3.539-3.764,3.382c-1.332-0.151-1.455-1.887-0.514-3.58
									c0.801-1.428,2.157-2.429,3.178-2.429C631.841,174.958,632.376,176.036,631.882,177.585z"/>
								<path fill="#ED1849" d="M631.882,170.65c-0.6,1.862-2.367,3.538-3.764,3.381c-1.332-0.15-1.455-1.886-0.514-3.579
									c0.801-1.428,2.157-2.429,3.178-2.429C631.841,168.024,632.376,169.1,631.882,170.65z"/>
							</g>
						</g>
					</g>
				</g>
				<g id="boatMove">
					<g id="boatweave" opacity="0.4">
						<path fill="#FFFFFF" d="M393.055,476.601c-4.983-8.887-10.134-18.061-23.882-15.408l0.022-0.141
							c-13.972,3.494-18.857-5.219-24.031-14.445c-5.182-9.242-10.54-18.797-25.563-15.039l-0.428,2.65
							c13.973-3.496,18.858,5.217,24.031,14.443c4.983,8.887,10.135,18.059,23.883,15.406l-0.022,0.143
							c13.972-3.494,18.858,5.219,24.031,14.445c5.183,9.242,10.541,18.797,25.564,15.039l0.004-0.025
							c10.13-0.371,14.398,7.227,18.876,15.213c5.183,9.242,10.541,18.799,25.564,15.041l0.428-2.65
							c-13.972,3.496-18.857-5.219-24.031-14.443c-5.183-9.242-10.541-18.799-25.565-15.039l-0.004,0.025
							C401.801,492.185,397.533,484.587,393.055,476.601z"/>
						<path fill="#FFFFFF" d="M428.464,522.027c-5.182-9.242-10.54-18.799-25.564-15.039l-0.003,0.025
							c-10.132,0.371-14.399-7.227-18.877-15.213c-4.983-8.889-10.133-18.061-23.883-15.408l0.022-0.143
							c-13.973,3.496-18.857-5.217-24.03-14.443c-5.182-9.242-10.54-18.799-25.564-15.039l-0.427,2.648
							c13.973-3.496,18.858,5.219,24.031,14.445c4.983,8.889,10.134,18.059,23.884,15.406l-0.023,0.143
							c13.973-3.496,18.859,5.219,24.03,14.443c5.183,9.242,10.541,18.799,25.564,15.041l0.004-0.027
							c10.131-0.371,14.398,7.227,18.876,15.215c5.182,9.242,10.54,18.797,25.564,15.039l0.428-2.648
							C438.522,539.968,433.636,531.253,428.464,522.027z"/>
						<path fill="#FFFFFF" d="M432.982,514.427c-5.183-9.242-10.541-18.799-25.565-15.039l-0.004,0.025
							c-10.13,0.371-14.398-7.227-18.876-15.213c-4.983-8.889-10.133-18.061-23.883-15.408l0.023-0.143
							c-13.972,3.498-18.857-5.217-24.031-14.443c-5.182-9.242-10.54-18.799-25.563-15.039l-0.428,2.65
							c13.972-3.498,18.858,5.217,24.031,14.443c4.983,8.887,10.133,18.059,23.883,15.408l-0.023,0.143
							c13.973-3.498,18.858,5.217,24.03,14.441c5.183,9.242,10.541,18.801,25.564,15.041l0.004-0.027
							c10.13-0.369,14.398,7.227,18.876,15.215c5.182,9.24,10.54,18.799,25.564,15.039l0.427-2.648
							C443.041,532.369,438.155,523.654,432.982,514.427z"/>
					</g>
					<g id="boat">
						<g>
							<polygon fill="none" points="442.801,529.941 442.801,529.941 442.801,529.941 					"/>
							<path fill="none" d="M442.931,529.656L442.931,529.656c-0.017,0.01-0.032,0.023-0.046,0.039l0,0
								C442.898,529.679,442.914,529.666,442.931,529.656z"/>
							<path fill="none" d="M442.81,529.853c-0.005,0.029-0.008,0.057-0.008,0.088l0,0C442.801,529.91,442.805,529.882,442.81,529.853
								L442.81,529.853z"/>
							<path fill="none" d="M442.836,529.765c-0.01,0.021-0.017,0.045-0.023,0.068l0,0
								C442.819,529.81,442.827,529.787,442.836,529.765L442.836,529.765z"/>
							<path fill="none" d="M441.001,528.826c-0.002,0.012-0.002,0.025-0.002,0.039c0-0.014,0-0.025,0.002-0.037
								C441.001,528.826,441.001,528.826,441.001,528.826L441.001,528.826z"/>
							<path fill="none" d="M442.874,529.707c-0.014,0.016-0.027,0.035-0.037,0.057v-0.002
								C442.847,529.742,442.86,529.722,442.874,529.707L442.874,529.707z"/>
							<path fill="none" d="M441.016,528.759c-0.005,0.016-0.008,0.031-0.011,0.049C441.008,528.791,441.011,528.775,441.016,528.759z
								"/>
							<path fill="none" d="M441.072,528.658c-0.023,0.027-0.041,0.059-0.053,0.096C441.031,528.716,441.049,528.685,441.072,528.658z
								"/>
							<path fill="#8C856D" d="M441.121,528.617L441.121,528.617c-0.018,0.012-0.035,0.025-0.049,0.041l0,0
								C441.086,528.642,441.104,528.628,441.121,528.617z"/>
							<path fill="#8C856D" d="M441.393,528.611L441.393,528.611c-0.013-0.004-0.025-0.008-0.038-0.014l0,0
								C441.367,528.603,441.38,528.607,441.393,528.611z"/>
							<path fill="#8C856D" d="M441.286,528.583L441.286,528.583c-0.015-0.002-0.03-0.002-0.043-0.002h-0.001
								C441.255,528.582,441.27,528.582,441.286,528.583z"/>
							<path fill="#8C856D" d="M441.465,528.646L441.465,528.646c-0.02-0.01-0.038-0.02-0.056-0.027h0
								C441.428,528.626,441.446,528.636,441.465,528.646z"/>
							<path fill="#8C856D" d="M441.337,528.593L441.337,528.593c-0.012-0.004-0.024-0.006-0.036-0.008l0,0
								C441.313,528.587,441.325,528.589,441.337,528.593z"/>
							<path fill="#8C856D" d="M441.238,528.582L441.238,528.582c-0.015,0-0.029,0.002-0.043,0.006l0,0
								C441.209,528.583,441.223,528.582,441.238,528.582z"/>
							<polygon fill="#BBB6A4" points="441.072,528.658 441.072,528.658 441.072,528.658 					"/>
							<path fill="#35A8E0" d="M441.815,529.025c-0.086-0.156-0.21-0.297-0.35-0.379h0h0c-0.02-0.01-0.038-0.02-0.056-0.027h0
								c-0.006-0.002-0.012-0.006-0.018-0.008h0c-0.013-0.004-0.025-0.008-0.038-0.014l0,0c-0.006,0-0.012-0.002-0.019-0.004h0
								c-0.012-0.004-0.024-0.006-0.036-0.008l0,0c-0.005,0-0.01-0.002-0.016-0.002l0,0c-0.016-0.002-0.03-0.002-0.044-0.002h0.001
								c-0.001,0-0.003,0-0.003,0h-0.001c-0.015,0-0.029,0.002-0.043,0.006h-0.002h0c-0.005,0-0.008,0.002-0.013,0.004l0,0
								c-0.009,0.002-0.019,0.006-0.028,0.01l0,0c-0.004,0.002-0.009,0.004-0.014,0.006h0c-0.006,0.004-0.012,0.008-0.018,0.01
								c-0.018,0.012-0.035,0.025-0.049,0.041l0,0l0,0c-0.036,0.041-0.061,0.098-0.071,0.168c0,0,0,0,0,0.002
								c-0.003,0.021-0.005,0.045-0.005,0.072c0,0.158,0.064,0.336,0.164,0.49c0.082,0.125,0.187,0.234,0.303,0.301
								c0.258,0.15,0.468,0.037,0.469-0.252C441.932,529.306,441.888,529.16,441.815,529.025L441.815,529.025z"/>
							<path fill="#F5F5F5" d="M440.094,528.179c0.005,0.004,0.009,0.006,0.014,0.008c0.112,0.053,0.23,0.111,0.354,0.172
								c0.095,0.047,0.194,0.096,0.294,0.145c0.103,0.051,0.207,0.102,0.315,0.154c0.014-0.016,0.032-0.029,0.05-0.041h0
								c0.006-0.002,0.011-0.006,0.018-0.01h0c0.005-0.002,0.009-0.004,0.014-0.006h0c0.009-0.004,0.019-0.008,0.029-0.01h0
								c0.005-0.002,0.008-0.004,0.013-0.004h0h0.001h0c0.014-0.004,0.028-0.006,0.043-0.006c0,0,0.003,0,0.004,0
								c0.014,0,0.028,0,0.043,0.002c0.005,0,0.01,0.002,0.016,0.002c0.012,0.002,0.023,0.004,0.035,0.008
								c0.006,0.002,0.013,0.004,0.019,0.004c0.012,0.006,0.025,0.01,0.037,0.014c0.006,0.002,0.011,0.006,0.018,0.008
								c0.018,0.008,0.036,0.018,0.055,0.027h0c0.139,0.082,0.264,0.223,0.35,0.379l0,0l0,0c0.381,0.189,0.788,0.389,1.211,0.6l0,0
								l0,0c0.071-0.008,0.155,0.012,0.244,0.064c0.065,0.037,0.127,0.088,0.184,0.148l0,0c2.415,1.197,5.301,2.633,7.443,3.678
								c0.408,0.199,0.789,0.383,1.135,0.549c0.605,0.291,1.102,0.523,1.445,0.678c0.297,0.133,0.593,0.264,0.891,0.393
								c0.891,0.389,1.782,0.764,2.671,1.115c0.377,0.148,0.754,0.293,1.129,0.434c0.807,0.305,1.611,0.59,2.41,0.848l-22.32-10.994
								c0.202,0.342,0.411,0.709,0.613,1.066l0,0C439.029,527.667,439.466,527.875,440.094,528.179z"/>
							<path fill="#DA2B2D" d="M463.873,538.453L463.873,538.453L463.873,538.453l-26.243-12.941c-0.001,0-0.001-0.002-0.001-0.002
								h-0.001c0.185,0.285,0.401,0.641,0.63,1.027l0,0l22.32,10.994l0,0l7.914,3.898l0,0l0.992-0.209l0,0l0,0L463.873,538.453z"/>
							<path fill="#FFFFFF" d="M460.578,537.531c-0.799-0.258-1.604-0.543-2.41-0.848c-0.375-0.141-0.752-0.285-1.129-0.434
								c-0.889-0.352-1.78-0.727-2.671-1.115c-0.297-0.129-0.594-0.26-0.891-0.393c-0.344-0.154-0.84-0.387-1.445-0.678
								c-0.346-0.166-0.727-0.35-1.135-0.549c-2.142-1.045-5.028-2.48-7.443-3.678l-0.653,0.104c0.167,0.176,0.936,0.324,0.936,0.541
								c-0.001,0.289-0.21,0.4-0.469,0.252c-0.258-0.148-0.467-0.504-0.466-0.793l0,0l0,0l0,0l0,0l0,0
								c0-0.031,0.003-0.059,0.008-0.088l0,0c0.001-0.006,0.002-0.012,0.004-0.02l0,0c0.006-0.023,0.013-0.047,0.023-0.068l0,0
								c0-0.002,0-0.002,0-0.004v0.002c0.01-0.021,0.023-0.041,0.037-0.057l0,0c0.003-0.004,0.007-0.008,0.011-0.012l0,0
								c0.014-0.016,0.029-0.029,0.046-0.039l0,0c0.001,0,0.002,0,0.003-0.002h0h0h0c0.011-0.006,0.021-0.01,0.033-0.014
								c-0.001,0-0.002,0-0.004,0c0.005,0,0.009-0.004,0.014-0.006v0.002c0.016-0.006,0.032-0.01,0.049-0.012l0,0
								c-0.424-0.211-0.83-0.41-1.211-0.6l0,0c0.073,0.135,0.117,0.281,0.116,0.414c0,0.289-0.21,0.402-0.469,0.252
								c-0.116-0.066-0.222-0.176-0.303-0.301c-0.1-0.154-0.164-0.332-0.164-0.49c0-0.027,0.002-0.051,0.005-0.072
								c-0.002,0.012-0.002,0.023-0.002,0.037c0-0.014,0-0.027,0.002-0.039l0,0c0.01-0.07,0.035-0.127,0.071-0.168l0,0l0,0
								c-0.109-0.053-0.213-0.104-0.315-0.154c-0.101-0.049-0.2-0.098-0.294-0.145c-0.124-0.061-0.242-0.119-0.354-0.172
								c-0.005-0.002-0.009-0.004-0.014-0.008c-0.628-0.305-1.064-0.512-1.223-0.576l0,0h-0.001c0.607,1.074,1.152,2.088,1.24,2.252
								l22.265,12.855l6.117-1.281L460.578,537.531L460.578,537.531z M441.019,528.753c0.013-0.037,0.03-0.068,0.053-0.096
								C441.049,528.685,441.031,528.716,441.019,528.753z M441.005,528.808c0.003-0.018,0.006-0.033,0.011-0.049
								C441.011,528.775,441.008,528.791,441.005,528.808z"/>
							<polygon fill="#8C856D" points="482.472,534.035 482.302,533.953 482.472,534.035 					"/>
							<path fill="#D9D9D9" d="M482.302,533.953l-38.063-13.217l-7.108,4.131c0.092,0.053,0.271,0.293,0.498,0.643
								c0,0,0,0.002,0.001,0.002l26.243,12.941l0,0c0.183,0.043,0.364,0.084,0.547,0.121c0.182,0.039,0.363,0.076,0.543,0.111
								c0.362,0.07,0.723,0.135,1.08,0.189l0,0l4.25,2.059l0.17,0.082l0,0l0,0l11.871-2.563l0.139-4.418l0,0L482.302,533.953z"/>
							<path fill="#FFFFFF" d="M466.291,538.363c-0.055-0.027-0.114-0.045-0.174-0.051c-0.344-0.055-0.695-0.115-1.045-0.184
								c-0.178-0.035-0.355-0.07-0.534-0.109c-0.157-0.033-0.315-0.068-0.474-0.105l-26.045-12.844
								c-0.01-0.016-0.021-0.031-0.03-0.045l6.311-3.666l37.593,13.053l-0.111,3.58l-11.248,2.428L466.291,538.363z"/>
							<path fill="#C6C6C5" d="M444.277,521.371l-6.289,3.654c0.01,0.014,0.02,0.029,0.03,0.045l6.258,3.086V521.371z"/>
							<path fill="#F5F5F5" d="M470.462,541.015l-0.17-0.082l-4.25-2.059l0,0c-0.357-0.055-0.718-0.119-1.08-0.189
								c-0.18-0.035-0.361-0.072-0.543-0.111c-0.183-0.037-0.364-0.078-0.547-0.121l0,0l5.611,2.768l0,0L470.462,541.015
								L470.462,541.015z"/>
							<path fill="#9C9B9B" d="M466.291,538.363c-0.055-0.027-0.114-0.045-0.174-0.051c-0.344-0.055-0.695-0.115-1.045-0.184
								c-0.178-0.035-0.355-0.07-0.534-0.109c-0.157-0.033-0.315-0.068-0.474-0.105l-26.045-12.844
								c-0.01-0.016,4.233,2.098,4.224,2.084l2.035-0.947l37.615,8.205l-0.111,3.58l-11.248,2.428L466.291,538.363z"/>
							<path fill="#35A8E0" d="M443.271,529.689c-0.089-0.053-0.173-0.072-0.244-0.064l0,0c-0.017,0.002-0.033,0.006-0.049,0.012
								v-0.002c-0.005,0.002-0.009,0.006-0.014,0.006c0.002,0,0.002,0,0.004,0c-0.011,0.004-0.022,0.008-0.033,0.014l0,0h-0.001h0
								c-0.001,0.002-0.002,0.002-0.003,0.002c-0.017,0.01-0.032,0.023-0.046,0.039c-0.004,0.004-0.008,0.008-0.011,0.012
								c-0.014,0.016-0.027,0.035-0.037,0.055c0,0.002,0,0.002,0,0.004c-0.01,0.021-0.017,0.045-0.023,0.068
								c-0.001,0.008-0.003,0.014-0.004,0.02c-0.005,0.029-0.008,0.057-0.008,0.088l0,0l0,0l0,0c-0.001,0.289,0.208,0.645,0.466,0.793
								c0.259,0.148,0.468,0.037,0.469-0.252c0-0.217-0.116-0.469-0.283-0.645l0,0l0,0
								C443.397,529.777,443.335,529.726,443.271,529.689z"/>
						</g>
						<g>
							<g enable-background="new    ">
								<path fill="#D9D9D9" d="M457.165,528.384l-0.011,3.572c0,0.129-0.046,0.221-0.119,0.264l0.976-0.568
									c0.074-0.041,0.119-0.133,0.12-0.264l0.01-3.57L457.165,528.384z"/>
								<g>
									<path fill="#8C856D" d="M457.32,527.425c0.24,0.115,0.515,0.248,0.821,0.393l-0.976,0.566
										c-0.305-0.145-0.581-0.275-0.821-0.393C456.637,527.822,457.027,527.595,457.32,527.425z"/>
								</g>
								<g>
									<path fill="#FFFFFF" d="M457.165,528.384l-0.011,3.572c0,0.26-0.185,0.365-0.411,0.234c-0.226-0.131-0.41-0.447-0.409-0.707
										l0.01-3.492C456.584,528.109,456.86,528.24,457.165,528.384z"/>
								</g>
								<g>
									<polygon fill="#FFFBE7" points="456.4,508.152 457.377,507.585 457.333,523.251 456.355,523.82 							"/>
								</g>
								<g>
									<path fill="#8C856D" d="M457.187,520.611l0.977-0.566c-0.25,1.049-0.525,2.119-0.831,3.207l-0.977,0.568
										C456.662,522.73,456.938,521.662,457.187,520.611z"/>
								</g>
								<g>
									<path fill="#FFEFAE" d="M455.363,487.878l0.976-0.566c0.028,0.523,0.545,10.459,1.038,20.273l-0.977,0.566
										C455.908,498.337,455.39,488.402,455.363,487.878z"/>
								</g>
								<g>
									<polygon fill="#D9D9D9" points="457.277,488.984 458.253,488.416 458.164,520.044 457.187,520.611 							"/>
								</g>
								<g>
									<polygon fill="#8C856D" points="457.286,485.687 458.263,485.119 458.253,488.416 457.277,488.984 							"/>
								</g>
								<g>
									<path fill="#8C856D" d="M456.585,484.951l0.975-0.568c0.076-0.043,0.179-0.037,0.293,0.029l-0.976,0.566
										C456.763,484.914,456.66,484.906,456.585,484.951z"/>
								</g>
								<g>
									<path fill="#FFFFFF" d="M456.877,484.978c0.227,0.131,0.41,0.449,0.409,0.709l-0.009,3.297l-0.09,31.627
										c-0.25,1.051-0.525,2.119-0.832,3.209l0.045-15.668l0.065-22.939C456.466,484.953,456.65,484.847,456.877,484.978z"/>
								</g>
								<g>
									<path fill="#8C856D" d="M456.877,484.978l0.976-0.566c0.227,0.131,0.41,0.447,0.41,0.707l-0.977,0.568
										C457.287,485.427,457.104,485.109,456.877,484.978z"/>
								</g>
								<g>
									<path fill="#FFEFAE" d="M457.277,488.984l0.977-0.568c8.462,8.451,17.033,42.488,17.485,44.279l-0.977,0.566
										C474.312,531.47,465.739,497.435,457.277,488.984z"/>
								</g>
								<g>
									<path fill="#FFFBE7" d="M457.277,488.984c8.462,8.451,17.035,42.486,17.485,44.277c-4.497,0.955-13.63-3.002-17.597-4.877
										c-0.305-0.145-0.581-0.275-0.821-0.393c-0.692-0.336-1.073-0.531-1.093-0.543c0.303-0.916,0.582-1.822,0.844-2.715
										c-2.907-1.131-10.288-4.861-10.677-5.059l9.945-31.797c0.026,0.523,0.545,10.459,1.037,20.273l-0.045,15.668
										c0.307-1.09,0.582-2.158,0.832-3.209C461.716,501.503,457.499,489.609,457.277,488.984z"/>
								</g>
							</g>
						</g>
					</g>
				</g>
				<g id="truckMove5">
					<g id="truck5">
						<path id="XMLID_1457_" opacity="0.4" d="M709.184,144.263l23.393,13.243c1.378,0.779,1.385,2.764,0.014,3.553l-44.642,25.708
							c-0.627,0.361-1.398,0.363-2.028,0.006l-23.393-13.243c-1.379-0.779-1.385-2.764-0.014-3.553l44.642-25.708
							C707.783,143.907,708.554,143.905,709.184,144.263z"/>
						<polygon id="XMLID_1456_" fill="#5E4843" points="721.102,153.922 721.102,158.438 719.797,159.369 714.749,156.977 				"/>
						<g id="XMLID_1443_">
							<path id="XMLID_1455_" fill="#121414" d="M709.108,161.76c-0.006-2.609,1.688-5.082,3.758-5.613
								c0.851-0.219,2.273-0.574,5.301,1.863c1.117,0.898-4.019,8.867-4.019,8.867l-2.952-1.387c-0.105-0.041-0.207-0.088-0.305-0.143
								l-0.055-0.025l0.001-0.002C709.8,164.721,709.11,163.424,709.108,161.76z"/>
							<g id="XMLID_1451_">
								<path id="XMLID_1452_" fill="#433B39" d="M718.402,161.754c0.003,1.676-1.08,3.291-2.417,3.605
									c-1.336,0.314-2.424-0.793-2.426-2.469c-0.004-1.678,1.078-3.293,2.415-3.605
									C717.311,158.971,718.399,160.076,718.402,161.754z M715.983,164.383c0.908-0.213,1.643-1.309,1.641-2.447
									c-0.003-1.139-0.74-1.889-1.647-1.676c-0.907,0.215-1.642,1.311-1.64,2.447C714.338,163.846,715.077,164.596,715.983,164.383"
									/>
							</g>
							<g id="XMLID_1447_">
								<path id="XMLID_1448_" fill="#272B2B" d="M719.747,161.438c0.005,2.609-1.677,5.121-3.758,5.609s-3.771-1.23-3.775-3.84
									c-0.006-2.611,1.676-5.125,3.758-5.613C718.051,157.105,719.742,158.828,719.747,161.438z M715.985,165.359
									c1.337-0.314,2.42-1.93,2.417-3.605c-0.003-1.678-1.091-2.783-2.428-2.469c-1.337,0.313-2.419,1.928-2.415,3.605
									C713.561,164.566,714.649,165.674,715.985,165.359"/>
							</g>
							<g id="XMLID_1445_">
								<path id="XMLID_1446_" fill="#675E5D" d="M714.714,163.93c-0.009-0.01-0.017-0.021-0.024-0.033
									c-0.065-0.088-0.123-0.186-0.172-0.293c-0.006-0.014-0.012-0.027-0.018-0.041c-0.104-0.246-0.163-0.535-0.164-0.855
									c0-0.236,0.031-0.471,0.089-0.693c0.007-0.025,0.013-0.051,0.021-0.074c0.037-0.129,0.082-0.256,0.136-0.377
									c0.009-0.018,0.016-0.035,0.024-0.051c0.014-0.031,0.028-0.063,0.043-0.092c0.008-0.014,0.016-0.029,0.023-0.043
									c0.008-0.018,0.018-0.033,0.025-0.049c0.008-0.014,0.016-0.025,0.022-0.037c0.045-0.078,0.093-0.152,0.144-0.223
									c0.053-0.074,0.107-0.143,0.165-0.207c0.03-0.035,0.063-0.068,0.095-0.102h0.001c0.248-0.248,0.54-0.426,0.852-0.5
									c0.907-0.213,1.645,0.537,1.647,1.676c0,0.404-0.092,0.803-0.251,1.156c-0.005,0.01-0.009,0.02-0.013,0.029
									c-0.016,0.035-0.033,0.068-0.049,0.102c-0.009,0.016-0.017,0.031-0.025,0.047c-0.008,0.014-0.014,0.027-0.021,0.041
									c-0.016,0.027-0.033,0.057-0.049,0.084c-0.041,0.066-0.083,0.131-0.128,0.193c-0.053,0.072-0.109,0.143-0.169,0.207
									c-0.021,0.025-0.045,0.049-0.066,0.072c-0.252,0.256-0.549,0.439-0.869,0.516c-0.197,0.047-0.389,0.047-0.564,0.008
									c-0.013-0.004-0.025-0.006-0.037-0.01C715.12,164.313,714.891,164.156,714.714,163.93z"/>
							</g>
							<path id="XMLID_1444_" fill="#514A49" d="M715.509,164.383c0.318-0.076,0.616-0.26,0.868-0.516
								c0.022-0.023,0.045-0.047,0.066-0.072c0.06-0.064,0.115-0.135,0.169-0.207c0.045-0.063,0.087-0.127,0.128-0.193
								c0.016-0.027,0.032-0.057,0.049-0.084c0.007-0.014,0.015-0.027,0.021-0.041c0.009-0.016,0.018-0.031,0.025-0.047
								c0.017-0.033,0.033-0.066,0.048-0.102c0.005-0.01,0.009-0.02,0.014-0.029c0.159-0.354,0.251-0.752,0.25-1.156
								c-0.001-0.9-0.465-1.557-1.108-1.686c0.879-0.164,1.581,0.574,1.584,1.686c0,0.404-0.092,0.803-0.251,1.156
								c-0.005,0.01-0.009,0.02-0.013,0.029c-0.016,0.035-0.033,0.068-0.049,0.102c-0.009,0.016-0.017,0.031-0.025,0.047
								c-0.008,0.014-0.014,0.027-0.021,0.041c-0.016,0.027-0.033,0.057-0.049,0.084c-0.041,0.066-0.083,0.131-0.128,0.193
								c-0.053,0.072-0.109,0.143-0.169,0.207c-0.021,0.025-0.045,0.049-0.066,0.072c-0.252,0.256-0.549,0.439-0.869,0.516
								c-0.188,0.043-0.369,0.045-0.539,0.012C715.465,164.391,715.487,164.389,715.509,164.383z"/>
						</g>
						<g id="XMLID_1430_">
							<path id="XMLID_1442_" fill="#121414" d="M686.792,174.275c-0.004-2.609,1.688-5.082,3.759-5.613
								c0.851-0.219,2.274-0.574,5.302,1.863c1.115,0.898-4.02,8.867-4.02,8.867l-2.951-1.385c-0.105-0.041-0.207-0.09-0.307-0.145
								l-0.053-0.025v-0.002C687.485,177.238,686.795,175.939,686.792,174.275z"/>
							<g id="XMLID_1438_">
								<path id="XMLID_1439_" fill="#433B39" d="M696.086,174.27c0.004,1.676-1.08,3.291-2.416,3.605
									c-1.337,0.314-2.424-0.791-2.428-2.469c-0.003-1.676,1.08-3.291,2.416-3.605C694.997,171.486,696.083,172.594,696.086,174.27z
									 M693.668,176.898c0.908-0.213,1.642-1.309,1.639-2.445c-0.002-1.139-0.738-1.889-1.646-1.676
									c-0.907,0.213-1.641,1.309-1.639,2.447C692.024,176.361,692.761,177.111,693.668,176.898"/>
							</g>
							<g id="XMLID_1434_">
								<path id="XMLID_1435_" fill="#272B2B" d="M697.432,173.953c0.004,2.609-1.678,5.121-3.759,5.609s-3.771-1.23-3.776-3.84
									c-0.004-2.611,1.678-5.123,3.759-5.613C695.737,169.621,697.426,171.344,697.432,173.953z M693.67,177.875
									c1.336-0.314,2.42-1.93,2.416-3.605s-1.09-2.783-2.428-2.469c-1.336,0.314-2.419,1.93-2.416,3.605
									C691.247,177.084,692.333,178.189,693.67,177.875"/>
							</g>
							<g id="XMLID_1432_">
								<path id="XMLID_1433_" fill="#675E5D" d="M692.399,176.447c-0.008-0.012-0.017-0.023-0.024-0.035
									c-0.065-0.088-0.123-0.186-0.171-0.293c-0.006-0.014-0.012-0.027-0.018-0.039c-0.105-0.248-0.164-0.535-0.164-0.855
									c0-0.236,0.03-0.471,0.088-0.695c0.007-0.025,0.014-0.049,0.02-0.074c0.038-0.129,0.084-0.256,0.137-0.377
									c0.008-0.018,0.016-0.033,0.023-0.051c0.015-0.031,0.029-0.061,0.045-0.09c0.008-0.016,0.015-0.029,0.022-0.045
									c0.009-0.016,0.018-0.031,0.026-0.049c0.008-0.012,0.015-0.025,0.021-0.037c0.045-0.078,0.093-0.152,0.144-0.223
									c0.053-0.074,0.106-0.143,0.165-0.207c0.031-0.035,0.063-0.068,0.096-0.1c0-0.002,0-0.002,0-0.002
									c0.248-0.248,0.54-0.426,0.852-0.498c0.908-0.213,1.645,0.537,1.646,1.676c0.001,0.402-0.091,0.801-0.25,1.156
									c-0.004,0.01-0.008,0.02-0.013,0.029c-0.016,0.033-0.032,0.066-0.049,0.1c-0.009,0.016-0.017,0.031-0.024,0.047
									c-0.008,0.014-0.015,0.027-0.022,0.041c-0.016,0.029-0.032,0.057-0.05,0.084c-0.039,0.066-0.082,0.133-0.127,0.193
									c-0.053,0.074-0.109,0.143-0.168,0.209c-0.021,0.023-0.045,0.047-0.067,0.07c-0.251,0.256-0.549,0.439-0.868,0.516
									c-0.199,0.047-0.389,0.047-0.565,0.008c-0.013-0.004-0.024-0.006-0.038-0.01C692.805,176.83,692.576,176.672,692.399,176.447z
									"/>
							</g>
							<path id="XMLID_1431_" fill="#514A49" d="M693.194,176.898c0.318-0.076,0.616-0.26,0.867-0.516
								c0.023-0.023,0.046-0.047,0.068-0.07c0.059-0.066,0.115-0.135,0.168-0.209c0.045-0.061,0.088-0.127,0.128-0.193
								c0.017-0.027,0.032-0.055,0.049-0.084c0.007-0.014,0.015-0.027,0.022-0.041c0.008-0.016,0.016-0.031,0.024-0.047
								c0.017-0.033,0.032-0.066,0.048-0.1c0.006-0.01,0.01-0.02,0.014-0.029c0.16-0.355,0.252-0.754,0.25-1.156
								c-0.002-0.902-0.465-1.559-1.107-1.688c0.877-0.164,1.581,0.574,1.582,1.688c0.001,0.402-0.091,0.801-0.25,1.156
								c-0.004,0.01-0.008,0.02-0.013,0.029c-0.016,0.033-0.032,0.066-0.049,0.1c-0.009,0.016-0.017,0.031-0.024,0.047
								c-0.008,0.014-0.015,0.027-0.022,0.041c-0.016,0.029-0.032,0.057-0.05,0.084c-0.039,0.066-0.082,0.133-0.127,0.193
								c-0.053,0.074-0.109,0.143-0.168,0.209c-0.021,0.023-0.045,0.047-0.067,0.07c-0.251,0.256-0.549,0.439-0.868,0.516
								c-0.189,0.045-0.371,0.047-0.54,0.012C693.151,176.906,693.172,176.904,693.194,176.898z"/>
						</g>
						<polygon id="XMLID_1429_" fill="#5E4843" points="731.045,148.129 731.045,152.645 729.741,153.576 724.692,151.184 				"/>
						<g id="XMLID_1416_">
							<path id="XMLID_1428_" fill="#121414" d="M719.05,155.967c-0.005-2.609,1.688-5.082,3.759-5.613
								c0.852-0.219,2.273-0.572,5.301,1.863c1.117,0.898-4.018,8.869-4.018,8.869l-2.953-1.387c-0.104-0.043-0.206-0.09-0.305-0.145
								l-0.055-0.025l0.002-0.002C719.744,158.93,719.053,157.631,719.05,155.967z"/>
							<g id="XMLID_1424_">
								<path id="XMLID_1425_" fill="#433B39" d="M728.345,155.961c0.003,1.676-1.079,3.291-2.417,3.605
									c-1.336,0.314-2.424-0.793-2.426-2.469c-0.004-1.676,1.078-3.291,2.416-3.605
									C727.254,153.178,728.342,154.283,728.345,155.961z M725.927,158.59c0.907-0.213,1.642-1.309,1.64-2.447
									c-0.002-1.137-0.74-1.887-1.647-1.674s-1.642,1.309-1.64,2.447C724.283,158.053,725.02,158.803,725.927,158.59"/>
							</g>
							<g id="XMLID_1420_">
								<path id="XMLID_1421_" fill="#272B2B" d="M729.69,155.645c0.006,2.609-1.677,5.121-3.758,5.609s-3.771-1.23-3.775-3.84
									c-0.006-2.609,1.677-5.125,3.758-5.613S729.686,153.035,729.69,155.645z M725.928,159.566c1.338-0.314,2.42-1.93,2.417-3.605
									c-0.003-1.678-1.091-2.783-2.427-2.469c-1.338,0.314-2.42,1.93-2.416,3.605C723.504,158.773,724.592,159.881,725.928,159.566"
									/>
							</g>
							<g id="XMLID_1418_">
								<path id="XMLID_1419_" fill="#675E5D" d="M724.659,158.137c-0.01-0.01-0.018-0.02-0.025-0.031
									c-0.065-0.09-0.123-0.188-0.172-0.295c-0.006-0.014-0.012-0.027-0.018-0.041c-0.104-0.246-0.163-0.535-0.164-0.854
									c0-0.236,0.031-0.471,0.09-0.695c0.006-0.025,0.012-0.049,0.02-0.074c0.037-0.129,0.083-0.256,0.137-0.377
									c0.007-0.018,0.016-0.033,0.023-0.051c0.014-0.031,0.028-0.061,0.044-0.092c0.007-0.014,0.015-0.027,0.022-0.043
									s0.018-0.031,0.026-0.047c0.007-0.014,0.015-0.027,0.021-0.039c0.045-0.078,0.093-0.152,0.144-0.223
									c0.053-0.072,0.107-0.143,0.165-0.207c0.031-0.035,0.063-0.068,0.095-0.102h0.001c0.248-0.248,0.54-0.424,0.852-0.498
									c0.907-0.213,1.646,0.537,1.647,1.674c0,0.404-0.092,0.803-0.25,1.158c-0.006,0.01-0.01,0.02-0.014,0.027
									c-0.016,0.035-0.032,0.068-0.049,0.102c-0.008,0.016-0.016,0.031-0.025,0.047c-0.006,0.014-0.014,0.027-0.021,0.041
									c-0.016,0.029-0.032,0.057-0.049,0.084c-0.041,0.068-0.082,0.131-0.128,0.193c-0.053,0.074-0.108,0.143-0.169,0.209
									c-0.021,0.023-0.044,0.047-0.066,0.07c-0.252,0.258-0.549,0.441-0.868,0.516c-0.198,0.047-0.389,0.047-0.565,0.008
									c-0.012-0.004-0.025-0.006-0.037-0.01C725.063,158.52,724.834,158.363,724.659,158.137z"/>
							</g>
							<path id="XMLID_1417_" fill="#514A49" d="M725.452,158.59c0.32-0.074,0.617-0.258,0.869-0.516
								c0.022-0.023,0.045-0.047,0.066-0.07c0.06-0.066,0.115-0.135,0.17-0.209c0.044-0.063,0.087-0.125,0.127-0.193
								c0.017-0.027,0.033-0.055,0.049-0.084c0.008-0.014,0.015-0.027,0.021-0.041c0.009-0.016,0.018-0.031,0.025-0.047
								c0.016-0.033,0.033-0.066,0.049-0.102c0.004-0.008,0.008-0.018,0.013-0.027c0.159-0.355,0.251-0.754,0.251-1.158
								c-0.002-0.9-0.466-1.557-1.109-1.686c0.879-0.164,1.582,0.574,1.584,1.686c0,0.404-0.092,0.803-0.25,1.158
								c-0.006,0.01-0.01,0.02-0.014,0.027c-0.016,0.035-0.032,0.068-0.049,0.102c-0.008,0.016-0.016,0.031-0.025,0.047
								c-0.006,0.014-0.014,0.027-0.021,0.041c-0.016,0.029-0.032,0.057-0.049,0.084c-0.041,0.068-0.082,0.131-0.128,0.193
								c-0.053,0.074-0.108,0.143-0.169,0.209c-0.021,0.023-0.044,0.047-0.066,0.07c-0.252,0.258-0.549,0.441-0.868,0.516
								c-0.188,0.045-0.37,0.045-0.54,0.012C725.409,158.598,725.43,158.594,725.452,158.59z"/>
						</g>
						<polygon id="XMLID_1415_" fill="#828282" points="683.709,177.391 683.709,176.146 688.247,173.547 689.485,174.211 				"/>
						<g>
							<g id="XMLID_1413_">
								<path id="XMLID_1414_" fill="#AA006B" d="M688.935,159.01l5.362-15.265l36.991-21.59v30.53l-1.316,0.756l-0.239-5.242
									l-19.621,11.795c0,0-0.007,4.811,0,4.932l-12.585,7.076c-0.782-1.746-2.376-2.701-4.219-2.268
									c-2.609,0.611-4.718,3.764-4.712,7.037c0,0.123,0.009,0.24,0.016,0.359l-4.902,2.918v-11.17L688.935,159.01z"/>
							</g>
							<g id="XMLID_1411_">
								<path id="XMLID_1412_" fill="#B400BF" d="M731.289,146.604v6.082l-1.548,0.898c-0.886-1.645-2.317-2.666-4.102-2.455
									c-2.501,0.299-5.088,3.828-5.088,6.715c0,0.355,0.02,0.707,0.059,1.049l-0.807,0.471c-0.781-1.752-2.377-2.709-4.222-2.277
									c-2.608,0.613-4.718,3.766-4.712,7.039c0,0.125,0.01,0.244,0.016,0.367l-13.358,7.51c-0.782-1.746-2.376-2.701-4.219-2.268
									c-2.609,0.611-4.718,3.764-4.712,7.037c0,0.123,0.009,0.24,0.016,0.359l-4.902,2.918v-5.959L731.289,146.604z"/>
							</g>
							<g id="XMLID_1409_">
								<polygon id="XMLID_1410_" fill="#C9007D" points="731.289,122.155 694.297,143.745 673.075,131.37 710.147,110.036 						"/>
							</g>
							<g id="XMLID_1407_">
								<polygon id="XMLID_1408_" fill="#C300D3" points="724.505,123.204 713.848,129.399 697.92,120.056 697.917,118.011 
									724.505,121.31 						"/>
							</g>
							<g id="XMLID_1405_">
								<polygon id="XMLID_1406_" fill="#C900E2" points="714.024,127.366 713.852,129.347 697.92,120.056 697.92,117.96 						"/>
							</g>
							<g id="XMLID_1403_">
								<polygon id="XMLID_1404_" fill="#C900FF" points="724.505,121.31 714.051,127.376 697.92,117.968 708.436,112.099 						"/>
							</g>
							<g id="XMLID_1401_">
								<polygon id="XMLID_1402_" fill="#C60071" points="683.709,168.879 662.441,156.549 662.441,168.223 683.709,180.049 						"/>
							</g>
							<g id="XMLID_1399_">
								<polygon id="XMLID_1400_" fill="#C900FF" points="683.709,174.09 683.709,180.049 662.441,168.223 662.441,162.08 						"/>
							</g>
							<g id="XMLID_1394_" opacity="0.2">
								<g id="XMLID_1395_">
									<path id="XMLID_1396_" fill="#00005E" d="M704.335,149.477l-0.009,10.221l0.01,4.4v1.275l-6.487,3.629
										c-0.502-0.391-1.557-1.098-2.815-1.289c-0.301-0.045-0.607-0.068-0.912-0.068c-2.018,0-3.662,0.988-4.637,1.754v-11.17
										L704.335,149.477 M704.886,148.514l-15.951,9.4v12.729c0,0,2.171-2.447,5.187-2.447c0.27,0,0.547,0.02,0.83,0.063
										c1.58,0.238,2.836,1.408,2.836,1.408l7.099-3.971v-1.598l-0.009-4.4L704.886,148.514L704.886,148.514z"/>
								</g>
							</g>
							<g id="XMLID_1392_">
								<polygon id="XMLID_1393_" fill="#C9007D" points="688.935,159.01 667.85,146.771 662.441,156.549 683.709,168.879 						"/>
							</g>
							<g id="XMLID_1390_">
								<polygon id="XMLID_1391_" fill="#AA006B" points="694.297,143.745 673.075,131.37 667.85,146.771 688.935,159.01 						"/>
							</g>
							<g id="XMLID_1388_">
								<polygon id="XMLID_1389_" fill="#83005E" points="694.297,143.745 704.877,137.571 704.886,149.613 688.935,159.01 						"/>
							</g>
							<g id="XMLID_1386_">
								<rect id="XMLID_1387_" x="694.994" y="143.649" fill="#83005E" width="1.1" height="11.038"/>
							</g>
							<polygon id="XMLID_1385_" fill="#C900FF" points="683.709,177.391 661.34,164.877 662.441,164.354 683.709,176.146 					"/>
						</g>
						<g id="XMLID_1312_">
							<g id="XMLID_1383_">
								<polygon id="XMLID_1384_" fill="#495E5E" points="729.746,124.835 729.746,142.94 708.552,155.404 708.552,137.073 						"/>
							</g>
							<g id="XMLID_1381_" opacity="0.28">
								<path id="XMLID_1382_" d="M731.289,124.257v28.429l-1.599,0.928c-0.592-1.324-1.933-2.484-3.373-2.484
									c-2.767,0-4.707,2.447-5.604,5.398c-0.248,0.82-0.104,2.365-0.104,2.365l-12.058-21.819L731.289,124.257z"/>
							</g>
							<g id="XMLID_1377_">
								<path id="XMLID_1378_" fill="#F7EDD9" d="M728.645,126.741v15.57l-18.992,11.169v-15.772L728.645,126.741 M729.746,124.835
									l-21.193,12.238v18.331l21.193-12.464V124.835L729.746,124.835z"/>
							</g>
							<g id="XMLID_1372_">
								<g id="XMLID_1373_">
									<path id="XMLID_1374_" d="M729.196,125.788v16.838l-20.094,11.817v-17.052L729.196,125.788 M729.746,124.835l-21.193,12.238
										v18.331l21.193-12.464V124.835L729.746,124.835z"/>
								</g>
							</g>
							<g id="XMLID_1370_">
								<polygon id="XMLID_1371_" fill="#F7EDD9" points="719.114,143.38 708.663,155.436 708.663,154.125 718.296,142.89 						"/>
							</g>
							<g id="XMLID_1368_">
								<polygon id="XMLID_1369_" points="708.663,155.436 710.414,154.406 721.038,142.257 719.114,143.38 						"/>
							</g>
							<g id="XMLID_1366_">
								<polyline id="XMLID_1367_" points="740.721,130.765 729.856,142.972 729.856,141.229 737.624,132.571 740.721,130.765 						
									"/>
							</g>
							<g id="XMLID_1364_">
								<polygon id="XMLID_1365_" fill="#F7EDD9" points="729.856,142.972 740.721,130.765 738.645,131.972 728.014,144.03 						"/>
							</g>
							<g id="XMLID_1313_">
								<g id="XMLID_1362_">
									<polygon id="XMLID_1363_" fill="#F7EDD9" points="730.208,124.548 740.725,130.729 719.118,143.345 708.659,137.081 							
										"/>
								</g>
								<g id="XMLID_1359_">
									<path fill="#F7EDD9" d="M740.725,130.729v2.73c0,0.549-0.292,1.057-0.767,1.334l-0.008,0.004
										c-0.477,0.277-1.065,0.279-1.544,0.006c-0.479-0.275-0.773-0.783-0.775-1.334l-0.003-0.939L740.725,130.729z"/>
								</g>
								<g id="XMLID_1356_">
									<path fill="#F7EDD9" d="M734.498,134.364l0.009,2.742c0.002,0.539-0.283,1.039-0.75,1.309
										c-0.478,0.279-1.069,0.279-1.549,0.002c-0.479-0.277-0.773-0.789-0.77-1.344l0.005-0.926L734.498,134.364z"/>
								</g>
								<g id="XMLID_1353_">
									<path fill="#F7EDD9" d="M728.37,137.942l-0.006,2.73c-0.001,0.549-0.295,1.057-0.77,1.33l-0.016,0.01
										c-0.477,0.275-1.064,0.277-1.541,0.004c-0.479-0.275-0.773-0.783-0.775-1.332l-0.004-0.949L728.37,137.942z"/>
								</g>
								<g>
									<g>
										<g id="XMLID_1351_">
											<polygon id="XMLID_1352_" fill="#FF76CE" points="737.628,132.536 727.375,126.179 724.433,127.894 734.498,134.364 
																					"/>
										</g>
										<g id="XMLID_1349_">
											<polygon id="XMLID_1350_" fill="#FF76CE" points="731.443,136.147 721.202,129.806 718.301,131.468 728.37,137.942 
																					"/>
										</g>
										<g id="XMLID_1347_">
											<polygon id="XMLID_1348_" fill="#FF76CE" points="725.254,139.735 715.028,133.401 711.925,135.212 722.224,141.53 
																					"/>
										</g>
									</g>
									<g id="XMLID_1344_">
										<path fill="#FF76CE" d="M737.628,132.536l0.007,2.73c0.001,0.549-0.291,1.059-0.764,1.334l-0.037,0.021
											c-0.473,0.277-1.058,0.283-1.535,0.014c-0.479-0.27-0.777-0.771-0.786-1.32l-0.016-0.951L737.628,132.536z"/>
									</g>
									<g id="XMLID_1341_">
										<path fill="#FF76CE" d="M731.443,136.147l0.017,2.744c0.004,0.549-0.287,1.059-0.762,1.334l-0.006,0.004
											c-0.478,0.277-1.066,0.279-1.545,0.004c-0.479-0.273-0.774-0.783-0.775-1.334l-0.002-0.957L731.443,136.147z"/>
									</g>
									<g id="XMLID_1337_">
										<path fill="#FF76CE" d="M725.254,139.735l0.043,2.717c0.008,0.549-0.279,1.059-0.754,1.334
											c-0.478,0.277-1.066,0.279-1.545,0.004c-0.479-0.275-0.774-0.785-0.774-1.338v-0.922L725.254,139.735z"/>
									</g>
								</g>
								<g id="XMLID_1334_">
									<path fill="#F7EDD9" d="M722.224,141.53l-0.015,2.775c-0.004,0.547-0.295,1.051-0.768,1.327l-0.005,0.002
										c-0.478,0.277-1.067,0.279-1.546,0.004c-0.479-0.276-0.773-0.786-0.773-1.337v-0.957L722.224,141.53z"/>
								</g>
								<g id="XMLID_1314_" opacity="0.58">
									<g id="XMLID_1332_">
										<path id="XMLID_1333_" d="M737.628,132.53l3.097-1.801v2.73c0,0.549-0.292,1.057-0.767,1.334l-0.008,0.004
											c-0.477,0.277-1.065,0.279-1.544,0.006c-0.479-0.275-0.773-0.783-0.775-1.334L737.628,132.53z"/>
									</g>
									<g id="XMLID_1321_">
										<path id="XMLID_1331_" d="M737.635,135.267c0.001,0.549-0.291,1.059-0.764,1.334l-0.037,0.021
											c-0.473,0.277-1.058,0.283-1.535,0.014c-0.479-0.27-0.777-0.771-0.786-1.32l-0.016-0.951l3.131-1.828L737.635,135.267z"/>
									</g>
									<g id="XMLID_1319_">
										<path id="XMLID_1320_" d="M734.498,134.364l0.009,2.742c0.002,0.539-0.283,1.039-0.75,1.309
											c-0.478,0.279-1.069,0.279-1.549,0.002c-0.453-0.262-0.731-0.736-0.759-1.256l0.011,1.73
											c0.004,0.549-0.287,1.059-0.762,1.334l-0.006,0.004c-0.478,0.277-1.066,0.279-1.545,0.004
											c-0.479-0.273-0.774-0.783-0.775-1.334l-0.002-0.957l3.073-1.795L734.498,134.364z"/>
									</g>
									<g id="XMLID_1317_">
										<path id="XMLID_1318_" d="M725.254,139.735l0.006,0.412l-0.002-0.412l3.111-1.793l-0.006,2.73
											c-0.001,0.549-0.295,1.057-0.77,1.33l-0.016,0.01c-0.477,0.275-1.064,0.277-1.541,0.004
											c-0.462-0.266-0.747-0.75-0.768-1.279l0.027,1.715c0.008,0.549-0.279,1.059-0.754,1.334
											c-0.477,0.277-1.066,0.279-1.545,0.004c-0.479-0.275-0.774-0.785-0.774-1.338v-0.922l0,0L725.254,139.735z"/>
									</g>
									<g id="XMLID_1315_">
										<path id="XMLID_1316_" d="M722.224,141.53l-0.015,2.775c-0.004,0.547-0.295,1.051-0.768,1.327l-0.005,0.002
											c-0.478,0.277-1.067,0.279-1.546,0.004c-0.479-0.276-0.773-0.786-0.773-1.337v-0.957L722.224,141.53z"/>
									</g>
								</g>
							</g>
						</g>
						<g id="XMLID_1310_">
							<polygon id="XMLID_1311_" fill="#6EBEBF" points="695.301,144.22 704.176,139.093 704.084,148.984 690.928,156.662 					"/>
						</g>
						<g id="XMLID_1308_" opacity="0.28">
							<polygon id="XMLID_1309_" points="696.01,144.854 692.103,155.977 690.928,156.662 695.301,144.22 704.176,139.093 
								704.167,140.144 					"/>
						</g>
						<g id="XMLID_1301_" opacity="0.31">
							<g id="XMLID_1306_">
								<path id="XMLID_1307_" fill="#FFFFFF" d="M704.118,145.323l-1.896-1.896c-0.322-0.322-0.322-0.846,0-1.166
									c0.322-0.324,0.845-0.324,1.167,0l0.75,0.75L704.118,145.323z"/>
							</g>
							<g id="XMLID_1304_">
								<path id="XMLID_1305_" fill="#FFFFFF" d="M699.452,144.118c0.322-0.322,0.844-0.322,1.166,0l3.479,3.479l-0.013,1.387
									l-0.59,0.344l-4.043-4.042C699.129,144.964,699.129,144.44,699.452,144.118z"/>
							</g>
							<g id="XMLID_1302_">
								<path id="XMLID_1303_" fill="#FFFFFF" d="M698.436,147.707c0.322-0.322,0.844-0.322,1.167,0l2.458,2.459l-1.473,0.859
									l-2.152-2.152C698.114,148.551,698.114,148.029,698.436,147.707z"/>
							</g>
						</g>
						<g id="XMLID_1292_">
							<g id="XMLID_1297_" opacity="0.28">
								<path id="XMLID_1298_" d="M703.104,155.266c0.251-0.146,0.404-0.418,0.404-0.709s-0.154-0.563-0.406-0.711
									c-0.25-0.148-0.562-0.152-0.817-0.012l-1.716,0.949c-0.271,0.15-0.441,0.436-0.441,0.746c0,0.309,0.165,0.592,0.432,0.742
									c0.266,0.152,0.594,0.15,0.857-0.006L703.104,155.266z"/>
							</g>
							<g id="XMLID_1293_">
								<path id="XMLID_1294_" fill="#F4F4F4" d="M703.266,154.594c0.251-0.148,0.405-0.418,0.405-0.709
									c0-0.293-0.155-0.563-0.406-0.711s-0.563-0.152-0.817-0.012l-1.717,0.949c-0.271,0.15-0.44,0.436-0.44,0.746
									c0,0.309,0.164,0.592,0.431,0.742c0.267,0.152,0.594,0.15,0.857-0.006L703.266,154.594z"/>
							</g>
						</g>
						<polygon id="XMLID_1291_" opacity="0.1" points="692.234,149.619 670.971,137.571 673.081,131.37 694.297,143.745 				"/>
						<g>
							<g id="XMLID_1289_">
								<polygon id="XMLID_1290_" fill="#9AF4F4" points="692.761,144.532 673.655,133.31 669.317,146.096 688.309,157.203 						"/>
							</g>
							<g id="XMLID_1287_" opacity="0.28">
								<polygon id="XMLID_1288_" points="674.059,134.657 670.036,146.516 669.317,146.096 673.655,133.31 692.761,144.532 
									692.438,145.45 						"/>
							</g>
							<g id="XMLID_1276_" opacity="0.44">
								<g id="XMLID_1285_">
									<path id="XMLID_1286_" fill="#FFFFFF" d="M680.553,150.039c0.545-0.27,1.205-0.045,1.473,0.502l2.062,4.193l-3.44-2.012
										l-0.596-1.211C679.784,150.965,680.008,150.307,680.553,150.039z"/>
								</g>
								<g id="XMLID_1283_">
									<path id="XMLID_1284_" fill="#FFFFFF" d="M674.891,142.161c0.268,0.547,0.043,1.205-0.502,1.473
										c-0.156,0.078-0.321,0.113-0.484,0.113c-0.406,0-0.797-0.225-0.988-0.615l-1.535-3.123l1.001-2.951L674.891,142.161z"/>
								</g>
								<g id="XMLID_1281_">
									<path id="XMLID_1282_" fill="#FFFFFF" d="M683.458,147.303c0.546-0.268,1.205-0.043,1.473,0.502l3.896,7.926l-0.518,1.473
										l-1.699-0.994l-3.654-7.434C682.688,148.23,682.913,147.572,683.458,147.303z"/>
								</g>
								<g id="XMLID_1279_">
									<path id="XMLID_1280_" fill="#FFFFFF" d="M689.76,153.072l-2.314-4.709c-0.268-0.545-0.043-1.205,0.502-1.473
										c0.545-0.27,1.205-0.043,1.473,0.502l1.361,2.77L689.76,153.072z"/>
								</g>
								<g id="XMLID_1277_">
									<path id="XMLID_1278_" fill="#FFFFFF" d="M675.127,134.175l3.926,7.986c0.269,0.547,0.043,1.205-0.502,1.473
										c-0.156,0.078-0.32,0.113-0.484,0.113c-0.406,0-0.796-0.225-0.988-0.615l-3.998-8.131l0.574-1.691L675.127,134.175z"/>
								</g>
							</g>
							<g id="XMLID_1274_">
								<path id="XMLID_1275_" fill="#718B9B" d="M674.224,149.93l7.663,2.842c0.199,0.074,0.419-0.027,0.492-0.227
									c0.07-0.188-0.018-0.395-0.195-0.479l-7.395-3.484c-0.365-0.172-0.801-0.016-0.973,0.35s-0.016,0.801,0.35,0.973
									C674.186,149.914,674.206,149.922,674.224,149.93z"/>
							</g>
							<polygon id="XMLID_1273_" fill="#AFAFAF" points="694.297,143.745 692.991,147.465 689.39,146.771 					"/>
							<polygon id="XMLID_1272_" fill="#F4F4F4" points="689.39,146.771 668.173,134.396 673.081,131.37 694.297,143.745 					"/>
						</g>
						<polygon id="XMLID_1271_" fill="#F4F4F4" points="678.946,168.107 683.709,170.873 683.709,168.879 678.946,166.113 				"/>
						<polygon id="XMLID_1270_" fill="#272B2B" points="668.254,164.354 678.069,170.061 678.069,166.305 668.254,160.6 				"/>
						<polygon id="XMLID_1269_" fill="#F4D071" points="678.946,169.094 683.709,171.857 683.709,170.861 678.946,168.098 				"/>
						<polygon id="XMLID_140_" fill="#F4D071" points="662.441,159.539 667.204,162.305 667.204,161.307 662.441,158.543 				"/>
						<polygon id="XMLID_130_" fill="#F4F4F4" points="662.441,158.543 667.204,161.307 667.204,159.313 662.441,156.549 				"/>
						<g id="XMLID_127_">
							<polygon id="XMLID_129_" fill="#AFAFAF" points="683.709,177.391 683.709,180.049 661.34,167.719 661.34,164.877 					"/>
						</g>
						<g id="XMLID_79_">
							<polygon id="XMLID_123_" fill="#939393" points="683.709,177.391 683.709,180.049 689.485,176.809 689.485,174.211 					"/>
						</g>
						<g id="XMLID_77_">
							<polygon id="XMLID_78_" fill="#FFFFFF" points="673.76,173.949 673.76,176.297 666.563,172.252 666.563,170.027 					"/>
						</g>
					</g>
					<g id="location5">
						<path fill="#FFFFFF" d="M699.055,31.177c-12.941,7.47-23.43,25.639-23.387,40.508c0.041,14.862,10.6,20.885,23.537,13.414
							c12.938-7.469,23.426-25.641,23.385-40.505C722.545,29.727,711.989,23.708,699.055,31.177z"/>
						<path fill="#FF1022" d="M699.043,27.619c-14.645,8.457-26.52,29.025-26.473,45.854c0.047,16.824,12.002,23.634,26.646,15.18
							c14.639-8.454,26.516-29.023,26.469-45.846C725.637,25.978,713.684,19.167,699.043,27.619z M699.206,85.099
							c-12.938,7.471-23.496,1.448-23.537-13.414c-0.043-14.87,10.445-33.039,23.387-40.508c12.934-7.469,23.49-1.451,23.535,13.417
							C722.631,59.458,712.143,77.63,699.206,85.099z"/>
						<path fill="#FF1022" d="M663.406,76.168c0.021-0.461,0.048-0.92,0.083-1.385c0.021-0.233,0.037-0.477,0.061-0.711
							c0.042-0.455,0.089-0.914,0.142-1.375c0.023-0.225,0.048-0.438,0.074-0.662c0.041-0.319,0.092-0.646,0.136-0.965
							c0.066-0.479,0.139-0.965,0.22-1.447c0.057-0.321,0.112-0.647,0.172-0.977c0.086-0.469,0.178-0.938,0.271-1.404
							c0.075-0.371,0.154-0.744,0.237-1.117c0.067-0.313,0.143-0.627,0.215-0.94c0.1-0.408,0.201-0.816,0.309-1.229
							c0.079-0.309,0.157-0.614,0.24-0.926c0.136-0.492,0.275-0.988,0.423-1.483c0.054-0.185,0.104-0.365,0.161-0.554
							c0.205-0.68,0.421-1.354,0.646-2.033c0.334-0.997,0.693-1.987,1.07-2.979c0.095-0.248,0.188-0.498,0.287-0.746
							c0.33-0.841,0.669-1.68,1.024-2.514c0.058-0.127,0.104-0.258,0.162-0.388c0.397-0.922,0.819-1.84,1.26-2.754
							c0.115-0.237,0.23-0.479,0.352-0.715c0.354-0.727,0.719-1.438,1.092-2.156c0.116-0.221,0.229-0.438,0.352-0.66
							c0.479-0.896,0.976-1.786,1.48-2.665c0.101-0.164,0.197-0.328,0.298-0.492c0.448-0.769,0.911-1.523,1.391-2.273
							c0.141-0.221,0.275-0.438,0.419-0.66c0.588-0.914,1.188-1.815,1.813-2.709c0.098-0.133,0.19-0.264,0.285-0.396
							c0.646-0.915,1.313-1.816,1.995-2.703c0.104-0.139,0.207-0.275,0.313-0.412c0.211-0.271,0.429-0.539,0.645-0.809
							c0.273-0.343,0.546-0.687,0.821-1.021c0.227-0.271,0.453-0.537,0.681-0.803c0.27-0.314,0.532-0.633,0.802-0.939
							c0.558-0.631,1.114-1.252,1.684-1.856c0.034-0.033,0.063-0.07,0.1-0.104c0.604-0.645,1.211-1.264,1.828-1.875
							c0.391-0.387,0.783-0.77,1.182-1.145c0.111-0.104,0.226-0.215,0.334-0.32c0.521-0.486,1.053-0.961,1.581-1.43
							c0.146-0.127,0.292-0.25,0.438-0.375c0.394-0.336,0.782-0.67,1.182-0.992c0.194-0.162,0.396-0.318,0.593-0.479
							c0.354-0.281,0.705-0.562,1.063-0.83c0.214-0.162,0.425-0.318,0.64-0.479c0.354-0.263,0.705-0.52,1.063-0.771
							c0.211-0.146,0.422-0.302,0.634-0.441c0.386-0.266,0.769-0.521,1.151-0.771c0.188-0.119,0.364-0.242,0.553-0.354
							c0.566-0.361,1.145-0.713,1.723-1.043c0.553-0.32,1.104-0.619,1.648-0.906c0.146-0.074,0.285-0.147,0.432-0.223
							c0.488-0.253,0.979-0.49,1.463-0.719c0.063-0.023,0.12-0.062,0.182-0.084c0.505-0.23,1.005-0.441,1.505-0.646
							c0.526-0.215,1.058-0.412,1.574-0.604c0.137-0.05,0.271-0.104,0.396-0.146c0.647-0.224,1.294-0.422,1.932-0.599
							c0.376-0.104,0.751-0.188,1.121-0.276c0.173-0.039,0.351-0.09,0.521-0.127c0.547-0.117,1.087-0.22,1.621-0.301
							c0.021-0.003,0.043-0.008,0.063-0.01c0.486-0.07,0.97-0.134,1.444-0.179c0.161-0.014,0.316-0.021,0.479-0.03
							c0.35-0.023,0.688-0.05,1.029-0.06c0.152-0.004,0.306-0.006,0.454-0.008c0.354-0.004,0.709,0.002,1.06,0.018
							c0.121,0.004,0.243,0.009,0.363,0.016c0.45,0.021,0.896,0.063,1.34,0.116c0.092,0.016,0.187,0.026,0.275,0.041
							c0.354,0.052,0.714,0.104,1.063,0.175c0.117,0.021,0.236,0.048,0.354,0.068c0.396,0.089,0.798,0.188,1.188,0.293
							c0.022,0.009,0.054,0.016,0.076,0.021c0.409,0.118,0.813,0.258,1.21,0.4c0.104,0.039,0.212,0.082,0.317,0.123
							c0.32,0.125,0.639,0.261,0.945,0.401c0.08,0.037,0.162,0.069,0.244,0.108c0.401,0.189,0.8,0.396,1.188,0.625l-0.007-0.002
							c0.002,0,0.005,0,0.007,0.002l-6.779-4.05c-0.063-0.039-0.132-0.075-0.192-0.109c-0.324-0.186-0.651-0.354-0.987-0.514
							c-0.08-0.041-0.164-0.075-0.245-0.111c-0.188-0.089-0.375-0.177-0.566-0.257c-0.125-0.054-0.254-0.102-0.381-0.146
							c-0.104-0.043-0.213-0.084-0.314-0.123c-0.396-0.145-0.789-0.278-1.191-0.396c-0.007,0-0.014-0.002-0.019-0.002
							c-0.025-0.009-0.058-0.018-0.077-0.021c-0.393-0.104-0.784-0.205-1.188-0.289c-0.116-0.021-0.236-0.051-0.356-0.069
							c-0.122-0.023-0.244-0.058-0.369-0.074c-0.229-0.039-0.459-0.066-0.688-0.104c-0.092-0.014-0.185-0.025-0.273-0.041
							c-0.396-0.049-0.795-0.086-1.197-0.109c-0.046-0.005-0.098-0.005-0.143-0.005c-0.122-0.011-0.244-0.013-0.362-0.017
							c-0.354-0.017-0.701-0.021-1.063-0.019c-0.146,0.002-0.302,0.005-0.452,0.011c-0.119,0.004-0.233,0.002-0.354,0.008
							c-0.226,0.011-0.45,0.029-0.675,0.047c-0.159,0.018-0.316,0.021-0.479,0.035c-0.479,0.045-0.96,0.104-1.446,0.177
							c-0.021,0.006-0.042,0.008-0.063,0.011c-0.003,0-0.007,0-0.008,0c-0.531,0.084-1.068,0.185-1.611,0.302
							c-0.177,0.036-0.354,0.086-0.527,0.127c-0.337,0.08-0.671,0.153-1.012,0.248c-0.033,0.01-0.066,0.02-0.104,0.027
							c-0.64,0.178-1.279,0.371-1.935,0.598c-0.132,0.045-0.266,0.102-0.396,0.146c-0.522,0.188-1.052,0.389-1.581,0.604
							c-0.07,0.023-0.143,0.053-0.211,0.079c-0.431,0.181-0.856,0.366-1.291,0.563c-0.063,0.029-0.12,0.063-0.184,0.086
							c-0.48,0.229-0.974,0.466-1.464,0.716c-0.144,0.073-0.283,0.147-0.431,0.227c-0.55,0.289-1.098,0.586-1.649,0.905
							c-0.576,0.334-1.146,0.685-1.72,1.043c-0.188,0.112-0.366,0.237-0.551,0.354c-0.388,0.254-0.771,0.507-1.156,0.771
							c-0.211,0.146-0.42,0.296-0.633,0.439c-0.354,0.25-0.707,0.507-1.063,0.771c-0.216,0.156-0.429,0.314-0.64,0.479
							c-0.354,0.271-0.71,0.548-1.063,0.83c-0.197,0.156-0.396,0.313-0.596,0.479c-0.396,0.321-0.791,0.655-1.186,0.993
							c-0.145,0.125-0.29,0.244-0.433,0.371c-0.532,0.468-1.063,0.942-1.582,1.436c-0.109,0.104-0.216,0.207-0.325,0.311
							c-0.348,0.328-0.695,0.658-1.041,0.998c-0.051,0.05-0.1,0.104-0.148,0.152c-0.615,0.611-1.229,1.232-1.827,1.875
							c-0.03,0.034-0.063,0.068-0.1,0.104c-0.566,0.604-1.126,1.229-1.678,1.856c-0.057,0.062-0.108,0.116-0.162,0.178
							c-0.218,0.25-0.431,0.515-0.646,0.77c-0.226,0.269-0.448,0.523-0.673,0.798c-0.274,0.336-0.552,0.684-0.825,1.021
							c-0.214,0.271-0.432,0.535-0.644,0.811c-0.039,0.052-0.081,0.101-0.121,0.146c-0.063,0.086-0.126,0.177-0.191,0.266
							c-0.682,0.886-1.344,1.784-1.987,2.698c-0.064,0.097-0.14,0.184-0.202,0.271c-0.027,0.043-0.061,0.09-0.085,0.131
							c-0.622,0.892-1.229,1.793-1.813,2.705c-0.059,0.092-0.117,0.174-0.176,0.264c-0.082,0.132-0.159,0.271-0.242,0.398
							c-0.477,0.75-0.938,1.51-1.39,2.271c-0.071,0.121-0.146,0.236-0.219,0.359c-0.026,0.043-0.055,0.092-0.078,0.137
							c-0.512,0.879-1.005,1.771-1.483,2.664c-0.039,0.07-0.081,0.146-0.119,0.215c-0.078,0.146-0.146,0.303-0.227,0.445
							c-0.376,0.717-0.739,1.438-1.096,2.156c-0.072,0.146-0.152,0.297-0.229,0.441c-0.044,0.095-0.081,0.186-0.125,0.271
							c-0.438,0.912-0.854,1.83-1.261,2.756c-0.014,0.024-0.026,0.06-0.04,0.084c-0.044,0.104-0.081,0.203-0.123,0.301
							c-0.354,0.834-0.697,1.671-1.022,2.514c-0.057,0.136-0.111,0.271-0.166,0.4c-0.045,0.113-0.08,0.229-0.122,0.345
							c-0.376,0.991-0.735,1.983-1.07,2.981c-0.005,0.021-0.014,0.039-0.021,0.063c-0.222,0.654-0.427,1.313-0.626,1.978
							c-0.059,0.182-0.104,0.362-0.158,0.547c-0.108,0.377-0.229,0.754-0.328,1.129c-0.032,0.119-0.063,0.242-0.097,0.359
							c-0.084,0.311-0.164,0.616-0.239,0.926c-0.105,0.41-0.209,0.819-0.311,1.229c-0.074,0.313-0.146,0.627-0.217,0.938
							c-0.048,0.219-0.104,0.438-0.147,0.656c-0.03,0.152-0.059,0.309-0.091,0.465c-0.097,0.469-0.187,0.938-0.271,1.405
							c-0.063,0.323-0.119,0.646-0.173,0.972c-0.082,0.481-0.15,0.967-0.223,1.444c-0.029,0.229-0.07,0.455-0.104,0.683
							c-0.014,0.097-0.021,0.188-0.033,0.287c-0.027,0.223-0.051,0.44-0.074,0.66c-0.053,0.459-0.1,0.92-0.14,1.375
							c-0.021,0.239-0.041,0.479-0.06,0.715c-0.035,0.463-0.063,0.924-0.084,1.383c-0.015,0.209-0.022,0.42-0.031,0.627
							c-0.022,0.658-0.039,1.313-0.035,1.973c0.025,9.644,3.042,16.688,7.797,21.063c7.209,6.633,27.188,26.37,28.236,27.409l6.778,4.048
							c-1.054-1.037-21.025-20.774-28.234-27.406c-4.756-4.375-7.771-11.422-7.802-21.063c0-0.65,0.018-1.313,0.038-1.971
							C663.386,76.586,663.399,76.375,663.406,76.168z"/>
							<path fill="#FF4A1E" d="M699.014,16.957c-19.793,11.426-35.787,39.129-35.725,61.873c0.029,9.643,3.045,16.69,7.799,21.065
								c7.211,6.63,27.186,26.369,28.238,27.407c1.041-2.247,20.836-44.948,27.984-59.865c4.717-9.845,7.682-20.346,7.652-29.987
								C734.901,14.707,718.801,5.533,699.014,16.957z M699.217,88.652c-14.646,8.455-26.6,1.645-26.646-15.179
								c-0.047-16.829,11.828-37.397,26.473-45.854c14.641-8.451,26.594-1.641,26.643,15.188
								C725.733,59.63,713.856,80.199,699.217,88.652z"/>
							<g>
								<polygon fill="#EC0018" points="715.319,56.62 683.973,75.068 683.973,71.528 715.319,53.08 					"/>
								<polygon fill="#55D100" points="715.888,45.146 683.499,64.209 683.499,62.429 715.888,43.366 					"/>
								<path fill="#3E3318" d="M717.701,47.879c0,2.098-1.701,4.8-3.801,6.036L685.771,70.47c-2.1,1.235-3.801,0.536-3.801-1.563l0,0
									c0-2.098,1.701-4.801,3.801-6.037L713.9,46.316C716,45.08,717.701,45.78,717.701,47.879L717.701,47.879z"/>
								<path opacity="0.3" fill="#231D1E" d="M713.9,52.139l-28.129,16.556c-1.794,1.055-3.293,0.694-3.691-0.742
									c-0.069,0.325-0.109,0.644-0.109,0.949c0,2.099,1.702,2.797,3.801,1.563L713.9,53.909c2.1-1.235,3.801-3.938,3.801-6.037
									c0-0.305-0.04-0.576-0.108-0.821C717.192,48.957,715.694,51.083,713.9,52.139z"/>
								<path fill="#BE7300" d="M717.701,42.299c-2.969-5.182-9.85-5.987-17.865-1.27c-8.016,4.717-14.896,13.622-17.865,22.299
									L717.701,42.299z"/>
								<path opacity="0.1" fill="#231D1E" d="M682.986,60.705c-0.375,0.874-0.716,1.75-1.016,2.624l35.73-21.029
									c-0.3-0.521-0.64-0.998-1.015-1.429L682.986,60.705z"/>
								<path fill="#B97100" d="M714.714,61.819c1.218-2.167,1.43-3.662,2.155-6.112l-34.005,20.014
									c0.443,1.613,0.873,2.88,2.091,3.613L714.714,61.819z"/>
								<g>
									<path fill="#AE6C00" d="M693.529,48.949c0.063-0.035,0.209-0.092-0.037,0.011c0.069-0.029,0.136-0.05,0.204-0.07
										c0.051-0.015,0.103-0.027,0.154-0.039c0.084-0.017,0.066-0.014-0.054,0.006c0.029-0.004,0.06-0.008,0.088-0.01
										c0.407-0.043,0.894-0.411,1.136-0.966c0.215-0.494,0.108-1.002-0.297-0.961c-0.378,0.041-0.771,0.132-1.194,0.369
										c-0.452,0.252-0.831,0.876-0.831,1.318C692.698,49.07,693.077,49.202,693.529,48.949L693.529,48.949z"/>
								</g>
								<g>
									<path fill="#AE6C00" d="M700.001,42.761c-0.002,0.403-0.078-0.455,0.498-0.873c-0.448,0.325-0.687,1.033-0.579,1.361
										c0.057,0.174,0.196,0.273,0.381,0.272c0.213-0.001,0.407-0.124,0.641-0.292c0.489-0.354,0.718-1.01,0.72-1.446
										c0.002-0.454-0.38-0.606-0.831-0.34C700.376,41.71,700.003,42.307,700.001,42.761L700.001,42.761z"/>
								</g>
								<g>
									<path fill="#AE6C00" d="M706.142,42.521c0.048-0.027,0.093-0.052,0.14-0.077c-0.152,0.065-0.184,0.08-0.097,0.045
										c0.013-0.003,0.026-0.008,0.041-0.013c-0.089,0.027-0.164,0.026-0.228-0.002c0.345,0.091,0.835-0.153,1.173-0.69
										c0.302-0.478,0.345-1.083,0-1.174c-0.304-0.08-0.634,0.021-1.029,0.252c-0.452,0.265-0.828,0.866-0.828,1.317
										C705.314,42.632,705.69,42.786,706.142,42.521L706.142,42.521z"/>
								</g>
								<g>
									<path fill="#AE6C00" d="M702.66,44.54c-0.024,0.06-0.05,0.119-0.079,0.178c0.123-0.256,0.032-0.062-0.007,0.003
										c-0.037,0.063-0.078,0.122-0.121,0.182c0.178-0.254,0.006-0.018-0.048,0.043c-0.399,0.447-0.52,1.063-0.299,1.311
										c0.236,0.263,0.737,0.077,1.137-0.371c0.349-0.394,0.664-0.892,0.852-1.353c0.212-0.524,0.103-0.961-0.299-0.96
										C703.417,43.574,702.873,44.015,702.66,44.54L702.66,44.54z"/>
								</g>
								<g>
									<path fill="#AE6C00" d="M689.765,53.267c1.072-0.63,1.072-2.291,0-1.66C688.696,52.236,688.696,53.896,689.765,53.267
										L689.765,53.267z"/>
								</g>
								<g>
									<path fill="#AE6C00" d="M697.29,49.28c1.071-0.629,1.071-2.29,0-1.66C696.22,48.25,696.22,49.91,697.29,49.28L697.29,49.28z"
										/>
								</g>
								<g>
									<path fill="#AE6C00" d="M710.458,41.973c1.07-0.63,1.07-2.29,0-1.66C709.388,40.943,709.388,42.603,710.458,41.973
										L710.458,41.973z"/>
								</g>
							</g>
					</g>
				</g>
				<g id="truckMove4">
					<g id="truckMove4Parking">
						<g id="truck2_4_">
							<g>
								<g id="XMLID_1040_">
									<g>
										<g id="XMLID_1160_">
											<path fill="#F7E8CB" d="M18.685,10.037l0.003,0.938c0.001,0.553,0.296,1.061,0.774,1.334c0.48,0.272,1.065,0.27,1.545-0.006
												l0.008-0.004c0.475-0.275,0.768-0.785,0.768-1.334V8.236L18.685,10.037z"/>
										</g>
										<g id="XMLID_1159_">
											<path fill="#FF8000" d="M15.555,11.875l0.016,0.95c0.009,0.547,0.308,1.047,0.785,1.318
												c0.478,0.268,1.062,0.262,1.535-0.014l0.036-0.021c0.476-0.274,0.767-0.785,0.765-1.336l-0.006-2.729L15.555,11.875z"/>
										</g>
										<g id="XMLID_1156_">
											<path fill="#F7E8CB" d="M12.502,13.654l-0.008,0.926c-0.002,0.557,0.291,1.068,0.771,1.346
												c0.479,0.275,1.069,0.275,1.549-0.002c0.465-0.271,0.752-0.771,0.75-1.311l-0.011-2.742L12.502,13.654z"/>
										</g>
										<g id="XMLID_1155_">
											<path fill="#FF8000" d="M9.427,15.449l0.003,0.957c0.001,0.552,0.295,1.063,0.772,1.334
												c0.481,0.273,1.067,0.271,1.544-0.004l0.009-0.004c0.475-0.274,0.766-0.785,0.762-1.336L12.5,13.654L9.427,15.449z"/>
										</g>
										<g id="XMLID_1142_">
											<path fill="#F7E8CB" d="M6.314,17.243l0.003,0.949c0.003,0.549,0.295,1.058,0.773,1.33c0.479,0.273,1.063,0.271,1.541-0.004
												l0.017-0.01c0.478-0.271,0.771-0.781,0.771-1.33l0.008-2.729L6.314,17.243z"/>
										</g>
										<g id="XMLID_1141_">
											<path fill="#FF8000" d="M3.281,19.037v0.923c0,0.554,0.294,1.063,0.773,1.339c0.479,0.273,1.066,0.271,1.546-0.005
												c0.474-0.274,0.763-0.784,0.753-1.334l-0.043-2.718L3.281,19.037z"/>
										</g>
										<g id="XMLID_1138_">
											<path fill="#F7E8CB" d="M0.173,20.849v0.957c0,0.553,0.293,1.063,0.772,1.336c0.481,0.277,1.067,0.274,1.545-0.002
												l0.005-0.004c0.475-0.273,0.768-0.777,0.77-1.326l0.016-2.773L0.173,20.849z"/>
										</g>
										<g id="XMLID_1094_" opacity="0.58">
											<g id="XMLID_1117_">
												<path id="XMLID_1137_" d="M18.688,10.975c0.001,0.553,0.296,1.061,0.775,1.334c0.479,0.272,1.064,0.27,1.543-0.006
													l0.009-0.004c0.475-0.275,0.768-0.785,0.768-1.334V8.236l-3.098,1.801L18.688,10.975z"/>
											</g>
											<g id="XMLID_1114_">
												<path id="XMLID_1116_" d="M18.685,10.046l-3.131,1.827l0.016,0.95c0.009,0.547,0.309,1.047,0.785,1.318
													c0.478,0.268,1.062,0.262,1.535-0.015l0.037-0.021c0.475-0.274,0.766-0.785,0.764-1.336L18.685,10.046z"/>
											</g>
											<g id="XMLID_1109_">
												<path id="XMLID_1113_" d="M12.498,13.655L9.427,15.45l0.002,0.957c0.001,0.552,0.295,1.063,0.772,1.334
													c0.482,0.273,1.067,0.271,1.545-0.004l0.008-0.004c0.475-0.274,0.766-0.785,0.762-1.336l-0.011-1.729
													c0.028,0.521,0.308,0.993,0.761,1.257c0.479,0.275,1.069,0.275,1.549-0.002c0.465-0.271,0.752-0.771,0.75-1.311
													l-0.011-2.742L12.498,13.655z"/>
											</g>
											<g id="XMLID_1105_">
												<path id="XMLID_1108_" d="M3.276,19.038L3.276,19.038v0.923c0,0.554,0.294,1.063,0.773,1.339
													c0.479,0.273,1.066,0.271,1.545-0.004c0.475-0.275,0.764-0.785,0.754-1.335l-0.026-1.716
													c0.022,0.527,0.308,1.012,0.769,1.277c0.479,0.273,1.063,0.271,1.541-0.004l0.017-0.01c0.477-0.271,0.771-0.781,0.771-1.33
													l0.008-2.729l-3.11,1.793l0.002,0.412l-0.008-0.412L3.276,19.038z"/>
											</g>
											<g id="XMLID_1095_">
												<path id="XMLID_1104_" d="M0.172,20.849v0.957c0,0.553,0.294,1.063,0.773,1.336c0.481,0.277,1.067,0.274,1.545-0.002
													l0.007-0.004c0.473-0.273,0.766-0.777,0.768-1.326l0.016-2.773L0.172,20.849z"/>
											</g>
										</g>
									</g>
									<g>
										<g id="XMLID_1090_">
											<polygon id="XMLID_1091_" fill="#F7E8CB" points="0.028,20.721 10.487,26.986 32.098,14.371 21.58,8.191 								"/>
										</g>
										<g id="XMLID_1080_">
											<polygon id="XMLID_1081_" fill="#FFCC33" points="25.868,18.006 15.804,11.535 18.745,9.822 29,16.178 								"/>
										</g>
										<g id="XMLID_1076_">
											<polygon id="XMLID_1077_" fill="#FFCC33" points="19.74,21.586 9.673,15.111 12.571,13.447 22.813,19.792 								"/>
										</g>
										<g id="XMLID_1043_">
											<polygon id="XMLID_1044_" fill="#FFCC33" points="13.595,25.172 3.298,18.853 6.397,17.045 16.625,23.377 								"/>
										</g>
									</g>
								</g>
								<g id="XMLID_997_">
									<polygon id="XMLID_1039_" fill="#F7E8CB" points="12.705,33.801 2.075,21.742 0,20.535 10.864,32.744 						"/>
								</g>
							</g>
							<path id="XMLID_1540_" opacity="0.4" enable-background="new    " d="M46.043,28.172L1.4,53.879
								c-1.371,0.791-1.365,2.775,0.014,3.557L24.81,70.678c0.63,0.355,1.398,0.354,2.025-0.008l44.645-25.709
								c1.371-0.789,1.364-2.773-0.017-3.553L48.07,28.166C47.44,27.808,46.669,27.812,46.043,28.172z"/>
							<g>
								<g id="XMLID_1531_">
									<path id="XMLID_1539_" fill="#111414" d="M58.314,47.398L58.313,47.4l0.054,0.024c0.102,0.056,0.203,0.104,0.309,0.146
										l2.949,1.387c0,0,5.138-7.971,4.021-8.867c-3.03-2.436-4.45-2.082-5.301-1.861c-2.073,0.529-3.767,3.002-3.762,5.611
										C56.587,45.502,57.276,46.801,58.314,47.398z"/>
									<g id="XMLID_1537_">
										<path id="XMLID_1538_" fill="#433734" d="M65.879,43.833c0.006,1.674-1.077,3.291-2.416,3.605
											c-1.337,0.313-2.425-0.794-2.428-2.469c-0.003-1.676,1.079-3.291,2.415-3.605C64.788,41.051,65.875,42.158,65.879,43.833z
											 M63.46,46.461c0.908-0.212,1.643-1.308,1.641-2.443c0-1.141-0.738-1.891-1.646-1.678c-0.907,0.215-1.642,1.309-1.64,2.447
											C61.815,45.926,62.557,46.676,63.46,46.461"/>
									</g>
									<g id="XMLID_1535_">
										<path id="XMLID_1536_" fill="#252B2B" d="M67.224,43.518c0.005,2.609-1.677,5.121-3.758,5.607
											c-2.081,0.49-3.771-1.23-3.776-3.84c-0.005-2.608,1.677-5.123,3.759-5.611C65.528,39.185,67.221,40.907,67.224,43.518z
											 M63.462,47.438c1.339-0.314,2.419-1.93,2.416-3.605s-1.09-2.781-2.428-2.469c-1.336,0.314-2.418,1.928-2.415,3.605
											S62.126,47.751,63.462,47.438"/>
									</g>
									<g id="XMLID_1533_">
										<path id="XMLID_1534_" fill="#675A58" d="M62.861,46.458c0.013,0.004,0.024,0.006,0.038,0.012
											c0.174,0.037,0.367,0.037,0.563-0.01c0.32-0.078,0.617-0.26,0.869-0.518c0.021-0.021,0.045-0.047,0.066-0.068
											c0.06-0.064,0.114-0.137,0.169-0.209c0.044-0.059,0.087-0.127,0.127-0.191c0.017-0.027,0.034-0.057,0.05-0.084
											c0.005-0.016,0.011-0.027,0.021-0.041c0.006-0.018,0.014-0.031,0.022-0.049c0.019-0.033,0.033-0.068,0.049-0.1
											c0.005-0.008,0.011-0.018,0.016-0.029c0.158-0.354,0.251-0.754,0.25-1.154c0-1.141-0.739-1.891-1.646-1.678
											c-0.312,0.072-0.604,0.25-0.852,0.498c0,0-0.001,0-0.001,0.002c-0.035,0.033-0.067,0.066-0.099,0.102
											c-0.058,0.063-0.108,0.135-0.162,0.207c-0.053,0.074-0.101,0.146-0.146,0.223c-0.005,0.014-0.013,0.025-0.021,0.039
											c-0.008,0.016-0.018,0.031-0.025,0.049c-0.005,0.016-0.013,0.027-0.023,0.043c-0.016,0.029-0.026,0.063-0.045,0.09
											c-0.005,0.02-0.013,0.035-0.021,0.053c-0.056,0.123-0.102,0.25-0.14,0.377c-0.007,0.023-0.013,0.051-0.021,0.076
											c-0.057,0.221-0.088,0.455-0.088,0.691c0,0.32,0.059,0.607,0.164,0.855c0.006,0.014,0.012,0.023,0.018,0.039
											c0.049,0.105,0.108,0.205,0.172,0.293c0.007,0.012,0.016,0.021,0.024,0.035C62.368,46.235,62.599,46.394,62.861,46.458z"/>
									</g>
									<path id="XMLID_1532_" fill="#514745" d="M62.923,46.475c0.17,0.033,0.352,0.031,0.539-0.014
										c0.32-0.077,0.617-0.258,0.869-0.516c0.021-0.021,0.045-0.047,0.066-0.07c0.06-0.064,0.114-0.135,0.169-0.209
										c0.044-0.059,0.087-0.125,0.127-0.189c0.017-0.027,0.034-0.059,0.05-0.084c0.005-0.018,0.011-0.029,0.021-0.041
										c0.006-0.018,0.014-0.031,0.022-0.047c0.019-0.037,0.033-0.07,0.049-0.104c0.006-0.008,0.011-0.018,0.016-0.029
										c0.158-0.354,0.251-0.754,0.25-1.154c-0.001-1.115-0.706-1.852-1.583-1.688c0.641,0.129,1.104,0.787,1.105,1.688
										c0.001,0.4-0.091,0.801-0.251,1.154c-0.004,0.01-0.008,0.02-0.013,0.029c-0.016,0.035-0.032,0.07-0.048,0.104
										c-0.006,0.016-0.018,0.029-0.025,0.047c-0.007,0.012-0.014,0.023-0.021,0.041c-0.02,0.025-0.033,0.057-0.05,0.084
										c-0.041,0.064-0.082,0.129-0.129,0.189c-0.055,0.074-0.108,0.145-0.17,0.209c-0.019,0.023-0.044,0.049-0.064,0.07
										c-0.251,0.258-0.549,0.443-0.868,0.516C62.963,46.467,62.942,46.47,62.923,46.475z"/>
								</g>
								<g>
									<g id="XMLID_1522_">
										<path id="XMLID_1530_" fill="#111414" d="M24.118,66.921l-0.002,0.002l0.056,0.025c0.101,0.055,0.202,0.105,0.308,0.146
											l2.952,1.387c0,0,5.135-7.971,4.019-8.869c-3.031-2.436-4.45-2.082-5.302-1.861c-2.07,0.529-3.764,3.002-3.758,5.611
											C22.392,65.026,23.083,66.325,24.118,66.921z"/>
										<g id="XMLID_1528_">
											<path id="XMLID_1529_" fill="#433734" d="M31.687,63.356c0.002,1.674-1.08,3.291-2.417,3.604s-2.424-0.791-2.43-2.469
												c-0.004-1.674,1.078-3.291,2.416-3.604C30.595,60.575,31.683,61.681,31.687,63.356z M29.266,65.985
												c0.906-0.213,1.642-1.31,1.642-2.445c-0.001-1.139-0.741-1.889-1.646-1.676c-0.911,0.213-1.646,1.307-1.643,2.447
												C27.619,65.448,28.358,66.198,29.266,65.985"/>
										</g>
										<g id="XMLID_1526_">
											<path id="XMLID_1527_" fill="#252B2B" d="M33.028,63.04c0.006,2.609-1.676,5.121-3.758,5.609
												c-2.08,0.488-3.771-1.23-3.775-3.84s1.677-5.123,3.758-5.613C31.334,58.708,33.024,60.431,33.028,63.04z M29.268,66.961
												c1.337-0.313,2.419-1.929,2.417-3.604c-0.004-1.676-1.092-2.782-2.428-2.469c-1.341,0.313-2.423,1.928-2.416,3.604
												C26.844,66.17,27.931,67.275,29.268,66.961"/>
										</g>
										<g id="XMLID_1524_">
											<path id="XMLID_1525_" fill="#675A58" d="M28.669,65.983c0.016,0.004,0.025,0.008,0.037,0.01
												c0.175,0.039,0.367,0.039,0.565-0.008c0.316-0.076,0.616-0.258,0.868-0.514c0.02-0.025,0.043-0.051,0.063-0.072
												c0.063-0.066,0.117-0.135,0.17-0.209c0.045-0.061,0.087-0.125,0.127-0.193c0.02-0.027,0.033-0.055,0.051-0.084
												c0.006-0.014,0.015-0.027,0.021-0.041s0.014-0.031,0.023-0.047c0.018-0.033,0.031-0.068,0.05-0.1
												c0.004-0.01,0.009-0.02,0.014-0.029c0.158-0.355,0.25-0.754,0.25-1.156c-0.001-1.139-0.741-1.889-1.646-1.676
												c-0.315,0.074-0.606,0.252-0.854,0.498c0,0-0.001,0-0.001,0.002c-0.032,0.033-0.064,0.064-0.095,0.1
												c-0.062,0.066-0.113,0.137-0.166,0.207c-0.051,0.074-0.1,0.148-0.146,0.225c-0.006,0.012-0.014,0.023-0.021,0.039
												c-0.006,0.018-0.018,0.029-0.026,0.049c-0.006,0.016-0.014,0.025-0.021,0.043c-0.018,0.027-0.03,0.061-0.044,0.09
												c-0.006,0.02-0.016,0.033-0.023,0.053c-0.055,0.121-0.1,0.248-0.137,0.377c-0.006,0.023-0.015,0.053-0.021,0.074
												c-0.059,0.221-0.09,0.459-0.089,0.693c0.001,0.318,0.06,0.605,0.163,0.854c0.006,0.016,0.012,0.025,0.021,0.039
												c0.049,0.107,0.107,0.207,0.172,0.295c0.005,0.013,0.014,0.021,0.022,0.033C28.172,65.758,28.401,65.916,28.669,65.983z"/>
										</g>
										<path id="XMLID_1523_" fill="#514745" d="M28.728,65.997c0.17,0.035,0.352,0.033,0.54-0.012
											c0.317-0.076,0.616-0.258,0.868-0.514c0.02-0.025,0.043-0.051,0.063-0.072c0.063-0.066,0.117-0.135,0.17-0.209
											c0.045-0.061,0.087-0.125,0.127-0.193c0.02-0.025,0.033-0.055,0.052-0.084c0.006-0.014,0.014-0.025,0.021-0.041
											c0.006-0.014,0.014-0.031,0.024-0.047c0.017-0.033,0.03-0.068,0.049-0.1c0.004-0.01,0.009-0.02,0.014-0.029
											c0.158-0.355,0.25-0.754,0.25-1.156c-0.002-1.113-0.705-1.852-1.583-1.688c0.643,0.129,1.106,0.787,1.108,1.688
											c0,0.402-0.095,0.801-0.25,1.156c-0.005,0.008-0.013,0.018-0.017,0.029c-0.016,0.033-0.028,0.068-0.049,0.1
											c-0.005,0.016-0.013,0.033-0.022,0.047c-0.006,0.014-0.014,0.027-0.021,0.041c-0.016,0.029-0.032,0.059-0.049,0.084
											c-0.04,0.068-0.082,0.131-0.127,0.193c-0.054,0.074-0.109,0.143-0.17,0.209c-0.021,0.021-0.043,0.047-0.066,0.072
											c-0.252,0.256-0.549,0.439-0.867,0.514C28.769,65.991,28.747,65.993,28.728,65.997z"/>
									</g>
									<g id="XMLID_1504_">
										<path id="XMLID_1521_" fill="#111414" d="M34.063,61.13l-0.002,0.002l0.055,0.025c0.102,0.055,0.202,0.103,0.306,0.143
											l2.952,1.389c0,0,5.138-7.973,4.021-8.869c-3.031-2.436-4.45-2.08-5.302-1.861c-2.072,0.531-3.766,3.002-3.761,5.611
											C32.336,59.233,33.026,60.532,34.063,61.13z"/>
										<g id="XMLID_1510_">
											<path id="XMLID_1511_" fill="#433734" d="M41.628,57.563c0.003,1.676-1.077,3.293-2.417,3.605
												c-1.337,0.311-2.424-0.793-2.427-2.469s1.079-3.293,2.416-3.605C40.536,54.782,41.624,55.888,41.628,57.563z M39.21,60.194
												c0.906-0.215,1.641-1.312,1.641-2.447c0-1.139-0.739-1.889-1.646-1.676c-0.91,0.213-1.641,1.307-1.64,2.447
												C37.565,59.657,38.305,60.407,39.21,60.194"/>
										</g>
										<g id="XMLID_1508_">
											<path id="XMLID_1509_" fill="#252B2B" d="M42.973,57.247c0.005,2.611-1.68,5.121-3.762,5.609
												c-2.077,0.49-3.768-1.23-3.772-3.838c-0.005-2.611,1.678-5.125,3.758-5.613C41.278,52.915,42.97,54.638,42.973,57.247z
												 M39.211,61.17c1.336-0.313,2.42-1.929,2.417-3.605c-0.004-1.676-1.092-2.782-2.428-2.469
												c-1.337,0.313-2.419,1.928-2.416,3.605C36.787,60.377,37.874,61.483,39.211,61.17"/>
										</g>
										<g id="XMLID_1506_">
											<path id="XMLID_1507_" fill="#675A58" d="M38.609,60.192c0.013,0.002,0.022,0.006,0.038,0.008
												c0.174,0.041,0.364,0.039,0.563-0.006c0.318-0.078,0.615-0.26,0.867-0.516c0.023-0.023,0.045-0.049,0.067-0.072
												c0.06-0.064,0.113-0.135,0.169-0.207c0.045-0.063,0.087-0.127,0.127-0.193c0.018-0.027,0.033-0.057,0.049-0.086
												c0.005-0.014,0.013-0.023,0.021-0.039s0.016-0.033,0.023-0.049c0.018-0.035,0.033-0.064,0.049-0.1
												c0.004-0.01,0.009-0.02,0.017-0.029c0.156-0.354,0.251-0.752,0.25-1.156c0-1.139-0.739-1.889-1.646-1.676
												c-0.313,0.074-0.604,0.252-0.852,0.5H38.35c-0.034,0.035-0.066,0.068-0.098,0.102c-0.059,0.064-0.11,0.135-0.165,0.205
												c-0.052,0.076-0.099,0.148-0.144,0.225c-0.005,0.016-0.013,0.023-0.021,0.039c-0.007,0.018-0.016,0.029-0.024,0.049
												c-0.005,0.016-0.015,0.027-0.021,0.043c-0.016,0.031-0.028,0.063-0.045,0.094c-0.005,0.016-0.013,0.031-0.021,0.051
												c-0.056,0.121-0.103,0.246-0.14,0.377c-0.007,0.021-0.014,0.051-0.02,0.072c-0.058,0.221-0.09,0.459-0.089,0.693
												c0.001,0.318,0.059,0.607,0.163,0.854c0.006,0.016,0.012,0.027,0.019,0.041c0.049,0.107,0.108,0.205,0.171,0.293
												c0.007,0.013,0.017,0.021,0.025,0.033C38.116,59.965,38.347,60.124,38.609,60.192z"/>
										</g>
										<path id="XMLID_1505_" fill="#514745" d="M38.67,60.206c0.172,0.033,0.354,0.031,0.541-0.012
											c0.318-0.078,0.615-0.26,0.867-0.516c0.023-0.023,0.045-0.049,0.067-0.072c0.06-0.064,0.116-0.135,0.169-0.207
											c0.045-0.063,0.087-0.127,0.127-0.193c0.018-0.027,0.033-0.057,0.049-0.086c0.005-0.014,0.013-0.023,0.022-0.039
											c0.006-0.016,0.014-0.033,0.021-0.049c0.021-0.035,0.033-0.066,0.049-0.1c0.004-0.01,0.012-0.02,0.017-0.029
											c0.158-0.354,0.251-0.752,0.25-1.156c-0.002-1.111-0.705-1.85-1.583-1.686c0.641,0.129,1.104,0.785,1.105,1.686
											c0,0.404-0.092,0.802-0.25,1.156c-0.005,0.008-0.009,0.018-0.014,0.029c-0.016,0.035-0.032,0.066-0.049,0.1
											c-0.005,0.016-0.016,0.033-0.024,0.049c-0.005,0.016-0.013,0.025-0.021,0.039c-0.019,0.029-0.031,0.059-0.05,0.086
											c-0.038,0.066-0.082,0.13-0.129,0.193c-0.054,0.072-0.106,0.143-0.17,0.207c-0.019,0.023-0.043,0.049-0.063,0.072
											c-0.252,0.256-0.549,0.439-0.868,0.516C38.713,60.198,38.69,60.2,38.67,60.206z"/>
									</g>
								</g>
								<g>
									<g>
										<polygon fill="#DBD1C2" points="26.595,32.374 26.595,10.491 47.362,22.479 47.362,44.571 							"/>
										<g>
											<polygon fill="#60BDD3" points="47.362,34.306 47.362,43.034 46.952,42.842 46.952,34.112 								"/>
											<polygon fill="#E05934" points="47.362,35.81 47.362,44.571 46.952,44.331 46.952,35.618 								"/>
										</g>
										<polygon fill="#EAE1D2" points="47.362,22.479 26.595,10.491 39.394,3.129 60.161,15.12 							"/>
										<g>
											<polygon fill="#806061" points="46.756,22.806 46.754,44.571 47.037,44.409 47.037,22.644 								"/>
											<polygon fill="#806061" points="26.872,10.958 47.037,22.644 46.756,22.806 26.595,11.12 								"/>
										</g>
										<path fill="#CC8800" d="M47.362,22.485v22.092l2.467-1.395c-0.002-0.066-0.004-0.133-0.004-0.197
											c0-3.035,2.145-6.736,4.789-8.262c2.646-1.531,4.79-0.307,4.79,2.729c0,0.064-0.003,0.135-0.005,0.201l4.915-2.838V24.632
											l-4.153-9.512L47.362,22.485z"/>
										<path fill="#CC8800" d="M64.314,34.815V26.03l-16.952,9.785v8.758l2.467-1.396c-0.002-0.064-0.004-0.131-0.004-0.195
											c0-3.035,2.145-6.736,4.789-8.264c2.646-1.527,4.79-0.305,4.79,2.73c0,0.066-0.003,0.135-0.005,0.203L64.314,34.815z"/>
										<polygon fill="#FFFFFF" points="60.081,15.104 47.31,22.452 47.362,22.479 47.362,22.967 60.333,15.513 60.161,15.12 
											39.394,3.129 39.368,3.147 							"/>
										<g>
											<g>
												<path fill="#549AAD" d="M60.509,17.155v8.795c0,0.133,0.15,0.221,0.271,0.152l2.905-1.682
													c0.079-0.047,0.108-0.145,0.074-0.229l-3.07-7.076C60.647,17.021,60.511,17.051,60.509,17.155z"/>
												<path fill="#549AAD" d="M59.751,16.647l-9.313,5.361c-0.053,0.029-0.084,0.084-0.084,0.146v9.695
													c0,0.126,0.141,0.209,0.252,0.146l9.313-5.396c0.054-0.031,0.084-0.084,0.084-0.146v-9.666
													C60.003,16.659,59.862,16.577,59.751,16.647z"/>
											</g>
											<g>
												<path fill="#96D5E6" d="M60.508,25.933v0.012c0,0.135,0.15,0.223,0.271,0.154l2.905-1.682
													c0.079-0.045,0.111-0.145,0.074-0.229l-3.07-7.076c-0.025-0.057-0.084-0.068-0.127-0.047l3.009,6.938
													c0.036,0.082,0.005,0.182-0.075,0.229l-2.902,1.68C60.563,25.926,60.536,25.935,60.508,25.933z"/>
												<path fill="#96D5E6" d="M50.353,31.825v0.021c0,0.128,0.141,0.209,0.252,0.146l9.313-5.395
													c0.054-0.033,0.084-0.084,0.084-0.146v-9.668c0-0.104-0.092-0.176-0.188-0.164v9.645c0,0.06-0.031,0.114-0.084,0.146
													l-9.313,5.395C50.396,31.815,50.374,31.821,50.353,31.825z"/>
											</g>
										</g>
									</g>
									<polygon fill="#EAE1D2" points="49.829,21.717 49.829,43.176 49.672,43.267 49.672,21.81 						"/>
									<polygon fill="#EAE1D2" points="60.333,15.513 47.362,22.967 47.362,23.159 60.392,15.646 						"/>
									<path fill="#FFFFFF" d="M49.829,21.757v0.178v20.832c0.029-0.734,0.156-1.301,0.156-1.301V21.845l10.479-6.029l-0.073-0.17
										L49.829,21.757z"/>
									<path fill="#EB6A70" d="M64.972,28.461"/>
									<g>
										<path fill="#FBE97A" d="M63.622,28.084V31.5l0.822-0.457c0.031-0.02,0.051-0.051,0.051-0.088v-3.354L63.622,28.084
											L63.622,28.084z"/>
										<polygon fill="#E5C422" points="63.501,28.017 63.622,28.086 63.622,31.5 63.501,31.431 							"/>
										<polygon fill="#E5C422" points="63.622,28.086 64.495,27.601 64.314,27.497 64.314,27.562 63.501,28.017 							"/>
									</g>
									<path fill="#FF708A" d="M22.938,36.757l-0.173,30.07l1.218-0.99c-0.001-0.064,0.001-0.133-0.004-0.199
										c-0.416-6.602,10.352-10.682,12.998-12.207c2.646-1.527,6.478-1.857,6.478,1.178c0,0.07,0.002-0.414,0-0.344l3.343-1.74
										V22.909L22.938,36.757z"/>
									<g>
										<polygon fill="#FF849C" points="1.718,24.383 2.003,54.467 22.772,66.458 22.938,36.758 							"/>
										<g>
											<polygon fill="#FFC2DE" points="2.003,48.993 22.772,60.942 22.766,67.043 2.003,54.897 								"/>
										</g>
										<g>
											<path fill="#FBE97A" d="M6.076,57.462v-2.047c0-0.254,0.157-0.373,0.35-0.264l8.617,4.979
												c0.194,0.107,0.349,0.406,0.349,0.66v2.049c0,0.254-0.157,0.371-0.349,0.264l-8.617-4.979
												C6.231,58.011,6.077,57.715,6.076,57.462z"/>
											<path fill="#FCEC8B" d="M15.288,63.102l0.215-0.125c0.072-0.043,0.119-0.137,0.119-0.275V60.65
												c0-0.254-0.154-0.551-0.346-0.658l-8.621-4.979c-0.098-0.059-0.187-0.055-0.25,0l-0.169,0.104l0,0
												c0.054-0.016,0.12-0.008,0.188,0.033l8.617,4.979c0.194,0.107,0.349,0.406,0.349,0.66v2.049
												C15.391,62.963,15.352,63.056,15.288,63.102z"/>
										</g>
										<g>
											<polygon fill="#DBD1C2" points="4.503,52.047 4.503,32.868 19.683,41.644 19.683,60.808 								"/>
											<polygon fill="#FFFFFF" points="19.495,60.726 4.691,52.185 4.691,33.194 19.495,41.754 								"/>
											<polygon fill="#EAE1D2" points="19.308,60.606 4.881,52.282 4.881,33.522 19.308,41.86 								"/>
											<polygon fill="#FFEDFF" points="19.495,57.788 4.691,49.22 4.691,52.618 19.495,61.183 								"/>
											<g>
												<polygon fill="#DBD1C2" points="11.989,37.636 12.196,37.756 12.196,56.487 11.989,56.37 									"/>
												<polygon fill="#DBD1C2" points="12.191,37.522 12.397,37.642 12.196,37.756 11.989,37.636 									"/>
												<g>
													<polygon fill="#549AAD" points="11.179,39.31 5.929,36.278 5.929,42.301 11.179,45.334 										"/>
												</g>
												<polygon fill="#96D5E6" points="5.929,36.278 5.929,42.301 11.179,45.334 11.179,45.036 6.116,42.112 6.116,36.386 
																						"/>
												<polygon fill="#549AAD" points="13.011,40.37 18.261,43.397 18.261,49.422 13.011,46.39 									"/>
												<polygon fill="#96D5E6" points="13.011,40.37 13.011,46.39 18.261,49.422 18.261,49.125 13.198,46.202 13.198,40.476 
																						"/>
											</g>
										</g>
									</g>
									<g>
										<g id="XMLID_1502_">
											<polygon id="XMLID_1503_" fill="#FF849C" points="38.787,3.049 1.718,24.383 22.938,36.758 59.931,15.372 								"/>
										</g>
										<polygon id="XMLID_1501_" fill="#AFAFAF" points="64.905,12.459 61.615,18.45 59.931,15.372 							"/>
										<polygon id="XMLID_1500_" fill="#F4F4F4" points="64.905,12.375 43.688,0 38.781,3.024 59.998,15.399 							"/>
									</g>
									<g>
										<g id="XMLID_1498_">
											<path id="XMLID_1499_" fill="#FF708A" d="M44.48,24.317l15.451-8.914l5.36,9.104l5.229,3.865v11.17l-3.187,1.703
												c0.01-0.127,0.018-0.254,0.019-0.377c0.006-3.279-3.575-2.768-6.587-0.916c-3.019,1.854-3.196,4.467-3.979,7.113
												l-11.908,6.932L44.48,24.317z"/>
										</g>
										<polygon fill="#FF4A71" points="56.322,18.478 56.202,29.368 63.804,25.104 58.956,16.774 							"/>
										<g id="XMLID_1496_">
											<polygon id="XMLID_1497_" fill="#47BEBF" points="62.599,24.883 55.377,28.808 57.402,18.653 58.575,17.915 								"/>
										</g>
										<g id="XMLID_1494_" opacity="0.28">
											<polygon id="XMLID_1495_" points="57.399,20.013 57.399,18.655 58.571,17.916 62.605,24.883 61.838,25.312 58.45,19.37 
																				"/>
										</g>
										<g id="XMLID_1489_">
											<g id="XMLID_1492_" opacity="0.28">
												<path id="XMLID_1493_" d="M51.235,36.777c-0.299,0.166-0.591,0.158-0.767-0.021c-0.178-0.174-0.206-0.493-0.081-0.836
													c0.125-0.342,0.388-0.654,0.691-0.814l1.911-1.002c0.285-0.15,0.563-0.137,0.723,0.037c0.164,0.172,0.192,0.48,0.073,0.803
													s-0.364,0.619-0.646,0.771L51.235,36.777z"/>
											</g>
											<g id="XMLID_1490_">
												<path id="XMLID_1491_" fill="#F4F4F4" d="M51.651,36.035c-0.297,0.165-0.59,0.157-0.767-0.021
													c-0.178-0.176-0.206-0.494-0.081-0.836c0.127-0.344,0.389-0.656,0.692-0.814l1.911-1.004
													c0.286-0.15,0.563-0.135,0.724,0.037c0.163,0.174,0.191,0.479,0.072,0.803c-0.118,0.322-0.362,0.617-0.646,0.773
													L51.651,36.035z"/>
											</g>
										</g>
										<g>
											<g>
												<polygon fill="#FF4A71" points="48.122,23.217 48.131,33.776 58.239,28.233 58.44,17.11 									"/>
												<g id="XMLID_1487_">
													<polygon id="XMLID_1488_" fill="#47BEBF" points="49.251,32.125 57.422,27.702 57.515,18.554 49.251,23.388 										"/>
												</g>
												<g id="XMLID_1480_" opacity="0.31">
													<g id="XMLID_1485_">
														<path id="XMLID_1486_" fill="#FFFFFF" d="M57.476,22.175l-0.769-0.648c-0.33-0.281-0.86-0.248-1.19,0.07
															c-0.329,0.316-0.329,0.801,0,1.076l1.938,1.643L57.476,22.175z"/>
													</g>
													<g id="XMLID_1483_">
														<path id="XMLID_1484_" fill="#FFFFFF" d="M52.683,24.562l4.133,3.494l0.603-0.354l0.015-1.283l-3.558-3.01
															c-0.328-0.279-0.86-0.246-1.189,0.07C52.356,23.795,52.356,24.28,52.683,24.562z"/>
													</g>
													<g id="XMLID_1481_">
														<path id="XMLID_1482_" fill="#FFFFFF" d="M51.562,27.864l2.197,1.861l1.506-0.887l-2.515-2.123
															c-0.327-0.277-0.859-0.248-1.188,0.07C51.231,27.103,51.231,27.584,51.562,27.864z"/>
													</g>
												</g>
											</g>
											<g id="XMLID_1478_" opacity="0.28">
												<polyline id="XMLID_1479_" points="49.169,24.405 57.503,19.565 57.515,18.595 49.251,23.388 									"/>
											</g>
										</g>
										<path fill="#FFC2DE" d="M22.772,67.043v-6.076l21.87-12.635l8.572-4.988l17.303-9.98v5.947l-3.484,1.945
											c-0.782-1.749-2.376-2.703-4.219-2.27c-2.609,0.613-4.718,3.766-4.712,7.039c0,0.121,0.009,0.237,0.016,0.355l-4.899,2.92
											l-8.573,5.111l-1.548,0.898c-0.889-1.645-2.32-2.668-4.104-2.455c-2.501,0.299-5.088,3.826-5.088,6.713
											c0,0.357,0.022,0.707,0.06,1.051l-0.808,0.471c-0.784-1.752-2.377-2.709-4.222-2.275c-2.608,0.611-4.718,3.768-4.712,7.039
											c0,0.125,0.01,0.244,0.016,0.367L22.772,67.043L22.772,67.043z"/>
										<g id="XMLID_1475_" opacity="0.2">
											<g id="XMLID_1476_">
												<path id="XMLID_1477_" fill="#FF387D" d="M48.729,33.825l14.847-8.305v11.17c-0.974,0.352-2.619,1.256-4.636,3.57
													c-0.305,0.35-0.612,0.727-0.912,1.115c-1.256,1.637-2.311,3.557-2.813,4.523l-6.487,3.824v-1.275l0.009-4.412
													L48.729,33.825 M48.181,33.495l0.005,11.178l-0.008,4.41v1.6l7.098-4.184c0,0,1.256-2.613,2.837-4.668
													c0.283-0.373,0.559-0.707,0.83-1.02c3.015-3.463,5.187-3.51,5.187-3.51V24.573L48.181,33.495L48.181,33.495z"/>
											</g>
										</g>
									</g>
									<g>
										<g id="XMLID_1473_">
											<polygon id="XMLID_1474_" fill="#939393" points="71.725,37.463 71.725,40.062 68.212,42.006 68.212,39.347 								"/>
										</g>
										<g id="XMLID_1471_">
											<polygon id="XMLID_1472_" fill="#727272" points="67.159,38.681 67.159,41.278 68.212,42.006 68.212,39.347 								"/>
										</g>
										<polygon id="XMLID_1470_" fill="#828282" points="71.725,37.463 70.485,36.799 67.159,38.688 68.234,39.34 							"/>
									</g>
								</g>
								<g>
									<g id="XMLID_1468_">
										<polygon id="XMLID_1469_" fill="#FFD6F2" points="32.987,25.444 6.327,22.788 6.381,24.833 22.528,33.788 33.033,27.338 
																		"/>
									</g>
									<g id="XMLID_1466_">
										<polygon id="XMLID_1467_" fill="#FFE5FF" points="6.329,22.735 6.381,24.833 22.532,33.735 22.655,31.752 							"/>
									</g>
									<g id="XMLID_1464_">
										<polygon id="XMLID_1465_" fill="#FFEDFF" points="16.7,16.624 6.33,22.745 22.684,31.761 32.987,25.444 							"/>
									</g>
								</g>
								<g>
									<g>
										<path fill="#FFD6F2" d="M29.329,49.883c-0.018,1.08-0.221,2.119-0.608,3.111c-0.417,1.064-0.955,1.82-1.614,2.268
											l-1.535,1.039c-0.313,0.213-0.564,0.255-0.75,0.123c-0.201-0.144-0.298-0.465-0.29-0.965l0.074-4.773
											c0.007-0.471,0.121-0.92,0.339-1.346c0.2-0.395,0.447-0.691,0.743-0.893l1.542-1.045c0.682-0.462,1.213-0.432,1.597,0.091
											C29.18,47.974,29.346,48.771,29.329,49.883z M27.74,50.926c0.008-0.44-0.045-0.766-0.159-0.976
											c-0.127-0.245-0.315-0.284-0.565-0.114l-0.695,0.471c-0.087,0.059-0.131,0.141-0.132,0.244l-0.047,2.93
											c-0.001,0.082,0.01,0.123,0.031,0.123c0.005-0.004,0.029-0.019,0.075-0.051l0.716-0.486c0.25-0.169,0.443-0.473,0.581-0.913
											C27.671,51.772,27.735,51.363,27.74,50.926z"/>
										<path fill="#FFD6F2" d="M34.428,49.138c-0.006,0.396-0.093,0.77-0.259,1.126c-0.169,0.35-0.375,0.607-0.621,0.775
											c-0.237,0.16-0.436,0.1-0.597-0.184l-0.895-1.57l-0.682,0.461l-0.025,1.621c-0.005,0.357-0.087,0.694-0.245,1.006
											c-0.157,0.322-0.345,0.555-0.563,0.704c-0.232,0.157-0.417,0.179-0.556,0.065c-0.146-0.105-0.216-0.344-0.211-0.708
											l0.085-5.356c0.007-0.461,0.108-0.895,0.303-1.299c0.186-0.377,0.427-0.666,0.723-0.865l2.1-1.425
											c0.465-0.315,0.837-0.312,1.12,0.004c0.264,0.301,0.392,0.829,0.38,1.59c-0.007,0.41-0.072,0.856-0.197,1.34
											c-0.134,0.539-0.31,0.969-0.525,1.286l0.532,0.889C34.387,48.748,34.431,48.93,34.428,49.138z M32.915,46.146
											c0.005-0.24-0.071-0.305-0.225-0.203l-1.256,0.854c-0.009,0.005-0.015,0.02-0.014,0.041l-0.011,0.627l1.275-0.863
											C32.837,46.498,32.914,46.347,32.915,46.146z"/>
										<path fill="#FFD6F2" d="M36.52,47.818c-0.004,0.348-0.091,0.699-0.253,1.046c-0.159,0.344-0.347,0.589-0.564,0.737
											c-0.215,0.145-0.399,0.152-0.554,0.021c-0.149-0.143-0.224-0.383-0.218-0.726l0.09-5.693c0.005-0.349,0.093-0.699,0.261-1.05
											c0.163-0.347,0.353-0.595,0.571-0.742c0.214-0.144,0.396-0.146,0.546-0.005c0.146,0.139,0.218,0.375,0.212,0.719
											L36.52,47.818z"/>
										<path fill="#FFD6F2" d="M41.771,44.16c-0.007,0.395-0.093,0.771-0.26,1.127c-0.163,0.354-0.371,0.617-0.62,0.787
											c-0.31,0.21-0.554,0.184-0.734-0.079l-1.372-1.968l-0.035,2.258c-0.006,0.379-0.086,0.734-0.24,1.059
											c-0.152,0.331-0.348,0.578-0.583,0.737c-0.231,0.157-0.418,0.169-0.555,0.033c-0.143-0.14-0.211-0.392-0.203-0.758
											l0.088-5.58c0.006-0.401,0.087-0.778,0.24-1.126c0.149-0.352,0.35-0.613,0.6-0.782c0.317-0.214,0.563-0.19,0.734,0.078
											l1.396,2.116l0.039-2.547c0.006-0.351,0.094-0.689,0.267-1.022c0.152-0.286,0.337-0.503,0.557-0.653
											c0.227-0.154,0.407-0.189,0.546-0.115c0.157,0.1,0.231,0.334,0.227,0.697L41.771,44.16z"/>
										<path fill="#FFD6F2" d="M46.83,40.742c-0.007,0.379-0.083,0.745-0.232,1.097c-0.154,0.355-0.35,0.613-0.586,0.772
											c-0.271,0.185-0.488,0.137-0.645-0.15l-1.029-1.891l-0.396,0.778l-0.022,1.442c-0.007,0.379-0.083,0.734-0.232,1.064
											c-0.153,0.324-0.35,0.568-0.585,0.727c-0.236,0.162-0.423,0.173-0.561,0.038c-0.146-0.128-0.217-0.38-0.211-0.753
											l0.091-5.682c0.005-0.371,0.085-0.724,0.239-1.058c0.145-0.318,0.334-0.558,0.571-0.718c0.235-0.16,0.429-0.181,0.575-0.061
											c0.143,0.133,0.21,0.386,0.203,0.76l-0.018,1.073l1.684-3.186c0.143-0.258,0.312-0.456,0.508-0.587
											c0.213-0.144,0.394-0.143,0.54,0.009c0.137,0.15,0.203,0.398,0.197,0.741c-0.006,0.424-0.125,0.852-0.357,1.281l-0.931,1.737
											l1.067,1.965C46.79,40.313,46.834,40.511,46.83,40.742z"/>
									</g>
									<g>
										<path fill="#FFD6F2" d="M28.944,42.193c-0.003,0.189-0.049,0.427-0.139,0.713c-0.38,1.195-1.039,2.111-1.978,2.746
											c-0.696,0.473-1.244,0.513-1.639,0.113c-0.392-0.406-0.576-1.172-0.559-2.295c0.017-1.063,0.247-2.086,0.693-3.074
											c0.453-0.986,1.014-1.705,1.682-2.157c0.937-0.636,1.553-0.603,1.854,0.09c0.074,0.188,0.11,0.383,0.106,0.586
											c-0.006,0.329-0.074,0.632-0.209,0.911c-0.128,0.279-0.291,0.485-0.491,0.621c-0.181,0.123-0.39,0.084-0.625-0.115
											c-0.231-0.209-0.465-0.234-0.698-0.076c-0.259,0.175-0.47,0.499-0.636,0.971c-0.153,0.423-0.231,0.854-0.239,1.299
											c-0.009,0.492,0.049,0.838,0.172,1.041c0.134,0.234,0.34,0.258,0.612,0.072c0.192-0.129,0.374-0.346,0.547-0.65
											c0.139-0.278,0.274-0.555,0.407-0.823c0.16-0.302,0.316-0.503,0.473-0.609c0.2-0.135,0.365-0.147,0.494-0.036
											C28.894,41.641,28.95,41.864,28.944,42.193z"/>
										<path fill="#FFD6F2" d="M32.793,40.514c-0.005,0.309-0.073,0.614-0.21,0.921c-0.131,0.31-0.293,0.526-0.491,0.661
											c-0.201,0.137-0.366,0.143-0.499,0.02c-0.139-0.119-0.207-0.335-0.201-0.652l0.022-1.442c0.005-0.328-0.069-0.44-0.221-0.338
											c-0.104,0.071-0.201,0.179-0.298,0.331c-0.11,0.162-0.169,0.311-0.17,0.445l-0.021,1.451c-0.005,0.336-0.08,0.66-0.223,0.969
											c-0.134,0.298-0.307,0.517-0.516,0.658c-0.2,0.137-0.36,0.135-0.475-0.008c-0.123-0.135-0.182-0.363-0.177-0.678l0.081-5.154
											c0.005-0.328,0.074-0.637,0.209-0.93c0.131-0.287,0.301-0.502,0.509-0.643c0.186-0.127,0.343-0.131,0.476-0.014
											c0.135,0.121,0.202,0.328,0.196,0.625l-0.022,1.384c0.157-0.22,0.35-0.405,0.573-0.558c0.469-0.318,0.836-0.371,1.105-0.16
											c0.264,0.211,0.39,0.692,0.377,1.439L32.793,40.514z"/>
										<path fill="#FFD6F2" d="M36.758,35.95c-0.006,0.417-0.102,0.798-0.28,1.14c0.146,0.025,0.216,0.145,0.214,0.354
											c-0.008,0.496-0.232,1.043-0.677,1.645c-0.348,0.476-0.694,0.83-1.038,1.064c-0.501,0.34-0.918,0.408-1.253,0.211
											c-0.369-0.209-0.546-0.709-0.534-1.494c0.013-0.82,0.205-1.585,0.576-2.297c0.339-0.66,0.769-1.167,1.29-1.521
											c0.417-0.283,0.795-0.369,1.135-0.261C36.58,34.923,36.769,35.312,36.758,35.95z M35.626,37.885l-1.102,0.747
											c0.076,0.167,0.232,0.173,0.475,0.007C35.233,38.48,35.443,38.229,35.626,37.885z M35.322,36.645
											c-0.045-0.143-0.167-0.146-0.364-0.013c-0.132,0.089-0.235,0.246-0.312,0.47L35.322,36.645z"/>
										<path fill="#FFD6F2" d="M39.869,32.805c-0.006,0.277-0.063,0.548-0.179,0.819c-0.118,0.274-0.264,0.469-0.441,0.588
											c-0.036,0.024-0.098,0.064-0.178,0.111c-0.078,0.04-0.136,0.074-0.173,0.098c-0.135,0.091-0.269,0.267-0.403,0.532
											l-0.028,1.827c-0.006,0.31-0.075,0.599-0.208,0.869c-0.132,0.27-0.291,0.467-0.484,0.597
											c-0.197,0.135-0.358,0.151-0.482,0.048c-0.128-0.094-0.189-0.294-0.186-0.602l0.049-3.016
											c0.004-0.315,0.067-0.612,0.189-0.887c0.123-0.284,0.281-0.491,0.479-0.624c0.233-0.158,0.425-0.17,0.571-0.038
											c0.227-0.379,0.453-0.647,0.682-0.801C39.615,31.958,39.88,32.119,39.869,32.805z"/>
										<path fill="#FFD6F2" d="M42.961,30.708c-0.004,0.276-0.063,0.548-0.178,0.819c-0.116,0.271-0.264,0.468-0.44,0.588
											c-0.037,0.025-0.097,0.063-0.178,0.111c-0.078,0.039-0.136,0.07-0.174,0.098c-0.135,0.092-0.269,0.268-0.403,0.532
											l-0.029,1.826c-0.004,0.309-0.074,0.598-0.208,0.868c-0.13,0.268-0.291,0.466-0.484,0.597
											c-0.196,0.135-0.357,0.15-0.481,0.049c-0.128-0.094-0.188-0.295-0.185-0.604l0.048-3.018c0.004-0.314,0.067-0.61,0.189-0.885
											c0.123-0.284,0.282-0.492,0.478-0.624c0.233-0.158,0.425-0.171,0.573-0.04c0.225-0.378,0.453-0.646,0.683-0.802
											C42.707,29.864,42.971,30.024,42.961,30.708z"/>
										<path fill="#FFD6F2" d="M46.712,28.246c-0.003,0.182-0.038,0.386-0.101,0.607l-1.005,3.424
											c-0.377,1.287-0.787,2.081-1.229,2.38c-0.829,0.562-1.235,0.418-1.223-0.429c0.006-0.297,0.072-0.602,0.197-0.912
											c0.126-0.312,0.287-0.534,0.479-0.665c0.004-0.003,0.035-0.025,0.093-0.074c0.045-0.044,0.08-0.067,0.104-0.069
											c-0.313-0.567-0.551-1.021-0.714-1.363c-0.064-0.135-0.093-0.332-0.089-0.588c0.004-0.294,0.087-0.6,0.245-0.914
											c0.15-0.302,0.318-0.515,0.504-0.641c0.245-0.167,0.432-0.11,0.556,0.172l0.453,0.981l0.407-1.523
											c0.13-0.482,0.34-0.819,0.631-1.017c0.196-0.133,0.361-0.142,0.493-0.026C46.648,27.701,46.717,27.917,46.712,28.246z"/>
									</g>
								</g>
							</g>
						</g>
					</g>
					<g id="truck4L">
						<g id="truck2_3_">
							<path id="XMLID_1202_" opacity="0.4" enable-background="new    " d="M24.433,28.166L1.04,41.408
								c-1.381,0.779-1.388,2.764-0.017,3.553L45.668,70.67c0.627,0.361,1.396,0.363,2.025,0.008l23.396-13.242
								c1.379-0.781,1.385-2.766,0.014-3.557L26.46,28.172C25.834,27.812,25.063,27.808,24.433,28.166z"/>
							<g>
								<g id="XMLID_938_">
									<path id="XMLID_996_" fill="#111414" d="M15.919,43.84c0.005-2.609-1.688-5.082-3.762-5.611
										c-0.851-0.221-2.271-0.574-5.301,1.861c-1.116,0.896,4.021,8.867,4.021,8.867l2.949-1.387c0.105-0.041,0.207-0.09,0.309-0.146
										l0.054-0.024l-0.001-0.002C15.227,46.801,15.916,45.502,15.919,43.84z"/>
									<g id="XMLID_992_">
										<path id="XMLID_993_" fill="#433734" d="M9.053,41.364c1.336,0.314,2.418,1.93,2.415,3.605
											c-0.003,1.675-1.091,2.781-2.428,2.469c-1.339-0.314-2.422-1.932-2.416-3.605C6.628,42.158,7.715,41.051,9.053,41.364z
											 M9.043,46.461c0.903,0.215,1.645-0.535,1.646-1.674c0.002-1.139-0.732-2.232-1.64-2.447
											c-0.908-0.213-1.646,0.537-1.646,1.678C7.4,45.153,8.135,46.249,9.043,46.461"/>
									</g>
									<g id="XMLID_978_">
										<path id="XMLID_979_" fill="#252B2B" d="M9.055,39.674c2.082,0.488,3.764,3.003,3.759,5.611
											c-0.005,2.609-1.695,4.33-3.776,3.84c-2.081-0.486-3.763-2.998-3.758-5.607C5.282,40.907,6.975,39.185,9.055,39.674z
											 M9.041,47.438c1.336,0.313,2.424-0.791,2.427-2.469s-1.079-3.291-2.415-3.605c-1.338-0.313-2.425,0.793-2.428,2.469
											S7.702,47.124,9.041,47.438"/>
									</g>
									<g id="XMLID_974_">
										<path id="XMLID_975_" fill="#675A58" d="M10.312,46.011c0.009-0.014,0.018-0.023,0.024-0.035
											c0.063-0.088,0.123-0.188,0.172-0.293c0.006-0.016,0.012-0.025,0.018-0.039c0.105-0.248,0.164-0.535,0.164-0.855
											c0-0.236-0.031-0.471-0.088-0.691c-0.008-0.025-0.014-0.053-0.021-0.076c-0.038-0.127-0.084-0.254-0.14-0.377
											c-0.008-0.018-0.016-0.033-0.021-0.053c-0.019-0.027-0.029-0.061-0.045-0.09c-0.011-0.016-0.019-0.027-0.023-0.043
											c-0.008-0.018-0.018-0.033-0.025-0.049c-0.008-0.014-0.016-0.025-0.021-0.039c-0.045-0.076-0.093-0.148-0.146-0.223
											c-0.054-0.072-0.104-0.145-0.162-0.207c-0.031-0.035-0.063-0.068-0.099-0.102c0-0.002-0.001-0.002-0.001-0.002
											c-0.248-0.248-0.54-0.426-0.852-0.498c-0.907-0.213-1.646,0.537-1.646,1.678c-0.001,0.4,0.092,0.801,0.25,1.154
											c0.005,0.012,0.011,0.021,0.016,0.029c0.016,0.031,0.03,0.066,0.049,0.1c0.009,0.018,0.017,0.031,0.022,0.049
											c0.011,0.014,0.017,0.025,0.021,0.041c0.016,0.027,0.033,0.057,0.05,0.084c0.04,0.064,0.083,0.133,0.127,0.191
											c0.055,0.072,0.109,0.145,0.169,0.209c0.021,0.021,0.045,0.047,0.066,0.068c0.252,0.258,0.549,0.439,0.869,0.518
											c0.195,0.047,0.389,0.047,0.563,0.01c0.014-0.006,0.025-0.008,0.038-0.012C9.904,46.394,10.135,46.235,10.312,46.011z"/>
									</g>
									<path id="XMLID_943_" fill="#514745" d="M9.518,46.461c-0.319-0.072-0.617-0.258-0.868-0.516
										c-0.021-0.021-0.046-0.047-0.064-0.07c-0.062-0.064-0.115-0.135-0.17-0.209c-0.047-0.061-0.088-0.125-0.129-0.189
										c-0.017-0.027-0.03-0.059-0.05-0.084c-0.007-0.018-0.014-0.029-0.021-0.041c-0.008-0.018-0.02-0.031-0.025-0.047
										c-0.016-0.033-0.032-0.068-0.048-0.104c-0.005-0.01-0.009-0.02-0.013-0.029c-0.16-0.354-0.252-0.754-0.251-1.154
										c0.002-0.9,0.465-1.559,1.105-1.688c-0.877-0.164-1.582,0.572-1.583,1.688c-0.001,0.4,0.092,0.801,0.25,1.154
										c0.005,0.012,0.01,0.021,0.016,0.029c0.016,0.033,0.03,0.066,0.049,0.104c0.009,0.016,0.017,0.029,0.022,0.047
										c0.011,0.012,0.017,0.023,0.021,0.041c0.016,0.025,0.033,0.057,0.05,0.084c0.04,0.064,0.083,0.131,0.127,0.189
										c0.055,0.074,0.109,0.145,0.169,0.209c0.021,0.023,0.045,0.049,0.066,0.07c0.252,0.258,0.549,0.438,0.869,0.516
										c0.188,0.045,0.369,0.047,0.539,0.014C9.561,46.47,9.54,46.467,9.518,46.461z"/>
								</g>
								<g>
									<g id="XMLID_914_">
										<path id="XMLID_935_" fill="#111414" d="M50.112,63.362c0.006-2.609-1.688-5.082-3.758-5.611
											c-0.852-0.221-2.271-0.574-5.302,1.861c-1.116,0.898,4.019,8.869,4.019,8.869l2.952-1.387
											c0.105-0.041,0.207-0.092,0.308-0.146l0.056-0.025l-0.002-0.002C49.42,66.325,50.111,65.026,50.112,63.362z"/>
										<g id="XMLID_930_">
											<path id="XMLID_934_" fill="#433734" d="M43.247,60.888c1.338,0.313,2.42,1.93,2.416,3.604
												c-0.006,1.678-1.093,2.781-2.43,2.469s-2.419-1.93-2.417-3.604C40.82,61.681,41.908,60.575,43.247,60.888z M43.237,65.985
												c0.907,0.213,1.646-0.537,1.646-1.674c0.003-1.141-0.731-2.234-1.643-2.447c-0.904-0.213-1.645,0.537-1.646,1.676
												C41.596,64.676,42.331,65.772,43.237,65.985"/>
										</g>
										<g id="XMLID_924_">
											<path id="XMLID_928_" fill="#252B2B" d="M43.25,59.196c2.081,0.49,3.763,3.004,3.758,5.613s-1.695,4.328-3.775,3.84
												c-2.082-0.488-3.764-3-3.758-5.609C39.479,60.431,41.169,58.708,43.25,59.196z M43.235,66.961
												c1.337,0.314,2.424-0.791,2.427-2.469c0.007-1.676-1.075-3.291-2.416-3.604c-1.336-0.313-2.424,0.793-2.428,2.469
												C40.816,65.032,41.898,66.647,43.235,66.961"/>
										</g>
										<g id="XMLID_920_">
											<path id="XMLID_923_" fill="#675A58" d="M44.506,65.534c0.009-0.012,0.018-0.021,0.022-0.033
												c0.064-0.088,0.123-0.188,0.172-0.295c0.009-0.014,0.015-0.023,0.021-0.039c0.104-0.248,0.162-0.535,0.163-0.854
												c0.001-0.234-0.03-0.473-0.089-0.693c-0.007-0.021-0.016-0.051-0.021-0.074c-0.037-0.129-0.082-0.256-0.137-0.377
												c-0.008-0.02-0.018-0.033-0.023-0.053c-0.014-0.029-0.026-0.063-0.044-0.09c-0.007-0.018-0.015-0.027-0.021-0.043
												c-0.009-0.02-0.021-0.031-0.026-0.049c-0.007-0.016-0.015-0.027-0.021-0.039c-0.046-0.076-0.095-0.15-0.146-0.225
												c-0.053-0.07-0.104-0.141-0.166-0.207c-0.03-0.035-0.063-0.066-0.095-0.1c0-0.002-0.001-0.002-0.001-0.002
												c-0.248-0.246-0.539-0.424-0.854-0.498c-0.904-0.213-1.645,0.537-1.646,1.676c0,0.402,0.092,0.801,0.25,1.156
												c0.005,0.01,0.01,0.02,0.014,0.029c0.019,0.031,0.032,0.066,0.05,0.1c0.01,0.016,0.018,0.033,0.023,0.047
												s0.015,0.027,0.021,0.041c0.018,0.029,0.031,0.057,0.051,0.084c0.04,0.068,0.082,0.133,0.127,0.193
												c0.053,0.074,0.106,0.143,0.17,0.209c0.021,0.021,0.044,0.047,0.063,0.072c0.252,0.256,0.552,0.438,0.868,0.514
												c0.198,0.047,0.391,0.047,0.565,0.008c0.012-0.002,0.021-0.006,0.037-0.01C44.102,65.916,44.331,65.758,44.506,65.534z"/>
										</g>
										<path id="XMLID_917_" fill="#514745" d="M43.711,65.985c-0.318-0.074-0.615-0.258-0.867-0.514
											c-0.023-0.025-0.045-0.051-0.066-0.072c-0.061-0.066-0.116-0.135-0.17-0.209c-0.045-0.063-0.087-0.125-0.127-0.193
											c-0.017-0.025-0.033-0.055-0.049-0.084c-0.008-0.014-0.016-0.027-0.021-0.041c-0.01-0.014-0.018-0.031-0.022-0.047
											c-0.021-0.031-0.033-0.066-0.049-0.1c-0.004-0.012-0.012-0.021-0.017-0.029c-0.155-0.355-0.25-0.754-0.25-1.156
											c0.002-0.9,0.466-1.559,1.108-1.688c-0.878-0.164-1.581,0.574-1.583,1.688c0,0.402,0.092,0.801,0.25,1.156
											c0.005,0.01,0.01,0.02,0.014,0.029c0.019,0.031,0.032,0.066,0.049,0.1c0.011,0.016,0.019,0.033,0.024,0.047
											c0.007,0.016,0.015,0.027,0.021,0.041c0.019,0.029,0.032,0.059,0.052,0.084c0.04,0.068,0.082,0.133,0.127,0.193
											c0.053,0.074,0.106,0.143,0.17,0.209c0.021,0.021,0.044,0.047,0.063,0.072c0.252,0.256,0.551,0.438,0.868,0.514
											c0.188,0.045,0.37,0.047,0.54,0.012C43.756,65.993,43.734,65.991,43.711,65.985z"/>
									</g>
									<g id="XMLID_860_">
										<path id="XMLID_913_" fill="#111414" d="M40.17,57.569c0.005-2.609-1.688-5.08-3.761-5.611
											c-0.852-0.219-2.271-0.574-5.302,1.861c-1.116,0.896,4.021,8.869,4.021,8.869l2.952-1.389
											c0.104-0.04,0.204-0.088,0.306-0.143l0.055-0.025l-0.002-0.002C39.477,60.532,40.167,59.233,40.17,57.569z"/>
										<g id="XMLID_906_">
											<path id="XMLID_908_" fill="#433734" d="M33.303,55.095c1.337,0.313,2.419,1.93,2.416,3.605s-1.09,2.779-2.427,2.469
												c-1.34-0.313-2.42-1.93-2.417-3.605C30.879,55.888,31.967,54.782,33.303,55.095z M33.293,60.194
												c0.905,0.213,1.645-0.537,1.646-1.676c0.001-1.141-0.729-2.234-1.64-2.447c-0.907-0.213-1.646,0.537-1.646,1.676
												C31.652,58.883,32.387,59.979,33.293,60.194"/>
										</g>
										<g id="XMLID_866_">
											<path id="XMLID_869_" fill="#252B2B" d="M33.307,53.405c2.08,0.488,3.763,3.002,3.758,5.613
												c-0.005,2.607-1.695,4.328-3.772,3.838c-2.082-0.488-3.767-2.998-3.762-5.609C29.533,54.638,31.225,52.915,33.307,53.405z
												 M33.292,61.17c1.337,0.313,2.424-0.793,2.427-2.469c0.003-1.678-1.079-3.293-2.416-3.605
												c-1.336-0.313-2.424,0.793-2.428,2.469C30.872,59.241,31.956,60.856,33.292,61.17"/>
										</g>
										<g id="XMLID_862_">
											<path id="XMLID_865_" fill="#675A58" d="M34.563,59.741c0.009-0.012,0.019-0.021,0.025-0.033
												c0.063-0.088,0.122-0.186,0.171-0.293c0.007-0.014,0.013-0.025,0.019-0.041c0.104-0.246,0.162-0.535,0.163-0.854
												c0.001-0.234-0.031-0.473-0.089-0.693c-0.006-0.021-0.013-0.051-0.02-0.072c-0.037-0.131-0.084-0.256-0.14-0.377
												c-0.008-0.02-0.016-0.035-0.021-0.051c-0.017-0.031-0.029-0.063-0.045-0.094c-0.007-0.016-0.017-0.027-0.021-0.043
												c-0.009-0.02-0.018-0.031-0.024-0.049c-0.009-0.016-0.017-0.023-0.021-0.039c-0.045-0.076-0.092-0.148-0.144-0.225
												c-0.055-0.07-0.106-0.141-0.165-0.205c-0.031-0.033-0.063-0.066-0.098-0.102h-0.001c-0.248-0.248-0.539-0.426-0.852-0.5
												c-0.907-0.213-1.646,0.537-1.646,1.676c-0.001,0.404,0.094,0.803,0.25,1.156c0.008,0.01,0.013,0.02,0.017,0.029
												c0.016,0.035,0.031,0.064,0.049,0.1c0.008,0.016,0.016,0.033,0.023,0.049s0.016,0.025,0.021,0.039
												c0.016,0.029,0.031,0.059,0.049,0.086c0.04,0.066,0.082,0.131,0.127,0.193c0.056,0.072,0.109,0.143,0.169,0.207
												c0.022,0.023,0.044,0.049,0.067,0.072c0.252,0.256,0.549,0.438,0.867,0.516c0.198,0.045,0.389,0.047,0.563,0.006
												c0.016-0.002,0.025-0.006,0.038-0.008C34.156,60.124,34.387,59.965,34.563,59.741z"/>
										</g>
										<path id="XMLID_861_" fill="#514745" d="M33.769,60.194c-0.319-0.076-0.616-0.26-0.868-0.516
											c-0.021-0.023-0.045-0.049-0.063-0.072c-0.063-0.064-0.116-0.135-0.17-0.207c-0.047-0.063-0.091-0.127-0.129-0.193
											c-0.019-0.027-0.031-0.057-0.05-0.086c-0.008-0.014-0.016-0.023-0.021-0.039c-0.009-0.016-0.02-0.033-0.024-0.049
											c-0.017-0.033-0.033-0.064-0.049-0.1c-0.005-0.012-0.009-0.021-0.014-0.029c-0.158-0.354-0.25-0.752-0.25-1.156
											c0.002-0.9,0.465-1.557,1.105-1.686c-0.878-0.164-1.581,0.574-1.583,1.686c-0.001,0.404,0.092,0.803,0.25,1.156
											c0.005,0.01,0.013,0.02,0.017,0.029c0.016,0.033,0.028,0.064,0.049,0.1c0.008,0.016,0.016,0.033,0.021,0.049
											c0.01,0.016,0.018,0.025,0.022,0.039c0.016,0.029,0.031,0.059,0.049,0.086c0.04,0.066,0.082,0.131,0.127,0.193
											c0.053,0.072,0.109,0.143,0.169,0.207c0.022,0.023,0.044,0.049,0.067,0.072c0.252,0.256,0.549,0.438,0.867,0.516
											c0.188,0.043,0.369,0.045,0.541,0.012C33.813,60.2,33.79,60.198,33.769,60.194z"/>
									</g>
								</g>
								<g>
									<g>
										<polygon fill="#DBD1C2" points="25.141,44.571 25.141,22.479 45.908,10.491 45.908,32.374 							"/>
										<g>
											<polygon fill="#60BDD3" points="25.551,34.112 25.551,42.842 25.141,43.034 25.141,34.306 								"/>
											<polygon fill="#E05934" points="25.551,35.618 25.551,44.331 25.141,44.571 25.141,35.81 								"/>
										</g>
										<polygon fill="#EAE1D2" points="12.342,15.12 33.109,3.129 45.908,10.491 25.141,22.479 							"/>
										<g>
											<polygon fill="#806061" points="25.466,22.644 25.466,44.409 25.749,44.571 25.747,22.806 								"/>
											<polygon fill="#806061" points="45.908,11.12 25.747,22.806 25.466,22.644 45.631,10.958 								"/>
										</g>
										<path fill="#CC8800" d="M12.342,15.12l-4.153,9.512v10.184l4.915,2.838c-0.002-0.066-0.005-0.137-0.005-0.201
											c0-3.035,2.145-4.26,4.79-2.729c2.645,1.525,4.789,5.227,4.789,8.262c0,0.064-0.002,0.131-0.004,0.197l2.467,1.395V22.485
											L12.342,15.12z"/>
										<path fill="#CC8800" d="M13.104,37.651c-0.002-0.068-0.005-0.137-0.005-0.203c0-3.035,2.145-4.258,4.79-2.73
											c2.645,1.527,4.789,5.229,4.789,8.264c0,0.064-0.002,0.131-0.004,0.195l2.467,1.396v-8.758L8.188,26.03v8.785L13.104,37.651z
											"/>
										<polygon fill="#FFFFFF" points="33.135,3.147 33.109,3.129 12.342,15.12 12.17,15.513 25.141,22.967 25.141,22.479 
											25.193,22.452 12.422,15.104 							"/>
										<g>
											<g>
												<path fill="#549AAD" d="M11.814,17.116l-3.07,7.076c-0.034,0.084-0.005,0.182,0.074,0.229l2.905,1.682
													c0.12,0.068,0.271-0.02,0.271-0.152v-8.795C11.992,17.051,11.855,17.021,11.814,17.116z"/>
												<path fill="#549AAD" d="M12.5,16.788v9.666c0,0.063,0.03,0.115,0.084,0.146l9.313,5.396
													c0.111,0.063,0.252-0.02,0.252-0.146v-9.695c0-0.063-0.031-0.117-0.084-0.146l-9.313-5.361
													C12.641,16.577,12.5,16.659,12.5,16.788z"/>
											</g>
											<g>
												<path fill="#96D5E6" d="M11.911,25.911l-2.902-1.68c-0.08-0.047-0.111-0.146-0.075-0.229l3.009-6.938
													c-0.043-0.021-0.102-0.01-0.127,0.047l-3.07,7.076c-0.037,0.084-0.005,0.184,0.074,0.229l2.905,1.682
													c0.12,0.068,0.271-0.02,0.271-0.154v-0.012C11.967,25.935,11.939,25.926,11.911,25.911z"/>
												<path fill="#96D5E6" d="M22.087,31.804l-9.313-5.395c-0.053-0.031-0.084-0.086-0.084-0.146v-9.645
													c-0.096-0.012-0.188,0.061-0.188,0.164v9.668c0,0.063,0.03,0.113,0.084,0.146l9.313,5.395
													c0.111,0.063,0.252-0.018,0.252-0.146v-0.021C22.129,31.821,22.107,31.815,22.087,31.804z"/>
											</g>
										</g>
									</g>
									<polygon fill="#EAE1D2" points="22.831,21.81 22.831,43.267 22.674,43.176 22.674,21.717 						"/>
									<polygon fill="#EAE1D2" points="12.111,15.646 25.141,23.159 25.141,22.967 12.17,15.513 						"/>
									<path fill="#FFFFFF" d="M12.111,15.646l-0.073,0.17l10.479,6.029v19.621c0,0,0.127,0.566,0.156,1.301V21.935v-0.178
										L12.111,15.646z"/>
									<path fill="#EB6A70" d="M7.531,28.461"/>
									<g>
										<path fill="#FBE97A" d="M8.881,28.084l-0.873-0.482v3.354c0,0.037,0.02,0.068,0.051,0.088L8.881,31.5V28.084L8.881,28.084z"
											/>
										<polygon fill="#E5C422" points="9.002,31.431 8.881,31.5 8.881,28.086 9.002,28.017 							"/>
										<polygon fill="#E5C422" points="9.002,28.017 8.188,27.562 8.188,27.497 8.008,27.601 8.881,28.086 							"/>
									</g>
									<path fill="#FF708A" d="M25.706,22.909v29.615l3.343,1.74c-0.002-0.07,0,0.414,0,0.344c0-3.035,3.831-2.705,6.478-1.178
										c2.646,1.525,13.414,5.605,12.998,12.207c-0.005,0.066-0.003,0.135-0.004,0.199l1.218,0.99l-0.173-30.07L25.706,22.909z"/>
									<g>
										<polygon fill="#FF849C" points="49.564,36.758 49.73,66.458 70.5,54.467 70.785,24.383 							"/>
										<g>
											<polygon fill="#FFC2DE" points="70.5,54.897 49.737,67.043 49.73,60.942 70.5,48.993 								"/>
										</g>
										<g>
											<path fill="#FBE97A" d="M66.077,58.124l-8.617,4.979c-0.191,0.107-0.349-0.01-0.349-0.264V60.79
												c0-0.254,0.154-0.553,0.349-0.66l8.617-4.979c0.192-0.109,0.35,0.01,0.35,0.264v2.047
												C66.426,57.715,66.271,58.011,66.077,58.124z"/>
											<path fill="#FCEC8B" d="M57.112,62.838v-2.049c0-0.254,0.154-0.553,0.349-0.66l8.617-4.979
												c0.068-0.041,0.135-0.049,0.188-0.033l0,0l-0.169-0.104c-0.063-0.055-0.152-0.059-0.25,0l-8.621,4.979
												c-0.191,0.107-0.346,0.404-0.346,0.658v2.051c0,0.139,0.047,0.232,0.119,0.275l0.215,0.125
												C57.151,63.056,57.112,62.963,57.112,62.838z"/>
										</g>
										<g>
											<polygon fill="#DBD1C2" points="52.82,60.808 52.82,41.644 68,32.868 68,52.047 								"/>
											<polygon fill="#FFFFFF" points="53.008,41.754 67.812,33.194 67.812,52.185 53.008,60.726 								"/>
											<polygon fill="#EAE1D2" points="53.195,41.86 67.622,33.522 67.622,52.282 53.195,60.606 								"/>
											<polygon fill="#FFEDFF" points="53.008,61.183 67.812,52.618 67.812,49.22 53.008,57.788 								"/>
											<g>
												<polygon fill="#DBD1C2" points="60.514,56.37 60.307,56.487 60.307,37.756 60.514,37.636 									"/>
												<polygon fill="#DBD1C2" points="60.514,37.636 60.307,37.756 60.105,37.642 60.312,37.522 									"/>
												<g>
													<polygon fill="#549AAD" points="61.324,45.334 66.574,42.301 66.574,36.278 61.324,39.31 										"/>
												</g>
												<polygon fill="#96D5E6" points="66.387,36.386 66.387,42.112 61.324,45.036 61.324,45.334 66.574,42.301 66.574,36.278 
																						"/>
												<polygon fill="#549AAD" points="59.492,46.39 54.242,49.422 54.242,43.397 59.492,40.37 									"/>
												<polygon fill="#96D5E6" points="59.305,40.476 59.305,46.202 54.242,49.125 54.242,49.422 59.492,46.39 59.492,40.37 
																						"/>
											</g>
										</g>
									</g>
									<g>
										<g id="XMLID_858_">
											<polygon id="XMLID_859_" fill="#FF849C" points="12.572,15.372 49.564,36.758 70.785,24.383 33.716,3.049 								"/>
										</g>
										<polygon id="XMLID_857_" fill="#AFAFAF" points="12.572,15.372 10.888,18.45 7.598,12.459 							"/>
										<polygon id="XMLID_855_" fill="#F4F4F4" points="12.505,15.399 33.722,3.024 28.814,0 7.598,12.375 							"/>
									</g>
									<g>
										<g id="XMLID_853_">
											<path id="XMLID_854_" fill="#FF708A" d="M27.625,53.997l-11.908-6.932c-0.783-2.646-0.961-5.26-3.979-7.113
												c-3.012-1.852-6.593-2.363-6.587,0.916c0.001,0.123,0.009,0.25,0.019,0.377l-3.187-1.703v-11.17l5.229-3.865l5.36-9.104
												l15.451,8.914L27.625,53.997z"/>
										</g>
										<polygon fill="#FF4A71" points="13.547,16.774 8.699,25.104 16.301,29.368 16.181,18.478 							"/>
										<g id="XMLID_851_">
											<polygon id="XMLID_852_" fill="#47BEBF" points="13.928,17.915 15.101,18.653 17.126,28.808 9.904,24.883 								"/>
										</g>
										<g id="XMLID_848_" opacity="0.28">
											<polygon id="XMLID_849_" points="14.053,19.37 10.665,25.312 9.897,24.883 13.932,17.916 15.104,18.655 15.104,20.013 
																				"/>
										</g>
										<g id="XMLID_436_">
											<g id="XMLID_440_" opacity="0.28">
												<path id="XMLID_846_" d="M19.362,35.715c-0.281-0.152-0.526-0.449-0.646-0.771s-0.091-0.631,0.073-0.803
													c0.16-0.174,0.438-0.188,0.723-0.037l1.911,1.002c0.304,0.16,0.566,0.473,0.691,0.814c0.125,0.343,0.097,0.662-0.081,0.836
													c-0.176,0.18-0.468,0.188-0.767,0.021L19.362,35.715z"/>
											</g>
											<g id="XMLID_437_">
												<path id="XMLID_439_" fill="#F4F4F4" d="M18.945,34.974c-0.283-0.156-0.527-0.451-0.646-0.773
													c-0.119-0.324-0.091-0.629,0.072-0.803c0.161-0.172,0.438-0.188,0.724-0.037l1.911,1.004
													c0.304,0.158,0.565,0.471,0.692,0.814c0.125,0.342,0.097,0.66-0.081,0.836c-0.177,0.178-0.47,0.186-0.767,0.021
													L18.945,34.974z"/>
											</g>
										</g>
										<g>
											<g>
												<polygon fill="#FF4A71" points="14.063,17.11 14.264,28.233 24.372,33.776 24.381,23.217 									"/>
												<g id="XMLID_433_">
													<polygon id="XMLID_434_" fill="#47BEBF" points="23.252,23.388 14.988,18.554 15.081,27.702 23.252,32.125 										"/>
												</g>
												<g id="XMLID_426_" opacity="0.31">
													<g id="XMLID_431_">
														<path id="XMLID_432_" fill="#FFFFFF" d="M15.049,24.315l1.938-1.643c0.329-0.275,0.329-0.76,0-1.076
															c-0.33-0.318-0.86-0.352-1.19-0.07l-0.769,0.648L15.049,24.315z"/>
													</g>
													<g id="XMLID_429_">
														<path id="XMLID_430_" fill="#FFFFFF" d="M19.817,23.479c-0.329-0.316-0.861-0.35-1.189-0.07l-3.558,3.01l0.015,1.283
															l0.603,0.354l4.133-3.494C20.146,24.28,20.146,23.795,19.817,23.479z"/>
													</g>
													<g id="XMLID_427_">
														<path id="XMLID_428_" fill="#FFFFFF" d="M20.941,26.786c-0.329-0.318-0.861-0.348-1.188-0.07l-2.515,2.123l1.506,0.887
															l2.197-1.861C21.271,27.584,21.271,27.103,20.941,26.786z"/>
													</g>
												</g>
											</g>
											<g id="XMLID_424_" opacity="0.28">
												<polyline id="XMLID_425_" points="23.252,23.388 14.988,18.595 15,19.565 23.334,24.405 									"/>
											</g>
										</g>
										<path fill="#FFC2DE" d="M49.73,67.043l-1.467-0.822c0.006-0.123,0.016-0.242,0.016-0.367
											c0.006-3.271-2.104-6.428-4.712-7.039c-1.845-0.434-3.438,0.523-4.222,2.275l-0.808-0.471c0.037-0.344,0.06-0.693,0.06-1.051
											c0-2.887-2.587-6.414-5.088-6.713c-1.784-0.213-3.216,0.811-4.104,2.455l-1.548-0.898l-8.573-5.111l-4.899-2.92
											c0.007-0.118,0.016-0.234,0.016-0.355c0.006-3.273-2.103-6.426-4.712-7.039c-1.843-0.434-3.437,0.521-4.219,2.27
											l-3.484-1.945v-5.947l17.303,9.98l8.572,4.988l21.87,12.635V67.043L49.73,67.043z"/>
										<g id="XMLID_421_" opacity="0.2">
											<g id="XMLID_422_">
												<path id="XMLID_423_" fill="#FF387D" d="M23.773,33.825l-0.008,10.211l0.009,4.412v1.275l-6.487-3.824
													c-0.502-0.967-1.557-2.887-2.813-4.523c-0.3-0.389-0.607-0.766-0.912-1.115c-2.017-2.314-3.662-3.219-4.636-3.57v-11.17
													L23.773,33.825 M24.322,33.495L8.374,24.573v12.729c0,0,2.172,0.047,5.187,3.51c0.271,0.313,0.547,0.646,0.83,1.02
													c1.581,2.055,2.837,4.668,2.837,4.668l7.098,4.184v-1.6l-0.008-4.41L24.322,33.495L24.322,33.495z"/>
											</g>
										</g>
									</g>
									<g>
										<g id="XMLID_419_">
											<polygon id="XMLID_420_" fill="#939393" points="4.291,39.347 4.291,42.006 0.778,40.062 0.778,37.463 								"/>
										</g>
										<g id="XMLID_417_">
											<polygon id="XMLID_418_" fill="#727272" points="4.291,39.347 4.291,42.006 5.344,41.278 5.344,38.681 								"/>
										</g>
										<polygon id="XMLID_416_" fill="#828282" points="4.269,39.34 5.344,38.688 2.018,36.799 0.778,37.463 							"/>
									</g>
								</g>
								<g>
									<g id="XMLID_414_">
										<polygon id="XMLID_415_" fill="#FFD6F2" points="39.47,27.338 49.975,33.788 66.122,24.833 66.176,22.788 39.516,25.444 
																		"/>
									</g>
									<g id="XMLID_412_">
										<polygon id="XMLID_413_" fill="#FFE5FF" points="49.848,31.752 49.971,33.735 66.122,24.833 66.174,22.735 							"/>
									</g>
									<g id="XMLID_410_">
										<polygon id="XMLID_411_" fill="#FFEDFF" points="39.516,25.444 49.819,31.761 66.173,22.745 55.803,16.624 							"/>
									</g>
								</g>
								<g>
									<g id="XMLID_408_">
										<polygon id="XMLID_409_" fill="#3F5E5E" points="26.468,26.467 26.468,41.763 47.659,54.228 47.659,38.706 							"/>
									</g>
									<g id="XMLID_406_">
										<path id="XMLID_407_" fill="#F7E8CB" d="M27.568,28.374l18.992,10.967v12.967l-18.992-11.17V28.374 M26.468,26.467v15.299
											l21.19,12.463V38.707L26.468,26.467L26.468,26.467z"/>
									</g>
									<g id="XMLID_403_">
										<g id="XMLID_404_">
											<path id="XMLID_405_" d="M27.018,27.42l20.094,11.604v14.242L27.018,41.452V27.42 M26.468,26.467v15.299l21.19,12.463
												V38.707L26.468,26.467L26.468,26.467z"/>
										</g>
									</g>
								</g>
							</g>
						</g>
						<g id="XMLID_1203_">
							<g id="XMLID_1361_">
								<polygon id="XMLID_1375_" fill="#425D5D" points="27.635,24.571 27.635,42.676 48.828,55.141 48.828,36.809 					"/>
							</g>
							<g id="XMLID_1358_" opacity="0.28">
								<path id="XMLID_1360_" fill="#040000" d="M26.092,23.993l-8.524,24.589l11.838,6.729c0.592-1.326,2.285-2.649,3.712-2.48
									c2.433,0.288,4.361,2.236,5.257,5.188c0.25,0.816,0.091,2.589,0.091,2.589l10.366-23.794L26.092,23.993z"/>
							</g>
							<g id="XMLID_1355_">
								<path id="XMLID_1357_" fill="#F4E8CE" d="M28.734,26.477l18.992,10.966v15.771l-18.992-11.17V26.477 M27.635,24.571v18.103
									l21.191,12.465V36.811L27.635,24.571L27.635,24.571z"/>
							</g>
							<g id="XMLID_1345_">
								<g id="XMLID_1346_">
									<path id="XMLID_1354_" fill="#040000" d="M28.186,25.524L48.28,37.127V54.18L28.186,42.363V25.524 M27.635,24.571v18.103
										l21.191,12.465V36.811L27.635,24.571L27.635,24.571z"/>
								</g>
							</g>
							<g id="XMLID_1342_">
								<polygon id="XMLID_1343_" fill="#F4E8CE" points="38.268,43.115 48.719,55.172 48.719,53.859 39.084,42.625 					"/>
							</g>
							<g id="XMLID_1339_">
								<polygon id="XMLID_1340_" fill="#040000" points="48.719,55.172 46.967,54.143 36.344,41.992 38.268,43.115 					"/>
							</g>
							<g id="XMLID_1336_">
								<polyline id="XMLID_1338_" fill="#040000" points="16.66,30.5 27.523,42.709 27.523,40.965 19.758,32.307 16.66,30.5 					"/>
							</g>
							<g id="XMLID_1330_">
								<polygon id="XMLID_1335_" fill="#F4E8CE" points="27.523,42.709 16.66,30.5 18.734,31.708 29.367,43.766 					"/>
							</g>
							<g id="XMLID_1206_">
								<g id="XMLID_1328_">
									<polygon id="XMLID_1329_" fill="#F4E8CE" points="27.174,24.286 16.655,30.464 38.264,43.08 48.723,36.816 						"/>
								</g>
								<g id="XMLID_1326_">
									<polygon id="XMLID_1327_" fill="#FFCC33" points="19.752,32.272 30.006,25.917 32.945,27.628 22.883,34.1 						"/>
								</g>
								<g id="XMLID_1324_">
									<polygon id="XMLID_1325_" fill="#FFCC33" points="25.937,35.882 36.18,29.542 39.08,31.206 29.012,37.678 						"/>
								</g>
								<g id="XMLID_1322_">
									<polygon id="XMLID_1323_" fill="#FFCC33" points="32.127,39.471 42.354,33.136 45.455,34.948 35.155,41.266 						"/>
								</g>
								<g id="XMLID_1300_">
									<path fill="#F4E8CE" d="M16.655,30.464v2.73c0,0.549,0.291,1.057,0.768,1.334l0.008,0.004
										c0.479,0.277,1.065,0.279,1.545,0.006s0.772-0.783,0.775-1.334l0.002-0.938L16.655,30.464z"/>
								</g>
								<g id="XMLID_1299_">
									<path fill="#EF7D1B" d="M19.752,32.272L19.746,35c-0.002,0.549,0.289,1.061,0.764,1.333l0.037,0.021
										c0.475,0.273,1.059,0.279,1.535,0.014c0.479-0.269,0.775-0.77,0.784-1.32l0.017-0.949L19.752,32.272z"/>
								</g>
								<g id="XMLID_1296_">
									<path fill="#F4E8CE" d="M22.883,34.1l-0.008,2.74c-0.004,0.539,0.283,1.039,0.75,1.311c0.477,0.277,1.066,0.277,1.549,0.002
										c0.479-0.275,0.771-0.789,0.771-1.344l-0.006-0.927L22.883,34.1z"/>
								</g>
								<g id="XMLID_1295_">
									<path fill="#EF7D1B" d="M25.937,35.882l-0.016,2.745c-0.004,0.549,0.287,1.061,0.762,1.334l0.006,0.004
										c0.479,0.275,1.064,0.279,1.545,0.004c0.479-0.271,0.773-0.781,0.775-1.334l0.002-0.957L25.937,35.882z"/>
								</g>
								<g id="XMLID_1265_">
									<path fill="#F4E8CE" d="M29.012,37.678l0.006,2.729c0,0.553,0.293,1.059,0.771,1.332l0.017,0.012
										c0.479,0.273,1.063,0.275,1.541,0.002c0.479-0.271,0.772-0.779,0.774-1.332l0.004-0.945L29.012,37.678z"/>
								</g>
								<g id="XMLID_1264_">
									<path fill="#EF7D1B" d="M32.127,39.471l-0.043,2.719c-0.011,0.549,0.277,1.061,0.754,1.334
										c0.479,0.275,1.064,0.277,1.545,0.004c0.479-0.273,0.771-0.783,0.771-1.338v-0.922L32.127,39.471z"/>
								</g>
								<g id="XMLID_1261_">
									<path fill="#F4E8CE" d="M35.155,41.266l0.017,2.773c0.004,0.547,0.295,1.051,0.77,1.326l0.006,0.004
										c0.479,0.275,1.064,0.277,1.545,0.002c0.479-0.273,0.771-0.785,0.771-1.336v-0.957L35.155,41.266z"/>
								</g>
								<g id="XMLID_1207_" display="none" opacity="0.58">
									<g id="XMLID_1253_" display="inline">
										<path id="XMLID_1260_" fill="#040000" d="M19.752,32.266l-3.097-1.803v2.73c0,0.549,0.291,1.057,0.768,1.334l0.008,0.004
											c0.479,0.277,1.065,0.279,1.545,0.006s0.772-0.783,0.775-1.334L19.752,32.266z"/>
									</g>
									<g id="XMLID_1250_" display="inline">
										<path id="XMLID_1251_" fill="#040000" d="M19.746,35.002c-0.002,0.549,0.289,1.061,0.764,1.333l0.037,0.021
											c0.475,0.273,1.059,0.281,1.535,0.014c0.479-0.269,0.775-0.77,0.784-1.32l0.017-0.949l-3.131-1.828L19.746,35.002z"/>
									</g>
									<g id="XMLID_1246_" display="inline">
										<path id="XMLID_1247_" fill="#040000" d="M22.883,34.1l-0.008,2.74c-0.004,0.539,0.283,1.039,0.75,1.311
											c0.477,0.277,1.066,0.277,1.549,0.002c0.453-0.262,0.729-0.734,0.758-1.256l-0.01,1.729
											c-0.004,0.549,0.287,1.061,0.762,1.334l0.008,0.004c0.479,0.275,1.064,0.279,1.545,0.004
											c0.479-0.271,0.771-0.781,0.773-1.334l0.002-0.957l-3.072-1.794L22.883,34.1z"/>
									</g>
									<g id="XMLID_1236_" display="inline">
										<path id="XMLID_1237_" fill="#040000" d="M32.127,39.471l-0.008,0.412l0.002-0.412l-3.109-1.793l0.006,2.729
											c0,0.553,0.295,1.059,0.771,1.332l0.017,0.012c0.479,0.273,1.063,0.275,1.541,0.002c0.461-0.268,0.746-0.75,0.771-1.275
											l-0.029,1.713c-0.01,0.549,0.279,1.059,0.754,1.334c0.479,0.275,1.066,0.277,1.545,0.004
											c0.479-0.275,0.773-0.785,0.773-1.338v-0.922l0,0L32.127,39.471z"/>
									</g>
									<g id="XMLID_1232_" display="inline">
										<path id="XMLID_1233_" fill="#040000" d="M35.155,41.266l0.017,2.773c0.004,0.547,0.295,1.051,0.77,1.326l0.006,0.004
											c0.479,0.275,1.064,0.277,1.545,0.002c0.479-0.273,0.771-0.785,0.771-1.336v-0.957L35.155,41.266z"/>
									</g>
								</g>
							</g>
						</g>
					</g>
					<g id="truck4R">
						<g>
							<g id="truckMove4_2_">
								<g id="truck4_2_">
									<g>
										<g id="XMLID_444_">
											<g>
												<g id="XMLID_845_">
													<path fill="#F7E8CB" d="M28.971,170.564v2.729c0,0.549,0.293,1.059,0.768,1.334l0.008,0.004
														c0.479,0.276,1.064,0.278,1.544,0.006c0.479-0.273,0.774-0.781,0.775-1.334l0.003-0.938L28.971,170.564z"/>
												</g>
												<g id="XMLID_843_">
													<path fill="#FF8000" d="M32.068,172.371l-0.006,2.729c-0.002,0.551,0.289,1.061,0.764,1.336l0.037,0.021
														c0.473,0.276,1.057,0.282,1.535,0.014c0.477-0.271,0.776-0.771,0.785-1.318l0.016-0.951L32.068,172.371z"/>
												</g>
												<g id="XMLID_842_">
													<path fill="#F7E8CB" d="M35.199,174.199l-0.01,2.742c-0.002,0.539,0.285,1.039,0.75,1.31
														c0.479,0.278,1.07,0.278,1.549,0.002c0.48-0.277,0.773-0.789,0.771-1.345l-0.008-0.926L35.199,174.199z"/>
												</g>
												<g id="XMLID_840_">
													<path fill="#FF8000" d="M38.253,175.982l-0.016,2.742c-0.004,0.551,0.287,1.061,0.761,1.336l0.009,0.004
														c0.477,0.275,1.063,0.277,1.544,0.004c0.478-0.272,0.772-0.783,0.773-1.334l0.002-0.957L38.253,175.982z"/>
												</g>
												<g id="XMLID_839_">
													<path fill="#F7E8CB" d="M41.327,177.777l0.007,2.729c0,0.549,0.293,1.059,0.771,1.33l0.016,0.01
														c0.479,0.274,1.063,0.277,1.541,0.004c0.479-0.273,0.771-0.781,0.774-1.33l0.003-0.949L41.327,177.777z"/>
												</g>
												<g id="XMLID_837_">
													<path fill="#FF8000" d="M44.443,179.57l-0.043,2.717c-0.01,0.55,0.279,1.06,0.753,1.334
														c0.479,0.277,1.067,0.279,1.546,0.005c0.479-0.275,0.773-0.785,0.773-1.339v-0.922L44.443,179.57z"/>
												</g>
												<g id="XMLID_836_">
													<path fill="#F7E8CB" d="M47.473,181.365l0.016,2.773c0.002,0.549,0.295,1.053,0.769,1.326l0.005,0.004
														c0.478,0.276,1.064,0.279,1.545,0.002c0.479-0.273,0.773-0.783,0.773-1.336v-0.957L47.473,181.365z"/>
												</g>
												<g id="XMLID_776_" opacity="0.58">
													<g id="XMLID_803_">
														<path id="XMLID_806_" d="M32.068,172.365l-3.098-1.801v2.729c0,0.549,0.293,1.059,0.768,1.334l0.008,0.004
															c0.479,0.276,1.064,0.278,1.544,0.006c0.479-0.273,0.774-0.781,0.775-1.334L32.068,172.365z"/>
													</g>
													<g id="XMLID_783_">
														<path id="XMLID_802_" d="M32.063,175.1c-0.002,0.551,0.289,1.061,0.764,1.336l0.037,0.02
															c0.473,0.277,1.057,0.283,1.535,0.015c0.477-0.271,0.776-0.771,0.785-1.318l0.016-0.951l-3.131-1.827L32.063,175.1z"/>
													</g>
													<g id="XMLID_781_">
														<path id="XMLID_782_" d="M35.199,174.199l-0.01,2.742c-0.002,0.539,0.285,1.039,0.75,1.31
															c0.479,0.278,1.07,0.278,1.549,0.002c0.453-0.263,0.732-0.736,0.76-1.257l-0.01,1.729
															c-0.004,0.551,0.287,1.061,0.761,1.336l0.008,0.004c0.478,0.275,1.063,0.277,1.545,0.004
															c0.478-0.272,0.772-0.783,0.773-1.334l0.002-0.957l-3.072-1.795L35.199,174.199z"/>
													</g>
													<g id="XMLID_779_">
														<path id="XMLID_780_" d="M44.443,179.57l-0.008,0.412l0.002-0.412l-3.11-1.793l0.007,2.729
															c0,0.549,0.294,1.059,0.771,1.33l0.016,0.01c0.479,0.274,1.063,0.277,1.541,0.004c0.461-0.266,0.746-0.75,0.769-1.277
															l-0.026,1.715c-0.01,0.55,0.279,1.06,0.753,1.335c0.479,0.276,1.067,0.278,1.546,0.004
															c0.479-0.275,0.773-0.785,0.773-1.339v-0.922l0,0L44.443,179.57z"/>
													</g>
													<g id="XMLID_777_">
														<path id="XMLID_778_" d="M47.473,181.365l0.016,2.773c0.002,0.549,0.295,1.053,0.767,1.326l0.007,0.004
															c0.478,0.276,1.064,0.279,1.545,0.002c0.479-0.273,0.773-0.783,0.773-1.336v-0.957L47.473,181.365z"/>
													</g>
												</g>
											</g>
											<g>
												<g id="XMLID_774_">
													<polygon id="XMLID_775_" fill="#F7E8CB" points="29.173,170.52 18.656,176.699 40.266,189.314 50.725,183.049 										
														"/>
												</g>
												<g id="XMLID_450_">
													<polygon id="XMLID_451_" fill="#FFCC33" points="21.753,178.506 32.008,172.15 34.949,173.863 24.885,180.334 										
														"/>
												</g>
												<g id="XMLID_447_">
													<polygon id="XMLID_449_" fill="#FFCC33" points="27.939,182.119 38.182,175.775 41.081,177.439 31.013,183.914 										
														"/>
												</g>
												<g id="XMLID_445_">
													<polygon id="XMLID_446_" fill="#FFCC33" points="34.128,185.705 44.355,179.373 47.456,181.182 37.158,187.5 										
														"/>
												</g>
											</g>
										</g>
										<g id="XMLID_441_">
											<polygon id="XMLID_442_" fill="#F7E8CB" points="39.889,195.072 50.753,182.863 48.678,184.07 38.048,196.129 								"/>
										</g>
									</g>
									<path id="XMLID_549_" opacity="0.4" enable-background="new    " d="M26.46,205.438l44.642,25.708
										c1.371,0.789,1.365,2.774-0.014,3.554l-23.395,13.242c-0.631,0.356-1.4,0.354-2.027-0.007L1.022,222.229
										c-1.371-0.788-1.361-2.773,0.016-3.553l23.393-13.244C25.062,205.074,25.833,205.077,26.46,205.438z"/>
									<polygon id="XMLID_534_" fill="#5E4843" points="18.867,218.146 13.817,220.539 12.513,219.608 12.513,215.092 						"/>
									<g id="XMLID_522_">
										<path id="XMLID_533_" fill="#121414" d="M22.778,226.49v0.002l-0.055,0.024c-0.098,0.056-0.201,0.103-0.305,0.144
											l-2.951,1.387c0,0-5.137-7.969-4.02-8.867c3.027-2.437,4.449-2.082,5.301-1.862c2.069,0.53,3.764,3.004,3.758,5.612
											C24.505,224.594,23.815,225.891,22.778,226.49z"/>
										<g id="XMLID_528_">
											<path id="XMLID_529_" fill="#433B39" d="M17.642,220.455c1.336,0.312,2.418,1.927,2.414,3.604
												c-0.002,1.677-1.09,2.783-2.426,2.47c-1.336-0.314-2.42-1.93-2.416-3.605C15.216,221.246,16.304,220.141,17.642,220.455z
												 M17.632,225.553c0.907,0.213,1.645-0.537,1.645-1.676c0.004-1.136-0.732-2.232-1.639-2.447
												c-0.908-0.213-1.643,0.537-1.646,1.676C15.989,224.244,16.724,225.34,17.632,225.553"/>
										</g>
										<g id="XMLID_526_">
											<path id="XMLID_527_" fill="#272B2B" d="M17.643,218.764c2.082,0.488,3.766,3.002,3.758,5.613
												c-0.003,2.61-1.691,4.328-3.773,3.84c-2.08-0.488-3.763-3-3.758-5.608C13.874,219.998,15.563,218.276,17.643,218.764z
												 M17.63,226.53c1.336,0.313,2.424-0.793,2.426-2.47c0.004-1.677-1.078-3.292-2.414-3.604
												c-1.338-0.314-2.426,0.791-2.428,2.469C15.21,224.6,16.294,226.216,17.63,226.53"/>
										</g>
										<g id="XMLID_524_">
											<path id="XMLID_525_" fill="#675E5D" d="M18.233,225.551c-0.012,0.004-0.021,0.006-0.035,0.01
												c-0.176,0.039-0.367,0.039-0.564-0.008c-0.32-0.077-0.617-0.26-0.869-0.516c-0.02-0.023-0.044-0.047-0.064-0.072
												c-0.061-0.063-0.115-0.135-0.168-0.207c-0.047-0.062-0.09-0.127-0.131-0.192c-0.016-0.027-0.031-0.058-0.049-0.084
												c-0.007-0.015-0.013-0.027-0.021-0.041c-0.007-0.017-0.016-0.031-0.025-0.048c-0.016-0.033-0.033-0.066-0.049-0.102
												c-0.004-0.009-0.008-0.02-0.012-0.029c-0.16-0.353-0.252-0.752-0.252-1.156c0.002-1.139,0.738-1.889,1.646-1.676
												c0.313,0.074,0.605,0.252,0.854,0.5l0,0c0.031,0.034,0.064,0.067,0.096,0.103c0.057,0.063,0.111,0.133,0.164,0.207
												c0.051,0.07,0.1,0.145,0.145,0.223c0.004,0.012,0.014,0.023,0.021,0.037c0.006,0.016,0.016,0.031,0.023,0.049
												c0.008,0.014,0.016,0.029,0.023,0.043c0.016,0.029,0.029,0.062,0.043,0.092c0.008,0.017,0.014,0.033,0.025,0.052
												c0.053,0.12,0.098,0.248,0.135,0.377c0.007,0.022,0.013,0.049,0.021,0.073c0.059,0.223,0.088,0.457,0.088,0.693
												c0,0.32-0.059,0.609-0.162,0.855c-0.008,0.014-0.014,0.026-0.02,0.041c-0.049,0.106-0.105,0.204-0.172,0.293
												c-0.006,0.012-0.014,0.022-0.023,0.032C18.724,225.326,18.496,225.483,18.233,225.551z"/>
										</g>
										<path id="XMLID_523_" fill="#514A49" d="M18.172,225.565c-0.17,0.032-0.35,0.03-0.539-0.013
											c-0.32-0.077-0.617-0.26-0.869-0.516c-0.02-0.023-0.044-0.047-0.064-0.072c-0.061-0.063-0.115-0.135-0.168-0.207
											c-0.047-0.062-0.09-0.127-0.131-0.192c-0.016-0.027-0.031-0.058-0.049-0.085c-0.007-0.014-0.013-0.026-0.021-0.04
											c-0.006-0.017-0.016-0.031-0.025-0.048c-0.016-0.033-0.033-0.066-0.049-0.102c-0.004-0.009-0.008-0.02-0.012-0.029
											c-0.16-0.353-0.252-0.752-0.252-1.156c0.004-1.111,0.703-1.85,1.584-1.686c-0.643,0.129-1.107,0.786-1.107,1.686
											c-0.002,0.404,0.09,0.803,0.25,1.156c0.004,0.009,0.008,0.02,0.014,0.029c0.016,0.036,0.031,0.069,0.047,0.102
											c0.008,0.017,0.018,0.031,0.025,0.048c0.006,0.014,0.014,0.026,0.021,0.04c0.018,0.027,0.031,0.058,0.049,0.085
											c0.041,0.065,0.084,0.13,0.129,0.192c0.053,0.072,0.107,0.144,0.168,0.207c0.02,0.025,0.044,0.049,0.064,0.072
											c0.254,0.256,0.553,0.439,0.869,0.516C18.128,225.559,18.149,225.561,18.172,225.565z"/>
									</g>
									<g id="XMLID_502_">
										<path id="XMLID_521_" fill="#121414" d="M45.095,239.006v0.002l-0.053,0.025c-0.102,0.055-0.203,0.104-0.309,0.145
											l-2.949,1.385c0,0-5.138-7.969-4.021-8.866c3.029-2.438,4.451-2.082,5.301-1.863c2.073,0.531,3.766,3.004,3.762,5.613
											C46.821,237.11,46.131,238.408,45.095,239.006z"/>
										<g id="XMLID_519_">
											<path id="XMLID_520_" fill="#433B39" d="M39.959,232.971c1.336,0.314,2.418,1.93,2.416,3.605
												c-0.004,1.678-1.092,2.783-2.429,2.469s-2.421-1.929-2.416-3.604C37.534,233.764,38.62,232.657,39.959,232.971z
												 M39.946,238.069c0.907,0.213,1.646-0.537,1.646-1.675c0.002-1.138-0.734-2.233-1.639-2.446
												c-0.908-0.213-1.645,0.537-1.646,1.676C38.304,236.76,39.04,237.855,39.946,238.069"/>
										</g>
										<g id="XMLID_517_">
											<path id="XMLID_518_" fill="#272B2B" d="M39.959,231.279c2.082,0.489,3.764,3.002,3.76,5.612
												c-0.006,2.61-1.695,4.328-3.777,3.841c-2.079-0.488-3.763-3-3.759-5.609C36.188,232.514,37.879,230.791,39.959,231.279z
												 M39.946,239.045c1.334,0.315,2.424-0.791,2.429-2.469c0.002-1.675-1.08-3.291-2.416-3.605
												c-1.338-0.313-2.424,0.794-2.429,2.47C37.525,237.115,38.609,238.731,39.946,239.045"/>
										</g>
										<g id="XMLID_510_">
											<path id="XMLID_511_" fill="#675E5D" d="M40.548,238.065c-0.014,0.005-0.025,0.007-0.039,0.011
												c-0.174,0.039-0.365,0.039-0.563-0.008c-0.32-0.077-0.617-0.261-0.869-0.517c-0.021-0.022-0.045-0.047-0.066-0.07
												c-0.059-0.065-0.115-0.135-0.168-0.209c-0.045-0.06-0.088-0.127-0.127-0.192c-0.018-0.027-0.035-0.056-0.051-0.084
												c-0.006-0.015-0.014-0.027-0.021-0.041c-0.006-0.017-0.014-0.031-0.023-0.047c-0.018-0.034-0.033-0.067-0.051-0.101
												c-0.004-0.009-0.008-0.019-0.012-0.028c-0.16-0.355-0.252-0.754-0.25-1.156c0-1.139,0.738-1.889,1.646-1.676
												c0.311,0.071,0.604,0.25,0.852,0.498c0,0,0,0,0,0.002c0.033,0.031,0.066,0.064,0.096,0.1
												c0.061,0.064,0.111,0.133,0.164,0.207c0.053,0.071,0.102,0.145,0.146,0.223c0.005,0.013,0.013,0.025,0.021,0.037
												c0.007,0.019,0.019,0.033,0.025,0.049c0.006,0.017,0.014,0.029,0.022,0.046c0.017,0.028,0.028,0.059,0.046,0.09
												c0.006,0.018,0.014,0.032,0.021,0.051c0.053,0.121,0.099,0.248,0.137,0.377c0.008,0.025,0.014,0.049,0.021,0.074
												c0.057,0.224,0.088,0.459,0.088,0.694c0,0.32-0.059,0.607-0.164,0.855c-0.006,0.012-0.012,0.025-0.018,0.039
												c-0.05,0.106-0.107,0.205-0.172,0.293c-0.008,0.012-0.016,0.022-0.023,0.035C41.04,237.842,40.811,238,40.548,238.065z"/>
										</g>
										<path id="XMLID_503_" fill="#514A49" d="M40.485,238.081c-0.17,0.035-0.352,0.033-0.539-0.012
											c-0.32-0.077-0.617-0.261-0.869-0.517c-0.021-0.022-0.045-0.047-0.066-0.069c-0.059-0.066-0.115-0.136-0.168-0.209
											c-0.045-0.061-0.088-0.128-0.127-0.193c-0.018-0.027-0.035-0.055-0.051-0.084c-0.006-0.014-0.013-0.027-0.021-0.041
											c-0.006-0.016-0.014-0.031-0.023-0.047c-0.018-0.034-0.033-0.067-0.049-0.101c-0.006-0.009-0.01-0.019-0.014-0.028
											c-0.16-0.355-0.252-0.754-0.25-1.156c0-1.114,0.705-1.853,1.582-1.688c-0.641,0.13-1.104,0.786-1.105,1.688
											c-0.002,0.402,0.09,0.801,0.25,1.156c0.004,0.009,0.008,0.019,0.014,0.028c0.016,0.034,0.031,0.067,0.047,0.101
											c0.008,0.016,0.016,0.031,0.025,0.047c0.007,0.014,0.015,0.027,0.021,0.041c0.02,0.029,0.033,0.057,0.049,0.084
											c0.041,0.065,0.084,0.132,0.129,0.193c0.055,0.073,0.109,0.143,0.169,0.209c0.021,0.022,0.046,0.047,0.067,0.069
											c0.25,0.256,0.549,0.44,0.867,0.517C40.443,238.074,40.465,238.076,40.485,238.081z"/>
									</g>
									<polygon id="XMLID_501_" fill="#5E4843" points="8.923,212.354 3.874,214.746 2.569,213.815 2.569,209.299 						"/>
									<g id="XMLID_492_">
										<path id="XMLID_500_" fill="#121414" d="M12.835,220.697l0.002,0.002l-0.057,0.024c-0.098,0.056-0.2,0.103-0.305,0.146
											l-2.953,1.387c0,0-5.135-7.971-4.018-8.869c3.029-2.435,4.449-2.082,5.301-1.862c2.072,0.53,3.764,3.004,3.76,5.612
											C14.562,218.801,13.873,220.1,12.835,220.697z"/>
										<g id="XMLID_498_">
											<path id="XMLID_499_" fill="#433B39" d="M7.698,214.662c1.338,0.313,2.42,1.929,2.416,3.604
												c-0.004,1.677-1.092,2.783-2.428,2.47c-1.338-0.314-2.42-1.93-2.416-3.605C5.272,215.453,6.36,214.348,7.698,214.662z
												 M7.688,219.76c0.906,0.213,1.645-0.537,1.646-1.674c0.002-1.138-0.734-2.234-1.639-2.447
												c-0.908-0.213-1.646,0.537-1.648,1.674C6.046,218.451,6.78,219.547,7.688,219.76"/>
										</g>
										<g id="XMLID_496_">
											<path id="XMLID_497_" fill="#272B2B" d="M7.7,212.971c2.082,0.488,3.764,3.004,3.758,5.613
												c-0.004,2.61-1.693,4.328-3.775,3.84c-2.08-0.488-3.764-3-3.758-5.608C3.929,214.205,5.621,212.483,7.7,212.971z
												 M7.687,220.737c1.336,0.313,2.424-0.793,2.426-2.47c0.006-1.675-1.076-3.291-2.416-3.604
												c-1.336-0.314-2.424,0.791-2.426,2.469C5.267,218.807,6.349,220.423,7.687,220.737"/>
										</g>
										<g id="XMLID_494_">
											<path id="XMLID_495_" fill="#675E5D" d="M8.289,219.757c-0.014,0.004-0.025,0.006-0.037,0.01
												c-0.174,0.039-0.367,0.039-0.564-0.008c-0.319-0.075-0.616-0.258-0.869-0.516c-0.02-0.023-0.044-0.047-0.064-0.07
												c-0.063-0.066-0.115-0.135-0.168-0.209c-0.048-0.062-0.088-0.125-0.129-0.193c-0.018-0.026-0.033-0.055-0.05-0.084
												c-0.008-0.014-0.016-0.026-0.021-0.041c-0.008-0.016-0.018-0.03-0.025-0.047c-0.016-0.034-0.033-0.066-0.049-0.102
												c-0.004-0.007-0.008-0.018-0.014-0.027c-0.158-0.354-0.25-0.754-0.25-1.158c0.001-1.137,0.74-1.887,1.646-1.674
												c0.313,0.074,0.605,0.25,0.854,0.498l0,0c0.033,0.034,0.064,0.067,0.096,0.103c0.057,0.063,0.111,0.135,0.164,0.207
												c0.051,0.07,0.1,0.145,0.146,0.223c0.005,0.012,0.013,0.025,0.021,0.039c0.006,0.016,0.017,0.031,0.025,0.047
												c0.006,0.016,0.014,0.029,0.021,0.043c0.018,0.031,0.029,0.062,0.043,0.092c0.006,0.019,0.018,0.033,0.023,0.051
												c0.055,0.121,0.1,0.248,0.137,0.378c0.008,0.024,0.015,0.049,0.021,0.073c0.059,0.225,0.09,0.459,0.09,0.695
												c0,0.319-0.061,0.608-0.164,0.854c-0.006,0.014-0.013,0.026-0.019,0.04c-0.05,0.107-0.106,0.205-0.173,0.296
												c-0.006,0.011-0.014,0.021-0.023,0.03C8.78,219.533,8.552,219.69,8.289,219.757z"/>
										</g>
										<path id="XMLID_493_" fill="#514A49" d="M8.227,219.771c-0.17,0.033-0.351,0.033-0.539-0.012
											c-0.318-0.075-0.616-0.258-0.868-0.516c-0.021-0.023-0.045-0.047-0.065-0.07c-0.062-0.065-0.115-0.135-0.168-0.209
											c-0.047-0.062-0.088-0.125-0.129-0.193c-0.018-0.026-0.033-0.055-0.05-0.084c-0.007-0.014-0.015-0.026-0.021-0.041
											c-0.008-0.016-0.016-0.03-0.024-0.047c-0.017-0.033-0.032-0.066-0.05-0.102c-0.004-0.007-0.008-0.018-0.014-0.027
											c-0.158-0.354-0.25-0.754-0.25-1.158c0.002-1.112,0.705-1.851,1.584-1.687c-0.642,0.13-1.107,0.787-1.109,1.687
											c0,0.404,0.093,0.804,0.252,1.158c0.005,0.009,0.009,0.02,0.014,0.027c0.016,0.036,0.032,0.069,0.049,0.102
											c0.006,0.017,0.016,0.031,0.024,0.047c0.007,0.015,0.013,0.027,0.021,0.041c0.016,0.029,0.033,0.058,0.049,0.084
											c0.041,0.068,0.084,0.131,0.127,0.193c0.056,0.074,0.111,0.144,0.17,0.209c0.021,0.023,0.045,0.047,0.066,0.07
											c0.252,0.258,0.549,0.441,0.869,0.516C8.185,219.764,8.207,219.768,8.227,219.771z"/>
									</g>
									<polygon id="XMLID_491_" fill="#828282" points="44.131,235.381 45.37,234.717 49.905,237.317 49.905,238.561 						"/>
									<g>
										<g id="XMLID_489_">
											<path id="XMLID_490_" fill="#FF708A" d="M49.905,230.048v11.17l-4.901-2.918c0.006-0.119,0.016-0.236,0.016-0.358
												c0.006-3.273-2.104-6.427-4.713-7.037c-1.842-0.434-3.437,0.521-4.218,2.268l-12.586-7.076c0.008-0.121,0-4.932,0-4.932
												L3.882,209.369l-0.238,5.242l-1.314-0.757v-30.53l36.989,21.591l5.361,15.265L49.905,230.048z"/>
										</g>
										<g id="XMLID_487_">
											<path id="XMLID_488_" fill="#FFC2DE" d="M49.907,235.26v5.959l-4.902-2.918c0.006-0.119,0.016-0.236,0.016-0.358
												c0.006-3.273-2.104-6.427-4.713-7.037c-1.842-0.434-3.437,0.521-4.218,2.268l-13.359-7.51
												c0.006-0.123,0.018-0.242,0.018-0.367c0.006-3.272-2.105-6.426-4.711-7.039c-1.848-0.432-3.443,0.525-4.225,2.277
												l-0.807-0.472c0.039-0.342,0.059-0.693,0.059-1.049c0-2.887-2.586-6.416-5.088-6.715c-1.785-0.211-3.215,0.811-4.102,2.455
												l-1.547-0.897v-6.082L49.907,235.26z"/>
										</g>
										<g id="XMLID_485_">
											<polygon id="XMLID_486_" fill="#FF849C" points="23.468,171.205 60.541,192.54 39.318,204.915 2.328,183.324 								"/>
										</g>
										<g id="XMLID_483_">
											<polygon id="XMLID_484_" fill="#FFD6F2" points="9.11,182.479 35.699,179.181 35.694,181.226 19.767,190.569 9.11,184.374 
																				"/>
										</g>
										<g id="XMLID_481_">
											<polygon id="XMLID_482_" fill="#FFE5FF" points="35.694,179.129 35.694,181.226 19.763,190.516 19.591,188.536 								"/>
										</g>
										<g id="XMLID_479_">
											<polygon id="XMLID_480_" fill="#FFEDFF" points="25.179,173.268 35.694,179.138 19.563,188.545 9.11,182.479 								"/>
										</g>
										<g id="XMLID_477_">
											<polygon id="XMLID_478_" fill="#FF7490" points="49.905,241.219 71.174,229.393 71.174,217.719 49.905,230.049 								"/>
										</g>
										<g id="XMLID_475_">
											<polygon id="XMLID_476_" fill="#FFEDFF" points="71.174,223.25 71.174,229.393 49.905,241.219 49.905,235.26 								"/>
										</g>
										<g id="XMLID_472_" opacity="0.2">
											<g id="XMLID_473_">
												<path id="XMLID_474_" fill="#FF387D" d="M29.28,210.646l14.85,8.753v11.17c-0.977-0.767-2.619-1.754-4.637-1.754
													c-0.307,0-0.611,0.022-0.912,0.067c-1.26,0.191-2.313,0.898-2.815,1.289l-6.488-3.629v-1.275l0.012-4.399L29.28,210.646
													 M28.729,209.684l0.008,11.185l-0.01,4.399v1.599l7.1,3.971c0,0,1.256-1.17,2.837-1.408
													c0.283-0.043,0.559-0.063,0.83-0.063c3.016,0,5.186,2.446,5.186,2.446v-12.729L28.729,209.684L28.729,209.684z"/>
											</g>
										</g>
										<g id="XMLID_469_">
											<polygon id="XMLID_470_" fill="#FF849C" points="49.905,230.049 71.174,217.719 65.766,207.942 44.68,220.18 								"/>
										</g>
										<g id="XMLID_463_">
											<polygon id="XMLID_464_" fill="#FF708A" points="44.68,220.18 65.766,207.942 60.541,192.54 39.318,204.915 								"/>
										</g>
										<g id="XMLID_457_">
											<polygon id="XMLID_458_" fill="#FF5C7D" points="44.68,220.18 28.729,210.783 28.737,198.74 39.318,204.915 								"/>
										</g>
										<g id="XMLID_454_">
											<rect id="XMLID_455_" x="37.521" y="204.819" fill="#FF5C7D" width="1.102" height="11.039"/>
										</g>
										<polygon id="XMLID_452_" fill="#FFEDFF" points="49.905,237.317 71.174,225.524 72.275,226.047 49.905,238.561 							"/>
									</g>
									<g id="XMLID_401_">
										<polygon id="XMLID_402_" fill="#6EBEBF" points="42.688,217.832 29.53,210.155 29.438,200.263 38.314,205.389 							"/>
									</g>
									<g id="XMLID_399_" opacity="0.28">
										<polygon id="XMLID_400_" points="29.449,201.313 29.438,200.263 38.314,205.389 42.688,217.832 41.512,217.146 
											37.605,206.025 							"/>
									</g>
									<g id="XMLID_392_" opacity="0.31">
										<g id="XMLID_397_">
											<path id="XMLID_398_" fill="#FFFFFF" d="M29.476,204.18l0.75-0.75c0.322-0.322,0.846-0.322,1.168,0
												c0.322,0.321,0.322,0.845,0,1.166l-1.896,1.896L29.476,204.18z"/>
										</g>
										<g id="XMLID_395_">
											<path id="XMLID_396_" fill="#FFFFFF" d="M34.165,206.455l-4.043,4.043l-0.59-0.344l-0.014-1.388l3.479-3.479
												c0.32-0.322,0.844-0.322,1.166,0C34.485,205.611,34.485,206.133,34.165,206.455z"/>
										</g>
										<g id="XMLID_393_">
											<path id="XMLID_394_" fill="#FFFFFF" d="M35.179,210.043l-2.152,2.152l-1.473-0.859l2.459-2.459
												c0.322-0.322,0.844-0.322,1.166,0S35.501,209.721,35.179,210.043z"/>
										</g>
									</g>
									<g id="XMLID_387_">
										<g id="XMLID_390_" opacity="0.28">
											<path id="XMLID_391_" d="M32.198,217.435c0.262,0.156,0.59,0.158,0.855,0.007c0.27-0.15,0.434-0.434,0.434-0.742
												c0-0.311-0.171-0.597-0.441-0.746l-1.715-0.949c-0.255-0.14-0.568-0.136-0.818,0.012c-0.252,0.148-0.406,0.42-0.406,0.711
												s0.154,0.563,0.404,0.709L32.198,217.435z"/>
										</g>
										<g id="XMLID_388_">
											<path id="XMLID_389_" fill="#F4F4F4" d="M32.036,216.763c0.262,0.156,0.59,0.158,0.855,0.006
												c0.27-0.149,0.434-0.433,0.434-0.741c0-0.311-0.171-0.597-0.441-0.746l-1.717-0.949c-0.253-0.14-0.566-0.136-0.816,0.012
												c-0.252,0.148-0.406,0.418-0.406,0.711c0,0.291,0.154,0.562,0.404,0.709L32.036,216.763z"/>
										</g>
									</g>
									<polygon id="XMLID_386_" opacity="0.1" enable-background="new    " points="39.318,204.915 60.536,192.54 62.645,198.74 
										41.381,210.789 						"/>
									<g>
										<g id="XMLID_384_">
											<polygon id="XMLID_385_" fill="#9AF4F4" points="45.307,218.373 64.299,207.266 59.961,194.479 40.854,205.701 								"/>
										</g>
										<g id="XMLID_382_" opacity="0.28">
											<polygon id="XMLID_383_" points="41.178,206.62 40.854,205.701 59.961,194.479 64.299,207.266 63.581,207.686 
												59.557,195.826 								"/>
										</g>
										<g id="XMLID_371_" opacity="0.44">
											<g id="XMLID_380_">
												<path id="XMLID_381_" fill="#FFFFFF" d="M53.563,212.681l-0.596,1.211l-3.441,2.013l2.063-4.193
													c0.268-0.547,0.928-0.772,1.473-0.502C53.607,211.477,53.832,212.135,53.563,212.681z"/>
											</g>
											<g id="XMLID_378_">
												<path id="XMLID_379_" fill="#FFFFFF" d="M61.23,198.228l1.002,2.951l-1.533,3.123c-0.191,0.391-0.582,0.615-0.988,0.615
													c-0.164,0-0.328-0.036-0.484-0.113c-0.545-0.268-0.77-0.927-0.502-1.473L61.23,198.228z"/>
											</g>
											<g id="XMLID_376_">
												<path id="XMLID_377_" fill="#FFFFFF" d="M50.66,209.946l-3.654,7.434l-1.699,0.994l-0.518-1.473l3.896-7.927
													c0.27-0.545,0.926-0.77,1.475-0.502C50.704,208.742,50.928,209.401,50.66,209.946z"/>
											</g>
											<g id="XMLID_374_">
												<path id="XMLID_375_" fill="#FFFFFF" d="M42.834,211.332l1.359-2.771c0.27-0.545,0.93-0.771,1.475-0.502
													c0.545,0.269,0.77,0.929,0.502,1.474l-2.314,4.709L42.834,211.332z"/>
											</g>
											<g id="XMLID_372_">
												<path id="XMLID_373_" fill="#FFFFFF" d="M59.96,194.479l0.574,1.691l-3.998,8.132c-0.193,0.391-0.582,0.615-0.988,0.615
													c-0.164,0-0.328-0.036-0.484-0.113c-0.545-0.268-0.771-0.927-0.502-1.473l3.926-7.986L59.96,194.479z"/>
											</g>
										</g>
										<g id="XMLID_369_">
											<path id="XMLID_370_" fill="#718B9B" d="M59.451,211.075c0.365-0.172,0.521-0.607,0.35-0.974
												c-0.172-0.365-0.609-0.521-0.973-0.35l-7.396,3.484c-0.176,0.084-0.264,0.291-0.194,0.479
												c0.071,0.2,0.294,0.301,0.491,0.228l7.662-2.843C59.411,211.092,59.43,211.084,59.451,211.075z"/>
										</g>
										<polygon id="XMLID_368_" fill="#AFAFAF" points="44.225,207.942 40.625,208.635 39.318,204.915 							"/>
										<polygon id="XMLID_367_" fill="#F4F4F4" points="39.318,204.915 60.536,192.54 65.441,195.565 44.225,207.942 							"/>
									</g>
									<polygon id="XMLID_366_" fill="#F4F4F4" points="54.67,227.283 49.905,230.049 49.905,232.043 54.67,229.278 						"/>
									<polygon id="XMLID_365_" fill="#272B2B" points="65.361,221.77 55.547,227.475 55.547,231.231 65.361,225.524 						"/>
									<polygon id="XMLID_364_" fill="#F4D071" points="54.67,229.268 49.905,232.032 49.905,233.028 54.67,230.264 						"/>
									<polygon id="XMLID_363_" fill="#F4D071" points="71.174,219.713 66.413,222.477 66.413,223.475 71.174,220.709 						"/>
									<polygon id="XMLID_362_" fill="#F4F4F4" points="71.174,217.719 66.413,220.483 66.413,222.477 71.174,219.713 						"/>
									<g id="XMLID_360_">
										<polygon id="XMLID_361_" fill="#AFAFAF" points="72.275,226.047 72.275,228.889 49.905,241.219 49.905,238.561 							"/>
									</g>
									<g id="XMLID_358_">
										<polygon id="XMLID_359_" fill="#939393" points="44.131,235.381 44.131,237.979 49.905,241.219 49.905,238.561 							"/>
									</g>
									<g id="XMLID_356_">
										<polygon id="XMLID_357_" fill="#FFFFFF" points="67.053,231.198 67.053,233.422 59.855,237.467 59.855,235.119 							"/>
									</g>
								</g>
							</g>
							<g>
								<path fill="#FFD6F2" d="M9.177,204.395c-0.081,1.023-0.337,1.777-0.769,2.262c-0.464,0.519-1.025,0.592-1.686,0.219
									l-1.536-0.869c-0.313-0.177-0.557-0.444-0.728-0.798c-0.185-0.384-0.259-0.813-0.222-1.286l0.354-4.518
									c0.035-0.444,0.171-0.739,0.405-0.886c0.216-0.136,0.471-0.121,0.767,0.046l1.543,0.873c0.683,0.386,1.192,1.064,1.53,2.036
									C9.146,202.371,9.259,203.344,9.177,204.395z M7.589,203.464c0.033-0.416,0.002-0.795-0.096-1.137
									c-0.107-0.392-0.286-0.659-0.536-0.8l-0.696-0.394c-0.087-0.049-0.134-0.024-0.142,0.074l-0.218,2.772
									c-0.006,0.077,0.002,0.13,0.023,0.157c0.005,0.002,0.029,0.017,0.075,0.042l0.717,0.405c0.25,0.141,0.454,0.084,0.612-0.173
									C7.471,204.196,7.557,203.88,7.589,203.464z"/>
								<path fill="#FFD6F2" d="M14.12,209.898c-0.029,0.374-0.135,0.63-0.316,0.771c-0.182,0.133-0.396,0.13-0.642-0.009
									c-0.237-0.134-0.425-0.436-0.563-0.904l-0.766-2.609l-0.683-0.386l-0.12,1.534c-0.026,0.339-0.125,0.563-0.295,0.673
									c-0.171,0.117-0.364,0.114-0.583-0.009c-0.232-0.131-0.411-0.336-0.537-0.613c-0.135-0.282-0.188-0.597-0.161-0.942
									l0.398-5.068c0.034-0.437,0.157-0.732,0.368-0.885c0.201-0.137,0.45-0.121,0.746,0.046l2.102,1.188
									c0.465,0.263,0.822,0.72,1.076,1.371c0.236,0.612,0.327,1.279,0.271,1.998c-0.03,0.388-0.12,0.739-0.269,1.053
									c-0.16,0.358-0.354,0.558-0.581,0.6l0.459,1.508C14.104,209.472,14.136,209.701,14.12,209.898z M12.845,205.166
									c0.018-0.226-0.051-0.382-0.205-0.47l-1.257-0.71c-0.009-0.006-0.015,0.002-0.016,0.023l-0.047,0.593l1.277,0.722
									C12.747,205.409,12.83,205.356,12.845,205.166z"/>
								<path fill="#FFD6F2" d="M16.208,211.178c-0.025,0.331-0.128,0.564-0.305,0.701c-0.173,0.137-0.368,0.145-0.586,0.022
									c-0.215-0.121-0.392-0.34-0.533-0.655c-0.136-0.32-0.192-0.643-0.167-0.967l0.424-5.386c0.025-0.331,0.13-0.563,0.312-0.696
									c0.177-0.136,0.374-0.143,0.593-0.019c0.214,0.122,0.39,0.342,0.525,0.662c0.132,0.311,0.187,0.628,0.161,0.953L16.208,211.178
									z"/>
								<path fill="#FFD6F2" d="M21.471,214.054c-0.029,0.374-0.134,0.631-0.316,0.771c-0.178,0.143-0.392,0.144-0.642,0.003
									c-0.31-0.175-0.543-0.499-0.701-0.972l-1.202-3.575l-0.168,2.137c-0.028,0.359-0.126,0.604-0.293,0.729
									c-0.166,0.134-0.368,0.134-0.604,0c-0.232-0.131-0.411-0.346-0.535-0.645c-0.128-0.308-0.179-0.635-0.151-0.98l0.415-5.279
									c0.03-0.381,0.13-0.645,0.298-0.793c0.164-0.157,0.372-0.166,0.622-0.024c0.318,0.18,0.552,0.503,0.701,0.971l1.217,3.748
									l0.189-2.412c0.026-0.331,0.131-0.551,0.316-0.661c0.163-0.091,0.354-0.075,0.573,0.048c0.228,0.129,0.404,0.314,0.533,0.556
									c0.144,0.287,0.202,0.604,0.175,0.949L21.471,214.054z"/>
								<path fill="#FFD6F2" d="M26.535,216.929c-0.028,0.359-0.124,0.618-0.288,0.775c-0.169,0.155-0.372,0.166-0.609,0.031
									c-0.272-0.154-0.477-0.465-0.61-0.931l-0.878-3.082l-0.427,0.267l-0.107,1.365c-0.028,0.359-0.123,0.608-0.286,0.744
									c-0.166,0.127-0.369,0.123-0.605-0.011c-0.237-0.134-0.417-0.35-0.541-0.648c-0.133-0.303-0.186-0.632-0.158-0.984l0.423-5.375
									c0.027-0.353,0.125-0.595,0.293-0.729c0.157-0.131,0.354-0.131,0.591,0.003c0.236,0.134,0.423,0.349,0.556,0.645
									c0.129,0.302,0.179,0.628,0.151,0.98l-0.08,1.016l1.805-1.023c0.153-0.075,0.328-0.058,0.524,0.054
									c0.213,0.121,0.387,0.343,0.518,0.668c0.123,0.312,0.171,0.631,0.146,0.956c-0.031,0.402-0.171,0.669-0.419,0.801l-0.998,0.541
									l0.91,3.2C26.522,216.465,26.553,216.71,26.535,216.929z"/>
							</g>
							<g>
								<path fill="#FFD6F2" d="M9.262,196.503c-0.014,0.178-0.072,0.352-0.175,0.518c-0.436,0.691-1.123,0.771-2.063,0.239
									c-0.697-0.394-1.226-1.025-1.582-1.891c-0.352-0.87-0.484-1.835-0.401-2.898c0.079-1.005,0.361-1.712,0.848-2.122
									c0.495-0.398,1.076-0.409,1.745-0.03c0.937,0.529,1.527,1.313,1.776,2.35c0.06,0.272,0.083,0.504,0.067,0.695
									c-0.024,0.312-0.108,0.52-0.255,0.624c-0.138,0.115-0.307,0.115-0.508,0.001c-0.181-0.102-0.379-0.393-0.594-0.874
									c-0.21-0.484-0.433-0.793-0.666-0.925c-0.259-0.147-0.482-0.093-0.669,0.16c-0.172,0.222-0.273,0.542-0.307,0.962
									c-0.037,0.465-0.002,0.87,0.104,1.215c0.115,0.39,0.311,0.664,0.585,0.819c0.192,0.109,0.38,0.122,0.563,0.039
									c0.15-0.101,0.297-0.201,0.441-0.298c0.171-0.096,0.334-0.1,0.49-0.012c0.2,0.114,0.359,0.303,0.476,0.568
									C9.245,195.906,9.286,196.191,9.262,196.503z"/>
								<path fill="#FFD6F2" d="M13.06,199.577c-0.023,0.293-0.107,0.504-0.256,0.633c-0.144,0.139-0.313,0.151-0.511,0.04
									c-0.201-0.114-0.361-0.311-0.481-0.591c-0.127-0.285-0.179-0.576-0.155-0.875l0.107-1.365c0.024-0.312-0.041-0.511-0.192-0.596
									c-0.103-0.058-0.204-0.073-0.306-0.043c-0.116,0.021-0.18,0.094-0.189,0.222l-0.107,1.374c-0.025,0.318-0.116,0.54-0.271,0.664
									c-0.146,0.124-0.325,0.125-0.535,0.006c-0.2-0.113-0.354-0.309-0.455-0.586c-0.11-0.281-0.153-0.572-0.13-0.871l0.383-4.876
									c0.024-0.312,0.109-0.525,0.256-0.643c0.142-0.119,0.318-0.119,0.527,0c0.186,0.104,0.337,0.293,0.457,0.567
									c0.123,0.283,0.175,0.564,0.152,0.844l-0.103,1.308c0.164-0.021,0.359,0.034,0.584,0.161c0.469,0.265,0.825,0.662,1.071,1.193
									c0.241,0.528,0.334,1.146,0.278,1.852L13.06,199.577z"/>
								<path fill="#FFD6F2" d="M17.14,200.011c-0.03,0.395-0.144,0.646-0.336,0.757c0.138,0.204,0.199,0.405,0.184,0.602
									c-0.037,0.471-0.285,0.725-0.748,0.763c-0.362,0.034-0.716-0.046-1.061-0.241c-0.501-0.282-0.906-0.725-1.215-1.324
									c-0.343-0.652-0.484-1.351-0.426-2.095c0.061-0.776,0.291-1.28,0.69-1.513c0.365-0.225,0.808-0.19,1.329,0.104
									c0.418,0.237,0.787,0.615,1.107,1.134C17.029,198.802,17.188,199.407,17.14,200.011z M15.938,200.497l-1.102-0.623
									c0.062,0.254,0.213,0.45,0.455,0.586C15.524,200.593,15.741,200.605,15.938,200.497z M15.72,198.929
									c-0.036-0.193-0.152-0.345-0.35-0.457c-0.132-0.075-0.24-0.049-0.327,0.074L15.72,198.929z"/>
								<path fill="#FFD6F2" d="M20.315,200.77c-0.021,0.261-0.094,0.452-0.22,0.574c-0.129,0.12-0.281,0.13-0.459,0.029
									c-0.036-0.021-0.097-0.058-0.177-0.11c-0.077-0.057-0.135-0.095-0.172-0.117c-0.135-0.076-0.274-0.069-0.419,0.022
									l-0.136,1.728c-0.023,0.292-0.107,0.487-0.251,0.585c-0.142,0.1-0.308,0.095-0.501-0.014c-0.197-0.111-0.353-0.292-0.466-0.542
									c-0.118-0.247-0.165-0.516-0.143-0.808l0.225-2.853c0.023-0.299,0.102-0.508,0.235-0.625c0.135-0.123,0.3-0.129,0.497-0.018
									c0.233,0.132,0.418,0.353,0.552,0.661c0.239-0.091,0.473-0.071,0.702,0.059C20.122,199.645,20.366,200.121,20.315,200.77z"/>
								<path fill="#FFD6F2" d="M23.411,202.521c-0.021,0.261-0.094,0.452-0.22,0.574c-0.128,0.12-0.281,0.129-0.458,0.03
									c-0.037-0.021-0.097-0.058-0.178-0.11c-0.077-0.057-0.133-0.096-0.172-0.117c-0.135-0.076-0.274-0.069-0.419,0.022
									l-0.136,1.727c-0.023,0.293-0.107,0.488-0.251,0.585c-0.141,0.1-0.308,0.095-0.501-0.014c-0.197-0.111-0.353-0.292-0.466-0.542
									c-0.117-0.246-0.164-0.515-0.142-0.808l0.225-2.854c0.023-0.299,0.101-0.507,0.234-0.624c0.135-0.124,0.3-0.13,0.497-0.018
									c0.233,0.132,0.418,0.352,0.552,0.66c0.239-0.091,0.474-0.071,0.703,0.059C23.218,201.395,23.462,201.872,23.411,202.521z"/>
								<path fill="#FFD6F2" d="M27.161,204.72c-0.014,0.172-0.06,0.326-0.133,0.463l-1.168,2.081c-0.438,0.782-0.88,1.047-1.322,0.797
									c-0.83-0.469-1.212-1.104-1.149-1.906c0.022-0.28,0.104-0.493,0.243-0.64s0.307-0.165,0.5-0.056
									c0.004,0.002,0.035,0.017,0.093,0.042c0.046,0.013,0.082,0.033,0.105,0.06c-0.267-0.928-0.469-1.657-0.606-2.187
									c-0.053-0.209-0.069-0.434-0.05-0.676c0.021-0.279,0.119-0.474,0.29-0.583c0.162-0.108,0.336-0.109,0.521-0.004
									c0.246,0.139,0.422,0.421,0.525,0.845l0.377,1.5l0.481-0.974c0.153-0.306,0.375-0.376,0.667-0.211
									c0.196,0.111,0.355,0.304,0.476,0.577C27.134,204.117,27.186,204.409,27.161,204.72z"/>
							</g>
						</g>
					</g>
					<g id="truck4_1_">
						<g id="truckMove4">
							<g id="truck4">
								<path id="XMLID_1268_" opacity="0.4" enable-background="new    " d="M158.461,137.79l23.393,13.244
									c1.377,0.779,1.387,2.765,0.016,3.553l-44.644,25.707c-0.627,0.361-1.396,0.363-2.027,0.007l-23.395-13.242
									c-1.379-0.779-1.385-2.765-0.014-3.554l44.642-25.708C157.059,137.435,157.83,137.432,158.461,137.79z"/>
								<polygon id="XMLID_1267_" fill="#5E4843" points="170.379,147.45 170.379,151.966 169.074,152.897 164.024,150.504 					"/>
								<g id="XMLID_1254_">
									<path id="XMLID_1266_" fill="#121414" d="M158.385,155.288c-0.006-2.608,1.688-5.082,3.758-5.612
										c0.852-0.22,2.273-0.574,5.301,1.862c1.117,0.898-4.02,8.867-4.02,8.867l-2.951-1.387c-0.104-0.041-0.207-0.088-0.305-0.144
										l-0.055-0.024v-0.002C159.076,158.249,158.387,156.952,158.385,155.288z"/>
									<g id="XMLID_1262_">
										<path id="XMLID_1263_" fill="#433B39" d="M167.678,155.282c0.004,1.676-1.08,3.291-2.416,3.605
											c-1.336,0.313-2.424-0.793-2.426-2.47c-0.004-1.678,1.078-3.293,2.414-3.604
											C166.588,152.499,167.676,153.604,167.678,155.282z M165.26,157.911c0.908-0.213,1.643-1.309,1.641-2.447
											c-0.004-1.139-0.738-1.889-1.646-1.676c-0.906,0.215-1.643,1.312-1.639,2.447
											C163.615,157.374,164.353,158.124,165.26,157.911"/>
									</g>
									<g id="XMLID_1258_">
										<path id="XMLID_1259_" fill="#272B2B" d="M169.022,154.966c0.005,2.608-1.678,5.12-3.758,5.608
											c-2.082,0.488-3.771-1.229-3.773-3.84c-0.008-2.611,1.676-5.125,3.758-5.613
											C167.328,150.634,169.018,152.356,169.022,154.966z M165.262,158.888c1.336-0.314,2.42-1.931,2.416-3.605
											c-0.002-1.678-1.09-2.783-2.428-2.469c-1.336,0.313-2.418,1.928-2.414,3.604
											C162.838,158.095,163.926,159.202,165.262,158.888"/>
									</g>
									<g id="XMLID_1256_">
										<path id="XMLID_1257_" fill="#675E5D" d="M163.99,157.458c-0.01-0.01-0.018-0.021-0.023-0.032
											c-0.066-0.089-0.123-0.187-0.172-0.293c-0.006-0.015-0.012-0.027-0.02-0.041c-0.104-0.246-0.162-0.535-0.162-0.855
											c0-0.236,0.029-0.471,0.088-0.693c0.008-0.024,0.014-0.051,0.021-0.073c0.037-0.129,0.082-0.257,0.135-0.377
											c0.012-0.019,0.018-0.035,0.025-0.052c0.014-0.03,0.027-0.063,0.043-0.092c0.008-0.014,0.016-0.029,0.023-0.043
											c0.008-0.018,0.018-0.033,0.023-0.049c0.008-0.014,0.018-0.025,0.021-0.037c0.045-0.078,0.094-0.152,0.145-0.223
											c0.053-0.074,0.107-0.144,0.164-0.207c0.031-0.035,0.064-0.068,0.096-0.103l0,0c0.248-0.248,0.541-0.426,0.854-0.5
											c0.908-0.213,1.645,0.537,1.646,1.676c0,0.404-0.092,0.804-0.252,1.156c-0.004,0.01-0.008,0.021-0.012,0.029
											c-0.016,0.035-0.033,0.068-0.049,0.102c-0.01,0.017-0.019,0.031-0.025,0.048c-0.008,0.014-0.014,0.026-0.021,0.041
											c-0.018,0.026-0.033,0.057-0.049,0.084c-0.041,0.065-0.084,0.131-0.131,0.192c-0.053,0.072-0.107,0.144-0.168,0.207
											c-0.021,0.025-0.045,0.049-0.064,0.072c-0.252,0.256-0.549,0.438-0.869,0.516c-0.197,0.047-0.389,0.047-0.564,0.008
											c-0.014-0.004-0.023-0.006-0.035-0.01C164.396,157.841,164.168,157.684,163.99,157.458z"/>
									</g>
									<path id="XMLID_1255_" fill="#514A49" d="M164.785,157.911c0.316-0.076,0.615-0.26,0.869-0.516
										c0.021-0.023,0.045-0.047,0.064-0.072c0.061-0.063,0.115-0.135,0.168-0.207c0.045-0.063,0.088-0.127,0.129-0.192
										c0.018-0.027,0.031-0.058,0.049-0.085c0.008-0.014,0.016-0.026,0.021-0.04c0.008-0.017,0.018-0.031,0.025-0.048
										c0.016-0.032,0.031-0.065,0.047-0.102c0.006-0.01,0.01-0.021,0.014-0.029c0.16-0.354,0.252-0.752,0.25-1.156
										c0-0.899-0.465-1.557-1.107-1.686c0.881-0.164,1.58,0.574,1.584,1.686c0,0.404-0.092,0.804-0.252,1.156
										c-0.004,0.01-0.008,0.021-0.012,0.029c-0.016,0.035-0.033,0.068-0.049,0.102c-0.01,0.017-0.02,0.031-0.025,0.048
										c-0.008,0.014-0.014,0.026-0.021,0.04c-0.018,0.027-0.033,0.058-0.049,0.085c-0.041,0.065-0.084,0.131-0.131,0.192
										c-0.053,0.072-0.107,0.144-0.168,0.207c-0.021,0.025-0.045,0.049-0.064,0.072c-0.252,0.256-0.549,0.438-0.869,0.516
										c-0.189,0.043-0.369,0.045-0.539,0.013C164.742,157.918,164.764,157.917,164.785,157.911z"/>
								</g>
								<g id="XMLID_1240_">
									<path id="XMLID_1252_" fill="#121414" d="M136.066,167.804c-0.004-2.609,1.688-5.082,3.762-5.613
										c0.85-0.219,2.271-0.574,5.301,1.863c1.116,0.897-4.021,8.866-4.021,8.866l-2.949-1.385c-0.105-0.041-0.207-0.09-0.309-0.145
										l-0.053-0.025v-0.002C136.761,170.766,136.07,169.468,136.066,167.804z"/>
									<g id="XMLID_1248_">
										<path id="XMLID_1249_" fill="#433B39" d="M145.361,167.798c0.005,1.676-1.079,3.29-2.416,3.604s-2.425-0.791-2.429-2.469
											c-0.002-1.676,1.08-3.291,2.416-3.605C144.271,165.015,145.357,166.122,145.361,167.798z M142.945,170.427
											c0.906-0.214,1.643-1.31,1.639-2.445c-0.002-1.139-0.738-1.889-1.646-1.676c-0.904,0.213-1.641,1.309-1.639,2.446
											C141.3,169.89,142.038,170.64,142.945,170.427"/>
									</g>
									<g id="XMLID_1244_">
										<path id="XMLID_1245_" fill="#272B2B" d="M146.709,167.481c0.004,2.609-1.68,5.121-3.759,5.609
											c-2.082,0.487-3.771-1.23-3.777-3.841c-0.004-2.61,1.678-5.123,3.76-5.612C145.013,163.149,146.703,164.872,146.709,167.481z
											 M142.945,171.403c1.337-0.313,2.421-1.93,2.416-3.604c-0.005-1.676-1.091-2.783-2.429-2.47
											c-1.336,0.314-2.418,1.931-2.416,3.605C140.521,170.612,141.611,171.718,142.945,171.403"/>
									</g>
									<g id="XMLID_1242_">
										<path id="XMLID_1243_" fill="#675E5D" d="M141.675,169.975c-0.008-0.013-0.016-0.023-0.023-0.035
											c-0.064-0.088-0.122-0.187-0.172-0.293c-0.006-0.014-0.012-0.027-0.018-0.039c-0.105-0.248-0.164-0.535-0.164-0.855
											c0-0.235,0.031-0.471,0.088-0.694c0.008-0.025,0.014-0.049,0.021-0.074c0.038-0.129,0.084-0.256,0.137-0.377
											c0.008-0.019,0.016-0.033,0.021-0.051c0.018-0.031,0.029-0.062,0.046-0.09c0.009-0.017,0.017-0.029,0.022-0.046
											c0.007-0.016,0.019-0.03,0.025-0.049c0.008-0.012,0.016-0.024,0.021-0.037c0.045-0.078,0.094-0.151,0.146-0.223
											c0.053-0.074,0.104-0.143,0.164-0.207c0.029-0.035,0.063-0.068,0.096-0.1c0-0.002,0-0.002,0-0.002
											c0.248-0.248,0.541-0.427,0.852-0.498c0.908-0.213,1.646,0.537,1.646,1.676c0.002,0.402-0.09,0.801-0.25,1.156
											c-0.004,0.01-0.008,0.02-0.012,0.028c-0.018,0.033-0.033,0.066-0.051,0.101c-0.01,0.016-0.018,0.03-0.023,0.047
											c-0.008,0.014-0.016,0.026-0.021,0.041c-0.016,0.028-0.033,0.057-0.051,0.084c-0.039,0.065-0.082,0.133-0.127,0.192
											c-0.053,0.074-0.109,0.144-0.168,0.209c-0.021,0.023-0.045,0.048-0.066,0.07c-0.252,0.256-0.549,0.439-0.869,0.517
											c-0.197,0.047-0.389,0.047-0.563,0.008c-0.014-0.004-0.025-0.006-0.039-0.011C142.081,170.358,141.852,170.2,141.675,169.975
											z"/>
									</g>
									<path id="XMLID_1241_" fill="#514A49" d="M142.47,170.427c0.318-0.076,0.617-0.261,0.867-0.517
										c0.021-0.022,0.047-0.047,0.067-0.069c0.06-0.066,0.114-0.136,0.169-0.209c0.045-0.062,0.088-0.128,0.129-0.193
										c0.016-0.027,0.029-0.055,0.049-0.084c0.006-0.014,0.014-0.027,0.021-0.041c0.01-0.016,0.018-0.031,0.025-0.047
										c0.016-0.033,0.031-0.066,0.047-0.101c0.006-0.01,0.01-0.02,0.014-0.028c0.16-0.355,0.252-0.754,0.25-1.156
										c-0.002-0.902-0.465-1.559-1.105-1.688c0.877-0.164,1.582,0.574,1.582,1.688c0.002,0.402-0.09,0.801-0.25,1.156
										c-0.004,0.01-0.008,0.02-0.014,0.028c-0.016,0.033-0.031,0.066-0.049,0.101c-0.01,0.016-0.018,0.031-0.023,0.047
										c-0.009,0.014-0.016,0.027-0.021,0.041c-0.016,0.029-0.033,0.057-0.051,0.084c-0.039,0.065-0.082,0.133-0.127,0.193
										c-0.053,0.073-0.109,0.143-0.168,0.209c-0.021,0.022-0.045,0.047-0.066,0.069c-0.252,0.256-0.549,0.439-0.869,0.517
										c-0.188,0.045-0.369,0.047-0.539,0.012C142.427,170.434,142.448,170.432,142.47,170.427z"/>
								</g>
								<polygon id="XMLID_1239_" fill="#5E4843" points="180.322,141.657 180.322,146.173 179.018,147.104 173.969,144.711 					"/>
								<g id="XMLID_1226_">
									<path id="XMLID_1238_" fill="#121414" d="M168.326,149.495c-0.004-2.608,1.688-5.082,3.76-5.612
										c0.852-0.22,2.271-0.572,5.301,1.862c1.117,0.898-4.018,8.869-4.018,8.869l-2.953-1.387c-0.104-0.043-0.207-0.09-0.305-0.146
										l-0.057-0.024l0.002-0.002C169.019,152.458,168.33,151.159,168.326,149.495z"/>
									<g id="XMLID_1234_">
										<path id="XMLID_1235_" fill="#433B39" d="M177.621,149.489c0.004,1.676-1.078,3.291-2.416,3.605
											c-1.336,0.313-2.424-0.793-2.428-2.47c-0.004-1.676,1.078-3.291,2.416-3.604
											C176.531,146.706,177.619,147.811,177.621,149.489z M175.203,152.118c0.908-0.213,1.643-1.309,1.641-2.447
											c-0.002-1.137-0.74-1.887-1.648-1.674c-0.904,0.213-1.641,1.31-1.639,2.447C173.559,151.581,174.297,152.331,175.203,152.118
											"/>
									</g>
									<g id="XMLID_1230_">
										<path id="XMLID_1231_" fill="#272B2B" d="M178.967,149.173c0.006,2.608-1.678,5.12-3.758,5.608
											c-2.082,0.488-3.771-1.229-3.775-3.84c-0.006-2.609,1.676-5.125,3.758-5.613
											C177.271,144.841,178.963,146.563,178.967,149.173z M175.205,153.095c1.338-0.314,2.42-1.931,2.416-3.605
											c-0.002-1.678-1.09-2.783-2.426-2.469c-1.34,0.313-2.422,1.93-2.416,3.604C172.781,152.302,173.869,153.409,175.205,153.095"
											/>
									</g>
									<g id="XMLID_1228_">
										<path id="XMLID_1229_" fill="#675E5D" d="M173.935,151.665c-0.01-0.01-0.018-0.02-0.023-0.03
											c-0.066-0.091-0.123-0.188-0.173-0.296c-0.006-0.014-0.013-0.026-0.019-0.04c-0.104-0.246-0.164-0.535-0.164-0.854
											c0-0.236,0.031-0.471,0.09-0.695c0.007-0.024,0.014-0.049,0.021-0.073c0.037-0.13,0.082-0.257,0.137-0.378
											c0.006-0.018,0.018-0.032,0.023-0.051c0.014-0.03,0.025-0.061,0.043-0.092c0.008-0.014,0.016-0.027,0.021-0.043
											c0.009-0.016,0.02-0.031,0.025-0.047c0.008-0.014,0.016-0.027,0.021-0.039c0.047-0.078,0.096-0.152,0.146-0.223
											c0.053-0.072,0.107-0.144,0.164-0.207c0.031-0.035,0.063-0.068,0.096-0.103l0,0c0.248-0.248,0.541-0.424,0.854-0.498
											c0.906-0.213,1.646,0.537,1.646,1.674c0,0.404-0.092,0.804-0.25,1.158c-0.006,0.01-0.01,0.021-0.014,0.027
											c-0.016,0.035-0.033,0.067-0.049,0.102c-0.008,0.017-0.018,0.031-0.025,0.047c-0.006,0.015-0.014,0.027-0.021,0.041
											c-0.017,0.029-0.032,0.058-0.05,0.084c-0.041,0.068-0.081,0.132-0.129,0.193c-0.053,0.074-0.105,0.143-0.168,0.209
											c-0.021,0.023-0.045,0.047-0.064,0.07c-0.253,0.258-0.55,0.44-0.869,0.516c-0.197,0.047-0.391,0.047-0.564,0.008
											c-0.012-0.004-0.023-0.006-0.037-0.01C174.34,152.048,174.111,151.891,173.935,151.665z"/>
									</g>
									<path id="XMLID_1227_" fill="#514A49" d="M174.728,152.118c0.32-0.074,0.617-0.258,0.869-0.516
										c0.021-0.023,0.045-0.047,0.066-0.07c0.059-0.065,0.114-0.135,0.17-0.209c0.043-0.063,0.086-0.125,0.127-0.193
										c0.016-0.026,0.033-0.055,0.049-0.084c0.008-0.014,0.014-0.026,0.021-0.041c0.009-0.016,0.019-0.03,0.024-0.047
										c0.017-0.032,0.033-0.065,0.049-0.102c0.005-0.008,0.009-0.019,0.014-0.027c0.159-0.354,0.252-0.754,0.252-1.158
										c-0.002-0.899-0.468-1.557-1.109-1.687c0.879-0.164,1.582,0.574,1.584,1.687c0,0.404-0.092,0.804-0.25,1.158
										c-0.006,0.01-0.01,0.021-0.014,0.027c-0.018,0.035-0.033,0.068-0.05,0.102c-0.009,0.017-0.017,0.031-0.024,0.047
										c-0.006,0.015-0.014,0.027-0.021,0.041c-0.017,0.029-0.032,0.058-0.05,0.084c-0.041,0.068-0.082,0.132-0.129,0.193
										c-0.053,0.074-0.106,0.144-0.168,0.209c-0.021,0.023-0.045,0.047-0.065,0.07c-0.252,0.258-0.55,0.44-0.868,0.516
										c-0.188,0.045-0.369,0.045-0.539,0.012C174.685,152.125,174.707,152.122,174.728,152.118z"/>
								</g>
								<polygon id="XMLID_1151_" fill="#828282" points="132.986,170.918 132.986,169.675 137.521,167.075 138.761,167.739 					"/>
								<g>
									<g id="XMLID_1224_">
										<path id="XMLID_1225_" fill="#FF708A" d="M138.212,152.538l5.361-15.265l36.989-21.591v30.53l-1.314,0.757l-0.238-5.242
											l-19.621,11.795c0,0-0.008,4.811,0,4.932l-12.586,7.076c-0.781-1.746-2.376-2.701-4.218-2.268
											c-2.609,0.61-4.719,3.764-4.713,7.037c0,0.122,0.01,0.239,0.016,0.358l-4.901,2.918v-11.17L138.212,152.538z"/>
									</g>
									<g id="XMLID_1222_">
										<path id="XMLID_1223_" fill="#FFC2DE" d="M180.563,140.132v6.082l-1.547,0.897c-0.887-1.645-2.316-2.666-4.102-2.455
											c-2.502,0.299-5.088,3.828-5.088,6.715c0,0.355,0.02,0.707,0.059,1.049l-0.807,0.472c-0.781-1.752-2.377-2.709-4.225-2.277
											c-2.605,0.613-4.717,3.767-4.711,7.039c0,0.125,0.012,0.244,0.018,0.367l-13.359,7.51c-0.781-1.746-2.376-2.701-4.218-2.268
											c-2.609,0.61-4.719,3.764-4.713,7.037c0,0.122,0.01,0.239,0.016,0.358l-4.902,2.918v-5.959L180.563,140.132z"/>
									</g>
									<g id="XMLID_1220_">
										<polygon id="XMLID_1221_" fill="#FF849C" points="180.563,115.682 143.573,137.273 122.351,124.898 159.424,103.563 							
											"/>
									</g>
									<g id="XMLID_1218_">
										<polygon id="XMLID_1219_" fill="#FFD6F2" points="173.781,116.732 163.125,122.927 147.197,113.583 147.192,111.539 
											173.781,114.837 							"/>
									</g>
									<g id="XMLID_1216_">
										<polygon id="XMLID_1217_" fill="#FFE5FF" points="163.301,120.894 163.129,122.874 147.197,113.583 147.197,111.487 							
											"/>
									</g>
									<g id="XMLID_1214_">
										<polygon id="XMLID_1215_" fill="#FFEDFF" points="173.781,114.837 163.328,120.903 147.197,111.496 157.713,105.625 							
											"/>
									</g>
									<g id="XMLID_1212_">
										<polygon id="XMLID_1213_" fill="#FF7490" points="132.986,162.407 111.718,150.077 111.718,161.75 132.986,173.577 							
											"/>
									</g>
									<g id="XMLID_1210_">
										<polygon id="XMLID_1211_" fill="#FFEDFF" points="132.986,167.618 132.986,173.577 111.718,161.75 111.718,155.608 							
											"/>
									</g>
									<g id="XMLID_1199_" opacity="0.2">
										<g id="XMLID_1200_">
											<path id="XMLID_1201_" fill="#FF387D" d="M153.611,143.004l-0.009,10.222l0.012,4.399v1.275l-6.488,3.629
												c-0.502-0.391-1.556-1.098-2.815-1.289c-0.301-0.045-0.605-0.067-0.912-0.067c-2.018,0-3.66,0.987-4.637,1.754v-11.17
												L153.611,143.004 M154.162,142.042l-15.95,9.4v12.729c0,0,2.17-2.446,5.186-2.446c0.271,0,0.547,0.02,0.83,0.063
												c1.581,0.238,2.837,1.408,2.837,1.408l7.1-3.971v-1.599l-0.01-4.399L154.162,142.042L154.162,142.042z"/>
										</g>
									</g>
									<g id="XMLID_1197_">
										<polygon id="XMLID_1198_" fill="#FF849C" points="138.212,152.538 117.126,140.3 111.718,150.077 132.986,162.407 							"/>
									</g>
									<g id="XMLID_1195_">
										<polygon id="XMLID_1196_" fill="#FF708A" points="143.573,137.273 122.351,124.898 117.126,140.3 138.212,152.538 							"/>
									</g>
									<g id="XMLID_1187_">
										<polygon id="XMLID_1188_" fill="#FF5C7D" points="143.573,137.273 154.154,131.098 154.162,143.141 138.212,152.538 							
											"/>
									</g>
									<g id="XMLID_1181_">
										<rect id="XMLID_1182_" x="144.27" y="137.177" fill="#FF5C7D" width="1.102" height="11.039"/>
									</g>
									<polygon id="XMLID_1150_" fill="#FFEDFF" points="132.986,170.918 110.616,158.405 111.718,157.882 132.986,169.675 						"/>
								</g>
								<g id="XMLID_199_">
									<g id="XMLID_1145_">
										<polygon id="XMLID_1146_" fill="#495E5E" points="179.021,118.363 179.021,136.468 157.828,148.932 157.828,130.601 							
											"/>
									</g>
									<g id="XMLID_1143_" opacity="0.28">
										<path id="XMLID_1144_" d="M180.563,117.784v28.431l-1.598,0.928c-0.592-1.324-1.935-2.484-3.373-2.484
											c-2.768,0-4.707,2.447-5.604,5.398c-0.248,0.819-0.104,2.364-0.104,2.364l-12.059-21.818L180.563,117.784z"/>
									</g>
									<g id="XMLID_1139_">
										<path id="XMLID_1140_" fill="#F7EDD9" d="M177.922,120.268v15.569l-18.992,11.171v-15.772L177.922,120.268 M179.021,118.363
											l-21.191,12.238v18.331l21.191-12.465V118.363L179.021,118.363z"/>
									</g>
									<g id="XMLID_1134_">
										<g id="XMLID_1135_">
											<path id="XMLID_1136_" d="M178.473,119.315v16.839l-20.094,11.817v-17.054L178.473,119.315 M179.021,118.363l-21.191,12.238
												v18.331l21.191-12.465V118.363L179.021,118.363z"/>
										</g>
									</g>
									<g id="XMLID_1132_">
										<polygon id="XMLID_1133_" fill="#F7EDD9" points="168.391,136.907 157.938,148.964 157.938,147.653 167.572,136.417 							
											"/>
									</g>
									<g id="XMLID_1130_">
										<polygon id="XMLID_1131_" points="157.938,148.964 159.688,147.934 170.313,135.784 168.391,136.907 							"/>
									</g>
									<g id="XMLID_1128_">
										<polyline id="XMLID_1129_" points="189.998,124.292 179.133,136.5 179.133,134.758 186.9,126.099 189.998,124.292 							"/>
									</g>
									<g id="XMLID_1126_">
										<polygon id="XMLID_1127_" fill="#F7EDD9" points="179.133,136.5 189.998,124.292 187.922,125.499 177.291,137.558 							"/>
									</g>
									<g id="XMLID_200_">
										<g id="XMLID_1124_">
											<polygon id="XMLID_1125_" fill="#F7EDD9" points="179.484,118.076 190.002,124.257 168.394,136.872 157.935,130.608 
																				"/>
										</g>
										<g id="XMLID_1115_">
											<path fill="#F7EDD9" d="M190.002,124.257v2.73c0,0.549-0.293,1.057-0.77,1.334l-0.008,0.004
												c-0.477,0.277-1.063,0.279-1.543,0.005c-0.479-0.273-0.771-0.782-0.773-1.334l-0.006-0.938L190.002,124.257z"/>
										</g>
										<g id="XMLID_453_">
											<path fill="#F7EDD9" d="M183.772,127.892l0.012,2.742c0.002,0.539-0.283,1.037-0.75,1.309
												c-0.479,0.278-1.07,0.279-1.55,0.002s-0.772-0.79-0.771-1.345l0.004-0.925L183.772,127.892z"/>
										</g>
										<g id="XMLID_443_">
											<path fill="#F7EDD9" d="M177.646,131.471l-0.006,2.729c-0.002,0.55-0.295,1.058-0.77,1.331l-0.018,0.01
												c-0.477,0.275-1.063,0.277-1.541,0.003c-0.479-0.273-0.771-0.781-0.773-1.332l-0.005-0.948L177.646,131.471z"/>
										</g>
										<g>
											<g>
												<g id="XMLID_1122_">
													<polygon id="XMLID_1123_" fill="#FFCC33" points="186.904,126.064 176.65,119.707 173.709,121.42 183.772,127.892 
																								"/>
												</g>
												<g id="XMLID_1120_">
													<polygon id="XMLID_1121_" fill="#FFCC33" points="180.719,129.676 170.478,123.333 167.578,124.996 177.646,131.471 
																								"/>
												</g>
												<g id="XMLID_1118_">
													<polygon id="XMLID_1119_" fill="#FFCC33" points="174.531,133.263 164.305,126.93 161.201,128.74 171.5,135.058 
																								"/>
												</g>
											</g>
											<g id="XMLID_456_">
												<path fill="#FFCC33" d="M186.904,126.064l0.008,2.729c0,0.551-0.291,1.06-0.766,1.335l-0.035,0.021
													c-0.475,0.277-1.061,0.282-1.535,0.014c-0.479-0.27-0.777-0.771-0.787-1.319l-0.018-0.951L186.904,126.064z"/>
											</g>
											<g id="XMLID_448_">
												<path fill="#FFCC33" d="M180.719,129.676l0.018,2.743c0.006,0.55-0.285,1.059-0.762,1.334l-0.006,0.005
													c-0.479,0.275-1.066,0.277-1.545,0.004c-0.479-0.274-0.775-0.783-0.775-1.335l-0.002-0.956L180.719,129.676z"/>
											</g>
											<g id="XMLID_438_">
												<path fill="#FFCC33" d="M174.531,133.263l0.043,2.717c0.008,0.549-0.279,1.06-0.754,1.334
													c-0.479,0.278-1.066,0.28-1.547,0.005c-0.479-0.275-0.773-0.785-0.773-1.339v-0.922L174.531,133.263z"/>
											</g>
										</g>
										<g id="XMLID_435_">
											<path fill="#F7EDD9" d="M171.5,135.058l-0.014,2.774c-0.006,0.547-0.297,1.052-0.77,1.327l-0.006,0.002
												c-0.479,0.277-1.066,0.279-1.545,0.004c-0.479-0.275-0.773-0.786-0.773-1.338v-0.957L171.5,135.058z"/>
										</g>
										<g id="XMLID_201_" opacity="0.58">
											<g id="XMLID_218_">
												<path id="XMLID_219_" d="M186.904,126.057l3.098-1.801v2.73c0,0.549-0.293,1.057-0.77,1.334l-0.008,0.004
													c-0.477,0.277-1.063,0.279-1.543,0.005c-0.479-0.273-0.771-0.783-0.773-1.334L186.904,126.057z"/>
											</g>
											<g id="XMLID_215_">
												<path id="XMLID_217_" d="M186.912,128.793c0,0.551-0.291,1.06-0.766,1.335l-0.035,0.021
													c-0.475,0.277-1.061,0.282-1.535,0.014c-0.479-0.27-0.777-0.771-0.787-1.319l-0.018-0.951l3.133-1.828L186.912,128.793z"/>
											</g>
											<g id="XMLID_206_">
												<path id="XMLID_214_" d="M183.772,127.892l0.012,2.742c0.002,0.539-0.283,1.037-0.75,1.309
													c-0.479,0.278-1.07,0.279-1.55,0.002c-0.453-0.263-0.731-0.737-0.761-1.256l0.013,1.729
													c0.005,0.55-0.286,1.059-0.763,1.334l-0.006,0.005c-0.479,0.275-1.065,0.277-1.545,0.004
													c-0.479-0.274-0.775-0.783-0.775-1.335l-0.002-0.956l3.072-1.795L183.772,127.892z"/>
											</g>
											<g id="XMLID_204_">
												<path id="XMLID_205_" d="M174.531,133.263l0.006,0.412l-0.002-0.412l3.109-1.792l-0.006,2.729
													c-0.002,0.55-0.295,1.058-0.77,1.331l-0.018,0.01c-0.477,0.275-1.063,0.277-1.541,0.003
													c-0.463-0.266-0.748-0.75-0.768-1.277l0.026,1.714c0.009,0.549-0.278,1.059-0.755,1.334
													c-0.477,0.278-1.064,0.28-1.545,0.005c-0.479-0.276-0.773-0.785-0.773-1.339v-0.921v-0.001L174.531,133.263z"/>
											</g>
											<g id="XMLID_202_">
												<path id="XMLID_203_" d="M171.5,135.058l-0.014,2.774c-0.006,0.547-0.297,1.052-0.77,1.327l-0.006,0.002
													c-0.479,0.277-1.066,0.279-1.545,0.004c-0.479-0.275-0.773-0.786-0.773-1.338v-0.957L171.5,135.058z"/>
											</g>
										</g>
									</g>
								</g>
								<g id="XMLID_1185_">
									<polygon id="XMLID_1186_" fill="#6EBEBF" points="144.577,137.747 153.453,132.621 153.361,142.513 140.204,150.19 						"/>
								</g>
								<g id="XMLID_1183_" opacity="0.28">
									<polygon id="XMLID_1184_" points="145.286,138.383 141.38,149.504 140.204,150.19 144.577,137.747 153.453,132.621 
										153.442,133.671 						"/>
								</g>
								<g id="XMLID_1174_" opacity="0.31">
									<g id="XMLID_1179_">
										<path id="XMLID_1180_" fill="#FFFFFF" d="M153.394,138.85l-1.896-1.896c-0.322-0.321-0.322-0.845,0-1.166
											c0.322-0.322,0.846-0.322,1.168,0l0.75,0.75L153.394,138.85z"/>
									</g>
									<g id="XMLID_1177_">
										<path id="XMLID_1178_" fill="#FFFFFF" d="M148.728,137.646c0.322-0.322,0.846-0.322,1.166,0l3.479,3.479l-0.014,1.388
											l-0.59,0.344l-4.043-4.043C148.406,138.491,148.406,137.969,148.728,137.646z"/>
									</g>
									<g id="XMLID_1175_">
										<path id="XMLID_1176_" fill="#FFFFFF" d="M147.713,141.235c0.322-0.322,0.844-0.322,1.166,0l2.459,2.459l-1.473,0.859
											l-2.152-2.152C147.391,142.079,147.391,141.557,147.713,141.235z"/>
									</g>
								</g>
								<g id="XMLID_1152_">
									<g id="XMLID_1157_" opacity="0.28">
										<path id="XMLID_1158_" d="M152.381,148.793c0.25-0.146,0.404-0.418,0.404-0.709s-0.154-0.563-0.406-0.711
											c-0.25-0.147-0.563-0.151-0.818-0.012l-1.715,0.949c-0.271,0.149-0.441,0.436-0.441,0.746c0,0.309,0.164,0.592,0.434,0.742
											c0.266,0.151,0.594,0.149,0.855-0.007L152.381,148.793z"/>
									</g>
									<g id="XMLID_1153_">
										<path id="XMLID_1154_" fill="#F4F4F4" d="M152.543,148.122c0.25-0.147,0.404-0.418,0.404-0.709
											c0-0.293-0.154-0.563-0.406-0.711c-0.25-0.147-0.563-0.151-0.816-0.012l-1.717,0.949c-0.271,0.149-0.441,0.436-0.441,0.746
											c0,0.309,0.164,0.592,0.434,0.741c0.266,0.152,0.594,0.15,0.855-0.006L152.543,148.122z"/>
									</g>
								</g>
								<polygon id="XMLID_1149_" opacity="0.1" enable-background="new    " points="141.511,143.147 120.247,131.098 
									122.355,124.898 143.573,137.273 					"/>
								<g>
									<g id="XMLID_1193_">
										<polygon id="XMLID_1194_" fill="#9AF4F4" points="142.038,138.059 122.931,126.836 118.593,139.624 137.585,150.731 							
											"/>
									</g>
									<g id="XMLID_1191_" opacity="0.28">
										<polygon id="XMLID_1192_" points="123.335,128.184 119.311,140.043 118.593,139.624 122.931,126.836 142.038,138.059 
											141.714,138.978 							"/>
									</g>
									<g id="XMLID_1163_" opacity="0.44">
										<g id="XMLID_1172_">
											<path id="XMLID_1173_" fill="#FFFFFF" d="M129.829,143.567c0.545-0.271,1.205-0.045,1.473,0.502l2.063,4.193l-3.441-2.013
												l-0.596-1.211C129.06,144.493,129.284,143.834,129.829,143.567z"/>
										</g>
										<g id="XMLID_1170_">
											<path id="XMLID_1171_" fill="#FFFFFF" d="M124.167,135.689c0.268,0.546,0.043,1.205-0.502,1.473
												c-0.156,0.077-0.32,0.113-0.484,0.113c-0.406,0-0.797-0.225-0.988-0.615l-1.533-3.123l1.002-2.951L124.167,135.689z"/>
										</g>
										<g id="XMLID_1168_">
											<path id="XMLID_1169_" fill="#FFFFFF" d="M132.732,140.831c0.549-0.268,1.205-0.043,1.475,0.502l3.896,7.927l-0.518,1.473
												l-1.699-0.994l-3.654-7.434C131.964,141.759,132.188,141.1,132.732,140.831z"/>
										</g>
										<g id="XMLID_1166_">
											<path id="XMLID_1167_" fill="#FFFFFF" d="M139.036,146.6l-2.314-4.709c-0.268-0.545-0.043-1.205,0.502-1.474
												c0.545-0.27,1.205-0.043,1.475,0.502l1.359,2.771L139.036,146.6z"/>
										</g>
										<g id="XMLID_1164_">
											<path id="XMLID_1165_" fill="#FFFFFF" d="M124.404,127.703l3.926,7.986c0.27,0.546,0.043,1.205-0.502,1.473
												c-0.156,0.077-0.32,0.113-0.484,0.113c-0.406,0-0.795-0.225-0.988-0.615l-3.998-8.132l0.574-1.691L124.404,127.703z"/>
										</g>
									</g>
									<g id="XMLID_1161_">
										<path id="XMLID_1162_" fill="#718B9B" d="M123.501,143.458l7.662,2.843c0.197,0.073,0.42-0.027,0.491-0.228
											c0.069-0.188-0.019-0.395-0.194-0.479l-7.396-3.484c-0.363-0.172-0.801-0.016-0.973,0.35
											c-0.172,0.366-0.016,0.802,0.35,0.974C123.462,143.442,123.48,143.45,123.501,143.458z"/>
									</g>
									<polygon id="XMLID_1148_" fill="#AFAFAF" points="143.573,137.273 142.267,140.993 138.667,140.3 						"/>
									<polygon id="XMLID_1147_" fill="#F4F4F4" points="138.667,140.3 117.45,127.923 122.355,124.898 143.573,137.273 						"/>
								</g>
								<polygon id="XMLID_194_" fill="#F4F4F4" points="128.222,161.636 132.986,164.401 132.986,162.407 128.222,159.641 					"/>
								<polygon id="XMLID_174_" fill="#272B2B" points="117.53,157.882 127.345,163.589 127.345,159.833 117.53,154.127 					"/>
								<polygon id="XMLID_173_" fill="#F4D071" points="128.222,162.622 132.986,165.386 132.986,164.39 128.222,161.625 					"/>
								<polygon id="XMLID_7_" fill="#F4D071" points="111.718,153.067 116.479,155.833 116.479,154.834 111.718,152.071 					"/>
								<polygon id="XMLID_6_" fill="#F4F4F4" points="111.718,152.071 116.479,154.834 116.479,152.841 111.718,150.077 					"/>
								<g id="XMLID_1208_">
									<polygon id="XMLID_1209_" fill="#AFAFAF" points="132.986,170.918 132.986,173.577 110.616,161.247 110.616,158.405 						"/>
								</g>
								<g id="XMLID_1204_">
									<polygon id="XMLID_1205_" fill="#939393" points="132.986,170.918 132.986,173.577 138.761,170.336 138.761,167.739 						"/>
								</g>
								<g id="XMLID_1189_">
									<polygon id="XMLID_1190_" fill="#FFFFFF" points="123.036,167.477 123.036,169.825 115.839,165.78 115.839,163.556 						"/>
								</g>
							</g>
						</g>
					</g>
					<g id="location4-g">
						<g id="location4">
							<g>
								<path fill="#FFFFFF" d="M151.589,31.185c-12.939,7.47-23.428,25.639-23.386,40.508c0.042,14.862,10.599,20.885,23.54,13.414
									c12.936-7.469,23.424-25.641,23.383-40.505C175.081,29.733,164.523,23.716,151.589,31.185z"/>
								<path fill="#FF1022" d="M151.579,27.626c-14.646,8.457-26.521,29.024-26.475,45.854c0.047,16.824,12.002,23.635,26.646,15.181
									c14.639-8.453,26.516-29.022,26.469-45.846C178.173,25.984,166.22,19.175,151.579,27.626z M151.743,85.106
									c-12.941,7.471-23.498,1.448-23.54-13.414c-0.042-14.87,10.444-33.039,23.386-40.508c12.936-7.469,23.492-1.451,23.537,13.417
									C175.167,59.466,164.679,77.638,151.743,85.106z"/>
								<path fill="#FF1022" d="M115.888,76.231c0.021-0.461,0.048-0.92,0.083-1.385c0.021-0.233,0.037-0.477,0.061-0.711
									c0.042-0.455,0.089-0.914,0.142-1.375c0.023-0.225,0.048-0.438,0.074-0.662c0.041-0.319,0.092-0.646,0.136-0.965
									c0.066-0.479,0.139-0.965,0.22-1.447c0.057-0.321,0.112-0.647,0.172-0.977c0.086-0.469,0.178-0.938,0.271-1.404
									c0.075-0.371,0.154-0.744,0.237-1.117c0.067-0.313,0.143-0.627,0.215-0.94c0.1-0.408,0.201-0.816,0.309-1.229
									c0.079-0.309,0.157-0.614,0.24-0.926c0.136-0.492,0.275-0.988,0.423-1.483c0.054-0.185,0.104-0.365,0.161-0.554
									c0.205-0.68,0.421-1.354,0.646-2.033c0.334-0.997,0.693-1.987,1.07-2.979c0.095-0.248,0.188-0.498,0.287-0.746
									c0.33-0.841,0.669-1.68,1.024-2.514c0.058-0.127,0.104-0.258,0.162-0.388c0.397-0.922,0.819-1.84,1.26-2.754
									c0.115-0.237,0.23-0.479,0.352-0.715c0.354-0.727,0.719-1.438,1.092-2.156c0.116-0.221,0.229-0.438,0.352-0.66
									c0.479-0.896,0.976-1.786,1.48-2.665c0.101-0.164,0.197-0.328,0.298-0.492c0.448-0.769,0.911-1.523,1.391-2.273
									c0.141-0.221,0.275-0.438,0.419-0.66c0.588-0.914,1.188-1.815,1.813-2.709c0.098-0.133,0.19-0.264,0.285-0.396
									c0.646-0.915,1.313-1.816,1.995-2.703c0.104-0.139,0.207-0.275,0.313-0.412c0.211-0.271,0.429-0.539,0.645-0.809
									c0.273-0.343,0.546-0.687,0.821-1.021c0.227-0.271,0.453-0.537,0.681-0.803c0.27-0.314,0.532-0.633,0.802-0.939
									c0.558-0.631,1.114-1.252,1.684-1.856c0.034-0.033,0.063-0.07,0.1-0.104c0.604-0.645,1.211-1.264,1.828-1.875
									c0.391-0.387,0.783-0.77,1.182-1.145c0.111-0.104,0.226-0.215,0.334-0.32c0.521-0.486,1.053-0.961,1.581-1.43
									c0.146-0.127,0.292-0.25,0.438-0.375c0.394-0.336,0.782-0.67,1.182-0.992c0.194-0.162,0.396-0.318,0.593-0.479
									c0.354-0.281,0.705-0.562,1.063-0.83c0.214-0.162,0.425-0.318,0.64-0.479c0.354-0.263,0.705-0.52,1.063-0.771
									c0.211-0.146,0.422-0.302,0.634-0.441c0.386-0.266,0.769-0.521,1.151-0.771c0.188-0.119,0.364-0.242,0.553-0.354
									c0.566-0.361,1.145-0.713,1.723-1.043c0.553-0.32,1.104-0.619,1.648-0.906c0.146-0.074,0.285-0.147,0.432-0.223
									c0.488-0.253,0.979-0.49,1.463-0.719c0.063-0.023,0.12-0.062,0.182-0.084c0.505-0.23,1.005-0.441,1.505-0.646
									c0.526-0.215,1.058-0.412,1.574-0.604c0.137-0.05,0.271-0.104,0.396-0.146c0.647-0.224,1.294-0.422,1.932-0.599
									c0.376-0.104,0.751-0.188,1.121-0.276c0.173-0.039,0.351-0.09,0.521-0.127c0.547-0.117,1.087-0.22,1.621-0.301
									c0.021-0.003,0.043-0.008,0.063-0.01c0.486-0.07,0.97-0.134,1.444-0.179c0.161-0.014,0.316-0.021,0.479-0.03
									c0.35-0.023,0.688-0.05,1.029-0.06c0.152-0.004,0.306-0.006,0.454-0.008c0.354-0.004,0.709,0.002,1.06,0.018
									c0.121,0.004,0.243,0.009,0.363,0.016c0.45,0.021,0.896,0.063,1.34,0.116c0.092,0.016,0.187,0.026,0.275,0.041
									c0.354,0.052,0.714,0.104,1.063,0.175c0.117,0.021,0.236,0.048,0.354,0.068c0.396,0.089,0.798,0.188,1.188,0.293
									c0.022,0.009,0.054,0.016,0.076,0.021c0.409,0.118,0.813,0.258,1.21,0.4c0.104,0.039,0.212,0.082,0.317,0.123
									c0.32,0.125,0.639,0.261,0.945,0.401c0.08,0.037,0.162,0.069,0.244,0.108c0.401,0.189,0.8,0.396,1.188,0.625l-0.007-0.002
									c0.002,0,0.005,0,0.007,0.002l-6.779-4.05c-0.063-0.039-0.132-0.075-0.192-0.109c-0.324-0.186-0.651-0.354-0.987-0.514
									c-0.08-0.041-0.164-0.075-0.245-0.111c-0.188-0.089-0.375-0.177-0.566-0.257c-0.125-0.054-0.254-0.102-0.381-0.146
									c-0.104-0.043-0.213-0.084-0.314-0.123c-0.396-0.145-0.789-0.278-1.191-0.396c-0.007,0-0.014-0.002-0.019-0.002
									c-0.025-0.009-0.058-0.018-0.077-0.021c-0.393-0.104-0.784-0.205-1.188-0.289c-0.116-0.021-0.236-0.051-0.356-0.069
									c-0.122-0.023-0.244-0.058-0.369-0.074c-0.229-0.039-0.459-0.066-0.688-0.104c-0.092-0.014-0.185-0.025-0.273-0.041
									c-0.396-0.049-0.795-0.086-1.197-0.109c-0.046-0.005-0.098-0.005-0.143-0.005c-0.122-0.011-0.244-0.013-0.362-0.017
									c-0.354-0.017-0.701-0.021-1.063-0.019c-0.146,0.002-0.302,0.005-0.452,0.011c-0.119,0.004-0.233,0.002-0.354,0.008
									c-0.226,0.011-0.45,0.029-0.675,0.047c-0.159,0.018-0.316,0.021-0.479,0.035c-0.479,0.045-0.96,0.104-1.446,0.177
									c-0.021,0.006-0.042,0.008-0.063,0.011c-0.003,0-0.007,0-0.008,0c-0.531,0.084-1.068,0.185-1.611,0.302
									c-0.177,0.036-0.354,0.086-0.527,0.127c-0.337,0.08-0.671,0.153-1.012,0.248c-0.033,0.01-0.066,0.02-0.104,0.027
									c-0.64,0.178-1.279,0.371-1.935,0.598c-0.132,0.045-0.266,0.102-0.396,0.146c-0.522,0.188-1.052,0.389-1.581,0.604
									c-0.07,0.023-0.143,0.053-0.211,0.079c-0.431,0.181-0.856,0.366-1.291,0.563c-0.063,0.029-0.12,0.063-0.184,0.086
									c-0.48,0.229-0.974,0.466-1.464,0.716c-0.144,0.073-0.283,0.147-0.431,0.227c-0.55,0.289-1.098,0.586-1.649,0.905
									c-0.576,0.334-1.146,0.685-1.72,1.043c-0.188,0.112-0.366,0.237-0.551,0.354c-0.388,0.254-0.771,0.507-1.156,0.771
									c-0.211,0.146-0.42,0.296-0.633,0.439c-0.354,0.25-0.707,0.507-1.063,0.771c-0.216,0.156-0.429,0.314-0.64,0.479
									c-0.354,0.271-0.71,0.548-1.063,0.83c-0.197,0.156-0.396,0.313-0.596,0.479c-0.396,0.321-0.791,0.655-1.186,0.993
									c-0.145,0.125-0.29,0.244-0.433,0.371c-0.532,0.468-1.063,0.942-1.582,1.436c-0.109,0.104-0.216,0.207-0.325,0.311
									c-0.348,0.328-0.695,0.658-1.041,0.998c-0.051,0.05-0.1,0.104-0.148,0.152c-0.615,0.611-1.229,1.232-1.827,1.875
									c-0.03,0.034-0.063,0.068-0.1,0.104c-0.566,0.604-1.126,1.229-1.678,1.856c-0.057,0.062-0.108,0.116-0.162,0.178
									c-0.218,0.25-0.431,0.515-0.646,0.77c-0.226,0.269-0.448,0.523-0.673,0.798c-0.274,0.336-0.552,0.684-0.825,1.021
									c-0.214,0.271-0.432,0.535-0.644,0.811c-0.039,0.052-0.081,0.101-0.121,0.146c-0.063,0.086-0.126,0.177-0.191,0.266
									c-0.682,0.886-1.344,1.784-1.987,2.698c-0.064,0.097-0.14,0.184-0.202,0.271c-0.027,0.043-0.061,0.09-0.085,0.131
									c-0.622,0.892-1.229,1.793-1.813,2.705c-0.059,0.092-0.117,0.174-0.176,0.264c-0.082,0.132-0.159,0.271-0.242,0.398
									c-0.477,0.75-0.938,1.51-1.39,2.271c-0.071,0.121-0.146,0.236-0.219,0.359c-0.026,0.043-0.055,0.092-0.078,0.137
									c-0.512,0.879-1.005,1.771-1.483,2.664c-0.039,0.07-0.081,0.146-0.119,0.215c-0.078,0.146-0.146,0.303-0.227,0.445
									c-0.376,0.717-0.739,1.438-1.096,2.156c-0.072,0.146-0.152,0.297-0.229,0.441c-0.044,0.095-0.081,0.186-0.125,0.271
									c-0.438,0.912-0.854,1.83-1.261,2.756c-0.014,0.024-0.026,0.06-0.04,0.084c-0.044,0.104-0.081,0.203-0.123,0.301
									c-0.354,0.834-0.697,1.671-1.022,2.514c-0.057,0.136-0.111,0.271-0.166,0.4c-0.045,0.113-0.08,0.229-0.122,0.345
									c-0.376,0.991-0.735,1.983-1.07,2.981c-0.005,0.021-0.014,0.039-0.021,0.063c-0.222,0.654-0.427,1.313-0.626,1.978
									c-0.059,0.182-0.104,0.362-0.158,0.547c-0.108,0.377-0.229,0.754-0.328,1.129c-0.032,0.119-0.063,0.242-0.097,0.359
									c-0.084,0.311-0.164,0.616-0.239,0.926c-0.105,0.41-0.209,0.819-0.311,1.229c-0.074,0.313-0.146,0.627-0.217,0.938
									c-0.048,0.219-0.104,0.438-0.147,0.656c-0.03,0.152-0.059,0.309-0.091,0.465c-0.097,0.469-0.187,0.938-0.271,1.405
									c-0.063,0.323-0.119,0.646-0.173,0.972c-0.082,0.481-0.15,0.967-0.223,1.444c-0.029,0.229-0.07,0.455-0.104,0.683
									c-0.014,0.097-0.021,0.188-0.033,0.287c-0.027,0.223-0.051,0.44-0.074,0.66c-0.053,0.459-0.1,0.92-0.14,1.375
									c-0.021,0.239-0.041,0.479-0.06,0.715c-0.035,0.463-0.063,0.924-0.084,1.383c-0.015,0.209-0.022,0.42-0.031,0.627
									c-0.022,0.658-0.039,1.313-0.035,1.973c0.025,9.644,3.042,16.688,7.797,21.063c7.209,6.633,27.188,26.37,28.236,27.409l6.778,4.048
									c-1.054-1.037-21.025-20.774-28.234-27.406c-4.756-4.375-7.771-11.422-7.802-21.063c0-0.65,0.018-1.313,0.038-1.971
									C115.868,76.649,115.882,76.438,115.888,76.231z"/>
										<path fill="#FF4A1E" d="M151.55,16.965c-19.793,11.426-35.787,39.129-35.725,61.873c0.027,9.643,3.045,16.689,7.8,21.064
											c7.209,6.63,27.187,26.369,28.235,27.407c1.041-2.247,20.836-44.948,27.984-59.866c4.717-9.845,7.682-20.345,7.652-29.985
											C187.437,14.714,171.337,5.541,151.55,16.965z M151.753,88.658c-14.646,8.455-26.602,1.646-26.646-15.18
											c-0.047-16.828,11.828-37.396,26.475-45.854c14.641-8.451,26.594-1.642,26.643,15.188
											C178.269,59.637,166.392,80.206,151.753,88.658z"/>
									</g>
										<g>
											<g>
												<polygon fill="#3399CC" points="152.088,47.69 141.721,53.775 145.023,83.051 152.088,78.904 159.151,74.759 162.457,41.604 
																			"/>
												<path fill="#CFCFCF" d="M163.194,40.802c0,0.611-0.494,1.397-1.106,1.757l-20.146,11.824
													c-0.609,0.357-1.104,0.153-1.104-0.458l0,0c0-0.611,0.494-1.396,1.104-1.755l20.146-11.824
													C162.7,39.986,163.194,40.191,163.194,40.802L163.194,40.802z"/>
												<polygon fill="#79D13D" points="156.728,43.983 155.584,44.365 158.297,32.043 159.441,31.659 						"/>
											</g>
											<path fill="#FAD2B2" d="M158.435,58.596c0,2.017-2.874,5.339-6.42,7.42s-6.42,2.133-6.42,0.116c0-2.019,2.874-5.341,6.42-7.421
												C155.561,56.629,158.435,56.577,158.435,58.596z"/>
										</g>
									</g>
									</g>
								</g>							
					</g>
				</g>
				<g id="F-mountain_1_">
					<g id="F-mountain">
						<g>
							<g>
								<g>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M236.669,252.086l40.204,23.298l0.188,3.818l-42.054-24.416
										L236.669,252.086z M276.688,271.635l-38.415-22.303l1.662-2.701l36.562,21.154L276.688,271.635z M243.139,241.058
										l32.984,19.159l0.188,3.785l-34.773-20.158L243.139,241.058z M246.404,235.605l29.341,16.979l0.19,3.852l-31.19-18.098
										L246.404,235.605z M275.37,245.018l0.189,3.817l-27.551-15.986l1.661-2.699L275.37,245.018z M252.877,224.609l22.117,12.81
										l0.186,3.751l-23.852-13.786L252.877,224.609z M274.619,229.818l0.187,3.784l-20.267-11.692l1.658-2.768L274.619,229.818z
										 M274.242,222.218l0.188,3.817l-16.629-9.614l1.657-2.766L274.242,222.218z M274.056,218.435l-13.045-7.521l1.713-2.746
										l11.145,6.483L274.056,218.435z M265.932,202.661l7.56,4.39l0.188,3.784l-9.406-5.407L265.932,202.661z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M273.492,207.05l-7.56-4.39l6.785-11.27L273.492,207.05z
										 M238.273,249.333l38.415,22.303l0.186,3.749l-40.204-23.298L238.273,249.333z M276.497,267.786l-36.562-21.154l1.602-2.787
										l34.773,20.158L276.497,267.786z M276.123,260.217l-32.984-19.159l1.606-2.72l31.19,18.098L276.123,260.217z
										 M248.009,232.849l27.551,15.986l0.186,3.749l-29.341-16.979L248.009,232.849z M275.37,245.018l-25.701-14.868l1.659-2.767
										l23.852,13.786L275.37,245.018z M254.538,221.91l20.267,11.692l0.189,3.816l-22.117-12.81L254.538,221.91z M274.619,229.818
										l-18.423-10.676l1.606-2.721l16.629,9.614L274.619,229.818z M274.242,222.218l-14.783-8.563l1.551-2.742l13.045,7.521
										L274.242,222.218z M273.68,210.834l0.188,3.816l-11.145-6.483l1.551-2.741L273.68,210.834z"/>
								</g>
								<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="273.853,214.348 273.665,210.532 273.477,206.748 
									272.703,191.087 321.435,253.849 277.047,278.899 276.857,275.082 276.672,271.333 276.482,267.483 276.294,263.7 
									276.107,259.915 275.92,256.131 275.729,252.282 275.544,248.533 275.355,244.715 275.165,240.867 274.979,237.115 
									274.791,233.299 274.604,229.515 274.417,225.733 274.228,221.915 274.04,218.131 						"/>
							</g>
						</g>
						<g>
							<g>
								<g>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M289.242,280.846l25.674,14.878l0.121,2.438l-26.856-15.592
										L289.242,280.846z M314.798,293.33l-24.532-14.242l1.061-1.726l23.349,13.509L314.798,293.33z M293.373,273.802
										l21.064,12.235l0.119,2.417l-22.206-12.873L293.373,273.802z M295.459,270.32l18.737,10.844l0.121,2.459l-19.918-11.558
										L295.459,270.32z M313.957,276.331l0.12,2.439l-17.594-10.209l1.061-1.724L313.957,276.331z M299.592,263.298l14.125,8.18
										l0.118,2.396l-15.232-8.804L299.592,263.298z M313.477,266.625l0.12,2.417l-12.943-7.469l1.058-1.768L313.477,266.625z
										 M313.236,261.771l0.121,2.438l-10.62-6.139l1.058-1.767L313.236,261.771z M313.117,259.355l-8.331-4.803l1.094-1.755
										l7.118,4.142L313.117,259.355z M307.93,249.282l4.828,2.804l0.119,2.416l-6.006-3.452L307.93,249.282z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M312.757,252.085l-4.828-2.804l4.333-7.197L312.757,252.085
										z M290.266,279.087l24.532,14.242l0.118,2.395l-25.674-14.878L290.266,279.087z M314.676,290.871l-23.349-13.509l1.023-1.78
										l22.206,12.873L314.676,290.871z M314.437,286.038l-21.064-12.235l1.026-1.737l19.918,11.558L314.437,286.038z
										 M296.483,268.561l17.594,10.209l0.119,2.394l-18.737-10.844L296.483,268.561z M313.957,276.331l-16.413-9.493l1.059-1.768
										l15.232,8.804L313.957,276.331z M300.653,261.574l12.943,7.469l0.121,2.436l-14.125-8.18L300.653,261.574z M313.477,266.625
										l-11.766-6.819l1.026-1.736l10.62,6.139L313.477,266.625z M313.236,261.771l-9.441-5.468l0.991-1.751l8.331,4.803
										L313.236,261.771z M312.876,254.501l0.121,2.438l-7.118-4.142l0.991-1.748L312.876,254.501z"/>
								</g>
								<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="312.988,256.746 312.867,254.309 312.748,251.893 
									312.253,241.891 343.374,281.97 315.027,297.968 314.907,295.531 314.788,293.135 314.667,290.676 314.547,288.261 
									314.428,285.845 314.308,283.429 314.186,280.97 314.068,278.576 313.947,276.138 313.826,273.68 313.707,271.284 
									313.587,268.848 313.467,266.431 313.347,264.016 313.227,261.578 313.107,259.162 						"/>
							</g>
						</g>
						<g>
							<g>
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M375.343,337.644l41.201,23.876l0.193,3.912
											l-43.098-25.022L375.343,337.644z M416.354,357.679l-39.367-22.856l1.702-2.77l37.469,21.679L416.354,357.679z
											 M381.973,326.341l33.802,19.636l0.192,3.878l-35.635-20.657L381.973,326.341z M385.319,320.753l30.069,17.402l0.194,3.945
											l-31.964-18.547L385.319,320.753z M415.004,330.4l0.193,3.912l-28.234-16.381l1.702-2.768L415.004,330.4z M391.953,309.485
											l22.666,13.127l0.189,3.846l-24.444-14.129L391.953,309.485z M414.233,314.822l0.193,3.879l-20.771-11.982l1.698-2.836
											L414.233,314.822z M413.848,307.034l0.194,3.914L397,301.095l1.698-2.835L413.848,307.034z M413.656,303.157l-13.368-7.705
											l1.754-2.816l11.423,6.646L413.656,303.157z M405.332,286.991l7.747,4.501l0.192,3.876l-9.638-5.54L405.332,286.991z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M413.079,291.492l-7.747-4.501l6.953-11.55
											L413.079,291.492z M376.986,334.823l39.367,22.856l0.19,3.841l-41.201-23.876L376.986,334.823z M416.158,353.732
											l-37.469-21.679l1.643-2.855l35.635,20.657L416.158,353.732z M415.774,345.977l-33.802-19.636l1.646-2.787l31.964,18.547
											L415.774,345.977z M386.963,317.931l28.234,16.381l0.191,3.844l-30.069-17.402L386.963,317.931z M415.004,330.4
											l-26.338-15.236l1.699-2.835l24.444,14.129L415.004,330.4z M393.655,306.718l20.771,11.982l0.193,3.911l-22.666-13.127
											L393.655,306.718z M414.233,314.822l-18.88-10.939l1.646-2.787l17.043,9.853L414.233,314.822z M413.848,307.034
											l-15.15-8.773l1.59-2.809l13.368,7.705L413.848,307.034z M413.271,295.368l0.194,3.914l-11.423-6.646l1.591-2.808
											L413.271,295.368z"/>
									</g>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="413.449,298.969 413.255,295.057 413.063,291.181 
										412.27,275.129 462.211,339.452 416.722,365.122 416.528,361.208 416.337,357.369 416.143,353.421 415.951,349.545 
										415.758,345.666 415.568,341.791 415.372,337.844 415.182,334.001 414.988,330.09 414.794,326.147 414.603,322.301 
										414.41,318.391 414.218,314.511 414.026,310.636 413.833,306.722 413.641,302.846 							"/>
								</g>
							</g>
							<g>
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M423.267,366.889l25.675,14.879l0.12,2.438l-26.855-15.592
											L423.267,366.889z M448.823,379.375l-24.532-14.243l1.061-1.726l23.349,13.509L448.823,379.375z M427.398,359.847
											l21.064,12.235l0.12,2.417l-22.206-12.873L427.398,359.847z M429.484,356.365l18.737,10.844l0.122,2.458l-19.918-11.558
											L429.484,356.365z M447.982,362.375l0.121,2.438l-17.594-10.208l1.061-1.725L447.982,362.375z M433.618,349.342l14.124,8.18
											l0.118,2.396l-15.232-8.805L433.618,349.342z M447.502,352.668l0.12,2.417l-12.943-7.467l1.058-1.768L447.502,352.668z
											 M447.262,347.816l0.121,2.438l-10.62-6.14l1.058-1.767L447.262,347.816z M447.143,345.4l-8.331-4.804l1.094-1.753
											l7.118,4.14L447.143,345.4z M441.955,335.327l4.828,2.803l0.12,2.417l-6.006-3.453L441.955,335.327z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M446.783,338.129l-4.828-2.803l4.333-7.198
											L446.783,338.129z M424.292,365.131l24.532,14.243l0.119,2.394l-25.675-14.879L424.292,365.131z M448.701,376.915
											l-23.349-13.509l1.023-1.779l22.206,12.873L448.701,376.915z M448.462,372.083l-21.064-12.235l1.026-1.738l19.918,11.558
											L448.462,372.083z M430.509,354.605l17.594,10.208l0.119,2.396l-18.737-10.844L430.509,354.605z M447.982,362.375
											l-16.412-9.495l1.059-1.767l15.232,8.805L447.982,362.375z M434.679,347.619l12.943,7.467l0.121,2.437l-14.124-8.18
											L434.679,347.619z M447.502,352.668l-11.765-6.817l1.026-1.737l10.62,6.14L447.502,352.668z M447.262,347.816l-9.441-5.469
											l0.991-1.751l8.331,4.804L447.262,347.816z M446.902,340.546l0.121,2.437l-7.118-4.14l0.991-1.75L446.902,340.546z"/>
									</g>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="447.013,342.79 446.893,340.353 446.773,337.936 
										446.278,327.935 477.399,368.016 449.053,384.012 448.932,381.575 448.813,379.179 448.692,376.721 448.573,374.306 
										448.453,371.888 448.333,369.473 448.211,367.014 448.093,364.621 447.973,362.182 447.851,359.725 447.732,357.329 
										447.612,354.892 447.492,352.476 447.373,350.059 447.252,347.622 447.133,345.206 							"/>
								</g>
							</g>
							<g>
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M456.623,382.013l36.143,22.506v3.653l-37.805-23.584
											L456.623,382.013z M492.766,400.93l-34.533-21.543l1.661-2.576l32.872,20.435V400.93z M463.115,371.497l29.65,18.507v3.622
											l-31.261-19.472L463.115,371.497z M466.387,366.295l26.378,16.403v3.685l-28.039-17.481L466.387,366.295z M492.766,375.456
											v3.654l-24.767-15.441l1.661-2.574L492.766,375.456z M472.882,355.81l19.883,12.373v3.591l-21.445-13.318L472.882,355.81z
											 M492.766,360.91v3.622l-18.223-11.296l1.661-2.64L492.766,360.91z M492.766,353.636v3.653l-14.951-9.287l1.66-2.638
											L492.766,353.636z M492.766,350.015l-11.729-7.266l1.71-2.618l10.019,6.263V350.015z M485.97,334.879l6.796,4.241v3.622
											l-8.458-5.225L485.97,334.879z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M492.766,339.121l-6.796-4.241l6.796-10.747V339.121z
											 M458.233,379.387l34.533,21.543v3.589l-36.143-22.506L458.233,379.387z M492.766,397.246l-32.872-20.435l1.611-2.657
											l31.261,19.472V397.246z M492.766,390.003l-29.65-18.507l1.611-2.595l28.039,17.481V390.003z M467.999,363.668
											l24.767,15.441v3.589l-26.378-16.403L467.999,363.668z M492.766,375.456l-23.106-14.361l1.662-2.639l21.445,13.318V375.456z
											 M474.542,353.236l18.223,11.296v3.651l-19.883-12.373L474.542,353.236z M492.766,360.91l-16.562-10.313l1.611-2.594
											l14.951,9.287V360.91z M492.766,353.636l-13.291-8.271l1.562-2.615l11.729,7.266V353.636z M492.766,342.743v3.651
											l-10.019-6.263l1.561-2.613L492.766,342.743z"/>
									</g>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="492.766,346.105 492.766,342.452 492.766,338.831 
										492.766,323.842 534.995,384.152 492.766,407.882 492.766,404.229 492.766,400.64 492.766,396.955 492.766,393.335 
										492.766,389.713 492.766,386.094 492.766,382.409 492.766,378.82 492.766,375.167 492.766,371.484 492.766,367.893 
										492.766,364.241 492.766,360.62 492.766,357 492.766,353.346 492.766,349.725 							"/>
								</g>
							</g>
							<g>
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M502.778,410.499l27.199,16.937v2.749l-28.45-17.748
											L502.778,410.499z M529.978,424.735l-25.987-16.213l1.25-1.938l24.737,15.378V424.735z M507.665,402.584l22.313,13.927
											v2.726l-23.525-14.653L507.665,402.584z M510.126,398.67l19.851,12.344v2.773l-21.101-13.156L510.126,398.67z
											 M529.978,405.564v2.75l-18.638-11.621l1.25-1.937L529.978,405.564z M515.014,390.779l14.963,9.312v2.702l-16.138-10.022
											L515.014,390.779z M529.978,394.617v2.726l-13.713-8.5l1.25-1.986L529.978,394.617z M529.978,389.143v2.75l-11.251-6.989
											l1.25-1.985L529.978,389.143z M529.978,386.418l-8.827-5.468l1.288-1.971l7.539,4.714V386.418z M524.864,375.028
											l5.114,3.192v2.725l-6.364-3.931L524.864,375.028z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M529.978,378.22l-5.114-3.192l5.114-8.087V378.22z
											 M503.99,408.522l25.987,16.213v2.7l-27.199-16.937L503.99,408.522z M529.978,421.961l-24.737-15.378l1.212-2l23.525,14.653
											V421.961z M529.978,416.511l-22.313-13.927l1.212-1.953l21.101,13.156V416.511z M511.339,396.693l18.638,11.621v2.7
											l-19.851-12.344L511.339,396.693z M529.978,405.564l-17.389-10.808l1.25-1.986l16.138,10.022V405.564z M516.264,388.842
											l13.713,8.5v2.748l-14.963-9.312L516.264,388.842z M529.978,394.617l-12.464-7.761l1.212-1.952l11.251,6.989V394.617z
											 M529.978,389.143l-10.001-6.225l1.175-1.968l8.827,5.468V389.143z M529.978,380.945v2.749l-7.539-4.714l1.175-1.966
											L529.978,380.945z"/>
									</g>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="529.978,383.475 529.978,380.726 529.978,378.001 
										529.978,366.722 561.757,412.108 529.978,429.966 529.978,427.216 529.978,424.516 529.978,421.743 529.978,419.019 
										529.978,416.293 529.978,413.569 529.978,410.796 529.978,408.095 529.978,405.346 529.978,402.575 529.978,399.873 
										529.978,397.125 529.978,394.399 529.978,391.674 529.978,388.925 529.978,386.201 							"/>
								</g>
							</g>
							<g>
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M542.214,431.932l35.9,22.354v3.629l-37.551-23.426
											L542.214,431.932z M578.115,450.722l-34.301-21.398l1.65-2.559l32.65,20.297V450.722z M548.664,421.486l29.451,18.383v3.598
											l-31.051-19.341L548.664,421.486z M551.914,416.321l26.201,16.292v3.66l-27.851-17.364L551.914,416.321z M578.115,425.419
											v3.629l-24.601-15.338l1.649-2.557L578.115,425.419z M558.365,405.905l19.75,12.29v3.566l-21.301-13.229L558.365,405.905z
											 M578.115,410.97v3.598l-18.101-11.22l1.649-2.622L578.115,410.97z M578.115,403.746v3.629l-14.851-9.225l1.649-2.62
											L578.115,403.746z M578.115,400.149l-11.65-7.217l1.699-2.601l9.951,6.221V400.149z M571.365,385.115l6.75,4.213v3.597
											l-8.4-5.188L571.365,385.115z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M578.115,389.328l-6.75-4.213l6.75-10.675V389.328z
											 M543.814,429.324l34.301,21.398v3.564l-35.9-22.354L543.814,429.324z M578.115,447.062l-32.65-20.297l1.6-2.64
											l31.051,19.341V447.062z M578.115,439.869l-29.451-18.383l1.601-2.577l27.851,17.364V439.869z M553.514,413.71
											l24.601,15.338v3.564l-26.201-16.292L553.514,413.71z M578.115,425.419l-22.951-14.266l1.65-2.621l21.301,13.229V425.419z
											 M560.014,403.348l18.101,11.22v3.627l-19.75-12.29L560.014,403.348z M578.115,410.97l-16.451-10.244l1.601-2.576
											l14.851,9.225V410.97z M578.115,403.746l-13.201-8.216l1.551-2.598l11.65,7.217V403.746z M578.115,392.924v3.628
											l-9.951-6.221l1.551-2.596L578.115,392.924z"/>
									</g>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="578.115,396.264 578.115,392.636 578.115,389.04 
										578.115,374.152 620.061,434.056 578.115,457.627 578.115,453.999 578.115,450.434 578.115,446.774 578.115,443.178 
										578.115,439.581 578.115,435.985 578.115,432.325 578.115,428.76 578.115,425.131 578.115,421.473 578.115,417.907 
										578.115,414.28 578.115,410.682 578.115,407.086 578.115,403.458 578.115,399.861 							"/>
								</g>
							</g>
							<g>
								<g>
									<g>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#578E49" d="M586.197,459.251l36.021,22.43v3.641l-37.677-23.504
											L586.197,459.251z M622.217,478.104l-34.416-21.47l1.656-2.567l32.76,20.365V478.104z M592.667,448.77l29.55,18.444v3.609
											l-31.155-19.405L592.667,448.77z M595.929,443.587l26.289,16.348v3.671l-27.944-17.422L595.929,443.587z M622.217,452.717
											v3.641l-24.683-15.39l1.655-2.565L622.217,452.717z M602.401,433.136l19.816,12.332v3.578l-21.372-13.272L602.401,433.136z
											 M622.217,438.219v3.609l-18.161-11.257l1.655-2.632L622.217,438.219z M622.217,430.97v3.641l-14.9-9.255l1.655-2.629
											L622.217,430.97z M622.217,427.362l-11.689-7.241l1.705-2.609l9.984,6.241V427.362z M615.445,412.277l6.772,4.227v3.609
											l-8.428-5.206L615.445,412.277z"/>
										<path fill-rule="evenodd" clip-rule="evenodd" fill="#5D974E" d="M622.217,416.503l-6.772-4.227l6.772-10.711V416.503z
											 M587.802,456.634l34.416,21.47v3.577l-36.021-22.43L587.802,456.634z M622.217,474.432l-32.76-20.365l1.605-2.648
											l31.155,19.405V474.432z M622.217,467.214l-29.55-18.444l1.606-2.586l27.944,17.422V467.214z M597.534,440.968l24.683,15.39
											v3.577l-26.289-16.348L597.534,440.968z M622.217,452.717l-23.028-14.314l1.656-2.629l21.372,13.272V452.717z
											 M604.056,430.572l18.161,11.257v3.64l-19.816-12.332L604.056,430.572z M622.217,438.219l-16.506-10.279l1.606-2.584
											l14.9,9.255V438.219z M622.217,430.97l-13.245-8.243l1.556-2.606l11.689,7.241V430.97z M622.217,420.113v3.64l-9.984-6.241
											l1.556-2.604L622.217,420.113z"/>
									</g>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#73C056" points="622.217,423.464 622.217,419.824 622.217,416.215 
										622.217,401.278 664.304,461.383 622.217,485.032 622.217,481.391 622.217,477.816 622.217,474.143 622.217,470.536 
										622.217,466.925 622.217,463.318 622.217,459.645 622.217,456.069 622.217,452.428 622.217,448.756 622.217,445.178 
										622.217,441.541 622.217,437.931 622.217,434.323 622.217,430.682 622.217,427.073 							"/>
								</g>
							</g>
						</g>
					</g>
				</g>
				<g id="truckMove2">
					<g id="truck2_1_">
						<path id="XMLID_137_" opacity="0.4" d="M568.56,464.531l-23.393,13.243c-1.378,0.78-1.385,2.764-0.014,3.553l44.642,25.708
							c0.627,0.361,1.398,0.364,2.028,0.007l23.393-13.243c1.379-0.78,1.385-2.764,0.014-3.554l-44.642-25.707
							C569.961,464.176,569.19,464.173,568.56,464.531z"/>
						<g>
							<g id="XMLID_792_">
								<g>
									<g id="XMLID_856_">
										<path fill="#F7E8CB" d="M595.506,444.941v2.73c0,0.549,0.293,1.057,0.768,1.334l0.008,0.004
											c0.477,0.277,1.064,0.279,1.544,0.006c0.478-0.275,0.774-0.783,0.775-1.334l0.003-0.939L595.506,444.941z"/>
									</g>
									<g id="XMLID_850_">
										<path fill="#FF8000" d="M598.604,446.748l-0.006,2.73c-0.002,0.549,0.289,1.059,0.764,1.334l0.037,0.021
											c0.473,0.277,1.057,0.283,1.535,0.014c0.477-0.27,0.776-0.771,0.785-1.32l0.016-0.951L598.604,446.748z"/>
									</g>
									<g id="XMLID_847_">
										<path fill="#F7E8CB" d="M601.735,448.576l-0.01,2.742c-0.002,0.539,0.285,1.039,0.75,1.309
											c0.479,0.279,1.07,0.279,1.549,0.002c0.48-0.277,0.773-0.789,0.771-1.344l-0.006-0.926L601.735,448.576z"/>
									</g>
									<g id="XMLID_844_">
										<path fill="#FF8000" d="M604.79,450.359l-0.016,2.744c-0.004,0.549,0.287,1.059,0.761,1.334l0.007,0.004
											c0.477,0.277,1.064,0.279,1.544,0.004c0.478-0.273,0.774-0.783,0.775-1.334l0.002-0.957L604.79,450.359z"/>
									</g>
									<g id="XMLID_841_">
										<path fill="#F7E8CB" d="M607.863,452.154l0.007,2.73c0,0.549,0.293,1.057,0.77,1.33l0.016,0.01
											c0.477,0.275,1.063,0.277,1.541,0.004c0.477-0.275,0.771-0.783,0.774-1.332l0.003-0.949L607.863,452.154z"/>
									</g>
									<g id="XMLID_838_">
										<path fill="#FF8000" d="M610.979,453.947l-0.043,2.717c-0.01,0.549,0.279,1.059,0.753,1.334
											c0.478,0.277,1.067,0.279,1.546,0.004s0.773-0.785,0.773-1.338v-0.922L610.979,453.947z"/>
									</g>
									<g id="XMLID_835_">
										<path fill="#F7E8CB" d="M614.008,455.742l0.016,2.775c0.002,0.547,0.295,1.051,0.768,1.326l0.004,0.004
											c0.478,0.277,1.066,0.279,1.545,0.002c0.479-0.275,0.775-0.785,0.775-1.336v-0.957L614.008,455.742z"/>
									</g>
									<g id="XMLID_805_" opacity="0.58">
										<g id="XMLID_832_">
											<path id="XMLID_834_" d="M598.604,446.742l-3.098-1.801v2.73c0,0.549,0.293,1.057,0.768,1.334l0.008,0.004
												c0.477,0.277,1.064,0.279,1.544,0.006c0.478-0.275,0.774-0.783,0.775-1.334L598.604,446.742z"/>
										</g>
										<g id="XMLID_829_">
											<path id="XMLID_831_" d="M598.598,449.478c-0.002,0.549,0.289,1.059,0.764,1.334l0.037,0.021
												c0.473,0.277,1.057,0.283,1.535,0.014c0.477-0.27,0.776-0.771,0.785-1.32l0.016-0.951l-3.131-1.828L598.598,449.478z"/>
										</g>
										<g id="XMLID_821_">
											<path id="XMLID_828_" d="M601.735,448.576l-0.01,2.742c-0.002,0.539,0.285,1.039,0.75,1.309
												c0.479,0.279,1.07,0.279,1.549,0.002c0.453-0.262,0.732-0.736,0.76-1.256l-0.01,1.73c-0.004,0.549,0.287,1.059,0.761,1.334
												l0.007,0.004c0.477,0.277,1.064,0.279,1.544,0.004c0.478-0.273,0.774-0.783,0.775-1.334l0.002-0.957l-3.073-1.795
												L601.735,448.576z"/>
										</g>
										<g id="XMLID_818_">
											<path id="XMLID_820_" d="M610.979,453.947l-0.008,0.412l0.002-0.412l-3.11-1.793l0.007,2.73c0,0.549,0.293,1.057,0.77,1.33
												l0.016,0.01c0.477,0.275,1.063,0.277,1.541,0.004c0.461-0.266,0.746-0.75,0.767-1.279l-0.026,1.715
												c-0.01,0.549,0.279,1.059,0.753,1.334c0.478,0.277,1.067,0.279,1.546,0.004s0.773-0.785,0.773-1.338v-0.922l0,0
												L610.979,453.947z"/>
										</g>
										<g id="XMLID_810_">
											<path id="XMLID_817_" d="M614.008,455.742l0.016,2.775c0.002,0.547,0.295,1.051,0.767,1.326l0.005,0.004
												c0.478,0.277,1.066,0.279,1.545,0.002c0.479-0.275,0.775-0.785,0.775-1.336v-0.957L614.008,455.742z"/>
										</g>
									</g>
								</g>
								<g>
									<g id="XMLID_801_">
										<polygon id="XMLID_804_" fill="#F7E8CB" points="595.709,444.896 585.192,451.076 606.801,463.691 617.26,457.427 								
											"/>
									</g>
									<g id="XMLID_799_">
										<polygon id="XMLID_800_" fill="#FF8000" points="588.29,452.884 598.543,446.527 601.485,448.24 591.42,454.712 								"/>
									</g>
									<g id="XMLID_797_">
										<polygon id="XMLID_798_" fill="#FF8000" points="594.475,456.496 604.717,450.152 607.618,451.816 597.548,458.291 								
											"/>
									</g>
									<g id="XMLID_794_">
										<polygon id="XMLID_795_" fill="#FF8000" points="600.665,460.082 610.891,453.75 613.993,455.56 603.694,461.878 								
											"/>
									</g>
								</g>
							</g>
							<g id="XMLID_789_">
								<polygon id="XMLID_791_" fill="#F7E8CB" points="606.424,469.449 617.29,457.241 615.213,458.447 604.583,470.507 						"/>
							</g>
						</g>
						<g>
							<g id="XMLID_744_">
								<path id="XMLID_788_" fill="#111414" d="M560.046,480.205c0.005-2.61-1.688-5.082-3.759-5.613
									c-0.851-0.219-2.273-0.574-5.301,1.863c-1.116,0.898,4.019,8.867,4.019,8.867l2.952-1.386
									c0.105-0.041,0.207-0.089,0.306-0.145l0.054-0.024l-0.001-0.003C559.354,483.167,560.043,481.868,560.046,480.205z"/>
								<g id="XMLID_758_">
									<path id="XMLID_759_" fill="#433734" d="M553.18,477.729c1.336,0.314,2.418,1.93,2.415,3.606s-1.091,2.782-2.427,2.468
										c-1.337-0.314-2.42-1.93-2.416-3.605C550.755,478.522,551.842,477.416,553.18,477.729z M553.17,482.827
										c0.906,0.214,1.645-0.536,1.646-1.674c0.002-1.139-0.732-2.234-1.64-2.447s-1.645,0.537-1.646,1.676
										C551.528,481.519,552.262,482.614,553.17,482.827"/>
								</g>
								<g id="XMLID_751_">
									<path id="XMLID_752_" fill="#252B2B" d="M553.182,476.039c2.082,0.489,3.764,3.002,3.759,5.612s-1.695,4.329-3.776,3.84
										c-2.081-0.488-3.763-2.999-3.758-5.609C549.412,477.272,551.102,475.549,553.182,476.039z M553.168,483.803
										c1.336,0.314,2.424-0.791,2.427-2.468s-1.079-3.292-2.415-3.606c-1.338-0.313-2.425,0.793-2.428,2.469
										C550.749,481.874,551.832,483.489,553.168,483.803"/>
								</g>
								<g id="XMLID_747_">
									<path id="XMLID_748_" fill="#675A58" d="M554.439,482.375c0.009-0.012,0.017-0.022,0.024-0.034
										c0.066-0.088,0.123-0.187,0.172-0.293c0.006-0.014,0.012-0.027,0.018-0.04c0.105-0.247,0.164-0.535,0.164-0.855
										c0-0.236-0.031-0.471-0.088-0.694c-0.008-0.025-0.014-0.05-0.021-0.075c-0.038-0.128-0.083-0.255-0.137-0.377
										c-0.008-0.017-0.016-0.033-0.022-0.051c-0.016-0.03-0.029-0.061-0.045-0.09c-0.008-0.016-0.016-0.029-0.023-0.044
										c-0.008-0.017-0.018-0.032-0.025-0.049c-0.008-0.013-0.016-0.025-0.022-0.038c-0.045-0.077-0.093-0.151-0.144-0.223
										c-0.053-0.073-0.106-0.142-0.164-0.207c-0.031-0.034-0.063-0.068-0.096-0.1c0-0.001-0.001-0.001-0.001-0.001
										c-0.248-0.248-0.54-0.426-0.852-0.499c-0.907-0.213-1.645,0.537-1.646,1.676c-0.001,0.402,0.091,0.801,0.25,1.156
										c0.005,0.01,0.009,0.02,0.013,0.029c0.016,0.033,0.033,0.067,0.049,0.101c0.009,0.016,0.017,0.031,0.025,0.047
										c0.008,0.013,0.014,0.026,0.021,0.041c0.016,0.028,0.033,0.057,0.05,0.084c0.04,0.066,0.083,0.132,0.127,0.192
										c0.054,0.074,0.109,0.143,0.169,0.209c0.021,0.023,0.045,0.048,0.066,0.07c0.252,0.257,0.549,0.44,0.869,0.516
										c0.198,0.048,0.389,0.048,0.564,0.009c0.013-0.004,0.025-0.007,0.038-0.01C554.034,482.758,554.262,482.601,554.439,482.375z
										"/>
								</g>
								<path id="XMLID_745_" fill="#514745" d="M553.645,482.827c-0.319-0.075-0.617-0.259-0.868-0.516
									c-0.022-0.022-0.046-0.047-0.067-0.07c-0.059-0.066-0.115-0.135-0.169-0.209c-0.045-0.061-0.087-0.126-0.128-0.192
									c-0.016-0.027-0.032-0.056-0.049-0.084c-0.007-0.015-0.014-0.028-0.021-0.041c-0.008-0.016-0.017-0.031-0.025-0.047
									c-0.016-0.033-0.032-0.067-0.048-0.101c-0.005-0.01-0.009-0.02-0.013-0.029c-0.16-0.355-0.252-0.754-0.251-1.156
									c0.002-0.902,0.465-1.558,1.108-1.687c-0.877-0.164-1.582,0.574-1.583,1.687c-0.001,0.402,0.091,0.801,0.25,1.156
									c0.005,0.01,0.009,0.02,0.013,0.029c0.016,0.033,0.033,0.067,0.049,0.101c0.009,0.016,0.017,0.031,0.025,0.047
									c0.008,0.013,0.014,0.026,0.021,0.041c0.016,0.028,0.033,0.057,0.05,0.084c0.04,0.066,0.083,0.132,0.127,0.192
									c0.054,0.074,0.109,0.143,0.169,0.209c0.021,0.023,0.045,0.048,0.066,0.07c0.252,0.257,0.549,0.44,0.869,0.516
									c0.189,0.045,0.37,0.047,0.539,0.012C553.688,482.835,553.667,482.833,553.645,482.827z"/>
							</g>
							<g>
								<g id="XMLID_718_">
									<path id="XMLID_739_" fill="#111414" d="M594.241,499.727c0.006-2.609-1.688-5.082-3.758-5.611
										c-0.852-0.221-2.273-0.574-5.302,1.861c-1.116,0.898,4.019,8.869,4.019,8.869l2.952-1.387
										c0.105-0.041,0.207-0.09,0.306-0.145l0.055-0.025l-0.002-0.002C593.547,502.69,594.239,501.391,594.241,499.727z"/>
									<g id="XMLID_732_">
										<path id="XMLID_735_" fill="#433734" d="M587.374,497.252c1.338,0.314,2.42,1.93,2.416,3.605
											c-0.003,1.678-1.09,2.783-2.427,2.469s-2.419-1.93-2.417-3.605C584.95,498.045,586.038,496.94,587.374,497.252z
											 M587.365,502.35c0.907,0.213,1.645-0.537,1.646-1.674c0.003-1.139-0.731-2.234-1.64-2.447
											c-0.907-0.213-1.645,0.537-1.646,1.676C585.723,501.042,586.458,502.137,587.365,502.35"/>
									</g>
									<g id="XMLID_725_">
										<path id="XMLID_728_" fill="#252B2B" d="M587.377,495.561c2.081,0.49,3.763,3.004,3.758,5.613
											c-0.005,2.611-1.695,4.328-3.775,3.84c-2.082-0.488-3.764-3-3.758-5.609C583.606,496.795,585.296,495.073,587.377,495.561z
											 M587.363,503.327c1.337,0.314,2.424-0.791,2.427-2.469c0.004-1.676-1.078-3.291-2.416-3.605
											c-1.336-0.313-2.424,0.793-2.428,2.469C584.944,501.397,586.026,503.012,587.363,503.327"/>
									</g>
									<g id="XMLID_722_">
										<path id="XMLID_724_" fill="#675A58" d="M588.633,501.899c0.009-0.012,0.018-0.021,0.025-0.033
											c0.064-0.088,0.123-0.188,0.172-0.295c0.006-0.014,0.012-0.025,0.018-0.039c0.104-0.248,0.162-0.535,0.163-0.855
											c0.001-0.236-0.03-0.471-0.089-0.695c-0.006-0.023-0.013-0.049-0.02-0.074c-0.037-0.129-0.082-0.256-0.137-0.377
											c-0.008-0.018-0.016-0.033-0.023-0.051c-0.014-0.031-0.029-0.061-0.044-0.09c-0.007-0.016-0.015-0.029-0.022-0.043
											c-0.009-0.018-0.018-0.033-0.026-0.049c-0.007-0.014-0.015-0.027-0.022-0.039c-0.045-0.076-0.092-0.152-0.143-0.223
											c-0.053-0.072-0.107-0.141-0.166-0.207c-0.03-0.035-0.063-0.068-0.095-0.1c0-0.002-0.001-0.002-0.001-0.002
											c-0.248-0.246-0.539-0.424-0.852-0.498c-0.907-0.213-1.645,0.537-1.646,1.676c0,0.402,0.092,0.801,0.25,1.156
											c0.005,0.01,0.01,0.02,0.014,0.029c0.016,0.033,0.032,0.068,0.049,0.1c0.008,0.016,0.016,0.033,0.024,0.047
											c0.008,0.014,0.015,0.027,0.022,0.041c0.016,0.029,0.032,0.057,0.049,0.084c0.04,0.068,0.082,0.133,0.127,0.193
											c0.053,0.074,0.109,0.143,0.17,0.209c0.021,0.023,0.044,0.047,0.066,0.072c0.252,0.256,0.549,0.439,0.868,0.514
											c0.198,0.047,0.389,0.047,0.565,0.008c0.012-0.002,0.024-0.006,0.037-0.01C588.229,502.282,588.458,502.124,588.633,501.899
											z"/>
									</g>
									<path id="XMLID_721_" fill="#514745" d="M587.838,502.35c-0.318-0.074-0.615-0.258-0.867-0.514
										c-0.023-0.025-0.045-0.049-0.066-0.072c-0.061-0.066-0.116-0.135-0.17-0.209c-0.045-0.061-0.087-0.125-0.127-0.193
										c-0.017-0.027-0.033-0.055-0.049-0.084c-0.008-0.014-0.016-0.027-0.021-0.041c-0.01-0.014-0.018-0.031-0.025-0.047
										c-0.018-0.031-0.033-0.066-0.049-0.1c-0.004-0.01-0.009-0.02-0.014-0.029c-0.158-0.355-0.25-0.754-0.25-1.156
										c0.002-0.902,0.465-1.559,1.108-1.688c-0.878-0.164-1.581,0.574-1.583,1.688c0,0.402,0.092,0.801,0.25,1.156
										c0.005,0.01,0.01,0.02,0.014,0.029c0.016,0.033,0.032,0.068,0.049,0.1c0.008,0.016,0.016,0.033,0.024,0.047
										c0.008,0.014,0.015,0.027,0.022,0.041c0.016,0.029,0.032,0.057,0.049,0.084c0.04,0.068,0.082,0.133,0.127,0.193
										c0.053,0.074,0.109,0.143,0.17,0.209c0.021,0.023,0.044,0.047,0.066,0.072c0.252,0.256,0.549,0.439,0.868,0.514
										c0.188,0.045,0.37,0.047,0.54,0.012C587.883,502.358,587.862,502.356,587.838,502.35z"/>
								</g>
								<g id="XMLID_578_">
									<path id="XMLID_717_" fill="#111414" d="M584.297,493.934c0.005-2.609-1.688-5.08-3.758-5.611
										c-0.852-0.219-2.273-0.574-5.302,1.861c-1.116,0.898,4.019,8.869,4.019,8.869l2.952-1.387
										c0.104-0.041,0.206-0.088,0.306-0.143l0.055-0.025l-0.002-0.002C583.604,496.897,584.294,495.598,584.297,493.934z"/>
									<g id="XMLID_654_">
										<path id="XMLID_680_" fill="#433734" d="M577.43,491.459c1.337,0.314,2.419,1.93,2.416,3.607
											c-0.003,1.676-1.09,2.781-2.427,2.469c-1.337-0.314-2.419-1.93-2.417-3.607C575.006,492.252,576.094,491.147,577.43,491.459
											z M577.42,496.559c0.908,0.213,1.645-0.537,1.647-1.676c0.002-1.139-0.731-2.234-1.64-2.447
											c-0.907-0.213-1.645,0.537-1.646,1.676C575.78,495.249,576.514,496.344,577.42,496.559"/>
									</g>
									<g id="XMLID_588_">
										<path id="XMLID_589_" fill="#252B2B" d="M577.434,489.77c2.08,0.488,3.763,3.002,3.758,5.613
											c-0.005,2.609-1.695,4.328-3.775,3.838c-2.082-0.488-3.764-2.998-3.759-5.609
											C573.663,491.002,575.352,489.28,577.434,489.77z M577.419,497.536c1.337,0.313,2.424-0.793,2.427-2.469
											c0.003-1.678-1.079-3.293-2.416-3.607c-1.336-0.313-2.424,0.793-2.428,2.469C575,495.606,576.083,497.221,577.419,497.536"
											/>
									</g>
									<g id="XMLID_580_">
										<path id="XMLID_587_" fill="#675A58" d="M578.69,496.106c0.009-0.012,0.018-0.021,0.025-0.033
											c0.064-0.088,0.122-0.186,0.171-0.293c0.007-0.014,0.013-0.027,0.019-0.041c0.104-0.246,0.162-0.535,0.163-0.855
											c0.001-0.236-0.031-0.471-0.089-0.695c-0.006-0.023-0.013-0.049-0.02-0.072c-0.037-0.131-0.084-0.256-0.137-0.377
											c-0.008-0.018-0.016-0.035-0.023-0.051c-0.014-0.031-0.029-0.063-0.045-0.092c-0.006-0.014-0.014-0.029-0.021-0.043
											c-0.009-0.018-0.018-0.033-0.027-0.049c-0.006-0.014-0.014-0.025-0.021-0.039c-0.045-0.076-0.092-0.15-0.144-0.223
											s-0.106-0.141-0.165-0.205c-0.031-0.035-0.063-0.068-0.095-0.102h-0.001c-0.248-0.248-0.539-0.426-0.852-0.5
											c-0.907-0.213-1.645,0.537-1.646,1.676c-0.001,0.404,0.091,0.803,0.25,1.156c0.005,0.01,0.01,0.02,0.014,0.029
											c0.016,0.035,0.031,0.066,0.049,0.1c0.008,0.016,0.016,0.033,0.024,0.049c0.007,0.014,0.015,0.025,0.022,0.039
											c0.016,0.029,0.031,0.057,0.049,0.086c0.04,0.066,0.082,0.131,0.127,0.193c0.053,0.072,0.109,0.143,0.169,0.207
											c0.022,0.025,0.044,0.049,0.067,0.072c0.252,0.256,0.549,0.439,0.867,0.516c0.199,0.045,0.389,0.047,0.565,0.006
											c0.013-0.002,0.025-0.006,0.038-0.008C578.286,496.489,578.514,496.331,578.69,496.106z"/>
									</g>
									<path id="XMLID_579_" fill="#514745" d="M577.896,496.559c-0.319-0.076-0.616-0.26-0.868-0.516
										c-0.023-0.023-0.045-0.047-0.066-0.072c-0.061-0.064-0.116-0.135-0.17-0.207c-0.045-0.063-0.088-0.127-0.127-0.193
										c-0.018-0.029-0.033-0.057-0.049-0.086c-0.008-0.014-0.016-0.025-0.022-0.039c-0.009-0.016-0.017-0.033-0.024-0.049
										c-0.017-0.033-0.033-0.064-0.049-0.1c-0.005-0.01-0.009-0.02-0.014-0.029c-0.158-0.354-0.25-0.752-0.25-1.156
										c0.002-0.902,0.465-1.557,1.108-1.686c-0.878-0.164-1.581,0.574-1.583,1.686c-0.001,0.404,0.091,0.803,0.25,1.156
										c0.005,0.01,0.01,0.02,0.014,0.029c0.016,0.035,0.031,0.066,0.049,0.1c0.008,0.016,0.016,0.033,0.024,0.049
										c0.007,0.014,0.015,0.025,0.022,0.039c0.016,0.029,0.031,0.057,0.049,0.086c0.04,0.066,0.082,0.131,0.127,0.193
										c0.053,0.072,0.109,0.143,0.169,0.207c0.022,0.025,0.044,0.049,0.067,0.072c0.252,0.256,0.549,0.439,0.867,0.516
										c0.189,0.043,0.371,0.045,0.541,0.012C577.94,496.565,577.917,496.563,577.896,496.559z"/>
								</g>
							</g>
							<g>
								<g>
									<polygon fill="#DBD1C2" points="569.268,480.936 569.268,458.844 590.038,446.855 590.038,468.739 							"/>
									<g>
										<polygon fill="#60BDD3" points="569.678,470.477 569.678,479.208 569.268,479.399 569.268,470.67 								"/>
										<polygon fill="#E05934" points="569.678,471.983 569.678,480.696 569.268,480.936 569.268,472.174 								"/>
									</g>
									<polygon fill="#EAE1D2" points="556.469,451.484 577.237,439.494 590.038,446.855 569.268,458.844 							"/>
									<g>
										<polygon fill="#806061" points="569.593,459.008 569.593,480.774 569.876,480.936 569.874,459.17 								"/>
										<polygon fill="#806061" points="590.038,447.484 569.874,459.17 569.593,459.008 589.758,447.322 								"/>
									</g>
									<path fill="#CC8800" d="M556.469,451.484l-4.153,9.513v10.182l4.915,2.838c-0.002-0.068-0.005-0.137-0.005-0.203
										c0-3.035,2.145-4.258,4.79-2.73c2.645,1.527,4.789,5.227,4.789,8.262c0,0.066-0.002,0.131-0.004,0.197l2.467,1.395v-22.092
										L556.469,451.484z"/>
									<path fill="#CC8800" d="M557.231,474.016c-0.002-0.068-0.005-0.137-0.005-0.203c0-3.035,2.145-4.258,4.79-2.73
										c2.645,1.527,4.789,5.227,4.789,8.262c0,0.066-0.002,0.131-0.004,0.197l2.467,1.395v-8.758l-16.952-9.785v8.785
										L557.231,474.016z"/>
									<polygon fill="#FFFFFF" points="577.262,439.513 577.237,439.494 556.469,451.484 556.297,451.878 569.268,459.333 
										569.268,458.844 569.321,458.817 556.549,451.47 							"/>
									<g>
										<g>
											<path fill="#549AAD" d="M555.942,453.48l-3.07,7.077c-0.037,0.084-0.005,0.182,0.074,0.229l2.905,1.68
												c0.12,0.07,0.271-0.018,0.271-0.154v-8.794C556.122,453.416,555.983,453.386,555.942,453.48z"/>
											<path fill="#549AAD" d="M556.627,453.152v9.667c0,0.061,0.033,0.115,0.084,0.145l9.314,5.395
												c0.111,0.063,0.252-0.018,0.252-0.146v-9.695c0-0.061-0.031-0.117-0.084-0.146l-9.314-5.364
												C556.768,452.941,556.627,453.023,556.627,453.152z"/>
										</g>
										<g>
											<path fill="#96D5E6" d="M556.041,462.276l-2.905-1.68c-0.08-0.047-0.111-0.145-0.075-0.227l3.009-6.937
												c-0.043-0.02-0.102-0.01-0.127,0.047l-3.07,7.077c-0.037,0.084-0.005,0.182,0.074,0.229l2.905,1.68
												c0.12,0.07,0.271-0.018,0.271-0.154v-0.012C556.094,462.299,556.067,462.292,556.041,462.276z"/>
											<path fill="#96D5E6" d="M566.214,468.168l-9.313-5.393c-0.053-0.031-0.084-0.086-0.084-0.146v-9.642
												c-0.096-0.012-0.189,0.059-0.189,0.164v9.667c0,0.061,0.033,0.115,0.084,0.145l9.314,5.395
												c0.111,0.063,0.252-0.018,0.252-0.146v-0.023C566.256,468.186,566.235,468.18,566.214,468.168z"/>
										</g>
									</g>
								</g>
								<polygon fill="#EAE1D2" points="566.958,458.174 566.958,479.631 566.801,479.542 566.801,458.083 						"/>
								<polygon fill="#EAE1D2" points="556.239,452.011 569.268,459.524 569.268,459.333 556.297,451.878 						"/>
								<path fill="#FFFFFF" d="M556.239,452.011l-0.074,0.17l10.48,6.028v19.623c0,0,0.127,0.566,0.156,1.299v-20.832v-0.175
									L556.239,452.011z"/>
								<path fill="#EB6A70" d="M551.661,464.827"/>
								<g>
									<path fill="#FBE97A" d="M553.008,464.45l-0.873-0.484v3.355c0,0.037,0.02,0.068,0.051,0.088l0.822,0.457V464.45z"/>
									<polygon fill="#E5C422" points="553.129,467.795 553.008,467.866 553.008,464.452 553.129,464.381 							"/>
									<polygon fill="#E5C422" points="553.129,464.381 552.316,463.926 552.316,463.862 552.135,463.965 553.008,464.452 							
										"/>
								</g>
								<path fill="#CC8800" d="M569.833,459.273v29.616l3.343,1.74c-0.002-0.07,0,0.415,0,0.345c0-3.037,3.831-2.705,6.478-1.178
									c2.645,1.527,13.414,5.607,12.998,12.206c-0.005,0.068-0.003,0.135-0.004,0.201l1.218,0.991l-0.173-30.071L569.833,459.273z"
									/>
								<g>
									<polygon fill="#FFBF00" points="593.692,473.124 593.858,502.822 614.627,490.832 614.915,460.749 							"/>
									<g>
										<polygon fill="#D1D165" points="614.627,491.262 593.865,503.409 593.858,497.307 614.627,485.357 								"/>
									</g>
									<g>
										<path fill="#FBE97A" d="M610.207,494.488l-8.62,4.977c-0.191,0.109-0.346-0.008-0.346-0.262v-2.049
											c0-0.254,0.154-0.551,0.346-0.66l8.62-4.977c0.192-0.111,0.347,0.008,0.347,0.262v2.047
											C610.553,494.08,610.399,494.376,610.207,494.488z"/>
										<path fill="#FCEC8B" d="M601.241,499.203v-2.049c0-0.254,0.154-0.551,0.346-0.66l8.62-4.977
											c0.068-0.041,0.132-0.049,0.186-0.035l0,0l-0.169-0.102c-0.063-0.053-0.152-0.057-0.25,0l-8.621,4.977
											c-0.191,0.109-0.346,0.406-0.346,0.66v2.049c0,0.139,0.047,0.234,0.119,0.277l0.215,0.125
											C601.279,499.421,601.241,499.328,601.241,499.203z"/>
									</g>
									<g>
										<polygon fill="#DBD1C2" points="596.948,497.173 596.948,478.009 612.127,469.232 612.127,488.412 								"/>
										<polygon fill="#FFFFFF" points="597.135,478.119 611.939,469.56 611.939,488.55 597.135,497.091 								"/>
										<polygon fill="#EAE1D2" points="597.325,478.226 611.75,469.888 611.75,488.646 597.325,496.972 								"/>
										<polygon fill="#D1D165" points="597.135,497.548 611.939,488.983 611.939,485.584 597.135,494.152 								"/>
										<g>
											<polygon fill="#DBD1C2" points="604.641,492.734 604.434,492.853 604.434,474.121 604.641,474.001 									"/>
											<polygon fill="#DBD1C2" points="604.641,474.001 604.434,474.121 604.233,474.007 604.439,473.888 									"/>
											<g>
												<polygon fill="#549AAD" points="605.454,481.699 610.704,478.667 610.704,472.644 605.454,475.675 										"/>
											</g>
											<polygon fill="#96D5E6" points="610.514,472.751 610.514,478.478 605.454,481.4 605.454,481.699 610.704,478.667 
												610.704,472.644 									"/>
											<polygon fill="#549AAD" points="603.622,482.755 598.372,485.787 598.372,479.763 603.622,476.734 									"/>
											<polygon fill="#96D5E6" points="603.432,476.841 603.432,482.566 598.372,485.49 598.372,485.787 603.622,482.755 
												603.622,476.734 									"/>
										</g>
									</g>
								</g>
								<g>
									<g id="XMLID_576_">
										<polygon id="XMLID_577_" fill="#FCD700" points="556.702,451.736 593.692,473.124 614.915,460.749 577.843,439.414 								
											"/>
									</g>
									<polygon id="XMLID_575_" fill="#AFAFAF" points="556.702,451.736 555.015,454.814 551.725,448.824 							"/>
									<polygon id="XMLID_565_" fill="#F4F4F4" points="556.632,451.765 577.849,439.39 572.942,436.365 551.725,448.74 							"/>
								</g>
								<g>
									<g id="XMLID_563_">
										<path id="XMLID_564_" fill="#CC8800" d="M571.752,490.362l-11.908-6.932c-0.783-2.646-0.961-5.259-3.977-7.113
											c-3.012-1.852-6.593-2.364-6.587,0.915c0.001,0.123,0.009,0.25,0.016,0.377l-3.184-1.702v-11.17l5.226-3.865l5.363-9.106
											l15.451,8.915L571.752,490.362z"/>
									</g>
									<polygon fill="#CC7E00" points="557.674,453.14 552.829,461.469 560.428,465.733 560.308,454.842 							"/>
									<g id="XMLID_561_">
										<polygon id="XMLID_562_" fill="#47BEBF" points="558.055,454.279 559.228,455.018 561.253,465.173 554.034,461.248 								
											"/>
									</g>
									<g id="XMLID_559_" opacity="0.28">
										<polygon id="XMLID_560_" points="558.18,455.734 554.792,461.676 554.025,461.248 558.059,454.281 559.231,455.02 
											559.231,456.378 								"/>
									</g>
									<g id="XMLID_546_">
										<g id="XMLID_555_" opacity="0.28">
											<path id="XMLID_556_" d="M563.491,472.081c-0.283-0.154-0.529-0.451-0.647-0.774s-0.091-0.63,0.073-0.802
												c0.163-0.173,0.438-0.187,0.723-0.038l1.911,1.003c0.304,0.159,0.569,0.471,0.694,0.815
												c0.125,0.343,0.094,0.662-0.082,0.837c-0.175,0.177-0.467,0.185-0.766,0.019L563.491,472.081z"/>
										</g>
										<g id="XMLID_547_">
											<path id="XMLID_548_" fill="#F4F4F4" d="M563.074,471.339c-0.283-0.157-0.53-0.451-0.647-0.774
												c-0.119-0.325-0.091-0.629,0.072-0.802c0.164-0.172,0.439-0.187,0.724-0.037l1.911,1.002
												c0.304,0.159,0.568,0.471,0.695,0.815c0.125,0.343,0.094,0.662-0.082,0.837c-0.176,0.177-0.469,0.185-0.766,0.02
												L563.074,471.339z"/>
										</g>
									</g>
									<g>
										<g>
											<polygon fill="#CC7E00" points="558.19,453.476 558.391,464.598 568.5,470.141 568.508,459.583 									"/>
											<g id="XMLID_544_">
												<polygon id="XMLID_545_" fill="#47BEBF" points="567.379,459.752 559.118,454.919 559.209,464.067 567.379,468.491 
																							"/>
											</g>
											<g id="XMLID_537_" opacity="0.31">
												<g id="XMLID_542_">
													<path id="XMLID_543_" fill="#FFFFFF" d="M559.176,460.68l1.938-1.641c0.329-0.277,0.329-0.76,0-1.077
														c-0.33-0.318-0.863-0.35-1.193-0.07l-0.766,0.649L559.176,460.68z"/>
												</g>
												<g id="XMLID_540_">
													<path id="XMLID_541_" fill="#FFFFFF" d="M563.945,459.844c-0.329-0.316-0.862-0.348-1.192-0.07l-3.555,3.01l0.012,1.283
														l0.603,0.352l4.133-3.494C564.274,460.645,564.274,460.161,563.945,459.844z"/>
												</g>
												<g id="XMLID_538_">
													<path id="XMLID_539_" fill="#FFFFFF" d="M565.069,463.151c-0.329-0.318-0.861-0.348-1.191-0.07l-2.512,2.123l1.506,0.885
														l2.197-1.861C565.399,463.95,565.399,463.467,565.069,463.151z"/>
												</g>
											</g>
										</g>
										<g id="XMLID_535_" opacity="0.28">
											<polyline id="XMLID_536_" points="567.379,459.752 559.118,454.96 559.127,455.931 567.461,460.77 									"/>
										</g>
									</g>
									<path fill="#D8D866" d="M593.858,503.409l-1.467-0.825c0.006-0.123,0.016-0.242,0.016-0.367
										c0.006-3.272-2.104-6.425-4.712-7.038c-1.845-0.433-3.44,0.524-4.222,2.276l-0.807-0.47c0.039-0.343,0.059-0.693,0.059-1.05
										c0-2.887-2.587-6.415-5.088-6.714c-1.784-0.212-3.216,0.811-4.102,2.455l-1.548-0.899l-8.573-5.111l-4.902-2.919
										c0.007-0.119,0.016-0.236,0.016-0.358c0.006-3.273-2.103-6.426-4.712-7.038c-1.843-0.433-3.437,0.521-4.219,2.269
										l-3.484-1.948v-5.946l17.302,9.982l8.573,4.988l21.87,12.635V503.409z"/>
									<g id="XMLID_530_" opacity="0.2">
										<g id="XMLID_531_">
											<path id="XMLID_532_" d="M567.901,470.19l-0.008,10.211l0.009,4.412v1.275l-6.487-3.824
												c-0.502-0.967-1.557-2.887-2.815-4.523c-0.3-0.389-0.607-0.766-0.912-1.115c-2.017-2.316-3.662-3.219-4.636-3.572v-11.17
												L567.901,470.19 M568.452,469.86l-15.951-8.922v12.729c0,0,2.172,0.045,5.187,3.508c0.271,0.311,0.547,0.648,0.83,1.018
												c1.581,2.055,2.837,4.668,2.837,4.668l7.098,4.182v-1.598l-0.008-4.41L568.452,469.86L568.452,469.86z"/>
										</g>
									</g>
								</g>
								<g>
									<g id="XMLID_515_">
										<polygon id="XMLID_516_" fill="#939393" points="548.418,475.712 548.418,478.372 544.907,476.426 544.907,473.829 								
											"/>
									</g>
									<g id="XMLID_508_">
										<polygon id="XMLID_509_" fill="#727272" points="548.418,475.712 548.418,478.372 549.471,477.644 549.471,475.046 								
											"/>
									</g>
									<polygon id="XMLID_507_" fill="#828282" points="548.396,475.705 549.471,475.053 546.145,473.165 544.907,473.829 							
										"/>
								</g>
							</g>
							<g>
								<g id="XMLID_505_">
									<polygon id="XMLID_506_" fill="#E8D27A" points="583.597,463.704 594.102,470.153 610.25,461.198 610.303,459.153 
										583.643,461.809 							"/>
								</g>
								<g id="XMLID_462_">
									<polygon id="XMLID_504_" fill="#F7E789" points="593.975,468.118 594.098,470.1 610.25,461.198 610.301,459.101 							"/>
								</g>
								<g id="XMLID_460_">
									<polygon id="XMLID_461_" fill="#FFF8B8" points="583.643,461.809 593.947,468.125 610.3,459.11 599.93,452.988 							"/>
								</g>
							</g>
							<g>
								<g id="XMLID_207_">
									<polygon id="XMLID_459_" fill="#3F5E5E" points="570.595,462.833 570.595,478.128 591.789,490.592 591.789,475.071 							
										"/>
								</g>
								<g id="XMLID_182_">
									<path id="XMLID_183_" fill="#F7E8CB" d="M571.696,464.738l18.992,10.968v12.964l-18.992-11.17V464.738 M570.595,462.833
										v15.296l21.193,12.464v-15.521L570.595,462.833L570.595,462.833z"/>
								</g>
								<g id="XMLID_5_">
									<g id="XMLID_121_">
										<path id="XMLID_135_" d="M571.145,463.785l20.094,11.604v14.243l-20.094-11.816V463.785 M570.595,462.833v15.296
											l21.193,12.464v-15.521L570.595,462.833L570.595,462.833z"/>
									</g>
								</g>
							</g>
						</g>
					</g>
					<g id="truck2F">
						<path id="XMLID_171_" opacity="0.4" fill="#040000" enable-background="new    " d="M27.926,28.738L4.53,41.982
							c-1.377,0.777-1.385,2.765-0.014,3.554l44.643,25.706c0.627,0.359,1.398,0.361,2.029,0.007l23.396-13.242
							c1.377-0.779,1.385-2.765,0.014-3.555L29.952,28.745C29.325,28.383,28.555,28.381,27.926,28.738z"/>
						<polygon id="XMLID_170_" fill="#5E413A" points="19.623,43.885 19.623,48.4 20.929,49.332 25.978,46.939 			"/>
						<g id="XMLID_161_">
							<path id="XMLID_169_" fill="#111414" d="M31.617,51.725c0.006-2.609-1.688-5.082-3.758-5.613
								c-0.854-0.219-2.272-0.571-5.303,1.863c-1.115,0.896,4.02,8.865,4.02,8.865l2.951-1.387c0.105-0.041,0.207-0.089,0.308-0.144
								l0.056-0.024l-0.002-0.003C30.925,54.686,31.615,53.389,31.617,51.725z"/>
							<g id="XMLID_167_">
								<path id="XMLID_168_" fill="#433836" d="M24.75,49.248c1.339,0.313,2.421,1.928,2.416,3.604
									c-0.004,1.676-1.09,2.781-2.428,2.469c-1.337-0.313-2.419-1.93-2.417-3.604C22.326,50.041,23.414,48.936,24.75,49.248z
									 M24.742,54.348c0.906,0.213,1.646-0.537,1.646-1.678c0.004-1.138-0.729-2.23-1.641-2.445
									c-0.907-0.213-1.646,0.537-1.646,1.676C23.101,53.039,23.834,54.133,24.742,54.348"/>
							</g>
							<g id="XMLID_165_">
								<path id="XMLID_166_" fill="#262B2B" d="M24.755,47.559c2.08,0.486,3.764,3.002,3.758,5.611
									c-0.006,2.608-1.695,4.328-3.775,3.84c-2.082-0.486-3.764-3-3.758-5.607C20.983,48.791,22.673,47.068,24.755,47.559z
									 M24.74,55.324c1.336,0.313,2.424-0.793,2.426-2.471c0.005-1.678-1.077-3.291-2.416-3.604
									c-1.336-0.313-2.424,0.791-2.428,2.469C22.321,53.395,23.403,55.008,24.74,55.324"/>
							</g>
							<g id="XMLID_163_">
								<path id="XMLID_164_" fill="#665B5A" d="M26.011,53.895c0.01-0.012,0.018-0.021,0.024-0.033
									c0.063-0.088,0.123-0.188,0.172-0.293c0.007-0.014,0.013-0.024,0.019-0.041c0.104-0.246,0.162-0.532,0.164-0.854
									c0-0.236-0.031-0.471-0.09-0.693c-0.006-0.024-0.015-0.051-0.021-0.074c-0.036-0.129-0.082-0.256-0.137-0.377
									c-0.009-0.02-0.018-0.034-0.022-0.051c-0.015-0.031-0.028-0.063-0.045-0.092c-0.007-0.016-0.015-0.029-0.021-0.043
									c-0.01-0.018-0.019-0.033-0.025-0.049c-0.008-0.015-0.016-0.025-0.021-0.039c-0.045-0.076-0.092-0.15-0.146-0.224
									c-0.053-0.072-0.104-0.143-0.166-0.206c-0.028-0.035-0.063-0.068-0.094-0.103h-0.002c-0.248-0.248-0.539-0.428-0.853-0.5
									c-0.907-0.213-1.646,0.537-1.646,1.676c0,0.404,0.092,0.804,0.25,1.156c0.006,0.01,0.01,0.021,0.016,0.027
									c0.017,0.035,0.031,0.067,0.05,0.104c0.008,0.017,0.017,0.029,0.022,0.047c0.008,0.015,0.016,0.025,0.021,0.041
									c0.016,0.025,0.03,0.058,0.049,0.084c0.039,0.064,0.082,0.134,0.127,0.191c0.053,0.072,0.108,0.145,0.17,0.207
									c0.021,0.024,0.045,0.051,0.065,0.072c0.252,0.256,0.55,0.438,0.867,0.518c0.198,0.047,0.39,0.047,0.565,0.008
									c0.012-0.004,0.021-0.006,0.036-0.01C25.606,54.277,25.834,54.121,26.011,53.895z"/>
							</g>
							<path id="XMLID_162_" fill="#514846" d="M25.216,54.348c-0.318-0.076-0.615-0.262-0.867-0.518
								c-0.021-0.021-0.045-0.048-0.064-0.072c-0.063-0.063-0.116-0.135-0.172-0.207c-0.045-0.063-0.086-0.127-0.127-0.191
								c-0.016-0.026-0.031-0.059-0.049-0.084c-0.008-0.016-0.016-0.026-0.021-0.041c-0.011-0.018-0.019-0.03-0.022-0.047
								c-0.021-0.031-0.033-0.065-0.051-0.104c-0.004-0.011-0.009-0.021-0.015-0.027c-0.157-0.354-0.25-0.752-0.25-1.156
								c0.002-0.899,0.466-1.559,1.108-1.688c-0.879-0.164-1.582,0.574-1.584,1.688c0,0.404,0.092,0.804,0.25,1.156
								c0.006,0.01,0.01,0.021,0.015,0.027c0.017,0.035,0.032,0.067,0.049,0.104c0.009,0.017,0.019,0.029,0.024,0.047
								c0.008,0.015,0.015,0.025,0.021,0.041c0.017,0.025,0.032,0.058,0.049,0.084c0.041,0.064,0.082,0.133,0.128,0.191
								c0.053,0.072,0.107,0.145,0.17,0.207c0.021,0.024,0.045,0.051,0.064,0.072c0.252,0.256,0.55,0.438,0.869,0.518
								c0.188,0.043,0.369,0.045,0.539,0.012C25.261,54.354,25.239,54.354,25.216,54.348z"/>
						</g>
						<polygon id="XMLID_160_" fill="#5E413A" points="43.244,61.959 48.291,59.566 40.397,55.771 40.397,60.404 			"/>
						<g id="XMLID_151_">
							<path id="XMLID_159_" fill="#111414" d="M53.933,64.24c0.006-2.608-1.688-5.082-3.758-5.612
								c-0.854-0.22-2.273-0.574-5.302,1.862c-1.116,0.898,4.019,8.867,4.019,8.867l2.953-1.387c0.104-0.041,0.207-0.09,0.305-0.146
								l0.057-0.022L52.204,67.8C53.242,67.203,53.931,65.902,53.933,64.24z"/>
							<g id="XMLID_157_">
								<path id="XMLID_158_" fill="#433836" d="M47.067,61.766c1.336,0.313,2.418,1.93,2.414,3.604
									c-0.002,1.678-1.09,2.782-2.426,2.469c-1.338-0.313-2.42-1.931-2.416-3.604C44.642,62.559,45.729,61.451,47.067,61.766z
									 M47.058,66.861c0.906,0.216,1.646-0.534,1.646-1.674c0.002-1.141-0.731-2.231-1.643-2.445
									c-0.906-0.215-1.646,0.535-1.646,1.677C45.416,65.555,46.149,66.648,47.058,66.861"/>
							</g>
							<g id="XMLID_155_">
								<path id="XMLID_156_" fill="#262B2B" d="M47.069,60.074c2.082,0.488,3.767,3.003,3.76,5.611
									c-0.004,2.609-1.694,4.33-3.774,3.84c-2.082-0.485-3.765-2.998-3.758-5.606C43.298,61.309,44.99,59.584,47.069,60.074z
									 M47.056,67.838c1.336,0.313,2.424-0.791,2.426-2.469c0.004-1.677-1.078-3.291-2.414-3.604
									c-1.338-0.313-2.426,0.793-2.428,2.469C44.636,65.91,45.718,67.523,47.056,67.838"/>
							</g>
							<g id="XMLID_153_">
								<path id="XMLID_154_" fill="#665B5A" d="M48.326,66.412c0.011-0.015,0.019-0.021,0.023-0.035
									c0.065-0.088,0.123-0.188,0.172-0.293c0.006-0.015,0.014-0.025,0.02-0.039c0.104-0.248,0.164-0.535,0.164-0.855
									c0-0.235-0.03-0.471-0.088-0.692c-0.01-0.023-0.016-0.052-0.021-0.076c-0.037-0.127-0.082-0.254-0.138-0.377
									c-0.008-0.017-0.018-0.033-0.021-0.052c-0.016-0.028-0.027-0.061-0.045-0.09c-0.008-0.016-0.016-0.028-0.021-0.043
									c-0.01-0.018-0.02-0.032-0.024-0.049c-0.008-0.014-0.017-0.024-0.023-0.039c-0.045-0.076-0.092-0.149-0.143-0.223
									c-0.053-0.072-0.107-0.144-0.164-0.207c-0.031-0.033-0.063-0.068-0.096-0.101c0-0.002-0.002-0.002-0.002-0.002
									c-0.248-0.248-0.539-0.426-0.854-0.498c-0.904-0.215-1.646,0.535-1.646,1.677c0,0.399,0.093,0.801,0.25,1.155
									c0.007,0.011,0.011,0.021,0.015,0.027c0.018,0.031,0.033,0.066,0.049,0.103c0.01,0.016,0.018,0.03,0.025,0.047
									c0.008,0.014,0.014,0.024,0.02,0.041c0.019,0.026,0.033,0.059,0.051,0.084c0.041,0.065,0.084,0.133,0.127,0.19
									c0.056,0.074,0.107,0.146,0.171,0.209c0.02,0.021,0.045,0.049,0.063,0.07c0.252,0.258,0.551,0.438,0.869,0.516
									c0.197,0.05,0.391,0.05,0.563,0.011c0.013-0.004,0.023-0.007,0.037-0.011C47.921,66.793,48.149,66.637,48.326,66.412z"/>
							</g>
							<path id="XMLID_152_" fill="#514846" d="M47.533,66.861c-0.319-0.073-0.617-0.258-0.869-0.516
								c-0.021-0.021-0.045-0.049-0.065-0.07c-0.06-0.063-0.115-0.135-0.17-0.209c-0.045-0.063-0.086-0.125-0.127-0.19
								c-0.017-0.025-0.033-0.058-0.049-0.084c-0.009-0.017-0.017-0.027-0.021-0.041c-0.008-0.017-0.018-0.031-0.022-0.047
								c-0.019-0.033-0.033-0.066-0.05-0.103c-0.006-0.012-0.01-0.021-0.014-0.027c-0.16-0.354-0.252-0.756-0.252-1.155
								c0.002-0.902,0.465-1.56,1.109-1.688c-0.878-0.164-1.582,0.574-1.584,1.688c0,0.399,0.092,0.801,0.25,1.155
								c0.006,0.011,0.01,0.021,0.014,0.027c0.018,0.031,0.033,0.066,0.049,0.103c0.01,0.016,0.019,0.03,0.025,0.047
								c0.008,0.014,0.014,0.024,0.02,0.041c0.021,0.026,0.033,0.059,0.053,0.084c0.041,0.065,0.084,0.133,0.128,0.19
								c0.055,0.074,0.104,0.146,0.17,0.209c0.02,0.021,0.045,0.049,0.063,0.07c0.252,0.258,0.549,0.439,0.869,0.516
								c0.189,0.047,0.369,0.05,0.539,0.015C47.576,66.871,47.554,66.869,47.533,66.861z"/>
						</g>
						<polygon id="XMLID_150_" fill="#5E413A" points="9.681,38.092 9.681,42.607 10.985,43.541 16.033,41.148 			"/>
						<g id="XMLID_141_">
							<path id="XMLID_149_" fill="#111414" d="M21.675,45.932c0.006-2.609-1.688-5.082-3.759-5.613
								c-0.853-0.219-2.272-0.571-5.303,1.863c-1.115,0.896,4.021,8.867,4.021,8.867l2.951-1.387c0.104-0.043,0.206-0.091,0.307-0.146
								l0.055-0.024l-0.002-0.003C20.981,48.895,21.671,47.596,21.675,45.932z"/>
							<g id="XMLID_147_">
								<path id="XMLID_148_" fill="#433836" d="M14.808,43.457c1.338,0.313,2.42,1.93,2.416,3.604
									c-0.002,1.676-1.09,2.779-2.428,2.469c-1.336-0.313-2.418-1.93-2.416-3.604C12.384,44.248,13.472,43.143,14.808,43.457z
									 M14.798,48.555c0.907,0.213,1.645-0.537,1.646-1.676c0.002-1.14-0.729-2.232-1.639-2.445s-1.646,0.537-1.646,1.674
									C13.158,47.246,13.892,48.34,14.798,48.555"/>
							</g>
							<g id="XMLID_145_">
								<path id="XMLID_146_" fill="#262B2B" d="M14.812,41.766c2.08,0.486,3.764,3.004,3.758,5.611
									c-0.004,2.608-1.692,4.328-3.772,3.84c-2.082-0.486-3.767-3-3.761-5.607C11.039,42.998,12.729,41.275,14.812,41.766z
									 M14.796,49.531c1.338,0.313,2.426-0.793,2.428-2.469c0.004-1.68-1.078-3.293-2.416-3.604
									c-1.336-0.313-2.424,0.791-2.428,2.469C12.378,47.602,13.459,49.215,14.796,49.531"/>
							</g>
							<g id="XMLID_143_">
								<path id="XMLID_144_" fill="#665B5A" d="M16.067,48.102c0.01-0.012,0.019-0.021,0.023-0.031
									c0.063-0.09,0.123-0.188,0.172-0.295c0.008-0.014,0.014-0.024,0.02-0.041c0.104-0.244,0.162-0.532,0.162-0.854
									c0.002-0.234-0.028-0.471-0.088-0.693c-0.006-0.024-0.014-0.049-0.021-0.074c-0.037-0.129-0.084-0.256-0.138-0.377
									c-0.009-0.018-0.017-0.032-0.022-0.051c-0.015-0.031-0.027-0.063-0.045-0.092c-0.006-0.014-0.015-0.027-0.021-0.043
									c-0.01-0.019-0.019-0.031-0.025-0.049c-0.007-0.015-0.016-0.025-0.021-0.039c-0.045-0.076-0.092-0.15-0.145-0.224
									c-0.052-0.073-0.105-0.143-0.164-0.204c-0.031-0.035-0.063-0.068-0.097-0.104h-0.001c-0.247-0.248-0.538-0.426-0.852-0.498
									c-0.908-0.213-1.646,0.537-1.646,1.674c-0.002,0.404,0.09,0.806,0.25,1.158c0.004,0.01,0.011,0.021,0.015,0.025
									c0.016,0.034,0.03,0.067,0.049,0.104c0.008,0.017,0.016,0.029,0.022,0.047c0.009,0.017,0.017,0.025,0.022,0.041
									c0.017,0.027,0.03,0.058,0.049,0.084c0.039,0.066,0.082,0.133,0.127,0.191c0.054,0.074,0.108,0.145,0.168,0.209
									c0.022,0.022,0.045,0.049,0.068,0.07c0.252,0.258,0.549,0.44,0.866,0.518c0.198,0.047,0.39,0.047,0.563,0.008
									c0.015-0.004,0.025-0.006,0.037-0.012C15.662,48.484,15.892,48.328,16.067,48.102z"/>
							</g>
							<path id="XMLID_142_" fill="#514846" d="M15.272,48.555c-0.318-0.074-0.615-0.26-0.867-0.518
								c-0.022-0.021-0.045-0.048-0.065-0.07c-0.062-0.064-0.114-0.135-0.17-0.209c-0.045-0.063-0.089-0.125-0.127-0.191
								c-0.019-0.026-0.033-0.057-0.05-0.084c-0.008-0.016-0.016-0.024-0.021-0.041c-0.011-0.018-0.02-0.031-0.025-0.047
								c-0.016-0.033-0.032-0.063-0.049-0.104c-0.004-0.009-0.008-0.019-0.015-0.025c-0.157-0.355-0.25-0.754-0.25-1.158
								c0.003-0.899,0.466-1.559,1.108-1.688c-0.879-0.164-1.582,0.574-1.584,1.688c0,0.404,0.092,0.806,0.25,1.158
								c0.006,0.01,0.01,0.02,0.015,0.025c0.017,0.034,0.03,0.067,0.05,0.104c0.008,0.016,0.016,0.029,0.023,0.047
								c0.006,0.017,0.016,0.025,0.021,0.041c0.016,0.027,0.029,0.058,0.049,0.084c0.039,0.066,0.082,0.133,0.127,0.191
								c0.053,0.074,0.109,0.145,0.168,0.209c0.021,0.022,0.045,0.049,0.068,0.07c0.252,0.258,0.549,0.44,0.865,0.518
								c0.188,0.045,0.37,0.045,0.541,0.012C15.317,48.563,15.294,48.559,15.272,48.555z"/>
						</g>
						<g id="XMLID_138_">
							<path id="XMLID_139_" fill="#C58612" d="M51.791,48.975l-5.364-15.266l-36.99-21.59v30.528l1.316,0.758l0.239-5.241
								l19.62,11.795c0,0,0.007,4.813,0,4.934l12.585,7.072c0.783-1.744,2.377-2.699,4.219-2.269c2.609,0.611,4.72,3.765,4.714,7.037
								c0,0.123-0.011,0.24-0.017,0.357l4.902,2.92v-11.17L51.791,48.975z"/>
						</g>
						<g id="XMLID_134_">
							<path id="XMLID_136_" fill="#D0D167" d="M9.437,36.566v6.082l1.549,0.898c0.887-1.646,2.316-2.668,4.104-2.455
								c2.5,0.301,5.088,3.826,5.088,6.715c0,0.355-0.021,0.707-0.06,1.051l0.808,0.472c0.78-1.752,2.377-2.709,4.222-2.277
								c2.608,0.613,4.72,3.768,4.713,7.039c-0.002,0.125-0.01,0.244-0.017,0.367L43.2,61.966c0.783-1.744,2.377-2.699,4.22-2.269
								c2.608,0.611,4.719,3.765,4.713,7.037c0,0.123-0.011,0.24-0.017,0.357l4.902,2.92v-5.959L9.437,36.566z"/>
						</g>
						<g id="XMLID_132_">
							<polygon id="XMLID_133_" fill="#F1CF21" points="9.437,12.119 46.427,33.709 67.649,21.334 30.578,0 				"/>
						</g>
						<g id="XMLID_128_">
							<polygon id="XMLID_131_" fill="#E2CD79" points="16.22,13.168 26.878,19.363 42.806,10.021 42.81,7.977 16.22,11.273 				"/>
						</g>
						<g id="XMLID_125_">
							<polygon id="XMLID_126_" fill="#F0E188" points="26.701,17.33 26.873,19.311 42.806,10.021 42.806,7.924 				"/>
						</g>
						<g id="XMLID_122_">
							<polygon id="XMLID_124_" fill="#F9F3B7" points="16.22,11.273 26.673,17.34 42.806,7.934 32.289,2.063 				"/>
						</g>
						<g id="XMLID_118_">
							<polygon id="XMLID_119_" fill="#F5B91B" points="57.017,58.842 78.285,46.514 78.285,58.188 57.017,70.014 				"/>
						</g>
						<g id="XMLID_116_">
							<polygon id="XMLID_117_" fill="#D0D167" points="57.017,64.055 57.017,70.014 78.285,58.188 78.285,52.043 				"/>
						</g>
						<g id="XMLID_114_">
							<polygon id="XMLID_115_" fill="#AFAFAF" points="57.017,67.354 57.017,70.014 79.384,57.684 79.384,54.84 				"/>
						</g>
						<g id="XMLID_112_">
							<polygon id="XMLID_113_" fill="#949394" points="57.017,67.354 57.017,70.014 51.242,66.773 51.242,64.174 				"/>
						</g>
						<g id="XMLID_109_" opacity="0.2">
							<g id="XMLID_110_">
								<path id="XMLID_111_" fill="#040000" d="M36.39,39.439l14.854,8.754v11.17c-0.977-0.768-2.621-1.754-4.639-1.754
									c-0.305,0-0.609,0.021-0.912,0.066c-1.26,0.188-2.313,0.898-2.813,1.289l-6.488-3.629v-1.273l0.01-4.399L36.39,39.439
									 M35.839,38.479l0.01,11.185l-0.01,4.399v1.601l7.098,3.971c0,0,1.256-1.17,2.838-1.408c0.283-0.043,0.562-0.063,0.83-0.063
									c3.016,0,5.188,2.448,5.188,2.448V47.879L35.839,38.479L35.839,38.479z"/>
							</g>
						</g>
						<g id="XMLID_107_">
							<polygon id="XMLID_108_" fill="#F5B91B" points="51.791,48.975 72.875,36.734 78.285,46.514 57.017,58.842 				"/>
						</g>
						<g id="XMLID_105_">
							<polygon id="XMLID_106_" fill="#F5B91B" points="46.427,33.709 67.649,21.334 72.875,36.734 51.791,48.975 				"/>
						</g>
						<g id="XMLID_103_">
							<polygon id="XMLID_104_" fill="#8DD0D8" points="47.964,34.496 67.071,23.273 71.41,36.061 52.416,47.166 				"/>
						</g>
						<g id="XMLID_101_" opacity="0.28">
							<polygon id="XMLID_102_" fill="#040000" points="66.666,24.621 70.69,36.48 71.41,36.061 67.071,23.273 47.964,34.496 
								48.289,35.414 				"/>
						</g>
						<g id="XMLID_99_">
							<polygon id="XMLID_100_" fill="#FFFFFF" points="66.966,63.914 66.966,66.26 74.162,62.215 74.162,59.992 				"/>
						</g>
						<g id="XMLID_96_">
							<polygon id="XMLID_97_" fill="#C57C15" points="46.427,33.709 35.849,27.535 35.839,39.578 51.791,48.975 				"/>
						</g>
						<g id="XMLID_94_">
							<polygon id="XMLID_95_" fill="#53B5B6" points="45.425,34.184 36.55,29.059 36.642,38.949 49.796,46.625 				"/>
						</g>
						<g id="XMLID_91_" opacity="0.28">
							<polygon id="XMLID_93_" fill="#040000" points="44.714,34.818 48.623,45.941 49.796,46.625 45.425,34.184 36.55,29.059 
								36.56,30.107 				"/>
						</g>
						<g id="XMLID_88_">
							<rect id="XMLID_90_" x="44.632" y="33.613" fill="#C58612" width="1.1" height="11.037"/>
						</g>
						<g id="XMLID_81_" opacity="0.31">
							<g id="XMLID_86_">
								<path id="XMLID_87_" fill="#FFFFFF" d="M36.606,35.287l1.896-1.896c0.321-0.322,0.321-0.848,0-1.166
									c-0.322-0.324-0.845-0.324-1.166,0l-0.75,0.75L36.606,35.287z"/>
							</g>
							<g id="XMLID_84_">
								<path id="XMLID_85_" fill="#FFFFFF" d="M41.274,34.082c-0.32-0.322-0.844-0.322-1.166,0l-3.479,3.479l0.014,1.387l0.588,0.345
									l4.045-4.043C41.597,34.928,41.597,34.404,41.274,34.082z"/>
							</g>
							<g id="XMLID_82_">
								<path id="XMLID_83_" fill="#FFFFFF" d="M42.289,37.672c-0.321-0.322-0.846-0.322-1.166,0l-2.459,2.457l1.476,0.858l2.149-2.149
									C42.61,38.516,42.61,37.994,42.289,37.672z"/>
							</g>
						</g>
						<g id="XMLID_67_" opacity="0.44">
							<g id="XMLID_76_">
								<path id="XMLID_80_" fill="#FFFFFF" d="M60.173,40.002c-0.548-0.271-1.205-0.045-1.474,0.502l-2.063,4.192l3.44-2.012
									l0.597-1.211C60.942,40.93,60.718,40.271,60.173,40.002z"/>
							</g>
							<g id="XMLID_74_">
								<path id="XMLID_75_" fill="#FFFFFF" d="M65.834,32.125c-0.271,0.547-0.045,1.205,0.503,1.475
									c0.153,0.076,0.317,0.111,0.481,0.111c0.406,0,0.799-0.226,0.986-0.613l1.537-3.123l-1.002-2.951L65.834,32.125z"/>
							</g>
							<g id="XMLID_72_">
								<path id="XMLID_73_" fill="#FFFFFF" d="M57.267,37.268c-0.545-0.27-1.203-0.043-1.474,0.502l-3.896,7.924l0.521,1.476
									l1.697-0.994l3.65-7.435C58.039,38.193,57.812,37.535,57.267,37.268z"/>
							</g>
							<g id="XMLID_70_">
								<path id="XMLID_71_" fill="#FFFFFF" d="M50.966,43.037l2.313-4.711c0.271-0.546,0.043-1.203-0.502-1.472
									c-0.545-0.271-1.205-0.045-1.473,0.502l-1.361,2.771L50.966,43.037z"/>
							</g>
							<g id="XMLID_68_">
								<path id="XMLID_69_" fill="#FFFFFF" d="M65.599,24.141l-3.928,7.984c-0.271,0.547-0.043,1.205,0.502,1.475
									c0.155,0.076,0.321,0.111,0.481,0.111c0.406,0,0.799-0.226,0.988-0.613l3.998-8.133l-0.572-1.691L65.599,24.141z"/>
							</g>
						</g>
						<g id="XMLID_65_">
							<path id="XMLID_66_" fill="#618397" d="M66.5,39.895l-7.661,2.842c-0.199,0.074-0.42-0.026-0.494-0.229
								c-0.068-0.188,0.021-0.396,0.196-0.479l7.396-3.481c0.363-0.172,0.799-0.017,0.973,0.352c0.175,0.365,0.017,0.801-0.352,0.974
								C66.541,39.877,66.521,39.885,66.5,39.895z"/>
						</g>
						<g id="XMLID_60_">
							<g id="XMLID_63_" opacity="0.28">
								<path id="XMLID_64_" fill="#040000" d="M37.621,45.23c-0.252-0.146-0.403-0.418-0.403-0.711c0-0.291,0.153-0.563,0.405-0.709
									c0.25-0.147,0.562-0.152,0.816-0.014l1.717,0.949c0.271,0.147,0.439,0.438,0.439,0.745s-0.164,0.591-0.431,0.742
									c-0.27,0.15-0.596,0.148-0.856-0.008L37.621,45.23z"/>
							</g>
							<g id="XMLID_61_">
								<path id="XMLID_62_" fill="#F4F4F5" d="M37.457,44.559c-0.25-0.146-0.403-0.418-0.403-0.709c0-0.293,0.153-0.563,0.405-0.711
									c0.253-0.148,0.563-0.152,0.816-0.014l1.719,0.948c0.271,0.15,0.438,0.438,0.438,0.746c0,0.309-0.164,0.593-0.431,0.742
									c-0.27,0.15-0.596,0.148-0.858-0.006L37.457,44.559z"/>
							</g>
						</g>
						<polygon id="XMLID_59_" fill="#828282" points="57.017,67.354 57.017,66.111 52.478,63.512 51.242,64.174 			"/>
						<polygon id="XMLID_58_" fill="#F4F4F5" points="57.017,67.354 79.384,54.84 78.285,54.318 57.017,66.111 			"/>
						<polygon id="XMLID_57_" opacity="0.1" fill="#040000" enable-background="new    " points="48.492,39.582 69.753,27.535 
							67.644,21.334 46.427,33.709 			"/>
						<polygon id="XMLID_56_" fill="#AFAFAF" points="46.427,33.709 47.735,37.43 51.334,36.734 			"/>
						<polygon id="XMLID_55_" fill="#F4F4F5" points="51.334,36.734 72.552,24.359 67.644,21.334 46.427,33.709 			"/>
						<g id="XMLID_10_">
							<g id="XMLID_53_">
								<polygon id="XMLID_54_" fill="#425D5D" points="10.979,14.799 10.979,32.904 32.173,45.369 32.173,27.037 					"/>
							</g>
							<g id="XMLID_51_" opacity="0.28">
								<path id="XMLID_52_" fill="#040000" d="M9.437,14.221v28.43l1.602,0.931c0.591-1.326,1.934-2.486,3.371-2.486
									c2.769,0,4.709,2.449,5.604,5.4c0.25,0.817,0.104,2.362,0.104,2.362L32.175,27.04L9.437,14.221z"/>
							</g>
							<g id="XMLID_49_">
								<path id="XMLID_50_" fill="#F4E8CE" d="M12.08,16.705l18.992,10.967v15.772L12.08,32.274V16.705 M10.979,14.799v18.104
									l21.191,12.465V27.038L10.979,14.799L10.979,14.799z"/>
							</g>
							<g id="XMLID_46_">
								<g id="XMLID_47_">
									<path id="XMLID_48_" fill="#040000" d="M11.53,15.752l20.095,11.604v17.053L11.53,32.591V15.752 M10.979,14.799v18.104
										l21.191,12.465V27.038L10.979,14.799L10.979,14.799z"/>
								</g>
							</g>
							<g id="XMLID_44_">
								<polygon id="XMLID_45_" fill="#F4E8CE" points="21.612,33.344 32.063,45.4 32.063,44.088 22.429,32.854 					"/>
							</g>
							<g id="XMLID_42_">
								<polygon id="XMLID_43_" fill="#040000" points="32.063,45.4 30.312,44.371 19.688,32.221 21.612,33.344 					"/>
							</g>
							<g id="XMLID_40_">
								<polyline id="XMLID_41_" fill="#040000" points="0.005,20.729 10.869,32.938 10.869,31.193 3.103,22.535 0.005,20.729 					"/>
							</g>
							<g id="XMLID_38_">
								<polygon id="XMLID_39_" fill="#F4E8CE" points="10.869,32.938 0.005,20.729 2.08,21.936 12.712,33.994 					"/>
							</g>
							<g id="XMLID_11_">
								<g id="XMLID_36_">
									<polygon id="XMLID_37_" fill="#F4E8CE" points="10.519,14.514 0,20.693 21.608,33.309 32.067,27.045 						"/>
								</g>
								<g id="XMLID_34_">
									<polygon id="XMLID_35_" fill="#EF7D1B" points="3.097,22.5 13.351,16.145 16.291,17.857 6.228,24.328 						"/>
								</g>
								<g id="XMLID_32_">
									<polygon id="XMLID_33_" fill="#EF7D1B" points="9.281,26.111 19.524,19.77 22.425,21.434 12.356,27.906 						"/>
								</g>
								<g id="XMLID_30_">
									<polygon id="XMLID_31_" fill="#EF7D1B" points="15.472,29.699 25.698,23.365 28.8,25.176 18.5,31.494 						"/>
								</g>
								<g id="XMLID_29_">
									<path fill="#F4E8CE" d="M0,20.693v2.73c0,0.549,0.291,1.057,0.768,1.334l0.008,0.004c0.479,0.277,1.065,0.279,1.545,0.006
										c0.479-0.274,0.772-0.783,0.775-1.334l0.002-0.938L0,20.693z"/>
								</g>
								<g id="XMLID_28_">
									<path fill="#EF7D1B" d="M3.097,22.5l-0.006,2.729c-0.002,0.549,0.289,1.06,0.764,1.334l0.037,0.021
										c0.475,0.274,1.059,0.28,1.535,0.014c0.479-0.27,0.776-0.771,0.784-1.32l0.017-0.95L3.097,22.5z"/>
								</g>
								<g id="XMLID_27_">
									<path fill="#F4E8CE" d="M6.228,24.328L6.22,27.069c-0.004,0.539,0.283,1.039,0.75,1.31c0.477,0.278,1.067,0.278,1.549,0.002
										c0.479-0.275,0.771-0.789,0.771-1.344L9.283,26.11L6.228,24.328z"/>
								</g>
								<g id="XMLID_26_">
									<path fill="#EF7D1B" d="M9.281,26.111l-0.016,2.744c-0.004,0.549,0.287,1.06,0.762,1.334l0.006,0.004
										c0.479,0.275,1.064,0.279,1.545,0.004c0.479-0.272,0.773-0.782,0.775-1.334l0.002-0.957L9.281,26.111z"/>
								</g>
								<g id="XMLID_25_">
									<path fill="#F4E8CE" d="M12.356,27.906l0.006,2.729c0,0.553,0.293,1.059,0.771,1.332l0.017,0.012
										c0.479,0.273,1.063,0.275,1.541,0.002c0.479-0.272,0.772-0.78,0.774-1.332l0.004-0.946L12.356,27.906z"/>
								</g>
								<g id="XMLID_24_">
									<path fill="#EF7D1B" d="M15.472,29.699l-0.043,2.718c-0.011,0.549,0.278,1.061,0.754,1.334
										c0.479,0.276,1.065,0.278,1.545,0.004c0.479-0.273,0.772-0.783,0.772-1.338v-0.922L15.472,29.699z"/>
								</g>
								<g id="XMLID_23_">
									<path fill="#F4E8CE" d="M18.5,31.494l0.017,2.774c0.004,0.547,0.295,1.051,0.77,1.326l0.005,0.004
										c0.479,0.275,1.065,0.277,1.545,0.002c0.479-0.274,0.772-0.785,0.772-1.336v-0.957L18.5,31.494z"/>
								</g>
								<g id="XMLID_12_" display="none" opacity="0.58">
									<g id="XMLID_21_" display="inline">
										<path id="XMLID_22_" fill="#040000" d="M3.097,22.494L0,20.692v2.73c0,0.549,0.291,1.057,0.768,1.334l0.008,0.004
											c0.479,0.277,1.065,0.279,1.545,0.006c0.479-0.274,0.772-0.783,0.775-1.334L3.097,22.494z"/>
									</g>
									<g id="XMLID_19_" display="inline">
										<path id="XMLID_20_" fill="#040000" d="M3.091,25.23c-0.002,0.549,0.289,1.06,0.764,1.334l0.037,0.021
											C4.366,26.86,4.95,26.867,5.427,26.6c0.479-0.27,0.776-0.771,0.784-1.32l0.017-0.95l-3.131-1.828L3.091,25.23z"/>
									</g>
									<g id="XMLID_17_" display="inline">
										<path id="XMLID_18_" fill="#040000" d="M6.228,24.328L6.22,27.069c-0.004,0.539,0.283,1.039,0.75,1.31
											c0.477,0.278,1.067,0.278,1.549,0.002c0.453-0.262,0.729-0.734,0.758-1.256l-0.01,1.729c-0.004,0.549,0.287,1.06,0.762,1.334
											l0.008,0.004c0.479,0.275,1.064,0.279,1.545,0.004c0.479-0.272,0.771-0.782,0.773-1.334l0.002-0.957L9.284,26.11
											L6.228,24.328z"/>
									</g>
									<g id="XMLID_15_" display="inline">
										<path id="XMLID_16_" fill="#040000" d="M15.472,29.699l-0.008,0.412l0.002-0.412l-3.109-1.793l0.006,2.729
											c0,0.553,0.295,1.059,0.771,1.332l0.017,0.012c0.479,0.273,1.063,0.275,1.541,0.002c0.461-0.268,0.746-0.75,0.77-1.276
											l-0.029,1.713c-0.01,0.549,0.279,1.059,0.754,1.334c0.479,0.276,1.066,0.278,1.545,0.004
											c0.479-0.275,0.773-0.785,0.773-1.338v-0.922l0,0L15.472,29.699z"/>
									</g>
									<g id="XMLID_13_" display="inline">
										<path id="XMLID_14_" fill="#040000" d="M18.5,31.494l0.017,2.774c0.004,0.547,0.295,1.051,0.77,1.326l0.005,0.004
											c0.479,0.275,1.065,0.277,1.545,0.002c0.479-0.274,0.772-0.785,0.772-1.336v-0.957L18.5,31.494z"/>
									</g>
								</g>
							</g>
						</g>
						<polygon id="XMLID_9_" fill="#F4F4F5" points="61.778,58.072 57.017,60.836 57.017,58.842 61.778,56.078 			"/>
						<polygon id="XMLID_8_" fill="#262B2B" points="72.472,54.318 62.655,60.023 62.655,56.27 72.472,50.563 			"/>
						<polygon id="XMLID_4_" fill="#EABE47" points="61.778,59.059 57.017,61.822 57.017,60.826 61.778,58.063 			"/>
						<polygon id="XMLID_3_" fill="#EABE47" points="78.285,49.502 73.522,52.27 73.522,51.271 78.285,48.506 			"/>
						<polygon id="XMLID_2_" fill="#F4F4F5" points="78.285,48.506 73.522,51.271 73.522,49.277 78.285,46.514 			"/>
					</g>				
					<g id="location2-g">
						<g id="location2">
							<path fill="#FFFFFF" d="M590.311,361.189c-12.94,7.471-23.428,25.639-23.387,40.509c0.042,14.861,10.6,20.885,23.539,13.413
								c12.936-7.469,23.426-25.641,23.383-40.505C613.803,359.739,603.245,353.72,590.311,361.189z"/>
							<path fill="#FF1022" d="M590.302,357.631c-14.646,8.457-26.521,29.021-26.477,45.854c0.048,16.823,12.001,23.634,26.646,15.185
								c14.64-8.454,26.517-29.023,26.468-45.85C616.893,355.99,604.941,349.179,590.302,357.631z M590.467,415.111
								c-12.939,7.472-23.497,1.448-23.539-13.413c-0.042-14.87,10.442-33.038,23.387-40.509c12.936-7.469,23.492-1.45,23.535,13.417
								C613.889,389.47,603.399,407.642,590.467,415.111z"/>
							<path fill="#FF4A1E" d="M590.272,346.969c-19.794,11.426-35.789,39.129-35.725,61.873c0.024,9.643,3.043,16.688,7.799,21.063
								c7.209,6.63,27.186,26.368,28.237,27.406c1.041-2.247,20.837-44.948,27.981-59.865c4.715-9.846,7.68-20.346,7.652-29.983
								C626.157,344.718,610.059,335.545,590.272,346.969z M590.474,418.66c-14.646,8.455-26.6,1.646-26.646-15.179
								c-0.046-16.828,11.827-37.396,26.477-45.854c14.641-8.452,26.593-1.646,26.642,15.188
								C616.991,389.642,605.114,410.211,590.474,418.66z"/>
							<path fill="#FF1022" d="M554.639,406.23c0.021-0.461,0.048-0.92,0.083-1.385c0.021-0.233,0.037-0.477,0.061-0.711
								c0.042-0.455,0.089-0.914,0.142-1.375c0.023-0.225,0.048-0.438,0.074-0.662c0.041-0.319,0.092-0.646,0.136-0.965
								c0.066-0.479,0.139-0.965,0.22-1.447c0.057-0.321,0.112-0.647,0.172-0.977c0.086-0.469,0.178-0.938,0.271-1.404
								c0.075-0.371,0.154-0.744,0.237-1.117c0.067-0.313,0.143-0.627,0.215-0.94c0.1-0.408,0.201-0.816,0.309-1.229
								c0.079-0.309,0.157-0.614,0.24-0.926c0.136-0.492,0.275-0.988,0.423-1.483c0.054-0.185,0.104-0.365,0.161-0.554
								c0.205-0.68,0.421-1.354,0.646-2.033c0.334-0.997,0.693-1.987,1.07-2.979c0.095-0.248,0.188-0.498,0.287-0.746
								c0.33-0.841,0.669-1.68,1.024-2.514c0.058-0.127,0.104-0.258,0.162-0.388c0.397-0.922,0.819-1.84,1.26-2.754
								c0.115-0.237,0.23-0.479,0.352-0.715c0.354-0.727,0.719-1.438,1.092-2.156c0.116-0.221,0.229-0.438,0.352-0.66
								c0.479-0.896,0.976-1.786,1.48-2.665c0.101-0.164,0.197-0.328,0.298-0.492c0.448-0.769,0.911-1.523,1.391-2.273
								c0.141-0.221,0.275-0.438,0.419-0.66c0.588-0.914,1.188-1.815,1.813-2.709c0.098-0.133,0.19-0.264,0.285-0.396
								c0.646-0.915,1.313-1.816,1.995-2.703c0.104-0.139,0.207-0.275,0.313-0.412c0.211-0.271,0.429-0.539,0.645-0.809
								c0.273-0.343,0.546-0.687,0.821-1.021c0.227-0.271,0.453-0.537,0.681-0.803c0.27-0.314,0.532-0.633,0.802-0.939
								c0.558-0.631,1.114-1.252,1.684-1.856c0.034-0.033,0.063-0.07,0.1-0.104c0.604-0.645,1.211-1.264,1.828-1.875
								c0.391-0.387,0.783-0.77,1.182-1.145c0.111-0.104,0.226-0.215,0.334-0.32c0.521-0.486,1.053-0.961,1.581-1.43
								c0.146-0.127,0.292-0.25,0.438-0.375c0.394-0.336,0.782-0.67,1.182-0.992c0.194-0.162,0.396-0.318,0.593-0.479
								c0.354-0.281,0.705-0.562,1.063-0.83c0.214-0.162,0.425-0.318,0.64-0.479c0.354-0.263,0.705-0.52,1.063-0.771
								c0.211-0.146,0.422-0.302,0.634-0.441c0.386-0.266,0.769-0.521,1.151-0.771c0.188-0.119,0.364-0.242,0.553-0.354
								c0.566-0.361,1.145-0.713,1.723-1.043c0.553-0.32,1.104-0.619,1.648-0.906c0.146-0.074,0.285-0.147,0.432-0.223
								c0.488-0.253,0.979-0.49,1.463-0.719c0.063-0.023,0.12-0.062,0.182-0.084c0.505-0.23,1.005-0.441,1.505-0.646
								c0.526-0.215,1.058-0.412,1.574-0.604c0.137-0.05,0.271-0.104,0.396-0.146c0.647-0.224,1.294-0.422,1.932-0.599
								c0.376-0.104,0.751-0.188,1.121-0.276c0.173-0.039,0.351-0.09,0.521-0.127c0.547-0.117,1.087-0.22,1.621-0.301
								c0.021-0.003,0.043-0.008,0.063-0.01c0.486-0.07,0.97-0.134,1.444-0.179c0.161-0.014,0.316-0.021,0.479-0.03
								c0.35-0.023,0.688-0.05,1.029-0.06c0.152-0.004,0.306-0.006,0.454-0.008c0.354-0.004,0.709,0.002,1.06,0.018
								c0.121,0.004,0.243,0.009,0.363,0.016c0.45,0.021,0.896,0.063,1.34,0.116c0.092,0.016,0.187,0.026,0.275,0.041
								c0.354,0.052,0.714,0.104,1.063,0.175c0.117,0.021,0.236,0.048,0.354,0.068c0.396,0.089,0.798,0.188,1.188,0.293
								c0.022,0.009,0.054,0.016,0.076,0.021c0.409,0.118,0.813,0.258,1.21,0.4c0.104,0.039,0.212,0.082,0.317,0.123
								c0.32,0.125,0.639,0.261,0.945,0.401c0.08,0.037,0.162,0.069,0.244,0.108c0.401,0.189,0.8,0.396,1.188,0.625l-0.007-0.002
								c0.002,0,0.005,0,0.007,0.002l-6.779-4.05c-0.063-0.039-0.132-0.075-0.192-0.109c-0.324-0.186-0.651-0.354-0.987-0.514
								c-0.08-0.041-0.164-0.075-0.245-0.111c-0.188-0.089-0.375-0.177-0.566-0.257c-0.125-0.054-0.254-0.102-0.381-0.146
								c-0.104-0.043-0.213-0.084-0.314-0.123c-0.396-0.145-0.789-0.278-1.191-0.396c-0.007,0-0.014-0.002-0.019-0.002
								c-0.025-0.009-0.058-0.018-0.077-0.021c-0.393-0.104-0.784-0.205-1.188-0.289c-0.116-0.021-0.236-0.051-0.356-0.069
								c-0.122-0.023-0.244-0.058-0.369-0.074c-0.229-0.039-0.459-0.066-0.688-0.104c-0.092-0.014-0.185-0.025-0.273-0.041
								c-0.396-0.049-0.795-0.086-1.197-0.109c-0.046-0.005-0.098-0.005-0.143-0.005c-0.122-0.011-0.244-0.013-0.362-0.017
								c-0.354-0.017-0.701-0.021-1.063-0.019c-0.146,0.002-0.302,0.005-0.452,0.011c-0.119,0.004-0.233,0.002-0.354,0.008
								c-0.226,0.011-0.45,0.029-0.675,0.047c-0.159,0.018-0.316,0.021-0.479,0.035c-0.479,0.045-0.96,0.104-1.446,0.177
								c-0.021,0.006-0.042,0.008-0.063,0.011c-0.003,0-0.007,0-0.008,0c-0.531,0.084-1.068,0.185-1.611,0.302
								c-0.177,0.036-0.354,0.086-0.527,0.127c-0.337,0.08-0.671,0.153-1.012,0.248c-0.033,0.01-0.066,0.02-0.104,0.027
								c-0.64,0.178-1.279,0.371-1.935,0.598c-0.132,0.045-0.266,0.102-0.396,0.146c-0.522,0.188-1.052,0.389-1.581,0.604
								c-0.07,0.023-0.143,0.053-0.211,0.079c-0.431,0.181-0.856,0.366-1.291,0.563c-0.063,0.029-0.12,0.063-0.184,0.086
								c-0.48,0.229-0.974,0.466-1.464,0.716c-0.144,0.073-0.283,0.147-0.431,0.227c-0.55,0.289-1.098,0.586-1.649,0.905
								c-0.576,0.334-1.146,0.685-1.72,1.043c-0.188,0.112-0.366,0.237-0.551,0.354c-0.388,0.254-0.771,0.507-1.156,0.771
								c-0.211,0.146-0.42,0.296-0.633,0.439c-0.354,0.25-0.707,0.507-1.063,0.771c-0.216,0.156-0.429,0.314-0.64,0.479
								c-0.354,0.271-0.71,0.548-1.063,0.83c-0.197,0.156-0.396,0.313-0.596,0.479c-0.396,0.321-0.791,0.655-1.186,0.993
								c-0.145,0.125-0.29,0.244-0.433,0.371c-0.532,0.468-1.063,0.942-1.582,1.436c-0.109,0.104-0.216,0.207-0.325,0.311
								c-0.348,0.328-0.695,0.658-1.041,0.998c-0.051,0.05-0.1,0.104-0.148,0.152c-0.615,0.611-1.229,1.232-1.827,1.875
								c-0.03,0.034-0.063,0.068-0.1,0.104c-0.566,0.604-1.126,1.229-1.678,1.856c-0.057,0.062-0.108,0.116-0.162,0.178
								c-0.218,0.25-0.431,0.515-0.646,0.77c-0.226,0.269-0.448,0.523-0.673,0.798c-0.274,0.336-0.552,0.684-0.825,1.021
								c-0.214,0.271-0.432,0.535-0.644,0.811c-0.039,0.052-0.081,0.101-0.121,0.146c-0.063,0.086-0.126,0.177-0.191,0.266
								c-0.682,0.886-1.344,1.784-1.987,2.698c-0.064,0.097-0.14,0.184-0.202,0.271c-0.027,0.043-0.061,0.09-0.085,0.131
								c-0.622,0.892-1.229,1.793-1.813,2.705c-0.059,0.092-0.117,0.174-0.176,0.264c-0.082,0.132-0.159,0.271-0.242,0.398
								c-0.477,0.75-0.938,1.51-1.39,2.271c-0.071,0.121-0.146,0.236-0.219,0.359c-0.026,0.043-0.055,0.092-0.078,0.137
								c-0.512,0.879-1.005,1.771-1.483,2.664c-0.039,0.07-0.081,0.146-0.119,0.215c-0.078,0.146-0.146,0.303-0.227,0.445
								c-0.376,0.717-0.739,1.438-1.096,2.156c-0.072,0.146-0.152,0.297-0.229,0.441c-0.044,0.095-0.081,0.186-0.125,0.271
								c-0.438,0.912-0.854,1.83-1.261,2.756c-0.014,0.024-0.026,0.06-0.04,0.084c-0.044,0.104-0.081,0.203-0.123,0.301
								c-0.354,0.834-0.697,1.671-1.022,2.514c-0.057,0.136-0.111,0.271-0.166,0.4c-0.045,0.113-0.08,0.229-0.122,0.345
								c-0.376,0.991-0.735,1.983-1.07,2.981c-0.005,0.021-0.014,0.039-0.021,0.063c-0.222,0.654-0.427,1.313-0.626,1.978
								c-0.059,0.182-0.104,0.362-0.158,0.547c-0.108,0.377-0.229,0.754-0.328,1.129c-0.032,0.119-0.063,0.242-0.097,0.359
								c-0.084,0.311-0.164,0.616-0.239,0.926c-0.105,0.41-0.209,0.819-0.311,1.229c-0.074,0.313-0.146,0.627-0.217,0.938
								c-0.048,0.219-0.104,0.438-0.147,0.656c-0.03,0.152-0.059,0.309-0.091,0.465c-0.097,0.469-0.187,0.938-0.271,1.405
								c-0.063,0.323-0.119,0.646-0.173,0.972c-0.082,0.481-0.15,0.967-0.223,1.444c-0.029,0.229-0.07,0.455-0.104,0.683
								c-0.014,0.097-0.021,0.188-0.033,0.287c-0.027,0.223-0.051,0.44-0.074,0.66c-0.053,0.459-0.1,0.92-0.14,1.375
								c-0.021,0.239-0.041,0.479-0.06,0.715c-0.035,0.463-0.063,0.924-0.084,1.383c-0.015,0.209-0.022,0.42-0.031,0.627
								c-0.022,0.658-0.039,1.313-0.035,1.973c0.025,9.644,3.042,16.688,7.797,21.063c7.209,6.633,27.188,26.37,28.236,27.409l6.778,4.048
								c-1.054-1.037-21.025-20.774-28.234-27.406c-4.756-4.375-7.771-11.422-7.802-21.063c0-0.65,0.018-1.313,0.038-1.971
								C554.619,406.648,554.633,406.437,554.639,406.23z"/>
							<g>
								<path fill="#BE7300" d="M600.855,394.129c-0.129,4.459-3.59,9.777-7.731,11.886l-3.542,1.8c-4.141,2.105-7.393,0.195-7.265-4.263
									l0.551-19.113c0.128-4.46,3.589-9.781,7.73-11.884l3.542-1.803c4.141-2.104,7.394-0.195,7.265,4.263L600.855,394.129z"/>
								<g>
									<path fill="#3E3318" d="M593.485,408.879c-0.038,1.316-1.063,2.896-2.29,3.519l0,0c-1.226,0.624-2.188,0.059-2.147-1.262
										l1.191-41.446c0.038-1.321,1.063-2.896,2.289-3.52l0,0c1.229-0.624,2.19-0.063,2.152,1.261L593.485,408.879z"/>
									<g>
										<g>
											<path fill="#EC0018" d="M595.231,402.351c-0.177,0.091-0.351,0.104-0.479,0.026l-7.212-4.484l6.652-9.526l-6.201-4.712
												l7.118-10.604c0.28-0.415,0.709-0.622,0.958-0.462c0.25,0.161,0.229,0.628-0.054,1.045l-6.152,9.164l6.229,4.729l-6.6,9.444
												l6.262,3.892c0.252,0.157,0.229,0.624-0.044,1.04C595.574,402.11,595.402,402.263,595.231,402.351z"/>
										</g>
										<g>
											<path fill="#FA9800" d="M587.63,406.217c0.177-0.089,0.354-0.255,0.49-0.474l7.688-12.057l-6.293-2.946l6.661-11.249
												l-6.71-3.569c-0.269-0.145-0.693,0.089-0.959,0.511c-0.271,0.425-0.271,0.881-0.01,1.021l5.804,3.094l-6.69,11.296l6.238,2.92
												l-6.671,10.464c-0.271,0.423-0.277,0.882-0.019,1.022C587.288,406.321,587.456,406.303,587.63,406.217z"/>
										</g>
									</g>
								</g>
								<path opacity="0.3" fill="#231D1E" enable-background="new    " d="M592.527,366.193c-1.226,0.622-2.251,2.199-2.289,3.521
									l-0.09,3.114c-3.938,2.249-7.157,7.341-7.281,11.636l-0.551,19.11c-0.124,4.294,2.893,6.212,6.817,4.47l-0.094,3.114
									c-0.036,1.318,0.929,1.889,2.151,1.265L592.527,366.193z"/>
							</g>
						</g>
					</g>
				</g>
				<g id="truckMove1">
					<g id="truck1">
						<path id="XMLID_5398_" opacity="0.4" d="M188.372,277.074l-23.394,13.243c-1.377,0.78-1.385,2.764-0.013,3.553l44.641,25.708
							c0.627,0.361,1.398,0.364,2.028,0.007l23.393-13.243c1.378-0.78,1.385-2.764,0.013-3.554l-44.642-25.707
							C189.772,276.719,189.001,276.716,188.372,277.074z"/>
						<polygon id="XMLID_5397_" fill="#5E413A" points="176.453,286.733 176.453,291.249 177.758,292.181 182.807,289.788 				"/>
						<g id="XMLID_5384_">
							<path id="XMLID_5396_" fill="#111414" d="M188.448,294.571c0.005-2.609-1.688-5.082-3.758-5.612
								c-0.851-0.22-2.274-0.574-5.302,1.862c-1.117,0.898,4.019,8.868,4.019,8.868l2.952-1.387c0.105-0.041,0.207-0.089,0.306-0.144
								l0.054-0.025l-0.001-0.002C187.755,297.533,188.445,296.235,188.448,294.571z"/>
							<g id="XMLID_5392_">
								<path id="XMLID_5393_" fill="#433836" d="M181.581,292.096c1.337,0.313,2.419,1.929,2.416,3.605
									c-0.003,1.677-1.09,2.783-2.427,2.469s-2.419-1.93-2.417-3.605C179.157,292.888,180.244,291.783,181.581,292.096z
									 M181.572,297.194c0.907,0.213,1.645-0.537,1.646-1.675c0.002-1.138-0.731-2.233-1.639-2.447
									c-0.908-0.213-1.645,0.537-1.647,1.676C179.93,295.885,180.664,296.981,181.572,297.194"/>
							</g>
							<g id="XMLID_5388_">
								<path id="XMLID_5389_" fill="#262B2B" d="M181.584,290.405c2.082,0.489,3.763,3.003,3.758,5.613s-1.695,4.328-3.775,3.84
									c-2.082-0.488-3.763-3-3.758-5.609S179.503,289.917,181.584,290.405z M181.57,298.17c1.336,0.314,2.424-0.792,2.427-2.469
									c0.004-1.677-1.079-3.292-2.416-3.605s-2.424,0.792-2.428,2.469C179.15,296.241,180.233,297.856,181.57,298.17"/>
							</g>
							<g id="XMLID_5386_">
								<path id="XMLID_5387_" fill="#675B5A" d="M182.841,296.742c0.008-0.011,0.017-0.021,0.025-0.033
									c0.065-0.088,0.123-0.187,0.171-0.294c0.006-0.014,0.012-0.026,0.018-0.04c0.104-0.247,0.163-0.535,0.164-0.855
									c0-0.236-0.03-0.471-0.088-0.694c-0.006-0.024-0.013-0.05-0.02-0.074c-0.037-0.129-0.083-0.256-0.136-0.377
									c-0.008-0.018-0.016-0.034-0.024-0.051c-0.014-0.031-0.029-0.062-0.044-0.091c-0.007-0.015-0.015-0.029-0.023-0.043
									c-0.008-0.018-0.017-0.033-0.026-0.049c-0.007-0.014-0.015-0.026-0.022-0.038c-0.045-0.077-0.093-0.152-0.144-0.223
									c-0.052-0.073-0.107-0.142-0.165-0.207c-0.031-0.035-0.063-0.068-0.095-0.101c0-0.001,0-0.001,0-0.001
									c-0.248-0.247-0.54-0.425-0.852-0.499c-0.908-0.213-1.645,0.537-1.647,1.676c0,0.403,0.091,0.802,0.25,1.156
									c0.004,0.01,0.009,0.02,0.013,0.029c0.016,0.034,0.032,0.068,0.049,0.101c0.008,0.016,0.016,0.032,0.024,0.047
									c0.008,0.014,0.015,0.027,0.022,0.041c0.016,0.028,0.032,0.057,0.049,0.084c0.04,0.067,0.083,0.132,0.127,0.193
									c0.053,0.073,0.109,0.143,0.169,0.208c0.021,0.024,0.044,0.048,0.067,0.072c0.251,0.256,0.549,0.439,0.868,0.515
									c0.198,0.047,0.389,0.047,0.565,0.008c0.013-0.003,0.025-0.006,0.038-0.01C182.436,297.125,182.665,296.967,182.841,296.742z"
									/>
							</g>
							<path id="XMLID_5385_" fill="#514846" d="M182.046,297.194c-0.318-0.075-0.616-0.259-0.868-0.515
								c-0.022-0.024-0.044-0.048-0.066-0.072c-0.06-0.065-0.116-0.135-0.169-0.208c-0.045-0.062-0.087-0.126-0.127-0.193
								c-0.017-0.027-0.033-0.056-0.049-0.084c-0.007-0.014-0.015-0.027-0.022-0.041c-0.009-0.015-0.017-0.031-0.025-0.047
								c-0.017-0.032-0.033-0.066-0.048-0.101c-0.004-0.01-0.009-0.02-0.014-0.029c-0.159-0.354-0.251-0.753-0.25-1.156
								c0.001-0.901,0.465-1.558,1.108-1.687c-0.878-0.164-1.581,0.574-1.583,1.687c0,0.403,0.091,0.802,0.25,1.156
								c0.004,0.01,0.009,0.02,0.013,0.029c0.016,0.034,0.032,0.068,0.049,0.101c0.008,0.016,0.016,0.032,0.024,0.047
								c0.008,0.014,0.015,0.027,0.022,0.041c0.016,0.028,0.032,0.057,0.049,0.084c0.04,0.067,0.083,0.132,0.127,0.193
								c0.053,0.073,0.109,0.143,0.169,0.208c0.021,0.024,0.044,0.048,0.067,0.072c0.251,0.256,0.549,0.439,0.868,0.515
								c0.189,0.044,0.37,0.046,0.54,0.012C182.09,297.202,182.068,297.2,182.046,297.194z"/>
						</g>
						<polygon id="XMLID_5383_" fill="#5E413A" points="200.073,304.807 205.122,302.415 197.228,298.619 197.228,303.251 				"/>
						<g id="XMLID_5370_">
							<path id="XMLID_5382_" fill="#111414" d="M210.763,307.087c0.005-2.61-1.688-5.082-3.758-5.613
								c-0.851-0.219-2.274-0.574-5.302,1.863c-1.116,0.898,4.019,8.867,4.019,8.867l2.952-1.386c0.105-0.041,0.207-0.089,0.306-0.145
								l0.054-0.024l-0.001-0.003C210.07,310.049,210.76,308.75,210.763,307.087z"/>
							<g id="XMLID_5378_">
								<path id="XMLID_5379_" fill="#433836" d="M203.896,304.612c1.336,0.314,2.419,1.93,2.416,3.606
									c-0.003,1.677-1.09,2.782-2.427,2.468c-1.336-0.314-2.419-1.93-2.416-3.605S202.559,304.298,203.896,304.612z
									 M203.887,309.709c0.907,0.214,1.645-0.536,1.647-1.674c0.002-1.139-0.732-2.234-1.64-2.447
									c-0.907-0.213-1.645,0.537-1.646,1.676C202.245,308.402,202.979,309.497,203.887,309.709"/>
							</g>
							<g id="XMLID_5374_">
								<path id="XMLID_5375_" fill="#262B2B" d="M203.899,302.921c2.081,0.489,3.763,3.002,3.758,5.612
									c-0.005,2.61-1.695,4.329-3.776,3.84c-2.082-0.488-3.763-2.999-3.758-5.609C200.128,304.155,201.818,302.432,203.899,302.921z
									 M203.885,310.686c1.337,0.314,2.424-0.791,2.427-2.468c0.003-1.677-1.08-3.292-2.416-3.606
									c-1.337-0.313-2.424,0.793-2.428,2.469S202.548,310.372,203.885,310.686"/>
							</g>
							<g id="XMLID_5372_">
								<path id="XMLID_5373_" fill="#675B5A" d="M205.156,309.258c0.008-0.012,0.017-0.022,0.025-0.034
									c0.065-0.088,0.123-0.187,0.171-0.293c0.006-0.014,0.012-0.027,0.018-0.04c0.105-0.247,0.164-0.535,0.164-0.855
									c0-0.236-0.031-0.471-0.088-0.694c-0.007-0.025-0.014-0.05-0.02-0.075c-0.038-0.128-0.083-0.255-0.137-0.377
									c-0.008-0.017-0.016-0.033-0.023-0.051c-0.015-0.03-0.029-0.061-0.045-0.09c-0.007-0.016-0.015-0.029-0.022-0.044
									c-0.009-0.017-0.018-0.032-0.026-0.049c-0.007-0.013-0.015-0.025-0.022-0.038c-0.045-0.077-0.092-0.151-0.143-0.223
									c-0.053-0.073-0.107-0.142-0.165-0.207c-0.031-0.034-0.063-0.068-0.096-0.1c0-0.001,0-0.001,0-0.001
									c-0.248-0.248-0.54-0.426-0.852-0.499c-0.907-0.213-1.645,0.537-1.646,1.676c0,0.402,0.091,0.801,0.25,1.156
									c0.005,0.01,0.009,0.02,0.013,0.029c0.016,0.033,0.032,0.067,0.049,0.101c0.008,0.016,0.016,0.031,0.025,0.047
									c0.007,0.013,0.014,0.026,0.022,0.041c0.016,0.028,0.032,0.057,0.049,0.084c0.04,0.066,0.083,0.132,0.127,0.192
									c0.053,0.074,0.109,0.143,0.169,0.209c0.021,0.023,0.044,0.048,0.067,0.07c0.251,0.257,0.549,0.44,0.868,0.516
									c0.199,0.048,0.389,0.048,0.565,0.009c0.012-0.004,0.025-0.007,0.038-0.01C204.75,309.641,204.979,309.484,205.156,309.258z"
									/>
							</g>
							<path id="XMLID_5371_" fill="#514846" d="M204.361,309.709c-0.319-0.075-0.616-0.259-0.868-0.516
								c-0.023-0.022-0.045-0.047-0.067-0.07c-0.059-0.066-0.116-0.135-0.169-0.209c-0.045-0.061-0.087-0.126-0.127-0.192
								c-0.017-0.027-0.033-0.056-0.049-0.084c-0.007-0.015-0.015-0.028-0.022-0.041c-0.008-0.016-0.017-0.031-0.025-0.047
								c-0.017-0.033-0.033-0.067-0.048-0.101c-0.005-0.01-0.009-0.02-0.013-0.029c-0.16-0.355-0.251-0.754-0.25-1.156
								c0.002-0.902,0.465-1.558,1.108-1.687c-0.877-0.164-1.582,0.574-1.583,1.687c0,0.402,0.091,0.801,0.25,1.156
								c0.005,0.01,0.009,0.02,0.013,0.029c0.016,0.033,0.032,0.067,0.049,0.101c0.008,0.016,0.016,0.031,0.025,0.047
								c0.007,0.013,0.014,0.026,0.022,0.041c0.016,0.028,0.032,0.057,0.049,0.084c0.04,0.066,0.083,0.132,0.127,0.192
								c0.053,0.074,0.109,0.143,0.169,0.209c0.021,0.023,0.044,0.048,0.067,0.07c0.251,0.257,0.549,0.44,0.868,0.516
								c0.189,0.045,0.371,0.047,0.54,0.012C204.405,309.718,204.383,309.715,204.361,309.709z"/>
						</g>
						<polygon id="XMLID_5369_" fill="#5E413A" points="166.509,280.94 166.509,285.456 167.814,286.388 172.863,283.996 				"/>
						<g id="XMLID_5356_">
							<path id="XMLID_5368_" fill="#111414" d="M178.505,288.778c0.004-2.609-1.688-5.081-3.758-5.612
								c-0.852-0.219-2.274-0.573-5.302,1.862c-1.117,0.898,4.019,8.869,4.019,8.869l2.952-1.387c0.104-0.042,0.207-0.089,0.306-0.144
								l0.054-0.025l-0.001-0.002C177.812,291.741,178.501,290.442,178.505,288.778z"/>
							<g id="XMLID_5364_">
								<path id="XMLID_5365_" fill="#433836" d="M171.637,286.303c1.337,0.314,2.419,1.93,2.416,3.606
									c-0.003,1.676-1.09,2.782-2.427,2.469c-1.337-0.314-2.419-1.93-2.417-3.606S170.301,285.99,171.637,286.303z M171.628,291.402
									c0.908,0.213,1.645-0.537,1.647-1.675c0.002-1.139-0.732-2.234-1.639-2.447c-0.908-0.213-1.645,0.537-1.647,1.675
									C169.986,290.092,170.721,291.188,171.628,291.402"/>
							</g>
							<g id="XMLID_5360_">
								<path id="XMLID_5361_" fill="#262B2B" d="M171.641,284.613c2.081,0.488,3.763,3.003,3.758,5.613
									c-0.005,2.609-1.695,4.328-3.776,3.839c-2.081-0.488-3.763-2.999-3.758-5.609C167.869,285.846,169.56,284.124,171.641,284.613
									z M171.626,292.378c1.336,0.313,2.424-0.793,2.427-2.469c0.003-1.677-1.079-3.292-2.416-3.606
									c-1.336-0.313-2.424,0.792-2.427,2.469S170.289,292.064,171.626,292.378"/>
							</g>
							<g id="XMLID_5358_">
								<path id="XMLID_5359_" fill="#675B5A" d="M172.897,290.949c0.009-0.011,0.017-0.021,0.025-0.032
									c0.065-0.089,0.123-0.187,0.171-0.294c0.006-0.014,0.012-0.027,0.018-0.041c0.104-0.246,0.163-0.535,0.164-0.854
									c0-0.236-0.031-0.471-0.089-0.695c-0.006-0.024-0.013-0.049-0.02-0.073c-0.037-0.13-0.083-0.256-0.137-0.377
									c-0.007-0.018-0.015-0.034-0.023-0.051c-0.014-0.031-0.029-0.062-0.044-0.092c-0.007-0.014-0.015-0.028-0.022-0.043
									c-0.008-0.017-0.018-0.032-0.026-0.048c-0.007-0.014-0.015-0.026-0.021-0.039c-0.045-0.077-0.093-0.151-0.144-0.223
									c-0.052-0.072-0.107-0.142-0.165-0.206c-0.031-0.035-0.063-0.068-0.095-0.102h0c-0.248-0.248-0.54-0.425-0.852-0.499
									c-0.908-0.213-1.645,0.537-1.647,1.675c-0.001,0.404,0.091,0.803,0.25,1.157c0.005,0.01,0.009,0.02,0.014,0.028
									c0.016,0.035,0.032,0.067,0.049,0.101c0.008,0.016,0.016,0.032,0.024,0.048c0.007,0.014,0.015,0.026,0.022,0.04
									c0.016,0.029,0.032,0.057,0.049,0.085c0.041,0.067,0.083,0.131,0.128,0.193c0.053,0.073,0.109,0.143,0.168,0.208
									c0.022,0.024,0.044,0.048,0.067,0.071c0.252,0.257,0.549,0.44,0.868,0.516c0.198,0.046,0.389,0.047,0.565,0.007
									c0.013-0.003,0.025-0.006,0.038-0.009C172.492,291.332,172.721,291.174,172.897,290.949z"/>
							</g>
							<path id="XMLID_5357_" fill="#514846" d="M172.103,291.402c-0.319-0.075-0.617-0.259-0.869-0.516
								c-0.022-0.023-0.045-0.047-0.066-0.071c-0.06-0.065-0.116-0.135-0.169-0.208c-0.044-0.063-0.087-0.126-0.127-0.193
								c-0.017-0.028-0.034-0.056-0.049-0.085c-0.008-0.014-0.015-0.026-0.022-0.04c-0.008-0.016-0.017-0.032-0.025-0.048
								c-0.016-0.033-0.033-0.065-0.048-0.101c-0.005-0.009-0.009-0.019-0.013-0.028c-0.159-0.354-0.251-0.753-0.251-1.157
								c0.002-0.901,0.466-1.557,1.109-1.686c-0.878-0.164-1.581,0.574-1.583,1.686c-0.001,0.404,0.091,0.803,0.25,1.157
								c0.005,0.01,0.009,0.02,0.014,0.028c0.016,0.035,0.032,0.067,0.049,0.101c0.008,0.016,0.016,0.032,0.024,0.048
								c0.007,0.014,0.015,0.026,0.022,0.04c0.016,0.029,0.032,0.057,0.049,0.085c0.041,0.067,0.083,0.131,0.128,0.193
								c0.053,0.073,0.109,0.143,0.168,0.208c0.022,0.024,0.044,0.048,0.067,0.071c0.252,0.257,0.549,0.44,0.868,0.516
								c0.189,0.044,0.371,0.045,0.54,0.012C172.146,291.409,172.125,291.406,172.103,291.402z"/>
						</g>
						<g id="XMLID_5354_">
							<path id="XMLID_5355_" fill="#D10401" d="M208.62,291.822l-5.363-15.265l-36.991-21.591v30.53l1.316,0.757l0.24-5.242
								l19.621,11.795c0,0,0.006,4.811,0,4.932l12.584,7.076c0.782-1.747,2.376-2.701,4.219-2.269
								c2.609,0.612,4.718,3.765,4.712,7.038c0,0.122-0.009,0.239-0.016,0.358l4.902,2.919V301.69L208.62,291.822z"/>
						</g>
						<g id="XMLID_5352_">
							<path id="XMLID_5353_" fill="#DB6E6E" d="M166.267,279.415v6.082l1.548,0.899c0.885-1.645,2.317-2.667,4.102-2.455
								c2.5,0.299,5.087,3.827,5.087,6.714c0,0.356-0.02,0.707-0.059,1.05l0.807,0.47c0.781-1.752,2.377-2.709,4.222-2.276
								c2.609,0.613,4.718,3.766,4.712,7.038c0,0.125-0.009,0.244-0.016,0.367l13.358,7.511c0.782-1.747,2.376-2.701,4.219-2.269
								c2.609,0.612,4.718,3.765,4.712,7.038c0,0.122-0.009,0.239-0.016,0.358l4.902,2.919v-5.959L166.267,279.415z"/>
						</g>
						<g id="XMLID_5350_">
							<polygon id="XMLID_5351_" fill="#FF0F0A" points="166.267,254.966 203.257,276.557 224.48,264.182 187.409,242.847 					"/>
						</g>
						<g id="XMLID_5348_">
							<polygon id="XMLID_5349_" fill="#EA8484" points="173.05,256.016 183.707,262.21 199.635,252.868 199.639,250.823 
								173.05,254.122 					"/>
						</g>
						<g id="XMLID_5346_">
							<polygon id="XMLID_5347_" fill="#FF9191" points="183.531,260.178 183.703,262.158 199.635,252.868 199.635,250.771 					"/>
						</g>
						<g id="XMLID_5344_">
							<polygon id="XMLID_5345_" fill="#FFBBBB" points="173.05,254.122 183.503,260.187 199.635,250.78 189.12,244.91 					"/>
						</g>
						<g id="XMLID_5342_">
							<polygon id="XMLID_5343_" fill="#ED0000" points="213.846,301.69 235.114,289.36 235.114,301.035 213.846,312.861 					"/>
						</g>
						<g id="XMLID_5340_">
							<polygon id="XMLID_5341_" fill="#FFBBBB" points="213.846,306.902 213.846,312.861 235.114,301.035 235.114,294.892 					"/>
						</g>
						<g id="XMLID_5338_">
							<polygon id="XMLID_5339_" fill="#AFAFAF" points="213.846,310.202 213.846,312.861 236.214,300.53 236.214,297.688 					"/>
						</g>
						<g id="XMLID_5334_">
							<polygon id="XMLID_5335_" fill="#939393" points="213.846,310.202 213.846,312.861 208.07,309.621 208.07,307.023 					"/>
						</g>
						<g id="XMLID_5329_" opacity="0.2">
							<g id="XMLID_5330_">
								<path id="XMLID_5331_" d="M193.22,282.288l14.851,8.753v11.17c-0.974-0.767-2.62-1.754-4.636-1.754
									c-0.305,0-0.612,0.023-0.912,0.068c-1.259,0.19-2.314,0.898-2.816,1.289l-6.487-3.629v-1.275l0.009-4.401L193.22,282.288
									 M192.669,281.325l0.009,11.184l-0.009,4.4v1.599l7.098,3.971c0,0,1.256-1.17,2.837-1.409c0.283-0.043,0.56-0.063,0.83-0.063
									c3.015,0,5.186,2.448,5.186,2.448v-12.729L192.669,281.325L192.669,281.325z"/>
							</g>
						</g>
						<g id="XMLID_5327_">
							<polygon id="XMLID_5328_" fill="#FF0F0A" points="208.62,291.822 229.706,279.583 235.114,289.36 213.846,301.69 					"/>
						</g>
						<g id="XMLID_5325_">
							<polygon id="XMLID_5326_" fill="#D10401" points="203.257,276.557 224.48,264.182 229.706,279.583 208.62,291.822 					"/>
						</g>
						<g id="XMLID_5323_">
							<polygon id="XMLID_5324_" fill="#7BF4F4" points="204.794,277.343 223.901,266.121 228.239,278.907 209.247,290.014 					"/>
						</g>
						<g id="XMLID_5321_" opacity="0.28">
							<polygon id="XMLID_5322_" points="223.496,267.468 227.52,279.328 228.239,278.907 223.901,266.121 204.794,277.343 
								205.117,278.262 					"/>
						</g>
						<g id="XMLID_5319_">
							<polygon id="XMLID_5320_" fill="#FFFFFF" points="223.795,306.76 223.795,309.108 230.992,305.064 230.992,302.838 					"/>
						</g>
						<g id="XMLID_5317_">
							<polygon id="XMLID_5318_" fill="#AA0000" points="203.257,276.557 192.678,270.382 192.669,282.424 208.62,291.822 					"/>
						</g>
						<g id="XMLID_5315_">
							<polygon id="XMLID_5316_" fill="#52BEBF" points="202.254,277.031 193.379,271.905 193.471,281.796 206.626,289.474 					"/>
						</g>
						<g id="XMLID_5313_" opacity="0.28">
							<polygon id="XMLID_5314_" points="201.544,277.667 205.452,288.789 206.626,289.474 202.254,277.031 193.379,271.905 
								193.389,272.956 					"/>
						</g>
						<g id="XMLID_5311_">
							<rect id="XMLID_5312_" x="201.462" y="276.46" fill="#AA0000" width="1.1" height="11.038"/>
						</g>
						<g id="XMLID_5304_" opacity="0.31">
							<g id="XMLID_5309_">
								<path id="XMLID_5310_" fill="#FFFFFF" d="M193.437,278.134l1.896-1.896c0.322-0.322,0.322-0.845,0-1.166
									c-0.322-0.323-0.845-0.323-1.167,0l-0.75,0.75L193.437,278.134z"/>
							</g>
							<g id="XMLID_5307_">
								<path id="XMLID_5308_" fill="#FFFFFF" d="M198.104,276.93c-0.323-0.322-0.845-0.322-1.167,0l-3.479,3.479l0.013,1.387
									l0.589,0.344l4.044-4.043C198.426,277.775,198.426,277.252,198.104,276.93z"/>
							</g>
							<g id="XMLID_5305_">
								<path id="XMLID_5306_" fill="#FFFFFF" d="M199.119,280.519c-0.322-0.322-0.844-0.322-1.167,0l-2.458,2.458l1.474,0.86
									l2.151-2.152C199.441,281.363,199.441,280.841,199.119,280.519z"/>
							</g>
						</g>
						<g id="XMLID_5293_" opacity="0.44">
							<g id="XMLID_5302_">
								<path id="XMLID_5303_" fill="#FFFFFF" d="M217.002,282.85c-0.545-0.27-1.205-0.044-1.473,0.502l-2.062,4.193l3.441-2.012
									l0.596-1.211C217.772,283.777,217.547,283.118,217.002,282.85z"/>
							</g>
							<g id="XMLID_5300_">
								<path id="XMLID_5301_" fill="#FFFFFF" d="M222.665,274.973c-0.269,0.546-0.044,1.205,0.501,1.473
									c0.156,0.077,0.321,0.113,0.484,0.113c0.406,0,0.797-0.225,0.988-0.615l1.536-3.123l-1.001-2.951L222.665,274.973z"/>
							</g>
							<g id="XMLID_5298_">
								<path id="XMLID_5299_" fill="#FFFFFF" d="M214.097,280.115c-0.545-0.269-1.205-0.043-1.473,0.502l-3.896,7.925l0.518,1.473
									l1.698-0.993l3.654-7.434C214.867,281.042,214.642,280.383,214.097,280.115z"/>
							</g>
							<g id="XMLID_5296_">
								<path id="XMLID_5297_" fill="#FFFFFF" d="M207.795,285.883l2.314-4.709c0.268-0.545,0.043-1.204-0.502-1.472
									c-0.544-0.27-1.205-0.044-1.473,0.502l-1.361,2.77L207.795,285.883z"/>
							</g>
							<g id="XMLID_5294_">
								<path id="XMLID_5295_" fill="#FFFFFF" d="M222.428,266.987l-3.927,7.986c-0.268,0.546-0.043,1.205,0.502,1.473
									c0.156,0.077,0.321,0.113,0.484,0.113c0.406,0,0.796-0.225,0.988-0.615l3.998-8.132l-0.573-1.691L222.428,266.987z"/>
							</g>
						</g>
						<g id="XMLID_5291_">
							<path id="XMLID_5292_" fill="#63869B" d="M223.331,282.741l-7.663,2.843c-0.199,0.073-0.419-0.028-0.493-0.227
								c-0.07-0.188,0.018-0.396,0.196-0.479l7.394-3.483c0.365-0.172,0.8-0.016,0.972,0.35c0.172,0.365,0.016,0.801-0.35,0.973
								C223.37,282.725,223.35,282.733,223.331,282.741z"/>
						</g>
						<g id="XMLID_5282_">
							<g id="XMLID_5287_" opacity="0.28">
								<path id="XMLID_5288_" d="M194.451,288.078c-0.251-0.147-0.405-0.418-0.405-0.71c0-0.291,0.154-0.562,0.406-0.71
									c0.251-0.148,0.562-0.152,0.818-0.012l1.716,0.949c0.272,0.149,0.441,0.436,0.441,0.746c0,0.308-0.165,0.591-0.431,0.742
									c-0.266,0.151-0.594,0.15-0.858-0.007L194.451,288.078z"/>
							</g>
							<g id="XMLID_5283_">
								<path id="XMLID_5284_" fill="#F4F4F4" d="M194.289,287.406c-0.25-0.148-0.405-0.418-0.405-0.71s0.155-0.562,0.406-0.71
									c0.251-0.149,0.563-0.153,0.818-0.012l1.716,0.948c0.272,0.15,0.44,0.437,0.44,0.747c0,0.308-0.164,0.591-0.431,0.742
									s-0.594,0.149-0.858-0.007L194.289,287.406z"/>
							</g>
						</g>
						<polygon id="XMLID_5281_" fill="#828282" points="213.846,310.202 213.846,308.958 209.308,306.359 208.07,307.023 				"/>
						<polygon id="XMLID_5280_" fill="#F4F4F4" points="213.846,310.202 236.214,297.688 235.114,297.166 213.846,308.958 				"/>
						<polygon id="XMLID_5279_" opacity="0.1" points="205.321,282.431 226.583,270.382 224.474,264.182 203.257,276.557 				"/>
						<polygon id="XMLID_5278_" fill="#AFAFAF" points="203.257,276.557 204.564,280.277 208.165,279.583 				"/>
						<polygon id="XMLID_5277_" fill="#F4F4F4" points="208.165,279.583 229.382,267.207 224.474,264.182 203.257,276.557 				"/>
						<g id="XMLID_5254_">
							<g id="XMLID_5275_">
								<polygon id="XMLID_5276_" fill="#425E5E" points="167.81,257.647 167.81,275.751 189.003,288.215 189.003,269.885 						"/>
							</g>
							<g id="XMLID_5273_" opacity="0.28">
								<path id="XMLID_5274_" d="M166.267,257.068v28.429l1.599,0.929c0.591-1.325,1.932-2.485,3.372-2.485
									c2.767,0,4.708,2.448,5.604,5.399c0.249,0.819,0.104,2.365,0.104,2.365l12.058-21.819L166.267,257.068z"/>
							</g>
							<g id="XMLID_5269_">
								<path id="XMLID_5270_" fill="#F7EACF" d="M168.91,259.552l18.993,10.968v15.772l-18.993-11.17V259.552 M167.81,257.647v18.104
									l21.193,12.464v-18.33L167.81,257.647L167.81,257.647z"/>
							</g>
							<g id="XMLID_5264_">
								<g id="XMLID_5265_">
									<path id="XMLID_5266_" d="M168.359,258.599l20.094,11.604v17.052l-20.094-11.816V258.599 M167.81,257.647v18.104
										l21.193,12.464v-18.33L167.81,257.647L167.81,257.647z"/>
								</g>
							</g>
							<g id="XMLID_5441_">
								<polygon id="XMLID_5442_" fill="#F7EACF" points="178.442,276.191 188.893,288.248 188.893,286.936 179.259,275.702 						"/>
							</g>
							<g id="XMLID_5439_">
								<polygon id="XMLID_5440_" points="188.893,288.248 187.142,287.218 176.518,275.068 178.442,276.191 						"/>
							</g>
							<g id="XMLID_5437_">
								<polyline id="XMLID_5438_" points="156.834,263.576 167.699,275.784 167.699,274.042 159.931,265.383 156.834,263.576 						
									"/>
							</g>
							<g id="XMLID_5435_">
								<polygon id="XMLID_5436_" fill="#F7EACF" points="167.699,275.784 156.834,263.576 158.91,264.783 169.541,276.842 						"/>
							</g>
							<g id="XMLID_5255_">
								<g id="XMLID_5433_">
									<polygon id="XMLID_5434_" fill="#F7EACF" points="167.347,257.36 156.83,263.541 178.438,276.156 188.897,269.892 							"/>
								</g>
								<g id="XMLID_5431_">
									<polygon id="XMLID_5432_" fill="#00D3D8" points="159.927,265.348 170.181,258.991 173.122,260.705 163.058,267.176 							
										"/>
								</g>
								<g id="XMLID_5429_">
									<polygon id="XMLID_5430_" fill="#00D3D8" points="166.112,268.959 176.354,262.617 179.254,264.28 169.186,270.754 							
										"/>
								</g>
								<g id="XMLID_5427_">
									<polygon id="XMLID_5428_" fill="#00D3D8" points="172.301,272.546 182.528,266.213 185.63,268.024 175.331,274.342 							
										"/>
								</g>
								<g id="XMLID_5424_">
									<path fill="#F7EACF" d="M156.83,263.541v2.731c0,0.549,0.292,1.057,0.767,1.334l0.008,0.004
										c0.477,0.277,1.065,0.279,1.544,0.005c0.478-0.274,0.774-0.783,0.775-1.334l0.003-0.939L156.83,263.541z"/>
								</g>
								<g id="XMLID_5421_">
									<path fill="#00D3D8" d="M159.927,265.348l-0.006,2.729c-0.001,0.55,0.29,1.059,0.764,1.335l0.037,0.021
										c0.473,0.277,1.057,0.282,1.535,0.014c0.478-0.27,0.777-0.771,0.786-1.32l0.016-0.951L159.927,265.348z"/>
								</g>
								<g id="XMLID_5418_">
									<path fill="#F7EACF" d="M163.058,267.176l-0.009,2.742c-0.002,0.539,0.284,1.038,0.75,1.309
										c0.478,0.278,1.07,0.279,1.549,0.002c0.479-0.277,0.773-0.79,0.771-1.345l-0.005-0.925L163.058,267.176z"/>
								</g>
								<g id="XMLID_5415_">
									<path fill="#00D3D8" d="M166.112,268.959l-0.016,2.744c-0.004,0.549,0.287,1.058,0.761,1.334l0.006,0.004
										c0.477,0.276,1.065,0.278,1.544,0.004c0.478-0.274,0.774-0.783,0.775-1.335l0.002-0.956L166.112,268.959z"/>
								</g>
								<g id="XMLID_5412_">
									<path fill="#F7EACF" d="M169.186,270.754l0.006,2.729c0,0.55,0.294,1.057,0.77,1.331l0.016,0.01
										c0.477,0.275,1.064,0.277,1.541,0.003c0.478-0.274,0.772-0.782,0.775-1.332l0.003-0.949L169.186,270.754z"/>
								</g>
								<g id="XMLID_5409_">
									<path fill="#00D3D8" d="M172.301,272.546l-0.043,2.717c-0.009,0.549,0.279,1.06,0.753,1.334
										c0.478,0.278,1.067,0.28,1.545,0.005c0.479-0.275,0.774-0.785,0.774-1.339v-0.922L172.301,272.546z"/>
								</g>
								<g id="XMLID_5406_">
									<path fill="#F7EACF" d="M175.331,274.342l0.015,2.775c0.003,0.547,0.295,1.051,0.768,1.326l0.004,0.003
										c0.478,0.277,1.067,0.279,1.545,0.003c0.479-0.275,0.774-0.785,0.774-1.337v-0.957L175.331,274.342z"/>
								</g>
								<g id="XMLID_5257_" opacity="0.58">
									<g id="XMLID_5404_">
										<path id="XMLID_5405_" d="M159.927,265.341l-3.097-1.801v2.731c0,0.549,0.292,1.057,0.767,1.334l0.008,0.004
											c0.477,0.277,1.065,0.279,1.544,0.005c0.478-0.274,0.774-0.783,0.775-1.334L159.927,265.341z"/>
									</g>
									<g id="XMLID_5402_">
										<path id="XMLID_5403_" d="M159.92,268.078c-0.001,0.55,0.29,1.059,0.764,1.335l0.037,0.021
											c0.473,0.277,1.057,0.282,1.535,0.014c0.478-0.27,0.777-0.771,0.786-1.32l0.016-0.951l-3.131-1.828L159.92,268.078z"/>
									</g>
									<g id="XMLID_5400_">
										<path id="XMLID_5401_" d="M163.058,267.176l-0.009,2.742c-0.002,0.539,0.284,1.038,0.75,1.309
											c0.478,0.278,1.07,0.279,1.549,0.002c0.453-0.263,0.732-0.737,0.759-1.256l-0.01,1.73c-0.004,0.549,0.287,1.058,0.761,1.334
											l0.006,0.004c0.477,0.276,1.065,0.278,1.544,0.004c0.478-0.274,0.774-0.783,0.775-1.335l0.002-0.956l-3.073-1.795
											L163.058,267.176z"/>
									</g>
									<g id="XMLID_5263_">
										<path id="XMLID_5399_" d="M172.301,272.546l-0.007,0.412l0.002-0.412l-3.111-1.792l0.006,2.729
											c0,0.55,0.294,1.057,0.77,1.331l0.016,0.01c0.477,0.275,1.064,0.277,1.541,0.003c0.461-0.266,0.747-0.75,0.767-1.278
											l-0.027,1.714c-0.009,0.549,0.279,1.059,0.753,1.334c0.477,0.278,1.067,0.28,1.545,0.005
											c0.479-0.276,0.774-0.785,0.774-1.339v-0.921v-0.001L172.301,272.546z"/>
									</g>
									<g id="XMLID_5258_">
										<path id="XMLID_5262_" d="M175.331,274.342l0.015,2.775c0.003,0.547,0.295,1.051,0.767,1.326l0.005,0.003
											c0.478,0.277,1.067,0.279,1.545,0.003c0.479-0.275,0.774-0.785,0.774-1.337v-0.957L175.331,274.342z"/>
									</g>
								</g>
							</g>
						</g>
						<polygon id="XMLID_5253_" fill="#F4F4F4" points="218.609,300.919 213.846,303.684 213.846,301.69 218.609,298.925 				"/>
						<polygon id="XMLID_5250_" fill="#262B2B" points="229.301,297.166 219.486,302.872 219.486,299.117 229.301,293.411 				"/>
						<polygon id="XMLID_5246_" fill="#F4C444" points="218.609,301.906 213.846,304.669 213.846,303.673 218.609,300.909 				"/>
						<polygon id="XMLID_5230_" fill="#F4C444" points="235.114,292.351 230.352,295.116 230.352,294.119 235.114,291.355 				"/>
						<polygon id="XMLID_5167_" fill="#F4F4F4" points="235.114,291.354 230.352,294.118 230.352,292.125 235.114,289.36 				"/>
					</g>
					<g id="location1-g">
						<g id="location1">
							<g>
								<path fill="#FFFFFF" d="M198.741,157.63c-12.94,7.47-23.428,25.638-23.386,40.508c0.042,14.862,10.599,20.885,23.539,13.414
									c12.936-7.469,23.425-25.641,23.383-40.505C222.233,156.18,211.675,150.161,198.741,157.63z"/>
								<path fill="#FF1022" d="M198.73,154.072c-14.645,8.457-26.519,29.025-26.472,45.854c0.047,16.824,12.001,23.635,26.646,15.181
									c14.64-8.454,26.516-29.023,26.469-45.846C225.324,152.431,213.371,145.62,198.73,154.072z M198.894,211.552
									c-12.94,7.471-23.498,1.448-23.539-13.414c-0.042-14.87,10.446-33.038,23.386-40.508c12.934-7.469,23.492-1.451,23.536,13.417
									C222.318,185.911,211.829,204.083,198.894,211.552z"/>
							<path fill="#FF1022" d="M163.14,202.754c0.021-0.461,0.048-0.92,0.083-1.385c0.021-0.233,0.037-0.477,0.061-0.711
								c0.042-0.455,0.089-0.914,0.142-1.375c0.023-0.225,0.048-0.438,0.074-0.662c0.041-0.319,0.092-0.646,0.136-0.965
								c0.066-0.479,0.139-0.965,0.22-1.447c0.057-0.321,0.112-0.647,0.172-0.977c0.086-0.469,0.178-0.938,0.271-1.404
								c0.075-0.371,0.154-0.744,0.237-1.117c0.067-0.313,0.143-0.627,0.215-0.94c0.1-0.408,0.201-0.816,0.309-1.229
								c0.079-0.309,0.157-0.614,0.24-0.926c0.136-0.492,0.275-0.988,0.423-1.483c0.054-0.185,0.104-0.365,0.161-0.554
								c0.205-0.68,0.421-1.354,0.646-2.033c0.334-0.997,0.693-1.987,1.07-2.979c0.095-0.248,0.188-0.498,0.287-0.746
								c0.33-0.841,0.669-1.68,1.024-2.514c0.058-0.127,0.104-0.258,0.162-0.388c0.397-0.922,0.819-1.84,1.26-2.754
								c0.115-0.237,0.23-0.479,0.352-0.715c0.354-0.727,0.719-1.438,1.092-2.156c0.116-0.221,0.229-0.438,0.352-0.66
								c0.479-0.896,0.976-1.786,1.48-2.665c0.101-0.164,0.197-0.328,0.298-0.492c0.448-0.769,0.911-1.523,1.391-2.273
								c0.141-0.221,0.275-0.438,0.419-0.66c0.588-0.914,1.188-1.815,1.813-2.709c0.098-0.133,0.19-0.264,0.285-0.396
								c0.646-0.915,1.313-1.816,1.995-2.703c0.104-0.139,0.207-0.275,0.313-0.412c0.211-0.271,0.429-0.539,0.645-0.809
								c0.273-0.343,0.546-0.687,0.821-1.021c0.227-0.271,0.453-0.537,0.681-0.803c0.27-0.314,0.532-0.633,0.802-0.939
								c0.558-0.631,1.114-1.252,1.684-1.856c0.034-0.033,0.063-0.07,0.1-0.104c0.604-0.645,1.211-1.264,1.828-1.875
								c0.391-0.387,0.783-0.77,1.182-1.145c0.111-0.104,0.226-0.215,0.334-0.32c0.521-0.486,1.053-0.961,1.581-1.43
								c0.146-0.127,0.292-0.25,0.438-0.375c0.394-0.336,0.782-0.67,1.182-0.992c0.194-0.162,0.396-0.318,0.593-0.479
								c0.354-0.281,0.705-0.562,1.063-0.83c0.214-0.162,0.425-0.318,0.64-0.479c0.354-0.263,0.705-0.52,1.063-0.771
								c0.211-0.146,0.422-0.302,0.634-0.441c0.386-0.266,0.769-0.521,1.151-0.771c0.188-0.119,0.364-0.242,0.553-0.354
								c0.566-0.361,1.145-0.713,1.723-1.043c0.553-0.32,1.104-0.619,1.648-0.906c0.146-0.074,0.285-0.147,0.432-0.223
								c0.488-0.253,0.979-0.49,1.463-0.719c0.063-0.023,0.12-0.062,0.182-0.084c0.505-0.23,1.005-0.441,1.505-0.646
								c0.526-0.215,1.058-0.412,1.574-0.604c0.137-0.05,0.271-0.104,0.396-0.146c0.647-0.224,1.294-0.422,1.932-0.599
								c0.376-0.104,0.751-0.188,1.121-0.276c0.173-0.039,0.351-0.09,0.521-0.127c0.547-0.117,1.087-0.22,1.621-0.301
								c0.021-0.003,0.043-0.008,0.063-0.01c0.486-0.07,0.97-0.134,1.444-0.179c0.161-0.014,0.316-0.021,0.479-0.03
								c0.35-0.023,0.688-0.05,1.029-0.06c0.152-0.004,0.306-0.006,0.454-0.008c0.354-0.004,0.709,0.002,1.06,0.018
								c0.121,0.004,0.243,0.009,0.363,0.016c0.45,0.021,0.896,0.063,1.34,0.116c0.092,0.016,0.187,0.026,0.275,0.041
								c0.354,0.052,0.714,0.104,1.063,0.175c0.117,0.021,0.236,0.048,0.354,0.068c0.396,0.089,0.798,0.188,1.188,0.293
								c0.022,0.009,0.054,0.016,0.076,0.021c0.409,0.118,0.813,0.258,1.21,0.4c0.104,0.039,0.212,0.082,0.317,0.123
								c0.32,0.125,0.639,0.261,0.945,0.401c0.08,0.037,0.162,0.069,0.244,0.108c0.401,0.189,0.8,0.396,1.188,0.625l-0.007-0.002
								c0.002,0,0.005,0,0.007,0.002l-6.779-4.05c-0.063-0.039-0.132-0.075-0.192-0.109c-0.324-0.186-0.651-0.354-0.987-0.514
								c-0.08-0.041-0.164-0.075-0.245-0.111c-0.188-0.089-0.375-0.177-0.566-0.257c-0.125-0.054-0.254-0.102-0.381-0.146
								c-0.104-0.043-0.213-0.084-0.314-0.123c-0.396-0.145-0.789-0.278-1.191-0.396c-0.007,0-0.014-0.002-0.019-0.002
								c-0.025-0.009-0.058-0.018-0.077-0.021c-0.393-0.104-0.784-0.205-1.188-0.289c-0.116-0.021-0.236-0.051-0.356-0.069
								c-0.122-0.023-0.244-0.058-0.369-0.074c-0.229-0.039-0.459-0.066-0.688-0.104c-0.092-0.014-0.185-0.025-0.273-0.041
								c-0.396-0.049-0.795-0.086-1.197-0.109c-0.046-0.005-0.098-0.005-0.143-0.005c-0.122-0.011-0.244-0.013-0.362-0.017
								c-0.354-0.017-0.701-0.021-1.063-0.019c-0.146,0.002-0.302,0.005-0.452,0.011c-0.119,0.004-0.233,0.002-0.354,0.008
								c-0.226,0.011-0.45,0.029-0.675,0.047c-0.159,0.018-0.316,0.021-0.479,0.035c-0.479,0.045-0.96,0.104-1.446,0.177
								c-0.021,0.006-0.042,0.008-0.063,0.011c-0.003,0-0.007,0-0.008,0c-0.531,0.084-1.068,0.185-1.611,0.302
								c-0.177,0.036-0.354,0.086-0.527,0.127c-0.337,0.08-0.671,0.153-1.012,0.248c-0.033,0.01-0.066,0.02-0.104,0.027
								c-0.64,0.178-1.279,0.371-1.935,0.598c-0.132,0.045-0.266,0.102-0.396,0.146c-0.522,0.188-1.052,0.389-1.581,0.604
								c-0.07,0.023-0.143,0.053-0.211,0.079c-0.431,0.181-0.856,0.366-1.291,0.563c-0.063,0.029-0.12,0.063-0.184,0.086
								c-0.48,0.229-0.974,0.466-1.464,0.716c-0.144,0.073-0.283,0.147-0.431,0.227c-0.55,0.289-1.098,0.586-1.649,0.905
								c-0.576,0.334-1.146,0.685-1.72,1.043c-0.188,0.112-0.366,0.237-0.551,0.354c-0.388,0.254-0.771,0.507-1.156,0.771
								c-0.211,0.146-0.42,0.296-0.633,0.439c-0.354,0.25-0.707,0.507-1.063,0.771c-0.216,0.156-0.429,0.314-0.64,0.479
								c-0.354,0.271-0.71,0.548-1.063,0.83c-0.197,0.156-0.396,0.313-0.596,0.479c-0.396,0.321-0.791,0.655-1.186,0.993
								c-0.145,0.125-0.29,0.244-0.433,0.371c-0.532,0.468-1.063,0.942-1.582,1.436c-0.109,0.104-0.216,0.207-0.325,0.311
								c-0.348,0.328-0.695,0.658-1.041,0.998c-0.051,0.05-0.1,0.104-0.148,0.152c-0.615,0.611-1.229,1.232-1.827,1.875
								c-0.03,0.034-0.063,0.068-0.1,0.104c-0.566,0.604-1.126,1.229-1.678,1.856c-0.057,0.062-0.108,0.116-0.162,0.178
								c-0.218,0.25-0.431,0.515-0.646,0.77c-0.226,0.269-0.448,0.523-0.673,0.798c-0.274,0.336-0.552,0.684-0.825,1.021
								c-0.214,0.271-0.432,0.535-0.644,0.811c-0.039,0.052-0.081,0.101-0.121,0.146c-0.063,0.086-0.126,0.177-0.191,0.266
								c-0.682,0.886-1.344,1.784-1.987,2.698c-0.064,0.097-0.14,0.184-0.202,0.271c-0.027,0.043-0.061,0.09-0.085,0.131
								c-0.622,0.892-1.229,1.793-1.813,2.705c-0.059,0.092-0.117,0.174-0.176,0.264c-0.082,0.132-0.159,0.271-0.242,0.398
								c-0.477,0.75-0.938,1.51-1.39,2.271c-0.071,0.121-0.146,0.236-0.219,0.359c-0.026,0.043-0.055,0.092-0.078,0.137
								c-0.512,0.879-1.005,1.771-1.483,2.664c-0.039,0.07-0.081,0.146-0.119,0.215c-0.078,0.146-0.146,0.303-0.227,0.445
								c-0.376,0.717-0.739,1.438-1.096,2.156c-0.072,0.146-0.152,0.297-0.229,0.441c-0.044,0.095-0.081,0.186-0.125,0.271
								c-0.438,0.912-0.854,1.83-1.261,2.756c-0.014,0.024-0.026,0.06-0.04,0.084c-0.044,0.104-0.081,0.203-0.123,0.301
								c-0.354,0.834-0.697,1.671-1.022,2.514c-0.057,0.136-0.111,0.271-0.166,0.4c-0.045,0.113-0.08,0.229-0.122,0.345
								c-0.376,0.991-0.735,1.983-1.07,2.981c-0.005,0.021-0.014,0.039-0.021,0.063c-0.222,0.654-0.427,1.313-0.626,1.978
								c-0.059,0.182-0.104,0.362-0.158,0.547c-0.108,0.377-0.229,0.754-0.328,1.129c-0.032,0.119-0.063,0.242-0.097,0.359
								c-0.084,0.311-0.164,0.616-0.239,0.926c-0.105,0.41-0.209,0.819-0.311,1.229c-0.074,0.313-0.146,0.627-0.217,0.938
								c-0.048,0.219-0.104,0.438-0.147,0.656c-0.03,0.152-0.059,0.309-0.091,0.465c-0.097,0.469-0.187,0.938-0.271,1.405
								c-0.063,0.323-0.119,0.646-0.173,0.972c-0.082,0.481-0.15,0.967-0.223,1.444c-0.029,0.229-0.07,0.455-0.104,0.683
								c-0.014,0.097-0.021,0.188-0.033,0.287c-0.027,0.223-0.051,0.44-0.074,0.66c-0.053,0.459-0.1,0.92-0.14,1.375
								c-0.021,0.239-0.041,0.479-0.06,0.715c-0.035,0.463-0.063,0.924-0.084,1.383c-0.015,0.209-0.022,0.42-0.031,0.627
								c-0.022,0.658-0.039,1.313-0.035,1.973c0.025,9.644,3.042,16.688,7.797,21.063c7.209,6.633,27.188,26.37,28.236,27.409l6.778,4.048
								c-1.054-1.037-21.025-20.774-28.234-27.406c-4.756-4.375-7.771-11.422-7.802-21.063c0-0.65,0.018-1.313,0.038-1.971
								C163.12,203.172,163.133,202.961,163.14,202.754z"/>
								<path fill="#FF4A1E" d="M198.702,143.41c-19.794,11.426-35.788,39.129-35.724,61.873c0.028,9.642,3.043,16.69,7.798,21.065
									c7.209,6.63,27.186,26.368,28.238,27.406c1.041-2.247,20.836-44.947,27.984-59.865c4.716-9.845,7.681-20.345,7.653-29.987
									C234.587,141.16,218.488,131.986,198.702,143.41z M198.904,215.105c-14.646,8.455-26.599,1.644-26.646-15.18
									c-0.047-16.828,11.828-37.396,26.472-45.854c14.641-8.452,26.594-1.641,26.643,15.188
									C225.42,186.083,213.543,206.652,198.904,215.105z"/>
							</g>
							<g>
								<g>
									<g enable-background="new    ">
										<g>
											<polygon fill="#CDC1AC" points="194.248,207.212 193.301,199.179 204.195,195.214 203.142,203.974 								"/>
										</g>
										<g>
											<path fill="#CDC1AC" d="M203.142,203.974l1.053-8.76l1.468-0.534l-1.187,9.871c-0.061,0.479-0.361,0.919-0.724,1.051
												l-10.132,3.688c-0.363,0.132-0.665-0.089-0.714-0.528l-1.068-9.05l1.463-0.532l0.946,8.033L203.142,203.974z"/>
										</g>
									</g>
									<g enable-background="new    ">
										<g>
											<path fill="#815D2F" d="M207.954,178.691c0.148,0.17,0.224,0.442,0.189,0.745l-1.367,13.917
												c-0.055,0.542-0.401,1.067-0.815,1.218l-0.298,0.108l-1.468,0.534l-10.894,3.965l-1.463,0.532l-0.155,0.057
												c-0.415,0.151-0.755-0.123-0.804-0.628l-1.198-12.984c-0.024-0.282,0.049-0.607,0.2-0.886
												c0.063-0.113,0.137-0.214,0.218-0.301c0.122-0.131,0.26-0.229,0.399-0.28l1.052-0.383l14.597-5.313l1.195-0.435
												c0.09-0.033,0.18-0.045,0.265-0.039C207.739,178.531,207.86,178.589,207.954,178.691z M205.255,192.738l1.153-11.75
												l-15.004,5.461l1.011,10.962L205.255,192.738"/>
										</g>
										<g>
											<polygon fill="#815D2F" points="206.408,180.988 205.255,192.738 192.415,197.412 191.404,186.449 								"/>
										</g>
									</g>
									<g enable-background="new    ">
										<g>
											<path fill="#CDC1AC" d="M206.818,173.408l1.467-0.534l-0.679,5.646c-0.085-0.006-0.174,0.006-0.265,0.039l-1.195,0.435
												L206.818,173.408z"/>
										</g>
										<g>
											<polygon fill="#CDC1AC" points="190.946,179.185 206.818,173.408 206.146,178.994 191.549,184.306 								"/>
										</g>
										<g>
											<path fill="#CDC1AC" d="M189.479,179.719l1.467-0.534l0.604,5.122l-1.052,0.383c-0.14,0.051-0.277,0.149-0.399,0.28
												L189.479,179.719z"/>
										</g>
										<g>
											<polygon fill="#483127" points="205.933,166.048 206.637,168.148 191.193,173.77 191.927,171.146 								"/>
										</g>
										<g>
											<polygon fill="#3D281D" points="208.388,169.361 208.377,170.99 189.409,177.894 189.419,176.265 								"/>
										</g>
										<g>
											<path fill="#483127" d="M206.437,164.016c0.298-0.108,0.562,0.027,0.67,0.345l1.081,3.223l-1.55,0.564l-0.704-2.1
												l-14.006,5.098l-0.734,2.623l-1.556,0.566l1.131-4.028c0.112-0.398,0.379-0.727,0.678-0.835L206.437,164.016z"/>
										</g>
										<g>
											<path fill="#3D281D" d="M209.125,167.242c0.395-0.144,0.716,0.154,0.713,0.67l-0.022,3.475
												c-0.003,0.516-0.329,1.049-0.724,1.193l-0.807,0.294l-18.806,6.845l-0.807,0.293c-0.402,0.146-0.724-0.152-0.72-0.667
												l0.022-3.475c0.003-0.515,0.33-1.049,0.731-1.195l0.932-0.339l1.556-0.566l15.444-5.621l1.55-0.564L209.125,167.242z
												 M208.377,170.99l0.01-1.629l-18.968,6.904l-0.01,1.629L208.377,170.99"/>
										</g>
									</g>
								</g>
							</g>
						</g>
					</g>											
				</g>
				<g id="F-sign_1_">
					<g id="F-sign">
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#BD9164" d="M283.683,323.064c0.001-0.271,0.232-0.484,0.69-0.638
									c0.523-0.181,1.112-0.234,1.765-0.161c0.653,0.071,1.24,0.255,1.761,0.551c0.456,0.254,0.684,0.518,0.682,0.789
									c-0.001,0.272-0.231,0.486-0.69,0.639c-0.524,0.146-1.112,0.184-1.765,0.112c-0.653-0.073-1.24-0.24-1.761-0.501
									C283.909,323.6,283.682,323.337,283.683,323.064z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#916E4B" d="M288.581,323.605l0.592,49.834l-0.489-0.205l-1.136,1.608
									l-0.01,1.785l1.709,0.955l-0.015,2.602l0.073,4.295l0.048,0.058c0.032,0.072,0.048,0.158,0.047,0.262
									c-0.002,0.372-0.249,0.652-0.739,0.835c-0.131,0.021-0.245,0.042-0.344,0.065c-0.098,0.022-0.197,0.063-0.295,0.12
									c-0.653,0.166-1.405,0.202-2.254,0.109c-0.196-0.022-0.392-0.044-0.588-0.066c-0.75-0.151-1.402-0.395-1.956-0.726
									c-0.521-0.263-0.847-0.537-0.975-0.824c-0.065-0.108-0.097-0.214-0.097-0.314c0-0.069,0.034-0.134,0.1-0.194l0.133-6.06
									l1.298-54.68c-0.001,0.273,0.226,0.536,0.682,0.791c0.521,0.261,1.108,0.428,1.761,0.501c0.653,0.071,1.241,0.034,1.765-0.112
									C288.349,324.091,288.579,323.877,288.581,323.605z M271.584,380.837l-9.039-4.622l4.897,0.541l6.596,3.383L271.584,380.837z
									 M279.292,378.625l-2.847,0.81l-4.104-2.138l5.681,0.628L279.292,378.625z M293.039,399.644l2.503-0.692l28.683,14.603
									l-0.883,0.055l-2.648,0.167L293.039,399.644z M300.403,397.548l29.757,15.18l-0.247,0.33l-0.1,0.143l-2.206,0.165
									l-29.612-15.113L300.403,397.548z M313.979,414.259l-25.8-13.213l2.455-0.698l26.679,13.667l-0.833,0.062L313.979,414.259z
									 M331.1,411.25l-28.243-14.453l2.503-0.692l26.777,13.728l-0.248,0.332L331.1,411.25z M306.069,392.254l28.145,14.44
									l-0.099,0.192l-0.248,0.381l-0.741,1.093l-27.071-13.812L306.069,392.254z M250.212,381.693l0.011-1.938l14.121,7.175
									l-0.011,1.989L250.212,381.693z M264.356,384.99l-14.121-7.225l0.011-1.938l14.121,7.175L264.356,384.99z M266.676,382.236
									l-13.877-7.097l4.898,0.541l11.435,5.856L266.676,382.236z M250.187,386.082l0.014-2.45l60.346,30.811l-0.883,0.056
									l-2.599,0.172l-0.735,0.021l-42.804-21.879l-0.782-0.393l-12.46-6.328L250.187,386.082z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#B68B61" d="M289.173,373.439l41.143,20.931l-0.01,1.735l-6.024-0.666
									l-35.036-17.856l-1.709-0.955l0.01-1.785l1.136-1.608L289.173,373.439z M267.443,376.756l4.898,0.541l4.104,2.138
									l-2.406,0.704L267.443,376.756z M262.545,376.215l9.039,4.622l-2.454,0.699l-11.435-5.856L262.545,376.215z M250.224,379.754
									l0.012-1.989l14.121,7.225l-0.012,1.939L250.224,379.754z M250.212,381.693l14.121,7.226l-0.006,1.071l22.526,11.473
									l1.325-0.416l25.8,13.213l-0.883,0.056l-2.548,0.127l-60.346-30.811L250.212,381.693z M293.039,399.644l27.656,14.132
									l-0.784,0.066l-2.599,0.173l-26.679-13.667L293.039,399.644z M297.996,398.252l29.612,15.113l-0.834,0.062l-2.549,0.127
									l-28.683-14.603L297.996,398.252z M300.403,397.548l2.454-0.751L331.1,411.25l-0.198,0.386l-0.742,1.092L300.403,397.548z
									 M332.138,409.833l-26.777-13.728l0.688-0.179l0.008-1.377l27.071,13.812l-0.248,0.382L332.138,409.833z M264.368,383.001
									l-14.121-7.175l0.006-0.969l2.546,0.281l13.877,7.097l-2.16,0.628l-0.146-0.016L264.368,383.001z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE5" d="M279.292,378.625l3.092-0.882l-0.133,6.06
									c-0.066,0.061-0.099,0.125-0.1,0.194c0,0.101,0.032,0.206,0.097,0.314c0.128,0.287,0.454,0.562,0.975,0.824
									c0.554,0.331,1.206,0.574,1.956,0.726c0.196,0.022,0.392,0.044,0.588,0.066c0.849,0.093,1.601,0.057,2.254-0.109
									c0.099-0.057,0.197-0.098,0.295-0.12c0.099-0.023,0.213-0.045,0.344-0.065c0.491-0.183,0.737-0.463,0.739-0.835
									c0.001-0.104-0.015-0.189-0.047-0.262l-0.048-0.058l-0.073-4.295l16.857,8.6l-19.194,5.484l-22.38-11.404l2.16-0.628
									l2.455-0.699l2.454-0.699l2.455-0.698l2.406-0.704L279.292,378.625z M271.928,389.349c0.128,0.354,0.192,0.686,0.19,0.99
									c-0.001,0.205-0.019,0.391-0.053,0.557c-0.033,0.166-0.083,0.297-0.149,0.393c-0.099,0.158-0.247,0.277-0.443,0.358
									c-0.426,0.225-0.949,0.185-1.567-0.122c-0.587-0.337-1.09-0.835-1.511-1.495c-0.162-0.255-0.291-0.49-0.388-0.705
									c-0.096-0.216-0.16-0.426-0.191-0.635c-0.032-0.173-0.047-0.362-0.046-0.566c0.002-0.34,0.068-0.604,0.201-0.794
									c0.065-0.13,0.165-0.237,0.295-0.325c0.033-0.063,0.083-0.109,0.148-0.138c0.426-0.257,0.933-0.219,1.519,0.119
									c0.619,0.306,1.139,0.788,1.56,1.448c0.064,0.108,0.129,0.217,0.193,0.326C271.815,388.946,271.896,389.142,271.928,389.349z
									 M275.792,390.643c0.425-0.225,0.932-0.186,1.518,0.117c0.619,0.308,1.139,0.79,1.56,1.448c0.065,0.11,0.13,0.202,0.195,0.277
									c0.096,0.215,0.177,0.41,0.241,0.588c0.129,0.39,0.192,0.754,0.19,1.094c-0.001,0.169-0.018,0.339-0.052,0.504
									c-0.034,0.133-0.083,0.263-0.149,0.393c-0.099,0.159-0.247,0.278-0.443,0.357c-0.425,0.227-0.949,0.187-1.567-0.12
									c-0.586-0.303-1.09-0.802-1.51-1.495c-0.162-0.222-0.292-0.474-0.388-0.757c-0.097-0.215-0.161-0.393-0.193-0.532
									c-0.032-0.207-0.046-0.414-0.045-0.617c0.002-0.307,0.068-0.571,0.2-0.795c0.067-0.163,0.166-0.288,0.297-0.376
									C275.677,390.699,275.726,390.669,275.792,390.643z M310.547,414.442l2.548-0.127l0.883-0.056l2.5-0.183l0.833-0.062
									l2.599-0.173l0.784-0.066l2.648-0.167l0.883-0.055l2.549-0.127l0.834-0.062l2.206-0.165l-0.007,1.276l-0.003,0.51
									l-0.008,1.429l-0.003,0.509l-0.009,1.53l-0.002,0.409l-0.008,1.53l-0.003,0.407l-1.865,0.561l-0.589,0.139l-1.816,0.565
									l-0.687,0.179l-1.865,0.508l-0.541,0.196l-16.15,4.547l0.075-12.806l0.735-0.021l2.599-0.172L310.547,414.442z
									 M263.314,395.698c0.586,0.268,1.09,0.731,1.511,1.391c0.454,0.697,0.678,1.368,0.674,2.015
									c-0.003,0.612-0.234,1.013-0.692,1.2c-0.426,0.225-0.933,0.187-1.519-0.117c-0.619-0.307-1.139-0.789-1.56-1.449
									c-0.388-0.655-0.58-1.307-0.576-1.953c0.003-0.61,0.202-1.014,0.595-1.21C262.172,395.349,262.695,395.39,263.314,395.698z
									 M253.773,393.009c0.003-0.612,0.202-1.032,0.596-1.261c0.425-0.226,0.949-0.185,1.567,0.121
									c0.586,0.304,1.09,0.784,1.511,1.443c0.454,0.664,0.678,1.301,0.675,1.912c-0.004,0.68-0.235,1.114-0.694,1.302
									c-0.425,0.225-0.932,0.187-1.519-0.115c-0.618-0.342-1.138-0.842-1.559-1.501C253.962,394.29,253.769,393.656,253.773,393.009
									z M292.287,410.894c0.421,0.658,0.63,1.294,0.627,1.906c-0.004,0.646-0.219,1.082-0.645,1.308
									c-0.426,0.191-0.932,0.152-1.519-0.118c-0.619-0.341-1.139-0.839-1.56-1.499c-0.388-0.621-0.581-1.255-0.577-1.9
									c0.004-0.647,0.203-1.066,0.595-1.263c0.427-0.258,0.949-0.219,1.568,0.123C291.363,409.718,291.866,410.2,292.287,410.894z
									 M295.942,414.361c0.003-0.613,0.219-1.032,0.645-1.258c0.426-0.225,0.948-0.185,1.567,0.123
									c0.587,0.303,1.09,0.783,1.512,1.443c0.42,0.66,0.629,1.294,0.625,1.906c-0.003,0.646-0.218,1.083-0.645,1.307
									c-0.426,0.226-0.932,0.188-1.519-0.117c-0.619-0.341-1.138-0.84-1.56-1.499C296.148,415.641,295.939,415.006,295.942,414.361z
									"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#97AEC0" d="M275.792,390.643c-0.066,0.026-0.115,0.056-0.148,0.086
									c-0.131,0.088-0.23,0.213-0.297,0.376c-0.131,0.224-0.198,0.488-0.2,0.795c-0.001,0.203,0.014,0.41,0.045,0.617
									c0.032,0.14,0.096,0.317,0.193,0.532c0.096,0.283,0.226,0.535,0.388,0.757c0.42,0.693,0.924,1.192,1.51,1.495
									c0.619,0.307,1.142,0.347,1.567,0.12c0.197-0.079,0.345-0.198,0.443-0.357c0.066-0.13,0.116-0.26,0.149-0.393
									c0.034-0.165,0.051-0.335,0.052-0.504c0.002-0.34-0.061-0.704-0.19-1.094c-0.064-0.178-0.145-0.373-0.241-0.588
									c-0.065-0.075-0.13-0.167-0.195-0.277c-0.42-0.658-0.941-1.141-1.56-1.448C276.724,390.458,276.217,390.418,275.792,390.643z
									 M271.928,389.349c-0.032-0.207-0.113-0.403-0.242-0.589c-0.064-0.109-0.129-0.218-0.193-0.326
									c-0.421-0.66-0.941-1.143-1.56-1.448c-0.586-0.338-1.093-0.376-1.519-0.119c-0.065,0.028-0.115,0.074-0.148,0.138
									c-0.131,0.088-0.23,0.195-0.295,0.325c-0.132,0.189-0.199,0.454-0.201,0.794c-0.001,0.204,0.014,0.394,0.046,0.566
									c0.031,0.209,0.095,0.419,0.191,0.635c0.098,0.215,0.227,0.45,0.388,0.705c0.421,0.66,0.924,1.158,1.511,1.495
									c0.619,0.307,1.141,0.347,1.567,0.122c0.196-0.081,0.344-0.2,0.443-0.358c0.066-0.096,0.116-0.227,0.149-0.393
									c0.034-0.166,0.052-0.352,0.053-0.557C272.12,390.035,272.056,389.703,271.928,389.349z M264.516,382.864l22.38,11.404
									l-0.042,7.194l-22.526-11.473l0.006-1.071l0.011-1.989l0.012-1.939l0.011-1.988l0.001-0.153L264.516,382.864z M306.331,414.69
									l-0.075,12.806l-27.462-13.907c-4.039-2.079-8.094-4.161-12.166-6.244c-0.685-0.348-1.352-0.694-2.003-1.037l-14.512-7.424
									l0.074-12.802l0.097,0.009l12.46,6.328l-0.097-0.012l0.879,0.404L306.331,414.69z M253.773,393.009
									c-0.004,0.646,0.189,1.28,0.577,1.901c0.421,0.659,0.941,1.159,1.559,1.501c0.587,0.302,1.093,0.34,1.519,0.115
									c0.459-0.188,0.69-0.622,0.694-1.302c0.003-0.611-0.222-1.248-0.675-1.912c-0.421-0.659-0.924-1.14-1.511-1.443
									c-0.619-0.306-1.142-0.347-1.567-0.121C253.975,391.977,253.776,392.397,253.773,393.009z M263.314,395.698
									c-0.619-0.308-1.142-0.349-1.567-0.124c-0.394,0.196-0.592,0.6-0.595,1.21c-0.003,0.646,0.188,1.298,0.576,1.953
									c0.421,0.66,0.941,1.143,1.56,1.449c0.586,0.304,1.093,0.342,1.519,0.117c0.458-0.188,0.689-0.588,0.692-1.2
									c0.004-0.646-0.22-1.317-0.674-2.015C264.404,396.429,263.9,395.965,263.314,395.698z M295.942,414.361
									c-0.003,0.646,0.206,1.28,0.626,1.905c0.421,0.659,0.94,1.158,1.56,1.499c0.586,0.305,1.092,0.343,1.519,0.117
									c0.426-0.224,0.641-0.66,0.645-1.307c0.004-0.612-0.205-1.246-0.625-1.906c-0.421-0.66-0.925-1.141-1.512-1.443
									c-0.619-0.308-1.141-0.348-1.567-0.123C296.161,413.329,295.946,413.748,295.942,414.361z M292.287,410.894
									c-0.421-0.694-0.924-1.176-1.51-1.443c-0.619-0.342-1.141-0.381-1.568-0.123c-0.393,0.196-0.591,0.615-0.595,1.263
									c-0.003,0.646,0.189,1.279,0.577,1.9c0.421,0.66,0.941,1.158,1.56,1.499c0.587,0.271,1.093,0.31,1.519,0.118
									c0.426-0.226,0.641-0.661,0.645-1.308C292.917,412.188,292.708,411.552,292.287,410.894z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#B9CBD9" d="M306.069,392.254l-0.014,2.295l-0.008,1.377l-0.688,0.179
									l-2.503,0.692l-2.454,0.751l-2.407,0.704l-2.454,0.699l-2.503,0.692l-2.405,0.704l-2.455,0.698l-1.325,0.416l0.042-7.194
									l19.194-5.484L306.069,392.254z M329.814,413.201l0.1-0.143l0.247-0.33l0.742-1.092l0.198-0.386l0.79-1.086l0.248-0.332
									l0.741-1.09l0.248-0.382l0.741-1.093l0.248-0.381l0.099-0.192l-0.075,12.906l-1.276,0.368l-0.638,0.187l-1.865,0.559
									l-0.589,0.087l0.003-0.407l0.008-1.53l0.002-0.409l0.009-1.53l0.003-0.509l0.008-1.429l0.003-0.51L329.814,413.201z"/>
							</g>
							<g>
								<g>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE5" d="M322.692,382.297c-0.261-0.096-0.538-0.093-0.833,0.01
										c-0.654,0.133-1.212,0.668-1.675,1.603c-0.43,0.904-0.648,1.919-0.655,3.042c0,0.168-0.002,0.34-0.002,0.51l-31.91-16.083
										c-0.031-0.241-0.046-0.464-0.045-0.668c0.006-1.123,0.241-2.151,0.705-3.087c0.462-0.901,1.021-1.435,1.675-1.603
										c0.327-0.1,0.638-0.064,0.931,0.104c0.065,0.007,0.114,0.03,0.147,0.068L322.692,382.297z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#97AEC0" d="M287.616,371.378l31.91,16.083
										c0-0.17,0.002-0.342,0.002-0.51c0.007-1.123,0.225-2.138,0.655-3.042c0.463-0.935,1.021-1.47,1.675-1.603
										c0.295-0.103,0.573-0.105,0.833-0.01l0.049,0.058l0.049,0.006c0.261,0.096,0.504,0.311,0.731,0.642
										c0.454,0.662,0.678,1.571,0.67,2.729c-0.006,1.088-0.241,2.1-0.704,3.035c-0.1,0.193-0.215,0.368-0.347,0.523
										c-0.363,0.573-0.805,0.933-1.33,1.079c-0.327,0.1-0.637,0.064-0.93-0.104l-0.049-0.006l-31.713-16.11
										c-0.065-0.008-0.13-0.032-0.196-0.074l0-0.049c-0.26-0.132-0.488-0.345-0.682-0.638
										C287.886,372.838,287.677,372.169,287.616,371.378z"/>
								</g>
							</g>
						</g>
						<g>
							<g>
								<polygon fill="#BCBEC0" points="296.924,355.695 287.42,350.202 287.42,348.369 296.924,353.862 						"/>
								<polygon fill="#939598" points="296.924,355.695 306.428,350.202 306.428,348.369 296.924,353.862 						"/>
								<polygon fill="#D1D3D4" points="296.924,353.862 306.428,348.369 296.847,342.918 287.42,348.369 						"/>
							</g>
							<g>
								<path fill="#939598" d="M298.633,348.255c0,0.415-0.498,0.753-1.104,0.753h-0.022c-0.606,0-1.103-0.338-1.103-0.753v-34.474
									c0-0.414,0.497-0.753,1.103-0.753h0.022c0.607,0,1.104,0.339,1.104,0.753V348.255z"/>
								<path fill="#6D6E71" d="M297.534,313.03v35.978c0.605-0.001,1.099-0.339,1.099-0.752v-34.474
									C298.633,313.369,298.139,313.032,297.534,313.03z"/>
							</g>
							<g>
								<polygon fill="#00A18E" points="292.051,325.563 291.402,325.15 291.402,321.907 292.051,322.32 						"/>
								<polygon fill="#00AE9E" points="303.36,314.998 302.712,314.585 291.402,321.907 292.051,322.32 						"/>
								<polygon fill="#60C5BA" points="292.051,325.563 303.36,318.24 305.712,315.036 303.36,314.998 292.051,322.32 						"/>
								<polygon fill="#8FD2CA" points="303.36,314.998 305.712,315.036 305.209,314.566 302.712,314.585 						"/>
							</g>
							<g>
								<polygon fill="#C6006F" points="292.051,331.318 291.402,330.905 291.402,327.663 292.051,328.076 						"/>
								<polygon fill="#EE80B3" points="303.36,320.753 302.712,320.339 291.402,327.663 292.051,328.076 						"/>
								<polygon fill="#EB539E" points="292.051,331.318 303.36,323.995 305.712,320.791 303.36,320.753 292.051,328.076 						"/>
								<polygon fill="#F5A2C6" points="303.36,320.753 305.712,320.791 305.209,320.32 302.712,320.339 						"/>
							</g>
							<circle fill="#58595B" cx="297.551" cy="312.967" r="2.946"/>
						</g>
						<g>
							<polygon fill="#D6D6D7" points="749.12,349.534 745.525,347.214 745.525,324.495 749.12,326.813 					"/>
							<polygon fill="#BCBEC0" points="749.12,349.534 752.713,347.214 752.713,324.495 749.12,326.813 					"/>
							<polygon fill="#E6E7E8" points="745.525,324.495 749.12,322.176 752.713,324.495 749.12,326.813 					"/>
							<polygon fill="#939598" points="749.12,351.968 745.525,349.65 745.525,345.245 749.12,347.564 					"/>
							<polygon fill="#6D6E71" points="749.12,351.968 752.713,349.65 752.713,345.245 749.12,347.564 					"/>
							<g>
								<circle fill="#FFE14F" cx="749.042" cy="321.984" r="2.764"/>
								<path fill="#FFD200" d="M749.499,319.266c0.626,0.507,1.034,1.271,1.034,2.138c0,1.527-1.239,2.766-2.765,2.766
									c-0.158,0-0.308-0.022-0.457-0.048c0.475,0.386,1.073,0.626,1.731,0.626c1.527,0,2.764-1.237,2.764-2.764
									C751.806,320.614,750.807,319.484,749.499,319.266z"/>
							</g>
						</g>
						<g>
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#F1EEE5" d="M680.068,213.171l-4.642-1.773l-0.151-0.038l-0.339-0.151
									v-0.415c0-0.151-0.026-0.302-0.076-0.453l0.717-0.264l3.51-1.358l2.942-1.094l5.698-2.189l0.151-0.076l1.51-0.528v4.792
									l-1.51,0.566l-0.151,0.038l-2.377,0.905l-3.321,1.283L680.068,213.171z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#97AEC0" d="M672.558,215.133l-0.68-0.265l-6.414-2.453l-5.698-2.188
									l-0.15-0.038l-1.51-0.566v-4.792l1.51,0.528l0.15,0.076l4.643,1.773l1.056,0.416l4.265,1.623l2.149,0.83l0.755,0.264
									c-0.05,0.151-0.075,0.302-0.075,0.453V215.133z M674.936,216.04v-4.831l0.339,0.151l0.151,0.038l4.642,1.773l1.056,0.377
									l4.227,1.624l2.188,0.829l1.85,0.717v4.831l-1.85-0.718l-6.415-2.452l-5.697-2.151l-0.151-0.075L674.936,216.04z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#9A7652" d="M674.936,216.04v15.432h-2.378v-16.338v-4.339
									c0-0.151,0.025-0.302,0.075-0.453c0.052-0.125,0.139-0.251,0.265-0.377c0.227-0.251,0.516-0.377,0.868-0.377
									c0.302,0,0.578,0.126,0.83,0.377c0.1,0.126,0.188,0.252,0.264,0.377c0.05,0.151,0.076,0.302,0.076,0.453v0.415V216.04z"/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#7B5D3F" d="M672.558,231.471h2.378h0.83v17.434
									c0,0.301-0.202,0.579-0.604,0.83c-0.378,0.227-0.844,0.34-1.396,0.34c-0.579,0-1.068-0.113-1.472-0.34
									c-0.403-0.251-0.604-0.529-0.604-0.83v-17.434H672.558z"/>
							</g>
						</g>
					</g>
				</g>														
				<g id="truckMove3">
					<g id="truck3">
						<path id="XMLID_1112_" opacity="0.4" d="M770.705,360.941l23.393,13.243c1.378,0.78,1.385,2.764,0.014,3.553l-44.642,25.708
							c-0.627,0.361-1.398,0.364-2.028,0.007l-23.393-13.243c-1.379-0.78-1.385-2.764-0.014-3.554l44.642-25.707
							C769.303,360.586,770.075,360.583,770.705,360.941z"/>
						<polygon id="XMLID_1111_" fill="#5E3D36" points="782.623,370.6 782.623,375.116 781.318,376.048 776.269,373.655 				"/>
						<g id="XMLID_1098_">
							<path id="XMLID_1110_" fill="#111414" d="M770.628,378.438c-0.006-2.609,1.688-5.082,3.758-5.612
								c0.851-0.22,2.273-0.574,5.301,1.862c1.117,0.898-4.019,8.868-4.019,8.868l-2.952-1.387c-0.105-0.041-0.207-0.089-0.305-0.144
								L772.357,382l0.001-0.002C771.321,381.4,770.63,380.102,770.628,378.438z"/>
							<g id="XMLID_1106_">
								<path id="XMLID_1107_" fill="#433734" d="M779.922,378.432c0.003,1.676-1.08,3.291-2.417,3.605
									c-1.336,0.314-2.424-0.792-2.426-2.469c-0.004-1.677,1.078-3.292,2.415-3.605S779.919,376.755,779.922,378.432z
									 M777.503,381.061c0.908-0.213,1.643-1.309,1.641-2.446c-0.003-1.139-0.74-1.889-1.647-1.676
									c-0.907,0.214-1.642,1.31-1.64,2.447S776.597,381.274,777.503,381.061"/>
							</g>
							<g id="XMLID_1102_">
								<path id="XMLID_1103_" fill="#252B2B" d="M781.267,378.116c0.005,2.609-1.677,5.121-3.758,5.609s-3.771-1.229-3.775-3.84
									c-0.006-2.61,1.676-5.124,3.758-5.613C779.572,373.784,781.262,375.506,781.267,378.116z M777.505,382.038
									c1.337-0.314,2.42-1.93,2.417-3.605c-0.003-1.677-1.091-2.782-2.428-2.469s-2.419,1.929-2.415,3.605
									C775.082,381.246,776.169,382.352,777.505,382.038"/>
							</g>
							<g id="XMLID_1100_">
								<path id="XMLID_1101_" fill="#675A58" d="M776.235,380.609c-0.009-0.011-0.017-0.021-0.024-0.033
									c-0.065-0.088-0.123-0.187-0.172-0.294c-0.006-0.014-0.012-0.026-0.018-0.04c-0.104-0.247-0.163-0.535-0.164-0.855
									c0-0.236,0.031-0.471,0.089-0.694c0.007-0.024,0.013-0.05,0.021-0.074c0.037-0.129,0.082-0.256,0.136-0.377
									c0.009-0.018,0.016-0.034,0.024-0.051c0.014-0.031,0.028-0.062,0.043-0.091c0.008-0.015,0.016-0.029,0.023-0.043
									c0.008-0.018,0.018-0.033,0.025-0.049c0.008-0.014,0.016-0.026,0.022-0.038c0.045-0.077,0.093-0.152,0.144-0.223
									c0.053-0.073,0.107-0.142,0.165-0.207c0.03-0.035,0.063-0.068,0.095-0.101c0-0.001,0.001-0.001,0.001-0.001
									c0.248-0.247,0.54-0.425,0.852-0.499c0.907-0.213,1.645,0.537,1.647,1.676c0,0.403-0.092,0.802-0.251,1.156
									c-0.005,0.01-0.009,0.02-0.013,0.029c-0.016,0.034-0.033,0.068-0.049,0.101c-0.009,0.016-0.017,0.032-0.025,0.047
									c-0.008,0.014-0.014,0.027-0.021,0.041c-0.016,0.028-0.033,0.057-0.049,0.084c-0.041,0.067-0.083,0.132-0.128,0.193
									c-0.053,0.073-0.109,0.143-0.169,0.208c-0.021,0.024-0.045,0.048-0.066,0.072c-0.252,0.256-0.549,0.439-0.869,0.515
									c-0.197,0.047-0.389,0.047-0.564,0.008c-0.013-0.003-0.025-0.006-0.037-0.01C776.64,380.992,776.412,380.834,776.235,380.609z
									"/>
							</g>
							<path id="XMLID_1099_" fill="#514745" d="M777.03,381.061c0.318-0.075,0.616-0.259,0.868-0.515
								c0.022-0.024,0.045-0.048,0.066-0.072c0.06-0.065,0.115-0.135,0.169-0.208c0.045-0.062,0.087-0.126,0.128-0.193
								c0.016-0.027,0.032-0.056,0.049-0.084c0.007-0.014,0.015-0.027,0.021-0.041c0.009-0.015,0.018-0.031,0.025-0.047
								c0.017-0.032,0.033-0.066,0.048-0.101c0.005-0.01,0.009-0.02,0.014-0.029c0.159-0.354,0.251-0.753,0.25-1.156
								c-0.001-0.901-0.465-1.558-1.108-1.687c0.879-0.164,1.581,0.574,1.584,1.687c0,0.403-0.092,0.802-0.251,1.156
								c-0.005,0.01-0.009,0.02-0.013,0.029c-0.016,0.034-0.033,0.068-0.049,0.101c-0.009,0.016-0.017,0.032-0.025,0.047
								c-0.008,0.014-0.014,0.027-0.021,0.041c-0.016,0.028-0.033,0.057-0.049,0.084c-0.041,0.067-0.083,0.132-0.128,0.193
								c-0.053,0.073-0.109,0.143-0.169,0.208c-0.021,0.024-0.045,0.048-0.066,0.072c-0.252,0.256-0.549,0.439-0.869,0.515
								c-0.188,0.044-0.369,0.046-0.539,0.012C776.986,381.069,777.007,381.067,777.03,381.061z"/>
						</g>
						<polygon id="XMLID_1097_" fill="#5E3D36" points="759.003,388.674 753.954,386.282 761.847,382.486 761.847,387.119 				"/>
						<g id="XMLID_1084_">
							<path id="XMLID_1096_" fill="#111414" d="M748.312,390.955c-0.004-2.61,1.688-5.082,3.759-5.613
								c0.851-0.219,2.274-0.574,5.302,1.863c1.115,0.898-4.02,8.867-4.02,8.867l-2.951-1.386c-0.105-0.041-0.207-0.089-0.307-0.145
								l-0.053-0.024v-0.003C749.005,393.917,748.316,392.618,748.312,390.955z"/>
							<g id="XMLID_1092_">
								<path id="XMLID_1093_" fill="#433734" d="M757.607,390.948c0.004,1.676-1.08,3.291-2.416,3.605
									c-1.337,0.314-2.424-0.791-2.428-2.468c-0.003-1.677,1.08-3.292,2.416-3.606C756.517,388.166,757.603,389.272,757.607,390.948
									z M755.189,393.577c0.908-0.213,1.642-1.308,1.639-2.445c-0.002-1.139-0.738-1.889-1.646-1.676
									c-0.907,0.213-1.641,1.309-1.639,2.447C753.544,393.041,754.282,393.791,755.189,393.577"/>
							</g>
							<g id="XMLID_1088_">
								<path id="XMLID_1089_" fill="#252B2B" d="M758.953,390.631c0.004,2.61-1.678,5.121-3.759,5.609
									c-2.081,0.489-3.771-1.229-3.776-3.84c-0.004-2.61,1.678-5.123,3.759-5.612S758.947,388.022,758.953,390.631z
									 M755.191,394.553c1.336-0.314,2.42-1.93,2.416-3.605s-1.09-2.782-2.428-2.469c-1.336,0.314-2.419,1.93-2.416,3.606
									C752.767,393.762,753.854,394.868,755.191,394.553"/>
							</g>
							<g id="XMLID_1086_">
								<path id="XMLID_1087_" fill="#675A58" d="M753.919,393.125c-0.008-0.012-0.017-0.022-0.024-0.034
									c-0.065-0.088-0.123-0.187-0.171-0.293c-0.006-0.014-0.012-0.027-0.018-0.04c-0.105-0.247-0.164-0.535-0.164-0.855
									c0-0.236,0.03-0.471,0.088-0.694c0.007-0.025,0.014-0.05,0.02-0.075c0.038-0.128,0.084-0.255,0.137-0.377
									c0.008-0.017,0.016-0.033,0.023-0.051c0.015-0.03,0.029-0.061,0.045-0.09c0.008-0.016,0.015-0.029,0.022-0.044
									c0.009-0.017,0.018-0.032,0.026-0.049c0.008-0.013,0.015-0.025,0.021-0.038c0.045-0.077,0.093-0.151,0.144-0.223
									c0.053-0.073,0.106-0.142,0.165-0.207c0.031-0.034,0.063-0.068,0.096-0.1c0-0.001,0-0.001,0-0.001
									c0.248-0.248,0.54-0.426,0.852-0.499c0.908-0.213,1.645,0.537,1.646,1.676c0.001,0.402-0.091,0.801-0.25,1.156
									c-0.004,0.01-0.008,0.02-0.013,0.029c-0.016,0.033-0.032,0.067-0.049,0.101c-0.009,0.016-0.017,0.031-0.024,0.047
									c-0.008,0.013-0.015,0.026-0.022,0.041c-0.016,0.028-0.032,0.057-0.05,0.084c-0.039,0.066-0.082,0.132-0.127,0.192
									c-0.053,0.074-0.109,0.143-0.168,0.209c-0.021,0.023-0.045,0.048-0.067,0.07c-0.251,0.257-0.549,0.44-0.868,0.516
									c-0.199,0.048-0.389,0.048-0.565,0.009c-0.013-0.004-0.024-0.007-0.038-0.01C754.326,393.508,754.096,393.351,753.919,393.125
									z"/>
							</g>
							<path id="XMLID_1085_" fill="#514745" d="M754.714,393.577c0.318-0.075,0.616-0.259,0.867-0.516
								c0.023-0.022,0.046-0.047,0.068-0.07c0.059-0.066,0.115-0.135,0.168-0.209c0.045-0.061,0.088-0.126,0.128-0.192
								c0.017-0.027,0.032-0.056,0.049-0.084c0.007-0.015,0.015-0.028,0.022-0.041c0.008-0.016,0.016-0.031,0.024-0.047
								c0.017-0.033,0.032-0.067,0.048-0.101c0.006-0.01,0.01-0.02,0.014-0.029c0.16-0.355,0.252-0.754,0.25-1.156
								c-0.002-0.902-0.465-1.558-1.107-1.687c0.877-0.164,1.581,0.574,1.582,1.687c0.001,0.402-0.091,0.801-0.25,1.156
								c-0.004,0.01-0.008,0.02-0.013,0.029c-0.016,0.033-0.032,0.067-0.049,0.101c-0.009,0.016-0.017,0.031-0.024,0.047
								c-0.008,0.013-0.015,0.026-0.022,0.041c-0.016,0.028-0.032,0.057-0.05,0.084c-0.039,0.066-0.082,0.132-0.127,0.192
								c-0.053,0.074-0.109,0.143-0.168,0.209c-0.021,0.023-0.045,0.048-0.067,0.07c-0.251,0.257-0.549,0.44-0.868,0.516
								c-0.189,0.045-0.371,0.047-0.54,0.012C754.671,393.585,754.693,393.583,754.714,393.577z"/>
						</g>
						<polygon id="XMLID_1083_" fill="#5E3D36" points="792.566,364.807 792.566,369.323 791.261,370.255 786.212,367.863 				"/>
						<g id="XMLID_1070_">
							<path id="XMLID_1082_" fill="#111414" d="M780.571,372.645c-0.005-2.609,1.688-5.081,3.759-5.612
								c0.852-0.219,2.273-0.573,5.301,1.862c1.117,0.898-4.018,8.869-4.018,8.869l-2.953-1.387c-0.104-0.042-0.206-0.089-0.305-0.144
								l-0.055-0.025l0.002-0.002C781.264,375.608,780.574,374.309,780.571,372.645z"/>
							<g id="XMLID_1078_">
								<path id="XMLID_1079_" fill="#433734" d="M789.866,372.639c0.003,1.677-1.079,3.292-2.417,3.606
									c-1.336,0.313-2.424-0.793-2.426-2.469c-0.004-1.677,1.078-3.292,2.416-3.606
									C788.775,369.857,789.863,370.962,789.866,372.639z M787.448,375.269c0.907-0.214,1.642-1.31,1.64-2.447
									s-0.74-1.888-1.647-1.675s-1.642,1.309-1.64,2.447C785.803,374.732,786.541,375.482,787.448,375.269"/>
							</g>
							<g id="XMLID_1074_">
								<path id="XMLID_1075_" fill="#252B2B" d="M791.21,372.323c0.006,2.61-1.677,5.121-3.758,5.609
									c-2.081,0.489-3.771-1.229-3.775-3.839c-0.006-2.61,1.677-5.125,3.758-5.613C789.516,367.991,791.207,369.713,791.21,372.323z
									 M787.449,376.246c1.338-0.314,2.42-1.93,2.417-3.606s-1.091-2.782-2.427-2.469c-1.338,0.314-2.42,1.93-2.416,3.606
									C785.025,375.453,786.113,376.559,787.449,376.246"/>
							</g>
							<g id="XMLID_1072_">
								<path id="XMLID_1073_" fill="#675A58" d="M786.179,374.816c-0.01-0.011-0.018-0.021-0.025-0.032
									c-0.065-0.089-0.123-0.187-0.172-0.294c-0.006-0.014-0.012-0.027-0.018-0.041c-0.104-0.246-0.163-0.535-0.164-0.854
									c0-0.236,0.031-0.471,0.09-0.695c0.006-0.024,0.012-0.049,0.02-0.073c0.037-0.13,0.083-0.256,0.137-0.377
									c0.007-0.018,0.016-0.034,0.023-0.051c0.014-0.031,0.028-0.062,0.044-0.092c0.007-0.014,0.015-0.028,0.022-0.043
									c0.008-0.017,0.018-0.032,0.026-0.048c0.007-0.014,0.015-0.026,0.021-0.039c0.045-0.077,0.093-0.151,0.144-0.223
									c0.053-0.072,0.107-0.142,0.165-0.206c0.031-0.035,0.063-0.068,0.095-0.102h0.001c0.248-0.248,0.54-0.425,0.852-0.499
									c0.907-0.213,1.646,0.537,1.647,1.675c0,0.404-0.092,0.803-0.25,1.157c-0.006,0.01-0.01,0.02-0.014,0.028
									c-0.016,0.035-0.032,0.067-0.049,0.101c-0.008,0.016-0.016,0.032-0.025,0.048c-0.006,0.014-0.014,0.026-0.021,0.04
									c-0.016,0.029-0.032,0.057-0.049,0.085c-0.041,0.067-0.082,0.131-0.128,0.193c-0.053,0.073-0.108,0.143-0.169,0.208
									c-0.021,0.024-0.044,0.048-0.066,0.071c-0.252,0.257-0.549,0.44-0.868,0.516c-0.198,0.046-0.389,0.047-0.565,0.007
									c-0.012-0.003-0.025-0.006-0.037-0.009C786.583,375.199,786.355,375.042,786.179,374.816z"/>
							</g>
							<path id="XMLID_1071_" fill="#514745" d="M786.972,375.269c0.32-0.075,0.617-0.259,0.869-0.516
								c0.022-0.023,0.045-0.047,0.066-0.071c0.06-0.065,0.115-0.135,0.17-0.208c0.044-0.063,0.087-0.126,0.127-0.193
								c0.017-0.028,0.033-0.056,0.049-0.085c0.008-0.014,0.015-0.026,0.021-0.04c0.009-0.016,0.018-0.032,0.025-0.048
								c0.016-0.033,0.033-0.065,0.049-0.101c0.004-0.009,0.008-0.019,0.013-0.028c0.159-0.354,0.251-0.753,0.251-1.157
								c-0.002-0.901-0.466-1.557-1.109-1.686c0.879-0.164,1.582,0.574,1.584,1.686c0,0.404-0.092,0.803-0.25,1.157
								c-0.006,0.01-0.01,0.02-0.014,0.028c-0.016,0.035-0.032,0.067-0.049,0.101c-0.008,0.016-0.016,0.032-0.025,0.048
								c-0.006,0.014-0.014,0.026-0.021,0.04c-0.016,0.029-0.032,0.057-0.049,0.085c-0.041,0.067-0.082,0.131-0.128,0.193
								c-0.053,0.073-0.108,0.143-0.169,0.208c-0.021,0.024-0.044,0.048-0.066,0.071c-0.252,0.257-0.549,0.44-0.868,0.516
								c-0.188,0.044-0.37,0.045-0.54,0.012C786.929,375.276,786.951,375.273,786.972,375.269z"/>
						</g>
						<g id="XMLID_1068_">
							<path id="XMLID_1069_" fill="#0088CC" d="M750.456,375.689l5.362-15.265l36.991-21.591v30.53l-1.316,0.757l-0.239-5.242
								l-19.621,11.795c0,0-0.007,4.811,0,4.932l-12.585,7.076c-0.782-1.747-2.376-2.701-4.219-2.269
								c-2.609,0.612-4.718,3.765-4.712,7.038c0,0.122,0.009,0.239,0.016,0.358l-4.902,2.919v-11.171L750.456,375.689z"/>
						</g>
						<g id="XMLID_1066_">
							<path id="XMLID_1067_" fill="#6B96D3" d="M792.809,363.282v6.082l-1.548,0.899c-0.886-1.645-2.317-2.667-4.102-2.455
								c-2.501,0.299-5.088,3.827-5.088,6.714c0,0.356,0.02,0.707,0.059,1.05l-0.807,0.47c-0.781-1.752-2.377-2.709-4.222-2.276
								c-2.608,0.613-4.718,3.766-4.712,7.038c0,0.125,0.01,0.244,0.016,0.367l-13.358,7.511c-0.782-1.747-2.376-2.701-4.219-2.269
								c-2.609,0.612-4.718,3.765-4.712,7.038c0,0.122,0.009,0.239,0.016,0.358l-4.902,2.919v-5.959L792.809,363.282z"/>
						</g>
						<g id="XMLID_1064_">
							<polygon id="XMLID_1065_" fill="#0086FF" points="792.809,338.833 755.818,360.424 734.595,348.049 771.667,326.714 					"/>
						</g>
						<g id="XMLID_1062_">
							<polygon id="XMLID_1063_" fill="#81CCCC" points="786.026,339.883 775.369,346.078 759.441,336.735 759.437,334.69 
								786.026,337.989 					"/>
						</g>
						<g id="XMLID_1055_">
							<polygon id="XMLID_1056_" fill="#6FE7FC" points="775.544,344.045 775.373,346.025 759.441,336.735 759.441,334.638 					"/>
						</g>
						<g id="XMLID_1051_">
							<polygon id="XMLID_1054_" fill="#B3E9F9" points="786.026,337.989 775.572,344.054 759.441,334.647 769.957,328.777 					"/>
						</g>
						<g id="XMLID_1049_">
							<polygon id="XMLID_1050_" fill="#00DAE5" points="745.23,385.557 723.961,373.227 723.961,384.902 745.23,396.728 					"/>
						</g>
						<g id="XMLID_1047_">
							<polygon id="XMLID_1048_" fill="#B3E9F9" points="745.23,390.769 745.23,396.728 723.961,384.902 723.961,378.759 					"/>
						</g>
						<g id="XMLID_1045_">
							<polygon id="XMLID_1046_" fill="#AFAFAF" points="745.23,394.069 745.23,396.728 722.861,384.397 722.861,381.555 					"/>
						</g>
						<g id="XMLID_1041_">
							<polygon id="XMLID_1042_" fill="#939393" points="745.23,394.069 745.23,396.728 751.005,393.488 751.005,390.89 					"/>
						</g>
						<g id="XMLID_1036_" opacity="0.2">
							<g id="XMLID_1037_">
								<path id="XMLID_1038_" d="M765.856,366.155l-0.009,10.221l0.01,4.401v1.275l-6.487,3.629
									c-0.502-0.391-1.557-1.099-2.815-1.289c-0.301-0.045-0.607-0.068-0.912-0.068c-2.018,0-3.662,0.987-4.637,1.754v-11.17
									L765.856,366.155 M766.407,365.192l-15.951,9.401v12.729c0,0,2.171-2.448,5.187-2.448c0.27,0,0.547,0.02,0.83,0.063
									c1.58,0.239,2.836,1.409,2.836,1.409l7.099-3.971v-1.599l-0.009-4.4L766.407,365.192L766.407,365.192z"/>
							</g>
						</g>
						<g id="XMLID_1034_">
							<polygon id="XMLID_1035_" fill="#0086FF" points="750.456,375.689 729.371,363.45 723.961,373.227 745.23,385.557 					"/>
						</g>
						<g id="XMLID_1032_">
							<polygon id="XMLID_1033_" fill="#0088CC" points="755.818,360.424 734.595,348.049 729.371,363.45 750.456,375.689 					"/>
						</g>
						<g id="XMLID_1030_">
							<polygon id="XMLID_1031_" fill="#71B8EF" points="754.282,361.21 735.175,349.988 730.837,362.774 749.83,373.881 					"/>
						</g>
						<g id="XMLID_1028_" opacity="0.28">
							<polygon id="XMLID_1029_" points="735.58,351.335 731.556,363.195 730.837,362.774 735.175,349.988 754.282,361.21 
								753.958,362.129 					"/>
						</g>
						<g id="XMLID_1026_">
							<polygon id="XMLID_1027_" fill="#FFFFFF" points="735.281,390.627 735.281,392.975 728.083,388.931 728.083,386.706 					"/>
						</g>
						<g id="XMLID_1024_">
							<polygon id="XMLID_1025_" fill="#007A96" points="755.818,360.424 766.398,354.25 766.407,366.292 750.456,375.689 					"/>
						</g>
						<g id="XMLID_1022_">
							<polygon id="XMLID_1023_" fill="#47BEBF" points="756.822,360.898 765.697,355.772 765.605,365.664 752.449,373.341 					"/>
						</g>
						<g id="XMLID_1020_" opacity="0.28">
							<polygon id="XMLID_1021_" points="757.531,361.534 753.624,372.656 752.449,373.341 756.822,360.898 765.697,355.772 
								765.687,356.823 					"/>
						</g>
						<g id="XMLID_1018_">
							<rect id="XMLID_1019_" x="756.514" y="360.328" fill="#007A96" width="1.1" height="11.038"/>
						</g>
						<g id="XMLID_1011_" opacity="0.31">
							<g id="XMLID_1016_">
								<path id="XMLID_1017_" fill="#FFFFFF" d="M765.638,362.001l-1.896-1.896c-0.322-0.322-0.322-0.845,0-1.166
									c0.322-0.323,0.845-0.323,1.167,0l0.75,0.75L765.638,362.001z"/>
							</g>
							<g id="XMLID_1014_">
								<path id="XMLID_1015_" fill="#FFFFFF" d="M760.972,360.797c0.322-0.322,0.844-0.322,1.166,0l3.479,3.479l-0.013,1.387
									l-0.59,0.344l-4.043-4.043C760.65,361.642,760.65,361.12,760.972,360.797z"/>
							</g>
							<g id="XMLID_1012_">
								<path id="XMLID_1013_" fill="#FFFFFF" d="M759.957,364.386c0.322-0.322,0.844-0.322,1.167,0l2.458,2.458l-1.473,0.86
									l-2.152-2.152C759.634,365.23,759.634,364.708,759.957,364.386z"/>
							</g>
						</g>
						<g id="XMLID_1000_" opacity="0.44">
							<g id="XMLID_1009_">
								<path id="XMLID_1010_" fill="#FFFFFF" d="M742.074,366.717c0.545-0.27,1.205-0.044,1.473,0.502l2.062,4.193l-3.44-2.012
									l-0.596-1.211C741.304,367.644,741.529,366.985,742.074,366.717z"/>
							</g>
							<g id="XMLID_1007_">
								<path id="XMLID_1008_" fill="#FFFFFF" d="M736.412,358.84c0.268,0.546,0.043,1.205-0.502,1.473
									c-0.156,0.077-0.321,0.113-0.484,0.113c-0.406,0-0.797-0.225-0.988-0.615l-1.535-3.123l1.001-2.951L736.412,358.84z"/>
							</g>
							<g id="XMLID_1005_">
								<path id="XMLID_1006_" fill="#FFFFFF" d="M744.978,363.982c0.546-0.269,1.205-0.043,1.473,0.502l3.896,7.925l-0.518,1.473
									l-1.699-0.993l-3.654-7.434C744.208,364.909,744.433,364.25,744.978,363.982z"/>
							</g>
							<g id="XMLID_1003_">
								<path id="XMLID_1004_" fill="#FFFFFF" d="M751.281,369.75l-2.314-4.709c-0.268-0.545-0.043-1.204,0.502-1.472
									c0.545-0.27,1.205-0.044,1.473,0.502l1.361,2.77L751.281,369.75z"/>
							</g>
							<g id="XMLID_1001_">
								<path id="XMLID_1002_" fill="#FFFFFF" d="M736.648,350.854l3.926,7.986c0.269,0.546,0.043,1.205-0.502,1.473
									c-0.156,0.077-0.32,0.113-0.484,0.113c-0.406,0-0.796-0.225-0.988-0.615l-3.998-8.132l0.574-1.691L736.648,350.854z"/>
							</g>
						</g>
						<g id="XMLID_998_">
							<path id="XMLID_999_" fill="#5D839B" d="M735.745,366.608l7.663,2.843c0.199,0.073,0.419-0.028,0.492-0.227
								c0.07-0.188-0.018-0.396-0.195-0.479l-7.395-3.483c-0.365-0.172-0.801-0.016-0.973,0.35s-0.016,0.801,0.35,0.973
								C735.707,366.592,735.726,366.6,735.745,366.608z"/>
						</g>
						<g id="XMLID_989_">
							<g id="XMLID_994_" opacity="0.28">
								<path id="XMLID_995_" d="M764.625,371.945c0.251-0.147,0.404-0.418,0.404-0.71c0-0.291-0.154-0.562-0.406-0.71
									c-0.25-0.148-0.562-0.152-0.817-0.012l-1.716,0.949c-0.271,0.149-0.441,0.436-0.441,0.746c0,0.308,0.165,0.591,0.432,0.742
									c0.266,0.151,0.594,0.15,0.857-0.007L764.625,371.945z"/>
							</g>
							<g id="XMLID_990_">
								<path id="XMLID_991_" fill="#F4F4F4" d="M764.787,371.273c0.251-0.148,0.405-0.418,0.405-0.71s-0.155-0.562-0.406-0.71
									c-0.251-0.149-0.563-0.153-0.817-0.012l-1.717,0.948c-0.271,0.15-0.44,0.437-0.44,0.747c0,0.308,0.164,0.591,0.431,0.742
									s0.594,0.149,0.857-0.007L764.787,371.273z"/>
							</g>
						</g>
						<polygon id="XMLID_988_" fill="#828282" points="745.23,394.069 745.23,392.826 749.767,390.226 751.005,390.89 				"/>
						<polygon id="XMLID_987_" fill="#F4F4F4" points="745.23,394.069 722.861,381.555 723.961,381.033 745.23,392.826 				"/>
						<polygon id="XMLID_986_" opacity="0.1" points="753.754,366.298 732.492,354.25 734.601,348.049 755.818,360.424 				"/>
						<polygon id="XMLID_985_" fill="#AFAFAF" points="755.818,360.424 754.511,364.144 750.911,363.45 				"/>
						<polygon id="XMLID_984_" fill="#F4F4F4" points="750.911,363.45 729.694,351.074 734.601,348.049 755.818,360.424 				"/>
						<g id="XMLID_871_">
							<g id="XMLID_982_">
								<polygon id="XMLID_983_" fill="#3F5E5E" points="791.266,341.514 791.266,359.619 770.073,372.083 770.073,353.752 						"/>
							</g>
							<g id="XMLID_980_" opacity="0.28">
								<path id="XMLID_981_" d="M792.809,340.935v28.429l-1.599,0.929c-0.592-1.325-1.933-2.485-3.373-2.485
									c-2.767,0-4.707,2.448-5.604,5.399c-0.248,0.819-0.104,2.365-0.104,2.365l-12.058-21.819L792.809,340.935z"/>
							</g>
							<g id="XMLID_976_">
								<path id="XMLID_977_" fill="#F7E8CB" d="M790.166,343.419v15.57l-18.992,11.17v-15.772L790.166,343.419 M791.266,341.514
									l-21.193,12.238v18.33l21.193-12.464V341.514L791.266,341.514z"/>
							</g>
							<g id="XMLID_970_">
								<g id="XMLID_971_">
									<path id="XMLID_972_" d="M790.716,342.466v16.839l-20.094,11.816V354.07L790.716,342.466 M791.266,341.514l-21.193,12.238
										v18.33l21.193-12.464V341.514L791.266,341.514z"/>
								</g>
							</g>
							<g id="XMLID_968_">
								<polygon id="XMLID_969_" fill="#F7E8CB" points="780.634,360.058 770.183,372.115 770.183,370.803 779.817,359.569 						"/>
							</g>
							<g id="XMLID_966_">
								<polygon id="XMLID_967_" points="770.183,372.115 771.934,371.085 782.558,358.935 780.634,360.058 						"/>
							</g>
							<g id="XMLID_961_">
								<polyline id="XMLID_965_" points="802.242,347.443 791.376,359.651 791.376,357.909 799.144,349.25 802.242,347.443 						"/>
							</g>
							<g id="XMLID_958_">
								<polygon id="XMLID_960_" fill="#F7E8CB" points="791.376,359.651 802.242,347.443 800.166,348.65 789.535,360.709 						"/>
							</g>
							<g id="XMLID_876_">
								<g id="XMLID_954_">
									<polygon id="XMLID_957_" fill="#F7E8CB" points="791.728,341.227 802.246,347.408 780.638,360.023 770.179,353.759 							
										"/>
								</g>
								<g id="XMLID_951_">
									<polygon id="XMLID_953_" fill="#0BEA00" points="799.149,349.215 788.895,342.858 785.954,344.572 796.018,351.043 							
										"/>
								</g>
								<g id="XMLID_947_">
									<polygon id="XMLID_950_" fill="#0BEA00" points="792.963,352.827 782.722,346.484 779.822,348.147 789.89,354.622 							"/>
								</g>
								<g id="XMLID_944_">
									<polygon id="XMLID_946_" fill="#0BEA00" points="786.775,356.414 776.548,350.081 773.446,351.891 783.745,358.209 							
										"/>
								</g>
								<g id="XMLID_937_">
									<path fill="#F7E8CB" d="M802.246,347.408v2.731c0,0.549-0.292,1.057-0.767,1.334l-0.008,0.004
										c-0.477,0.277-1.065,0.279-1.544,0.005s-0.773-0.783-0.775-1.334l-0.003-0.939L802.246,347.408z"/>
								</g>
								<g id="XMLID_931_">
									<path fill="#0BEA00" d="M799.149,349.215l0.007,2.729c0.001,0.55-0.291,1.059-0.764,1.335l-0.037,0.021
										c-0.473,0.277-1.058,0.282-1.535,0.014c-0.479-0.27-0.777-0.771-0.786-1.32l-0.016-0.951L799.149,349.215z"/>
								</g>
								<g id="XMLID_927_">
									<path fill="#F7E8CB" d="M796.018,351.043l0.009,2.742c0.002,0.539-0.283,1.038-0.75,1.309
										c-0.478,0.278-1.069,0.279-1.549,0.002c-0.479-0.277-0.773-0.79-0.77-1.345l0.005-0.925L796.018,351.043z"/>
								</g>
								<g id="XMLID_921_">
									<path fill="#0BEA00" d="M792.963,352.827l0.017,2.744c0.004,0.549-0.287,1.058-0.762,1.334l-0.006,0.004
										c-0.478,0.276-1.066,0.278-1.545,0.004s-0.774-0.783-0.775-1.335l-0.002-0.956L792.963,352.827z"/>
								</g>
								<g id="XMLID_916_">
									<path fill="#F7E8CB" d="M789.89,354.622l-0.006,2.729c-0.001,0.55-0.295,1.057-0.77,1.331l-0.016,0.01
										c-0.477,0.275-1.064,0.277-1.541,0.003c-0.479-0.274-0.773-0.782-0.775-1.332l-0.004-0.949L789.89,354.622z"/>
								</g>
								<g id="XMLID_909_">
									<path fill="#0BEA00" d="M786.775,356.414l0.043,2.717c0.008,0.549-0.279,1.06-0.754,1.334
										c-0.478,0.278-1.066,0.28-1.545,0.005c-0.479-0.275-0.774-0.785-0.774-1.339v-0.922L786.775,356.414z"/>
								</g>
								<g id="XMLID_905_">
									<path fill="#F7E8CB" d="M783.745,358.209l-0.015,2.775c-0.004,0.547-0.295,1.051-0.768,1.326l-0.005,0.003
										c-0.478,0.277-1.067,0.279-1.546,0.003c-0.479-0.275-0.773-0.785-0.773-1.337v-0.957L783.745,358.209z"/>
								</g>
								<g id="XMLID_877_" opacity="0.58">
									<g id="XMLID_893_">
										<path id="XMLID_894_" d="M799.149,349.208l3.097-1.801v2.731c0,0.549-0.292,1.057-0.767,1.334l-0.008,0.004
											c-0.477,0.277-1.065,0.279-1.544,0.005s-0.773-0.783-0.775-1.334L799.149,349.208z"/>
									</g>
									<g id="XMLID_890_">
										<path id="XMLID_891_" d="M799.156,351.945c0.001,0.55-0.291,1.059-0.764,1.335l-0.037,0.021
											c-0.473,0.277-1.058,0.282-1.535,0.014c-0.479-0.27-0.777-0.771-0.786-1.32l-0.016-0.951l3.131-1.828L799.156,351.945z"/>
									</g>
									<g id="XMLID_886_">
										<path id="XMLID_887_" d="M796.018,351.043l0.009,2.742c0.002,0.539-0.283,1.038-0.75,1.309
											c-0.478,0.278-1.069,0.279-1.549,0.002c-0.453-0.263-0.731-0.737-0.759-1.256l0.011,1.73
											c0.004,0.549-0.287,1.058-0.762,1.334l-0.006,0.004c-0.478,0.276-1.066,0.278-1.545,0.004s-0.774-0.783-0.775-1.335
											l-0.002-0.956l3.073-1.795L796.018,351.043z"/>
									</g>
									<g id="XMLID_883_">
										<path id="XMLID_884_" d="M786.775,356.414l0.006,0.412l-0.002-0.412l3.111-1.792l-0.006,2.729
											c-0.001,0.55-0.295,1.057-0.77,1.331l-0.016,0.01c-0.477,0.275-1.064,0.277-1.541,0.003
											c-0.462-0.266-0.747-0.75-0.768-1.278l0.027,1.714c0.008,0.549-0.279,1.059-0.754,1.334
											c-0.477,0.278-1.066,0.28-1.545,0.005c-0.479-0.276-0.774-0.785-0.774-1.339v-0.921v-0.001L786.775,356.414z"/>
									</g>
									<g id="XMLID_879_">
										<path id="XMLID_880_" d="M783.745,358.209l-0.015,2.775c-0.004,0.547-0.295,1.051-0.768,1.326l-0.005,0.003
											c-0.478,0.277-1.067,0.279-1.546,0.003c-0.479-0.275-0.773-0.785-0.773-1.337v-0.957L783.745,358.209z"/>
									</g>
								</g>
							</g>
						</g>
						<polygon id="XMLID_870_" fill="#F4F4F4" points="740.466,384.787 745.23,387.551 745.23,385.557 740.466,382.792 				"/>
						<polygon id="XMLID_868_" fill="#252B2B" points="729.775,381.033 739.589,386.739 739.589,382.984 729.775,377.278 				"/>
						<polygon id="XMLID_867_" fill="#F4BF32" points="740.466,385.773 745.23,388.537 745.23,387.541 740.466,384.776 				"/>
						<polygon id="XMLID_864_" fill="#F4BF32" points="723.961,376.218 728.724,378.983 728.724,377.986 723.961,375.222 				"/>
						<polygon id="XMLID_863_" fill="#F4F4F4" points="723.961,375.221 728.724,377.985 728.724,375.992 723.961,373.227 				"/>
					</g>
					<g id="location3-g">
						<g id="location3">
							<path fill="#FFFFFF" d="M760.571,239.989c-12.941,7.47-23.43,25.639-23.389,40.508c0.043,14.862,10.6,20.885,23.539,13.414
								c12.938-7.469,23.426-25.641,23.385-40.505C784.061,238.538,773.504,232.52,760.571,239.989z"/>
							<path fill="#FF1022" d="M760.559,236.43c-14.645,8.457-26.52,29.025-26.473,45.854c0.047,16.824,12.002,23.635,26.646,15.181
								c14.639-8.454,26.516-29.023,26.469-45.846C787.153,234.79,775.2,227.979,760.559,236.43z M760.721,293.911
								c-12.939,7.471-23.496,1.448-23.539-13.414c-0.041-14.869,10.447-33.038,23.389-40.508c12.934-7.469,23.49-1.451,23.535,13.417
								C784.147,268.27,773.659,286.442,760.721,293.911z"/>
							<path fill="#FF1022" d="M725.015,284.971c0.021-0.461,0.048-0.92,0.083-1.385c0.021-0.233,0.037-0.477,0.061-0.711
								c0.042-0.455,0.089-0.914,0.142-1.375c0.023-0.225,0.048-0.438,0.074-0.662c0.041-0.319,0.092-0.646,0.136-0.965
								c0.066-0.479,0.139-0.965,0.22-1.447c0.057-0.321,0.112-0.647,0.172-0.977c0.086-0.469,0.178-0.938,0.271-1.404
								c0.075-0.371,0.154-0.744,0.237-1.117c0.067-0.313,0.143-0.627,0.215-0.94c0.1-0.408,0.201-0.816,0.309-1.229
								c0.079-0.309,0.157-0.614,0.24-0.926c0.136-0.492,0.275-0.988,0.423-1.483c0.054-0.185,0.104-0.365,0.161-0.554
								c0.205-0.68,0.421-1.354,0.646-2.033c0.334-0.997,0.693-1.987,1.07-2.979c0.095-0.248,0.188-0.498,0.287-0.746
								c0.33-0.841,0.669-1.68,1.024-2.514c0.058-0.127,0.104-0.258,0.162-0.388c0.397-0.922,0.819-1.84,1.26-2.754
								c0.115-0.237,0.23-0.479,0.352-0.715c0.354-0.727,0.719-1.438,1.092-2.156c0.116-0.221,0.229-0.438,0.352-0.66
								c0.479-0.896,0.976-1.786,1.48-2.665c0.101-0.164,0.197-0.328,0.298-0.492c0.448-0.769,0.911-1.523,1.391-2.273
								c0.141-0.221,0.275-0.438,0.419-0.66c0.588-0.914,1.188-1.815,1.813-2.709c0.098-0.133,0.19-0.264,0.285-0.396
								c0.646-0.915,1.313-1.816,1.995-2.703c0.104-0.139,0.207-0.275,0.313-0.412c0.211-0.271,0.429-0.539,0.645-0.809
								c0.273-0.343,0.546-0.687,0.821-1.021c0.227-0.271,0.453-0.537,0.681-0.803c0.27-0.314,0.532-0.633,0.802-0.939
								c0.558-0.631,1.114-1.252,1.684-1.856c0.034-0.033,0.063-0.07,0.1-0.104c0.604-0.645,1.211-1.264,1.828-1.875
								c0.391-0.387,0.783-0.77,1.182-1.145c0.111-0.104,0.226-0.215,0.334-0.32c0.521-0.486,1.053-0.961,1.581-1.43
								c0.146-0.127,0.292-0.25,0.438-0.375c0.394-0.336,0.782-0.67,1.182-0.992c0.194-0.162,0.396-0.318,0.593-0.479
								c0.354-0.281,0.705-0.562,1.063-0.83c0.214-0.162,0.425-0.318,0.64-0.479c0.354-0.263,0.705-0.52,1.063-0.771
								c0.211-0.146,0.422-0.302,0.634-0.441c0.386-0.266,0.769-0.521,1.151-0.771c0.188-0.119,0.364-0.242,0.553-0.354
								c0.566-0.361,1.145-0.713,1.723-1.043c0.553-0.32,1.104-0.619,1.648-0.906c0.146-0.074,0.285-0.147,0.432-0.223
								c0.488-0.253,0.979-0.49,1.463-0.719c0.063-0.023,0.12-0.062,0.182-0.084c0.505-0.23,1.005-0.441,1.505-0.646
								c0.526-0.215,1.058-0.412,1.574-0.604c0.137-0.05,0.271-0.104,0.396-0.146c0.647-0.224,1.294-0.422,1.932-0.599
								c0.376-0.104,0.751-0.188,1.121-0.276c0.173-0.039,0.351-0.09,0.521-0.127c0.547-0.117,1.087-0.22,1.621-0.301
								c0.021-0.003,0.043-0.008,0.063-0.01c0.486-0.07,0.97-0.134,1.444-0.179c0.161-0.014,0.316-0.021,0.479-0.03
								c0.35-0.023,0.688-0.05,1.029-0.06c0.152-0.004,0.306-0.006,0.454-0.008c0.354-0.004,0.709,0.002,1.06,0.018
								c0.121,0.004,0.243,0.009,0.363,0.016c0.45,0.021,0.896,0.063,1.34,0.116c0.092,0.016,0.187,0.026,0.275,0.041
								c0.354,0.052,0.714,0.104,1.063,0.175c0.117,0.021,0.236,0.048,0.354,0.068c0.396,0.089,0.798,0.188,1.188,0.293
								c0.022,0.009,0.054,0.016,0.076,0.021c0.409,0.118,0.813,0.258,1.21,0.4c0.104,0.039,0.212,0.082,0.317,0.123
								c0.32,0.125,0.639,0.261,0.945,0.401c0.08,0.037,0.162,0.069,0.244,0.108c0.401,0.189,0.8,0.396,1.188,0.625l-0.007-0.002
								c0.002,0,0.005,0,0.007,0.002l-6.779-4.05c-0.063-0.039-0.132-0.075-0.192-0.109c-0.324-0.186-0.651-0.354-0.987-0.514
								c-0.08-0.041-0.164-0.075-0.245-0.111c-0.188-0.089-0.375-0.177-0.566-0.257c-0.125-0.054-0.254-0.102-0.381-0.146
								c-0.104-0.043-0.213-0.084-0.314-0.123c-0.396-0.145-0.789-0.278-1.191-0.396c-0.007,0-0.014-0.002-0.019-0.002
								c-0.025-0.009-0.058-0.018-0.077-0.021c-0.393-0.104-0.784-0.205-1.188-0.289c-0.116-0.021-0.236-0.051-0.356-0.069
								c-0.122-0.023-0.244-0.058-0.369-0.074c-0.229-0.039-0.459-0.066-0.688-0.104c-0.092-0.014-0.185-0.025-0.273-0.041
								c-0.396-0.049-0.795-0.086-1.197-0.109c-0.046-0.005-0.098-0.005-0.143-0.005c-0.122-0.011-0.244-0.013-0.362-0.017
								c-0.354-0.017-0.701-0.021-1.063-0.019c-0.146,0.002-0.302,0.005-0.452,0.011c-0.119,0.004-0.233,0.002-0.354,0.008
								c-0.226,0.011-0.45,0.029-0.675,0.047c-0.159,0.018-0.316,0.021-0.479,0.035c-0.479,0.045-0.96,0.104-1.446,0.177
								c-0.021,0.006-0.042,0.008-0.063,0.011c-0.003,0-0.007,0-0.008,0c-0.531,0.084-1.068,0.185-1.611,0.302
								c-0.177,0.036-0.354,0.086-0.527,0.127c-0.337,0.08-0.671,0.153-1.012,0.248c-0.033,0.01-0.066,0.02-0.104,0.027
								c-0.64,0.178-1.279,0.371-1.935,0.598c-0.132,0.045-0.266,0.102-0.396,0.146c-0.522,0.188-1.052,0.389-1.581,0.604
								c-0.07,0.023-0.143,0.053-0.211,0.079c-0.431,0.181-0.856,0.366-1.291,0.563c-0.063,0.029-0.12,0.063-0.184,0.086
								c-0.48,0.229-0.974,0.466-1.464,0.716c-0.144,0.073-0.283,0.147-0.431,0.227c-0.55,0.289-1.098,0.586-1.649,0.905
								c-0.576,0.334-1.146,0.685-1.72,1.043c-0.188,0.112-0.366,0.237-0.551,0.354c-0.388,0.254-0.771,0.507-1.156,0.771
								c-0.211,0.146-0.42,0.296-0.633,0.439c-0.354,0.25-0.707,0.507-1.063,0.771c-0.216,0.156-0.429,0.314-0.64,0.479
								c-0.354,0.271-0.71,0.548-1.063,0.83c-0.197,0.156-0.396,0.313-0.596,0.479c-0.396,0.321-0.791,0.655-1.186,0.993
								c-0.145,0.125-0.29,0.244-0.433,0.371c-0.532,0.468-1.063,0.942-1.582,1.436c-0.109,0.104-0.216,0.207-0.325,0.311
								c-0.348,0.328-0.695,0.658-1.041,0.998c-0.051,0.05-0.1,0.104-0.148,0.152c-0.615,0.611-1.229,1.232-1.827,1.875
								c-0.03,0.034-0.063,0.068-0.1,0.104c-0.566,0.604-1.126,1.229-1.678,1.856c-0.057,0.062-0.108,0.116-0.162,0.178
								c-0.218,0.25-0.431,0.515-0.646,0.77c-0.226,0.269-0.448,0.523-0.673,0.798c-0.274,0.336-0.552,0.684-0.825,1.021
								c-0.214,0.271-0.432,0.535-0.644,0.811c-0.039,0.052-0.081,0.101-0.121,0.146c-0.063,0.086-0.126,0.177-0.191,0.266
								c-0.682,0.886-1.344,1.784-1.987,2.698c-0.064,0.097-0.14,0.184-0.202,0.271c-0.027,0.043-0.061,0.09-0.085,0.131
								c-0.622,0.892-1.229,1.793-1.813,2.705c-0.059,0.092-0.117,0.174-0.176,0.264c-0.082,0.132-0.159,0.271-0.242,0.398
								c-0.477,0.75-0.938,1.51-1.39,2.271c-0.071,0.121-0.146,0.236-0.219,0.359c-0.026,0.043-0.055,0.092-0.078,0.137
								c-0.512,0.879-1.005,1.771-1.483,2.664c-0.039,0.07-0.081,0.146-0.119,0.215c-0.078,0.146-0.146,0.303-0.227,0.445
								c-0.376,0.717-0.739,1.438-1.096,2.156c-0.072,0.146-0.152,0.297-0.229,0.441c-0.044,0.095-0.081,0.186-0.125,0.271
								c-0.438,0.912-0.854,1.83-1.261,2.756c-0.014,0.024-0.026,0.06-0.04,0.084c-0.044,0.104-0.081,0.203-0.123,0.301
								c-0.354,0.834-0.697,1.671-1.022,2.514c-0.057,0.136-0.111,0.271-0.166,0.4c-0.045,0.113-0.08,0.229-0.122,0.345
								c-0.376,0.991-0.735,1.983-1.07,2.981c-0.005,0.021-0.014,0.039-0.021,0.063c-0.222,0.654-0.427,1.313-0.626,1.978
								c-0.059,0.182-0.104,0.362-0.158,0.547c-0.108,0.377-0.229,0.754-0.328,1.129c-0.032,0.119-0.063,0.242-0.097,0.359
								c-0.084,0.311-0.164,0.616-0.239,0.926c-0.105,0.41-0.209,0.819-0.311,1.229c-0.074,0.313-0.146,0.627-0.217,0.938
								c-0.048,0.219-0.104,0.438-0.147,0.656c-0.03,0.152-0.059,0.309-0.091,0.465c-0.097,0.469-0.187,0.938-0.271,1.405
								c-0.063,0.323-0.119,0.646-0.173,0.972c-0.082,0.481-0.15,0.967-0.223,1.444c-0.029,0.229-0.07,0.455-0.104,0.683
								c-0.014,0.097-0.021,0.188-0.033,0.287c-0.027,0.223-0.051,0.44-0.074,0.66c-0.053,0.459-0.1,0.92-0.14,1.375
								c-0.021,0.239-0.041,0.479-0.06,0.715c-0.035,0.463-0.063,0.924-0.084,1.383c-0.015,0.209-0.022,0.42-0.031,0.627
								c-0.022,0.658-0.039,1.313-0.035,1.973c0.025,9.644,3.042,16.688,7.797,21.063c7.209,6.633,27.188,26.37,28.236,27.409l6.778,4.049
								c-1.054-1.037-21.025-20.775-28.234-27.407c-4.756-4.375-7.771-11.422-7.802-21.063c0-0.65,0.018-1.313,0.038-1.971
								C724.994,285.389,725.008,285.178,725.015,284.971z"/>
								<path fill="#FF4A1E" d="M760.53,225.768c-19.793,11.427-35.787,39.129-35.725,61.873c0.029,9.643,3.045,16.69,7.799,21.065
									c7.211,6.63,27.186,26.368,28.238,27.406c1.041-2.247,20.836-44.947,27.984-59.865c4.717-9.845,7.682-20.346,7.652-29.986
									C796.417,223.518,780.317,214.344,760.53,225.768z M760.733,297.463c-14.646,8.455-26.6,1.645-26.646-15.18
									c-0.047-16.828,11.828-37.396,26.473-45.854c14.641-8.451,26.594-1.641,26.643,15.188
									C787.249,268.441,775.372,289.01,760.733,297.463z"/>
								<polygon fill="#CC945B" points="750.713,291.392 749.417,290.387 757.476,273.684 758.771,274.689 				"/>
								<g>
									<path fill="#FFCC66" d="M754.995,280.67c-3.982-3.093-3.224-13.865,1.694-24.062c4.92-10.194,12.137-15.951,16.12-12.858
										c3.982,3.093,3.224,13.866-1.695,24.061C766.196,278.006,758.979,283.763,754.995,280.67z"/>
									<path fill="#F7931E" d="M755.264,280.855c0.243,0.16,0.496,0.288,0.76,0.389c0.286-0.892,0.59-1.801,0.91-2.724
										c0.852,0.772,1.597,1.683,2.229,2.705c0.277-0.086,0.558-0.189,0.844-0.315c-0.753-1.291-1.663-2.432-2.729-3.369
										c0.428-1.205,0.883-2.432,1.365-3.677c1.4,1.159,2.531,2.682,3.377,4.449c-0.24,0.635-0.474,1.266-0.699,1.891
										c0.387-0.241,0.777-0.516,1.172-0.818l0,0c0.004-0.003,0.009-0.007,0.014-0.012c0.009-0.006,0.017-0.012,0.024-0.018
										c0.001-0.001,0.001-0.002,0.002-0.004c0.216-0.168,0.434-0.342,0.651-0.527c-0.074-0.191-0.158-0.375-0.24-0.561
										c0.459-1.208,0.94-2.432,1.448-3.669c0.31,0.724,0.574,1.481,0.792,2.27c0.219-0.24,0.438-0.488,0.655-0.745
										c-0.271-0.914-0.604-1.788-0.994-2.614c0.487-1.162,0.993-2.333,1.521-3.512c0.536,1.193,0.947,2.488,1.228,3.853
										c0.214-0.302,0.425-0.613,0.635-0.932c-0.333-1.404-0.801-2.735-1.396-3.955c0.495-1.091,1.008-2.184,1.535-3.28
										c0.017-0.033,0.032-0.065,0.048-0.098c0.655,1.437,1.131,3.023,1.41,4.703c0.209-0.374,0.415-0.757,0.618-1.146
										c-0.341-1.625-0.857-3.159-1.542-4.55c0.544-1.104,1.092-2.188,1.645-3.249c0.644,1.434,1.109,3.017,1.382,4.688
										c0.198-0.46,0.388-0.918,0.57-1.377c-0.331-1.521-0.816-2.96-1.45-4.273c0.564-1.063,1.129-2.104,1.696-3.118
										c0.471,1.096,0.839,2.271,1.099,3.507c0.162-0.549,0.313-1.094,0.45-1.633c-0.273-0.98-0.614-1.919-1.021-2.804
										c0.58-1.018,1.162-2.009,1.741-2.968c0.074,0.188,0.146,0.378,0.217,0.57c0.036-0.361,0.063-0.717,0.083-1.069l0,0
										c0.037-0.603,0.052-1.188,0.044-1.753c-0.079,0.128-0.159,0.261-0.238,0.391c-0.821-1.646-1.875-3.091-3.16-4.234
										c0.577-0.906,1.151-1.779,1.721-2.615c-0.19-0.251-0.396-0.48-0.619-0.683c-0.594,0.872-1.191,1.783-1.794,2.731
										c-1.424-1.086-2.973-1.733-4.568-1.985c0.202-0.323,0.403-0.65,0.604-0.966c-0.562,0.288-1.135,0.648-1.713,1.075
										c-0.003,0.004-0.006,0.009-0.01,0.015c-0.338,0.249-0.679,0.514-1.021,0.808c0.182-0.01,0.362-0.015,0.544-0.016
										c-0.638,1.061-1.277,2.159-1.918,3.294c-0.615-0.006-1.233,0.04-1.851,0.145c-0.316,0.4-0.631,0.82-0.942,1.253
										c0.735-0.202,1.476-0.32,2.211-0.353c-0.591,1.066-1.179,2.162-1.767,3.288c-0.851,0.012-1.707,0.128-2.559,0.35
										c-0.238,0.415-0.475,0.838-0.707,1.271c0.899-0.313,1.81-0.501,2.717-0.563c-0.547,1.066-1.091,2.16-1.631,3.273
										c-0.864,0.019-1.732,0.145-2.595,0.382c-0.181,0.407-0.355,0.813-0.522,1.22c0.863-0.296,1.736-0.475,2.606-0.54
										c-0.523,1.096-1.03,2.185-1.519,3.267c-0.735,0.013-1.474,0.106-2.208,0.275c-0.128,0.382-0.249,0.762-0.365,1.141
										c0.698-0.195,1.4-0.314,2.101-0.36c-0.488,1.102-0.958,2.192-1.409,3.272c-0.494-0.002-0.991,0.032-1.488,0.104
										c-0.081,0.361-0.157,0.723-0.227,1.079c0.428-0.073,0.854-0.116,1.28-0.132c-0.457,1.113-0.893,2.213-1.307,3.298
										c-0.146-0.006-0.292-0.017-0.438-0.017c-0.034,0.354-0.061,0.698-0.08,1.039c0.044,0,0.088,0.004,0.131,0.004
										c-0.051,0.135-0.104,0.273-0.153,0.407c-0.036,0.849-0.028,1.658,0.025,2.424c0.32-0.913,0.662-1.846,1.015-2.783
										c1.544,0.151,3.049,0.695,4.438,1.664c-0.479,1.235-0.934,2.451-1.36,3.644c-1.267-0.951-2.629-1.562-4.034-1.857
										c0.04,0.38,0.098,0.743,0.162,1.096c1.23,0.307,2.422,0.875,3.531,1.726C755.897,278.927,755.569,279.903,755.264,280.855z
										 M763.908,273.565c-0.513,1.232-1.002,2.449-1.465,3.647c-0.889-1.698-2.035-3.164-3.43-4.297
										c0.466-1.184,0.958-2.384,1.471-3.593C761.889,270.417,763.035,271.87,763.908,273.565z M765.881,269.015
										c-0.534,1.182-1.045,2.352-1.537,3.511c-0.903-1.629-2.053-3.03-3.438-4.106c-0.01-0.007-0.019-0.013-0.027-0.021
										c0.499-1.161,1.021-2.331,1.561-3.505c0.042,0.031,0.084,0.059,0.125,0.091C763.913,266.032,765.022,267.41,765.881,269.015z
										 M767.943,264.629c-0.085,0.175-0.17,0.346-0.255,0.521c-0.465,0.965-0.912,1.921-1.351,2.874
										c-0.888-1.555-2.004-2.897-3.341-3.937c-0.046-0.035-0.092-0.065-0.138-0.101c0.294-0.629,0.591-1.26,0.896-1.891
										c0.251-0.521,0.505-1.035,0.758-1.547c0.047,0.035,0.096,0.067,0.142,0.103C765.988,261.689,767.086,263.048,767.943,264.629z
										 M770.082,260.388c-0.558,1.068-1.114,2.162-1.667,3.28c-0.887-1.546-1.999-2.878-3.329-3.912
										c-0.043-0.033-0.087-0.063-0.13-0.096c0.578-1.147,1.161-2.271,1.747-3.369c0.014,0.01,0.027,0.019,0.04,0.029
										C768.103,257.375,769.218,258.767,770.082,260.388z M772.295,256.294c-0.576,1.026-1.15,2.077-1.726,3.159
										c-0.896-1.596-2.031-2.969-3.395-4.028c-0.001-0.001-0.003-0.003-0.004-0.003c0.61-1.126,1.224-2.223,1.838-3.288
										C770.353,253.224,771.455,254.644,772.295,256.294z M774.583,252.374c-0.591,0.973-1.184,1.982-1.776,3.02
										c-0.867-1.613-1.973-3.014-3.306-4.106c0.647-1.104,1.293-2.171,1.937-3.198C772.735,249.229,773.787,250.693,774.583,252.374z
										 M766.1,245.682c1.622,0.168,3.201,0.771,4.646,1.845c-0.646,1.034-1.295,2.111-1.945,3.226
										c-1.457-1.018-3.035-1.594-4.653-1.771C764.798,247.843,765.45,246.745,766.1,245.682z M763.588,249.976
										c1.641,0.096,3.244,0.626,4.719,1.633c-0.613,1.071-1.228,2.176-1.841,3.313c-1.472-0.969-3.058-1.505-4.68-1.637
										C762.385,252.155,762.985,251.05,763.588,249.976z M761.254,254.295c1.644,0.054,3.255,0.542,4.742,1.502
										c-0.583,1.099-1.164,2.224-1.743,3.377c-1.47-0.941-3.051-1.456-4.665-1.569C760.138,256.482,760.695,255.375,761.254,254.295z
										 M759.09,258.623c1.633,0.039,3.235,0.511,4.719,1.444c-0.244,0.496-0.49,0.995-0.734,1.502
										c-0.312,0.646-0.617,1.29-0.916,1.933c-1.456-0.931-3.021-1.438-4.619-1.557C758.041,260.842,758.555,259.733,759.09,258.623z
										 M757.081,262.959c1.611,0.053,3.193,0.524,4.657,1.448c-0.54,1.174-1.063,2.339-1.562,3.494
										c-1.429-0.938-2.966-1.465-4.537-1.612C756.101,265.188,756.583,264.077,757.081,262.959z M753.881,270.666
										c0.423-1.106,0.873-2.229,1.338-3.362c1.582,0.091,3.13,0.585,4.562,1.521c-0.513,1.203-1.003,2.393-1.468,3.567
										C756.92,271.427,755.421,270.862,753.881,270.666z"/>
								</g>
						</g>
					</g>
				</g>
			</g>
		</svg>	
								
		<div class="map-3d-cloud-g">
			<img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud1" alt="map3dMCloud">
			<img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud2" alt="map3dMCloud">
			<img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud3" alt="map3dMCloud">        			
		</div>
		<img src="assets/images/map3D/map-3d-btn.svg" class="map-3d-btn" alt="map3dBtn">

	</div>
 	<img src="assets/images/map3D/map-3d-Cloud.svg" id="map-3d-Cloud12p" alt="map3dMCloud">
	<img src="assets/images/map3D/map-3d-Cloud.svg" id="map-3d-Cloud13p" alt="map3dMCloud"> 
</div>


 
<!-- ======shop-order-show================================= -->

 <div class="shop-order-show">
     <div class="shop-order-show-title">
        <img src="assets/images/shopOrderShow/shop-order-show-h1.png" class="shop-order-show-h1" alt="shopOrderShowH1">
        <div class="shop-order-show-txt wow fadeInUp">
        	<span class="">線上預訂攤車美食</span>
         	<p>為您省去等待的時間，免排隊!</p>
        </div>
    </div>

    <div class="shop-order-show-container wow fadeInUp">
        <div class="shop-order-show-p1-g">            
            <img src="assets/images/shopOrderShow/shop-order-show-crown.svg" class="shop-order-show-crown" alt="shopOrderShowCrown">
      		<img src="assets/images/shopOrderShow/shop-order-show-p1.png" class="shop-order-show-p1" alt="shopOrderShowP1">
            <img src="assets/images/shopOrderShow/shop-order-show-sign.png" class="shop-order-show-sign" alt="shopOrderShowSign">
            <img src="assets/images/shopOrderShow/shop-order-show-shine.png" class="shop-order-show-shine" alt="shopOrderShowShine">    
        </div>
        <div class="shop-order-show-p2-g">            
            <img src="assets/images/shopOrderShow/shop-order-show-crown.svg" class="shop-order-show-crown" alt="shopOrderShowCrown">
      		<img src="assets/images/shopOrderShow/shop-order-show-p1.png" class="shop-order-show-p1" alt="shopOrderShowP1">
            <img src="assets/images/shopOrderShow/shop-order-show-sign.png" class="shop-order-show-sign" alt="shopOrderShowSign">
            <img src="assets/images/shopOrderShow/shop-order-show-shine.png" class="shop-order-show-shine" alt="shopOrderShowShine">    
        </div>
        <div class="shop-order-show-p3-g">            
            <img src="assets/images/shopOrderShow/shop-order-show-crown.svg" class="shop-order-show-crown" alt="shopOrderShowCrown">
      		<img src="assets/images/shopOrderShow/shop-order-show-p1.png" class="shop-order-show-p1" alt="shopOrderShowP1">
            <img src="assets/images/shopOrderShow/shop-order-show-sign.png" class="shop-order-show-sign" alt="shopOrderShowSign">
            <img src="assets/images/shopOrderShow/shop-order-show-shine.png" class="shop-order-show-shine" alt="shopOrderShowShine">    
        </div>

		<img src="assets/images/map3D/map-3d-Cloud.svg" id="map-3d-Cloud10p" alt="map3dMCloud">
		<img src="assets/images/map3D/map-3d-Cloud.svg" id="map-3d-Cloud11p" alt="map3dMCloud">
	    <div class="map-3d-cloud-g">
	      <img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud4" alt="map3dMCloud">
	      <img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud6" alt="map3dMCloud">
	      <img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud7" alt="map3dMCloud">               
	
                   
	    </div>
    </div>
</div>

<!-- ===VideoShow========================================== -->

<div class="VideoShow">
 	<div class="VideoShow-container">
 		<div class="">
 			<div class="VideoShow-title col-sm-12 ">
 				<img src='assets/images/VideoShow/videoTitle.png' alt="videoTitle" class="VideoShow-videoTitle"/>
 				<div class="VideoShowTxt-g wow fadeInUp">
 					<div class="VideoShow-txt1">最新最熱門</div>
 					<div class="VideoShow-txt2">攤車直擊</div>
 				</div>
 			</div>		

			
			<img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud5mr" alt="map3dMCloud">

			<div class="VideoShow-video wow rubberBand">
				<iframe class="VideoShow-iframe" src="https://www.youtube.com/embed/e7db6mTd51w" frameborder="0" allowfullscreen></iframe>
				<div class="VideoShow-tv">
					<img src="assets/images/VideoShow/video-show-TV.png" alt="">
				</div>
				<div class="VideoShow-icon">
	        		<a href="pages/videoArea.php">
	        			<img src='assets/images/VideoShow/videoShowMoreBtn.svg' alt="videoShowBtn"/></a>
	    		</div>

			
			
 		</div>
 		<div class="map-3d-cloud-g">
		      
		      <img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud6" alt="map3dMCloud">
		      <img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud7" alt="map3dMCloud">             
		      <img src="assets/images/map3D/map-3d-Cloud.svg" class="map-3d-Cloud2" alt="map3dMCloud">
		    
		    </div>
 		 <img src="assets/images/map3D/map-3d-Cloud.svg" id="map-3d-Cloud8p" alt="map3dMCloud">
		 <img src="assets/images/map3D/map-3d-Cloud.svg" id="map-3d-Cloud9p" alt="map3dMCloud"> 
 		<div class="clearfix"></div>
 		</div>
 	</div>
</div>


<!-- ===promo-show========================================= -->

<div class="promo-show">

	<div class="promo-show-title">
	  <img src='assets/images/promoShow/promo-show-h1.png' class="promo-show-h1" alt="promoShowH1"/>
	  <div class="promo-show-txt">
		<p class="promo-show-date">2017/06/01-07/01</p>
		<p class="promo-show-from">可至下列攤車</p>
			<span>下載<strong>買一送一</strong>優惠劵!</span>
	  </div>
	</div>
    <img src='assets/images/map3D/map-3d-Cloud.svg' class="map-3d-Cloud4" alt="map3dMCloud"/>
      <img src='assets/images/map3D/map-3d-Cloud.svg' class="map-3d-Cloud6" alt="map3dMCloud"/>
      <img src='assets/images/map3D/map-3d-Cloud.svg' class="map-3d-Cloud7" alt="map3dMCloud"/>               
      <div class="map-3d-cloud-g">
         <img src='assets/images/map3D/map-3d-Cloud.svg' class="map-3d-Cloud2" alt="map3dMCloud"/>
         <!-- <img src='assets/images/map3D/map-3d-Cloud.svg' class="map-3d-Cloud3" alt="map3dMCloud"/>  -->                   
      </div>
    <div>
        <div class="promo-show-floorScene">
            <!-- <img src='assets/images/promoShow/promo-show-board.png' class="promo-show-board" alt="promoShowBoard"/> -->

			<div class="promo-show-moveTruck1"> 
				<img src='assets/images/promoShow/promo-show-truck1.png' class="promo-show-truck1" alt="promoShowTruck1"/>
				<img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-ar" alt="promoShowWheel"/>
                <img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-al" alt="promoShowWheel"/>
			</div> 
			<div class="promo-show-moveTruck2"> 
				<img src='assets/images/promoShow/promo-show-truck2.png' class="promo-show-truck2" alt="promoShowTruck2"/>
				<img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-br" alt="promoShowWheel"/>
                <img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-bl" alt="promoShowWheel"/>
			</div> 
			<div class="promo-show-moveTruck3"> 
				<img src='assets/images/promoShow/promo-show-truck3.png' class="promo-show-truck3" alt="promoShowTruck3"/>
				<img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-cr" alt="promoShowWheel"/>
                <img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-cl" alt="promoShowWheel"/>
			</div> 

   <!--          <div class="promo-show-moveTruck4">    
                <img src='assets/images/promoShow/promo-show-truck4.png' class="promo-show-truck4" alt="promoShowTruck4"/>
                <img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-ar" alt="promoShowWheel"/>
                <img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-al" alt="promoShowWheel"/>
                <img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-br" alt="promoShowWheel"/>
                <img src='assets/images/promoShow/promo-show-wheel.svg' class="promo-show-wheel-bl" alt="promoShowWheel"/>
               
             </div> -->
        </div>
    </div>

	<div class="promo-show-mountain-g"> 
		<div class="promo-show-mountain"></div> 
		<!-- <img src='asss/images/promoShow/promo-show-mountain.svg' class="promo-show-mountain" alt="promoShowMountain"/> -->
	</div>

	<div class="promo-show-mScene"> 
	  		<div class="promo-show-sea"></div>
	  		<div class="promo-show-field"></div>
	  		<div class="promo-show-building"></div>
	</div> 
	<div class="promo-show-photo">
        <a href="javascript:;" class="promo-show-photo1"><img src='assets/images/promoShow/promo-show-photo1.JPG'  alt="promoShowPhoto1"/></a>
        <a href="javascript:;" class="promo-show-photo2"><img src='assets/images/promoShow/promo-show-photo2.JPG'  alt="promoShowPhoto2"/></a>
        <a href="javascript:;" class="promo-show-photo3"><img src='assets/images/promoShow/promo-show-photo3.JPG'  alt="promoShowPhoto3"/></a>
        <a href="javascript:;"><img src='assets/images/promoShow/promo-show-more.png' class="promo-show-more" alt="promoShowMore"/></a>
    </div>
	<div class="promo-show-ground">
        <div class="sceneGround">	
	        <div class="morningGround"></div>
	        <div class="afternoonGround"></div>
	        <div class="nightGround"></div>
        </div>
	</div>

	<div class="promo-show-bg">
		<div class="morningBg"></div>
		<div class="afternoonBg"></div>
		<div class="nightBg">
			<div class="staring">
				<img class="moon" src="assets/images/promoShow/moon.svg" alt="">
				<img class="stars" src="assets/images/promoShow/stars.svg" alt="">

			</div>

		</div>
	</div>
</div>



</body>
</html>

<!-- above for index -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="assets/js/jquery.animateCount.min.js"></script>
<script src="assets/js/home.js"></script>
<script src="assets/js/videoPage.js"></script>
<script src="assets/js/searchbox.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/main3.js"></script>