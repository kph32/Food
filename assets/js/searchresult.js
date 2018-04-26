
function searchgetShopList(){
	// alert("跨出第一步");
	var xhr = new XMLHttpRequest();
		xhr.onreadystatechange=function (){
		if( xhr.readyState == 4){
     		if( xhr.status == 200 ){
	    		//modify here
    			searchshowShopList(xhr.responseText); 
     		}else{
        		alert( xhr.status );
	     	}	
	 	}	
  	}	
	// var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
	var url = "searchgetshopResult.php";

	xhr.open("Get", url, true);
	xhr.send( null );
}
function searchshowShopList(jsonStr){
  	// alert(jsonStr);
  	var itemPlace = document.getElementById('shopListGroup');
	if(itemPlace.hasChildNodes()){
		while(itemPlace.childNodes.length >= 1){
			// 如果小孩長度大於1就刪除，所以其實會刪三次
			itemPlace.removeChild(itemPlace.firstChild);
		}
	}
  	var shop = JSON.parse(jsonStr);
  	// alert(shop.length);
	var str='';
	for (var i = 0; i < shop.length; i++) {
		str +="<div class='ShopResult-cardAll' id='showShopListPlace'>"; 
		str +="<label for='ShopResult-submit'>";
		str +="<a='#' class='ShopResult-card col-sm-3 col-xs-6'>";
		str +="<div class='ShopResult-box'>";
		str +="<form class='ShopResult-Shoplist' name='ShopResult-Shoplist' method='get' action='ShopResultItem.php'>";
		str +="<div class='col-sm-12 col-md-12 ShopResult-head'></div>";
		str +="<img alt='card' src='../assets/images/shopresult/" + shop[i].shop_image + "'>";
		str +="<div class='ShopResult-title'>" + shop[i].shop_name + "</div>";
		str +="<div class='ShopResult-score'>總評價：" + shop[i].scorea + "分 / 共" + shop[i].scoreb + "人評</div>";
	    str +="<div class='ShopResult-time'>營業時間：" + shop[i].open_time + "~" + shop[i].close_time + "</div>";
	    str +="<div class='ShopResult-add'>地點：" + shop[i].address + "</div>";
	    str +="<input type='submit' id='ShopResult-submit' value='點我查看攤商' class='ShopResult-submit'>";
	    str +="<input type='hidden' name='ShopResult-submitshopid' value='" + shop[i].shop_id + "'></form></div>";
		str +="</form></a></div>";
	}
	document.getElementById("shopListGroup").innerHTML = str;
}


function searchgetShopListKeep(){
	// alert("跨出第一步");
	var xhr = new XMLHttpRequest();
		xhr.onreadystatechange=function (){
		if( xhr.readyState == 4){
     		if( xhr.status == 200 ){
	    		//modify here
    			searchshowShopList(xhr.responseText); 
     		}else{
        		alert( xhr.status );
	     	}	
	 	}	
  	}	
	// var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
	var url = "searchgetshopResultKeep.php";

	xhr.open("Get", url, true);
	xhr.send( null );
}


function searchgetShopListTime(){
	// alert("跨出第一步");
	var xhr = new XMLHttpRequest();
		xhr.onreadystatechange=function (){
		if( xhr.readyState == 4){
     		if( xhr.status == 200 ){
	    		//modify here
    			searchshowShopList(xhr.responseText); 
     		}else{
        		alert( xhr.status );
	     	}	
	 	}	
  	}	
	// var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
	var url = "searchgetshopResultTime.php";

	xhr.open("Get", url, true);
	xhr.send( null );
}


function searchgetShopListCoupon(){
	// alert("跨出第一步");
	var xhr = new XMLHttpRequest();
		xhr.onreadystatechange=function (){
		if( xhr.readyState == 4){
     		if( xhr.status == 200 ){
	    		//modify here
    			searchshowShopList(xhr.responseText); 
     		}else{
        		alert( xhr.status );
	     	}	
	 	}	
  	}	
	// var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
	var url = "searchgetshopResultCoupon.php";

	xhr.open("Get", url, true);
	xhr.send( null );
}
