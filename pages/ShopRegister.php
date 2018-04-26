<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
<link rel="stylesheet" type="text/css" href="../assets/css/index.css">
<link rel="stylesheet" type="text/css" href="../assets/css/shopRegister.css">
<head>
	<meta charset="UTF-8">
	<title>攤商註冊</title>
</head>
<body>
<div class="ShopRegister-width">
 <div class="con1 col-sm-1 col-xs-1"></div>
	<div class="col-sm-10 col-xs-10">
	     <div class="ShopRegister-Shopnav">
	     	<a href="../index.php"><img src="../assets/images/Shoplogo.png"></a>
	     </div>
	 </div>
	 <div class="clearfix"></div>
 <div class="con1 col-sm-2 col-xs-0"></div>
	<div class="col-sm-8 col-xs-12">
	 <div class="ShopRegister-box">
		 <div class="con1 col-sm-1 col-xs-1"></div>
		 <div class="con1 col-sm-10 col-xs-10">
		  <form method="post" action="../common/shopRegisterf.php">
		  	<div class="ShopRegister-account">
		  	 <h5>設定帳戶</h5>
		  	   <ul>
		  	    <li>
		  	     <div class="ShopRegister-text">攤商帳號：<span class="ShopRegister-inp"><input type="text" name="shopId" id="shopRegisteraccount" required/></span>
		  	     </div>
		  	     <span id="shopRegister-idDiv"></span>

		  	    
		  	     <div class="clearfix"></div>
		  	    </li>
		  	    <li>
		  	     <div class="ShopRegister-text">設定密碼：<span class="ShopRegister-inp"><input type="password" id="username" name="password" required/>
		  	    <div class="ef"><input type="checkbox" id="showPwd"><label for="showPwd">顯示密碼</label></div>
		  	     </span></div>
		  	     
		  	     

		  	     <div id="feedback"></div>
		  	     
		  	     <div class="clearfix"></div>
		  	    </li>
		  	    <li>
		  	     <div class="ShopRegister-text">確認密碼：<span class="ShopRegister-inp"><input type="password" id="shopRegisterPsw2" required/></span></div>
		  	     <span id="shopRegister-pswDiv2"></span>
		  	     
		  	     <div class="clearfix"></div>	
		  	    </li>
		  	      						
		  	   </ul>
		  	   <div class="clearfix"></div>
		  	</div>
		  	
		  	<div class="ShopRegister-shopinfo">
		  	 <h5>攤商資料</h5>
		  	   <ul>
		  	    <li>
		  	     <div class="ShopRegister-text">攤商名稱：<span class="ShopRegister-inp"><input type="text" name="name" id="shopName" required/></span></div>
		  	     <span id = "shopName-Div2"></span>
		  	     
		  	     <div class="clearfix"></div>
		  	    </li>        					
		  	      					
		  	      						
		  	   </ul>
		  	   <div class="clearfix"></div>
		  	</div>
		  	
		  	<div class="ShopRegister-communication">
		  	 <h5>通訊資料</h5>
		  	   <ul>
<!-- 		  	    <li>
		  	     <div class="ShopRegister-text">聯絡電話：<span class="ShopRegister-inp"><input type="text" name="phone" id="contect" /></span></div>
		  	     <span id = "phone-Div2"></span>

		  	     
		  	     <div class="clearfix"></div>
		  	    </li> -->
		  	    <li>
		  	     <div class="ShopRegister-text">手機號碼：<span class="ShopRegister-inp"><input type="text" name="phone" id="contect" required/></span></div>
		  	     <span id = "phone-Div2"></span>
		  	     
		  	     <div class="clearfix"></div>
		  	    </li>
		  	    <li>
		  	     <div class="ShopRegister-text">電子信箱：<span class="ShopRegister-inp"><input type="email" name="mail" id="shopRegisteremail" placeholder="abc@gmail.com" required/></span></div>
		  	     <span id = "shop-mailDiv"></span>
		  	     <div class="clearfix"></div>
		  	    </li>        					
		  	      					
		  	      						
		  	   </ul>
		  	   <div class="clearfix"></div>
		  	</div>
		  		<input type="submit" class="ShopRegister-agree" id="ShopRegister-agree" value="註冊">		  	
		  </form>
		 <div class="con1 col-sm-1 col-xs-1"></div>
		 <div class="clearfix"></div>
	 </div>

	      		
	</div>	      	
	<div class="con1 col-sm-2 col-xs-0"></div>
</div>
	
</body>
</html>
<script src="../assets/js/shop-verify.js"></script>
<script src="../assets/js/input-type.js"></script>
<script src="../assets/js/shopRegister.js"></script>

